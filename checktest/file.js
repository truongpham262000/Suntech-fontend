$(document).ready(function () {

	$('#text_test').val(""
		+"<!DOCTYPE html>"
		+"\n<html>"
		+"\n<head>"
		+"\n<meta charset='utf-8'>"
		+"\n<meta name='viewport' content='width=device-width, initial-scale=1'>"
		+"\n<title>Test</title>"
		+"\n</head>"
		+"\n<body>\n"
		+"\n</body>"
		+"\n</html>");

	$('#run_test').click(function () {
		$('#result_test').html($('#text_test').val());
		$("#test_left").height('40%');
		$("#test_right").height('60%');
	});
	$('#settag').click(function () {
		$('#text_test').val(""
		+"<!DOCTYPE html>"
		+"\n<html>"
		+"\n<head>"
		+"\n<meta charset='utf-8'>"
		+"\n<meta name='viewport' content='width=device-width, initial-scale=1'>"
		+"\n<title>Test</title>"
		+"\n</head>"
		+"\n<body>\n"
		+"\n</body>"
		+"\n</html>");

		$('#result_test').html($('#text_test').val());
		$("#test_left").height('40%');
		$("#test_right").height('60%');
	});
	$("#del").click(function () {
		$("#test_left").height('10%');
		$("#test_right").height('90%');
		$('#result_test').html($('#text_test').val());
	});
	$("#plus").click(function () {
		$("#test_left").height('100%');
		$("#test_right").height('0%');
		$('#result_test').html($('#text_test').val());
	});

});
$(document).delegate('#text_test', 'keydown', function(e) {
  var keyCode = e.keyCode || e.which;
 
  if (keyCode == 9) {
    e.preventDefault();
    var start = this.selectionStart;
    var end = this.selectionEnd;
 
    $(this).val($(this).val().substring(0, start)
                + "\t"
                + $(this).val().substring(end));
    
    this.selectionStart =
    this.selectionEnd = start + 1;
  }
});