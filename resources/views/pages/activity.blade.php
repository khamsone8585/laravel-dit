@extends('main.home')

@section('title','Activity Page')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>ຮູບພາບກິດຈະກຳ</h2>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
             <!-- Добавьте модальное окно после открывающего тега body-->
            <div class="modal fade" id="image-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="modal-title"></div>
                        </div>
                        <div class="modal-body">
                            <img class="img-responsive" src="" alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image01-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image02-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image03-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image04-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-2">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image05-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image06-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image07-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image08-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image09-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image10-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image11-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="#" class="thumbnail">
                        <img src="https://itchief.ru/assets/demo/images/image12-800x600-min.jpg" alt="..." class="img-thumbnail">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
