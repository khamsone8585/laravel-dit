@php
$news = DB::table('news')->get();
$cates = DB::table('category_news')->get();

@endphp
@extends('main.home')

@section('title','Detail News Page')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>ຂ່າວປະຊາສຳພັນ</h2>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
               <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
        <input type="hidden" name="id" value="{{ $dataNews[0]->id }}">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <img src="{{asset('image/news/'.$dataNews[0]->picture)}}" class="img-fluid" alt="...">
                </div>
                <div class="col-3">
                    <div class="parent">
                        <div class="main">
                          <div class="list">
                            <h2 class="cates">ປະເພດຂ່າວ</h2>
                            <ol class="list-group list-group-numbered">
                                @foreach ($cates as $data)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{$data->name}}</div>
                                  </div>
                                    <span class="badge bg-primary rounded-pill"></span>
                                </li>
                                @endforeach
                            </ol>
                          </div>
                        </div>
                    </div>
                    <br>
                    <div class="parent">
                        <div class="main">
                          <div class="list">
                            <h2 class="cates">ແຈ້ງການ</h2>
                            <ol class="list-group list-group-numbered">
                                @foreach ($cates as $data)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{$data->name}}</div>
                                  </div>
                                    <span class="badge bg-primary rounded-pill"></span>
                                </li>
                                @endforeach
                            </ol>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="text-secondary">
                    <p>{!!$dataNews[0]->content!!}</p>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- End Portfolio Details Section -->
@endsection
