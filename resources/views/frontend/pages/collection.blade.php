@extends('frontend.app')
@section('content')
    <section>
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="margin: 0">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-image: url('https://planthouse.dev/frontend/assets/images/banner-1.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 pt-5 my-5">
                    <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Organic</span> Foods at your <span
                            class="fw-bold">Doorsteps</span></h2>
                    <p class="fs-4">Dignissim massa diam elementum.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="latest-blog" class="pb-4">
        <div class="container-lg">
            {{-- <div class="row">
                <div class="section-header mt-5">
                    <h2 class="section-title">Collections</h2>
                    <p>Indoor plants bring stunning & vibrant aesthetics along with a wide array of benefits to any space.
                        Elevate your living or office space with a variety of indoor house plants grown and treated with
                        utmost care just for you!</p>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="section-header d-flex align-items-center justify-content-between mb-2">
                    <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter"
                        aria-controls="offcanvasFilter"><i class="fa-solid fa-sort-down"></i> FILTER</a>
                    <div class="d-flex align-items-center text-align-center gap-2">
                        <a href="#" class="btn btn-primary">SORT BY</a>
                        <p style="margin-bottom: 0">200 products</p>
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4">
                <div class="col-md-3">
                    {{-- <div class="card">
                        <div class="card-body"> --}}
                    <div class="price-filter-wrapper">
                        <header>
                            <h2>Price Filter</h2>
                        </header>
                        <div class="price-input">
                            <div class="field">
                                <span>Min</span>
                                <input type="number" class="input-min" value="0">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="7500">
                            </div>
                        </div>
                        <div class="price-slider">
                            <div class="price-progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-mini" min="0" max="10000" value="0"
                                step="100">
                            <input type="range" class="range-maxi" min="0" max="10000" value="9000"
                                step="100">
                        </div>

                        <header class="mt-5">
                            <h2>Categories</h2>
                        </header>
                        <ul class="tree" style="padding-left: 0px">
                            @foreach ($categories as $cat)
                                <li class="{{ $cat->children != null ? 'has' : '' }}">
                                    <input type="checkbox" name="domain[]" value="{{ $cat->title }}">
                                    <label>
                                        {{ $cat->title }}
                                        <span class="total">
                                            @if ($cat->children != null)
                                                ({{ $cat->children->count() }})
                                            @endif
                                        </span>
                                    </label>
                                    <ul>
                                        @foreach ($cat->children as $c_child)
                                            <li class="{{ $c_child->children != null ? 'has' : '' }}">
                                                <input type="checkbox" name="subdomain[]" value="{{ $c_child->title }}">
                                                <label>
                                                    {{ $c_child->title }}
                                                    <span class="total">
                                                        @if ($c_child->children != null)
                                                            ({{ $c_child->children->count() }})
                                                        @endif
                                                    </span>
                                                </label>
                                                {{-- <ul>
                                                    <li>
                                                        <input type="checkbox" name="subject[]"
                                                            value="Analytical Biochemistry">
                                                        <label>Analytical Biochemistry</label>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    {{-- </div>
                    </div> --}}
                </div>
                <div class="col-md-9">
                    <div
                        class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-4 g-3 mb-5">
                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-1.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(222)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$24.00</del>
                                        <span class="text-dark fw-semibold">$18.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-2.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(41)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$54.00</del>
                                        <span class="text-dark fw-semibold">$50.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-3.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(32)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$14.00</del>
                                        <span class="text-dark fw-semibold">$12.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-1.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(222)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$24.00</del>
                                        <span class="text-dark fw-semibold">$18.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-2.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(41)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$54.00</del>
                                        <span class="text-dark fw-semibold">$50.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="{{ asset('frontend/assets/images/product-thumb-3.png') }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                                    <div>
                                        <span class="rating">
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-full"></use>
                                            </svg>
                                            <svg width="18" height="18" class="text-warning">
                                                <use xlink:href="#star-half"></use>
                                            </svg>
                                        </span>
                                        <span>(32)</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <del>$14.00</del>
                                        <span class="text-dark fw-semibold">$12.00</span>
                                        <span
                                            class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%
                                            OFF</span>
                                    </div>
                                    <div class="button-area p-3 pt-0">
                                        <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity"
                                                    class="form-control border-dark-subtle input-number quantity"
                                                    value="1"></div>
                                            <div class="col-7"><a href="#"
                                                    class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg
                                                        width="18" height="18">
                                                        <use xlink:href="#cart"></use>
                                                    </svg> Add to Cart</a></div>
                                            <div class="col-2"><a href="#"
                                                    class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18"
                                                        height="18">
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / product-grid -->
                    {{-- pagination --}}
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="pagination-wrapper">
                                {{-- <div class="paginate">
                                    @if ($all_product->currentPage() > 1)
                                        <a href="{{ $all_product->previousPageUrl() }}">&laquo;</a>
                                    @endif
                                    @if ($all_product->currentPage() > 5)
                                        <span></span>
                                    @endif
                                    @for ($i = max(1, $all_product->currentPage() - 4); $i <= min($all_product->lastPage(), $all_product->currentPage() + 5); $i++)
                                        <a href="{{ $all_product->url($i) }}"
                                            class="{{ $i == $all_product->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                                    @endfor
                                    @if ($all_product->currentPage() < $all_product->lastPage() - 4)
                                        <span></span>
                                    @endif
                                    @if ($all_product->hasMorePages())
                                        <a href="{{ $all_product->nextPageUrl() }}">&raquo;</a>
                                    @endif
                                </div> --}}
                                <div class="paginate">
                                    <a href="#">&laquo;</a> <!-- Previous Page Button -->

                                    <a href="#" class="active">1</a> <!-- Active Page -->
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>

                                    <span>...</span> <!-- Dots for More Pages -->

                                    <a href="#">10</a> <!-- Last Page -->
                                    <a href="#">&raquo;</a> <!-- Next Page Button -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Price Filter
            const rangeInput = document.querySelectorAll(".range-input input"),
                priceInput = document.querySelectorAll(".price-input input"),
                range = document.querySelector(".price-slider .price-progress");

            let priceGap = 1000;

            function updateSlider() {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;

                range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }

            priceInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minPrice = parseInt(priceInput[0].value),
                        maxPrice = parseInt(priceInput[1].value);

                    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                        if (e.target.classList.contains("input-min")) {
                            rangeInput[0].value = minPrice;
                        } else {
                            rangeInput[1].value = maxPrice;
                        }
                        updateSlider();
                    }
                });
            });

            rangeInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minVal = parseInt(rangeInput[0].value),
                        maxVal = parseInt(rangeInput[1].value);

                    if (maxVal - minVal < priceGap) {
                        if (e.target.classList.contains("range-mini")) {
                            rangeInput[0].value = maxVal - priceGap;
                        } else {
                            rangeInput[1].value = minVal + priceGap;
                        }
                    } else {
                        updateSlider();
                    }
                });
            });

            // Ensure the initial slider values match the input fields
            updateSlider();
        });




        document.addEventListener("DOMContentLoaded", function() {

        });

        $(document).on('click', '.tree label', function(e) {
            $(this).next('ul').fadeToggle();
            e.stopPropagation();
        });

        $(document).on('change', '.tree input[type=checkbox]', function(e) {
            $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
            $(this).parentsUntil('.tree').children("input[type='checkbox']").prop('checked', this
                .checked);
            e.stopPropagation();
        });

        $(document).on('click', 'button', function(e) {
            switch ($(this).text()) {
                case 'Collepsed':
                    $('.tree ul').fadeOut();
                    break;
                case 'Expanded':
                    $('.tree ul').fadeIn();
                    break;
                case 'Checked All':
                    $(".tree input[type='checkbox']").prop('checked', true);
                    break;
                case 'Unchek All':
                    $(".tree input[type='checkbox']").prop('checked', false);
                    break;
                default:
            }
        });
    </script>
@endsection
