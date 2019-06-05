
   <!-- ลบชั้นวางหนังสือ-->
<div id="addTaskModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddTask">
                <div class="modal-header">
                        <label> ลบตู้  </label>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="add-error-bag" class="alert alert-danger">
                        <ul id="add-task-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>ชั้นตู้</label>
                        <input type="text" id="shelf" name="shelf" class="form-control" required>
                        <input type="hidden" class="form-control" id="floor" name="floor"   value="{{$b}}">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="btn-add" value="add">ยืนยันการลบ</button>
                </div>
            </form>
        </div>
    </div>
</div>
