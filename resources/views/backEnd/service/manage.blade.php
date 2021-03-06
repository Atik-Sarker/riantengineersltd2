@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Service Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{route('service.create')}}" class="btn btn-info">Add New</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-------------------- table start  ------------------------------->
                <div class="col-md-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered text-center">
                                <tbody>
                                    <tr>
                                        <th>No.</th>
                                        <th> Title</th>
                                        <th> Description </th>
                                        <th> Status</th>
                                        <th> Image</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>{{ $loop->index +1}}</td>
                                        <td> {{ $service->title }} </td>
                                        <td> {{ $service->description }} </td>
                                        <td class="product-item"> 
                                            <img src="{{asset('public/storage')}}/{{$service->image}}" alt="" height="200px" ; width="200px">
                                        </td>
                                        <td class="text-center">

                                            @if($service->status==1)
                                            <form action="{{route('service.status', $service->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" class="btn btn-warning" title="click here to unpublished "><i class="fa fa-thumbs-up"></i></button>
                                            </form>
                                            @else
                                            <form action="{{route('service.status', $service->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="btn btn-warning" title="click here to publish"><i class="fa fa-thumbs-down"></i></button>
                                            </form>
                                            @endif
                                            
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('service.edit', $service->id) }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                            
                                            <form id="delete-form-{{ $service->id }}" action="{{ route('service.destroy', $service->id) }}" method="get" style="display: none">

                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" class="btn btn-danger" onclick="
                                    if (confirm('Are you sure, You want to delete this?'))
                                    {
                                    event.preventDefault();document.getElementById('delete-form-{{ $service->id }}').submit()
                                    }
                                    else
                                    {
                                    event.preventDefault();
                                    }
                                    "><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix pull-right">
                           {{ $services->links()}}
                        </div>
                    </div>
                    <!-- /.box -->
                    <!--------------- table  end   ------------------------------>
                </div>
                <div class="box-body">
<!--                    Start creating your amazing application!-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

<!-- /.content-wrapper --
@endsection

@section('footer-script')
{!! Toastr::message() !!}
@endsection