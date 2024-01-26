<!-- Modal -->
<div class="modal fade" id="editDivision" tabindex="-1" role="dialog" aria-labelledby="editDivision" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPosition">Edit Division</h5>
                <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close"><span class="bg-danger rounded text-white py-1 px-2" aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group my-2">
                        <label for="division">Division<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="division" placeholder="Enter Division" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="description">Description</label>
                        <textarea class="form-control" placeholder="Add a description here..." id="description" style="height: 100px"></textarea>
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