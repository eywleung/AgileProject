$(document).ready(function () {

/**
 *	Display tooltip for 'IT Enabled Business'
 */
	$( document ).tooltip();

/**
 *	Slider for q4 and q5
 */
 /*
	$( ".slider#q4_slider" ).slider({
		value:3,
		min: 1,
		max: 5,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q4_text" ).val( ui.value );
		}
	});
	$( "input#q4_text" ).val( $( ".slider#q4_slider" ).slider( "value" ) );

	$( ".slider#q5a_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5a_text" ).val( ui.value );
		}
	});
	$( "input#q5a_text" ).val( $( ".slider#q5a_slider" ).slider( "value" ) );

	$( ".slider#q5b_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5b_text" ).val( ui.value );
		}
	});
	$( "input#q5b_text" ).val( $( ".slider#q5b_slider" ).slider( "value" ) );

	$( ".slider#q5c_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5c_text" ).val( ui.value );
		}
	});
	$( "input#q5c_text" ).val( $( ".slider#q5c_slider" ).slider( "value" ) );

	$( ".slider#q5d_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5d_text" ).val( ui.value );
		}
	});
	$( "input#q5d_text" ).val( $( ".slider#q5d_slider" ).slider( "value" ) );

	$( ".slider#q5e_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5e_text" ).val( ui.value );
		}
	});
	$( "input#q5e_text" ).val( $( ".slider#q5e_slider" ).slider( "value" ) );

	$( ".slider#q5f_slider" ).slider({
		value:4,
		min: 1,
		max: 7,
		step: 1,
		slide: function( event, ui ) {
			$( "input#q5f_text" ).val( ui.value );
		}
	});
	$( "input#q5f_text" ).val( $( ".slider#q5f_slider" ).slider( "value" ) );
*/

/**
 *	Question 3. Condition for displaying q6 and q7
 */
/*
	$("input[name=q3_radio]:radio").change(function () {
		if ($(this).val() == 'agile') {
			$("div#q6").show('slow');
			$("div#q7").show('slow');
		}
		else if ($(this).val() == 'combination') {
			$("div#q6").show('slow');
			$("div#q7").show('slow');
		}
		else {
			$("div#q6").hide('fast');
			$("div#q7").hide('fast');
		}
	});
*/
/**
 *	Question 7 for Survey Part 1
 */

 	q7_count = 1;

	$("input#q7_text").on("keypress", function(e) {
        if( $(this).val().length > 0 && e.keyCode == 13) {
            list = "<li>" + $(this).val() + " <span style='color:#0054a6; font-size: .75em; cursor: pointer;' class='q7_list_delete'>[remove]</span>" + "<input type=hidden name='q7_list_" + q7_count + "' value='" + $(this).val() + "'>" + "</li>";
            $("ul#q7_list").append(list);
            $(this).val(''); //reset the value
            q7_count++;

			return false;
		}
	});



	$("input#q7_addButton").on("click", function () {
		
		if( $("input#q7_text").val().length > 0 ) {
			list = "<li>" + $("input#q7_text").val() + " <span style='color:#0054a6; font-size: .75em; cursor: pointer;' class='q7_list_delete'>[remove]</span>" + "<input type=hidden name='q7_list_" + q7_count + "' value='" + $("input#q7_text").val() + "'>" + "</li>";
			$("ul#q7_list").append(list);
			$("input#q7_text").val(''); //reset the value
			q7_count++;
		}
		
	});

	$(document.body).on("click","span.q7_list_delete", function() {
		$(this).parent().remove();
	});

	
/**
 *	Email Signup for Report when Research Completed
 */
	$( "div#signUpForReport_message" ).dialog({
		modal: true,
		autoOpen: false,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
			}
		}
	});



	$("input#signUpForReport_button").on("click", function () {
		if( $("input#signUpForReport_text").val().length > 0 ) {
			$.post( 
				"/AgileProject/index.php/survey/signUpForReport", 
				{ emailAddress: $("input#signUpForReport_text").val() },
				function( jsonMsg ) {
					msgObj = jQuery.parseJSON( jsonMsg );

					if(msgObj.result === true){
						$("span#signUpForReport_email").html( $("input#signUpForReport_text").val() );
						$("div#signUpForReport_message").dialog("open");
						$("input#signUpForReport_text").val(''); //reset the value
					}
					else {
						alert('Please verify your email address');
					}
					
			});

		}
	});

/**
 *	Part 2 Follow Up Questions
 */

 	//Save Textarea on focus out.
 	$("textarea.followUpQuestions").focusout(function() {

		//alert( $(this).val() );

		$.post( 
				"/AgileProject/index.php/survey/saveFollowUpQuestions", 
				{ 	questionId: $(this).attr('id'),
					response: $(this).val()
				},
				function( jsonMsg ) {
					
		});

	});
});

/**
 *	End of file
 */