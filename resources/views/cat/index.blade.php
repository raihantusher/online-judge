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
                <div class="card-header">Category</div>
                        
                <div class="card-body">
                    <a href="{{route('cat.create')}}" class="btn btn-sm btn-primary mb-3">add</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                         
                          @foreach($cats as $cat)
                            <tr>
                              <th scope="row">{{$cat->id}}</th>
                              <td>{{$cat->name}}</td>
                            </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
