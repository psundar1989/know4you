@extends('layouts.app')
@section('title', 'Contact Us - Erfolgskompass: Führung, Wachstum und Resilienz | Know4you')
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
                            <h1 class="wow fadeInUp">Kontaktieren <span>Sie uns</span></h1>
                            <!-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
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

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Nehmen Sie Kontakt auf</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.25s">
                            Lassen Sie uns gemeinsam das Leben <span>und Geschäft gestalten</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Contact Us Title Start -->
                        <div class="contact-us-title">
                            <h3 class="wow fadeInUp">send a message</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Unlock your potential with expert guidance!
                                Schedule a free consultation toward personal and business success.</p>
                        </div>
                        <!-- Contact Us Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="contactForm" action="{{ route('contact-submit') }}" method="POST" data-toggle="validator"
                            class="wow fadeInUp" data-wow-delay="0.4s">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" class="form-control" id="fname" name="fname"
                                        placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" class="form-control" id="lname" name="lname"
                                        placeholder="Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" class="form-control" id="email" name="con_email"
                                        placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">
                                            <span id="loader" class="spinner-border spinner-border-sm text-white"
                                                text-whote aria-hidden="true" style="display: none;"></span>
                                            submit message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="contactform_msg_cont" style="display:none;"></div> <!-- For success/error messages -->

                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>call us</h3>
                                <p>Call us today for personalized coaching and transformative growth!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="{{ url('assets/images/icon-phone.svg') }} " alt="">
                                </div>

                                <div class="contact-info-title">
                                    <h3>+41792883385</h3>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>email us</h3>
                                <p>Email us now for expert coaching and tailored growth solutions!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="{{ url('assets/images/icon-mail.svg') }}" alt="">
                                </div>

                                <div class="contact-info-title">
                                    <h3>info@Know4you.com</h3>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Contact Info Contact Start -->
                            <div class="contact-info-contant">
                                <h3>visit us</h3>
                                <p>Visit us for personalized coaching and guidance toward lasting success!</p>
                            </div>
                            <!-- Contact Info Contact End -->

                            <!-- Contact Info Body Start -->
                            <div class="contact-info-body">
                                <div class="icon-box">
                                    <img src="{{ url('assets/images/icon-location.svg') }}" alt="">
                                </div>

                                <div class="contact-info-title">
                                    <h3>785 15h Street, Office 478 Berlin, De 81566 </h3>
                                </div>
                            </div>
                            <!-- Contact Info Body End -->
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Information End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map bg-section">
        <div class="container-flude">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

    <!-- Our FAQs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our FAQs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FAQ</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">Your coaching questions <span>answered simply
                                    here</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQs CTA Box Start -->
                        <div class="faqs-cta-box wow fadeInUp" data-wow-delay="0.75s">
                            <!-- Company Client Images Start -->
                            <div class="company-client-images">
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('assets/images/satisfy-client-img-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('assets/images/satisfy-client-img-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('assets/images/satisfy-client-img-3.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('assets/images/satisfy-client-img-4.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="client-image">
                                    <figure class="image-anime">
                                        <img src="{{ url('assets/images/satisfy-client-img-5.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Company Client Images End -->
                            <div class="faqs-cta-content">
                                <h3>Still have you any question?</h3>
                                <p>We're ready to help you to answer any questions.</p>
                                <a href="tel:789859664" class="btn-phone"><i class="fa-solid fa-phone-volume"></i>+01 789
                                    859 664</a>
                            </div>
                        </div>
                        <!-- FAQs CTA Box End -->
                    </div>
                    <!-- Our FAQs Content End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-faq-section">
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="faqaccordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What is a Life & Business Coach?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Coaching focuses on future goals, actionable steps, and personal development.
                                            While therapy often deals with healing past issues, coaching is more about
                                            improving present circumstances and building a path forward. Coaches do not
                                            diagnose or treat mental health conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How does coaching differ from therapy?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Coaching focuses on future goals, actionable steps, and personal development.
                                            While therapy often deals with healing past issues, coaching is more about
                                            improving present circumstances and building a path forward. Coaches do not
                                            diagnose or treat mental health conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Who can benefit from life and business coaching?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Coaching focuses on future goals, actionable steps, and personal development.
                                            While therapy often deals with healing past issues, coaching is more about
                                            improving present circumstances and building a path forward. Coaches do not
                                            diagnose or treat mental health conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        How long does the coaching process take?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Coaching focuses on future goals, actionable steps, and personal development.
                                            While therapy often deals with healing past issues, coaching is more about
                                            improving present circumstances and building a path forward. Coaches do not
                                            diagnose or treat mental health conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Can coaching help my business grow?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Coaching focuses on future goals, actionable steps, and personal development.
                                            While therapy often deals with healing past issues, coaching is more about
                                            improving present circumstances and building a path forward. Coaches do not
                                            diagnose or treat mental health conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs Section End -->
@endsection
