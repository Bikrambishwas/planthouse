@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="{{ route('admin.product.add') }}" class="btn btn-primary waves-effect waves-light" type="button"><i
                    class="fa-regular fa-plus"></i> Add
                Product</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">PRODUCTS</h5>
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
                                <th style="width: 50px">SN</th>
                                <th style="width: 120px">Image</th>
                                <th>Title</th>
                                <th style="width: 180px">Keywords</th>
                                <th style="width: 100px">Feature It</th>
                                <th style="width: 100px">Status</th>
                                <th style="width: 100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($products as $index => $item)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><img width="auto" height="80px"
                                            src="{{ asset('uploads/product_images/' . $item->image) }}"
                                            alt="{{ $item->title }}"></td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        @if (!empty($item->keyword))
                                            @php
                                                $keywords = unserialize($item->keyword);
                                            @endphp
                                            @foreach ($keywords as $keyword)
                                                <span class="badge bg-primary">{{ $keyword }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-secondary">No Keywords</span>
                                        @endif
                                    </td>
                                    <td>
                                        <label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input toggle-switch" type="checkbox"
                                                    id="flexSwitchCheckDefault-{{ $item->id }}"
                                                    data-id="{{ $item->id }}"
                                                    {{ $item->to_show == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault-{{ $item->id }}"></label>
                                            </div>
                                        </label>
                                    </td>
                                    @if ($item->status == 'Active')
                                        <td><span class="btn btn-success btn-sm">Active</span></td>
                                    @else
                                        <td><span class="btn btn-secondary btn-sm">Inactive</span></td>
                                    @endif
                                    <td>
                                        <div class="d-flex g-10">
                                            <a href="{{ route('admin.product.edit', $item->id) }}" class="dropdown-item"
                                                data-id="{{ $item->id }}"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i>
                                                Edit</a>
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

    <script>
        // delete project
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault(); // Prevent default action of the button
            var productId = $(this).data('id');
            swal({
                title: 'Are you sure?',
                text: 'This record and its details will be permanently deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {

                    $.ajax({
                        type: "GET",
                        url: "/admin/product/delete/" + productId,
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
    </script>
@endsection
