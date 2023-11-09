<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('banner.index') }}" class="btn btn-primary btn-sm">Back</a>
                <h1>Add Banner</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title"
                                    placeholder="Enter your Title" value="{{ old('title') }}">
                            </div>
                            <div>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" type="text" name="description"
                                    placeholder="Enter your the Description"></textarea>
                            </div>
                        </div>
                        <div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image">image<span class="text-danger">*</span></label>
                            <input id="image" class="form-control" type="file" name="image"
                                placeholder="Insert your image" value="{{ old('image') }}">
                        </div>
                        <div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm my-2">Save Record</button>
                        <a href="{{ route('banner.index') }}" class="btn btn-primary btn-sm my-2">Show all Record</a>
                    </div>
            </div>

        </div>
    </div>
    </div>

</x-admin-layout>
