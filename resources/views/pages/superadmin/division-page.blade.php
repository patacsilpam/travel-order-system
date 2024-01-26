<div class="p-2 relative">
    <div>
        <h1>Divisions</h1>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#editDivision" style="background:#3354F4"><i class='bx bx-plus'></i> Division</button>
        @include('modals/superadmin/add-division')
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Position</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Lorem Ipsum</td>
                <td>Lorem Ipsum</td>
                <td>
                    <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#editDivision" style="background:#3BC77C" title="Edit User Information"><i class='bx bx-edit-alt' ></i></button>
                    @include('modals.superadmin.edit-division')
                    <button type="button" class="btn text-white my-2" data-toggle="modal" data-target="#removeDivision" style="background:#CD2828" title="Remove User"><i class='bx bx-trash-alt' ></i></button>
                    @include('modals.superadmin.delete-division')
                </td>
            </tr>
            
        </tbody>
    </table>
</div>
<script>
    new DataTable('#example');
</script>