<?php
function insertsp($tensp, $img_name,$giasp, $ngaynhap, $mota, $trangthai, $iddm)
{
    $sql = "INSERT INTO sanpham(ten_sp,anh_sp,gia_sp,ngay_nhap,mo_ta,trang_thai,id_dm) VALUES('$tensp','$img_name','$ngaynhap','$giasp','$mota','$trangthai','$iddm')";
    pdo_execute($sql);
}


function load_list_sp($keyw, $iddm)
{
    $sql = "select * from sanpham where 1 ";
    if ($keyw != "") {
        $sql .= " AND ten_sp LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND id_dm LIKE '%" . $iddm . "%'";
    }

    $sql .= " order by sanpham.id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}

function delete_sp($idsp)
{
    $sql = "delete from sanpham where id=" . $idsp;
    $result = pdo_execute($sql);
}

function load_one_sp($id)
{
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_sp($tensp, $img, $giasp, $ngaynhap, $mota, $iddm, $id)
{
    if ($img == "") {
        $sql = "update sanpham set ten_sp='$tensp',gia_sp='$giasp',ngay_nhap='$ngaynhap',mo_ta='$mota',id_dm='$iddm'  where id=$id";
    } else {
        $sql = "update sanpham set ten_sp='$tensp',anh_sp='$img',gia_sp='$giasp',ngay_nhap='$ngaynhap',mo_ta='$mota',id_dm='$iddm'  where id=$id";
    }
    pdo_execute($sql);
}




// sản phẩm biến thể 
function insert_sp_bt($size, $mausac, $soluong, $gia, $id_sp)
{
    $sql = "insert into sp_bienthe(size,mau_sac,so_luong,gia,id_sp) values('$size','$mausac','$soluong','$gia','$id_sp')";
    pdo_execute($sql);
}


function load_list_sp_bt($keyw)
{
    $sql = "select * from sanpham join sp_bienthe on sanpham.id = sp_bienthe.id_sp";
    if ($keyw != "") {
        $sql .= " AND sanpham.ten_sp LIKE '%" . $keyw . "%'";
    }
    $sql .= " order by sp_bienthe.id desc limit 0,9";
    $list_spbt = pdo_query($sql);
    return $list_spbt;
}

function delete_sp_bt($idspbt)
{
    $sql = "delete from sp_bienthe where id=" . $idspbt;
    $result = pdo_execute($sql);
}


function update_sp_bt($gia, $size, $mausac, $soluong, $id)
{
    $sql = "update sp_bienthe set gia='$gia',size='$size',mau_sac='$mausac',so_luong='$soluong' where id=$id";
    pdo_execute($sql);
}

function load_one_sp_bt($id)
{
    $sql = "select * from sanpham join sp_bienthe on sanpham.id = sp_bienthe.id_sp  where sp_bienthe.id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function load_sl_sp(){
    $sql="select count(sanpham.id) as sl from sanpham ";
    $count_sp = pdo_query($sql);
    return $count_sp;
}
//trên giao diện 
function load_list_sp_noibat(){
$sql="select * from sanpham order by luot_xem desc";
$list=pdo_query($sql);
return $list;
}

function load_one_ctsp($id){
    $sql="select * from sp_bienthe join sanpham on sp_bienthe.id_sp = sanpham.id join danh_muc on sanpham.id_dm=danh_muc.id where sanpham.id = $id";
    $spct=pdo_query($sql);
return $spct;
}
function load_sp_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where id_dm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
