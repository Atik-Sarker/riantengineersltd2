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
            <h1 class="m-0 text-dark">Create Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
                <a href="{{route('service.manage')}}" class="btn btn-info">Manage</a>
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
          
          <div class="col-lg-8 mx-auto ">
                <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Service</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" name="edit-form" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="slider_name" class="col-sm-3 control-label">Service Title</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Service Title" value="{{ old('title') }}" autofocus>
                      
                        @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="slider_name" class="col-sm-3 control-label">Service Description</label>
  
                      <div class="col-sm-10">
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Service description" name="description">{{ old('description') }}</textarea>
                      
                        @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="image" class="col-sm-3 control-label">Service Image</label>
  
                      <div class="col-sm-10">
                        <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image" name="image" value="{{ old('image') }}">
                      
                        @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif
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
                                @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
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
                                @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                      </div>
                  <!-- checkbox -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
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
@endsection