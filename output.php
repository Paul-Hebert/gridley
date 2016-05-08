<?php
	$title = 'Gridley Grid Generator';
	include('assets/php/header.php');
?>
		<div id="code_wrapper">
			<a href="help.html" target="_BLANK">How do I use this?</a>

			<code>
				<div>
					&nbsp;
				</div>	

				<div>
					/*
				</div>

				<div>
					This grid system was generated using the Gridley Grid Generator.
				</div>

				<div>
					Gridley is a free service brought to you by Paul Hebert of Mild West Designs.
				</div>

				<div>
					Try it out at at www.mildwestdesigns.com/gridley/
				</div>

				<div>
					You're welcome to use or modify this code in any way, including removing these comments.
				</div>

				<div>
					*/
				</div>	

				<?php
					$units = $_POST['units'];
					$width = $_POST['width'];
					$gutter_width = $_POST['gutter_width'];
					$columns = $_POST['columns'];

					$column_width = $width;
	    			$column_width -= $gutter_width * ($columns - 1);
	    			$column_width /= $columns;

					$box_sizing = $_POST['box_sizing'];


					echo '<div>&nbsp;</div>
						<div>.row{</div>
							<div>&nbsp;&nbsp;&nbsp; clear: both;</div>
	    					<div>&nbsp;&nbsp;&nbsp; margin: 0 auto;</div>
							<div>&nbsp;&nbsp;&nbsp; width: ' . $width . $units . ';</div>
							<div>&nbsp;&nbsp;&nbsp; box-sizing: ' . $box_sizing . ';</div>
							<div>&nbsp;&nbsp;&nbsp; white-space: no-wrap;</div>
						<div>}</div>

						<div>&nbsp;</div>

						<div>[class^="col-"]{</div>
	    					<div>&nbsp;&nbsp;&nbsp; float: left;</div>
	    					<div>&nbsp;&nbsp;&nbsp; margin: 0 ' . $gutter_width . $units . ' 0 0;</div>
	    					<div>&nbsp;&nbsp;&nbsp; list-style: none;</div>
	    					<div>&nbsp;&nbsp;&nbsp; position: relative;</div>
							<div>&nbsp;&nbsp;&nbsp; box-sizing: ' . $box_sizing . ';</div>
						<div>}</div>

						<div>&nbsp;</div>

						<div>[class^="col-"]:last-of-type{</div>
							<div>&nbsp;&nbsp&nbsp; margin-right:0px;</div>
						<div>}</div>

						<div>&nbsp;</div>';


					for($i = 1; $i < $columns + 1; $i++){
						echo '<div>.col-' . $i . '{ width: ';
						if ($i == $columns){
							echo $width . $units . ';';
							echo ' margin:0' . $units;
						} else{
							echo $column_width * $i + $gutter_width * ($i-1) . $units . ';';
						}
						echo ' }</div>';
					}
				?>

				<div>
					&nbsp;
				</div>	

				<div>
					/* End Gridley Grid Generator */
				</div>

				<div>
					&nbsp;
				</div>	
			</code>
		</div>
		<?php include('assets/php/scripts.php'); ?>		
	</body>
</html>

