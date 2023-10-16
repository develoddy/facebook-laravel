@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        {{-- Flex column --}}
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-column">
                                {{-- Item flex --}}
                                <div class="d-flex">
                                    <div class="p-2 w-100">
                                        <!-- Portada -->
                                        <div class="p-5 text-center bg-image rounded-3 bg-portada">
                                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                                                <div class="d-flex justify-content-end align-items-end h-100">
                                                    <div class="p-2 d-flex">
                                                        <div class="d-flex align-items-end">
                                                            <div class="d-flex flex-column">
                                                                <div class="px-3 d-flex border bg-dark rounded mb-2">
                                                                    <a href=""
                                                                        class="w-100 fw-bolder text-decoration-none text-white"
                                                                        role="button">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="py-2 d-flex flex-row">
                                                                                <div class="align-self-center">
                                                                                    <div class="d-flex">
                                                                                        <i data-visualcompletion="css-img"
                                                                                            class="invert-white"
                                                                                            style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/fQ-5v9DhuUY.png&quot;); background-position: 0px -336px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="px-2">
                                                                                    <span>Crear con avatar</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="px-3 d-flex border bg-dark rounded">
                                                                    <a href=""
                                                                        class="w-100 fw-bolder text-decoration-none text-white"
                                                                        role="button">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="py-2 d-flex flex-row">
                                                                                <div class="">
                                                                                    <i data-visualcompletion="css-img"
                                                                                        class="invert-white"
                                                                                        style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/fQ-5v9DhuUY.png&quot;); background-position: 0px -370px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
                                                                                </div>
                                                                                <div class="px-2">
                                                                                    <span>Añadir foto de portada</span>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <button>Callto action</button> 
                                                                                rgba(0, 0, 0, 0.4) --}}
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portada -->
                                    </div>
                                </div>

                                {{-- Item flex --}}
                                <div class="d-flex">
                                    <div class="p-2 w-100">
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column align-items-center position-relative">
                                            {{-- Item 1 --}}
                                            <div class="p-2 x14xzxk9 bottom-0 x15sbx0n">
                                                <div class="d-flex">
                                                    <a href="" class="d-flex">
                                                        <div class="d-flex">
                                                            <img src="{{ Vite::asset('/resources/images/users/francis.png') }}" class="img-fluid rounded-circle" width="200" height="200" style="border: 5px solid #fff;">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="p-2 w-25 d-lg-none d-xl-block"></div>

                                            {{-- Item 2 --}}
                                            <div class="p-2 flex-grow-1">
                                                <div class="d-flex">
                                                    <div class="p-2 d-flex flex-column">
                                                        <div class="p-2">
                                                            <span class="h1 fw-bolder" style="font-family: sans-serif;">Eddy Lujan</span>
                                                        </div>
                                                        <div class="px-2">
                                                            <a href="" class="d-flex text-black">
                                                                <span>388 amigos</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Item 3 --}}
                                            <div class="p-2 d-flex">
                                                <div class="d-flex align-self-center">
                                                    <div class="p-2 d-flex flex-row">
                                                        <div class="p-2 d-flex">
                                                            <div class="d-flex">
                                                                <a href="" class="d-flex text-decoration-none btn btn-primary">
                                                                    <div class="px-3 d-flex flex-row">
                                                                        <div class="px-1 align-self-center">
                                                                            <img src="{{ Vite::asset('/resources/images/icons/plus.png') }}" class="img-fluid invert-white">
                                                                        </div>
                                                                        <div class="px-0 align-self-center">
                                                                            <span class="fw-bolder">Añadir a historia</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="p-2 d-flex">
                                                            <div class="d-flex">
                                                                <a href="" class="d-flex text-decoration-none btn btn-dark">
                                                                    <div class="px-3 d-flex flex-row">
                                                                        <div class="px-1 align-self-center">
                                                                            <img src="{{ Vite::asset('/resources/images/icons/pencil.png') }}" class="img-fluid invert-white">
                                                                        </div>
                                                                        <div class="px-0 align-self-center">
                                                                            <span class="fw-bolder">Añadir a historia</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="p-2 d-flex">
                                                            <div class="d-flex">
                                                                <a href="" class="d-flex text-decoration-none btn btn-dark">
                                                                    <div class="d-flex">
                                                                        <div class="px-0">
                                                                            <div class="mt-2">
                                                                                <i data-visualcompletion="css-img" class="invert-white" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/6M1PyrHDHdS.png');background-position:0 -345px;background-size:auto;width:16px;height:16px;background-repeat:no-repeat;display:inline-block"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Item flex --}}
                                <div class="d-flex">
                                    <div class="d-flex w-100">
                                        <div class="p-2 d-flex flex-row w-100">
                                            <div class="d-flex">
                                                <div class="p-2 px-3">
                                                    <a href="" class="d-flex text-decoration-none text-primary fw-bolder">
                                                        <span>Publicaciones</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="p-2 px-3 b">
                                                    <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                        <span>Información</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="p-2 px-3">
                                                    <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                        <span>Amigos</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="p-2 px-3">
                                                    <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                        <span>Fotos</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="p-2 px-3">
                                                    <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                        <span>videos</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="p-2 px-3">
                                                    <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                        <span>Reels</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-grow-1">
                                                <a href="" class="d-flex text-decoration-none text-secondary fw-bolder">
                                                    <div class="p-2 d-flex flex-row">
                                                        <div class="">
                                                            <span>Ver más</span>
                                                        </div>
                                                        <div class="">
                                                            <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xlup9mm x1kky2od"><path d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z"></path></svg>
                                                        </div>
                                                    </div>
                                                </a>
                                                
                                            </div>
                                            <div class="p-0">
                                                <a href="" class="p-2 px-3 d-flex bg-primary rounded text-white">
                                                    <div class="p-0">
                                                        <svg fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 xlup9mm x1kky2od"><circle cx="12" cy="12" r="2.5"></circle><circle cx="19.5" cy="12" r="2.5"></circle><circle cx="4.5" cy="12" r="2.5"></circle></svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Item flex content --}}
                                <div class="d-flex">
                                    <div class="p-2 d-flex flex-row">
                                        {{-- Left item --}}
                                        <div class="p-0 d-flex w-75">
                                            <div class="d-flex flex-column">
                                                {{-- Detail profile --}}
                                                <div class="p-2 d-flex">
                                                    <div class="card text-star">
                                                        <div class="card-header">
                                                            <h4 class="card-title fw-bolder">Detalles</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">Tratamiento especial del título</h5>
                                                            <p class="card-text">Con texto de apoyo a continuación como introducción natural a contenido adicional.</p>
        
                                                            <div class="d-flex flex-row">
                                                                <div class="p-2">
                                                                    <img class="invert-secondary" src="{{ Vite::asset('/resources/images/icons/graduate-icon.png') }}" height="20" width="20" class="img-fluid rounded">
                                                                </div>
                                                                <div class="p-2">Ipsum lorem ea</div>
                                                            </div>
                                                            <div class="d-flex flex-row">
                                                                <div class="p-2">
                                                                    <img class="invert-secondary" src="{{ Vite::asset('/resources/images/icons/home-icon.png') }}" height="20" width="20" class="img-fluid rounded">
                                                                </div>
                                                                <div class="p-2">Ipsum lorem ea</div>
                                                            </div>
        
                                                            <div class="d-flex flex-row">
                                                                <div class="p-2">
                                                                    <img class="invert-secondary" src="{{ Vite::asset('/resources/images/icons/pin-icon.png') }}" height="20" width="20" class="img-fluid rounded">
                                                                </div>
                                                                <div class="p-2">Ipsum lorem ea</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Photos --}}
                                                <div class="p-2 d-flex ">
                                                    <div class="card text-star border-0">
                                                        <div class="card-header px-0 py-2 pb-0 pt-3 border-0">
                                                            <div class="d-flex flex-row">
                                                                <div class="p-2 flex-grow-1"><h4 class="card-title fw-bolder">Fotos</h4></div>
                                                                <div class="p-2 d-flex">
                                                                    <div class="align-self-center">
                                                                        <a href="" class="text-decoration-none fw-bolder">
                                                                            <h5 class="card-title">Ver todas las fotos</h5>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="row">
                                                                <div class="col col-md-10 col-lg-8 col-sm-12 col-xl-12 px-0">
                                                                    <div class="row">
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" style="border-top-left-radius: 10px !important;" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" style="border-top-right-radius: 10px !important;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 px-2">
                                                                            <div class="element d-flex h-100 flex-column">
                                                                                <div class="inner d-flex h-100 flex-column align-items-center justify-content-center">
                                                                                    <img class="img-fluid img-thumbnail border-0 rounded-0 p-0 pb-2" src="https://source.unsplash.com/sesveuG_rNo/400x300" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        {{-- Right item --}}
                                        <div class="p-0 d-flex w-100">
                                            <div class="d-flex flex-column  w-100">
                                                {{-- Item publush --}}
                                                <div class="p-2 d-flex w-100">
                                                    @include('web.general.publish-post')
                                                </div>
                                                {{-- Item post --}}
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        @include('web.posts.post')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
