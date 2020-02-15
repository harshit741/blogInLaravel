@extends('layout.main')
@section('title','Create Post - BlogInLaravel')

@section('content')
    <!-- Page Header -->
    <header class="container">
        <h2 class="createPost">Create Post</h2>
        <hr>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
                <form action="{{route('posts.create')}}" method="GET">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Title" required data-validation-required-message="Title cannot be blank.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
            
                
                    <div class="control-group mb-3">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Body</label>
                            <textarea rows="15" class="form-control" placeholder="Post Body" required data-validation-required-message="Post cannot be blank."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="headerImage" accept="image/*">
                        <label class="custom-file-label" for="headerImage">Header Image</label>
                    </div>
                    <div class="">
                        <select name="category" class="custom-select custom-select-lg mb-4 custom-control-inline" >
                            <option selected>Select Category</option>
                            <option value="volvo">Volvo</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        <div class="custom-control custom-switch mb-4 custom-control-inline">
                                <input type="checkbox" class="custom-control-input " id="anonymous" name="anonymous">
                                <label class="custom-control-label" for="anonymous">Post Anonymously</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
            // To make name of file appear on selection
            $(document).ready(function(){
                    $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
              });
    </script>

@endsection