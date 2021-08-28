$(document).ready(function() {
    
	var base_url = $('#hiddenBaseUrl').val();
	var uploadfolder = $('#uploadfolder').val();
	
	
	
	$('#file_upload').uploadify({
		'uploader'  : base_url + 'assets/flash/uploadify/uploadify.swf',
		'script'    : base_url + 'index.php/uploadify/uploadifyUploader/',
		'cancelImg' : base_url + 'assets/css/uploadify/cancel.png',
		'folder'    : uploadfolder,
		'fileExt'   : '*.jpg;*.gif;*.png;*.zip;*.rar;*.flv;*.mp4;*.mp3',
		'auto'      : false,
		'multi'     : true,
		'onComplete'  : function(event, ID, fileObj, response, data) {
         // here i'm gonna resize the images and display it in the main page 
         // $.ajax({
             // url : base_url + 'index.php/uploadify/filemanipulation/' + fileObj.type +'/' + fileObj.name,
             // success : function(response){
               
                // if(response == 'image')
                  // {
                    
                    // var images = $('<li><a target="_blank" href="'+base_url+'uploads/'+fileObj.name+'"><img src="'+base_url + 'uploads/thumbs/' +fileObj.name+'" alt=""/></li>');
                    // $(images).hide().insertBefore('#displayFiles').slideDown('slow')
                  // }
                  // else 
                  // {
                    // var files = $('<a href="'+base_url + 'uploads/thumbs/' +fileObj.name+'" target="_blank">'+fileObj.name+'</a>');
                    // $(files).hide().insertBefore('#displayFiles').slideDown('slow')
                  // }
                  
             // }
         // })
		}
	});
 
});