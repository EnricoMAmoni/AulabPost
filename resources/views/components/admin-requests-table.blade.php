<table class="table">
   <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

        </tr>
   </thead>

   <tbody>
    @foreach ($adminRequests as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>
                <a href="{{route('admin.makeUserAdmin', $user)}}" class="btn btn-primary">Rendi Admin</a>
             </td>
            
        </tr>
        
    @endforeach
   </tbody>
</table>
