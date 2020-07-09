@extends('layouts.app')
@section('content')


    <!-- background images start -->
    <div class="site-block-wrap">
        <div class="owl-carousel with-dots">
            <div class="site-blocks-cover overlay overlay-2" style="background-image: url(vintage/images/7.jpg);" data-aos="fade" id="home-section">

            </div>
            <div class="site-blocks-cover overlay overlay-2" style="background-image: url(vintage/images/1.jpg);" data-aos="fade" id="home-section">


            </div>

            <div class="site-blocks-cover overlay overlay-2" style="background-image: url(vintage/images/2.jpg);" data-aos="fade" id="home-section">

            </div>

        </div>

    </div>
    <!-- End -->
    <br><br>

    <!-- About section  -->
    <section class="site-section" id="about-section">
        <div class="container">

            <div class="row large-gutters">
                <div class="col-lg-6 mb-5">

                    <div class="owl-carousel slide-one-item with-dots">
                        <div><img src="{{ asset('vintage/images/b6.jpg') }}" alt="Image" class="img-fluid"></div>
                        <div><img src="{{ asset('vintage/images/L8.jpg') }}" alt="Image" class="img-fluid"></div>
                        <div><img src="{{ asset('vintage/images/d7.jpg') }}" alt="Image" class="img-fluid"></div>
                    </div>

                </div>
                <div class="col-lg-6 ml-auto">

                    <h2 class="section-title mb-3 justify-content-center">About</h2>
                    <p class="lead justify-content">There's this notion that to grow a business, you have to be ruthless. But we know there's a better way to grow. One where what's good for the bottom line is also good for customers. We believe businesses can grow with a conscience, and succeed with a soul — and that they can do it with inbound. That's why we've created a platform uniting software, education, and community to help businesses grow better every day. Our customer service website makes it easy to connect with customers, help them succeed, and turn them into promoters of your business.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- About section close -->

    <!-- Categories Section -->
    <section class="site-section" id="news-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Categories</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="{{ asset('vintage/images/b6.jpg') }}" alt="Image" class="img-fluid" style="height: 200px width:200px">
                        <h2 class="font-size-regular"><a href="bedroom.html" class="text-dark  ">Bedroom Furniture</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="{{ asset('vintage/images/L10.jpg') }}" alt="Image" class="img-fluid " style="height: 200px width:200px" >
                        <h2 class="font-size-regular"><a href="lounge.html" class="text-dark">Lounge Furniture</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="vintage/images/d1.jpg" alt="Image" class="img-fluid ">
                        <h2 class="font-size-regular"><a href="dining.html" class="text-dark">Dinning Furniture</a></h2>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- <div class="site-section" id="properties-section">
        <div class="container">
          <div class="row large-gutters">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                <div class="ftco-media-1-inner">
                  <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_1.jpg" alt="FImageo" class="img-fluid"></a>
                  <div class="ftco-media-details">
                    <h3> Many homeowners avoid tackling decorating projects simply because they are afraid of making costly mistakes.</h3>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_2.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>We all want our homes to be the best in the neighborhood. And for this, we’ve all got some ideas and unique desig.</h3>

                      </div>

                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_3.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>Residential furniture isn't created with as sturdy materials and are usually flashier designs that aim to follow trends and be more stylish.</h3>

                      </div>

                    </div>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Even one luxurious element or piece of furniture can make a space special.One of the easiest luxury furnishings to include in a room is a luxury bed.</h3>

                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                  <div class="ftco-media-1">
                      <div class="ftco-media-1-inner">
                        <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_2.jpg" alt="Image" class="img-fluid"></a>
                        <div class="ftco-media-details">
                          <h3>HD17 19 Utica Ave.</h3>
                          <p>New York - USA</p>
                          <strong>$20,000,000</strong>
                        </div>

                      </div>
                    </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                  <div class="ftco-media-1">
                      <div class="ftco-media-1-inner">
                        <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_3.jpg" alt="Image" class="img-fluid"></a>
                        <div class="ftco-media-details">
                          <h3>HD17 19 Utica Ave.</h3>
                          <p>New York - USA</p>
                          <strong>$20,000,000</strong>
                        </div>

                      </div>
                    </div>
              </div>

          </div>
        </div>
      </div>
       -->




@endsection
