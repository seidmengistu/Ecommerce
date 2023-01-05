@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category
                    <a href="{{url('admin/category')}}" class="btn btn-danger text-white btn-sm float-end">Back</a>
                </h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputUsername1">name</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}" >
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea type="textarea" class="form-control" name="description" >{{$category->description}}</textarea>
                            @error('description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" >
                            <img class="mt-3" src="{{asset('uploads/category/'.$category->image)}}" alt="" height="80px" width="80px">
                            @error('image') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label><br>
                            <input type="checkbox"  name="status" {{$category->status=='1'?'checked':''}}>
                        </div>
                        <h3 class="mt-3 mb-3">SEO Tags</h3>
                        <div class="form-group col-md-12">
                            <label for="exampleInputUsername1">Meta Title</label>
                            <textarea type="textarea" class="form-control" name="meta_title" >{{$category->meta_title}}</textarea>
                            @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" value="{{$category->meta_keyword}}">
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Description</label>
                            <textarea type="textarea" class="form-control" name="meta_description" >{{$category->meta_description}}</textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
