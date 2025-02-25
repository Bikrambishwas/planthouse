@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.page') }}">Pages</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $row->title }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            {{-- <button class="btn btn-primary waves-effect waves-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Page</button> --}}
        </div>

    </div>

    <form action="{{ route('admin.page.update', $row->id) }}" id="updatepage" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header">EDIT PAGES</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $row->title }}"
                                    placeholder="John Doe">
                                <span class="invalid-feedback title_error"></span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $row->slug }}"
                                    placeholder="John Doe">
                                <span class="invalid-feedback slug_error"></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="dashed-box">
                                    <img src="{{ asset('uploads/page_images/' . $row->image) }}" id="editshowimage"
                                        alt="">
                                </div>
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="John Doe">
                                <span class="invalid-feedback image_error"></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" id="" cols="30" rows="5">{!! $row->short_description !!}</textarea>
                                <span class="invalid-feedback short_description_error"></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label">Description</label>
                                <textarea name="short_description" class="form-control editor" id="" cols="30" rows="10">{!! $row->description !!}</textarea>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>

                            <h5 class="card-header">SEARCH ENGINE OPTIMIZATION <span class="text-danger">(OPTIONAL)</span>
                            </h5>

                            <div class="col-md-12 mb-2">
                                <label class="form-label">SEO Title</label>
                                <input type="text" class="form-control" name="seo_title" placeholder="John Doe"
                                    value="{{ $row->seo_title }}">
                                <span class="invalid-feedback seo_title_error"></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label">SEO Description</label>
                                <textarea name="seo_description" class="form-control" id="" cols="30" rows="4">{!! $row->seo_description !!}</textarea>
                                <span class="invalid-feedback seo_description_error"></span>
                            </div>
                            <input type="hidden" name="" id="row_idpage" value="{{ $row->id }}">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-1">Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">Status</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                        value="Active" {{ $row->status == 'Active' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio1">Active
                                    </label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                        value="Inactive" {{ $row->status == 'Inactive' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <script src="{{ asset('backend/assets/js/summernote-lite.min.js') }}"></script>
    <script>
        $(".editor").each(function(el) {
            var $this = $(this);
            var buttons = $this.data("buttons");
            var minHeight = $this.data("min-height");
            var placeholder = $this.attr("placeholder");
            var format = $this.data("format");

            buttons = !buttons ? [
                    ["font", ["bold", "underline", "italic", "clear"]],
                    ['fontname', ['fontname']],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["style", ["style"]],
                    ['fontsize', ['fontsize']],
                    ["color", ["color"]],
                    ["insert", ["link", "picture", "video"]],
                    ["view", ["undo", "redo", "codeview"]], // Added "codeview" here
                ] :
                buttons;
            placeholder = !placeholder ? "" : placeholder;
            minHeight = !minHeight ? 250 : minHeight;
            format = typeof format == "undefined" ? false : format;

            $this.summernote({
                toolbar: buttons,
                placeholder: placeholder,
                height: minHeight,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                disableDragAndDrop: true,
                callbacks: {
                    // Add any custom callbacks here if needed
                },
            });

            var nativeHtmlBuilderFunc = $this.summernote(
                "module",
                "videoDialog"
            ).createVideoNode;

            $this.summernote("module", "videoDialog").createVideoNode = function(url) {
                var wrap = $(
                    '<div class="embed-responsive embed-responsive-16by9"></div>'
                );
                var html = nativeHtmlBuilderFunc(url);
                html = $(html).addClass("embed-responsive-item");
                return wrap.append(html)[0];
            };
        });


        $('.updatepage').submit(function(e) {
            e.preventDefault();
            var page_id = $('#row_idpage').val();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/page/update/' + page_id,
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                beforeSend: function() {
                    $(document).find('span.invalid-feedback').text('');
                },
                success: function(response) {
                    if (response.status == 400) {
                        $.each(response.errors, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('.success-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.success-toast')
                        toast.show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);

                    }
                }
            });
        });
    </script>
@endsection
