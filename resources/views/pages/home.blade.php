@extends('layouts.app')

@section('content')
<!-- Header-->
<style>
    /* Menambahkan garis pada lingkaran langkah */
    .list-group-item {
        position: relative;
        padding-left: 30px;
        /* Sesuaikan jarak antara garis dan teks */
    }

    .list-group-item::before {
        content: '\2022';
        /* Unicode untuk tanda bullet */
        position: absolute;
        top: 50%;
        /* Menyusun tanda bullet di tengah vertikal */
        left: -20px;
        /* Sesuaikan posisi tanda bullet */
        transform: translateY(-190%);
        width: 16px;
        /* Sesuaikan lebar tanda bullet */
        height: 16px;
        font-size: 34px;
        /* Sesuaikan ukuran font tanda bullet */
        color: #186F65;
        /* Warna tanda bullet dapat disesuaikan */
        z-index: 1;
    }

    .list-group-item::after {
        content: '';
        position: absolute;
        top: 50%;
        left: -14px;
        /* Sesuaikan posisi garis */
        transform: translateY(-50%);
        width: 2px;
        /* Sesuaikan lebar garis */
        height: 100%;
        background-color: #186F65;
        /* Warna garis dapat disesuaikan */
        z-index: 0;
    }

    /* Menambahkan garis pada kiri kartu */
    .connector-line-left {
        position: absolute;
        top: 0;
        left: 0;
        width: 2px;
        /* Sesuaikan lebar garis kiri */
        height: 100%;
        background-color: #186F65;
        /* Warna garis dapat disesuaikan */
        z-index: 2;
    }

    /* Menambahkan garis yang menghubungkan setiap kartu dengan dot */
    .connector-line-right {
        position: absolute;
        top: 50%;
        left: -10px;
        /* Sesuaikan posisi garis */
        transform: translateY(-100%);
        width: 10px;
        /* Sesuaikan lebar garis kanan */
        height: 2px;
        /* Sesuaikan tinggi garis kanan */
        background-color: #186F65;
        /* Warna garis dapat disesuaikan */
        z-index: -1;
    }
</style>

<header class="bg-gradient-primary" style="height: 100vh">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="fs-3 fw-medium ">Saya</div>
                    <h1 class=" fw-bolder mb-3"><span class=" d-inline" style="font-size: 33px">Vernanda Septia
                            Wanandi</span></h1>
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">Web Developer & Mobile Application Developer</div>
                    </div>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-success rounded-pill btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                            href="{{ url('resume') }}">Download CV</a>
                        <a class="btn  btn-lg px-3 py-3 fs-6 fw-bolder  " href="{{ url('prokects') }}">Projects</a>
                    </div>
                    <div class="d-flex justify-content-start fs-2 gap-4">
                        <a class="text-success" href="mailto:vernandaspw@gmail.com">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a class="text-success" href="https://instagram.com/nandicode"><i
                                class="bi bi-instagram"></i></a>
                        <a class="text-success" href="https://www.linkedin.com/in/vernandaspw"><i
                                class="bi bi-linkedin"></i></a>
                        <a class="text-success" href="https://github.com/vernandaspw"><i class="bi bi-github"></i></a>
                        <a class="text-success" href="https://facebook.com/vernanda.spw"><i
                                class="bi bi-facebook"></i></a>
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
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
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
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
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
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
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
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
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
<section class="bg-white d-flex align-items-center" style="height: 70vh">
    <div class="container px-5 pb-5">
        <div class="text-center my-5">
            <h2 class="display-6 fw-bolder"><span class=" d-inline">Tentang Saya</span></h2>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-6">

                <p class=" text-start">Saya lulusan S1 Sistem Informasi dari Institut Teknologi dan Bisnis
                    Palcomtech dengan IPK 3,73. Saya memiliki kemampuan membuat web atau API menggunakan
                    Framework
                    Laravel, dan mampu membuat aplikasi mobile menggunakan Framework Flutter dengan state
                    managemen
                    Getx. Dapat bekerja individu maupun sebagai tim, memiliki semangat tinggi untuk
                    berkembang,
                    bermotivasi tinggi dan tertarik untuk mempelajari hal hal baru. Semoga passion dan minat
                    ini
                    bisa menjadikan saya sebagai asset untuk tergabung kedalam organisasi/tim, semoga
                    bermanfaat dan
                    berguna dengan baik.</p>
            </div>
            <div class="col-md-6">
                <table>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:Vernanda Septia Wanandi <b>(Nandi)</b></td>
                        </tr>
                        <tr>
                            <td>Tanggal lahir</td>
                            <td>:January 01, 1987</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:Palembang, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:vernandaspw@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:+62822 9999 8741</td>
                        </tr>

                    </tbody>
                </table>
                <div class="badge bg-gradient-primary-to-secondary">
                    120 Project complete
                </div>
                <div class="mt-3">
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-success rounded-pill btn-lg px-5 py-2 me-sm-3 fs-6 fw-bolder"
                            href="{{ url('resume') }}">Download CV</a>
                        <a class="btn  btn-lg px-1 py-2 rounded-pill fs-6 fw-bolder  "
                            href="{{ url('prokects') }}">Projects</a>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>
<section class="bg-gradient-primary d-flex align-items-center py-4 pb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="container px-5 pb-5">
                <div class="text-center my-5">
                    <h2 class="display-6 fw-bolder"><span class=" d-inline">Expertise</span></h2>
                </div>

                <div class="container text-center">

                    <div class="row row-cols-lg-3 justify-content-md-center">
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>Web Design</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>Web Development</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>Mobile Development</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>UIUX</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>UIUX</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded">
                                <div class="card-body bg-white text-center rounded">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <b>Branding</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container px-5 pb-5">
                <div class="text-center my-5">
                    <h2 class="display-6 fw-bolder"><span class=" d-inline">Tech Stack</span></h2>
                </div>
                <div class="container text-center">
                    <div class="row row-cols-lg-6">
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/html-5.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/logos_css-3.svg') }}" width="40" height="40"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/js-official.svg') }}" width="40" height="40"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/php.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/dart.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/laravel.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/flutter.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/react.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/bootstrap.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/tailwindcss.svg') }}" width="40" height="40"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/mysql.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/mariadb.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/git-icon.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/mdi_github.svg') }}" width="40" height="40"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/bitbucket.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/figma.svg') }}" width="40" height="40" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-start">
                            <div class="card shadow-sm m-2 rounded-pill">
                                <div class="card-body bg-white text-center rounded-pill">
                                    <div class="">
                                        <img src="{{ asset('img/icons/lunacy.svg') }}" width="40" height="40" alt="">
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
<section class="bg-white  py-4 pb-5">
    <div class="row d-flex justify-content-center align-items-start">
        <div class="col-lg-6">
            <div class="container px-5 pb-5">
                <div class="text-center my-5">
                    <h2 class="display-6 fw-bolder"><span class=" d-inline">Education</span></h2>
                </div>
                <div class="container text-center">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>INSTITUT TEKNOLOGI DAN BISNIS PALCOMTECH</b> </h6>
                                        <div class="">Agu 2018 - Des 2022</div>
                                        <p class="mb-0"><span class="text-muted">Sarjana Komputer</span>, Program studi
                                            S1 Sistem Informasi, 3.73/4.00</p>
                                        <div class="">
                                            Keahlian: Java · C# · HTML · Bootstrap · css · Unified Modeling Language
                                            (UML) · Software Development Life Cycle (SDLC) · MySQL · PHP · Laravel
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>SMA MUHAMMADIYAH 1 PALEMBANG</b> </h6>
                                        <div class="">2014 - 2017</div>
                                        <p class="mb-0"><span class="text-muted">Social Sciences</span>, Ilmu
                                            Pengetahuan Sosial</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container px-5 pb-5">
                <div class="text-center my-5">
                    <h2 class="display-6 fw-bolder"><span class=" d-inline">Experiences</span></h2>
                </div>
                <div class="container text-center">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>Programmer</b> </h6>
                                        <div class="">
                                            RSUD Siti Fatimah Provinsi Sumatera Selatan · Di lokasi
                                        </div>
                                        <div class="text-muted">Agu 2023 - Jan 2024 · 6 bln</div>
                                        <div class="text-muted">Palembang, Sumatera Selatan, Indonesia · Gabungan</div>
                                        <div class=" py-1">
                                            Mendevelopment beberapa aplikasi yang dibutuhkan seperti inacbg, mendeploy
                                            ke windows server, analisa data, maintance sistem.
                                        </div>
                                        <div class=""><b>Keahlian:</b> Git · MySQL · Laravel</div>

                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>Full Stack Application Developer</b> </h6>
                                        <div class="">
                                            PAYOPRINT · Purnawaktu
                                        </div>
                                        <div class="text-muted">Jul 2023 - Des 2023 · 7 bln</div>
                                        <div class="text-muted">Palembang, Sumatera Selatan, Indonesia · Gabungan</div>
                                        <div class=" py-1">
                                            Melakukan perancangan web app, mulai dari analisa sistem, perancangan
                                            database, perancangan wireframe, development menggunakan laravel, deployment
                                            AWS, membuat company profile v1.
                                        </div>
                                        <div class=""><b>Keahlian:</b> Information Architecture · Progressive Web
                                            Applications (PWAs) · Application Architecture · Amazon Web Services (AWS) ·
                                            Application Programming Interfaces (API) · Jira · Bootstrap · Figma
                                            (Software) · UX Research · Git · MySQL · Laravel · Web Development ·
                                            Back-End Web Development</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>Freelance Programmer</b> </h6>
                                        <div class="">
                                            Pekerja Lepas
                                        </div>
                                        <div class="text-muted">Des 2021 - Saat ini · 2 thn 1 bln</div>
                                        <div class="text-muted">Gabungan</div>
                                        <div class=" py-1">
                                            Saya mengambil proyek untuk bekerja secara individu atau dengan tim saya
                                            sebagai programmer lepas
                                        </div>
                                        <div class=""><b>Keahlian:</b> Jira · Project Management · UIUX · Unified
                                            Modeling Language (UML) · Web Design · Adobe Illustrator · Adobe XD · Figma
                                            (Software) · UX Research · User Interface Design · Git · Flutter Getx ·
                                            Full-Stack Development · Flutter · MySQL · PHP · Laravel · Web Development ·
                                            Back-End Web Development</div>

                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>IT Support</b> </h6>
                                        <div class="">
                                            Dinas Pemberdayaan Masyarakat dan Desa Provinsi Sumatera Selatan · Magang
                                        </div>
                                        <div class="text-muted">Mar 2021 - Apr 2021 · 2 bln</div>
                                        <div class="text-muted">Palembang, Sumatera Selatan, Indonesia · Gabungan</div>
                                        <div class=" py-1">
                                            Saya membuat sebuah website company porfile untuk instansi
                                        </div>
                                        <div class=""><b>Keahlian:</b> Git · MySQL · Laravel</div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>





            </div>
        </div>
    </div>


</section>
<section class="bg-gradient-primary d-flex align-items-center py-4 pb-5">
    <div class="container px-5 pb-5">
        <div class="text-center my-5">
            <h2 class="display-6 fw-bolder"><span class=" d-inline">Credentials</span></h2>
        </div>
        <div class="container text-center">
            <div class="row row-cols-4">
                <div class="col text-start">
                    <div class="card shadow-sm m-2">
                        <div class="card-header ">
                            PHP
                        </div>
                        <div style="font-size:13px" class="card-body bg-success text-white">
                            Bahasa pemrograman
                        </div>
                    </div>
                </div>
                <div class="col text-start">
                    <div class="card shadow-sm m-2">
                        <div class="card-header ">
                            Laravel
                        </div>
                        <div style="font-size:13px" class="card-body bg-success text-white">
                            Framework PHP
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
                <div class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                    <div class="card-body text-center p-0">
                        <div class=" d-flex align-items-center justify-content-center">
                            <div class="p-5">
                                <img class="" src="{{ asset('img/LOGO lalandigital.png') }}" width="70" height="70"
                                    alt="">
                                <h2 class="fw-bolder">Lalan Digital</h2>
                                <p>Membantu Digitalisasi Musi Banyuasin, Lalan</p>
                                <div class=" d-flex align-items-center justify-content-center">

                                    <a href="https://lalandigital.com/" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/lalandigital" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                    <div class="card-body text-center p-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="p-5">
                                <img src="{{ asset('img/sikeuangan/logo-bg-white.jpg') }}" width="70" height="70"
                                    alt="">
                                <h2 class="fw-bolder">SIKeuangan</h2>
                                <p>
                                    Sistem Informasi Keuangan Akuntansi, mempermudah mengelola keuangan untuk bisnis,
                                    pribadi ataupun keluarga. Support Integrasi API
                                </p>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <a href="https://sikeuangan.com/" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/sikeuangan" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                    <div class="card-body text-center p-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="p-5">
                                <img src="{{ asset('img/payoprint.png') }}" width="70" height="70" alt="">
                                <h2 class="fw-bolder">Payo Print</h2>
                                <p>
                                    Payoprint adalah layanan jasa printing online di Palembang.
                                </p>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <a href="https://payoprint.id/" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/payoprintid" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                    <div class="card-body text-center p-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="p-5">
                                <img src="{{ asset('img/logo_pesenkos.png') }}" width="70" height="70" alt="">
                                <h2 class="fw-bolder">PesenKos.com</h2>
                                <p>
                                    Platform pencarian dan pemesanan kos/kontrakan.
                                </p>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <a href="https://pesenkos.com/" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/pesenkoscom" class="me-3" target="_blank"
                                        rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<livewire:hash-page />
{{-- <section class=" py-5">
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
                        <br class="mb-0">Dibuat menggunakan Laravel / FLutter
                    </p>
                </div>.
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-4 mb-3">
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                            <li>Fitur Pos Dukungan</li>
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
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                <div class="card bg-white">
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
                            Menyediakan maintance Diluar Proses Project Selesai jika Ada bug, Penambahan / Pengubahan
                            Filtur
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
                                            Pilih kategori website, pilih online/hanya file, kebutuhan untuk apa,
                                            jelaskan masalah dan yang kamu butuhkan
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
</section> --}}
<section class="bg-gradient-primary-to-secondary py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-12">
                <div class="text-center my-5">
                    {{-- <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Pesan</span></h2> --}}
                    <p class="text-muted"></p>
                    <div class="d-flex justify-content-center">

                        <a href="https://api.whatsapp.com/send?phone=6282299998741&text=Saya%20Mau%20Pesan%20Website%20"
                            target="_blank" rel="noopener noreferrer" class="btn-info btn rounded-pill p-3">Hubungi
                            Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
