<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\InterviewQuestion;
use Illuminate\Support\Facades\Validator;

class InterviewQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $interviewquestions = InterviewQuestion::paginate(10);

        return view('admin.interviewquestion.index', compact('interviewquestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.interviewquestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
            'question' => 'required|min:3',
        ];

        $imagelist = ['image_1'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('interviewquestion.create')->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'interviewquestion');
                $input[$image] = $imageName;
            }
        }

        $interview = InterviewQuestion::create($input);

        return redirect()->route('interviewquestion.index')->with('success', 'Interview Question added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InterviewQuestion $interviewQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InterviewQuestion $interviewquestion)
    {
        //
        return view('admin.interviewquestion.edit', compact('interviewquestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InterviewQuestion $interviewquestion)
    {
        //
        $input = $request->all();

        $rules = [
            'question' => 'required|min:3',
        ];
        $imagelist = ['image'];
        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->route('interviewquestion.edit', $interviewquestion)->withInput()->withErrors($validator);
        }
        foreach ($imagelist as $image) {
            if ($request->$image != '') {

                if ($interviewquestion->$image != '') {
                    $file = $interviewquestion->$image;
                    removeFile($file);
                }

                $imageName = fileUpload($request, $image, 'interviewquestion');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete'.$image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($interviewquestion->$image != '') {
                    $file = $interviewquestion->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $interviewquestion->update($input);

        return redirect()->route('interviewquestion.index')->with('success', 'interviewQuestion Updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InterviewQuestion $interviewQuestion)
    {
        //
        $imagelist = ['image'];
        foreach ($imagelist as $image) {
            if ($interviewQuestion->$image != '') {
                $file = $interviewQuestion->$image;
                removeFile($file);
            }
        }
        $interviewQuestion->delete();
        return redirect()->route('interviewquestion.index')->with('success', 'interviewQuestion Deleted successfully.');
    }
}
