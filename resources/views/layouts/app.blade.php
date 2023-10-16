<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg viewBox="0 0 36 36" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x5e5rjt text-primary" fill="currentColor" height="40" width="40"><path d="M20.181 35.87C29.094 34.791 36 27.202 36 18c0-9.941-8.059-18-18-18S0 8.059 0 18c0 8.442 5.811 15.526 13.652 17.471L14 34h5.5l.681 1.87Z"></path><path style="fill: #FFFFFF;" class="xe3v8dz" d="M13.651 35.471v-11.97H9.936V18h3.715v-2.37c0-6.127 2.772-8.964 8.784-8.964 1.138 0 3.103.223 3.91.446v4.983c-.425-.043-1.167-.065-2.081-.065-2.952 0-4.09 1.116-4.09 4.025V18h5.883l-1.008 5.5h-4.867v12.37a18.183 18.183 0 0 1-6.53-.399Z"></path></svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    @auth
                        <ul class="navbar-nav me-auto">
                            <form class="d-flex">
                                <div class="d-flex flex-row">
                                    <span class="p-1">
                                        <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od"><g fill-rule="evenodd" transform="translate(-448 -544)"><g fill-rule="nonzero"><path d="M10.743 2.257a6 6 0 1 1-8.485 8.486 6 6 0 0 1 8.485-8.486zm-1.06 1.06a4.5 4.5 0 1 0-6.365 6.364 4.5 4.5 0 0 0 6.364-6.363z" transform="translate(448 544)"></path><path d="M10.39 8.75a2.94 2.94 0 0 0-.199.432c-.155.417-.23.849-.172 1.284.055.415.232.794.54 1.103a.75.75 0 0 0 1.112-1.004l-.051-.057a.39.39 0 0 1-.114-.24c-.021-.155.014-.356.09-.563.031-.081.06-.145.08-.182l.012-.022a.75.75 0 1 0-1.299-.752z" transform="translate(448 544)"></path><path d="M9.557 11.659c.038-.018.09-.04.15-.064.207-.077.408-.112.562-.092.08.01.143.034.198.077l.041.036a.75.75 0 0 0 1.06-1.06 1.881 1.881 0 0 0-1.103-.54c-.435-.058-.867.018-1.284.175-.189.07-.336.143-.433.2a.75.75 0 0 0 .624 1.356l.066-.027.12-.061z" transform="translate(448 544)"></path><path d="m13.463 15.142-.04-.044-3.574-4.192c-.599-.703.355-1.656 1.058-1.057l4.191 3.574.044.04c.058.059.122.137.182.24.249.425.249.96-.154 1.41l-.057.057c-.45.403-.986.403-1.411.154a1.182 1.182 0 0 1-.24-.182zm.617-.616.444-.444a.31.31 0 0 0-.063-.052c-.093-.055-.263-.055-.35.024l.208.232.207-.206.006.007-.22.257-.026-.024.033-.034.025.027-.257.22-.007-.007zm-.027-.415c-.078.088-.078.257-.023.35a.31.31 0 0 0 .051.063l.205-.204-.233-.209z" transform="translate(448 544)"></path></g></g></svg>
                                    </span>
                                    
                                    <input class="form-control me-2 border-0 shadow-none" type="search" placeholder="Busca en facebook" aria-label="Search">
                                </div>
                            </form>
                        </ul>
                    @endauth

                    <!-- Center Side Of Navbar -->
                    <ul class="navbar-nav justify-content-center">
                        @auth
                        <li class="nav-item" style="width: 129.6px;">
                            <a class="nav-link" href="{{ route('home') }}" >
                                <span class="x1n2onr6">
                                    <svg fill="currentColor" style="height: 24px; width:24px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x5e5rjt xxk0z11 xvy4d1p"><path d="M9.464 1.286C10.294.803 11.092.5 12 .5c.908 0 1.707.303 2.537.786.795.462 1.7 1.142 2.815 1.977l2.232 1.675c1.391 1.042 2.359 1.766 2.888 2.826.53 1.059.53 2.268.528 4.006v4.3c0 1.355 0 2.471-.119 3.355-.124.928-.396 1.747-1.052 2.403-.657.657-1.476.928-2.404 1.053-.884.119-2 .119-3.354.119H7.93c-1.354 0-2.471 0-3.355-.119-.928-.125-1.747-.396-2.403-1.053-.656-.656-.928-1.475-1.053-2.403C1 18.541 1 17.425 1 16.07v-4.3c0-1.738-.002-2.947.528-4.006.53-1.06 1.497-1.784 2.888-2.826L6.65 3.263c1.114-.835 2.02-1.515 2.815-1.977zM10.5 13A1.5 1.5 0 0 0 9 14.5V21h6v-6.5a1.5 1.5 0 0 0-1.5-1.5h-3z"></path></svg><!--$--><span class="x10l6tqk x11f4b5y x1v4kod4"></span><!--/$--></span>
                            </a>
                        </li>
                        <li class="nav-item" style="width: 129.6px;">
                            <a class="nav-link" href="">
                                <span class="x1n2onr6">
                                    <svg fill="currentColor" style="height: 24px; width:24px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p"><path d="M10.996 8.132A1 1 0 0 0 9.5 9v4a1 1 0 0 0 1.496.868l3.5-2a1 1 0 0 0 0-1.736l-3.5-2z"></path><path d="M14.573 2H9.427c-1.824 0-3.293 0-4.45.155-1.2.162-2.21.507-3.013 1.31C1.162 4.266.817 5.277.655 6.477.5 7.634.5 9.103.5 10.927v.146c0 1.824 0 3.293.155 4.45.162 1.2.507 2.21 1.31 3.012.802.803 1.813 1.148 3.013 1.31C6.134 20 7.603 20 9.427 20h5.146c1.824 0 3.293 0 4.45-.155 1.2-.162 2.21-.507 3.012-1.31.803-.802 1.148-1.813 1.31-3.013.155-1.156.155-2.625.155-4.449v-.146c0-1.824 0-3.293-.155-4.45-.162-1.2-.507-2.21-1.31-3.013-.802-.802-1.813-1.147-3.013-1.309C17.866 2 16.397 2 14.573 2zM3.38 4.879c.369-.37.887-.61 1.865-.741C6.251 4.002 7.586 4 9.5 4h5c1.914 0 3.249.002 4.256.138.978.131 1.496.372 1.865.74.37.37.61.888.742 1.866.135 1.007.137 2.342.137 4.256 0 1.914-.002 3.249-.137 4.256-.132.978-.373 1.496-.742 1.865-.369.37-.887.61-1.865.742-1.007.135-2.342.137-4.256.137h-5c-1.914 0-3.249-.002-4.256-.137-.978-.132-1.496-.373-1.865-.742-.37-.369-.61-.887-.741-1.865C2.502 14.249 2.5 12.914 2.5 11c0-1.914.002-3.249.138-4.256.131-.978.372-1.496.74-1.865zM8 21.5a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8z">
                                        </path>
                                    </svg><!--$-->
                                    <div class="" 
                                    style="position: absolute;
                                    top: 7px;
                                    background-color: #e41e3f;
                                    padding: 5px;
                                    border-radius: 50%;
                                    height: 20px;
                                    width: 20px;">
                                    <span style="position: absolute;
                                    top: 0;
                                    color: #fff;
                                    font-weight: bold;">4</span>
                                    </div>
                                        
                                    
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" style="width: 129.6px;">
                            <a class="nav-link " href="">
                                <span class="x1n2onr6">
                                    <svg fill="currentColor" style="height: 24px; width:24px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p"><path d="M1.588 3.227A3.125 3.125 0 0 1 4.58 1h14.84c1.38 0 2.597.905 2.993 2.227l.816 2.719a6.47 6.47 0 0 1 .272 1.854A5.183 5.183 0 0 1 22 11.455v4.615c0 1.355 0 2.471-.119 3.355-.125.928-.396 1.747-1.053 2.403-.656.657-1.475.928-2.403 1.053-.884.12-2 .119-3.354.119H8.929c-1.354 0-2.47 0-3.354-.119-.928-.125-1.747-.396-2.403-1.053-.657-.656-.929-1.475-1.053-2.403-.12-.884-.119-2-.119-3.354V11.5l.001-.045A5.184 5.184 0 0 1 .5 7.8c0-.628.092-1.252.272-1.854l.816-2.719zM10 21h4v-3.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V21zm6-.002c.918-.005 1.608-.025 2.159-.099.706-.095 1.033-.262 1.255-.485.223-.222.39-.55.485-1.255.099-.735.101-1.716.101-3.159v-3.284a5.195 5.195 0 0 1-1.7.284 5.18 5.18 0 0 1-3.15-1.062A5.18 5.18 0 0 1 12 13a5.18 5.18 0 0 1-3.15-1.062A5.18 5.18 0 0 1 5.7 13a5.2 5.2 0 0 1-1.7-.284V16c0 1.442.002 2.424.1 3.159.096.706.263 1.033.486 1.255.222.223.55.39 1.255.485.551.074 1.24.094 2.159.1V17.5a2.5 2.5 0 0 1 2.5-2.5h3a2.5 2.5 0 0 1 2.5 2.5v3.498zM4.581 3c-.497 0-.935.326-1.078.802l-.815 2.72A4.45 4.45 0 0 0 2.5 7.8a3.2 3.2 0 0 0 5.6 2.117 1 1 0 0 1 1.5 0A3.19 3.19 0 0 0 12 11a3.19 3.19 0 0 0 2.4-1.083 1 1 0 0 1 1.5 0A3.2 3.2 0 0 0 21.5 7.8c0-.434-.063-.865-.188-1.28l-.816-2.72A1.125 1.125 0 0 0 19.42 3H4.58z"></path></svg><!--$--><span class="x10l6tqk x11f4b5y x1v4kod4"></span><!--/$--></span>
                            </a>
                        </li>
                        <li class="nav-item" style="width: 129.6px;">
                            <a class="nav-link" href="">
                                <span class="x1n2onr6">
                                    <svg fill="currentColor" style="height: 24px; width:24px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p"><path d="M12 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-2 4a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path><path d="M.5 12C.5 5.649 5.649.5 12 .5S23.5 5.649 23.5 12 18.351 23.5 12 23.5.5 18.351.5 12zm2.21-2a9.537 9.537 0 0 0 0 3.993l.3.007A2 2 0 0 0 3 10h-.29zm.663-1.983a4 4 0 0 1 0 7.966 9.523 9.523 0 0 0 1.948 2.773A5.002 5.002 0 0 1 10 15.523h4a5.002 5.002 0 0 1 4.679 3.233 9.523 9.523 0 0 0 1.948-2.773 4 4 0 0 1 0-7.966A9.501 9.501 0 0 0 12 2.5a9.501 9.501 0 0 0-8.627 5.517zM21.5 12a9.55 9.55 0 0 0-.212-2.007l-.265.007H21a2 2 0 0 0-.01 4l.3-.007c.138-.643.21-1.31.21-1.993zM12 21.5a9.455 9.455 0 0 0 4.97-1.402A3 3 0 0 0 14 17.523h-4a3 3 0 0 0-2.97 2.575A9.456 9.456 0 0 0 12 21.5z"></path></svg><!--$--><span class="x10l6tqk x11f4b5y x1v4kod4"></span><!--/$--></span>
                            </a>
                        </li>
                        <li class="nav-item" style="width: 129.6px;">
                            <a class="nav-link" href="">
                                <span class="x1n2onr6">
                                    <svg fill="currentColor" style="height: 24px; width:24px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p"><path d="M8 5a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8zm4.923 5.116a1 1 0 0 0-1.846 0l-.691 1.662-1.794.144a1 1 0 0 0-.571 1.756l1.367 1.17L8.97 16.6a1 1 0 0 0 1.494 1.086L12 16.747l1.536.938A1 1 0 0 0 15.03 16.6l-.417-1.751 1.366-1.171a1 1 0 0 0-.57-1.756l-1.794-.144-.692-1.662z"></path><path d="M12.075 1h-.15C9.632 1 7.81 1 6.38 1.192c-1.472.198-2.674.616-3.623 1.565-.949.95-1.367 2.15-1.565 3.623C1 7.81 1 9.632 1 11.925v.15c0 2.293 0 4.116.192 5.545.198 1.472.616 2.674 1.565 3.623.95.949 2.15 1.367 3.623 1.565C7.81 23 9.632 23 11.925 23h.15c2.293 0 4.116 0 5.545-.192 1.472-.198 2.674-.616 3.623-1.565.949-.95 1.367-2.15 1.565-3.623.192-1.43.192-3.252.192-5.545v-.15c0-2.293 0-4.116-.192-5.545-.198-1.472-.616-2.674-1.565-3.623-.95-.949-2.15-1.367-3.623-1.565C16.19 1 14.368 1 12.075 1zm-8.9 16.353C3.001 16.073 3 14.385 3 12s.002-4.074.174-5.353c.168-1.25.482-1.96.998-2.475.515-.516 1.224-.83 2.475-.998C7.927 3.002 9.615 3 12 3s4.074.002 5.353.174c1.25.168 1.96.482 2.475.998.516.515.83 1.224.998 2.475C20.998 7.927 21 9.615 21 12s-.002 4.074-.174 5.353c-.168 1.25-.482 1.96-.998 2.475-.515.516-1.224.83-2.475.998-1.28.172-2.968.174-5.353.174s-4.074-.002-5.353-.174c-1.25-.168-1.96-.482-2.475-.998-.516-.515-.83-1.224-.998-2.475z"></path></svg><!--$--><span class="x10l6tqk x11f4b5y x1v4kod4"></span><!--/$--></span>
                            </a>
                        </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="background-color: #e4e6eb;border-radius: 50%;height: 40px;width: 40px;">
                                <a class="nav-link" href="">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-0">
                                            <svg fill="currentColor" style="height: 20px;width: 20px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 x1qx5ct2 xw4jnvo"><path d="M12 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm8 0a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm8 0a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0-8a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm8 16a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm8 0a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 17a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"></path></svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" style="background-color: #e4e6eb;border-radius: 50%;height: 40px;width: 40px;">
                                <a class="nav-link" href="">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-0">
                                            <svg fill="currentColor" style="height: 20px;width: 20px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 x1qx5ct2 xw4jnvo"><path d="M.5 12C.5 5.649 5.649.5 12 .5S23.5 5.649 23.5 12 18.351 23.5 12 23.5c-1.922 0-3.736-.472-5.33-1.308a.63.63 0 0 0-.447-.069l-3.4.882a1.5 1.5 0 0 1-1.828-1.829l.882-3.4a.63.63 0 0 0-.07-.445A11.454 11.454 0 0 1 .5 12zm17.56-1.43a.819.819 0 0 0-1.125-1.167L14 11.499l-3.077-2.171a1.5 1.5 0 0 0-2.052.308l-2.93 3.793a.819.819 0 0 0 1.123 1.167L10 12.5l3.076 2.172a1.5 1.5 0 0 0 2.052-.308l2.931-3.793z"></path></svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" style="background-color: #e4e6eb;border-radius: 50%;height: 40px;width: 40px;">
                                <a class="nav-link" href="">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-0">
                                            <svg fill="currentColor" style="height: 20px;width: 20px;" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 x1qx5ct2 xw4jnvo"><path d="M3 9.5a9 9 0 1 1 18 0v2.927c0 1.69.475 3.345 1.37 4.778a1.5 1.5 0 0 1-1.272 2.295h-4.625a4.5 4.5 0 0 1-8.946 0H2.902a1.5 1.5 0 0 1-1.272-2.295A9.01 9.01 0 0 0 3 12.43V9.5zm6.55 10a2.5 2.5 0 0 0 4.9 0h-4.9z"></path></svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" style="width: 40vh;" aria-labelledby="navbarDropdown">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex w-100">
                                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Salir') }}
                                            </a>
    
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form> --}}
                                        
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <a href="{{ route('profile') }}" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2">
                                                                <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"style="border-radius: 50%; height: 40px; width: 40px;">
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">username</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/mQZHZtmvvJO.png&quot;); background-position: -147px -105px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">Configuración y privacidad</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/vZx3HqQM23H.png&quot;); background-position: 0px -193px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">Ayuda y asistencia</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/ZnKUKO2wdbC.png&quot;); background-position: 0px -725px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">Pantalla y accesibilidad</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/vZx3HqQM23H.png&quot;); background-position: 0px -67px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">Enviar comentarios</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    {{-- <a href="" class="d-flex text-black text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/NS0oM82n5Oe.png&quot;); background-position: 0px -168px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span>Cerrar sesión</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> --}}
    
                                                    
                                                    <a class="dropdown-item p-0" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        <div class="d-flex flex-row">
                                                            <div class="p-2 d-flex align-self-center">
                                                                <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/NS0oM82n5Oe.png&quot;); background-position: 0px -168px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                                            </div>
                                                            <div class="p-2 d-flex">
                                                                <div class="p-0 align-self-center">
                                                                    <span class="fw-bolder">{{ __('Cerrar sesión') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
    
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form> 
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                    <div class="p-2 border">
                                        <div class="d-flex">
                                            <div class="p-2">
                                                <footer>
                                                    Footer
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
