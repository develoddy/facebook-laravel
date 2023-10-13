{{-- <div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div> --}}

<div class="card mb-5">
    {{-- Header --}}
    <div class="card-header border-bottom-0">
        <div class="d-flex">
            <div class="p-2">
                <a href="" class="d-flex">
                    <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                    style="border-radius: 50%; height: 40px; width: 40px;">
                </a>
            </div>
            <div class="p-0 d-flex flex-grow-1">
                <div class="d-flex align-self-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <a href="" class="text-black text-decoration-none">
                                <div class="p-0">username</div>
                            </a>
                        </div>
                        
                        <div class="d-flex">
                            <a href="" class="text-black text-decoration-none">
                                <div class="p-0 text-secondary">
                                    <span>10 h</span>
                                    <span>
                                        <svg fill="currentColor" style="width: 12px;height: 12px;color: #65676b;" viewBox="0 0 16 16" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1kpxq89 xsmyaan" title="Compartido con: Público"><title>Compartido con: Público</title><g fill-rule="evenodd" transform="translate(-448 -544)"><g><path d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434" transform="translate(354 143.5)"></path><path d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096" transform="translate(354 143.5)"></path><path fill-rule="nonzero" d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z" transform="translate(354 143.5)"></path></g></g></svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="p-2 d-flex">
                <div class="align-self-center">
                    <a href="" class="text-decoration-none text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-2 d-flex">
                <div class="align-self-center">
                    <a href="" class="text-decoration-none text-black">
                        <div aria-expanded="false" aria-haspopup="menu" aria-label="Acciones para esta publicación" class="x1i10hfl x1qjc9v5 xjqpnuy xa49m3k xqeqjp1 x2hbi6w x9f619 x1ypdohk xdl72j9 x2lah0s xe8uvvx x2lwn1j xeuugli x16tdsg8 x1hl2dhg xggy1nq x1ja2u2z x1t137rt x1o1ewxj x3x9cwd x1e5q0jg x13rtm0m x1q0g3np x87ps6o x1lku1pv x1a2a7pz xjyslct xjbqb8w x13fuv20 xu3j5b3 x1q0q8m5 x26u7qi x972fbf xcfux6l x1qhh985 xm0m39n x3nfvp2 xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x1n2onr6 x3ajldb x194ut8o x1vzenxt xd7ygy7 xt298gk x1xhcax0 x1s928wv x10pfhc2 x1j6awrg x1v53gu8 x1tfg27r xitxdhh" role="button" tabindex="0"><svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 x1qx5ct2 xw4jnvo"><g fill-rule="evenodd" transform="translate(-446 -350)"><path d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"></path></g></svg><div class="x1ey2m1c xds687c xg01cxk x47corl x10l6tqk x17qophe x13vifvy x1ebt8du x19991ni x1dhq9h x1wpzbip x14yjl9h xudhj91 x18nykt9 xww2gxu" data-visualcompletion="ignore" style="inset: -8px;"></div></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="card-body pt-0">

        {{-- Descripcion de publicacion --}}
        <div class="d-flex flex-column">
            <div class="p-0 d-flex w-100">
                <div class="p-0">
                    <p class="lh-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="d-flex bg-success">
                <div class="p-0 border w-100">
                    <div class="p-0 w-100">
                        <a href="" class="d-flex">
                            <img src="{{ Vite::asset('/resources/images/users/rowe.jpeg') }}" class="img-fluid w-100 h-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total de likes --}}
        <div class="d-flex">
            <div class="p-0 d-flex flex-row">
                <div class="p-0 flex-grow-1 px-2">item</div>
                <div class="p-0 flex-grow-1 px-2">
                    <a href="" class="text-secondary text-decoration-none">
                        <span>Ipsum to deaty and two people more</span>
                    </a>
                </div>
            </div>
            
        </div>

        {{-- Botones acciones --}}
        <div class="d-flex">
            <div class="d-flex flex-row w-100 justify-content-between">
                <div class="p-2">
                    <a href="" class="d-flex text-decoration-none text-black">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <span class="x3nfvp2"><i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1 actions-like" ></i></span>
                            </div>
                            <div class="p-2 px-0">
                                <span>Me gusta</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <a href="" class="d-flex text-decoration-none text-black">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <span class="x3nfvp2"><i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1 actions-comment" ></i></span>
                            </div>
                            <div class="p-2 px-0">
                                <span>Me gusta</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <a href="" class="d-flex text-decoration-none text-black">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <span class="x3nfvp2"><i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1 actions-shared" ></i></span>
                            </div>
                            <div class="p-2 px-0">
                                <span>Me gusta</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Ver más comentarios --}}
        <div class="d-flex">
            <div class="d-flex">
                <a href="" class="text-decoration-none text-secondary fw-bold">
                    <span>Ver más comentarios</span>
                </a>
            </div>
        </div>

        {{-- List comentarios --}}
        <div class="d-flex">
            <div class="d-flex">
                <div class="p-0">
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <a href="">
                                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                        style="border-radius: 50%; height: 40px; width: 40px;">
                                    </a>
                                </div>
                                <div class="p-0">
                                    <div class="d-flex flex-column">
                                        <div class="px-2">
                                            <a href="" class="text-black text-decoration-none fw-bolder">
                                                <span>Ipsum later worte</span>
                                            </a>
                                        </div>
                                        <div class="px-2">
                                            <p class="lh-1 mb-2">
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                            </p>
                                            
                                        </div>
                                        <div class="p-0">
                                            <div class="d-flex flex-row">
                                                <div class="p-0 px-2">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>Me gusta</small>
                                                    </a>
                                                </div>
                                                <div class="p-0 px-2">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>Responder</small>
                                                    </a>
                                                </div>
                                                <div class="p-0 px-3">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>36 min</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item px-0 border-0">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <a href="">
                                        <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                                        style="border-radius: 50%; height: 40px; width: 40px;">
                                    </a>
                                </div>
                                <div class="p-0">
                                    <div class="d-flex flex-column">
                                        <div class="px-2">
                                            <a href="" class="text-black text-decoration-none fw-bolder">
                                                <span>Ipsum later worte</span>
                                            </a>
                                        </div>
                                        <div class="px-2">
                                            <p class="lh-1 mb-2">
                                                s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                            </p>
                                            
                                        </div>
                                        <div class="p-0">
                                            <div class="d-flex flex-row">
                                                <div class="p-0 px-2">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>Me gusta</small>
                                                    </a>
                                                </div>
                                                <div class="p-0 px-2">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>Responder</small>
                                                    </a>
                                                </div>
                                                <div class="p-0 px-3">
                                                    <a href="" class="text-secondary text-decoration-none fw-bold">
                                                        <small>36 min</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Input --}}
        <div class="d-flex">
            <div class="p-0 d-flex flex-row w-100">
                <div class="p-0">
                    <div class="p-2 align-self-center">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1695504236952-37306fc71896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3387&q=80"
                            style="border-radius: 50%; height: 40px; width: 40px;">
                        </a>
                    </div>
                </div>
                <div class="p-2 px-0 w-100">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0 border-0 shadow-none" placeholder="Haz un comentario...">
                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
