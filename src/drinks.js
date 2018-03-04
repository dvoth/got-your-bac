$(".beer-std-drink").on('click', function() {
	$("input[name=amount]").val();
});

$(".drink-selector").change(function() {
	var selectedDrink = $( "select option:selected" )
	if (selectedDrink.val() == 1) {
		$("input[name=amount]").val(12);
		$("input[name=percentage]").val(5);
	} else if (selectedDrink.val() == 2) {
		$("input[name=amount]").val(1.5);
		$("input[name=percentage]").val(40);
	} else if (selectedDrink.val() == 3) {
		$("input[name=amount]").val(1.5);
		$("input[name=percentage]").val(35);
	}
})
