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
                            <li class="breadcrumb-item active">Sale on Online Garden Products, Seeds and Agricultural Products | Ugaoo.com</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('http://127.0.0.1:8000/frontend/assets/images/banner-1.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 pt-5 my-5">
                <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Organic</span> Foods at your <span class="fw-bold">Doorsteps</span></h2>
                <p class="fs-4">Dignissim massa diam elementum.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="latest-blog" class="pb-4">
        <div class="container-lg">
          <div class="row">
            <div class="section-header mt-5">
              <h2 class="section-title">Collections</h2>
              <p>Indoor plants bring stunning & vibrant aesthetics along with a wide array of benefits to any space. Elevate your living or office space with a variety of indoor house plants grown and treated with utmost care just for you!</p>
            </div>
          </div>
          <div class="row">
            <div class="section-header d-flex align-items-center justify-content-between mb-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter"><i class="fa-solid fa-sort-down"></i> FILTER</a>
                <div class="d-flex align-items-center text-align-center gap-2">
                    <a href="#" class="btn btn-primary">SORT BY</a>
                    <p style="margin-bottom: 0">200 products</p>
                </div>
              </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-1.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-2.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(41)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$54.00</del>
                        <span class="text-dark fw-semibold">$50.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-3.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(32)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$14.00</del>
                        <span class="text-dark fw-semibold">$12.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-1.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic Baby Spinach</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-5.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic Spinach Leaves (Fresh Produce)</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-6.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Fresh Salmon</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-7.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Imported Italian Spaghetti Pasta</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-8.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Granny Smith Apples</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-9.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic 2% Reduced Fat Milk </h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-10.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- / product-grid -->


            </div>
          </div>
        </div>
      </section>
@endsection
