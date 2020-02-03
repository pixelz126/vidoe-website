{{csrf_field()}}
<div class="box-body">
    @php $input ="name"; @endphp 
    <div class="form-group">
        <label for="name">Tag Name :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Tag Name">
            @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
</div>
