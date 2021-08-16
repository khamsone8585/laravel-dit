@extends('layouts.app')

@section('title','Role Page')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>ພາລະບົດບາດ</h2>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="portfolio-details-container" align="center">
                <p style="font-size: larger; color:tomato; ">ຂໍ້ຕົກລົງວ່າດ້ວຍການຈັດຕັ້ງ ແລະ ການເຄື່ອນໄຫວຂອງກົມການຄ້າພາຍໃນ ກົດຮູບເບິ່ງລາຍລະອຽດເປັນ PDF.</p>
                <a href="assets/doc/role.pdf" target="_blank"><img src="{{asset('frontend/assets/img/role.jpg')}}" title="ພາລະບົດບາດເປັນ PDF" width="90%"></a>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
@endsection