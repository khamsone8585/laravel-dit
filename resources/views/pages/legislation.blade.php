@extends('layouts.app')

@section('title','Legislation Page')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>ກົດໝາຍ ແລະ ດຳລັດ</h2>
                <ol>
                    <li><a href="#law">ກົດໝາຍທີ່ກ່ຽວຂ້ອງ</a></li>
                    <li><a href="#decree">ດຳລັດທີ່ກ່ຽວຂ້ອງ</a></li>
                </ol>
            </div>
        </div>
    </section>

    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="portfolio-details-container">
                <div id="law"></div>
                <h5>ກົດໝາຍຕ່າງໆທີ່ກ່ຽວຂ້ອງກົມການຄ້າພາຍໃນ</h5>
                <ul>
                    <li><a href="assets/doc/law-60-14072015.pdf" target="_blank">ກົດໝາຍ ວ່າດ້ວຍການແຂ່ງຂັນທາງທຸລະກິດ - ເລກທີ 60/ສພຊ 04/12/2012</a></li>
                    <li><a href="assets/doc/law-02-30062010.pdf" target="_blank">ກົດໝາຍ ວ່າດ້ວຍການປົກປ້ອງຜູ້ຊົມໃຊ້ - ເລກທີ 02/ສພຊ 30/06/2010</a></li>
                </ul>
                <div id="decree" style="margin-bottom: 80px;"></div>
                <hr>
                <h5>ດໍາລັດຕ່າງໆທີ່ກ່ຽວຂ້ອງກົມການຄ້າພາຍໃນ</h5>
                <ul>
                    <li><a href="assets/doc/decree-331-27102017.pdf" target="_blank">ດຳລັດ ວ່າດ້ວຍທຸລະກິດນ້ຳມັນເຊື້ອໄຟ - ເລກທີ 331/ນຍ 27/10/2017</a></li>
                    <li><a href="assets/doc/decree-508-04122012.pdf" target="_blank">ດໍາລັດ ວ່າດ້າຍການກວດກາການຄ້າ - ເລກທີ 508/ລບ 04/12/2012</a></li>
                    <li><a href="assets/doc/decree-474-18112010.pdf" target="_blank">ດຳລັດ ວ່າດ້ວຍການຄຸ້ມຄອງລາຄາສິນຄ້າ ແລະ ຄ່າບໍລິການ - ເລກທີ 474/ນຍ 18/11/2010</a></li>
                </ul>
            </div>
        </div>
    </section>
<!-- End Portfolio Details Section -->
@endsection