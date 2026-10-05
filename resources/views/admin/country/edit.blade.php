@extends('layouts.admin.master')

@php
    $title = 'Countries';
    $name = 'country';
@endphp

@section('content')
<style>
        label {
            font-weight: 500 !important;
            text-transform: uppercase;
            margin-bottom: 5px;
            line-height: 200%;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-link.active:hover,
        .nav-tabs .nav-link.active:focus {
            background: #e7e7ff;
            background-color: #7174fe;
            color: white;
        }
    </style>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Edit {{ $title }}</h5>
            <small class="text-muted float-end">
                <a href="{{ route($name . '.index') }}"
                    class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2">
                    <i class='ri-arrow-left-line ri-lg'></i>
                    Back
                </a>
            </small>
        </div>
    </div>

    <div>
        <form action="{{ route($name . '.update', ${$name}->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row justify-content-center g-4">

                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-4 col-md-8">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="title" value="{{ old('title', ${$name}->title) }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label for="slug" class="form-label">slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Slug" value="{{ old('slug', ${$name}->slug) }}" />
                                    @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea class="form-control" id="short_description" name="short_description" placeholder="Short Description"
                                    rows="4">{{ old('short_description', ${$name}->short_description) }}</textarea>
                                @error('short_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control ckeditor" id="description" name="description" placeholder="Description" rows="4">{{ old('description', ${$name}->description) }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control dropify" type="file" id="image" name="image"
                                    value="{{ old('image', ${$name}->image) }}"
                                    data-default-file="{{ asset(${$name}->image) }}" />
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-check form-switch form-switch-danger">
                                    <input class="form-check-input custom-switch-red" type="checkbox" id="delete-image"
                                        name="deleteimage" />
                                    <label class="form-check-label" for="delete-image">Delete</label>
                                </div>
                            </div>
                        </div>
                    </div>


                     {{-- <div class="card mt-4">
                        <div class="card-body">
                            @include('admin.country.additional_details.edit')
                        </div>
                    </div>  --}}
                    <div class="row">
                        <div class="card card-body my-3 mx-3 shadow br-8 p-4">
                            <ul class="nav nav-tabs px-4" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="othertab-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-othertab" type="button" role="tab"
                                        aria-controls="othertab" aria-selected="true">Other Information
                                    </button>
                                </li>

                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#nav-seo"
                                        type="button" role="tab" aria-controls="seo" aria-selected="false">SEO
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="otherinfo-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-otherinfo" type="button" role="tab"
                                        aria-controls="otherinfo" aria-selected="false" style="font-size: 14px">Faq
                                    </button>
                                </li> --}}
                            </ul>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-othertab" role="tabpanel"
                                    aria-labelledby="nav-othertab-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicAddRemoveOtherTab"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Abroad Tab Section</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $j = 0; @endphp
                                                    @if (old('addmoreothertab'))
                                                        @foreach (old('addmoreothertab') as $tab)
                                                            <tr>
                                                                <td style="width: 95%">
                                                                    <input class="form-control mb-3" type="text"
                                                                        name="addmoreothertab[{{ $j }}][title]"
                                                                        placeholder="Enter Title"
                                                                        value="{{ $tab['title'] ?? '' }}">
                                                                    <textarea class="form-control editortab editortab{{ $j }}"
                                                                        name="addmoreothertab[{{ $j }}][description]">{{ $tab['description'] ?? '' }}</textarea>

                                                                    @if (isset($tab['id']))
                                                                        <input type="hidden"
                                                                            name="addmoreothertab[{{ $j }}][id]"
                                                                            value="{{ $tab['id'] }}">
                                                                    @endif
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <button class="btn btn-link remove-tr-otherinfo"
                                                                        type="button">
                                                                        <span
                                                                            class="badge badge-center rounded-pill bg-danger">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @php $j++; @endphp
                                                        @endforeach
                                                    @elseif(isset($abroad) && $abroad->otherabroad)
                                                        @foreach ($abroad->otherabroad as $tab)
                                                            <tr>
                                                                <td style="width: 95%">
                                                                    <input class="form-control mb-3" type="text"
                                                                        name="addmoreothertab[{{ $j }}][title]"
                                                                        placeholder="Enter Title"
                                                                        value="{{ $tab->title }}">
                                                                    <textarea class="form-control editortab editortab{{ $j }}"
                                                                        name="addmoreothertab[{{ $j }}][description]">{{ $tab->description }}</textarea>
                                                                    <input type="hidden"
                                                                        name="addmoreothertab[{{ $j }}][id]"
                                                                        value="{{ $tab->id }}">
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <button class="btn btn-link remove-tr-othertab"
                                                                        type="button">
                                                                        <span
                                                                            class="badge badge-center rounded-pill bg-danger">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @php $j++; @endphp
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td style="width: 95%">
                                                                <input class="form-control mb-3" type="text"
                                                                    name="addmoreothertab[0][title]"
                                                                    placeholder="Enter Title">
                                                                <textarea class="form-control editortab editortab0" name="addmoreothertab[0][description]"></textarea>
                                                            </td>
                                                            <td class="align-middle text-center">
                                                                <button class="btn btn-link remove-tr-otherinfo"
                                                                    type="button">
                                                                    <span
                                                                        class="badge badge-center rounded-pill bg-danger">
                                                                        <i class="fa fa-times"></i>
                                                                    </span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @php $j = 1; @endphp
                                                    @endif
                                                </tbody>
                                            </table>

                                            <button class="btn btn-primary mt-3" id="add-btn-othertab" type="button">
                                                <i class="fa fa-plus me-1"></i> Add Tab
                                            </button>

                                            <input id="deletedTab" type="hidden" name="deleted_tab_ids" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Seo
                                            Title</label>
                                        <input class="form-control " id="" type="text" name="seo_title"
                                            value="" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Seo
                                            Keywords</label>
                                        <input class="form-control " id="" type="text" name="seo_keywords"
                                            value="" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Seo
                                            Description</label>

                                        <textarea class="form-control " id="" name="seo_description" cols="30" rows="8"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Seo Schema
                                        </label>

                                        <textarea class="form-control " id="" name="seo_schema" cols="30" rows="8"></textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-otherinfo" role="tabpanel"
                                    aria-labelledby="nav-otherinfo-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicAddRemoveOtherInfo"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Faq Tab</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $k = 0; @endphp

                                                    @if (old('addmoreotherinfo'))
                                                        @foreach (old('addmoreotherinfo') as $faq)
                                                            <tr>
                                                                <td style="width: 95%">
                                                                    <input class="form-control mb-3" type="text"
                                                                        name="addmoreotherinfo[{{ $k }}][title]"
                                                                        placeholder="Enter Title"
                                                                        value="{{ $faq['title'] ?? '' }}">
                                                                    <textarea class="form-control editor editor{{ $k }}"
                                                                        name="addmoreotherinfo[{{ $k }}][description]">{{ $faq['description'] ?? '' }}</textarea>

                                                                    @if (isset($faq['id']))
                                                                        <input type="hidden"
                                                                            name="addmoreotherinfo[{{ $k }}][id]"
                                                                            value="{{ $faq['id'] }}">
                                                                    @endif
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <button class="btn btn-link remove-tr-otherinfo"
                                                                        type="button">
                                                                        <span
                                                                            class="badge badge-center rounded-pill bg-danger">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @php $k++; @endphp
                                                        @endforeach
                                                    @elseif(isset($abroad) && $abroad->faqs)
                                                        @foreach ($abroad->faqs as $faq)
                                                            <tr>
                                                                <td style="width: 95%">
                                                                    <input class="form-control mb-3" type="text"
                                                                        name="addmoreotherinfo[{{ $k }}][title]"
                                                                        placeholder="Enter Title"
                                                                        value="{{ $faq->title }}">
                                                                    <textarea class="form-control editor editor{{ $k }}"
                                                                        name="addmoreotherinfo[{{ $k }}][description]">{{ $faq->description }}</textarea>
                                                                    <input type="hidden"
                                                                        name="addmoreotherinfo[{{ $k }}][id]"
                                                                        value="{{ $faq->id }}">
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <button class="btn btn-link remove-tr-otherinfo"
                                                                        type="button">
                                                                        <span
                                                                            class="badge badge-center rounded-pill bg-danger">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            @php $k++; @endphp
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td style="width: 95%">
                                                                <input class="form-control mb-3" type="text"
                                                                    name="addmoreotherinfo[0][title]"
                                                                    placeholder="Enter Title">
                                                                <textarea class="form-control editor editor0" name="addmoreotherinfo[0][description]"></textarea>
                                                            </td>
                                                            <td class="align-middle text-center">
                                                                <button class="btn btn-link remove-tr-otherinfo"
                                                                    type="button">
                                                                    <span
                                                                        class="badge badge-center rounded-pill bg-danger">
                                                                        <i class="fa fa-times"></i>
                                                                    </span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @php $k = 1; @endphp
                                                    @endif
                                                </tbody>
                                            </table>

                                            <button class="btn btn-primary mt-3" id="add-btn-otherinfo" type="button">
                                                <i class="fa fa-plus me-1"></i> Add FAQ
                                            </button>

                                            <input id="deletedFaqIds" type="hidden" name="deleted_faq_ids"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body">

                            <div class="mb-4">
                                <label for="status" class="form-label">status</label>
                                <select id="status" name="status" class="form-select">
                                    <option value="1" @if (old('status', ${$name}->status) == 1) selected @endif>Published
                                    </option>
                                    <option value="0" @if (old('status', ${$name}->status) == 0) selected @endif>Draft
                                    </option>
                                </select>

                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4 ">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" class="form-control" id="order" name="order" placeholder="1"
                                    value="{{ old('order', ${$name}->order) }}" />
                                @error('order')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image_1" class="form-label">Image 2</label>
                                <input class="form-control dropify" type="file" id="image_1" name="image_1"
                                    value="{{ old('image_1', ${$name}->image_1) }}"
                                    data-default-file="{{ asset(${$name}->image_1) }}" />
                                @error('image_1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-check form-switch form-switch-danger">
                                    <input class="form-check-input custom-switch-red" type="checkbox" id="delete-image_1"
                                        name="deleteimage_1" />
                                    <label class="form-check-label" for="delete-image_1">Delete</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary mt-4">
                                <i class='bx bx-refresh'></i>
                                Update
                            </button>

                            <a href="{{ route('university.index', ${$name}->id) }}" type="button"
                                class="btn btn-sm btn-info mt-4">
                                <i class='bx bxs-graduation'></i>
                                University
                            </a>
                        </div>
                    </div>

                    @include('admin.global.form.seo.edit')

                </div>
            </div>

        </form>
    </div>
     <script>
        let j = $('#dynamicAddRemoveOtherTab tbody tr').length;
        $('#add-btn-othertab').on('click', function() {
            j++;
            $('#dynamicAddRemoveOtherTab tbody').append(`
                <tr>
                    <td style="width: 95%">
                        <input class="form-control mb-3" type="text" name="addmoreothertab[${j}][title]"
                            placeholder="Enter Title" />
                        <textarea class="form-control editortab${j}" name="addmoreothertab[${j}][description]"></textarea>
                    </td>
                    <td class="align-middle text-center">
                        <button class="btn btn-link remove-tr-othertab" type="button">
                            <span class="badge badge-center rounded-pill bg-danger">
                                <i class="fa fa-times"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            `);
            ckeditor('editortab' + j);
        });

        $(document).on('click', '.remove-tr-othertab', function() {
            const row = $(this).closest('tr');
            const idInput = row.find('input[name*="[id]"]');
            if (idInput.length) {
                let currentVal = $('#deletedTab').val();
                let id = idInput.val();
                $('#deletedTab').val(currentVal ? currentVal + ',' + id : id);
            }
            row.remove();
        });

        // faq section
        let k = $('#dynamicAddRemoveOtherInfo tbody tr').length;
        $('#add-btn-otherinfo').on('click', function() {
            k++;
            $('#dynamicAddRemoveOtherInfo tbody').append(`
                <tr>
                    <td style="width: 95%">
                        <input class="form-control mb-3" type="text" name="addmoreotherinfo[${k}][title]"
                            placeholder="Enter Title" />
                        <textarea class="form-control editor${k}" name="addmoreotherinfo[${k}][description]"></textarea>
                    </td>
                    <td class="align-middle text-center">
                        <button class="btn btn-link remove-tr-otherinfo" type="button">
                            <span class="badge badge-center rounded-pill bg-danger">
                                <i class="fa fa-times"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            `);
            ckeditor('editor' + k);
        });

        $(document).on('click', '.remove-tr-otherinfo', function() {
            const row = $(this).closest('tr');
            const idInput = row.find('input[name*="[id]"]');
            if (idInput.length) {
                let currentVal = $('#deletedFaqIds').val();
                let id = idInput.val();
                $('#deletedFaqIds').val(currentVal ? currentVal + ',' + id : id);
            }
            row.remove();
        });

        // only initialize *existing* editors on page load
        $('textarea.editor').each(function() {
            const classes = $(this).attr('class').split(/\s+/);
            classes.forEach(function(c) {
                if (c !== 'editor' && c.startsWith('editor')) {
                    ckeditor(c);
                }
            });
        });

        $('textarea.editortab').each(function() {
            const classes = $(this).attr('class').split(/\s+/);
            classes.forEach(function(c) {
                if (c !== 'editortab' && c.startsWith('editortab')) {
                    ckeditor(c);
                }
            });
        });
    </script>
@endsection
