@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category

                    <a href="{{url('admin/category')}}" class="btn btn-primary text-white btn-sm float-end">Back</a>
                </h3>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputUsername1">name</label>
                            <input type="text" class="form-control" name="name" placeholder="name">
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Slug">
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea type="textarea" class="form-control" name="description" placeholder="Description"></textarea>
                            @error('description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="image">
                            @error('image') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label><br>
                            <input type="checkbox"  name="status" placeholder="image">
                        </div>
                        <h3 class="mt-3 mb-3">SEO Tags</h3>
                        <div class="form-group col-md-12">
                            <label for="exampleInputUsername1">Meta Title</label>
                            <textarea type="textarea" class="form-control" name="meta_title" placeholder="Meta Title"></textarea>
                            @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Meta Keyword</label>
                            <input type="text" class="form-control" name="meta_keyword" placeholder="Meta keyword">
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Description</label>
                            <textarea type="textarea" class="form-control" name="meta_description" placeholder="Meta Description"></textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
