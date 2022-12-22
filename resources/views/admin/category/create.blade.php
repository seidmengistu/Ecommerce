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
                 <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">name</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <input type="email" class="form-control" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="textarea" class="form-control" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control" name="exampleInputConfirmPassword1"
                            placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Add</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
