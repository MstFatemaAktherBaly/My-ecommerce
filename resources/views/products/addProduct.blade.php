@extends('layouts.backendLayouts')
@section('contents')

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-8">
            
           <div class="card-style">
            <h2 class="mb-25">Add Product </h2> 
            <div class="input-style-2">
            <label>Product Title</label>
            <input name="title" type="text" placeholder="Product Title">
            <span class="icon"><i class="lni lni-package"></i>
                @error('title')
                    <span class="text-danger"> {{$messege}} </span>
                @enderror
          </div>

          <div class="row">
            <div class="col-lg-6"><div class="input-style-2">
                <label>Product Price</label>
                <input name="price" type="text" placeholder="Product Price">
                <span class="icon"><i class="lni lni-cart-full"></i>
                    @error('price')
                        <span class="text-danger"> {{$messege}} </span>
                    @enderror
              </div></div>
            <div class="col-lg-6"><div class="input-style-2">
                <label>Discount Price</label>
                <input name="discount_price" type="text" placeholder="Discount Price">
                <span class="icon"><i class="lni lni-cart-full"></i>
                    @error('discount_price')
                        <span class="text-danger"> {{$messege}} </span>
                    @enderror
              </div></div>
          </div>

          <div class="row">
            <div class="col-lg-4"><div class="input-style-2">
                <label>sku</label>
                <input name="sku" type="text" placeholder="sku">
                <span class="icon"><i class="lni lni-cart-full"></i>
                    @error('sku')
                        <span class="text-danger"> {{$messege}} </span>
                    @enderror
              </div></div>
            <div class="col-lg-4"><div class="select-style-1">
                <div class="select-position">
                    <label>stock</label>
                <select name="stock" class="form-control">
                    <option selected value="{{true}}">In Stock</option>
                    <option value="{{false}}">Out Of Stock</option>
                </select>
                    @error('stock')
                        <span class="text-danger"> {{$messege}} </span>
                    @enderror
              </div>
                </div>
            </div>
              <div class="col-lg-4"><div class="input-style-2">
                <label>Brand Name</label>
                <input name="brand_name" type="text" placeholder="Brand Name">
                <span class="icon"><i class="lni lni-cart-full"></i>
                    @error('brand_name')
                        <span class="text-danger"> {{$messege}} </span>
                    @enderror
              </div></div>
          </div>

<div class="d-lg-flex">
    <div class="form-check form-switch toggle-switch">
        <input class="form-check-input" type="checkbox" name="status" id="status" checked>
        <label class="form-check-label me-3" for="status">Status</label>
      </div>
      <div class="form-check form-switch toggle-switch">
        <input class="form-check-input" type="checkbox" name="featured" id="featured" >
        <label class="form-check-label" for="featured">Featured Products</label>
      </div>
</div>

        </div>

        
        </div>

        <div class="col-lg-4"></div>
    </div>
</div>

@endsection