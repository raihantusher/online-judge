@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            .<div class="card">
                <div class="card-body">
                    <ul class="list-group">
                    <li class="list-group-item"><a href="{{route('cat.index')}}">Category</a></li>
                        <li class="list-group-item"><a href="{{route('post.index')}}">Post</a></li>
                       
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">
                    Categories </div>

                <div class="card-body">
                    @can("create-cat")
                    
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="{{route('cat.store')}}">
                            @csrf
                        <div class="form-group">
                          <label for="cat_name">Category name:</label>
                          <input type="text" class="form-control" id="cat_name" name="name">
                            @if($errors->has('name'))
                                    <small class="text-danger"> {{$errors->first('name')}}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="cat_name">Number of Questions:</label>
                            <input type="text" class="form-control" id="cat_name" name="name">
                              @if($errors->has('name'))
                                      <!-- small class="text-danger"> {{$errors->first('name')}}</small --!>
                              @endif
                        </div>

                        <div class="form-group">
                            <label for="cat_name">Duration:</label>
                            <input type="text" class="form-control" id="cat_name" name="name">
                              @if($errors->has('name'))
                                      <!-- small class="text-danger"> {{$errors->first('name')}}</small --!>
                              @endif
                        </div>

                        
                        <div class="form-group">
                            <label for="cat_name">Join ID:</label>
                            <input type="text" class="form-control" id="cat_name" name="name">
                              @if($errors->has('name'))
                                      <!--small class="text-danger"> {{$errors->first('name')}}</small --!>
                              @endif
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                       
                      </form>
                      
                        
                    @endcan

                    @cannot("create-cat")
                        <h1>Sorry, you don't have permission !</h1>
                    @endcannot
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
