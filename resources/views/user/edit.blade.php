@extends('layouts.app')

@section('content')

<div class="container">

<h5 class="col-md-4 col-md-offset-1" style="margin-top:120px;">Update <font color="red">User</font></h5>
<hr class="col-md-10 col-md-offset-1" style="margin-top:0px;"/>


<div class="col-md-10 col-md-offset-1">

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!!Form::open(['route'=>['user.update', Auth::user()->id ],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}
    {{ method_field('patch') }}

        <div class='form-group'>
            <label class='col-md-2'>Name</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'>
                <i class='glyphicon glyphicon-pencil'></i>
                </span>
                <input value='{{ $user->name }}' class='form-control' name='name' type='text'/>
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Email</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                    <input value='{{ $user->email }}' class='form-control' name='email' type='text'/>
            </div>
        </div>

        <div class='form-group'>
            <label class='col-md-2'>Mobile</label>
            <div class='col-md-8 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
                    <input value='{{ $user->mobile }}' class='form-control' name='mobile' type='text'/>
            </div>
        </div>

        <img id="profile" class="col-md-offset-3" src="{{ Auth::user()->image }}" width='300px' height='300px'>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-8 input-group'>
                
                    <label class="btn btn-default btn-file">
                                Browse <input id="image" type="file" name="image" style="display: none;">
                            </label>
                            <img id="profile" class="col-md-offset-2" src="{{ Auth::user()->image }}" alt="">
            </div>
        </div>
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-1 btn btn-default' name='ok' value='update' />
    {!!Form::close() !!}
</div><!--end leftsideof from-->
</div>
</div>
@endsection


    
