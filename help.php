<?php
	$title = 'Gridley Grid Generator';
	include('assets/php/header.php');
?>
		<div class="float">
			<h1>CSS grids</h1>
			<h2>The short version</h2>
		</div>

		<div class="float fields">
			<p>
				CSS grids can be an easy way to incorporate a grid system in to your web designs. Below is an example of a responsive 12 column grid, divided in a number of ways. 
			</p>
			<p>
				First, add your generated CSS code in to the CSS section of your site. 
			</p>
			<p>
				Each blue rectangle below is a row. You can make any html element a row by setting it's class to 'row'.
			</p>
			<p>
				Add elements inside of your row with a class following this format: 'col-#', where '#'' is equal to the number of columns the element should span.
			</p>
			<p>
				The featured code section shows how to set up the first row below.
			</p>
		</div>
		
		<div class="float">
			<code>
				<div>&nbsp;</div>
				<div>&#060;div class="row"&#062;</div>
					<div>&nbsp;&nbsp;&nbsp; &#060;div class="col-4"&#062;</div>
					<div>&nbsp;&nbsp;&nbsp; &#060;/div&#062;</div>
					
					<div>&nbsp;&nbsp;&nbsp; &#060;div class="col-4"&#062;</div>
					<div>&nbsp;&nbsp;&nbsp; &#060;/div&#062;</div>
				
					<div>&nbsp;&nbsp;&nbsp; &#060;div class="col-4"&#062;</div>
					<div>&nbsp;&nbsp;&nbsp; &#060;/div&#062;</div>
				<div>&#060;/div&#062;</div>
				<div>&nbsp;</div>
			</code>
		</div>

		<div class="row">
			<div class="col-4">
				.col-4
			</div>
			<div class="col-4">
				.col-4
			</div>
			<div class="col-4">
				.col-4
			</div>
		</div>

		<div class="row">
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-1">
				.col-1
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				.col-6
			</div>
			<div class="col-3">
				.col-3
			</div>
			<div class="col-3">
				.col-3
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				.col-6
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-2">
				.col-2
			</div>
			<div class="col-3">
				.col-3
			</div>
		</div>

		<div class="row">
			<div class="col-9">
				.col-9
			</div>
			<div class="col-1">
				.col-1
			</div>
			<div class="col-2">
				.col-2
			</div>
		</div>

		<div class="row">
			<div class="col-5">
				.col-5
			</div>
			<div class="col-5">
				.col-5
			</div>
			<div class="col-2">
				.col-2
			</div>
		</div>
		<?php include('assets/php/scripts.php'); ?>		
	</body>
</html>