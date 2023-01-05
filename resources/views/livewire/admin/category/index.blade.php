<div class="row">
    <div  class="modal fade" id="delete-confirmation" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete confirmation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        <p>You are request to delete this category?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
    
            </div>
        </div>
    </div>
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3>Category

                    <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->status=='1'?'Hidden':'Visible'}}</td>
                            <td>
                                <a href="{{url('admin/category/'.$category->id.'/edit')}}"
                                    class="btn btn-success">Edit</a>
                                <a href="#" wire:click='deleteCategory({{$category->id}})' data-bs-toggle="modal"
                                    data-bs-target="#delete-confirmation" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
                <div class="mt-3">
                    {{$categories->links()}}
                </div>


            </div>
        </div>
    </div>

</div>

@push('script')
 
<script>
    window.addEventListener('close-modal',event => {
        $('#delete-confirmation').hide('modal');
        location.reload();
    });
    

</script>
    
@endpush
