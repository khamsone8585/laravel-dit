@extends('admin.admin_master')

@section('title','Admin | Structure Page')

@section('content')
    <div>
        <div class="col-sm-12 p-3">
            <div class="main-header" style="margin-top: 0px;">
                <h4>ໂຄງຮ່າງການຈັດຕັ້ງ</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="icofont icofont-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">ສ້າງຂໍ້ມູນ
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-sm-8 py-3">
            <div class="form-group">
                <form action="{{route('structure.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @if ($msg = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $msg }}</strong>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @include('admin.structure._form')

                    <button type="submit" class="btn btn-inverse-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" ">ຕົກລົງ
                    </button>
                    <input type="button" class="btn btn-inverse-warning waves-effect waves-light" onclick="history.go(-1);" value="ກັບຄືນ">
                </form>
             </div>
        </div>
    </div>
@endsection
