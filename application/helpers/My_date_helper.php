<?php 
//lấy ngày từ dạng int
// $time : int thời gian muốn hiện thị
// $full_time : liểu muốn lấy giờ phút giây hay không 
function get_date($time , $full_time = true)
{
	$fomat = '%d-%m-%Y';
	if ($full_time) {
		$fomat = $fomat;
	}
	$date = mdate($fomat, $time);
	return $date;
}
?>