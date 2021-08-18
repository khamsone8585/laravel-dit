
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
                                <th scope="col">ຮູບພາບ</th>
                                <th scope="col">ເນືອໃນ</th>
                                <th scope="col">ສ້າງເມື່ອ</th>
                                <th scope="col">ກະທຳ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($history as $item)
                            <tr>

                                <td>1</td>
                                <td><img src="{{asset($item->image)}}" style="height: 40px; with:70px;" alt=""></td>
                                <td>{{ Str::limit($item->content, 15) }}</td>
                                <td>
                                    @if($item->created_at == NULL)
                                        <span class="text-danger">NO Date Set</span>
                                    @else
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('history.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                    {{-- <a href="" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a> --}}
                                </td>
                            </tr>
                            @empty
                                <p>No blog posts yet!</p>
                            @endforelse
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
                    @forelse ($history as $item)
                    <div class="card">
                        <div class="card-block">
                           <div class="md-card-block">
                              <p class="m-b-20">
                                 <span class="f-w-600 f-16 d-block m-b-10">ປະຫວັດຄວາມເປັນມາ</span>
                                 {!! $item->content !!}
                              </p>
                           </div>
                        </div>
                     </div>
                    @empty
                        <p>No blog posts yet!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
