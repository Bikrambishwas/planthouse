@extends('backend.app')
@section('content')
    <!--PAGE HEADER-->

    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Sitesettings</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="#" class="dt-button create-new btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScroll">
                <span><i class="fa-regular fa-plus"></i> Add Sitesetting
                </span>
            </a>
        </div>
    </div>
    <!--PAGE HEADER-->
    <?php
    $item = (object) $general_setting[0]->getRawOriginal();
    ?>
    {{-- MAIN Content --}}
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link mylinks active" id="stacked-pill-1" data-bs-toggle="pill"
                                    href="#vertical-pill-1" aria-expanded="true">
                                    General Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-2" data-bs-toggle="pill"
                                    href="#vertical-pill-2" aria-expanded="false">
                                    Social Media
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mylinks" id="stacked-pill-3" data-bs-toggle="pill"
                                    href="#vertical-pill-3" aria-expanded="false">
                                    Extra Text
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="vertical-pill-1"
                                aria-labelledby="stacked-pill-1" aria-expanded="true">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>General Settings</h3>
                                    </div>
                                    <?php $sn = 1; ?>
                                    @foreach ($general_setting as $gs)
                                        <?php
                            if ($gs->type == 'Image') {
                            ?>
                                        <div class="col-md-12 mb-2">
                                            <small class="pb-2">{{ $gs->meta_key }}</small>
                                            <?php
                                    if (!empty($gs->meta_value)) {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                <img height:auto; width="100%" src="/{{ $gs->meta_value }}">
                                            </div>
                                            <?php
                                    } else {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                Upload Image
                                            </div>
                                            <?php
                                    }
                                    ?>
                                        </div>
                                        <?php
                            } else {
                            ?>
                                        <div class="col-md-6">
                                            <div class="alert alert-primary opencanvasform-text" role="alert"
                                                data-id="{{ $gs->id }}">
                                                <h4 class="alert-heading">{{ $gs->meta_key }}</h4>
                                                <div class="alert-body">
                                                    {{ $gs->meta_value }}
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                            }
                            ?>
                                        <?php $sn++; ?>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Social Media</h3>
                                    </div>
                                    <?php $sn = 1; ?>
                                    @foreach ($social_media as $gs)
                                        <?php
                            if ($gs->type == 'Image') {
                            ?>
                                        <div class="col-md-12 mb-2">
                                            <small class="pb-2">{{ $gs->meta_key }}</small>
                                            <?php
                                    if (!empty($gs->meta_value)) {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                <img src="/{{ $gs->meta_value }}">
                                            </div>
                                            <?php
                                    } else {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                Upload Image
                                            </div>
                                            <?php
                                    }
                                    ?>
                                        </div>
                                        <?php
                            } else {
                            ?>
                                        <div class="col-md-6">
                                            <div class="alert alert-primary opencanvasform-text" role="alert"
                                                data-id="{{ $gs->id }}">
                                                <h4 class="alert-heading">{{ $gs->meta_key }}</h4>
                                                <div class="alert-body">
                                                    {{ $gs->meta_value }}
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                            }
                            ?>
                                        <?php $sn++; ?>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3"
                                aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Extra Text</h3>
                                    </div>
                                    <?php $sn = 1; ?>
                                    @foreach ($extra_text as $gs)
                                        <?php
                            if ($gs->type == 'Image') {
                            ?>
                                        <div class="col-md-12 mb-2">
                                            <small class="pb-2">{{ $gs->meta_key }}</small>
                                            <?php
                                    if (!empty($gs->meta_value)) {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                <img height:auto; width="100%" src="/{{ $gs->meta_value }}">
                                            </div>
                                            <?php
                                    } else {
                                    ?>
                                            <div class="dashed-box opencanvasform-image" data-id="{{ $gs->id }}">
                                                Upload Image
                                            </div>
                                            <?php
                                    }
                                    ?>
                                        </div>
                                        <?php
                            } else {
                            ?>
                                        <div class="col-md-6">
                                            <div class="alert alert-primary opencanvasform-text" role="alert"
                                                data-id="{{ $gs->id }}">
                                                <h4 class="alert-heading">{{ $gs->meta_key }}</h4>
                                                <div class="alert-body">
                                                    {{ $gs->meta_value }}
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                            }
                            ?>
                                        <?php $sn++; ?>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Edit Text or sitesettign form --}}
    <div class="offcanvas offcanvas-size-xxl offcanvas-end" data-id="{{ $gs->id }}" tabindex="-1"
        id="offcanvasBackdrop" aria-labelledby="offcanvasBackdropLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasBackdropLabel" class="offcanvas-title">Edit Settings</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="settingsUpdateForm" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="my-2">
                            <label for="setting_meta_value" class="form-label">Setting Value</label>
                            <textarea class="form-control" id="setting_meta_value" rows="3" value="" name="meta_value"></textarea>
                            <div class="form-text">Setting values</div>
                        </div>
                    </div>
                    <div class="dis-non">
                        <div class="col-md-12 mt-2">
                            <hr />
                            <h4 class="mt-2">CORE DEVELOPER SETTING</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="setting_meta_key" class="form-label">Setting Key</label>
                                <input type="text" class="form-control" id="setting_meta_key" value=""
                                    name="meta_key">
                                <div class="form-text">for label</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="setting_slug" class="form-label">Setting slug</label>
                                <input type="text" class="form-control" id="setting_slug" value=""
                                    name="slug">
                                <div class="form-text">with underscore</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_group" class="form-label">Setting Group</label>
                                <select class="form-control" id="setting_group" name="group">
                                    <option value="General Setting">General Setting</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Extra Text">Extra Text</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_type" class="form-label">Setting Type</label>
                                <select class="form-control" id="setting_type" name="type">
                                    <option value="Text">Text</option>
                                    <option value="Image">Image</option>
                                    <option value="Text Area">Text Area</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_position" class="form-label">Setting Position</label>
                                <input type="text" class="form-control" id="setting_position" value=""
                                    name="position">
                                <div class="form-text">for label</div>
                            </div>
                        </div>

                    </div>
                </div>
                <input type="hidden" id="row_id" value="">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary text-white  mt-3 d-grid w-100">Update</button>
                </div>

            </form>
        </div>
    </div>

    {{-- Update image canvas --}}
    <div class="offcanvas offcanvas-size-xxl offcanvas-end" tabindex="-1" id="offcanvasBackdropImage"
        aria-labelledby="offcanvasBackdropLabelImage">
        <div class="offcanvas-header">
            <h5 id="offcanvasBackdropLabelImage" class="offcanvas-title">Edit Settings Images</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="settingsUpdateImageForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <div class="my-2">
                            <div class="dashed-box" id="setting_meta_valueImage">
                                <img src="" id="editshowimage" style="width: 120px; height: auto;">
                            </div>
                            <div>
                                <label for="setting_meta_value" class="form-label">Setting Value</label>
                                <input type="file" class="form-control" id="" name="meta_value">
                                <div class="form-text">Upload Image</div>
                            </div>
                        </div>
                    </div>


                    <div class="dis-non">
                        <div class="col-md-12 mt-2">
                            <hr />
                            <h4 class="mt-2">CORE DEVELOPER SETTING</h4>
                        </div>

                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="setting_meta_key" class="form-label">Setting Key</label>
                                <input type="text" class="form-control" id="setting_meta_keyImage" value=""
                                    name="meta_key">
                                <div class="form-text">for label</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="setting_slug" class="form-label">Setting slug</label>
                                <input type="text" class="form-control" id="setting_slugImage" value=""
                                    name="slug">
                                <div class="form-text">with underscore</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_groupImage" class="form-label">Field Group</label>
                                <select class="form-control" id="setting_groupImage" name="group">
                                    <option value="General Setting">General Setting</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Extra Text">Extra Text</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_type" class="form-label">Setting Field Type</label>
                                <select class="form-control" id="setting_typeImage" name="type">
                                    <option value="Text">Text</option>
                                    <option value="Image">Image</option>
                                    <option value="Text Area">Text Area</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="my-2">
                                <label for="setting_position" class="form-label">Setting Position</label>
                                <input type="text" class="form-control" id="setting_positionImage" value=""
                                    name="position">
                                <div class="form-text">for label</div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="row_idImage" value="">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary text-white  mt-3 d-grid w-100">Update</button>
                </div>
            </form>
        </div>
    </div>




    <div class="offcanvas offcanvas-end " data-bs-scroll="true" id="offcanvasScroll"
        aria-labelledby="offcanvasScrollLabel">
        <div class="offcanvas-header ml-2">
            <h5 id="offcanvasScrollLabel" class="offcanvas-title  " style=" margin-left : 15px; color: black;">
                ADD NEW TEXT</h5>

            <button type="button" class="btn-close text-reset btn-light" data-bs-dismiss="offcanvas" aria-label="Close"
                style="margin-right: 25px"></button>

        </div>
        <div class="offcanvas-body mx-0 flex-grow-0">
            <div class="tags d-grid gap-2 d-md-flex">
                <a href="#" class="btn btn-outline-primary create-new" tabindex="0" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrollImageform">Switch to image field</a>
            </div>
            <form id="addsitesetting" method="POST" class="add-new-record" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-2">
                            <label for="setting_meta_value" class="form-label">Setting Value</label>
                            <textarea class="form-control" id="setting_meta_value" rows="3" value="" name="meta_value"></textarea>
                            <div class="form-text">Setting values</div>
                            <span class="invalid-feedback meta_value_error"></span>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <hr />
                        <h4 class="mt-4">BASIC SETTING</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_meta_key" class="form-label">Setting Key</label>
                            <input type="text" class="form-control" id="setting_meta_key" value=""
                                name="meta_key">
                            <div class="form-text">for label</div>
                            <span class="invalid-feedback meta_key_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_slug" class="form-label">Setting slug</label>
                            <input type="text" class="form-control" id="setting_slug" value="" name="slug">
                            <div class="form-text">with underscore</div>
                            <span class="invalid-feedback slug_error"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_group" class="form-label">Setting Group</label>
                            <select class="form-control" id="group" name="group">
                                <option value="">Select Group</option>
                                <option value="General Setting">General Setting</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Extra Text">Extra Text</option>


                            </select>
                            <span class="invalid-feedback group_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_type" class="form-label">Setting Field Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="">Select Type</option>
                                <option value="Text">Text</option>
                                <option value="Image">Image</option>
                                <option value="Text Area">Text Area</option>
                            </select>
                            <span class="invalid-feedback type_error"></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary text-white  mt-3 d-grid w-100">Submit</button>
                </div>
            </form>

        </div>
    </div>

    {{-- Add  image form --}}
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasScrollImageform"
        aria-labelledby="offcanvasScrollLabelImageform">
        <div class="offcanvas-header ml-2">
            <h5 id="offcanvasScrollLabel" class="offcanvas-title  " style=" margin-left : 15px; color: black;">
                ADD NEW IMAGE</h5>

            <button type="button" class="btn-close text-reset btn-light" data-bs-dismiss="offcanvas" aria-label="Close"
                style="margin-right: 25px"></button>

        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <div class="tags  d-grid gap-2 d-md-flex">
                <a href="#" class="dt-button create-new btn btn-outline-primary" tabindex="0" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasScroll">Switch to text field</a>
            </div>
            <form class="addsitesetting" method="POST" class="add-new-record modal-content pt-0 overall-pd"
                enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="my-2">
                            <div>
                                <label for="setting_meta_value" class="form-label">Setting Value</label>
                                <input type="file" class="form-control" id="" name="meta_value">
                                <div class="form-text">Upload Image</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <hr />
                        <h4 class="mt-4">BASIC SETTING</h4>
                    </div>

                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_meta_key" class="form-label">Setting Key</label>
                            <input type="text" class="form-control" id="setting_meta_key" value=""
                                name="meta_key">
                            <div class="form-text">for label</div>
                            <span class="invalid-feedback meta_key_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_slug" class="form-label">Setting slug</label>
                            <input type="text" class="form-control" id="setting_slug" value="" name="slug">
                            <div class="form-text">with underscore</div>
                            <span class="invalid-feedback slug_error"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_group" class="form-label">Setting Group</label>
                            <select name="group" class="form-control" id="">
                                <option value="">Select group</option>
                                <option value="General Setting">General Setting</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Extra Text">Extra Text</option>

                            </select>
                            <div class="form-text">for group of field sets</div>
                            <span class="invalid-feedback group_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-2">
                            <label for="setting_type" class="form-label">Setting Field Type</label>
                            <select name="type" class="form-control" id="">
                                <option value="">Select Type</option>
                                <option value="Text">Text</option>
                                <option value="Image">Image</option>
                                <option value="Text Area">Text Area</option>
                            </select>
                            <div class="form-text">Field type for edit</div>
                            <span class="invalid-feedback type_error"></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary text-white  mt-3 d-grid w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>


    <script>
        jQuery(document).ready(function() {
            jQuery('.opencanvasform-text').click(function(e) {
                e.preventDefault();
                var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBackdrop');
                bsOffcanvas.show();
                var rowid = $(this).attr('data-id');

                var formurl = "{{ route('admin.get_row_data') }}";
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

                        var url = "{{ route('admin.sitesetting.update', '') }}" + "/" + result
                            .row.id;
                        $('#settingsUpdateForm').attr('action', url);
                        $("#setting_slug").val(result.row.slug);
                        $("#setting_meta_key").val(result.row.meta_key);
                        if (result.row.type == 'Editor') {
                            $("#setting_meta_value").html(result.row.meta_value);
                        } else {
                            $("#setting_meta_value").val(result.row.meta_value);
                        }

                        $("#setting_group").val(result.row.group);
                        $("#setting_type").val(result.row.type);
                        $("#setting_position").val(result.row.position);
                        $("#row_id").val(result.row.id);
                    }
                });
            });

        });


        jQuery(document).ready(function() {
            jQuery('.opencanvasform-image').click(function(e) {
                e.preventDefault();
                var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBackdropImage');
                bsOffcanvas.show();
                var rowid = $(this).attr('data-id');
                var formurl = "{{ route('admin.get_row_data') }}";
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
                        var url = "{{ route('admin.sitesetting.update', '') }}" + "/" + result
                            .row.id;
                        $('#settingsUpdateImageForm').attr('action', url);
                        $("#setting_slugImage").val(result.row.slug);
                        $("#setting_meta_keyImage").val(result.row.meta_key);
                        $("#setting_groupImage").val(result.row.group);
                        $("#setting_typeImage").val(result.row.type);
                        $("#setting_positionImage").val(result.row.position);
                        $("#row_idImage").val(result.row.id);
                        $("#editshowimage").attr('src', 'http://127.0.0.1:8000/' +
                            result.row
                            .meta_value);
                    }
                });
            });

        });


        $('#addsitesetting').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/sitesetting/create',
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                beforeSend: function() {
                    $(document).find('span.invalid-feedback').text('')
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
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                        // toastr.success('download added sucessfully');
                    }
                }
            });
        });

        $('.addsitesetting').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/sitesetting/create',
                data: new FormData(this),
                contentType: false,
                processData: false,
                async: false,
                beforeSend: function() {
                    $(document).find('span.invalid-feedback').text('')
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
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                        // toastr.success('download added sucessfully');
                    }
                }
            });
        });
    </script>
@endsection
