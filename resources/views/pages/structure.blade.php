@extends('layouts.app')

@section('title','Stucture Page')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>ໂຄງຮ່າງການຈັດຕັ້ງ</h2>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="portfolio-details-container" align="center">
            <img src="{{asset('frontend/assets/img/structure.png')}}" title="ໂຄງຮ່າງການຈັດຕັ້ງຂອງກົມການຄ້າພາຍໃນ ສົກປີ 2020" width="95%">
        </div>
    </div>
</section>
<!-- End Portfolio Details Section -->
@endsection