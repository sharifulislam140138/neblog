@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">category list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active">category</li>
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
                <h3 class="card-title">category list</h3>
                 <div>
                   
                   <a href="{{route('category.create')}}" class="btn btn-primary">create category</a>
                 </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>name</th>
                      <th>slug</th>
                       <th>post count</th>
              
                    <th style="width: 60px">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                          {{$category->id}}
                        </td>
                      <td>
                       
                        </div>
                      </td>
                      <td class="d-flex">
                        <a href="{{route('category.edit', [$category->id])}}" class="btn btn-sm btn-primary mr-1" ><i class="fas fa-edit"></i> </a>


                        <form action="{{route('category.destroy',[$category->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                          </form>

                        <a href="{{route('category.show',[$category->id])}}" class="btn btn-sm btn-success mr-1" ><i class="fas fa-edit"></i> </a>
                      </td>
                    </tr>

                    @endforeach
                   
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