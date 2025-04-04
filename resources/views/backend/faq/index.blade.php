@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Faq</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            {{-- <button class="btn btn-primary waves-effect waves-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Faq</button> --}}
        </div>

    </div>

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">ADD NEW FAQ</h5>
                <div class="card-body">
                    <form id="addfaq" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Question</label>
                            <input type="text" class="form-control" name="question" placeholder="John Doe">
                            <span class="invalid-feedback question_error"></span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Answer</label>
                            <textarea name="answer" id="" class="form-control editor" cols="30" rows="10"></textarea>
                            <span class="invalid-feedback answer_error"></span>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Faqs</h5>
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 50px">Sn</th>
                                <th>Question</th>
                                <th style="width: 100px">Status</th>
                                <th style="width: 100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 faq-wrap">
                            @foreach ($faqs as $index => $item)
                                <tr data-position="{{ $item->position }}" data-index="{{ $item->id }}"
                                    style="cursor: grab;">
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->question }}</td>
                                    @if ($item->status == 'Active')
                                        <td><span class="btn btn-success btn-sm">Active</span></td>
                                    @else
                                        <td><span class="btn btn-secondary btn-sm">Inactive</span></td>
                                    @endif
                                    <td>
                                        {{-- <div class="btn-group">
                                            <button class="btn dropdown-toggle waves-effect waves-float waves-light show"
                                                type="button" id="" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-h fa-fw fa-2x blue-points"></i>
                                            </button>
                                            <div class="dropdown-menu show mt-2" aria-labelledby="" data-popper-placement=""
                                                style="">
                                                <a class="dropdown-item opencanvasform-faq" data-id="{{ $item->id }}"><i
                                                        class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</a>
                                                <a class="dropdown-item deletebtn" data-id="{{ $item->id }}"
                                                    href="#"><i class="fa-solid fa-trash"></i> Delete</a>
                                            </div>
                                        </div> --}}

                                        <div class="d-flex g-10">
                                            <a href="#" class="dropdown-item opencanvasform-faq"
                                                data-id="{{ $item->id }}"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</a>
                                            <a class="dropdown-item deletebtn" href="#"
                                                data-id="{{ $item->id }}"><i class="fa-solid fa-trash"></i>
                                                Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBackdropfaq" aria-labelledby="offcanvasEndLabel"
        aria-modal="true" role="dialog">
        <div class="offcanvas-header">
            <h5 id="offcanvasEndLabel" class="offcanvas-title">EDIT FAQ</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0">
            <form id="faqUpdateForm" method="POST" class="updatefaq">
                @csrf
                <div class="mb-2">
                    <label class="form-label">Question</label>
                    <input type="text" class="form-control" id="faq_question" name="question" placeholder="John Doe">
                    <span class="invalid-feedback question_error"></span>
                </div>
                <div class="mb-2">
                    <label class="form-label">Answer</label>
                    <textarea name="answer" id="faq_answer" class="form-control" cols="30" rows="10"></textarea>
                    <span class="invalid-feedback answer_error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="basic-icon-default-status">Status</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="1">
                        <label class="form-check-label" for="inlineRadio3">Active
                        </label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio4" value="2">
                        <label class="form-check-label" for="inlineRadio4">Inactive</label>
                    </div>

                </div>
                <input type="hidden" name="id" id="row_idfaq" value="">
                <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Update</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('backend/assets/js/summernote-lite.min.js') }}"></script>
    <script>
        // summernote
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

        $('#addfaq').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/faq/create',
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
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                        // toastr.success('download added sucessfully');
                    }
                }
            });
        });



        jQuery(document).ready(function() {
            jQuery('.opencanvasform-faq').click(function(e) {
                e.preventDefault();
                var bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBackdropfaq');
                bsOffcanvas.show();
                var rowid = $(this).attr('data-id');
                var formurl = "<?php echo route('admin.get_faq_row'); ?>";
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
                        var url = "{{ route('admin.faq.update', '') }}" + "/" + result
                            .row.id;
                        $('#faqUpdateForm').attr('action', url);
                        $("#faq_question").val(result.row.question);
                        $("#faq_answer").val(result.row.answer);
                        $("#row_idfaq").val(result.row.id);
                        if (result.row.status === 'Inactive') {
                            $('#inlineRadio4').prop('checked', true);
                        } else {
                            $('#inlineRadio3').prop('checked', true);
                        }
                    }
                });
            });
        });


        // AJAX update the form with valdiation
        $('.updatefaq').submit(function(e) {
            e.preventDefault();
            var faq_id = $('#row_idfaq').val();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/faq/update/' + faq_id,
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

        // delete category
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault(); // Prevent default action of the button
            var faqId = $(this).data('id');
            swal({
                title: 'Are you sure?',
                text: 'This record and its details will be permanently deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {

                    $.ajax({
                        type: "GET",
                        url: "/admin/faq/delete/" + faqId,
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

        // dragand drop
        var $j = jQuery.noConflict();
        $j(document).ready(function() {
            $j(".faq-wrap").sortable({
                update: function(event, ui) {
                    $j(this).children().each(function(index) {
                        if ($j(this).attr('data-position') != (index + 1)) {
                            $j(this).attr('data-position', (index + 1)).addClass('updated');
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
                url: '/admin/faq/position',
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
    </script>
@endsection
