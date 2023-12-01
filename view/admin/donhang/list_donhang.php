<?php
include 'boxleft.php';
?>
<div class="content-wrapper">


    <div class="card" style="border: 1px solid gray;  width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Danh sách đơn hàng </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                      
                        <th>Ngày lập hóa đơn</th>
                        <th>Tên khách hàng </th>
                        <th>Tổng hóa đơn</th>
                        <th>tổng tiền</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ( $list as $value) {
                        extract($value);
                        $link_cthd = "index.php?act=chitiet_donhang&idhd=" . $id;
                        $linkdelete = "index.php?act=xoa_dh&idhd=" . $id;
                        $linkupdate = "index.php?act=sua_trangthai&idhd=" . $id;
                        echo' <tr>
                        <td>'.$id.'</td>
                           
                            <td>'.$ngay_dat.'</td>
                            <td>'.$ten_kh.'</td>
                            <td>'.$sodon.'</td>
                            <td>'.$tong_hd.'</td>
                            <td>
                                <a href="'. $link_cthd.'" class="btn btn-primary">
                                  
                                    Chi tiết
                                </a>
                                <a href="'.  $linkupdate .'" class="btn btn-primary" style="margin: 0 10px;">
                                <i class="bi bi-pencil-fill"></i>
                                Sửa 
                            </a>
                                <a href="'.  $linkdelete .'" class="btn btn-primary">
                                    <i class="bi bi-trash3-fill"></i>
                                    xóa
                                </a>
                            </td>
                        </tr>';

                    }
                    
                    
                    ?>
                  

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


</div>