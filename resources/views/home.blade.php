@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        {{-- Left flex --}}
        <div class="col-md-3">
            <div class="p-1 d-flex flex-column">
                <ul class="list-group">
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 40px; width: 40px;">
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">username</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-friends"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Amigos</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-video"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Video</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-memories"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Recuerdos</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-saved"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Guardados</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-group"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Grupos</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="">
                            <div class="d-flex flex-row">
                                <div class="p-0 d-flex">
                                    <div><i class="icon-marketplace"></i></div>
                                </div>
                                <div class="p-2">
                                    <div class="p-0"><a href="" class="fw-bold text-black text-decoration-none">Marketplace</a></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item px-0 border-0">
                        <a href="" class="text-decoration-none text-black fw-bold">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>
                                <div class="p-2">Ver más</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Center column --}}
        <div class="col-md-6">
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <div class="card border">
                        <div class="card-body">
                            @include('web.stories.stories')
                        </div>
                    </div>
                </div>
            </div>

            {{-- Center flex --}}
            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex p-2">
                                <div class="p-0">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 40px; width: 40px;">
                                </div>
                                <div class="d-flex">
                                    <a href="" class="d-flex text-decoration-none">
                                        <div class="p-2">
                                            <span class="text-secondary">¿Qué estás pensando, Eddy?</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <a href="" class="p-0 d-flex text-decoration-none">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 ">
                                            <img height="24" width="24" src="{{ Vite::asset("resources/images/icons/video-icon.png") }}" alt="">
                                        </div>
                                        <div class="p-2 text-secondary fw-bold">Video en directo</div>
                                    </div>
                                </a>
                                <a href="" class="p-0 d-flex text-decoration-none">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 ">
                                            <img height="24" width="24" src="{{ Vite::asset("resources/images/icons/photo-icon.png") }}" alt="">
                                        </div>
                                        <div class="p-2 text-secondary fw-bold">Video en directo</div>
                                    </div>
                                </a>
                                <a href="" class="p-0 d-flex text-decoration-none">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 ">
                                            <img height="24" width="24" src="{{ Vite::asset("resources/images/icons/happy-icon.png") }}" alt="">
                                        </div>
                                        <div class="p-2 text-secondary fw-bold">Video en directo</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right flex --}}
        <div class="col-md-3">
            <div class="d-flex justify-content-center">
                <ul class="list-group w-75">
                    <li class="list-group-item border-0">
                        <div class="d-flex flex-row text-secondary">
                            <div class="p-2 text-black fw-bold flex-grow-1 text-secondary">Contacto</div>
                            <div class="p-2">
                                <a href="">
                                    <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="text-secondary x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od"><g fill-rule="evenodd" transform="translate(-448 -544)"><g fill-rule="nonzero"><path d="M10.743 2.257a6 6 0 1 1-8.485 8.486 6 6 0 0 1 8.485-8.486zm-1.06 1.06a4.5 4.5 0 1 0-6.365 6.364 4.5 4.5 0 0 0 6.364-6.363z" transform="translate(448 544)"></path><path d="M10.39 8.75a2.94 2.94 0 0 0-.199.432c-.155.417-.23.849-.172 1.284.055.415.232.794.54 1.103a.75.75 0 0 0 1.112-1.004l-.051-.057a.39.39 0 0 1-.114-.24c-.021-.155.014-.356.09-.563.031-.081.06-.145.08-.182l.012-.022a.75.75 0 1 0-1.299-.752z" transform="translate(448 544)"></path><path d="M9.557 11.659c.038-.018.09-.04.15-.064.207-.077.408-.112.562-.092.08.01.143.034.198.077l.041.036a.75.75 0 0 0 1.06-1.06 1.881 1.881 0 0 0-1.103-.54c-.435-.058-.867.018-1.284.175-.189.07-.336.143-.433.2a.75.75 0 0 0 .624 1.356l.066-.027.12-.061z" transform="translate(448 544)"></path><path d="m13.463 15.142-.04-.044-3.574-4.192c-.599-.703.355-1.656 1.058-1.057l4.191 3.574.044.04c.058.059.122.137.182.24.249.425.249.96-.154 1.41l-.057.057c-.45.403-.986.403-1.411.154a1.182 1.182 0 0 1-.24-.182zm.617-.616.444-.444a.31.31 0 0 0-.063-.052c-.093-.055-.263-.055-.35.024l.208.232.207-.206.006.007-.22.257-.026-.024.033-.034.025.027-.257.22-.007-.007zm-.027-.415c-.078.088-.078.257-.023.35a.31.31 0 0 0 .051.063l.205-.204-.233-.209z" transform="translate(448 544)"></path></g></g></svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="text-secondary x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo"><g fill-rule="evenodd" transform="translate(-446 -350)"><path d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"></path></g></svg>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0 py-0">
                        <a href="" class="d-flex text-decoration-none">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 30px; width: 30px;">
                                </div>
                                <div class="p-0 d-flex">
                                    <div class="align-self-center">
                                        <span class="text-black">Ipsum name name</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item border-0 py-0">
                        <a href="" class="d-flex text-decoration-none">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 30px; width: 30px;">
                                </div>
                                <div class="p-0 d-flex">
                                    <div class="align-self-center">
                                        <span class="text-black">Ipsum name name</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item border-0 py-0">
                        <a href="" class="d-flex text-decoration-none">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 30px; width: 30px;">
                                </div>
                                <div class="p-0 d-flex">
                                    <div class="align-self-center">
                                        <span class="text-black">Ipsum name name</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item border-0 py-0">
                        <a href="" class="d-flex text-decoration-none">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 30px; width: 30px;">
                                </div>
                                <div style="    bottom: 12px;
                                left: 41px;
                                transform: translate(50%, 50%);
                                position: absolute;
                                background: green;
                                padding: 3px;
                                border-radius: 50%;
                                border: 2px solid #fff;"></div>
                                <div class="p-0 d-flex">
                                    <div class="align-self-center">
                                        <span class="text-black">Ipsum name name</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</div>
@endsection
