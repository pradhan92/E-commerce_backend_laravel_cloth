<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Colors Information Details</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="border border-1">
                            <th class="border border-1">S.N.</th>
                            <th class="border border-1">Title</th>
                            <th class="border border-1">Slug</th>
                            <th class="border border-1">Status</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    @foreach ($colors as $index => $color)
                        <tbody>
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $color->title }}</td>
                                <td class="border border-1">{{ $color->slug }}</td>
                                <td class="border border-1">
                                    @if ($color->status == 'active')
                                        <span class="badge badge-success">{{ $color->status }}</span>
                                    @else
                                        <span class="badge badge-warning">{{ $color->status }}</span>
                                    @endif
                                </td>
                                <td class="border border-1">
                                    <form action="{{ route('color.destroy', $color->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('color.edit', $color->id) }}" class="btn badge bg-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <button type="submit" class=" btn badge bg-danger"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route('color.create') }}" class="btn btn-primary btn-sm">Create New </a>
            </div>
        </div>
    </div>
</x-admin-layout>
