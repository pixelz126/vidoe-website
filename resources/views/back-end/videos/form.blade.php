{{csrf_field()}}
<div class="box-body" >
    @php $input ="name"; @endphp 
    <div class="form-group">
        <label for="name">Video Name :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Video Name">
            @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="desc"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Video Desciption :</label>
        <textarea id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" class="form-control" placeholder="Enter Video Desciption "></textarea>
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
    @php $input ="image"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Vidoe Image :</label>
        <input type="file" name="{{$input}}">
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
     @php $input ="youtube"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Youtube URL :</label>
        <input type="url" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Youtube URL Keywords">
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>

    @php $input ="published"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Video Status :</label>
        <select class="form-control" name="{{$input}}">
            <option value="1" {{isset($row) && $row->{$input} == 1 ? 'selected' : ''}}>
                Published
            </option>

            <option value="0" {{isset($row) && $row->{$input} == 0 ? 'selected' : ''}}>
                Hidden
            </option>
        </select>
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="cat_id"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Video Category :</label>
        <select multiple class="form-control" name="{{$input}}">
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{isset($row) && $row->{$input} == $category->id ? 'selected' : ''}}>
                    {{$category->name}}
                </option>    

            @endforeach
        </select>
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

    @php $input ="skills[]"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Skills:</label>
        <select multiple class="form-control" name="{{$input}}">
            @foreach($skills as $skill)
                <option value="{{$skill->id}}" {{in_array($skill->id, $selectedSkills) ? 'selected' : '' }}>
                    {{$skill->name}}
                </option>    
            @endforeach
        </select>
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>

    @php $input ="tags[]"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Tags :</label>
        <select multiple class="form-control" name="{{$input}}">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}" {{in_array($tag->id, $selectedTags) ? 'selected' : '' }}>
                    {{$tag->name}}
                </option>    
            @endforeach
        </select>
         @error($input)
            <span style="color: #d63031;" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>



</div>
