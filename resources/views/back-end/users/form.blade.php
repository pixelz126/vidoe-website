{{csrf_field()}}
<div class="box-body">
    @php $input = "name"; @endphp 
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->name : ''}}" name="{{$input}}" placeholder="Enter Name">
            @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input = "email"; @endphp 
    <div class="form-group">
        <label for="email">Email address :</label>
        <input type="email" class="form-control" id="{{$input}}" value="{{isset($row) ? $row->email : ''}}" name="{{$input}}" placeholder="Enter email">
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
    @php $input = "password"; @endphp 
    <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" class="form-control" id="{{$input}}" name="{{$input}}" placeholder="Password">
        @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>
        @php $input ="group"; @endphp  
    <div class="form-group">
        <label for="{{$input}}">User Group :</label>
        <select class="form-control" name="{{$input}}">
            <option value="admin" {{isset($row) && $row->{$input} == 'admin' ? 'selected' : ''}}>
                Admin
            </option>

            <option value="user" {{isset($row) && $row->{$input} == 'user' ? 'selected' : ''}}>
                User
            </option>
        </select>
         @error($input)
                    <span style="color: #d63031;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    </div>

</div>
