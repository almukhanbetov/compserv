@extends('layouts.auth')
@section('content')
    <div class="user-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="user-img">
                        <img src="assets/images/user-img.jpg" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="user-form">
                        <div class="contact-form">
                            <h2>Регистрация</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required name="name"
                                                data-error="Пожалуйста введите Ваше Имя" placeholder="Введите ваше">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="email" class="form-control" required name="email"
                                                data-error="Введите Ваше имя и email" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Подтвердите пароль">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password_confirmation"
                                                placeholder="Пароль">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <button type="submit" class="default-btn btn-bg-two">
                                            Register Now
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <p class="account-desc">
                                            Уже Вы Зарегистрированы?
                                            <a href="{{ route('login') }}">Войти</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
