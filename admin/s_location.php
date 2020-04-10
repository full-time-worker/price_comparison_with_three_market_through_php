<?php

require_once 'header.php';

try {
    require "pdo_conn.php";
    $s_o = "SELECT * FROM location";
    $show_offer = $conn->prepare($s_o);
    $show_offer->execute();
    $data = $show_offer->fetch(PDO::FETCH_ASSOC);

    //DELETE BUTTON WORK HERE
    $del_sq = "DELETE FROM location WHERE id = ?";
    $dl = $conn->prepare($del_sq);
    if (isset($_REQUEST["del_lo"])) {
        if ($dl->execute(array($_REQUEST['id']))) {
            echo "Delete Successfully";
        } else {
            echo "Delete Faild";
        }
    }

} catch (Exception $e) {
    error_log($e->getMessage());
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-4 mt-5">
			<h1  class="display-4 text-center">Market-1</h1>
			<?php if (isset($data['e_location'])) {echo $data['e_location'];} else {echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<p class='display-2 text-center'><strong>Location</strong> Not Added</p>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";}?>
		</div>
		<div class="col-md-8 offset-md-4 mt-5">
			<h1  class="display-4 text-center">Market-2</h1>
			<?php if (isset($data['e_location2'])) {echo $data['e_location2'];} else {echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<p class='display-2 text-center'><strong>Location</strong> Not Added</p>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";}?>
		</div>
		<div class="col-md-8 offset-md-4 mt-5">
			<h1  class="display-4 text-center">Market-3</h1>
			<?php if (isset($data['e_location3'])) {echo $data['e_location3'];} else {echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<p class='display-2 text-center'><strong>Location</strong> Not Added</p>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";}?>
		</div>


	</div>
	<div class="row justify-content-center text-center mt-3">
		<div class="col-md-8 offset-md-4">
			<form action="" method="POST">
				<input type="hidden" name="id" value="<?php if (isset($data['id'])) {echo $data['id'];}?>">
				<input type="submit" class="btn btn-danger text-center" value="Delete All Market Location" name="del_lo">
			</form>
		</div>
	</div>
</div>
<?php

require_once 'footer.php';
?>