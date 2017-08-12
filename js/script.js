$(function() {
	$('[data-toggle="tooltip"]').tooltip();

	$("input").on("input", function() {
		if(checkForm()) {
			$("button").prop("disabled", false);
		} else {
			$("button").prop("disabled", true);
		}
	});
});

function checkForm() {
	var valid = true;
	$("input[type='text']").each(function () {
		// console.log($.isNumeric($(this).val().trim()));
		if(!($.isNumeric($(this).val().trim()))) {
			valid = false;
			return false; // break out of .each loop
		}
	});
	return valid;
}
