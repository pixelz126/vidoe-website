@php $input ="comment"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Comment :</label>
        <input type="text" id="{{$input}}" name="{{$input}}" class="form-control" value="{{isset($row) ? $row->{$input} : ''}}">      	

               @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>