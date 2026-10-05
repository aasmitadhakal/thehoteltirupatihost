<?php

namespace App\Http\Controllers\admin;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countrys = Country::paginate(10);

        return view('admin.country.index', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [
            'title' => 'required|min:3',
        ];
        

        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('country.create')->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'country');
                $input[$image] = $imageName;
            }
        }
        $abroad = Country::create($input);

        // Create Abroad Tabs
        if ($request->has('addmoreothertab')) {
            foreach ($request->addmoreothertab as $item) {
                $abroad->otherabroad()->create([
                    'title' => $item['title'] ?? null,
                    'description' => $item['description'] ?? null,
                ]);
            }
        }

        


        return redirect()->route('country.index')->with('success', 'Country added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        $abroad = $country;
        return view('admin.country.edit', compact('country','abroad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [
            'title' => 'required|min:3',
        ];

        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('country.edit', $country)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {

                if ($country->$image != '') {
                    $file = $country->$image;
                    removeFile($file);
                }

                $imageName = fileUpload($request, $image, 'country');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($country->$image != '') {
                    $file = $country->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        // Handle deleted Tabitems
        if ($request->filled('deleted_tab_ids')) {
            $idsTabDelete = explode(',', $request->input('deleted_tab_ids'));
            $country->otherabroad()->whereIn('id', $idsTabDelete)->delete();
        }
        if ($request->has('addmoreothertab')) {
            foreach ($request->input('addmoreothertab') as $item) {
                if (isset($item['id'])) {
                    $tab = $country->otherabroad()->find($item['id']);
                    if ($tab) {
                        $tab->update([
                            'title' => $item['title'],
                            'description' => $item['description'] ?? null,
                        ]);
                    }
                } else {
                    $country->otherabroad()->create([
                        'title' => $item['title'],
                        'description' => $item['description'] ?? null,
                    ]);
                }
            }
        }

        $country->update($input);

        return redirect()->route('country.index')->with('success', 'Country Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
        $imagelist = ['image', 'image_1', 'career_image', 'university_image', 'visa_image', 'documentation_image', 'financial_image', 'departure_image'];

        foreach ($imagelist as $image) {
            if ($country->$image != '') {
                $file = $country->$image;
                removeFile($file);
            }
        }

        $country->delete();

        return redirect()->route('country.index')->with('success', 'Country Deleted successfully.');
    }
}
