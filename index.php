<?php
	$title = 'Gridley Grid Generator';
	include('assets/php/header.php');
?>
	<body>
		<div class="float">
			<h1> Gridley </h1>
			<h2>CSS Grid Generator</h2>
		</div>

		<form  method="post" action="output.php">
			<div class="float fields">
				<div>
					<label for="units">Units</label>
					<select name="units" id="units">
						<option value="px">px</option>
						<option value="%">%</option>
						<option value="pt">pt</option>
					</select>
				</div>

				<div id="width_div">
					<label for="width" id="width_label">Row Width</label>
					<input type="number" name="width" id="width" value="960" />
					<span class="unit_display">px</span>
				</div>

				<div>
					<label for="columns">Column #</label>
					<input type="number" name="columns" id="columns" value="12" />
				</div>

				<div>
					<label for="gutter_width">Gutter Width</label>
					<input type="text" name="gutter_width" id="gutter_width" value="20" />
					<span class="unit_display">px</span>
				</div>

				<div>
					<label for="box_sizing">Box Sizing</label>
					<select name="box_sizing" id="box_sizing">
						<option value="content-box">content-box</option>
						<option value="border-box">border-box</option>
					</select>
				</div>
			</div>

			<input type="submit" value="Generate CSS" class="float"/>
		</form>

		<div id="demo_wrapper">
			<div id="demo">
			</div>
		</div>

		<?php include('assets/php/scripts.php'); ?>
	</body>
</html>