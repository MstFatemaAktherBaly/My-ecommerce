@extends('backend.dashboard')

@section('contents')

<section>
<div class="container mt-5">
    <div class="row">
        @if (Route::is('category'))
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white text-center">Add New Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('category.insert')}}" method="POST">

                     @csrf
                     <label for="category">Category Name</label>
                     <input value="" name="category" id="category" placeholder="Add Category" type="text" class="form-control mt-2">
                     <button type="submit" class="btn btn-primary mt-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white text-center">Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$findCategory->id)}}" method="POST">

                     @csrf
                     @method('put')
                     <label for="category">Category Name</label>
                     <input value="{{$findCategory->categoryName}}" name="category" id="category" placeholder="Edit Category" type="text" class="form-control mt-2">
                     <button type="submit" class="btn btn-primary mt-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        @endif
       <div class="col-lg-6">
        <table class="table table-striped">
            <tr align="center">
                <td style="padding-bottom: 20px;">SL.No.</td>
                <td style="padding-bottom: 20px;">Category Name</td>
                <td style="padding-bottom: 20px;">Action</td>
                {{-- <td style="padding-bottom: 20px;">Category-Slug</td> --}}
            </tr>

           @forelse ( $categories as $key => $category)
           
           <tr align="center">
            <td style="padding-bottom: 20px;">{{++$key}}</td>
            <td style="padding-bottom: 20px;">{{$category->categoryName}}</td>
            <td style="padding-bottom: 20px;">
            <div class="btn-group">
                <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
            </td>
            
        </tr>
           @empty

            <tr>
                <td>No Data Found</td>
            </tr>
           
           @endforelse

        </table>
       </div>
    </div>
</div>
</section>

@endsection