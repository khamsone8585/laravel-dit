@extends('admin.admin_master')

@section('title','Admin | History Page')

@section('content')
    <div>
        <div class="col-sm-12 p-3">
            <div class="main-header" style="margin-top: 0px;">
                <h4>ປະຫວັດຄວາມເປັນມາ</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="icofont icofont-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">ໜ້າຫຼັກ
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-sm-8 py-3">
            <div class="form-group">
                <label for="exampleTextarea" class="form-control-label">ເນື້ອໃນ</label>
                <textarea class="form-control" name="summernote" id="summernote">
                    ສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆສະບາຍດີທົດສອບໆ
                </textarea>
             </div>
        </div>
    </div>


@endsection
