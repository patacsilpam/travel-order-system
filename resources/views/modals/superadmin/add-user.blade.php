<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUser">Add User</h5>
                <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close"><span class="bg-danger rounded text-white py-1 px-2" aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('/superadmin/users') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <strong style="color:#3354F4; font-size:1.1rem">Personal Details</strong>
                    <div class="form-group my-2">
                        <label for="user-firstname">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="fname" class="form-control" id="user-firstname" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-lastname">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lname" class="form-control" id="user-lastname" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-position">Position <span class="text-danger">*</span></label>
                        <input type="text" name="position" class="form-control" id="user-position" placeholder="Enter Position" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-role">Role <span class="text-danger">*</span></label>
                        <select class="form-control" name="role" id="user-role" required>
                            <option selected disabled>Please select</option>
                            <option value="Normal User">Normal User</option>
                            <option value="Superadmin">Superadmin</option>
                            <option value="CDO">CDO</option>
                            <option value="Provincial Officer">Provincial Officer</option>
                            <option value="AFSD Chief">AFSD Chief</option>
                            <option value="TMSD Chief">TMSD Chief</option>
                            <option value="Regional Director">Regional Director</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-division">Official</label>
                        <select class="form-control" name="official" id="user-division">
                            <option value="Dingras CSC">Dingras CSC</option>
                            <option value="Ilocos Norte PO">Ilocos Norte PO</option>
                            <option value="Banayoyo CSC">Banayoyo CSC</option>
                            <option value="Banayoyo CSC">Tagudin CSC</option>
                            <option value="Ilocos Sur PO">Ilocos Sur PO</option>
                            <option value="Sudipen CSC">Sudipen CSC</option>
                            <option value="Pugo CSC">Pugo CSC</option>
                            <option value="Pangasinan PO">Pangasinan PO</option>
                            <option value="Sison CSC">Sison CSC</option>
                            <option value="Urdaneta CSC">Urdaneta CSC</option>
                            <option value="Regional Office - AFSD">Regional Office - AFSD</option>
                            <option value="Regional Office - TMSD">Regional Office - TMSD</option>
                            <option value="Regional Office - ORD">Regional Office - ORD</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-email-address">Email address <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="user-email-address" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-password">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" id="user-password" placeholder="Enter Password" size="8" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel text-muted" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn text-white" style="background:#3354F4;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>