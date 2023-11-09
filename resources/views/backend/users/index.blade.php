<x-admin-layout>
    <div class="container">
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
     </div>
    <div class="card-header py-3">
      <h1 class="text-center">Users List</h1>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                     <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{route('users.destroy',[$user->id])}}">
                      @csrf
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$user->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('users.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Create New </a>
        <span style="float:right">{{$users->links()}}</span>
      </div>
    </div>
</div>
    </div>
</x-admin-layout>
