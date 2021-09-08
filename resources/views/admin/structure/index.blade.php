
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
                    <li class="breadcrumb-item">ສະແດງຂໍ້ມູນ
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-6 table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">ຫົວຂໍ້</th>
                                <th scope="col">ພາບປະກອບ</th>
                                <th scope="col">ສ້າງເມື່ອ</th>
                                <th scope="col">ກະທຳ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($str as $item)
                            <tr>
                                <td>1</td>
                                <td>{{ Str::limit($item->title, 10) }}</td>
                                <td>{{ Str::limit($item->file, 10) }}</td>
                                <td>
                                    @if($item->created_at == NULL)
                                        <span class="text-danger">NO Date Set</span>
                                    @else
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('structure.edit', $item->id)}}" class="btn btn-info">ແກ້ໄຂ</a>
                                    {{-- <a href="" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a> --}}
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="content">
                    <div class="card-header text-center">
                        <h5 class="card-header-text">ຕົວຢ່າງສະແດງເນື້ອໃນ</h5>
                    </div>
                    @forelse ( $str as $item )
                    <div class="card flex-column">
                        <div class="card-block">
                            <div class="row">
                                <a href="#" class="pop">
                                    <img src="{{ asset('image/structures/'.$item->file) }}" style="width: 800px; height: 500px;">
                                </a>
                            </div>
                        </div>
                        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <img src="" class="imagepreview" style="width: 100%;" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-card-block">
                            <p class="m-b-20 px-3">
                                {{-- {!! $item->content !!} --}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
