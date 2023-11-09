<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Company Information Edit Page</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Company Name<span class=" text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="Enter the Company" value="{{ $company->name }}">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Company phone<span class=" text-danger">*</span></label>
                                <input id="phone" class="form-control" type="phone" name="phone"
                                    placeholder="Enter the Company" value="{{ $company->phone }}">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Company email<span class=" text-danger">*</span></label>
                                <input id="email" class="form-control" type="text" name="email"
                                    placeholder="Enter the Company" value="{{ $company->email }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="3">{!! $company->description !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="logo">Company logo<span class=" text-danger">*</span></label>
                                <input id="logo" class="form-control " type="file" name="logo"
                                    placeholder="Enter the app logo" value="{{ $company->logo }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm my-2">Save Record</button>
                            <a href="{{ route('company.index') }}" class="btn btn-primary btn-sm my-2">Show all
                                Record</a>
                        </div>

                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-admin-layout>
