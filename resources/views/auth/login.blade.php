@extends('layouts.app')

@section('content')
<div class="nk-wrap nk-wrap-nosidebar">
    <div class="nk-content ">
        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
            <div class="brand-logo pb-4 text-center">
                <a href="../../index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo-dark">
                </a>
            </div>
            <div class="card">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Login | Painel Administrativo - AdminApp</h5>
                            <div class="nk-block-des">
                                <p>Acesse usando seu e-mail de cadastro.</p>
                            </div>
                        </div>
                    </div>
                    <form action="https://dashlite.net/demo2/index.html">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Email</label>
                            </div>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Digite seu e-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Senha</label>
                                <a class="link link-primary link-sm" href="auth-reset-v2.html">Recuperar Senha</a>
                            </div>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="nk-footer nk-auth-footer-full">
            <div class="container wide-lg">
                <div class="row g-3">
                    <div class="col-lg-6 order-lg-last">
                        <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                            <li class="nav-item"><a class="nav-link" href="#">Termos e Condições</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Política de Privacidade</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Ajuda</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="nk-block-content text-center text-lg-left">
                            <p class="text-soft">&copy; 2022 AdminApp Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
