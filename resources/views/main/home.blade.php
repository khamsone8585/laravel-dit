@php

$news = DB::table('news')->get();
$cates = DB::table('category_news')->get();

@endphp

@extends('main.home_master')

@section('title','Home Page')

@section('content')
    <!-- ======= About Section ======= -->

    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6">
                    <h2>ກົມການຄ້າພາຍໃນ</h2>
                    <h3>ແມ່ນກົມໜຶ່ງທີ່ນອນຢູ່ໃນກົງຈັກການຈັດຕັ້ງຂອງ ກະຊວງອຸດສາຫະກຳ ແລະ ການຄ້າ.</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        ມີພາລະບົດບາດຄຸ້ມຄອງ ແລະ ພັດທະນາຕາໜ່າງການຄ້າ, ສະມາຄົມອຸດສາຫະກຳປຸງແຕ່ງ ແລະ ການຄ້າ, ສະພາການຄ້າຕ່າງປະເທດ, ຄົ້ນຄວ້າວິໄຈ ແລະ ພະຍາກອນ, ເກັບກຳ ແລະ ຕິດຕາມການສະໜອງ ແລະ ຄວາມຕ້ອງການຂອງສິນຄ້າ.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> ວຽກງານຄຸ້ມຄອງສິນຄ້າ ແລະ ລາຄາ</li>
                        <li><i class="ri-check-double-line"></i> ວຽກງານປົກປ້ອງສິດ ແລະ ຜົນປະໂຫຍດຂອງຜູ້ຊົມໃຊ້</li>
                        <li><i class="ri-check-double-line"></i> ວຽກງານຄຸ້ມຄອງການແຂ່ງຂັນທາງທຸລະກິດ</li>
                        <li><i class="ri-check-double-line"></i> ວຽກງານກວດກາການຄ້າ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End About Section -->
    <!-- ======= Services Section ======= -->

    <section id="aboutus" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <span>ກ່ຽວກັບພວກເຮົາ</span>
                <h2>ກ່ຽວກັບພວກເຮົາ</h2>
                <p>ກ່ຽວກັບວຽກງານຂອງກົມການຄ້າພາຍໃນ</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="icofont-computer"></i>
                        <h4><a href="">ກ່ຽວກັບພວກເຮົາ</a></h4>
                        <p>ປະຫວັດຄວາມເປັນມາ ໂຄງຮ່າງການຈັດຕັ້ງ ພາລະບົດບາດ ບົດລາຍງານປະຈຳປີ ແຜນຍຸດທະສາດ ແລະ ວິໄສທັດ</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-tasks-alt"></i>
                        <h4><a href="">ຂ່າວ/ປະກາດຂອງກົມ</a></h4>
                        <p>ແຈ້ງການປັບລາຄານໍ້າມັນ ຂ່າວປະຊາສຳພັນ ຮູບພາບກິດຈະກຳ</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-chart-bar-graph"></i>
                        <h4><a href="">ຂໍ້ມູນສະຖິຕິ/ບົດຄົ້ນຄວ້າ</a></h4>
                        <p>ຂໍ້ມູນສະຖິຕິ ບົດຄົ້ນຄວ້າ</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="icofont-settings"></i>
                        <h4><a href="">ນິຕິກຳຂອງກົມ</a></h4>
                        <p>ກົດໝາຍ ແລະ ດຳລັດ ຄຳສັ່ງ ແລະ ຂໍ້ຕົກລົງ ບົດແນະນຳ ແລະ ແຈ້ງການ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="news" class="portfolio">
        <div class="container">
            <div class="section-title">
                <span>ຂ່າວຕ່າງໆ</span>
                <h2>ຂ່າວຕ່າງໆ</h2>
                <p>ແຈ້ງການປັບລາຄານໍ້າມັນ ຂ່າວປະຊາສຳພັນ ຮູບພາບກິດຈະກຳ</p>
            </div>
            <div class="row portfolio-container">
                @foreach ($news as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('image/news/'.$item->picture)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$item->title}}</h4>
                            <p>ຄັ້ງວັນທີ {{ Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</p>
                            <div class="portfolio-links">
                                <a href="{{url('NewsDetail/'.$item->id)}}" title="ອ່ານລະອຽດເພີ່ມ"><i class="ri-links-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
