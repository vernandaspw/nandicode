@extends('layouts.app')

@section('content')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Web & Mobile Developers &middot; LARAVEL &middot; FLUTER</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Saya dapat membantu bisnis Anda untuk</div>
                        <h1 class="display-4 fw-bolder mb-5"><span class="text-gradient d-inline">Dapat online dan tumbuh
                                cepat</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                href="{{ url('resume') }}">Resume</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                href="{{ url('prokects') }}">Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="{{ asset('img/IMG_20221226_184901_065-removebg-preview.png') }}"
                                alt="..." />
                            <div class="dots-1">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4"
                                    xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-2">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4"
                                    xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-3">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4"
                                    xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-4">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 191.6 1215.4" style="enable-background: new 0 0 191.6 1215.4"
                                    xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tentang Saya</span></h2>
                        <p class="lead fw-light mb-4">Nama saya Vernanda Septia Wanandi.</p>
                        <p class="text-muted">Saya lulusan S1 Sistem Informasi dari Institut Teknologi dan Bisnis
                            Palcomtech dengan IPK 3,73. Saya memiliki kemampuan membuat web atau API menggunakan Framework
                            Laravel, dan mampu membuat aplikasi mobile menggunakan Framework Flutter dengan state managemen
                            Getx. Dapat bekerja individu maupun sebagai tim, memiliki semangat tinggi untuk berkembang,
                            bermotivasi tinggi dan tertarik untuk mempelajari hal hal baru. Semoga passion dan minat ini
                            bisa menjadikan saya sebagai asset untuk tergabung kedalam organisasi/tim, semoga bermanfaat dan
                            berguna dengan baik.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="https://www.showwcase.com/vernandaspw"></i>Showwcase</a>
                            <a class="text-gradient" href="mailto:vernandaspw@gmail.com">Email</a>
                            <a class="text-gradient" href="https://instagram.com/nandicode"><i
                                    class="bi bi-instagram"></i></a>
                            <a class="text-gradient" href="https://www.linkedin.com/in/vernandaspw"><i
                                    class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="https://github.com/vernandaspw"><i
                                    class="bi bi-github"></i></a>
                            <a class="text-gradient" href="https://facebook.com/vernanda.spw"><i
                                    class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">#visit</span></h2>
                        <p class="lead fw-light mb-4">Kunjungi, mungkin akan berguna buat anda</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 mb-5">

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <a href="https://lalandigital.com/"
                        class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                        <div class="card-body text-center p-0">
                            <div class=" d-flex align-items-center justify-content-center">
                                <div class="p-5">
                                    <img class="" src="{{ asset('img/LOGO lalandigital.png') }}" width="70"
                                        height="70" alt="">
                                    <h2 class="fw-bolder">Lalan Digital</h2>
                                    <p>Membantu Digitalisasi Musi Banyuasin, Lalan</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <!-- Project Card 2-->
                    <a href="http://sikeuangan.com/"
                        class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0">
                        <div class="card-body text-center p-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="p-5">
                                    <img src="{{ asset('img/sikeuangan/logo-bg-white.jpg') }}" width="70"
                                        height="70" alt="">
                                    <h2 class="fw-bolder">SIKeuangan</h2>
                                    <p>
                                        Sistem Informasi Keuangan Akuntansi, mempermudah mengelola keuangan untuk bisnis,
                                        pribadi ataupun keluarga. Support Integrasi API
                                    </p>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class=" py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center mt-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Layanan</span></h2>
                        <p class="lead fw-light mb-2" style="font-size: 18px">Terima Pembuatan berbagai website & aplikasi
                            dengan harga termurah
                        </p>
                        <p class="lead fw-light mb-2" style="font-size: 18px">Untuk kebutuhan Bisnis, Usaha, Tugas Akhir,
                            Skripsi</p>
                        <p class="lead fw-light mb-3" style="font-size: 15px">
                            Jika terima beres sampai online, harga dibawah hanya biaya pembuatan tidak termasuk biaya
                            <br class="mb-0">
                            hosting & domain. Free desain logo & banner
                        </p>
                    </div>.
                </div>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header text-center text-gradient">
                            Landing Page
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 300k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Pengenalan produk kamu
                            </div>
                            <ul>
                                <li>Tanpa halaman login</li>
                                <li>1 Halaman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header text-center text-gradient">
                            Web Profesional (pribadi)
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 500k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web profesional pribadi kamu berdasarkan CV dan portofolio
                            </div>
                            <ul>
                                <li>Dengan halaman login</li>
                                <li>Lebih dari 1 halaman</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Companny Profile
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 800k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web Perusahaan, Memperkenalkan Perusahaan, produk dan layanan
                            </div>
                            <ul>
                                <li>Dengan halaman login</li>
                                <li>Lebih dari 1 halaman</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Web Desa
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 1500k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web Untuk Desa
                            </div>
                            <ul>
                                <li>
                                    Fitur Pos Slideshow
                                </li>
                                <li>
                                    Fitur Pos Perangkat Desa
                                </li>
                                <li>
                                    Fitur Pois Daftar RW/Dusun
                                </li>
                                <li>
                                    Fitur Pos Lembaga Desa
                                </li>
                                <li>
                                    Fitur Pos Kolom Kades
                                </li>
                                <li>
                                    Fitur Pos Opini Warga
                                </li>
                                <li>
                                    Fitur Pos Pengumuman Desa
                                </li>
                                <li>
                                    Fitur Pos Agenda Kegiatan
                                </li>
                                <li>
                                    Fitur Pos Galeri Photo
                                </li>
                                <li>
                                    Fitur Pos Prestasi Desa
                                </li>
                                <li>
                                    Fitur Pos Nomer Layanan Publik
                                </li>
                                <li>
                                    Fitur Pos Produk Desa
                                </li>
                                <li>
                                    Fitur Pos Produk BUMDes
                                </li>
                                <li>
                                    Fitur Pos Laporan Pembangunan
                                </li>
                                <li>
                                    Fitur Pos Transparansi Dana Desa
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Web Caleg
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 1500k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web Perusahaan, Memperkenalkan Perusahaan, produk dan layanan
                            </div>
                            <ul>
                                <li>Dengan halaman login</li>
                                <li>
                                    Fitur Pos Slide Gambar
                                </li>
                                <li>
                                    Fitur Pos Agenda
                                </li>
                                <li>
                                    Fitur Pos Prioritas
                                </li>
                                <li>
                                    Fitur Pos Rekam Jejak
                                </li>
                                Fitur Pos Dukungan
                                <li>
                                    Fitur Pos Testimoni
                                </li>
                                <li>
                                    Fitur Pos Relawan
                                </li>
                                <li>
                                    Fitur Pos Galeri Gambar
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Online Shop
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 2000k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web Online Shop
                            </div>
                            <ul>
                                <li>Dengan halaman login</li>
                                <li>Produk</li>
                                <li>Stok produk</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Web Custom
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 2700k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Web Custome Sesuka kamu
                            </div>
                            <ul>
                                <li>Full Filture</li>
                                <li>Free domain .com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-header  text-center text-gradient">
                            Maintance
                        </div>
                        <div class="card-body bg-gradient-primary-to-secondary">
                            <div class="my-2 text-white text-center">
                                <b>Start Form 50k</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                Menyediakan maintance Diluar Proses Project Selesai jika Ada bug, Penambahan / Pengubahan Filtur
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-12">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Proses Pemesanan
                                Layanan</span></h2>
                        <p class="text-muted"></p>
                        <div class="d-flex justify-content-center  gap-4">
                            <div class="row justify-content-center align-items-start g-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-gradient">
                                                <b>1</b>
                                            </div>
                                            <div class="text-gradient">
                                                <b>Pesan</b>
                                            </div>
                                            <div class="">
                                                Pilih kategori website, pilih online/hanya file, kebutuhan untuk apa, jelaskan masalah dan yang kamu butuhkan
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-gradient">
                                                <b>2</b>
                                            </div>
                                            <div class="text-gradient">
                                                <b>Pembayaran</b>
                                            </div>
                                            <div class="">
                                                Setelah memilih website yang Anda inginkan, silakan lakukan order
                                                dan
                                                selesaikan pembayaran.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-gradient">
                                                <b>3</b>
                                            </div>
                                            <div class="text-gradient">
                                                <b>Proses pengerjaan</b>
                                            </div>
                                            <div class="">
                                                Proses pengerjaan mulai dari 1 hari, sesuai tingkat kategori yang dipilih
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-gradient">
                                                <b>4</b>
                                            </div>
                                            <div class="text-gradient">
                                                <b>Revisi</b>
                                            </div>
                                            <div class="">
                                                Jika ada revisi
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-gradient">
                                                <b>5</b>
                                            </div>
                                            <div class="text-gradient">
                                                <b>Selesai</b>
                                            </div>
                                            <div class="">
                                                Terima Penyerahan Project / Siap digunakan
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
    </section>
    <section class="bg-gradient-primary-to-secondary py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-12">
                    <div class="text-center my-5">
                        {{-- <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Pesan</span></h2> --}}
                        <p class="text-muted"></p>
                        <div class="d-flex justify-content-center">

                            <a href="https://api.whatsapp.com/send?phone=6289660741134&text=Saya%20Mau%20Pesan%20Website%20" target="_blank" rel="noopener noreferrer" class="btn-info btn rounded-pill p-3">Pesan Layanan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
