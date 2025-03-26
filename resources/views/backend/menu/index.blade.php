@extends('backend.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Menus</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 d-flex justify-content-end">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="padding: 0">
                    <div class="py-1 px-1">
                        @if (count($menus) == 0)
                            <p>Create your first menu below.</p>
                        @elseif (count($menus) == 1)
                            <p>Edit your menu below, or <a href="{{ route('admin.menu', ['id' => 0]) }}">create
                                    a
                                    new menu</a>. Do not forget to save
                                your changes!</p>
                        @else
                            <div class="row my-1">
                                <div class="col-md-8 d-flex justify-content-evenly align-items-center" style="gap: 5px">
                                    <span>Select menu to edit</span>
                                    <select id="menuSelect" class="form-select" style="width: 200px">
                                        @if (isset($row))
                                            @foreach ($menus as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $row->id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        @else
                                            <option value="">Select Menu</option>
                                            @foreach ($menus as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <button id="select-menu" class="btn btn-primary">Select</button>
                                    <span>
                                        or <a href="{{ route('admin.menu', ['id' => 0]) }}">create
                                            a new menu</a>.
                                        Do
                                        not
                                        forget
                                        to save your changes!
                                    </span>
                                </div>
                            </div>

                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                @if ($MenuID != 0)
                    <div class="col-md-4">
                        <h4>Add Menu Items</h4>
                        <div class="card">
                            <div class="card-body" id="menu-container">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="fw-bold">Pages</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12 py-1" style="border: 1px solid #937f7f33">
                                                        @foreach ($pages as $page)
                                                            <div class="form-check" style="margin-bottom:12px">
                                                                <input class="form-check-input page-checkbox"
                                                                    type="checkbox" name="page_ids[]"
                                                                    id="page{{ $page->id }}" value="{{ $page->id }}"
                                                                    page-url="{{ $page->url }}">
                                                                <label class="form-check-label fs-13"
                                                                    for="page{{ $page->id }}">
                                                                    {{ $page->title }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                                                        <small><a href="#" class="btn btn-secondary btn-sm"
                                                                id="select-all-page">Select
                                                                All</a></small>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button" id="add-pages"
                                                            class="btn btn-outline-primary btn-sm align-item-center">Add
                                                            To Menu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span class="fw-bold">Custom Links</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12 py-2" style="border: 1px solid #937f7f33">
                                                        <div class="form-check mb-1">
                                                            <label class="form-check-label" for="url">URL</label>
                                                            <input type="text" name="custom_url" class="form-control"
                                                                id="url">
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="linktext">Link
                                                                Text</label>
                                                            <input type="text" name="custom_linktext"
                                                                class="form-control" id="linktext">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                                                        <small></small>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button" id="add-custom-links"
                                                            class="btn btn-outline-primary btn-sm align-item-center">Add
                                                            To Menu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <span class="fw-bold">Categories</span>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12 py-3" style="border: 1px solid #937f7f33">
                                                        <nav class="menu-main">
                                                            <ul>
                                                                @foreach ($category_data as $index => $c_data)
                                                                    @include('backend.menu.nested', [
                                                                        'data' => $c_data,
                                                                    ])
                                                                @endforeach
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                                                        <small><a href="#" id="select-all-categories">Select
                                                                All</a></small>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                        <button type="button" id="add-categories"
                                                            class="btn btn-outline-primary btn-sm align-item-center">Add
                                                            To Menu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                <div class="col-md-8">
                    <h4>Menu Structure</h4>
                    @if ($MenuID == 0)
                        <div class="card">
                            <div class="card-body">
                                <form id="addmenu" method="POST">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <label for="menu_name" class="form-label">Menu
                                                Name</label>
                                            <input type="text" name="title" id="menu_name" class="form-control">
                                            <span class="invalid-feedback title_error"></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Create
                                        Menu</button>
                                </form>
                            </div>

                        </div>
                </div>
            @else
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.menu.update', $row->id) }}" id="edit">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-7 d-flex align-items-center g-20">

                                    <span>Menu
                                        Name :</span><span><input type="text" name="title" id="menu_name"
                                            class="form-control" value="{{ $row->title }}"></span>
                                </div>
                                {{-- <div class="col-md-5">

                                </div> --}}
                                <div class="col-md-5 d-flex align-items-center g-20">
                                    <span>Show This Menu</span><span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                {{ $row->show == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </span>
                                </div>
                                {{-- <div class="col-md-2">
                                    <label>

                                    </label>
                                </div> --}}
                            </div>
                            <hr>
                            <p><small>Add menu items from the column on the left.</small>
                            </p>
                            <div class="nested-sortable">
                                <ul class="sub-ul">
                                    {!! App\Helpers\CategoryHelper::renderMenuItems($menuStructure) !!}
                                    {{-- nested item menu are appended here --}}
                                </ul>
                            </div>
                            <input type="hidden" name="menuId" value="{{ $row->id }}" id="">
                            <input type="hidden" name="show" id="hiddenShowInput" value="{{ $row->show }}">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Save
                                Change</button>
                            <a href="#" data-id="{{ $row->id }}"
                                class="btn btn-outline-danger btn-sm mt-2 deletebtn">Delete
                                menu</a>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"
        integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
    <script>
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault(); // Prevent default action of the button
            var menuId = $(this).data('id');
            swal({
                title: 'Are you sure?',
                text: 'This record and its details will be permanently deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    // If the user clicked "Yes!", proceed with the AJAX request
                    $.ajax({
                        type: "GET",
                        url: "/admin/menu/delete/" + menuId,
                        success: function(response) {
                            if (response.success) {

                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000); // 2-second delay
                            } else {

                                setTimeout(function() {
                                    window.location = '/admin/menu/edit/menu=0';
                                }, 1000); // 2-second delay
                            }
                        },
                        error: function() {

                            setTimeout(function() {
                                window.location.reload();
                            }, 1000); // 2-second delay
                        }
                    });
                }
            });
        });
        $('#addmenu').submit(function(e) {
            e.preventDefault();
            data = new FormData();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/admin/menu/create',
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
                        // window.location.reload();
                        if (response.menu_id) {
                            setTimeout(function() {
                                window.location = '{{ url('admin/menu/edit/menu=') }}' +
                                    response.menu_id;
                            }, 1000);
                        } else {
                            console.error("ID not found in response");
                        }
                        // toastr.success('download added sucessfully');
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const selectAllCategoriesButton = document.querySelector('#select-all-categories');
            if (selectAllCategoriesButton) {
                selectAllCategoriesButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelectorAll('input[name^="taxonomy_"]').forEach(checkbox => {
                        checkbox.checked = true;
                    });
                });
            } else {
                console.error('Element with ID "select-all-categories" not found.');
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            const selectAllLink = document.getElementById('select-all-page');
            const checkboxes = document.querySelectorAll('.page-checkbox');

            selectAllLink.addEventListener('click', function(event) {
                event.preventDefault();
                const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);

                checkboxes.forEach(checkbox => {
                    checkbox.checked = !allChecked;
                });
            });
        });

        //  latest script where category and custom url work but page adn post dont work
        document.addEventListener('DOMContentLoaded', function() {

            // Function to remove a menu item and its children
            function removeMenuItemAndChildren(element) {
                var item = element.closest('.sortable-item');
                if (item) {
                    item.parentNode.removeChild(item);
                } else {
                    console.error('Parent .sortable-item not found.');
                }
            }

            function initializeSortable() {
                var nestedSortables = document.querySelectorAll('.nested-sortable ul');
                nestedSortables.forEach(function(el) {
                    if (!el.sortable) { // Avoid re-initializing
                        new Sortable(el, {
                            group: {
                                name: 'nested',
                                pull: true,
                                put: true
                            },
                            animation: 150,
                            fallbackOnBody: true,
                            swapThreshold: 0.1,
                            onStart: function(evt) {
                                evt.from.classList.add('dragging');
                            },
                            onEnd: function(evt) {
                                evt.from.classList.remove('dragging');
                                const parentLi = evt.item.closest('li.sortable-item');
                                const targetUl = evt.to;

                                if (parentLi && targetUl !== evt.from) {
                                    if (!parentLi.contains(evt.item)) {
                                        if (!parentLi.querySelector('ul')) {
                                            let newUl = document.createElement('ul');
                                            parentLi.appendChild(newUl);
                                        }
                                        parentLi.querySelector('ul').appendChild(evt.item);
                                    }
                                }
                                initializeSortable(); // Re-initialize to handle nested elements
                            }
                        });
                        el.sortable = true; // Mark as initialized
                    }
                });
            }

            // Function to create a new menu item
            function createMenuItem(title, type, url = '') {
                var li = document.createElement('li');
                li.className = 'sortable-item';
                li.draggable = true;

                var header = document.createElement('div');
                header.className = 'item-header';
                header.innerHTML = `
                    <p class="fs-13 fw-bold mb-0">${title}</p>
                    <span class="toggle-details">${type} <i class="fa-solid fa-caret-down"></i></span>
                    `;

                var details = document.createElement('div');
                details.className = 'item-details collapsed';
                if (type === 'custom') {
                    details.innerHTML = `
                    <label>Link Text</label>
                    <input type="text" class="form-control menu-label" value="${title}">
                    <label>Url</label>
                    <input type="text" class="form-control menu-url" value="${url}">
                    <div class="remove-cancel">
                    <a href="#" class="text-danger remove-item">Remove</a>
                    </div>
                    `;
                } else {
                    details.innerHTML = `
                    <label>Label</label>
                    <input type="text" class="form-control menu-label" value="${title}">
                    <input type="hidden" class="menu-url" value="${url}">
                    <div class="original">
                    Original: <a href="${url}">${title}</a>
                    </div>
                    <div class="remove-cancel">
                    <a href="#" class="text-danger remove-item">Remove</a>
                    </div>
                    `;
                }

                li.appendChild(header);
                li.appendChild(details);

                header.querySelector('.toggle-details').addEventListener('click', function() {
                    if (details.classList.contains('collapsed')) {
                        details.classList.remove('collapsed');
                        details.classList.add('expanded');
                        this.innerHTML = `${type} <i class="fa-solid fa-caret-up"></i>`;
                    } else {
                        details.classList.remove('expanded');
                        details.classList.add('collapsed');
                        this.innerHTML = `${type} <i class="fa-solid fa-caret-down"></i>`;
                    }
                });

                var nestedUl = document.createElement("ul");
                nestedUl.classList.add("sub-ul");
                li.appendChild(nestedUl);

                return li;
            }

            // Function to append a menu item to the main menu
            function appendMenuItemToMain(menuItem) {
                var mainMenu = document.querySelector('.nested-sortable > ul');
                if (mainMenu) {
                    mainMenu.appendChild(menuItem);
                } else {
                    console.error('Main menu element not found.');
                }
            }

            // Function to uncheck all checkboxes
            function uncheckAllCheckboxes(selector) {
                document.querySelectorAll(selector).forEach(function(checkbox) {
                    checkbox.checked = false;
                });
            }

            // Event listener for adding pages
            document.querySelector('#add-pages').addEventListener('click', function() {
                document.querySelectorAll('input[name="page_ids[]"]:checked').forEach(function(checkbox) {
                    var title = checkbox.nextElementSibling.innerText;
                    var url = checkbox.getAttribute('page-url');
                    var li = createMenuItem(title, 'page', url);
                    appendMenuItemToMain(li);
                });
                uncheckAllCheckboxes('input[name="page_ids[]"]');
                initializeSortable();
            });

            // Event listener for adding posts
            // Adding categories
            document.querySelector('#add-categories').addEventListener('click', function() {
                document.querySelectorAll('input[type="checkbox"]:checked').forEach(function(checkbox) {
                    if (checkbox.name.startsWith('taxonomy_')) {
                        var titleElement = checkbox.closest('label') ? checkbox.closest('label')
                            .textContent.trim() : '';
                        var url = checkbox.getAttribute('category-url');
                        if (titleElement) {
                            var li = createMenuItem(titleElement, 'category', url);
                            appendMenuItemToMain(li);
                        } else {
                            console.error('Category title is missing.');
                        }
                    }
                });
                uncheckAllCheckboxes('input[type="checkbox"]');
                initializeSortable();
            });


            // Event listener for adding custom links
            document.querySelector('#add-custom-links').addEventListener('click', function() {
                var url = document.querySelector('input[name="custom_url"]').value;
                var title = document.querySelector('input[name="custom_linktext"]').value;
                var li = createMenuItem(title, 'custom', url);
                appendMenuItemToMain(li);
                document.querySelector('input[name="custom_url"]').value = '';
                document.querySelector('input[name="custom_linktext"]').value = '';
                initializeSortable();
            });

            // Event listener for removing menu items
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-item')) {
                    console.log('Remove item clicked'); // Debug log
                    removeMenuItemAndChildren(event.target);
                }
            });

            // Function to get the menu structure from the DOM
            function getMenuStructure(element) {
                let items = [];
                element.querySelectorAll(':scope > .sortable-item').forEach(function(li, index) {
                    let titleInput = li.querySelector('.item-details input.menu-label');
                    let urlInput = li.querySelector('.item-details input.menu-url');
                    let typeSpan = li.querySelector('.item-header span');

                    if (titleInput && urlInput && typeSpan) {
                        let item = {
                            title: titleInput.value,
                            url: urlInput.value,
                            position: (index + 1).toString(),
                            type: typeSpan.innerText.trim(),
                            children: []
                        };

                        let childUl = li.querySelector('ul');
                        if (childUl) {
                            item.children = getMenuStructure(childUl);
                        }

                        items.push(item);
                    } else {
                        console.error('Missing title, url, or type in menu item');
                    }
                });

                console.log('Generated Menu Structure:', items); // Debug log
                return items;
            }

            // Event listener for form submission
            document.querySelector('form#edit').addEventListener('submit', function(e) {
                e.preventDefault();
                let menuStructure = getMenuStructure(document.querySelector('.nested-sortable > ul'));
                let formData = new FormData(this);
                formData.append('menu_structure', JSON.stringify(menuStructure));

                console.log('Form Data:', menuStructure); // Debug log

                fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Server Response:', data); // Debug log
                        if (data.success) {

                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {

                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });

            // Initial Sortable Initialization
            initializeSortable();
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.item-header').forEach(header => {
                header.addEventListener('click', function() {
                    const details = this.nextElementSibling;
                    if (details.classList.contains('collapsed')) {
                        details.classList.remove('collapsed');
                        details.classList.add('expanded');
                    } else {
                        details.classList.add('collapsed');
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('select-menu').addEventListener('click', function() {
                var selectElement = document.getElementById('menuSelect'); // Corrected ID here
                var selectedId = selectElement.value;

                if (selectedId) {
                    var url = `{{ route('admin.menu', ['id' => '__id__']) }}`.replace('__id__',
                        selectedId);
                    window.location.href = url;
                } else {
                    alert('Please select a menu.');
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Function to get URL parameter
            function getUrlParameter(name) {
                name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                var results = regex.exec(location.search);
                return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
            }
            // Get the menu ID from the URL
            var menuId = getUrlParameter('menu');
            // Get the menu container
            var menuContainer = document.getElementById("menu-container");
            // Check the menu ID and apply the disabled overlay if the ID is 0
            if (menuId === '0') {
                menuContainer.classList.add("disabled-overlay");
            }
        });




        // checbox to show the menu as the main menu

        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('flexSwitchCheckDefault');
            const hiddenInput = document.getElementById('hiddenShowInput');

            checkbox.addEventListener('change', function() {
                if (checkbox.checked) {
                    // Set hidden input field value to 1
                    hiddenInput.value = '1';
                } else {
                    // Set hidden input field value to null
                    hiddenInput.value = '0';
                }
            });
        });
    </script>
@endsection
