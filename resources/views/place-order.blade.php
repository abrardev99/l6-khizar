@extends('layouts.app')
@section('content')

<div class="site-block-wrap">

    <div class="site-blocks-cover overlay" style="background-image: url(vintage/images/8.jpg);" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">



            </div>
        </div>
    </div>
    <!-- <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2"  style="background-image: url(images/8.jpg);" data-aos="fade" id="home-section">

      </div>

    </div>
     -->
</div>
<section class="site-section bg-light bg-image" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Order Now</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">



                <form action="#" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">Place Your Order Here</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Mobile Number</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Quantity</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Categories</label>
                            <input type="subject" id="subject" class="form-control">



                        </div>

                    </div>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Adress</label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>
                </form>
                <!--For Cart Image-->
            </div>
            <div class="col-md-5">

                <div class="p-4 mb-3 bg-white">
                    <a href=""><img src="vintage/images/c1.png" alt="Image" class="img-fluid"></a>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
