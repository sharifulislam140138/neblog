@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">post list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active">post</li>
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
                <h3 class="card-title">post list</h3>
                 <div>
                   
                   <a href="{{route('post.create')}}" class="btn btn-primary">create post</a>
                 </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>image</th>
                      <th>title</th>
                       <th>tags</th>
                        <th>category</th>
                     
                        <th>Author</th>
              
                    <th style="width: 60px">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($posts->count())
                    @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>
                        <div style="max-width: 70px;max-height: 70;overflow: hidden">
                          <img src="{{asset($post->image)}}" class="img-fluid">
                          
                        </div>
                        

                      </td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->name}}</td>

                        <td>{{$post->category->name}}</td>
                        <td>{{$post->category->name}}</td>
                     
                      <td>
                       
                        </div>
                      </td>
                      <td class="d-flex">
                        <a href="{{route('post.edit', [$post->id])}}" class="btn btn-sm btn-primary mr-1" ><i class="fas fa-edit"></i> </a>


                        <form action="{{route('post.destroy',[$post->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                          </form>

                        <a href="{{route('post.show',[$post->id])}}" class="btn btn-sm btn-success mr-1" ><i class="fas fa-edit"></i> </a>
                      </td>
                    </tr>

                    @endforeach
                     @else
                    <tr>
                      <td colspan="5">
                        <h5 class="text-center">no post found</h5>
                        
                      </td>
                    </tr>
                    @endif
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      </div>
    </div>

@endsection