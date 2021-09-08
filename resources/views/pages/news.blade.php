@php
$news = DB::table('news')->get();
$cates = DB::table('category_news')->get();
@endphp

@extends('main.home')

@section('title','News Page')

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
        <div class="container">
            <div class="row">
                <div class="col-9 d-flex flex-wrap">
                    @foreach ($news as $item)
                    <div class="card text-center mx-2 my-2" style="width: 16rem;">
                        <img src="{{asset('image/news/'.$item->picture)}}" class="card-img-top"/>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">
                                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                    {{$item->description}}
                                </span>
                            </p>
                            <a href="{{url('NewsDetail/'.$item->id)}}" class="btn btn-primary">ອ່ານເພີ່ມເຕີມ</a>
                        </div>
                    </div>
                    @endforeach
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
        </div>
    </div>
</section>
    <!-- End Portfolio Details Section -->
@endsection
