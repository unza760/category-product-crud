@extends('layouts.app')
@section('product-create')
<div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Product </h4>
                                    <!-- <p class="card-subtitle mb-4">Textual form controls—like <code>input</code>s,<code> selects</code>, and<code> textare</code>s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more. </p> -->

                                   
                                      <form  action="{{ url('product') }}" method="POST"  enctype="multipart/form-data">
                                      @csrf 
                                    
                                      <div class="form-group">
                                            <label for="simpleinput">Name</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your Name" value="{{ $product->name }}">
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="simpleinput">Description</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your description" value="{{ $product->meta_description }}">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Category</label>
                                            <select class="form-control" id="exampleFormControlSelect1" >
                                                <option>{{ $product->category_id }}</option>
                                               
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="simpleinput">Category </label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your name" value="{{ $product->category_id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Price</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your price" value="{{ $product->price }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Disount</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter discount" value="{{ $product->discount_percentage }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Image</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Upload your image" value="{{ $product->feature_image }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Gallery</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Upload gallery" value="{{ $product->gallery }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Title</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your meta title" value="{{ $product->meta_title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Description</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your meta description" value="{{ $product->meta_description }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Image</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="upload your meta image" value="{{ $product->meta_image }}">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="simpleinput">Text</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text">
                                        </div> -->
                                                
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Multiple Select</label>
                                            <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div> -->
                                
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                      
                                    </form>
                                <!-- <div class="form-group">
                                            <label for="simpleinput">Title</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text" name="meta_title" value="{{ $product->meta_title }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-password">Description</label>
                                            <input type="text" id="example" class="form-control" name="meta_description"  value="{{ $product->meta_description }}">
                                        </div>
                                       
                                        <div class="form-group">         
                                        <label for="img">Select image:</label>
                                          <input type="file" id="image" name="meta_image"  value="{{ $product->meta_image }}">
                                          
                                          </div>
                                     
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                      
                                    </form> -->
                                    @if (session()->has('status'))
                                   <div class="alert alert-success">
                                  {{session('status')}}
                                    </div>
                                    @endif
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                          
                        </div>
@endsection