   <!-- ลบชั้นวางหนังสือ-->
   <div id="changeShelfModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmMain">
                <div class="modal-header">
                        <label> ลบตู้  </label>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <select class="js-example-basic-single form-control" name="state"  OnChange="resutName(this.value);" id="cattalog" >
                        <option value="" >--เลือกหมวด--</option>
                        @foreach ($category as $item)
                        <option value="{{$item->floor_id}}|{{$item->shelf}}|{{$item->call_b}}"> {{$item->call_b}}</option>

                        @endforeach

                      </select>
                      <hr>
                      <div class="form-group">
                        <label for="floor">ชั้นเดิม:</label>
                        <input type="number" class="form-control" id="floor_id" name="floor_id"   >
                      </div>
                      <div class="form-group">
                              <label for="floor">ตู้เดิม:</label>
                              <input type="number" class="form-control" id="shelf" name="shelf"  >
                            </div>
                            <div class="form-group">
                                  <label for="floor">หมวด:</label>
                                  <input type="text" class="form-control" id="call_b" name="call_b" >
                              </div>
                                 <br><br>
                                <div class="form-group">
                                      <label for="floor">ชั้นใหม่:</label>
                                      <input type="number" class="form-control" id="floor_id2" name="floor_id2"  >
                                    </div>
                                    <div class="form-group">
                                            <label for="floor">ตู้ใหม่:</label>
                                            <input type="number" class="form-control" id="shelf2" name="shelf2"  >
                                          </div>
                                        <hr>
                                <div class="checkbox">
                                      <label><input type="checkbox" value="1"   name="checkBox"  id="checkBox">กรณีย้ายทั้งตู้</label>
                                    </div>
                                    <br> <br>
                                    <div class="form-group">
                                      <label for="floor">ชั้นเดิม:</label>
                                      <input type="number" class="form-control" id="floor_id3" name="floor_id3"    disabled>
                                    </div>
                                    <div class="form-group">
                                            <label for="floor">ตู้เดิม:</label>
                                            <input type="number" class="form-control" id="shelf3" name="shelf3"      disabled>
                                      </div>

                                    <br><br>
                                    <div class="form-group">
                                      <label for="floor">ชั้นใหม่:</label>
                                      <input type="number" class="form-control" id="floor_id4" name="floor_id4"   disabled>
                                    </div>
                                    <div class="form-group">
                                            <label for="floor">ตู้ใหม่:</label>
                                            <input type="number" class="form-control" id="shelf4" name="shelf4"     disabled>
                                      </div>
                                      <div id="add-error-bag2" class="alert alert-danger">
                                            <ul id="add-task-errors2">
                                            </ul>
                                        </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="btn-change" value="add">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>
