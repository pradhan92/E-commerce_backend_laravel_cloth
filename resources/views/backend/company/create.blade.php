<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Company Information Create Page</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Company Name<span class=" text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="Enter Company Name ">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Company Phone<span class=" text-danger">*</span></label>
                                <input id="phone" class="form-control" type="phone" name="phone"
                                    placeholder="Enter Company phone ">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Company email<span class=" text-danger">*</span></label>
                                <input id="email" class="form-control" type="text" name="email"
                                    placeholder="Enter Company email ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" type="text" name="description"
                                    placeholder="Enter your the Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="logo">Upload Product Image<span class=" text-danger">*</span></label>
                                <input id="logo" class="form-control" type="file" name="logo"
                                    placeholder="upload Product Image">
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
