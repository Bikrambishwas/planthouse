@extends('backend.app')
@section('content')
    <!--PAGE HEADER-->
    <div class="contents">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
                    <li class="breadcrumb-item active">Category </li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="dt-button create-new btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScroll">
                        <span><i class="fa-regular fa-plus"></i> Add Category</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--PAGE HEADER-->
    {{-- ENd of Header --}}

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="">
                <div class="">
                    <div class="sortable_main_box grid-3">
                        @foreach ($categories as $index => $item)
                            <div class="sorting-boxs-outer">
                                <div class="sorting-boxs" data-position="{{ $item->position }}"
                                    data-index="{{ $item->id }}">
                                    <div>{{ ++$index }}</div>
                                    <div style="font-weight: bold;">{{ $item->title }}</div>
                                    <div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item opencanvasform-category"
                                                        data-id="{{ $item->id }}" data-bs-toggle="offcanvas"
                                                        data-bs-target="#offcanvasScrolledit{{ $item->id }}"><i
                                                            class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item deletebtn" href="#"
                                                        data-id="{{ $item->id }}"><i class="fa-solid fa-trash"></i>
                                                        Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sorting-boxs-option-outer">
                                    <div class="sortable-boxs-optionss">
                                        @foreach ($item->children as $coindex => $co)
                                            <div class="sorting-boxs-option-box" data-position="{{ $co['position'] }}"
                                                data-index="{{ $co->id }}">
                                                <div><i class="fa-solid fa-up-down-left-right"></i></div>
                                                <div> {{ $co->title }}
                                                </div>
                                                <div>
                                                    <div class="btn-group">
                                                        <a class="dropdown-item opencanvasform-category"
                                                            data-id="{{ $co->id }}" data-bs-toggle="offcanvas"
                                                            data-bs-target="#offcanvasScrolledit{{ $co->id }}"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a class="dropdown-item deletebtn" href="#"
                                                            data-id="{{ $co->id }}"><i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add New Feature --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasScroll" aria-labelledby="offcanvasScrollLabel">
        <div class="offcanvas-header ">
            <h5 id="offcanvasScrollLabel" class="offcanvas-title">Add New Category</h5>
            <button type="button" class="btn-close text-reset btn-light" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-bodyform mx-2">
            <form id="addcategory" method="POST" class="add-new-record modal-content pt-0">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                            <span class="invalid-feedback title_error"></span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Choose Parent</label>
                            <select class="form-control" name="parent">
                                <option value="0">Its Parent itself</option>
                                @foreach ($parents as $k => $p_title)
                                    <option value="{{ $k }}">{{ $p_title }}</option>
                                @endforeach
                            </select>
                            <div class="form-text">Choose Parent</div>
                            <span class="invalid-feedback parent_error"></span>
                        </div>
                        <div class="mb-2">
                            <div class="dashed-box">
                                <img src="" id="preview-image" alt="Preview"
                                    style="max-width: 100%; height: auto;">
                            </div>
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" id="image-input" name="image">
                            <span class="invalid-feedback image_error"></span>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary mt-2 d-grid w-100"
                                id="liveToastBtn">submit</button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>

    {{-- ENd of Add area section================================================== --}}
    {{-- EDIT section =============================================================== --}}
    <div class="offcanvas offcanvas-end " data-bs-scroll="true" id="offcanvasBackdropcategory"
        aria-labelledby="offcanvasScrollLabel">
        <div class="offcanvas-header ">
            <h5 id="offcanvasScrollLabel" class="offcanvas-title">Edit Category</h5>
            <button type="button" class="btn-close text-reset btn-light" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="categoryUpdateForm" method="POST" class="updatecategory">
                @csrf
                <div class="mb-1">
                    <label for="category_title" class="form-label">Title
                    </label>
                    <input name="title" type="text" id="category_title" class="form-control" value="">
                    <span class="invalid-feedback title_error"></span>
                </div>

                <div class="mb-1">
                    <label for="category_slug" class="form-label">Slug
                    </label>
                    <input name="slug" type="text" id="category_slug" class="form-control" value=""
                        readonly>
                    <span class="invalid-feedback slug_error"></span>
                </div>

                <div class="mb-1">
                    <label for="category_parent" class="form-label">Parent
                    </label>
                    <select name="parent" class="form-control" id="category_parent">
                        <option value="0">Its Parent itself</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}"
                                {{ old('parent', $item->parent) == $item->id ? 'selected' : '' }}>
                                {{ $item->title }}
                            </option>
                        @endforeach
                    </select>
                    <span class="invalid-feedback parent_error"></span>
                </div>
                <div class="mb-1">
                    <div class="dashed-box">
                        <img src="" alt="" id="editshowimage" style="width: 120px; height: auto;">
                    </div>
                    <label for="category_image" class="form-label">Image
                    </label>
                    <input name="image" type="file" id="category_image" class="form-control" value="">
                    <span class="invalid-feedback image_error"></span>
                </div>
                <input type="hidden" name="" value="" id="row_idcategory">
                <div class="col-md-4">
                    <button type="submit"
                        class="btn btn-primary text-white data-submit me-2 waves-effect waves-float waves-light mt-3 w-100">Update</button>
                </div>

            </form>
        </div>
    </div>

    {{-- End of Edit section====================================================================================== --}}
    {{-- ====================================================================================================== --}}
    <script>
        $(document).ready(function() {
            $('.dashed-box').hide(); // Hide the dashed box initially

            $('#image-input').on('change', function(event) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result)
                        .show(); // Set image src and make it visible
                    $('.dashed-box').fadeIn(); // Smoothly show the dashed box
                };
                if (event.target.files.length > 0) {
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
        });

        $('#addcategory').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/category/create',
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
                        $('.danger-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.danger-toast')
                        toast.show();
                    } else {
                        $('.success-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.success-toast')
                        toast.show();
                        window.location.reload();
                        // toastr.success('download added sucessfully');
                    }
                }
            });
        });
        // END:AJAX TO ADD FEATURE

        // AJAX TO UPDATE FEATURE =======================================================
        jQuery(document).ready(function() {
            jQuery('.opencanvasform-category').click(function(e) {
                e.preventDefault();
                var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBackdropcategory');
                bsOffcanvas.show();
                var rowid = $(this).attr('data-id');
                var formurl = "<?php echo route('admin.get_category_row'); ?>";
                var tokendata = "{{ csrf_token() }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: formurl,
                    method: 'post',
                    data: {
                        _token: tokendata,
                        id: rowid
                    },
                    success: function(result) {
                        var url = "{{ route('admin.category.update', '') }}" + "/" + result
                            .row.id;
                        $('#categoryUpdateForm').attr('action', url);
                        $("#category_title").val(result.row.title);
                        $("#category_slug").val(result.row.slug);
                        $("#category_parent").val(result.row.parent);
                        $("#category_position").val(result.row.position);
                        $("#row_idcategory").val(result.row.id);
                        if (result.row.image != null) {
                            $('.dashed-box').show();
                            $("#editshowimage").attr('src',
                                'http://127.0.0.1:8000/uploads/category_images/' +
                                result.row
                                .image);
                        } else {
                            $('.dashed-box').hide();
                        }

                    }
                });
            });

        });

        // Udpate service or for validation
        $('.updatecategory').submit(function(e) {
            e.preventDefault();
            var category_id = $('#row_idcategory').val();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/category/update/' + category_id,
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
                        // $('.success-toast-message').html(response.message);
                        // const toast = new bootstrap.Toast('.success-toast')
                        // toast.show();
                    } else {
                        $('.success-toast-message').html(response.message);
                        const toast = new bootstrap.Toast('.success-toast')
                        toast.show();
                        window.location.reload();
                    }


                }
            });
        });

        // delete category
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault();
            var catId = $(this).data('id');
            swal({
                title: 'Are you sure?',
                text: 'This record and its details will be permanently deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    $.ajax({
                        type: "GET",
                        url: "/admin/category/delete/" + catId,
                        success: function(response) {
                            if (response.success) {
                                $('.success-toast-message').html(response.message);
                                const toast = new bootstrap.Toast('.success-toast')
                                toast.show();
                                setTimeout(function() {
                                    window.location.reload();
                                }, 2000); // 2-second delay
                            } else {
                                $('.danger-toast-message').html(response.message);
                                const toast = new bootstrap.Toast('.danger-toast')
                                toast.show();
                                setTimeout(function() {
                                    window.location.reload();
                                }, 2000); // 2-second delay
                            }
                        },
                        error: function() {
                            $('.danger-toast-message').html(
                                "There was an error processing the request.");
                            const toast = new bootstrap.Toast('.danger-toast')
                            toast.show();
                            setTimeout(function() {
                                window.location.reload();
                            }, 2000); // 2-second delay
                        }
                    });
                }
            });
        });


        // Update Position
        var $j = jQuery.noConflict();
        $j(document).ready(function() {
            $j(".sortable-boxs-optionss").sortable({
                update: function(event, ui) {
                    $j(this).children().each(function(index) {
                        if ($j(this).attr('data-position') != (index + 1)) {
                            //alert('asfasfa');
                            //console.log();
                            $j(this).attr('data-position', (index + 1)).addClass('updated');
                        }
                    });
                    saveNewPositionsOptions();
                }
            });
        });

        function saveNewPositionsOptions() {
            var positions = [];
            $('.updated').each(function() {
                positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                $(this).removeClass('updated');
            });


            // console.log(positions);

            var tokendata = "{{ csrf_token() }}";
            $.ajax({
                type: 'POST',
                url: '/admin/category/ajax_position',
                data: {
                    _token: tokendata,
                    update: 'Yes',
                    positions: positions
                },
                beforeSend: function() {},
                success: function(response) {
                    $('.success-toast-message').html(response.message);
                    const toast = new bootstrap.Toast('.success-toast')
                    toast.show();
                }
            });
        }

        var $k = jQuery.noConflict();
        $k(document).ready(function() {
            $k(".sortable_main_box").sortable({
                update: function(event, ui) {
                    $k(this).children().each(function(index) {
                        if ($k(this).attr('data-position') != (index + 1)) {
                            $k(this).attr('data-position', (index + 1)).addClass('updated');
                        }
                    });
                    saveNewPositions();
                }
            });
        });

        function saveNewPositions() {
            var positions = [];
            $('.updated').each(function() {
                positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                $(this).removeClass('updated');
            });
            var tokendata = "{{ csrf_token() }}";
            $.ajax({
                type: 'POST',
                url: '/admin/category/position',
                data: {
                    _token: tokendata,
                    update: 'Yes',
                    positions: positions
                },
                beforeSend: function() {},
                success: function(response) {
                    $('.success-toast-message').html(response.message);
                    const toast = new bootstrap.Toast('.success-toast')
                    toast.show();
                }
            });
        }
        // Update postiion end here
    </script>
@endsection
