<?php if ( isset($_SESSION['message']) ) : ?>
  <div class="alert info">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <p><?php echo $_SESSION['message']; unset($_SESSION['message']); // Remove the message so it doesn't appear again ?></p>
  </div>
<?php endif ?>