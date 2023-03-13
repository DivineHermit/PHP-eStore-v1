<?php if ( isset( $_SESSION['errors'] ) && ( count( $_SESSION['errors'] ) > 0 ) ) : ?>
  <div class="alert" >
  	<?php foreach ( $_SESSION['errors'] as $error ) : ?>
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  	<p class="alert"><?php echo $error ?></p>
  	<?php endforeach ?>
	  <?php unset( $_SESSION['errors'] ); $_SESSION['errors'] = array(); // remove old errors and create an empty array for later use ?>
  </div>
<?php endif ?>