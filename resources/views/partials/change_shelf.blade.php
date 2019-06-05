   <!-- ลบชั้นวางหนังสือ-->
   <div id="changeChangModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmChangShelf">
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
                        <label for="floor">ชั้นเดิม:</label>
                        <input type="number" class="form-control" id="floor_id3" name="floor_id3"  required  disabled>
                      </div>
                      <div class="form-group">
                              <label for="floor">ตู้เดิม:</label>
                              <input type="number" class="form-control" id="shelf3" name="shelf3"   required   disabled>
                        </div>

                      <br><br>
                      <div class="form-group">
                        <label for="floor">ชั้นใหม่:</label>
                        <input type="number" class="form-control" id="floor_id4" name="floor_id4" required  disabled>
                      </div>
                      <div class="form-group">
                              <label for="floor">ตู้ใหม่:</label>
                              <input type="number" class="form-control" id="shelf4" name="shelf4"  required   disabled>
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
