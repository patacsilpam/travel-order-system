<!-- Modal -->
<div class="modal fade" id="editStation" tabindex="-1" role="dialog" aria-labelledby="editStation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUser">Edit Station</h5>
                <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close"><span class="bg-danger rounded text-white py-1 px-2" aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <strong style="color:#3354F4; font-size:1.1rem">Personal Details</strong>
                    <div class="form-group my-2">
                        <label for="user-firstname">Department <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="user-firstname" placeholder="Enter Department" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-lastname">Office Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="user-lastname" placeholder="Enter Office Name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="user-position">Office Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="user-position" placeholder="Enter Office Address" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel text-muted" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn text-white" style="background:#3BC77C;">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>