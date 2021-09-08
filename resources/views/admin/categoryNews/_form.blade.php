<div class="con">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="exampleFormControlFile1">ຊື່ປະເພດຂ່າວ</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $cates->name ?? null) }}">
        </div>
    </div>
</div>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
