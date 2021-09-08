@php
$history = DB::table('histories')->get();
@endphp

@extends('main.home')

@section('title','History Page')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>ປະຫວັດຄວາມເປັນມາ</h2>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            @foreach ($history as $item)
            <img src="{{ $item->image }}" style="width: 800px; height: 500px;">
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    {!! $item->content !!}
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Portfolio Details Section -->
@endsection
