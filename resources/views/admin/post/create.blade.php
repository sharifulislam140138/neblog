@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">create post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('post.index')}}">post list</a></li>
              <li class="breadcrumb-item active">create post list</li>
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
                <h3 class="card-title">create post list</h3>
                 <div>
                   
                   <a href="{{route('post.index')}}" class="btn btn-primary">go back post list</a>
                 </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">

                  <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                     <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                <div class="card-body">
                  @include('includes.errors')
                  <div class="form-group">
                    <label for="name">post title</label>
                    <input type="name" name="title" value="{{old('title')}}" class="form-control" id="title" placeholder="Enter title">
                  </div>

                     <div class="form-group">
                    <label for="name">post category</label>
                   <select name="category" id="category" class="form-control" value="{{old('category')}}">
                    <option value=""style="display: none" selected>select category</option>

                    @foreach($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                   </select>
                  </div>

                  <div class="form-group">
                    <label for="image">image</label>
                  <input type="file" name="image" id="image" class="form-control.file">

               
                  </div>

                  @foreach($tags as $tag)

                 <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}">
                          <label for="tag{{$tag->id}}" class="custom-control-label">{{$tag->name}}</label>
                        </div>
                        
                      </div>

                  @endforeach

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

@section('style')
<link rel="stylesheet" type="" href="{{asset('/admin/css/summernote-bs4.min.css')}}">
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<script>
                        CKEDITOR.replace( 'description' );
                </script>
@endsection