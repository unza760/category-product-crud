@extends('layouts.app')
@section('product-create')
<div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Product </h4>
                                    <!-- <p class="card-subtitle mb-4">Textual form controls—like <code>input</code>s,<code> selects</code>, and<code> textare</code>s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more. </p> -->

                                    <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="simpleinput">Name</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your Name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="simpleinput">Description</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your description" name="description">
                                        </div> 
                                       
                                        <div class="form-group">
                                            <label for="simpleinput">Category </label>
                                            <input type="number" id="simpleinput" class="form-control" placeholder="Enter your name" name="category_id">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Price</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your price" name="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Disount</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter discount" name="discount_percentage">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Image</label>
                                            <input type="file" id="simpleinput" class="form-control" placeholder="Upload your image" name="feature_image">
                                        </div>
                               
                                        <!-- <div class="form-group">
          <input type="file" name="gallery[]" multiple class="form-control" accept="image/*">
          @if ($errors->has('files'))
            @foreach ($errors->get('files') as $error)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
            @endforeach 
        @endif-->
            <!-- <form method="post" action="" enctype="multipart/form-data"> -->
    <!-- @csrf -->
  
    <div class="input-group hdtuto control-group lst increment" >
    <label for="simpleinput">Gallery</label>
      <input type="file" name="gallery[]" class="myfrm form-control" multiple>
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>
    <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:10px">
        <input type="file" name="gallery[]" class="myfrm form-control" multiple>
        <!-- <div class="input-group-btn"> 
          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div> -->
      </div>
    </div>
  
    <!-- <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button> -->
  
<!-- </form>          -->
        
                                        <!-- <div class="form-group">
                                            <label for="simpleinput">Gallery</label>
                                            <input type="file" id="simpleinput" class="form-control" placeholder="Upload gallery" name="gallery[]" multiple>
                                            <div class="input-group-btn"> 
                                           <button class="btn btn-success" type="button"> <i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                           </div>
                                           <div class="clone hide">
                                        <div class="realprocode control-group lst input-group" style="margin-top:10px">
                                       <input type="file" name="gallery[]" class="myfrm form-control" multiple>
                                         <div class="input-group-btn"> 
                                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                             </div>
                                         </div>
                                        </div>
  
                                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
                                        </div> -->
                                   
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Title</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your meta title" name="meta_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Description</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your meta description" name="meta_description">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleinput">Meta Image</label>
                                            <input type="file" id="simpleinput" class="form-control" placeholder="upload your meta image" name="meta_image">
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
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                          
                        </div>
                   
@endsection
<!-- @section('scripts')
<script type="text/javascript">
  
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
    </script>
    @endsection -->
