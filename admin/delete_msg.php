<?php
require "pdo_conn.php";
$sql = "DELETE FROM contact WHERE id =? ";
$del_data = $conn->prepare($sql);

if ($del_data->execute([$_REQUEST["id"]])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Delete!</strong> Success
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Delete!</strong> Faild
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>