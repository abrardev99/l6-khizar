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
                <h2 class="section-title mb-3">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">



                <form action="#" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">Get In Touch</h2>

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
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-md-5">

                <div class="p-4 mb-3 bg-white">
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">Satyana Road, Faisalabad, Pakistan</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@gmail.com</a></p>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
