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
                            <li class="breadcrumb-item active">Blogs</li>
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
            <div class="col-md-6">
                <div class="section-header mt-5">
                    <h2 class="section-title">Our Blogs</h2>
                    {{-- <p>Indoor plants bring stunning & vibrant aesthetics along with a wide array of benefits to any space. Elevate your living or office space with a variety of indoor house plants grown and treated with utmost care just for you!</p> --}}
                  </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                  <div class="Blogsearch">
                    <form action="">
                        <input type="text" name="blog-search" id="blog-search" class="">
                        <input type="hidden" name="" id="">
                        <button type="submit" class="btn btn-success">Search</button>
                    </form>
                  </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="categories-wrapper">
                    <div class="categories-section-category">
                        <div class="categories-section-image-wrapper">
                          <a href="/blogs/gardening-basics">
                            <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" alt="Gardening Basics">
                          </a>
                          <div class="categories-section-overlay">
                            <p>Dive in and find everything you need to know about the basics of gardening &amp; plant care and create the perfect home garden of your dreams!</p>
                            <a href="/blogs/gardening-basics" class="categories-section-button">Explore</a>
                          </div>
                        </div>
                        <h3>Gardening Basics</h3>
                    </div>
                    <div class="categories-section-category">
                        <div class="categories-section-image-wrapper">
                          <a href="/blogs/gardening-basics">
                            <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" alt="Gardening Basics">
                          </a>
                          <div class="categories-section-overlay">
                            <p>Dive in and find everything you need to know about the basics of gardening &amp; plant care and create the perfect home garden of your dreams!</p>
                            <a href="/blogs/gardening-basics" class="categories-section-button">Explore</a>
                          </div>
                        </div>
                        <h3>Gardening Basics</h3>
                    </div>
                    <div class="categories-section-category">
                        <div class="categories-section-image-wrapper">
                          <a href="/blogs/gardening-basics">
                            <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" alt="Gardening Basics">
                          </a>
                          <div class="categories-section-overlay">
                            <p>Dive in and find everything you need to know about the basics of gardening &amp; plant care and create the perfect home garden of your dreams!</p>
                            <a href="/blogs/gardening-basics" class="categories-section-button">Explore</a>
                          </div>
                        </div>
                        <h3>Gardening Basics</h3>
                    </div>
                    <div class="categories-section-category">
                        <div class="categories-section-image-wrapper">
                          <a href="/blogs/gardening-basics">
                            <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" alt="Gardening Basics">
                          </a>
                          <div class="categories-section-overlay">
                            <p>Dive in and find everything you need to know about the basics of gardening &amp; plant care and create the perfect home garden of your dreams!</p>
                            <a href="/blogs/gardening-basics" class="categories-section-button">Explore</a>
                          </div>
                        </div>
                        <h3>Gardening Basics</h3>
                    </div>
                    <div class="categories-section-category">
                        <div class="categories-section-image-wrapper">
                          <a href="/blogs/gardening-basics">
                            <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" alt="Gardening Basics">
                          </a>
                          <div class="categories-section-overlay">
                            <p>Dive in and find everything you need to know about the basics of gardening &amp; plant care and create the perfect home garden of your dreams!</p>
                            <a href="/blogs/gardening-basics" class="categories-section-button">Explore</a>
                          </div>
                        </div>
                        <h3>Gardening Basics</h3>
                    </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <section class="my-4">
            <div class="container-lg">
                <h2 class="section-title mb-3">Recent Articles</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100" style="border: none">
                        <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">5 Low-Maintenance Plants Perfect for Busy Moms</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100" style="border: none">
                        <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">5 Low-Maintenance Plants Perfect for Busy Moms</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100" style="border: none">
                        <img src="//www.ugaoo.com/cdn/shop/files/image_4_65d278b2-54dd-43d9-9dc1-4067e883329a_600x600.png?v=1738551383" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">5 Low-Maintenance Plants Perfect for Busy Moms</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
      </section>
@endsection
