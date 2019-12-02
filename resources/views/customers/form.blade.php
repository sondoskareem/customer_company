 <div class="form-group">
		<label for="name">name </label>
		<input type="text" name = "name" value = "{{old('name') ?? $customer->name}}" class = "form-control">
	</div>
	<div>{{ $errors->first('name')}}</div>

	<div class="form-group">
		<label for="email">email </label>
		<input type="text" name = "email" value = "{{old('email') ?? $customer->email}}" class = "form-control">
	</div>
	<div>{{ $errors->first('email')}}</div>

	<div class="form-group">
		<label for="active">status</label>
		<select name="active" id="active" class = "form-control">
			<option value="" disabled>Select Customer state</option>
			{{-- @foreach($customer->activeOptions() as $activeOptionKey =>$activeOptionValue) 
		 		 <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' :''}}>{{$activeOptionValue}}</option>
			@endforeach --}}


				 <option value="1">Active</option>
				 <option value="0">Inactive</option>
		</select>
	</div>

 <div class="form-group">
	<label for="company_id">Company name</label>
		<select name="company_id" id="company_id" class = "form-control">
			@foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
		</select>
	</div>
	<div class="form-group d-flex flex-column">
		<label for="image">Profile image</label>
		<input type="file" name="image" class="py-3">
		<div>{{$errors->first('image')}}</div>
	</div>
	@csrf
