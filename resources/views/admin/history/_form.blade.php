<div class="form-group">
    <label for="exampleFormControlFile1">ຮູບພາບ</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" value="{{ old('image', $history->image ?? null) }}"/>
</div>
<br>
<label for="exampleTextarea" class="form-control-label">ເນື້ອໃນ</label>
<textarea class="form-control" name="content" id="summernote">
    {{ old('content', $history->content ?? null) }}
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
