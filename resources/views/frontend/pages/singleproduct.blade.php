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
                {{-- <div class="image-slider">
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
                </div> --}}
                <div class="image-badge">Trending</div>
                <div class="container" style="padding: 0">
                    <div class="image-container">
                        <img id="mainImage" class="main-image" src="https://picsum.photos/800/400?random=1" alt="Main Image">
                    </div>
                    <div class="slider-container">
                        <span class="arrow" onclick="scrollSlider(-1)">&#10094;</span>
                        <div class="slider" id="slider">
                            <img src="https://picsum.photos/800/400?random=1" class="active" onclick="changeImage(this.src)">
                            <img src="https://picsum.photos/800/400?random=2" onclick="changeImage(this.src)">
                            <img src="https://picsum.photos/800/400?random=3" onclick="changeImage(this.src)">
                        </div>
                        <span class="arrow" onclick="scrollSlider(1)">&#10095;</span>
                    </div>
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
                    <div class="col-md-12 mt-2">
                        <ul class="social-sharing list-social list-unstyled"><li class="list-social__item">
                            <a class="social-sharing__link link link--text link-with-icon" href="//www.facebook.com/sharer.php?u=https://www.ugaoo.com/products/brazilwood-plant" target="_blank" rel="noopener">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 18 18">
                                <path fill="currentColor" d="M16.42.61c.27 0 .5.1.69.28.19.2.28.42.28.7v15.44c0 .27-.1.5-.28.69a.94.94 0 01-.7.28h-4.39v-6.7h2.25l.31-2.65h-2.56v-1.7c0-.4.1-.72.28-.93.18-.2.5-.32 1-.32h1.37V3.35c-.6-.06-1.27-.1-2.01-.1-1.01 0-1.83.3-2.45.9-.62.6-.93 1.44-.93 2.53v1.97H7.04v2.65h2.24V18H.98c-.28 0-.5-.1-.7-.28a.94.94 0 01-.28-.7V1.59c0-.27.1-.5.28-.69a.94.94 0 01.7-.28h15.44z"></path>
                              </svg>
                              <span class="social-sharing__title label" aria-hidden="true">Share</span>
                              <span class="visually-hidden visually-hidden--inline">Opens in a new window.</span>
                            </a>
                          </li><li class="list-social__item">
                            <a class="social-sharing__link link link--text link-with-icon" href="//twitter.com/share?text=Brazilian%20Wood%20Plant&amp;url=https://www.ugaoo.com/products/brazilwood-plant" target="_blank" rel="noopener">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                              </svg>
                              <span class="social-sharing__title label" aria-hidden="true">Tweet</span>
                              <span class="visually-hidden visually-hidden--inline">Opens in a new window.</span>
                            </a>
                          </li><li class="list-social__item">
                            <a class="social-sharing__link link link--text link-with-icon" href="//pinterest.com/pin/create/button/?url=https://www.ugaoo.com/products/brazilwood-plant&amp;media=//www.ugaoo.com/cdn/shop/files/1_cce982de-b1ea-473c-8687-004af7fb18f1.jpg?v=1740136077&amp;description=Brazilian%20Wood%20Plant" target="_blank" rel="noopener">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18">
                                <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z"></path>
                              </svg>
                              <span class="social-sharing__title label" aria-hidden="true">Pin it</span>
                              <span class="visually-hidden visually-hidden--inline">Opens in a new window.</span>
                            </a>
                          </li><li class="list-social__item">
                            <a class="social-sharing__link link link--text link-with-icon" href="mailto:?&amp;subject=Brazilian%20Wood%20Plant&amp;body=https://www.ugaoo.com/products/brazilwood-plant">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-email-send" viewBox="0 0 24 24">
                                <path d="M22 20.007a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V19h18V7.3l-8 7.2-10-9V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v16.007zM4.434 5L12 11.81 19.566 5H4.434zM0 15h8v2H0v-2zm0-5h5v2H0v-2z" fill="currentColor"></path>
                              </svg>
                              <span class="social-sharing__title label" aria-hidden="true">Email</span>
                              <span class="visually-hidden visually-hidden--inline">Opens in a new window.</span>
                            </a>
                          </li>
                          <li class="list-social__item">
                            <a class="social-sharing__link link link--text link-with-icon" target="_blank" href="//wa.me/?text=Try our product?url=https://www.ugaoo.com/products/brazilwood-plant&amp;media=//www.ugaoo.com/cdn/shop/files/1_cce982de-b1ea-473c-8687-004af7fb18f1_1024x1024.jpg?v=1740136077&amp;description=Brazilian%20Wood%20Plant" title="whatsapp">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                              </svg>
                              <span class="social-sharing__title label" aria-hidden="true" style="margin: 10px;">Whatsapp</span>
                              <span class="visually-hidden visually-hidden--inline">Share</span>
                            </a>
                          </li></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                 <div class="product-desc">
                    <h3 class="fs-4 fw-normal">About the Product</h3>
                    <p>Looking for a unique addition to your home garden? Then the Dracaena fragrans Brazil Wood plant is just what you need! At first glance, this plant may not specifically stand out.But the more you get to know about it, the more you will gravitate towards it. This stunning Dracaena is just a wooden log at first but as you nurture it, it grows stunning leaves from different nodes that sprout wonderfully. This can then grow in height as well and become the most beautiful plant you’ve seen, giving you a unique and lush display in your home or garden.</p>
                 </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="section-header d-flex flex-wrap justify-content-between my-4">
                <h2 class="section-title">You May Also Like</h2>
                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn-primary rounded-1">View All</a>
                </div>
              </div>
             <div class="related-product">
                <div class="product-item ">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
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
                <div class="product-item ">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
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
                <div class="product-item ">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
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
                <div class="product-item ">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
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
                <div class="product-item ">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="{{asset('frontend/assets/images/product-thumb-13.png')}}" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Gourmet Dark Chocolate Bars</h3>
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
    </div>
</section>
<script>
     function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }

        function scrollSlider(direction) {
            const slider = document.getElementById('slider');
            slider.scrollBy({ left: direction * 120, behavior: 'smooth' });
        }
</script>
@endsection
