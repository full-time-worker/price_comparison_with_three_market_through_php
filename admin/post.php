
    <?php require_once("header.php");?>
    <style>
	/* upload image custom css */
	
	.fileUpload {
    position: relative;
    overflow: hidden;
    margin-left:33px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);

}
input#uploadFile1 {
    padding: 14px 4px;
}

</style>
       <!--- add User -->
       <?php
              spl_autoload_register(function($classes){
              require_once('class/'. $classes .'.php');
            
              });
              $admin = new Admin();
              if (isset($_POST['post'])) {
                  $data = $_POST;
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

<div class="form-group pt-3 my-4">
    <label for="post_title" class="cols-sm-2 control-label "></label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter Product Title" />
        </div>
    </div>
</div>
<div class="input-group my-4">
  <div class="input-group-prepend" style=" margin-right: -50px;">
    <span class="input-group-text" id="inputGroupFileAddon01"></span>
  </div>
  
  <div class="input-group my-4">
        <div class="input-group-prepend" style=" margin-right: -50px;">
        <span class="input-group-text" id="inputGroupFileAddon01"></span>
        </div>
                
    <div class="fileUpload">
    <span class="material-icons" style="font-size: 20px; margin: 5px 6px 2px 0px; ">
        perm_media
        </span>
        <input id="uploadBtn1" type="file" class="upload form-control"  name="postImg" />
    </div>
        <input id="uploadFile1" width="100%" placeholder="Choose File" disabled="disabled" class="form-control" />
        </div>
</div>
<div class="form-group my-4">
    <label for="m_one" class="cols-sm-2 control-label"></label>
    <div class="cols-sm-10">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input type="text" class="form-control" name="m_one" id="m_one" placeholder="Enter Market One Price"/>
        </div>
    </div>
</div>
<div class="form-group my-4">
    <label for="m_tow" class="cols-sm-2 control-label"></label>
    <div class="cols-sm-10">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input type="text" class="form-control" name="m_tow" id="m_tow" placeholder="Enter Market Tow Price"/>
        </div>
    </div>
</div>
<div class="form-group my-4">
    <label for="m_three" class="cols-sm-2 control-label"></label>
    <div class="cols-sm-10">
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input type="text" class="form-control" name="m_three" id="m_three" placeholder="Enter Market Three Price"/>
        </div>    
    </div>
</div>
<div class="form-group my-4">
    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="post">ADD product</button>
</div>

</form>
                     </div>
                     </div>
                     </div>
      <?php require_once("footer.php");?>