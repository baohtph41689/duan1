<?php
include 'boxleft.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary" style="width: 70%; margin-left: 200px;">
            <div class="card-header">
              <h3 class="card-title">Thêm liên hệ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">id khách hàng </label><br>
                  <input type="text" name="id_bn"  class="form-control" id="exampleInputPassword1" placeholder="Tên banner">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nội dung</label>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="Tên banner">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">trạng thái</label>
                  <input type="text" name="ten_bn" class="form-control" id="exampleInputPassword1" placeholder="mô tả">
                </div>
                
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <input type="button" class="btn btn-primary" value="Thêm Mới">
               
                <button type="reset" class="btn btn-primary">Nhập lại</button>
               <a href="index.php?act=list_lh">   <input type="button" class="btn btn-primary" value="Danh sách"></a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>