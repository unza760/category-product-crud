@extends('layouts.app')
@section('category-index')
<div class="col-xl-12">
@if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manage Category</h4>
                                    <!-- <p class="card-subtitle mb-4"> For basic styling—light padding and only horizontal
                                        dividers—add the base class <code>.table</code> to any
                                        <code>&lt;table&gt;</code>.
                                    </p> -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th>Image</th>   
       <th scope="col">Action</th>
    </tr>
                                            </thead>
                                            <tbody>
                                            <div class="col-md-8 col-md-offset-3 mt-5">
   
 
 
  @foreach ($category as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->meta_title}}</td>
      <td>{{$category->meta_description}}</td>
      <!-- <td>{{$category->meta_image}}</td> -->
      <td>
     
          <img src="/image/{{ $category->meta_image }}" width="100px"> </td>
     
      <td>
          <div class="d-flex flex-row">
          <a href="{{ url('category/' .$category->id.'/edit') }}" class="btn btn-outline-primary btn-sm  mx-1">Edit</a>
     <form action="{{ url('category/'.$category->id) }}" method="POST">
      @csrf 
      @method('DELETE')
      <button type="submit" class="btn btn-outline-danger btn-sm  mx-1">Delete</button>
     
     </form>
</div>
      </td>
    </tr>
   @endforeach

  
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
@endsection