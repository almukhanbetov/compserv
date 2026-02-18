@extends('layouts.app')
@section('content')
    <!-- Contact Form Area -->
    <div class="contact-form-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <!-- <h2>Let's Send Us a Message Below</h2> -->
            </div>

            <div class="row pt-45">
                <div class="col-lg-4">
                    <div class="contact-info mr-20">
                        <!-- <span>Contact Info</span> -->
                        <!-- <h2>Let's Connect With Us</h2> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet varius mi, ut hendrerit magna mollis ac. </p> -->
                        <ul>
                            <li>
                                <div class="content">
                                    <i class='bx bx-phone-call'></i>
                                    <h3>Телефон</h3>
                                    <a href="tel:+7(707)-780-1011">+7 (707) 780-1011</a>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <i class='bx bxs-map'></i>
                                    <h3>Адрес</h3>
                                    <span>г.Алматы Валиханова 47, KZ</span>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <i class='bx bx-message'></i>
                                    <h3>Почта</h3>
                                    <a href="mailto:almuko.m@gmail.com">almuko.m@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ваше имя <span>*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please Enter Your Name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ваш Email <span>*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please Enter Your Email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Телефон <span>*</span></label>
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please Enter Your number" class="form-control"
                                            placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ваша тема <span>*</span></label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Сообщение<span>*</span></label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required
                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Accept <a href="terms-condition.html">Terms & Conditions</a> And <a
                                                href="privacy-policy.html">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                        Отправить сообщение <i class='bx bx-chevron-right'></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->

    <!-- Map Area -->
    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.5023158111726!2d76.94600179090145!3d43.261851303207315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e9a9dbe7d79%3A0xff31374e0915bc3c!2z0YPQu9C40YbQsCDQktCw0LvQuNGF0LDQvdC-0LLQsCA0Nywg0JDQu9C80LDRgtGLIDA1MDAwMA!5e0!3m2!1sru!2skz!4v1770812220499!5m2!1sru!2skz"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Map Area End -->
@endsection
