<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('banner.index') }}" class="btn btn-primary btn-sm">Back</a>
                <h1>Edit Banner</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title"
                                    placeholder="Enter your School title" value="{{ $banner->title }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="3">{!! $banner->description !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <input id="image" class="form-control" type="file" name="image"
                                    placeholder="Insert your Image" value="{{ $banner->image }}">
                            </div>
                            <img src="{{ $banner->image }}" width="120" alt="">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm my-2">update Record</button>
                            <a href="{{ route('banner.index') }}" class="btn btn-primary btn-sm my-2">Show all
                                Record</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>

</x-admin-layout>
