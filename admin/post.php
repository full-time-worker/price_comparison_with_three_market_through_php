
    <?php require_once("header.php");?>
       <!--- add User -->
       <?php
              spl_autoload_register(function($classes){
              require_once('class/'. $classes .'.php');
            
              });
              $admin = new Admin();
              if (isset($_POST['post'])) {
                  $data = $_POST;
                  $query = 'select * from table';
                  $admin->addPost($data);
              }
              ?>
                     <div class="container">
                     <div class="row">
                     
    <div class="col-md-8 offset-md-4 mt-5">
    <div class="alert alert-info alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div> 
  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

<div class="form-group pt-3">
    <label for="post_title" class="cols-sm-2 control-label">title</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter Product Title" />
        </div>
    </div>
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="postImg" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<div class="form-group pt-3">
    <label for="m_one" class="cols-sm-2 control-label">Market One Price</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="m_one" id="m_one" placeholder="Enter Market One Price"/>
        </div>
    </div>
</div>
<div class="form-group pt-3">
    <label for="m_tow" class="cols-sm-2 control-label">Market Tow Price</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="m_tow" id="m_tow" placeholder="Enter Market Tow Price"/>
        </div>
    </div>
</div>
<div class="form-group pt-3">
    <label for="m_three" class="cols-sm-2 control-label">Market Three Price</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="m_three" id="m_three" placeholder="Enter Market Three Price"/>
        </div>    
    </div>
</div>
<div class="form-group ">
    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="post">ADD User</button>
</div>

</form>
                     </div>
                     </div>
                     </div>
      <?php require_once("footer.php");?>