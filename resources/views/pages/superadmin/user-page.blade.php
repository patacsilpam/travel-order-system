<div class="p-2 relative">
    <div>
        <h1>Users</h1>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#addUser" style="background:#3354F4"><i class='bx bx-plus'></i> User</button>
        @include('modals/superadmin/add-user')
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Position</th>
                <th scope="col">Role</th>
                <th scope="col">Office</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id}}</th>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->fname}}</td>
                    <td>{{ $user->lname}}</td>
                    <td>{{ $user->position}}</td>
                    <td>{{ $user->role}}</td>
                    <td>{{ $user->official}}</td>
                    <td>
                        <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#editUser/{{$user->id}}" style="background:#3BC77C" title="Edit User Information"><i class='bx bx-edit-alt' ></i></button>
                        @include('modals.superadmin.edit-user')
                        <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#removeUser" style="background:#CD2828" title="Remove User"><i class='bx bx-trash-alt' ></i></button>
                        @include('modals.superadmin.delete-user')
                    </td>
                </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>
<script>
    new DataTable('#example');
</script>