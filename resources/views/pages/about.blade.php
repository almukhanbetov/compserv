@extends('layouts.app')
@section('content')
    <!-- About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-play">
                        <img src="assets/images/about/about-img1.jpg" alt="About Images">
                        <div class="about-play-content">
                            <span>Обучение IT с личным ментором</span>
                            <h2>Только практика и результат</h2>
                            <!-- <div class="play-on-area">
                                <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i
                                        class='bx bx-play'></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-25">
                        <div class="section-title">
                            <span class="sp-color2">10 Лет опыта в IT-обучении</span>
                            <h2>Надёжный партнёр в освоении современных технологий</h2>
                            <p>
                                Обучаем не просто теории — даём практические навыки, которые востребованы на рынке.
                                Наша программа построена на реальных кейсах, инфраструктуре и инструментах, которые
                                используют IT-компании по всему миру.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list text-start">
                                    <li><i class='bx bxs-check-circle'></i>Практика на реальных проектах</li>
                                    <li><i class='bx bxs-check-circle'></i>Подготовка к собеседованию</li>
                                    <li><i class='bx bxs-check-circle'></i>Поддержка наставника</li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <ul class="about-list about-list-2 text-start">
                                    <li><i class='bx bxs-check-circle'></i>Гибкий формат обучения</li>
                                    <li><i class='bx bxs-check-circle'></i>Актуальные технологии</li>

                                </ul>
                            </div>
                        </div>
                        <p class="about-content-text">Наши студенты разворачивают серверы, настраивают CI/CD, работают с
                            Docker и облачными сервисами уже во время обучения.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Choose Area -->
    <div class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-content mr-20">
                        <div class="section-title">
                            <span class="sp-color1">Наши цели</span>
                            <h2>Мы готовим востребованных IT-специалистов</h2>
                            <p>
                                Наша цель — не просто дать знания, а довести студента до результата. Обучение построено на практике, реальных инструментах и задачах, с которыми сталкиваются DevOps-инженеры и системные администраторы в работе.
                            </p>
                            <p>
                                Дополнительно мы уделяем внимание алгоритмам и структурам данных — фундаменту сильного IT-специалиста. Студенты учатся мыслить системно, оптимизировать решения, анализировать сложность алгоритмов и эффективно работать с данными, что позволяет создавать быстрые, масштабируемые и надёжные системы.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-practice"></i>
                                        <h3>Практический опыт</h3>
                                    </div>
                                    <p>Работа с Linux, Docker, Git, CI/CD и облачными серверами</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6">
                                <div class="choose-content-card">
                                    <div class="content">
                                        <i class="flaticon-help"></i>
                                        <h3>Поддержка и сопровождение</h3>
                                    </div>
                                    <p>Наставник отвечает на вопросы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="assets/images/choose-img.jpg" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Area End -->
@endsection
