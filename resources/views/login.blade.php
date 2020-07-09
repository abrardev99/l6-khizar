@extends('layouts.app')
@section('content')

<div class="site-block-wrap">

    <div class="site-blocks-cover overlay" style="background-image: url(vintage/images/8.jpg);" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">



            </div>
        </div>
    </div>

</div>
<section class="site-section bg-light bg-image" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">LogIn/SignUp</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">



                <form action="#" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">SignUp!</h2>

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
                            <label class="text-black" for="password">Password</label>
                            <input type="password" id="password" class="form-control">
                            <br>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <div class="col-md-5">
                <div class="p-4 mb-3 bg-white">
                    <h2 class="h4 text-black mb-5">LogIn!</h2>
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="password">Password</label>
                            <input type="password" id="password" class="form-control">
                            <br>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
</section>

@endsection
