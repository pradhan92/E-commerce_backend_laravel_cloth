<x-admin-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Product List</h5>
                <a href="{{ route('product.create') }}" class="btn btn-success">Add product</a>
            </div>
            <div class="card-body">
                <table class="table">
                    {{-- search box --}}
                    {{-- <table class="table" id="table-2"> --}}
                    <thead>
                        <tr class="border border-1">
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Price</th>
                            <th class="border border-1">Image</th>
                            <th class="border border-1">Category</th>
                            <th class="border border-1">Brand</th>
                            <th class="border border-1">Color</th>
                            <th class="border border-1">Size</th>
                            <th class="border border-1">Description</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr class="border border-1">
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $product->name }}</td>
                                <td class="border border-1">{{ $product->price }}</td>
                                <td class="border border-1"><img src="{{ asset($product->image) }}" width="60"
                                        alt=""></td>
                                <td class="border border-1"><span
                                        class="badge badge-light">{{ $product->category->name }}</span></td>
                                <td class="border border-1"><span
                                        class="badge badge-light">{{ $product->brand->title }}</span></td>
                                <td class="border border-1"><span
                                        class="badge badge-light">{{ $product->color->title }}</span></td>
                                <td class="border border-1"><span
                                        class="badge badge-light">{{ $product->size->title }}</span></td>
                                <td class="border border-1">{!! Str::words($product->description, 30, '...') !!}</td>
                                <td class="border border-1">
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('product.edit', $product->id) }}"
                                            class="btn btn-success">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- for pagination --}}
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</x-admin-layout>
