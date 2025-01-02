@extends('layouts.app')
@section('title', 'Blogs - Erfolgskompass: Führung, Wachstum und Resilienz | Know4you')
@section('content')
 <!-- Page Header Start -->
	<div class="page-header bg-section parallaxie">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Content Start -->
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">Latest <span>blog</span></h1>
                            <!-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">blog</li>
                                </ol>
                            </nav> -->
                        </div>
                        <!-- Page Header Content End -->
                    </div>
                </div>
            </div>
        </div>	
        <!-- Page Header Box End -->	
	</div>
	<!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-1.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="#"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">Mentales Wohlbefinden und Belastbarkeit Die Macht des Coachings </a></h2>
                            <p>Psychisches Wohlbefinden und Belastbarkeit sind von entscheidender Bedeutung, um die Herausforderungen des Lebens zu meistern.
                            </p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-2.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="{{ url('/blog-details')}}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">How to Maintain Work-Life Balance in a Busy World</a></h2>
                            <p>Mental wellness and resilience are crucial for navigating life's challenges.</p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-3.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="{{ url('/blog-details')}}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">The Power of Mindset Transforming Your Life & Business</a></h2>
                            <p>Mental wellness and resilience are crucial for navigating life's challenges.</p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-4.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="{{ url('/blog-details')}}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">Why Gratitude is the Key to a Happier, More Fulfilling Life</a></h2>
                            <p>Mental wellness and resilience are crucial for navigating life's challenges.</p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-5.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="assets/images/post-1.jpg"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">Time Management Hacks for Busy Entrepreneurs</a></h2>
                            <p>Mental wellness and resilience are crucial for navigating life's challenges.</p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ url('/blog-details')}}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/post-6.jpg') }}" alt="">
                                </a>
                            </figure>

                            <div class="post-btn">
                                <a href="{{ url('/blog-details')}}"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ url('/blog-details')}}">Why Self-Discipline is the Key to Achieving Your Goals</a></h2>
                            <p>Mental wellness and resilience are crucial for navigating life's challenges.</p>
                        </div>
                        <!-- Post Item Content End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
      @endsection