<div class="con">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="exampleFormControlFile1">ຮູບພາບ</label>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" value="{{ old('image', $roles->image ?? null) }}"/>
        </div>
        <div class="form-group col-md-8">
            <label for="exampleInputName1">ພາບເກົ່າ</label>
            <img src="{{ $roles->image }}" style="width: 70px; height: 50px;">
            <input type="hidden" name="oldimage" value="{{ $roles->image }}">
        </div>
    </div>
</div>


<br>
<label for="exampleTextarea" class="form-control-label">ເນື້ອໃນ</label>
<textarea class="form-control" name="content" id="summernote">
    {{ old('content', $roles->content ?? null) }}
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
