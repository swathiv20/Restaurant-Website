<?php
include("header.php");
if (!isset($_SESSION['FOOD_USER_ID'])) {
	redirect('menu.php');
}
$uid = $_SESSION['FOOD_USER_ID'];
$sql = "select order_master.*,order_status.order_status as order_status_str from order_master,order_status where order_master.order_status=order_status.id and order_master.user_id='$uid' order by order_master.id desc";

$res = mysqli_query($con, $sql);
?>

<div class="cart-main-area pt-95 pb-100">
	<div class="container">
		<div class="title">
			<h2>Order History</h2>
			<div class="line center">
				<div></div>
				<span><i class="fas fa-utensils"></i></span>
				<div></div>
			</div>
		</div>
		<div class="contact-row">
			<div>
				<form class="contact-form" method="post">
					<div class="table-content table-responsive">

						<table>
							<thead>
								<tr>
									<th class="form-submit-btn">Order No</th>
									<th class="form-submit-btn">Price</th>
									<th class="form-submit-btn">Address</th>
									<th class="form-submit-btn">Dish Details</th>
									<th class="form-submit-btn">Order Status</th>
									<th class="form-submit-btn">Payment Status</th>
								</tr>
							</thead>
							<tbody>
								<?php if (mysqli_num_rows($res) > 0) {
									$i = 1;
									while ($row = mysqli_fetch_assoc($res)) {
								?>
										<tr>
											<td class="form-control"><?php echo $row['id'] ?>

											</td>
											<td class="form-control"><?php echo $row['total_price'] ?></td>
											<td class="form-control"><?php echo $row['address'] ?><br />
												<?php echo $row['zipcode'] ?></td>
											<td class="form-control">
												<table>
													<tr class="form-submit-btn">
														<th>Dish</th>
														<th>Attribute</th>
														<th>Price</th>
														<th>Qty</th>
													</tr>
													<?php
													$getOrderDetails = getOrderDetails($row['id']);
													foreach ($getOrderDetails as $list) {
													?>
														<tr>
															<td class="form-control"><?php echo $list['dish'] ?></td>
															<td class="form-control"><?php echo $list['attribute'] ?></td>
															<td class="form-control"><?php echo $list['price'] ?></td>
															<td class="form-control"><?php echo $list['qty'] ?></td>
														</tr>
													<?php
													}
													?>
												</table>
											</td>
											<td><?php echo $row['order_status_str'] ?></td>
											<td>
												<div class="payment_status payment_status_<?php echo $row['payment_status'] ?>"><?php echo ucfirst($row['payment_status']) ?></div>
											</td>
										</tr>
								<?php }
								} ?>
							</tbody>
						</table>

					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>