<?php if(count($errors) > 0): ?>
  <div class="">
      <?php foreach ($errors as $error): ?>
        <p class="error">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <?php echo $error; ?>
        </p> <br>
    <?php endforeach; ?>
  </div>

<?php endif; ?>
