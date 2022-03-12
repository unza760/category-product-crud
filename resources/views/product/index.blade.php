@extends('layouts.app')
@section('product-index')
<div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Category Status</h4>
                                    <!-- <p class="card-subtitle mb-4"> For basic styling—light padding and only horizontal
                                        dividers—add the base class <code>.table</code> to any
                                        <code>&lt;table&gt;</code>.
                                    </p> -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>   
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Discount</th> 
                                            <th scope="col">Image</th> 
                                            <th scope="col">Gallery</th> 
                                            <th scope="col">Meta_Title</th> 
                                            <th scope="col">Meta_Description</th> 
                                            <th scope="col">Meta_Image</th> 
                                            <th scope="col">Action</th>
                                          
                                             </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($product as $product)
                                             <tr>
                                            <th scope="row">{{$product->id}}</th>
                                             <td>{{$product->name}}</td>
                                             <td>{{$product->description}}</td>
                                            <!-- <td> {{$product->description}}</td> -->
                                              <td>{{$product->category_id}}</td>
                                            <!-- @if ($product->category)
                                    <td>{{$product->category->name}}</td>
                                         @endif -->
                                           <!-- <td>{{$product->category_id}}</td> -->
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->discount_percentage}}</td>
                                            <td>
                                      <img src="/image/{{ $product->feature_image }}" width="70px">
                                     </td>
                                           <!-- <td> -->
                                            <!-- <td>{{$product->feature_image}}</td> -->
                                            <td>
                                      <img src="/image/{{ $product->gallery }}" width="70px">
                                     </td>
                                            <!-- <td>{{$product->gallery}}</td> -->
                                            <td>{{$product->meta_title}}</td>
                                            <td>{{$product->meta_description}}</td>
                                            <td>
                                      <img src="/image/{{ $product->meta_image }}" width="70px">
                                     </td>
                                            <!-- <td>{{$product->meta_image}}</td> -->
                                            <!-- <td>{{$product->category_id}}</td> -->
     
                                            <td>
          <div class="d-flex flex-row">
          <a href="{{ url('product/' .$product->id.'/edit') }}" class="btn btn-outline-primary btn-sm  mx-1">Edit</a>
     <form action="{{ url('product/'.$product->id) }}" method="POST">
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
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
@endsection