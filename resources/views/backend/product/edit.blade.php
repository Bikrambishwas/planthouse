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
                        <a href="{{ route('admin.product') }}">Product</a>
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

    <form action="{{ route('admin.product.update', $row->id) }}" id="updateproduct" method="POST"
        enctype="multipart/form-data">
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
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" id="" cols="30" rows="5">{!! $row->short_description !!}</textarea>
                                <span class="invalid-feedback short_description_error"></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control editor" id="" cols="30" rows="10">{!! $row->description !!}</textarea>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>

                            <h5 class="card-header">GALLERY IMAGES
                            </h5>

                            <div class="col-md-12 mb-3">
                                @if (!empty($galleri_images))
                                    <div class="media-holder mb-2">

                                        @foreach ($galleri_images as $image)
                                            <div class="media-image-holder position-relative"
                                                style="width:150px; height:100px; border:1px solid #ccc; border-radius:8px; display:flex; justify-content:center; align-items:center;">
                                                <img src="{{ asset('uploads/product_images/' . $image) }}" alt="Preview"
                                                    style="width:100%; height:100%; object-fit:cover;">
                                                <span class="inbtn inbtndelete" data-imgname="{{ $image }}"
                                                    style="position:absolute; top:-10px; right:-10px; background:#f77f7fcf; color:white; padding:2px; cursor:pointer;">
                                                    <i class="fa fa-times fa-fw"></i>
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="media-holder d-flex flex-wrap gap-2 mb-2" id="imagePreview"></div>
                                @endif
                                <input name="gallery_images[]" type="file" class="form-control" id="galleryInput"
                                    multiple>
                                <span id="fileCount"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header"> AMINITIES
                    </h5>
                    @php
                        $v_datas = unserialize($row->details);

                    @endphp
                    <div class="card-body">

                        <div class="col-md-6 mb-3">
                            <label for="product_type" class="form-label">Product Type</label>
                            <select name="type" id="product_type" class="form-select">
                                <option value="" hidden selected disabled>Select Product Type</option>
                                <option value="simple" {{ $row->type == 'simple' ? 'selected' : '' }}>Simple Product
                                </option>
                                <option value="variable" {{ $row->type == 'variable' ? 'selected' : '' }}>Variable Product
                                </option>
                            </select>
                        </div>


                        <!-- Simple Product Section -->
                        <div id="simple_product_section" class="row" style="display: none;">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">MRP</label>
                                <input type="number" class="form-control" name="marked_price"
                                    value="{{ $row->marked_price }}" placeholder="Enter MRP">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Selling Price</label>
                                <input type="number" class="form-control" name="selling_price"
                                    value="{{ $row->selling_price }}" placeholder="Enter Selling Price">
                            </div>
                        </div>

                        <!-- Variable Product Section -->
                        <div id="variable_product_section" style="display: none;">
                            <h5 style="margin-left: 23px">Size - Marked Price - Selling Price - Image</h5>
                            @if ($row->type == 'variable')
                                @foreach ($v_datas as $ind => $item)
                                    <div class="card main-card"
                                        style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px !important;">
                                        <div class="card-body main-card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control"
                                                        name="plans[{{ $ind }}][title]"
                                                        value="{{ $item['title'] }}" id="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Marked Price</label>
                                                    <input type="text" class="form-control"
                                                        name="plans[{{ $ind }}][marked_price]"
                                                        value="{{ $item['marked_price'] }}"
                                                        placeholder="Enter Marked Price">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Selling Price</label>
                                                    <input type="text" class="form-control"
                                                        name="plans[{{ $ind }}][selling_price]"
                                                        value="{{ $item['selling_price'] }}"
                                                        placeholder="Enter Selling Price">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Image</label>
                                                    <input type="file" class="form-control"
                                                        name="plans[{{ $ind }}][image]"
                                                        placeholder="Rs 1200000">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <p class="card-title">Facilities</p>
                                                <div class="facilities">
                                                    @php
                                                        $details = $item['facilities'];
                                                        $in = 0;
                                                        $countdetail = count($details);
                                                    @endphp
                                                    @if ($item['facilities'] != null)
                                                        @foreach ($details as $pitem)
                                                            <div class="facility-row row">
                                                                <div class="col-md-11">
                                                                    <div class="row">
                                                                        <div class="mb-2 col-md-6">
                                                                            <label class="form-label">Title</label>
                                                                            <input type="text" class="form-control"
                                                                                name="plans[{{ $ind }}][facilities][{{ $in }}][title]"
                                                                                value="{{ $pitem['title'] }}"
                                                                                placeholder="eg. Social Media Handling">
                                                                        </div>
                                                                        <div class="mb-2 col-md-6">
                                                                            <label class="form-label">Marked Price</label>
                                                                            <input type="text" class="form-control"
                                                                                name="plans[{{ $ind }}][facilities][{{ $in }}][marked_price]"
                                                                                value="{{ $pitem['marked_price'] }}"
                                                                                placeholder="eg. Social Media Handling">
                                                                        </div>
                                                                        <div class="mb-2 col-md-6">
                                                                            <label class="form-label">Selling Price</label>
                                                                            <input type="text" class="form-control"
                                                                                name="plans[{{ $ind }}][facilities][{{ $in }}][selling_price]"
                                                                                value="{{ $pitem['selling_price'] }}"
                                                                                placeholder="eg. Social Media Handling">
                                                                        </div>
                                                                        <div class="mb-2 col-md-6">
                                                                            <label class="form-label">Image</label>
                                                                            <input type="file" class="form-control"
                                                                                name="plans[{{ $ind }}][facilities][{{ $in }}][image]"
                                                                                placeholder="eg. Social Media Handling">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1 d-flex align-items-center"
                                                                    style="margin-top: 20px; gap:5px">
                                                                    @if ($in == 0)
                                                                        <a onclick="addFacility(this)"
                                                                            data-fac-count="{{ $countdetail }}"
                                                                            class="pull-right dropdown-item add-facility-btn ad-btn">
                                                                            <i class="fa-solid fa-plus"></i>
                                                                        </a>
                                                                    @endif
                                                                    <a onclick="removeFacility(this)"
                                                                        class="dropdown-item rem-btn">
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            @php $in++; @endphp
                                                        @endforeach
                                                    @else
                                                        <div class="facility-row row">
                                                            <div class="col-md-11">
                                                                <div class="row">
                                                                    <div class="mb-2 col-md-6">
                                                                        <label class="form-label">Title</label>
                                                                        <input type="text" class="form-control"
                                                                            name="plans[0][facilities][0][title]"
                                                                            placeholder="eg. Social Media Handling">
                                                                    </div>
                                                                    <div class="mb-2 col-md-6">
                                                                        <label class="form-label">Marked Price</label>
                                                                        <input type="text" class="form-control"
                                                                            name="plans[0][facilities][0][marked_price]"
                                                                            placeholder="eg. Social Media Handling">
                                                                    </div>
                                                                    <div class="mb-2 col-md-6">
                                                                        <label class="form-label">Selling Price</label>
                                                                        <input type="text" class="form-control"
                                                                            name="plans[0][facilities][0][selling_price]"
                                                                            placeholder="eg. Social Media Handling">
                                                                    </div>
                                                                    <div class="mb-2 col-md-6">
                                                                        <label class="form-label">Image</label>
                                                                        <input type="file" class="form-control"
                                                                            name="plans[0][facilities][0][image]"
                                                                            placeholder="eg. Social Media Handling">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1 d-flex align-items-center"
                                                                style="margin-top: 20px; gap:5px">
                                                                <a onclick="addFacility(this)"
                                                                    class="dropdown-item add-facility-btn ad-btn"
                                                                    data-fac-count="0">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </a>
                                                                <a onclick="removeFacility(this)"
                                                                    class="dropdown-item rem-btn">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="card main-card"
                                    style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px !important;">
                                    <div class="card-body main-card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="plans[0][title]"
                                                    id="">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Marked Price</label>
                                                <input type="text" class="form-control" name="plans[0][marked_price]"
                                                    placeholder="Enter Marked Price">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Selling Price</label>
                                                <input type="text" class="form-control" name="plans[0][selling_price]"
                                                    placeholder="Enter Selling Price">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" name="plans[0][image]"
                                                    placeholder="Rs 1200000">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <p class="card-title">Facilities</p>
                                            <div class="facilities">
                                                <div class="facility-row row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <div class="mb-2 col-md-6">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="plans[0][facilities][0][title]"
                                                                    placeholder="eg. Social Media Handling">
                                                            </div>
                                                            <div class="mb-2 col-md-6">
                                                                <label class="form-label">Marked Price</label>
                                                                <input type="text" class="form-control"
                                                                    name="plans[0][facilities][0][marked_price]"
                                                                    placeholder="eg. Social Media Handling">
                                                            </div>
                                                            <div class="mb-2 col-md-6">
                                                                <label class="form-label">Selling Price</label>
                                                                <input type="text" class="form-control"
                                                                    name="plans[0][facilities][0][selling_price]"
                                                                    placeholder="eg. Social Media Handling">
                                                            </div>
                                                            <div class="mb-2 col-md-6">
                                                                <label class="form-label">Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="plans[0][facilities][0][image]"
                                                                    placeholder="eg. Social Media Handling">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 d-flex align-items-center"
                                                        style="margin-top: 20px; gap:5px">
                                                        <a onclick="addFacility(this)"
                                                            class="dropdown-item add-facility-btn ad-btn"
                                                            data-fac-count="0">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                        <a onclick="removeFacility(this)" class="dropdown-item rem-btn">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="dynamic-addmore"></div>
                            <button type="button" class="btn btn-primary mt-1" onclick="addMoreCard(event)">
                                <i class="fa-regular fa-plus"></i> Add More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <h5 class="card-header">SEARCH ENGINE OPTIMIZATION <span class="text-danger">(OPTIONAL)</span>
                    </h5>
                    <div class="card-body">
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
                        <input type="hidden" name="" id="row_idproduct" value="{{ $row->id }}">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary waves-effect waves-light mt-1">Save
                                Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="position: sticky; top:110px">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="dashed-box">
                                        <img src="{{ asset('uploads/product_images/' . $row->image) }}"
                                            id="editshowimage" alt="">
                                    </div>
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="John Doe">
                                    <span class="invalid-feedback image_error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="card mt-2">
                        <h5 class="card-header">Category</h5>
                        <div class="card-body">
                            <div class="row">
                                <ul class="accounts">
                                    @foreach ($categories as $index => $item)
                                        <li class="cat-menu"><label><input type="radio" name="category_id"
                                                    value="{{ $item->id }}"
                                                    {{ $row->category_id == $item->id ? 'checked' : '' }}>
                                                {{ $item->title }}</label>
                                            <ul class="subaccounts">
                                                @foreach ($item->children as $child)
                                                    <li class="cat-menu"><label><input type="radio" name="category_id"
                                                                value="{{ $child->id }}"
                                                                {{ $row->category_id == $child->id ? 'checked' : '' }}>
                                                            {{ $child->title }}</label></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <h5 class="card-header">Keywords</h5>
                        <div class="card-body">
                            <div class="row">
                                <select class="select2 form-select" name="keyword[]" style="width: 100%;"
                                    multiple="multiple">
                                    @if (!empty($row->keyword))
                                        @php
                                            $keyword_array = unserialize($row->keyword);
                                        @endphp
                                        @foreach ($keywords as $keyword)
                                            <option value="{{ $keyword }}" <?php echo in_array($keyword, $keyword_array) ? 'selected' : ''; ?>>
                                                {{ $keyword }}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($keywords as $keyword)
                                            <option value="{{ $keyword }}">{{ $keyword }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                <div class="sub-text">Please select or type the keywords</div>
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


        $('#updateproduct').submit(function(e) {
            e.preventDefault();
            var product_id = $('#row_idproduct').val();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/product/update/' + product_id,
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

        $(document).ready(function() {
            let selectedFiles = [];

            $('#galleryInput').on('change', function(e) {
                const newFiles = Array.from(e.target.files);
                const fileInput = $(this)[0];

                // Append new files to selectedFiles array
                newFiles.forEach(file => {
                    if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                        selectedFiles.push(file);
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imageBlock = $(`
                        <div class="media-image-holder position-relative" style="width:150px; height:100px; border:1px solid #ccc; border-radius:8px; display:flex; justify-content:center; align-items:center;">
                            <img src="${e.target.result}" alt="Preview" style="width:100%; height:100%; object-fit:cover;">
                            <span class="inbtn inbtndelete" style="position:absolute; top:-10px; right:-10px; background:#f77f7fcf; color:white; padding:2px; cursor:pointer;">
                                <i class="fa fa-times fa-fw"></i>
                            </span>
                        </div>
                    `);

                            // Remove preview and update selected files list
                            imageBlock.find('.inbtndelete').on('click', function() {
                                selectedFiles = selectedFiles.filter(f => f.name !==
                                    file.name || f.size !== file.size);
                                imageBlock.remove();
                                updateFileInput();
                            });

                            $('#imagePreview').append(imageBlock);
                        };
                        reader.readAsDataURL(file);
                    }
                });

                updateFileInput();
            });

            // Function to update file input with selected files
            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                selectedFiles.forEach(file => dataTransfer.items.add(file));
                $('#galleryInput')[0].files = dataTransfer.files;

                // Update file count display
                $('#fileCount').text(`${selectedFiles.length} files selected`);
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll(".inbtndelete");

            deleteButtons.forEach(btn => {
                btn.addEventListener("click", function() {
                    const filename = this.getAttribute("data-imgname"); // Updated line

                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'delete_images_filenames[]';
                    input.value = filename;

                    document.querySelector('form').appendChild(input);
                    this.parentElement.remove();
                });
            });
        });




        $(document).ready(function() {
            function toggleProductSections() {
                const selectedType = $('#product_type').val();

                // Hide both sections initially
                $('#simple_product_section, #variable_product_section').hide();

                // Show based on selected type
                if (selectedType === 'simple') {
                    $('#simple_product_section').show();
                } else if (selectedType === 'variable') {
                    $('#variable_product_section').show();
                }
            }
            // Run function on page load to set initial visibility
            toggleProductSections();

            // Run function on change
            $('#product_type').change(toggleProductSections);
        });




        let cardIndex = 0; // Initialize the card index

        function addMoreCard(event) {
            if (event) event.preventDefault();

            // Clone the main card
            let mainCard = document.querySelector('.main-card').cloneNode(true);
            let dynamicAddMore = document.querySelector('.dynamic-addmore');

            // Increment the card index
            cardIndex++;

            // Update name attributes for the cloned card
            mainCard.querySelectorAll('input, select, textarea').forEach(element => {
                let name = element.getAttribute('name');
                if (name) {
                    let updatedName = name.replace(/\[\d+\]/, `[${cardIndex}]`);
                    element.setAttribute('name', updatedName);
                    element.value = ''; // Clear the value
                }
            });

            // Reset the facilities for the new card
            let facilities = mainCard.querySelector('.facilities');
            facilities.innerHTML = facilities.firstElementChild.outerHTML; // Keep only the first row
            facilities.querySelectorAll('input').forEach(input => input.value = '');

            // Reset the facility index for this new card
            mainCard.querySelectorAll('.add-facility-btn').forEach(btn => {
                btn.setAttribute('data-fac-count', 0);
            });

            // Append the new card
            dynamicAddMore.appendChild(mainCard);
        }

        function addFacility(button) {
            let facilitiesContainer = button.closest('.facilities');
            let facilityRows = facilitiesContainer.querySelectorAll('.facility-row');
            let currentCount = parseInt(button.getAttribute('data-fac-count')) || 0;

            let newIndx = currentCount + 1;

            // Clone the last facility row
            let newFacilityRow = facilityRows[facilityRows.length - 1].cloneNode(true);

            // Update the name attribute for the new row
            newFacilityRow.querySelectorAll('input, textarea').forEach(input => {
                let name = input.getAttribute('name');
                if (name) {
                    let updatedName = name.replace(/\[facilities\]\[\d+\]/, `[facilities][${newIndx}]`);
                    input.setAttribute('name', updatedName);
                    input.value = ''; // Clear the value
                }
            });

            let addButtonInRow = newFacilityRow.querySelector('.add-facility-btn');
            if (addButtonInRow) {
                addButtonInRow.remove();
            }

            // Append the new facility row
            facilitiesContainer.appendChild(newFacilityRow);

            // Update the facility count
            button.setAttribute('data-fac-count', newIndx);
        }

        function removeFacility(button) {
            let facilityRow = button.closest('.facility-row');
            let facilitiesContainer = button.closest('.facilities');
            if (facilitiesContainer.querySelectorAll('.facility-row').length > 1) {
                facilityRow.remove();
            } else {
                alert("At least one facility is required!");
            }
        }

        function removeCard(button) {
            let card = button.closest('.main-card');
            card.remove();
        }




        var $jq = jQuery.noConflict(); // Assign jQuery to a new variable

        $jq(document).ready(function() {
            $jq('.select2').select2({
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>
@endsection
