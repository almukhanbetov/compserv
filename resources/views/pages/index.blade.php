@extends('layouts.app')
@section('content')
     @include('includes.banner-slider-area')
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-content mr-20">
                        <div class="section-title">
                            <span class="sp-color2">15 лет опыта</span>
                            <h2>Надёжный партнёр в IT-обучении и технологиях</h2>
                            <p>
                                Мы помогаем освоить востребованные IT-профессии и внедрять современные технологические
                                решения. Обучение построено на практике, реальных кейсах и актуальных инструментах,
                                которые используются в компаниях сегодня.
                            </p>
                            <p>Наша цель — дать не просто знания, а уверенные навыки для работы и развития в сфере IT:
                                от администрирования и DevOps до программирования.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="about-content-card">
                                    <i class="flaticon-practice"></i>
                                    <h3>Опыт и экспертиза</h3>
                                    <p>Мы обучаем на основе реальных задач и сценариев из рабочей практики. Наши
                                        программы постоянно обновляются под требования рынка.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6">
                                <div class="about-content-card">
                                    <i class="flaticon-help"></i>
                                    <h3>Быстрая поддержка</h3>
                                    <p>Наставники и техническая поддержка всегда на связи — помогаем разобраться,
                                        отвечаем на вопросы и сопровождаем на всех этапах обучения</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/about/about-img1.jpg') }}" alt="About Images">
                        <div class="sub-content">
                            <img src="{{ asset('assets/images/about/about-img2.jpg') }}" alt="About Images">
                            <div class="content">
                                <h3>4.5k</h3>
                                <span>Satisfied Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color1">Our Services</span>
                <h2>Мы помогаем компаниям внедрять современные IT решения</h2>
                <p class="margin-auto">
                    Наша команда объединяет экспертизу в инфраструктуре, разработке и цифровой трансформации, чтобы
                    создавать надежные и масштабируемые решения для вашего бизнеса
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-consultant"></i>
                        <h3><a href="service-details.html">IT Consulting</a></h3>
                        <p>Помогаем выстроить IT-стратегию, подобрать оптимальные технологии и снизить издержки.
                            Проводим аудит инфраструктуры, анализируем риски и предлагаем решения для роста и
                            безопасности бизнеса. </p>
                        <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-consulting"></i>
                        <h3><a href="service-details.html">Cloud Computing</a></h3>
                        <p>Переносим инфраструктуру в облако, настраиваем серверы и обеспечиваем отказоустойчивость
                            систем. Оптимизируем затраты и повышаем производительность за счёт современных облачных
                            технологий. </p>
                        <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-web-development"></i>
                        <h3><a href="service-details.html">Web Development</a></h3>
                        <p>Разрабатываем современные сайты и веб-приложения с высокой скоростью работы и удобным
                            интерфейсом. Используем актуальные технологии для создания безопасных и масштабируемых
                            решений. </p>
                        <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-stats"></i>
                        <h3><a href="service-details.html">Business Reform</a></h3>
                        <p>Автоматизируем бизнес-процессы, внедряем CRM и ERP-системы, повышаем прозрачность управления
                            и эффективность работы компании за счёт цифровых инструментов. </p>
                        <a href="service-details.html" class="learn-btn">Learn More <i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-shape">
            <img src="{{ asset('assets/images/shape/service-shape1.png') }}" alt="Images">
        </div>
    </section>
    <section class="work-process-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Our Working Process</span>
                <h2>How Our Services Will Help You to Grow Your Business</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="work-process-card">
                        <i class="flaticon-project"></i>
                        <h3>Discovery</h3>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
                        </p>
                        <div class="number">01</div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="work-process-card">
                        <i class="flaticon-chip"></i>
                        <h3>Planning</h3>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
                        </p>
                        <div class="number">02</div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="work-process-card">
                        <i class="flaticon-effective"></i>
                        <h3>Execute</h3>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
                        </p>
                        <div class="number">03</div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="work-process-card">
                        <i class="flaticon-bullhorn"></i>
                        <h3>Deliver</h3>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
                        </p>
                        <div class="number">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="build-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="build-content">
                        <div class="section-title">
                            <span>We Carry More Than Just Good Coding Skills</span>
                            <h2>Let's Build Your Website!</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="build-btn-area">
                        <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Contact Us <i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
            </div>

            <div class="build-play-img pt-45">
                <img src="assets/images/build-img.jpg" alt="Images">
                <div class="play-area-content">
                    <span>Watch Our Intro Video</span>
                    <h2>Perfect Solution for IT Services!</h2>
                </div>
                <div class="play-area">
                    <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i
                            class='bx bx-play'></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area -->
    <div class="counter-area pb-70 mt-5">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Numbers Are Talking</span>
                <h2>Наши результаты в обучении и карьерном росте студентов</h2>
                <p>Мы не просто обучаем — мы готовим востребованных специалистов. </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-web-development"></i>
                        <h3>205+</h3>
                        <span>Выпускников</span>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-consulting-1"></i>
                        <h3>245+</h3>
                        <span>Трудоустроено в IT</span>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-startup"></i>
                        <h3>50+</h3>
                        <span>Успешно проходят собеседования</span>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-md-3">
                    <div class="counter-another-content">
                        <i class="flaticon-tick"></i>
                        <h3>15+</h3>
                        <span>Авторских курсов</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="counter-shape">
            <div class="shape1">
                <img src="assets/images/shape/shape1.png" alt="Images">
            </div>
            <div class="shape2">
                <img src="assets/images/shape/shape2.png" alt="Images">
            </div>
        </div>
    </div>
    <!-- Counter Area End -->
    <!-- Call Area -->
    <!-- <div class="call-us-area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="call-contact">
                                    <h3>Call Us 24/7</h3>
                                    <a href="tel:+1(212)255-5511" class="call-btn">+1 (212) 255-5511</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tempor nunc ac sollicitudin Interdum et malesuada fames ac ante ipsum primis.</p>
                                    <a href="contact.html" class="default-btn btn-bg-two border-radius-5">Contact Us</a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="call-us-img">
                                    <img src="assets/images/call-us/call-us-img1.png" alt="Images">
                                    <div class="call-shape">
                                        <div class="shape1">
                                            <img src="assets/images/call-us/call-shap2.png" alt="Images">
                                        </div>

                                        <div class="shape2 shape2-rs">
                                            <img src="assets/images/call-us/call-shap3.png" alt="Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Call Area End -->
    <!-- Case Study Area -->
    <!-- <div class="case-study-area pt-100 pb-70">
                    <div class="container-fluid p-0">
                        <div class="section-title text-center">
                            <span class="sp-color2">Case Study</span>
                            <h2>Introduce Our Projects and Check Recent Work </h2>
                        </div>

                        <div class="case-study-slider owl-carousel owl-theme pt-45">
                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study1.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">Business Solution</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">Business</a></li>
                                        <li><a href="case-details.html">Planing</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study2.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">Business Solution</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">Business</a></li>
                                        <li><a href="case-details.html">Planing</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study3.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">Business Solution</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">Business</a></li>
                                        <li><a href="case-details.html">Planing</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study4.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">UI/UX Research</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">UI/UX Design</a></li>
                                        <li><a href="case-details.html">Research</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study6.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">Business Solution</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">Solution</a></li>
                                        <li><a href="case-details.html">Business</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="case-study-item">
                                <a href="case-details.html">
                                    <img src="assets/images/case-study/case-study2.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="case-details.html">Web Development</a></h3>
                                    <ul>
                                        <li><a href="case-details.html">Design</a></li>
                                        <li><a href="case-details.html">Development</a> </li>
                                    </ul>
                                    <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Case Study Area End -->
    <!-- Technology Area -->
    <section class="technology-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color1">Technology Index</span>
                <h2>Обучаем современным IT технологиям</h2>
            </div>

            <div class="row pt-45">
                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="fab fa-linux"></i>
                        <h3>Linux</h3>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="flaticon-website"></i>
                        <h3>Web</h3>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="fab fa-docker"></i>
                        <h3>Docker</h3>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="fas fa-sync-alt"></i>
                        <h3>CI/CD</h3>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="flaticon-smartwatch"></i>
                        <h3>Cloud </h3>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <div class="technology-card">
                        <i class="flaticon-cyber-security"></i>
                        <h3>Защита</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology Area End -->
    <!-- Brand Area -->
    <div class="brand-area ptb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo1.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style1.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo2.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style2.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo3.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style3.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo4.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style4.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo5.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style5.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/brand-logo3.png') }}" class="brand-logo-one"
                        alt="Images">
                    <img src="{{ asset('assets/images/brand-logo/brand-style3.png') }}" class="brand-logo-two"
                        alt="Images">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    <!-- Clients Area -->
    <!-- <section class="clients-area pt-100 pb-70">
                    <div class="container">
                        <div class="section-title text-center">
                            <span class="sp-color2">Our Clients</span>
                            <h2>Our Clients Feedback</h2>
                        </div>

                        <div class="clients-slider owl-carousel owl-theme pt-45">
                            <div class="clients-content">
                                <div class="content">
                                    <img src="assets/images/clients-img/clients-img1.jpg" alt="Images">
                                    <i class='bx bxs-quote-alt-left'></i>
                                    <h3>Jonthon Martin</h3>
                                    <span>App Developer</span>
                                </div>
                                <p>
                                    “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                                    sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                                </p>
                            </div>

                            <div class="clients-content">
                                <div class="content">
                                    <img src="assets/images/clients-img/clients-img2.jpg" alt="Images">
                                    <i class='bx bxs-quote-alt-left'></i>
                                    <h3>Alin Decros</h3>
                                    <span>Graphic Designer</span>
                                </div>
                                <p>
                                    “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                                    sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                                </p>
                            </div>

                            <div class="clients-content">
                                <div class="content">
                                    <img src="assets/images/clients-img/clients-img3.jpg" alt="Images">
                                    <i class='bx bxs-quote-alt-left'></i>
                                    <h3>Elen Musk</h3>
                                    <span>Web Developer</span>
                                </div>
                                <p>
                                    “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                                    sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="client-circle">
                        <div class="client-circle-1">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-2">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-3">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-4">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-5">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-6">
                            <div class="circle"></div>
                        </div>
                        <div class="client-circle-7">
                            <div class="circle"></div>
                        </div>
                    </div>
                </section> -->
    <!-- Clients Area End -->
    <!-- Blog Area -->
    <!-- <div class="blog-area pt-100 pb-70">
                    <div class="container">
                        <div class="section-title text-center">
                            <span class="sp-color2">Latest Blog</span>
                            <h2>Let’s Check Some Latest Blog</h2>
                        </div>

                        <div class="row pt-45">
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img1.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-tag">
                                            <h3>11</h3>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bxs-user'></i> By Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bx-purchase-tag-alt'></i>Business</a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="blog-details.html">Product Idea Solution for New Generation</a>
                                        </h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img2.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-tag">
                                            <h3>14</h3>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bxs-user'></i> By Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bx-purchase-tag-alt'></i>Invention</a>
                                            </li>
                                        </ul>
                                        <h3>
                                            <a href="blog-details.html">New Device Invention for Digital Platform</a>
                                        </h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/blog-img3.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-tag">
                                            <h3>17</h3>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bxs-user'></i> By Admin</a>
                                            </li>
                                            <li>
                                                <a href="blog-1.html"><i class='bx bx-purchase-tag-alt'></i>Achive</a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="blog-details.html">Business Strategy Make His Goal Acheive </a>
                                        </h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                        <a href="blog-details.html" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- Blog Area End -->
@endsection
