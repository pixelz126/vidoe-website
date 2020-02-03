 <form action="{{route('profile.update')}}" method="POST" style="display: none; margin-top: 50px;">
 <div class="row">
      
            {{csrf_field()}}
      	@php $input = "name"; @endphp
            <div class="col-md-6"> 
      	<div class="form-group">
      		<label for="name">Name :</label>
      		<input type="text" class="form-control" id="{{$input}}" value="{{isset($user) ? $user->name : ''}}" name="{{$input}}" placeholder="Enter Name">
      		@error($input)
      		<span style="color: #d63031;" class="invalid-feedback" role="alert">
      			<strong>{{ $message }}</strong>
      		</span>
      		@enderror
      	</div>
            </div>
      	@php $input = "email"; @endphp 
            <div class="col-md-6">
      	<div class="form-group">
      		<label for="email">Email address :</label>
      		<input type="email" class="form-control" id="{{$input}}" value="{{isset($user) ? $user->email : ''}}" name="{{$input}}" placeholder="Enter email">
      		@error($input)
      		<span style="color: #d63031;" class="invalid-feedback" role="alert">
      			<strong>{{ $message }}</strong>
      		</span>
      		@enderror
      	</div>
            </div>
      	@php $input = "password"; @endphp 
            <div class="col-md-6">
      	<div class="form-group">
      		<label for="password">Password :</label>
      		<input type="password" class="form-control" id="{{$input}}" name="{{$input}}" placeholder="Password">
      		@error($input)
      		<span style="color: #d63031;" class="invalid-feedback" role="alert">
      			<strong>{{ $message }}</strong>
      		</span>
      		@enderror
      	</div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
</form> 