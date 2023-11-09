<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Company Information Details</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="border border-1">
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Phone No</th>
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Description</th>
                            <th class="border border-1">Logo</th>
                            <th class="border border-1">Action</th>

                        </tr>
                    </thead>
                    @foreach ($company as $index => $company)
                        <tbody>
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $company->name }}</td>
                                <td class="border border-1">{{ $company->phone }}</td>
                                <td class="border border-1">{{ $company->email }}</td>
                                <td class="border border-1">{!! $company->description !!}</td>
                                <td class="border border-1"><img src="{{ asset($company->logo) }}" class="img-fluid"
                                        alt=""></td>
                                <td class="border border-1">
                                    <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('company.edit', $company->id) }}"
                                            class="btn badge bg-primary">Edit</a>
                                        <button type="submit" class=" btn badge bg-danger">delete</button>
                                    </form>
                                </td>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Create New </a>
            </div>
        </div>
    </div>
</x-admin-layout>
