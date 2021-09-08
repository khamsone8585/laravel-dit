
@extends('admin.admin_master')

@section('title','Category Page')

@section('content')
    <div>
        <div class="col-sm-12 p-3">
            <div class="main-header" style="margin-top: 0px;">
                <h4>ພາລະບົດບາດ</h4>
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
                    <a href="{{ route('cateNews.create') }}"><button class="btn btn-info">ເພີ່ມປະເພດ</button></a>
                    <div class="col-sm-6 table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">ຊື່</th>
                                <th scope="col">ວັນທີສ້າງ</th>
                                <th scope="col">ກະທຳ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($cates as $item)
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">{{ $item->name }}</td>
                                <td scope="row">
                                    @if($item->created_at == NULL)
                                        <span class="text-danger">ບໍ່ໄດ້ກຳນົດວັນທີ</span>
                                    @else
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td scope="row">
                                    <form action=" {{ route('cateNews.destroy', $item->id) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <a href="{{ route('cateNews.edit', $item->id) }}" class="btn btn-info">ແກ້ໄຂ</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i>ລົບ</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <p>ບໍ່ພົບຂໍ້ມູນປະຫວັດຄວາມເປັນມາ</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
