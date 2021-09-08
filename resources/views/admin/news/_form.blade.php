<div class="con">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="title">ຫົວຂໍ້</label>
                <input type="text" class="form-control" name="title" placeholder="ຫົວຂໍ້">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="description">ຄຳອະທິບາຍ</label>
                <input type="text" class="form-control" name="description" placeholder="ຄຳອະທິບາຍ">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="picture">ຟາຍຮູບພາບປະກອບ</label>
                <input type="file" class="form-control" name="picture" id="picture">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
            <label>ປະເພດຂ່າວ</label>
            <select class="form-control select2" name="cates_id" style="width: 100%;">
                @foreach($cates as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            </div>
        </div>
    </div>
</div>

<br>
<label for="exampleTextarea" class="form-control-label">ເນື້ອໃນ</label>
<textarea class="form-control" name="content" id="summernote">
    {{ old('content', $news->content ?? null) }}
</textarea>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
