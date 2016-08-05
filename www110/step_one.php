<?php include 'header.php'; ?>

<p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

<h4>Step One: Information Gathering</h4>

<?php
    if (isset($_REQUEST['error'])){
        echo '<div class="alert alert-danger">Sorry! You need to enter your name and choose a creature type!</div>';
    }
    ?>

<form method="post" action="step_two.php">

<div class="form-group">
    <p>
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" class="form-control">
</p>
</div>

<fieldset>
	<legend>Choose your creature type:</legend>
	
	   <p>
		<input type="radio" name="creature_type" name="alien" id="alien" value="alien">
		<label for="alien">Alien</label>
	    </p>
      
	<p>
		<input type="radio" name="creature_type" name="robot" id="robot" value="robot">
		<label for="robot">Robot</label>
	</p> 
  
	
</fieldset>

<p>
	<input type="submit" value="Go to step 2 (if you dare)">
</p>

</form>

<?php include 'footer.php'; ?>
