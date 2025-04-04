@extends('frontend.app')
@section('content')
    <section
        style="background-image: url('{{ asset('frontend/assets/images/banner-1.jpg') }}');background-repeat: no-repeat;background-size: cover;">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 pt-5 mt-5">
                    <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Organic</span> Foods at your <span
                            class="fw-bold">Doorsteps</span></h2>
                    <p class="fs-4">Dignissim massa diam elementum.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Start
                            Shopping</a>
                        <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="row text-dark">
                                <div class="col-auto">
                                    <p class="fs-1 fw-bold lh-sm mb-0">14k+</p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase lh-sm mb-0">Product Varieties</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row text-dark">
                                <div class="col-auto">
                                    <p class="fs-1 fw-bold lh-sm mb-0">50k+</p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase lh-sm mb-0">Happy Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row text-dark">
                                <div class="col-auto">
                                    <p class="fs-1 fw-bold lh-sm mb-0">10+</p>
                                </div>
                                <div class="col">
                                    <p class="text-uppercase lh-sm mb-0">Store Locations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
                <div class="col">
                    <div class="card border-0 bg-primary rounded-0 p-4 text-light">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <svg width="60" height="60">
                                    <use xlink:href="#fresh"></use>
                                </svg>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="text-light">Fresh from farm</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <svg width="60" height="60">
                                    <use xlink:href="#organic"></use>
                                </svg>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="text-light">100% Organic</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 bg-danger rounded-0 p-4 text-light">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <svg width="60" height="60">
                                    <use xlink:href="#delivery"></use>
                                </svg>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body p-0">
                                    <h5 class="text-light">Free delivery</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="my-3 py-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-7">
                    <h3>Get in touch</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Name" id="">
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="">
                        </div>
                        <div class="col-md-12 mb-4">
                            <input type="number" class="form-control" name="phone" placeholder="Phone number"
                                id="">
                        </div>
                        <div class="col-md-12 mb-4">
                            <textarea name="message" id="" class="form-control" cols="30" rows="5" placeholder="Comment"></textarea>
                        </div>

                        <div class="col-md-6 my-3">
                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <span>Love Plant PVT Ltd.</span>
                    </div>
                    <div class="mb-3">
                        <label for="">Name</label>
                        <span>Ugaoo,03-111, Third floor, WeWork Eleven West, Pancard Club Road, Baner, Pune 411045,</span>
                        <span>Telephone : +91-9129912991</span>
                    </div>
                    <div class="mb-3">
                        <label for="">Grievance Redressal Officer:</label>
                        <span>Akanksha Shrestha</span>
                        <span>shrestha.akanksha@ugaoo.com</span>
                    </div>
                    <div class="mb-3">
                        <label for="">Follow us:</label>
                        <div class="social-links mt-3">
                            <ul class="d-flex list-unstyled gap-2">
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg width="16" height="16">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg width="16" height="16">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg width="16" height="16">
                                            <use xlink:href="#youtube"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg width="16" height="16">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-light">
                                        <svg width="16" height="16">
                                            <use xlink:href="#amazon"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container-lg">
            <div class="card-contact-container" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap:20px">
                <!-- First Card -->
                <div class="card-contact">
                    <label for="">Bulk/Corporate Enquiry</label>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>
                </div>

                <!-- Second Card-contact -->
                <div class="card-contact">
                    <label for="">Gardening Services Enquiry(Pune & Mumbai)</label>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>

                </div>

                <div class="card-contact">
                    <label for="">Franchise Enquiry</label>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>
                    <p>Contact Person - Corporate Gifting Executive</p>

                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.995407320288!2d85.31732847599145!3d27.686536826408105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19296fa2d919%3A0x4d68cac30eaaff03!2sLove%20Plant!5e0!3m2!1sen!2snp!4v1743762691788!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
