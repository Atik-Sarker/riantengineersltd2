@extends('layouts.master')

@section('title', 'Dashboard')

@section('head_style')
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Slider Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
                <a href="{{route('slider.manage')}}" class="btn btn-info">Manage</a>
            </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-12 mx-auto ">
                <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Slider Edit </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" name="edit-form" action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="slider_name" class="col-sm-3 control-label">Slider Name</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('slider_name') ? ' is-invalid' : '' }}" id="slider_name" name="slider_name" value="{{ old('slider_name') ? old('slider_name') : $slider->slider_name }}">
                      
                        @if ($errors->has('slider_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_name') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="slider_title" class="col-sm-3 control-label">Slider Title</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('slider_title') ? ' is-invalid' : '' }}" id="slider_title" name="slider_title" value="{{ old('slider_title')? old('slider_title') : $slider->slider_title }}">
                      
                        @if ($errors->has('slider_title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label for="slider_subtitle" class="col-sm-3 control-label">Slider Subtitle</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('slider_subtitle') ? ' is-invalid' : '' }}" id="slider_subtitle" name="slider_subtitle" value="{{ old('slider_subtitle')? old('slider_subtitle') : $slider->slider_subtitle }}">
                      
                        @if ($errors->has('slider_subtitle'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_subtitle') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  <div class="row">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <div class="product-item">
                        <img src="{{asset('public/storage')}}/{{$slider->image}}" alt="">
                        </div>
                      </div>
                    </div> 
                      <div class="form-group">
                      <label for="slider_image" class="col-sm-6 control-label">Update Image</label>
  
                      <div class="col-sm-12">
                        <input type="file" class="form-control{{ $errors->has('slider_image') ? ' is-invalid' : '' }}" id="slider_image" name="slider_image" value="{{ old('slider_image') }}">
                      
                        @if ($errors->has('slider_image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_image') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>  
                    
                    </div>            
                   <!-- checkbox -->
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="Active" value="1">
                                    <label class="form-check-label"  for="Active">Active</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="Deactivate" value="0">
                                    <label class="form-check-label"  for="Deactivate">Deactivate</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  <!-- checkbox -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <script>
    document.forms['edit-form'].elements['status'].value="{{$slider->status}}";
  </script>
@endsection
