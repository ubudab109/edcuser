var topup = $('.dropify').dropify({
	messages: {
		'default': 'Drag and drop a file here or click',
		'replace': 'Drag and drop or click to replace',
		'remove': 'Remove',
		'error': 'Hanya File jpg dan png format.'
	},
	error: {
		'fileSize': 'Ukuran File maksimum 1Mb (1Mb max).'
		
	}
});
	
topup.on('dropify.errors', function(event, element){
     $("#submitupload").hide();
});




var beli = $('#belibuktibayar').dropify({
	messages: {
		'default': 'Drag and drop a file here or click',
		'replace': 'Drag and drop or click to replace',
		'remove': 'Remove',
		'error': 'Hanya File jpg dan png format.'
	},
	error: {
		'fileSize': 'Ukuran File maksimum 1Mb (1Mb max).'
		
	}
});
	
beli.on('dropify.errors', function(event, element){
     $("#submituploadbeli").hide();
});

