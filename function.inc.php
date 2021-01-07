<?php
function pr($arr)
{
	echo '<pre>';
	print_r($arr);
}

function prx($arr)
{
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($str)
{
	global $con;
	$str = mysqli_real_escape_string($con, $str);
	return $str;
}

function redirect($link)
{
?>
	<script>
		window.location.href = '<?php echo $link ?>';
	</script>
<?php
	die();
}



function rand_str()
{
	$str = str_shuffle("abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz");
	return $str = substr($str, 0, 15);
}


function getUserCart()
{
	global $con;
	$arr = array();
	$id = $_SESSION['FOOD_USER_ID'];
	$res = mysqli_query($con, "select * from dish_cart where user_id='$id'");
	while ($row = mysqli_fetch_assoc($res)) {
		$arr[] = $row;
	}
	return $arr;
}

function manageUserCart($uid, $qty, $attr)
{
	global $con;
	$res = mysqli_query($con, "select * from dish_cart where user_id='$uid' and dish_detail_id='$attr'");
	if (mysqli_num_rows($res) > 0) {
		$row = mysqli_fetch_assoc($res);
		$cid = $row['id'];
		mysqli_query($con, "update dish_cart set qty='$qty' where id='$cid'");
	} else {
		$added_on = date('Y-m-d h:i:s');
		mysqli_query($con, "insert into dish_cart(user_id,dish_detail_id,qty,added_on) values('$uid','$attr','$qty','$added_on')");
	}
}

function getUserFullCart($attr_id = '')
{
	$cartArr = array();
	if (isset($_SESSION['FOOD_USER_ID'])) {
		$getUserCart = getUserCart();
		$cartArr = array();
		foreach ($getUserCart as $list) {
			$cartArr[$list['dish_detail_id']]['qty'] = $list['qty'];
		}
	} else {
		if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
			$cartArr = $_SESSION['cart'];
		}
	}
	if ($attr_id != '') {
		return $cartArr[$attr_id]['qty'];
	} else {
		return $cartArr;
	}
}
function getOrderDetails($oid){
	global $con;
	$sql="select order_detail.price,order_detail.qty,dish_details.attribute,dish.dish
	from order_detail,dish_details,dish
	WHERE
	order_detail.order_id=$oid AND
	order_detail.dish_details_id=dish_details.id AND
	dish_details.dish_id=dish.id";
	$data=array();
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
	
}
function dateFormat($date)
{
	$str = strtotime($date);
	return date('d-m-Y', $str);
}
function getDeliveryBoyNameById($id)
{
	global $con;
	$sql = "select name,mobile from delivery_boy where id='$id'";
	$data = array();
	$res = mysqli_query($con, $sql);
	if (mysqli_num_rows($res) > 0) {
		$row = mysqli_fetch_assoc($res);
		return $row['name'] . '(' . $row['mobile'] . ')';
	} else {
		return 'Not Assign';
	}
}
?>
