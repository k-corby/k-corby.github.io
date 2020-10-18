<div class="row header">
	<h1 id="title">Admin.</h1>
</div>
<div class="row header">
	<p>Below is a section to add, manage and see which students<br> have registered interest in sports.</p>
</div>
<?php
if (isset($_GET['message'])) {
?>
	<div class="row message">
		<p><?php echo $_GET['message']; ?></p>
	</div>

<?php
}
?>
<div class="row">
	<div class="col-50">
		<h2>Add a new sport</h2>
		<form class="form" action="process_sport.php" method="GET">
			<input class="form-item" type="text" placeholder="Sport name" name="sportname" required>
			<input class="form-item" type="text" placeholder="Term" name="term" required>
			<input class="form-item" type="text" placeholder="Coach" name="coach" required>
			<input class="form-item" type="text" placeholder="Description" name="description" required>
			<button type="submit" class="btn btn-lg btn-primary ml-auto">Add a sport</button>
		</form>
	</div>
	<div class="col-50">
		<h2>View sports</h2>
		<?php $data[0]->renderForm(); ?>
		
	</div>
</div>