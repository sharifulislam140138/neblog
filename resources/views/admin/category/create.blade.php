@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">create category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('category.index')}}">category list</a></li>
              <li class="breadcrumb-item active">create category list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

       <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
           
         <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">create category list</h3>
                 <div>
                   
                   <a href="{{route('category.index')}}" class="btn btn-primary">go back category list</a>
                 </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">

                  <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                     <form action="{{route('category.store')}}" method="post">
                      @csrf
                <div class="card-body">
                  @include('includes.errors')
                  <div class="form-group">
                    <label for="name">category name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                  <textarea name="description" id="description" rows="4" class="form-control" placeholder="enter description"></textarea>
                  </div>
              
             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

                  </div>
                  

                </div>
           
              <!-- /.card-header -->
              <!-- form start -->
             
            </div>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      </div>
    </div>

@endsection