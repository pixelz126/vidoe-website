{{csrf_field()}}
<div class="box-body">
    @php $input ="name"; @endphp 
    <div class="form-group">
        <label for="name">Page Name :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Page Name">
            @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="desc"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Page Desciption :</label>
        <textarea id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" class="form-control" placeholder="Enter Page Desciption "></textarea>
               @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="meta_keywords"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Meta Keywords :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Meta Keywords">
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="meta_desc"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Meta Desciption :</label>
        <textarea id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" class="form-control" placeholder="Enter Meta Desciption "></textarea>
               @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
</div><!-- /.box-body -->
