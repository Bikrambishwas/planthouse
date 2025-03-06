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
                        <li class="breadcrumb-item">
                            <a href="/">Plants</a>
                        </li>
                        <li class="breadcrumb-item active">Brazilian Wood Plant</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <div class="image-slider">
                    <section class="slider__content">
                        <button type="button" class="slider-control--button prev-button">
                            <svg width="16" height="16" fill="currentColor" class="icon arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                        </button>
                        <main class="image-display"></main>
                        <button type="button" class="slider-control--button next-button">
                            <svg width="16" height="16" fill="currentColor" class="icon arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </button>
                    </section>
                    <nav class="slider-navigation">
                        <button class="nav-button" aria-selected="true">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=1" alt="Thumbnail 1" />
                        </button>
                        <button class="nav-button" aria-selected="false">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=2" alt="Thumbnail 2" />
                        </button>
                        <button class="nav-button" aria-selected="false">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=3" alt="Thumbnail 3" />
                        </button>
                        <button class="nav-button" aria-selected="false">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=4" alt="Thumbnail 4" />
                        </button>
                        <button class="nav-button" aria-selected="false">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=5" alt="Thumbnail 5" />
                        </button>
                        <button class="nav-button" aria-selected="false">
                            <img class="thumbnail" src="https://picsum.photos/800/400?random=6" alt="Thumbnail 6" />
                        </button>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="row">
                    <div class="col-md-12">
                         <h3 class="fs-4 fw-normal">Brazilian Wood Plant</h3>
                    </div>
                    <div class="col-md-12">
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="d-flex justify-content-start align-items-center gap-2">
                            <del>$24.00</del>
                            <span class="text-dark fw-semibold">$18.00</span>
                            <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10%</span>
                          </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3 class="fs-6 fw-normal">SELECT PLANTER</h3>
                         <div class="mt-3">
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Blue diamon almonds</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Angie’s Boomchickapop Corn</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Salty kettle Corn</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Chobani Greek Yogurt</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Sweet Vanilla Yogurt</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Foster Farms Takeout Crispy wings</a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h3 class="fs-6 fw-normal">SELECT STATUE</h3>
                        <div class="mt-3">
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Blue diamon almonds</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Angie’s Boomchickapop Corn</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Salty kettle Corn</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Chobani Greek Yogurt</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Sweet Vanilla Yogurt</a>
                            <a href="#" class="btn btn-warning me-2 mb-2" style="border:1px solid #b9b9b973">Foster Farms Takeout Crispy wings</a>
                         </div>
                    </div>
                    <div class="col-md-12">
                        <div class="button-area pt-0">
                            <div class="row g-1 mt-2">
                              <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                              <div class="col-8"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                              <div class="col-1"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12"><a href="#" class="btn btn-light rounded-1 p-2 fs-7 btn-cart" style="border:1px solid #6bb252
                                ; color:#6bb252"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  Accordion Item #1
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  Accordion Item #2
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  Accordion Item #3
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
