<div class="row">
            <div class="row frmtitle"><h1>Danh sách Tài Khoản </h1></div>
            <div class="row fromcontent">
              <div class="row mb frmdsloai table">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội Dung</th>
                        <th>Iduser</th>
                        <th>Idpro</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>
<?php
foreach ($listbinhluan as $binhluan){
  extract($binhluan);
  $suabl="index.php?act=suabl&id=".$id;
  $xoabl="index.php?act=xoabl&id=".$id;

  echo '<tr>
  <td><input type="checkbox" name="" id=""></td>
  <td>'.$id.'</td>
  <td>'.$noidung.'</td>
  <td>'.$iduser.'</td>
  <td>'.$idpro.'</td>
  <td>'.$ngaybinhluan.'</td>
  <td><a href="'.$xoabl.'"><input type="button" value="xóa"></a> </td>
</tr>';
}
?>
                    
                </table>
              </div>
              <div class="row mb10">
                <input type="button" value ="Chọn tất cả">
                <input type="button" value ="Bỏ chọn tất cả">
                <input type="button" value ="Xóa các mục đã chọn">
                
              </div>
            </div>
</div>
           
          