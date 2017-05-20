@extends('layout')

@section('body-content')
<div class="row">
	<div class="col-lg-offset-2 col-lg-8">
		<form action="{{action('StudentsController@store')}}" class="form-horizontal" method="POST" role="form">
			{{csrf_field()}}
			<legend>Form title</legend>
			<div class="form-group @if ($errors->has('name')) has-error @endif">
				<label class="control-label col-lg-3">Name</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="name">
					{!!$errors->first('name','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('roll')) has-error @endif">
				<label class="control-label col-lg-3">Roll</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="roll" value="{{old('roll')}}" placeholder="roll">
					{!!$errors->first('roll','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('email')) has-error @endif">
				<label class="control-label col-lg-3">E-mail</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="email">
					{!!$errors->first('email','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('class_id')) has-error @endif">
				<label class="control-label col-lg-3">Class</label>
				<div class="col-lg-9">
					{{ Form::select('class_id',  $classes, null, ['placeholder'=>'Please Select', 'class'=>'form-control']) }}
					{!!$errors->first('class_id','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('school_id')) has-error @endif">
				<label class="control-label col-lg-3">School</label>
				<div class="col-lg-9">
					{{ Form::select('school_id',  $schools, null, ['placeholder'=>'Please Select', 'class'=>'form-control']) }}
					{!!$errors->first('school_id','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('gender')) has-error @endif">
				<label class="control-label col-lg-3">Gender</label>
				<div class="col-lg-9">
					@foreach ($gender as $label=>$value)
				      <label class="radio-inline">
				        {{ Form::radio('gender', $value, old('gender')==$value) }}  {{$label}}
				      </label>
				    @endforeach
					{{-- <input type="text" class="form-control" name="gender" value="{{old('gender')}}" placeholder="gender"> --}}
					{!!$errors->first('gender','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('address')) has-error @endif">
				<label class="control-label col-lg-3">Address</label>
				<div class="col-lg-9">
					<textarea name="address" class="form-control" rows="5" placeholder="address">{{old('address')}}</textarea>
					<span class="help-inline">{!!$errors->first('address','<span class="help-block">:message</span>')!!}</span>
				</div>
			</div>
			<div class="form-group @if ($errors->has('subject')) has-error @endif">
				<label class="control-label col-lg-3">Subjects</label>
				<div class="col-lg-9">
					<div class="checkbox">
					@foreach ($subjects as $id=>$subject)
				      <label>
				        {{ Form::checkbox('subject[]', $id )  }}  {{$subject}}
				      </label><br>
				    @endforeach
					{!!$errors->first('subject','<span class="help-block">:message</span>')!!}
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"></label>
				<div class="col-lg-9">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection