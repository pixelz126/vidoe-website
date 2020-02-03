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

    @php $input ="email"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Email :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" placeholder="Enter Meta Keywords">
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input ="message"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">Message :</label>
        <input id="{{$input}}" value="{{isset($row) ? $row->{$input} : ''}}" name="{{$input}}" class="form-control" placeholder="Enter Meta Desciption ">
               @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    <br><hr><br>
<h4>Replay On Message</h4>
        <form action="{{route('message.replay' , ['id' => $row->id])}}" method="POST">
            {{csrf_field()}}
        @php $input ="message"; @endphp  
        <div class="form-group">
            <label for="{{$input}}">Message :</label>
            <input id="{{$input}}" name="{{$input}}" class="form-control" placeholder="Enter Meta Desciption ">
        @error($input)
        <span style="color: #d63031;" class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                    @enderror
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Replay {{$moduleName}}</button>
        </div>
    </form>

</div>

