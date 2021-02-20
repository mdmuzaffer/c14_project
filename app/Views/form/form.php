<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
  <?php $validation = \Config\Services::validation(); ?>
  
<form action="/ci4/public/form" method="post">
	<?= csrf_field() ?>
	<label for="fname">Name:</label><br>
	<input type="text" id="name" name="name"><br>
   <!-- Error -->
        <?php if($validation->getError('name')) {?>
            <div class='alert alert-danger mt-2' style="color:red;">
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
	  <!-- Error end-->
	  
	<label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
   <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2' style="color:red;">
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
	<!-- Error end-->
	
  <label for="email">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile"><br>
   <!-- Error -->
        <?php if($validation->getError('mobile')) {?>
            <div class='alert alert-danger mt-2' style="color:red;">
              <?= $error = $validation->getError('mobile'); ?>
            </div>
        <?php }?>
	<!-- Error end-->
	
  <input type="submit" value="Submit">
</form> 

</body>
</html>
