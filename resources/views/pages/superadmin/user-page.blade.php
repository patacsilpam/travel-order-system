<div class="p-2 relative">
    <div>
        <h1>Users</h1>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#exampleModal" style="background:#3354F4"><i class='bx bx-plus'></i> Add User</button>
        @include('modals/superadmin/add-user')
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Position</th>
            <th scope="col">Office</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>juandelacruz</td>
            <td>Juan</td>
            <td>Dela Cruz</td>
            <td></td>
            <td></td>
            <td>
                <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#editUser" style="background:#3BC77C" title="Edit User Information"><i class='bx bx-edit-alt' ></i></button>
                <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#removeUser" style="background:#CD2828" title="Remove User"><i class='bx bx-trash-alt' ></i></button>
            </td>
        </tr>
        
    </tbody>
    </table>
</div>