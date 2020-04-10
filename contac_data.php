<?php
require "pdo_conn.php";
$sql = "INSERT INTO contact (name,email,message) VALUES (?,?,?)";
$c_data = $conn->prepare($sql);
if ($c_data->execute([$_REQUEST["name"], $_REQUEST["email"], $_REQUEST["message"]])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Message!</strong> Send Success
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Message!</strong> Send Faild
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>