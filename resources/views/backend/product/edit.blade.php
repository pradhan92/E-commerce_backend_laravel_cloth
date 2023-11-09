<x-admin-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
               <strong>Product</strong>
               <a href="{{route('product.index')}}">Show Products</a>
            </div>
            <div class="card-body">
                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{$product->name}}">
                    @error('name')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Product Price(¥.)</label>
                    <input id="price" class="form-control" type="text" name="price" value="{{$product->price}}" onchange="calculate()">
                    @error('price')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                   <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select id="category_id" class="form-control" name="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"{{$product->category_id ==$category->id ? 'selected' :''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                    <div class="form-group">
                    <label for="brand_id">Brands</label>
                    <select id="brand_id" class="form-control" name="brand_id">
                        <option value="">Select Brand</option>
                       @foreach ($brands as $brand)
                            <option value="{{$brand->id}}"{{$product->brand_id ==$brand->id ? 'selected' :''}}>{{$brand->title}}</option>
                        @endforeach
                    </select>
                    @error('brand_id')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                   <div class="form-group">
                    <label for="color_id">Colors</label>
                    <select id="color_id" class="form-control" name="color_id">
                        <option value="">Select Color</option>
                        @foreach ($colors as $color)
                            <option value="{{$color->id}}"{{$product->color_id ==$color->id ? 'selected' :''}}>{{$color->title}}</option>
                        @endforeach
                    </select>
                    @error('color_id')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="size_id">Sizes</label>
                    <select id="size_id" class="form-control" name="size_id">
                        <option value="">Select Size</option>
                        @foreach ($sizes as $color)
                            <option value="{{$color->id}}"{{$product->size_id ==$color->id ? 'selected' :''}}>{{$color->title}}</option>
                        @endforeach
                    </select>
                    @error('size_id')
                       <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                    <div class="form-group">
                    <label for="image">UpLoad Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                    @error('image')
                    <div class="text-danger">
                     {{$message}}
                 </div>
                 @enderror
                 <div>
                    <img src="{{asset($product->image)}}" width="60" alt="">
                 </div>
                </div>
                <div class="form-group">
                    <label for="description">Product Description{*optional}</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3">{{$product->description}}</textarea>
                </div>
                <button type="submit" class="">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

