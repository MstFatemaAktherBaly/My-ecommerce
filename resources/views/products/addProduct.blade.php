@extends('layouts.backendLayouts')
@section('contents')


<div class="container-fluid">
  @if (session('success_msg'))
  <div class="alert bg-success text-white text-center mt-5">{{ session('success_msg') }} </div>
  @endif

 <form action="{{ route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mt-5">

       
        <div class="col-lg-8">
            
           <div class="card-style">
            
            <h2 class="mb-25">Add Product </h2> 
       
            <div class="input-style-2">
            <label>Product Title</label>
            <input name="title" type="text" placeholder="Product Title">
            <span class="icon"><i class="lni lni-package"></i>
                @error('title')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
          </div>

          <div class="row">
            <div class="col-lg-6"><div class="input-style-2">
                <label>Product Price</label>
                <input name="price" type="text" placeholder="Product Price">
                <span class="icon"><i class="lni lni-cart-full"></i>
                  @error('price')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
              </div></div>
              
            <div class="col-lg-6"><div class="input-style-2">
                <label>Discount Price</label>
                @error('discount_price')
                <span class="text-danger"> {{$message}} </span>
            @enderror
                <input name="discount_price" type="text" placeholder="Discount Price">
                <span class="icon"><i class="lni lni-cart-full"></i>
              </div></div>
              
          </div>

          <div class="row">
            <div class="col-lg-4"><div class="input-style-2">
                <label>sku</label>
                <input name="sku" type="text" placeholder="sku">
                <span class="icon"><i class="lni lni-cart-full"></i></span>
                    @error('sku')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
              </div></div>

            <div class="col-lg-4"><div class="select-style-1">
                <div class="select-position">
                    <label>stock</label>
                <select name="stock" class="form-control">
                    <option selected value="{{ 1 }}">In Stock</option>
                    <option value="{{ 0 }}">Out Of Stock</option>
                </select>
                    @error('stock')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
              </div>
                </div>
            </div>
              <div class="col-lg-4"><div class="input-style-2">
                <label>Brand Name</label>
                <input name="brand" type="text" placeholder="Brand Name">
                <span class="icon"><i class="lni lni-cart-full"></i></span>
                    @error('brand')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
              </div></div>
          </div>
          <div class="input-style-1">
            <label>Short Detail</label>
            <textarea name="short_detail" placeholder="Short Detail" rows="1"></textarea>
          </div>
          <div class="input-style-1">
            <label>Long Text</label>
            <textarea name="long_text" placeholder="Long Text" rows="2"></textarea>
          </div>

<div class="d-lg-flex">
    <div class="form-check form-switch toggle-switch">
        <input class="form-check-input" type="checkbox" name="status" id="status" checked value="{{ 1 }}">
        <label class="form-check-label me-3" for="status">Status</label>
      </div>
      <div class="form-check form-switch toggle-switch">
        <input class="form-check-input" type="checkbox" name="featured" id="featured"  value="{{ 1 }}">
        <label class="form-check-label" for="featured">Featured Products</label>
      </div>
</div>

        </div>

        
        </div>

        <div class="col-lg-4">
            <div class="card-style">
                <div class="input-style-1">
                    <label>Featured Image</label>
                    <input name="feutured_img" type="file" >
                  </div>

                  <div class="input-style-1">
                    <label>Gallarey Images</label>
                    <input type="file" multiple name="gallaries[]" >

                    @error('gallaries.*')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>

                  <div class="input-style-1">
                    <label>Category</label>
                    <input class="form-check-input" type="text" name="category" id="category"  >
                  </div>

                  <div class="col-12">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                      <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                        Store Product
                        <i class="lni lni-heart"></i>
                      </button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
 </form>

 
</div>



@endsection