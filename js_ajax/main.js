//Create GLOBAL variable below here on line 2

var global_result;

$(document).ready(function(){
	$('button').click(function(){
		console.log('click initiated');
		$.ajax({
			dataType: 'json',
			url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
			success: function(result) {
				console.log('AJAX Success function called, with the following result:', result);
				global_result = result.feed.entry;//returns node list of all objects
				for(var i = 0; i <global_result.length;i++){
					var curSrc = global_result[i]['im:image'][2].label;
					var newImage = $('<img>').attr('src', curSrc);

					var title = global_result[i].title.label;
					var figCaption = $('<figcaption>').text(title);
					$('#main').append(newImage, figCaption);
				}
				console.log(global_result);
			}
		});
		console.log('End of click function');
	});
});

