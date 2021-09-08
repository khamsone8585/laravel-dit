<div class="form-group">
    <label>ຫົວຂໍ້</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $str->title ?? null) }}">
    {{-- value="{{ old('title', $structure->title ?? null) }}"/> --}}
</div>
<div class="form-group col-md-8">
    <label for="exampleInputName1">ພາບເກົ່າ</label>
    <img src="{{ $str->image }}" style="width: 70px; height: 50px;">
    <input type="hidden" name="oldimage" value="{{ $str->image }}">
</div>
<br>
<div class="form-group">
    <label for="exampleFormControlFile1">ປ້ອນຟາຍຂໍ້ມູນ: </label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="{{ old('file', $str->file ?? null) }}">
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

