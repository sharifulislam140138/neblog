@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">show post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('post.index')}}">post list</a></li>
              <li class="breadcrumb-item active">show post list</li>
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
                <h3 class="card-title">show post list</h3>
                 <div>
                   
                   <a href="{{route('post.index')}}" class="btn btn-primary">go back post list</a>
                 </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <table class="table table-bordered ">
           
              <tbody>

                <tr>
                  <th style="width: 200px">image</th>
                      <div style="max-width: 70px;max-height: 70;overflow: hidden">
                          <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                          
                        </div>
                </tr>

                  <tr>
                  <th style="width: 200px">title</th>
                  <td>{{$post->title}}</td>
                </tr>

                      <tr>
                  <th style="width: 200px">category name</th>
                  <td>{{$post->category->name}}</td>
                </tr>

                      <tr>
                  <th style="width: 200px">post tags</th>
                  <td>{{$post->category_id}}</td>
                </tr>
                      <tr>
                  <th style="width: 200px">author</th>
                  <td>{{$post->category->name}}</td>
                </tr>
                        <tr>
                  <th style="width: 200px">description</th>
                  <td>{{$post->description}}</td>
                </tr>

              </tbody>
              

            </table>
           
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