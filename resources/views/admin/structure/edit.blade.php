@extends('admin.admin_master')

@section('title','Structure Page')

@section('content')
    <div>
        <div class="col-sm-12 p-3">
            <div class="main-header" style="margin-top: 0px;">
                <h4>ໂຄງຮ່າງການຈັດຕັ້ງ</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="icofont icofont-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">ແກ້ໄຂຂໍ້ມູນ
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-sm-8 py-3">
            <div class="form-group">
                <form action="{{route('structure.update', $str->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('admin.structure._form')

                    <button type="submit" class="btn btn-inverse-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" ">ຕົກລົງ
                    </button>
                    <a href="{{route('structure.index')}}" class="btn btn-inverse-warning waves-effect waves-light">ກັບຄືນ</a>
                </form>
             </div>
        </div>
    </div>
@endsection
