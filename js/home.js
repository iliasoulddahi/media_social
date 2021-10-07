/**
 * Api function
 */
//add friend search
$(document).ready(function () {
	$("#keyword_add_friend_search").on("keyup", function () {
		$.ajax({
			url: "<?=base_url('friend/search_friend')?>",
			method: "GET",
			data: { keyword: $("#keyword_add_friend_search").val() },
			success: function (data) {
				$("#add_friend_form").html(data);
			},
		});
	});
});
/**
 * Dom Manipulation Function
 */
//show and hide elemnt
function show(n) {
	var el = document.querySelector(n);
	if (!el.style.display || el.style.display == "none") {
		el.style.display = "block";
	} else {
		el.style.display = "none";
	}
}
