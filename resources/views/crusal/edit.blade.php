@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2 class='page-header'>
        Edit Crusal Image
    </h2>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
    {{Form::model($row,['route'=>['crusal.update',$row->id],'method'=>'put' , 'files'=>true,'class'=>'form-horizontal']) }}
        <div class='form-group'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>
                {{Form::text('title', old('title') ,['class'=>'col-ms-2 form-control'])}}
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>
                {{Form::textarea('description', old('description') ,['class'=>'form-control','rows'=>'4'])}}
            </div>
        </div>  
        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images'.$row->image)}}"></div>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>                
                {{Form::file('image' ,['class'=>'form-control'])}}
            </div>
        </div>     
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='EDIT' />
    {{Form::close() }}
@endsection


    