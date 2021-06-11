@extends('layouts.admin')

@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">tag list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
              <li class="breadcrumb-item active">tag</li>
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
                <h3 class="card-title">tag list</h3>
                 <div>
                   
                   <a href="{{route('tag.create')}}" class="btn btn-primary">create tag</a>
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
                    @if($tags->count())
                    @foreach($tags as $tag)
                    <tr>
                      <td>{{$tag->id}}</td>
                      <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                        <td>
                          {{$tag->id}}
                        </td>
                      <td>
                       
                        </div>
                      </td>
                      <td class="d-flex">
                        <a href="{{route('tag.edit', [$tag->id])}}" class="btn btn-sm btn-primary mr-1" ><i class="fas fa-edit"></i> </a>


                        <form action="{{route('tag.destroy',[$tag->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                          </form>

                        <a href="{{route('tag.show',[$tag->id])}}" class="btn btn-sm btn-success mr-1" ><i class="fas fa-edit"></i> </a>
                      </td>
                    </tr>

                    @endforeach

                    @else
                    <tr>
                      <td colspan="5">
                        <h5 class="text-center">no tags found</h5>
                        
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