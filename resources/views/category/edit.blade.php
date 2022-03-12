@extends('layouts.app')
@section('category-create')
<div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Category </h4>
                                    <!-- <p class="card-subtitle mb-4">Textual form controls—like <code>input</code>s,<code> selects</code>, and<code> textare</code>s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more. </p> -->

                                    <form  action="{{ url('category') }}" method="POST"  enctype="multipart/form-data">
                                    <!-- <form action="" method="POST"> -->
                                      @csrf
                                          
                                <div class="form-group">
                                            <label for="simpleinput">Title</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your text" name="meta_title" value="{{ $category->meta_title }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-password">Description</label>
                                            <input type="text" id="example" class="form-control" name="meta_description"  value="{{ $category->meta_description }}">
                                        </div>
                                       
                                        <div class="form-group">         
                                        <label for="img">Select image:</label>
                                          <!-- <input type="file" id="image" name="meta_image"  value="{{ $category->meta_image }} "> -->
                                          <input type="file" name="meta_image" class="form-control" placeholder="image">
                    <img src="/image/{{ $category->meta_image }}" width="300px" style="margin-top: 7px;">
                                          </div>
                                     
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                      
                                    </form>
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