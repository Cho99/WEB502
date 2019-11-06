<!-- head -->
<?php $this->load->view('admin/giaodich/head', $this->data)?>
<div class="line"></div>
<?php $this->load->view('admin/message', $this->data); ?>
<div id="main_transaction" class="wrapper">
  <div class="widget">
  
    <div class="title">
      <span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
      <h6>
        Danh sách giao dịch     
      </h6>
      <div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
    </div>
    
    
    <table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
      
      <thead class="filter"><tr><td colspan="7">
        <form method="get" action="<?php echo admin_url('giaodich')?>" class="list_filter form">
          <table width="80%" cellspacing="0" cellpadding="0"><tbody>
          
            <tr>
              <td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
              <td class="item"><input type="text" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>
              </td>

              <td style="width:150px">
                <input type="submit" value="Lọc" class="button blueB">
                <input type="reset" onclick="window.location.href = '<?php echo admin_url('giaodich')?>'; " value="Reset" class="basic">
              </td>
            </tr>
          </tbody></table>
        </form>
      </td></tr>
    </thead>
      
      <thead>
        <tr>
          <td style="width:60px;">Mã số</td>
          <td>Tên</td>
          <td>email</td>
          <td>Số tiền</td>
          <td>Phương thức thanh toán</td>
         <!--  <td>Trạng thái</td> -->
          <td style="width:75px;">Ngày đặt</td>
          <td style="width:120px;">Hành động</td>
        </tr>
      </thead>
      
      <tfoot class="auto_check_pages">

      </tfoot>
      
      <tbody class="list_item">
           <?php foreach ($list as $row):?>
           <tr class="row_<?php echo $row->id?>">
   <!--        <td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td> -->
          
          <td class="textC"><?php echo $row->id?></td>
          <td class="textC"><?php echo $row->ten?></td>
          <td class="textC"><?php echo $row->email?></td>
     
          <td> Tổng tiền: <?php echo  number_format($row->so_tien)?> đ </td>
           <td><?php if($row->hinhthuc_thanhtoan == 'offline'): ?>
               <?= 'Đến đại lý thanh toán' ?>
           	  <?php endif; ?>
           </td>

           <!-- <td><?php 
            if ($row->status == 0) {
              echo 'Chưa thanh toán';
            }elseif($row->status == 0) {
             echo 'Đã thanh toán'; 
            }else {
              echo 'Thanh toán thất bại';
            }
            ?></td> -->
  
          <td class="textC"><?php echo get_date($row->created)?></td>
          
          <td class="option textC">
            <a title="Xem chi tiết sản phẩm" class="tipS" target="_blank" href="<?= admin_url('order/view/').$row->id ?>">
                <img src="<?php echo public_url('admin/images')?>/icons/color/view.png">
             </a>

            <a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('giaodich/del/'.$row->id)?>">
                <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
            </a>
          </td>
        </tr>
        <?php endforeach;?>
       </tbody>
      
    </table>
  </div>
  
</div>