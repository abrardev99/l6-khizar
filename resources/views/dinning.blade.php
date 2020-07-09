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


    <!-- Images Section -->
    <section class="site-section" id="news-section">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d1.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular href="" class="text-dark">Price:55,000</h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d2.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:69,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href="{{ url('single') }}"><img src="vintage/images/d3.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="{{ url('single') }}" class="text-dark">Price:70,000</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d4.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:44,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d5.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:55,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d6.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:60,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d7.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:39,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d8.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:98,000</a></h2>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <a href=""><img src="vintage/images/d9.jpg" alt="Image" class="img-fluid"></a>
                        <h2 class="font-size-regular"><a href="" class="text-dark">Price:56,000</a></h2>

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
