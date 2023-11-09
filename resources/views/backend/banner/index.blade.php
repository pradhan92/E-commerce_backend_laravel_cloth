<x-admin-layout>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-fle justify-content-between">
                <h2>Banner Information Details</h2>
            </div>
            <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="border border-1">
                                <th class="border border-1">SN</th>
                                <th class="border border-1">Banner Title</th>
                                <th class="border border-1">Description</th>
                                <th class="border border-1">Image</th>
                                <th class="border border-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $index => $item)
                            <tr class="border border-1">
                                <td class="border border-1">{{++$index}}</td>
                                <td class="border border-1">{{ $item->title}}</td>
                                <td class="border border-1">{!! Str::words($item->description, 30, '...') !!}</td>
                                <td class="border border-1"><img src="{{ asset($item->image) }}" alt=""></td>
                                <td class="border border-1">
                                    <form action="{{route('banner.destroy',$item ->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('banner.edit',$item ->id)}}" class="btn badge bg-primary">Edit</a>
                                        <button type="submit" class=" btn badge bg-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm">Create New</a>
                </div>
        </div>
    </div>
</x-admin-layout>
