$(function(){
	var apiKey = '1cf7a3735a44f71450c9b5aa46fe5550';
	var userId = '57671765@N00';
	var tag = 'hacked';
	var perPage = '25';
	var showOnPage = '6';

	$.getJSON('http://api.flickr.com/services/rest/?format=json&method='+
		'flickr.photos.search&api_key=' + apiKey + '&user_id=' + userId +
		'&tags=' + tag + '&per_page=' + perPage + '&jsoncallback=?',
	function(data){
		var classShown = 'class="lightbox"';
		var classHidden = 'class="lightbox hidden"';
		$.each(data.photos.photo, function(i, rPhoto){
			var basePhotoURL = 'http://farm'+ rPhoto.farm + '.static.flickr.com/'
				+ rPhoto.server + '/' + rPhoto.id + '_' + rPhoto.secret;
			var thumbPhotoURL = basePhotoURL + '_s.jpg';
			var mediumPhotoURL = basePhotoURL + '.jpg';
			var photoStringStart = '<a ';
			var photoStringEnd = 'title="' + rPhoto.title + '" href="'+ mediumPhotoURL +
				'"><img src="' + thumbPhotoURL + '" alt="' + rPhoto.title + '"/></a>';
			var photoString = ( i < showOnPage) ?
				photoStringStart + classShown + photoStringEnd :
				photoStringStart + classHidden + photoStringEnd;
			$(photoString).appendTo("#flickr");
		});
		$("a.lightbox").lightBox();
	});
});
