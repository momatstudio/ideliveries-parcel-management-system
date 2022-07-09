<?php  if (count($pushed_errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($pushed_errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>