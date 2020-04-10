<?php
require_once 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-2">



			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">User Message</h4>
						<p class="card-category"> Here you can manage of all User Message</p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<thead class="text-primary">
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Message</th>
									<th>Action</th>
								</thead>
								<tbody>
									<?php

try {
    require "pdo_conn.php";
    $s_o = "SELECT * FROM contact";
    $show_offer = $conn->prepare($s_o);
    $show_offer->execute();

} catch (Exception $e) {
    error_log($e->getMessage());
}
$sn = 0;

while ($data = $show_offer->fetch(PDO::FETCH_ASSOC)) {$sn++;?>
										<tr>

											<td><?php echo $data["id"]; ?></td>
											<td><?php echo $data["name"]; ?></td>
											<td><?php echo $data["email"]; ?></td>
											<td><?php echo $data["message"]; ?></td>

											<td>
												<a class="btn btn-sm " href="javascript:void(0)" id="deletemsg" data-id="<?=$data['id']?>" data-toggle="tooltip"
													data-placement="bottom" title="Delete!"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
												</tr>

											<?php }?>
										</tbody>
									</table>
								</div>
								<div class="msg"></div>
							</div>
						</div>
					</div>
					<!-- manage user end -->


				</div>
			</div>
		</div>
		<?php

require_once 'footer.php';
?>
<script>
	$(document).ready(function(){
		$(document).on("click","#deletemsg",function(){
			var id= $(this).data("id");
			var el = this;
			$.ajax({
				url:"delete_msg.php",
				type:"POST",
				data:{id:id},
				success:function(data){
					console.log(data)
					$(".msg").html(data)
					$(el).closest('tr').fadeOut();
				}
			})
		})
	})
</script>