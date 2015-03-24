units = 'px';

$(function(){
	create_grid();

	$('#units').change( function(){
		units = $(this).val();
		$('.unit_display').text(units);

		if(units === '%'){
			$('#width').val(100);
			$('#width_div').css('display','none');
			$('#gutter_width').val(2);
			$('#demo_wrapper').css('max-width','100%');
		} else if(units === 'px'){
			$('#width').val(960);
			$('#width_div').css('display','block');
			$('#gutter_width').val(20);
			$('#demo_wrapper').css('max-width','1000%');
		} else if(units === 'pt'){
			$('#width').val(800);
			$('#width_div').css('display','block');
			$('#gutter_width').val(15);
			$('#demo_wrapper').css('max-width','1000%');
		}

		create_grid();
	});

	$('input').change( function(){
		create_grid();
	});
});

function create_grid(){
	$('#demo').html('&nbsp;');

	for (i = 0; i < $('#columns').val(); i++){
		$('#demo').append('<div class="column">&nbsp;</div>')
	}

    column_width = $('#width').val();
    column_width -= $('#gutter_width').val() * ($('#columns').val() - 1)
    column_width /= $('#columns').val();
    
    column_width += units;

	$('.column').css({
		'width' : column_width,
		'margin-right' : $('#gutter_width').val() + units
	});

	$('.column:last-of-type').css('margin-right','0px');

	$('#demo_wrapper').css({
		'width' : parseFloat($('#width').val()) + 35 + units
	});

	if (units === '%'){
		$('.column:last-of-type').css('top','-16px');
	} else{
		$('.column:last-of-type').css('top','0px');		
	}
}