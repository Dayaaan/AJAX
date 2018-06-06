$(function () {
	
	$('#btn-submit').on("click", function() {

		if ( $("input[type=radio]:checked").val() == "html" ) {

			var urlHTML = "lorem.php";

			$.get(urlHTML, function (html) {

			   $('.result').html("");

			   $( ".result" ).html(html);

			});
		}

		if ( $("input[type=radio]:checked").val() == "json" ) {

			var urlPHP = "contact.php";

			$.getJSON(urlPHP, function (contactList) {

				$('.result').html("");

				for (var i = 0; i < contactList.length; i++) {

					$('.result').append(contactList[i].prenom + " " + contactList[i].telephone + "<br>");

				}
			});
		}
		
		if ( $("input[type=radio]:checked").val() == "movie" ) {

				var movieHTML = "movie.php";

				$.get(movieHTML, function (html) {

				   $('.result').html("");

				   $( ".result" ).html(html);

				});
		}
	
	});


});


