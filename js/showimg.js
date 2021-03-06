       // common variables
	var iBytesUploaded = 0;
	var iBytesTotal = 0;
	var iPreviousBytesLoaded = 0;
	var iMaxFilesize = 1048576; // 1MB
	var oTimer = 0;
	var sResultFileSize = '';

	function secondsToTime(secs) { // we will use this function to convert seconds in normal time format
	    var hr = Math.floor(secs / 3600);
	    var min = Math.floor((secs - (hr * 3600))/60);
	    var sec = Math.floor(secs - (hr * 3600) -  (min * 60));
	 
	    if (hr < 10) {hr = "0" + hr; }
	    if (min < 10) {min = "0" + min;}
	    if (sec < 10) {sec = "0" + sec;}
	    if (hr) {hr = "00";}
	    return hr + ':' + min + ':' + sec;
	};
	 
	function bytesToSize(bytes) {
	    var sizes = ['Bytes', 'KB', 'MB'];
	    if (bytes == 0) return 'n/a';
	    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
	    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
	};
	 
	function fileSelected() {
	 
	    // hide different warnings
	    document.getElementById('upload_response').style.display = 'none';
	    document.getElementById('error1').style.display = 'none';
	    document.getElementById('error2').style.display = 'none';
	    document.getElementById('abort').style.display = 'none';
	    document.getElementById('warnsize').style.display = 'none';
	 
	    // get selected file element
	    var oFile = document.getElementById('image_file').files[0];
	 
	    // filter for image files
	    var rFilter = /^(image\/bmp|image\/gif|image\/jpeg|image\/png|image\/tiff)$/i;
   		if (! rFilter.test(oFile.type)) {
	        document.getElementById('error1').style.display = 'block';
	        return;
	    }
	 
	    // little test for filesize
	    if (oFile.size > iMaxFilesize) {
	        document.getElementById('warnsize').style.display = 'block';
	        return;
	    }
	    // get preview element
	    var oImage = document.getElementById('preview');
	    // prepare HTML5 FileReader
	    var oReader = new FileReader();
	        oReader.onload = function(e){
	 
	        // e.target.result contains the DataURL which we will use as a source of the image
	        oImage.src = e.target.result;
	 
	        oImage.onload = function () { // binding onload event
	 
	            // we are going to display some custom image information here
	            sResultFileSize = bytesToSize(oFile.size);
	            document.getElementById('fileinfo').style.display = 'block';
	            document.getElementById('filename').innerHTML = 'Name: ' + oFile.name;
	            document.getElementById('filesize').innerHTML = 'Size: ' + sResultFileSize;
	            document.getElementById('filetype').innerHTML = 'Type: ' + oFile.type;
	            document.getElementById('filedim').innerHTML = 'Dimension: ' + oImage.naturalWidth + ' x ' + oImage.naturalHeight;
	        };
	    };
	 
	    // read selected file as DataURL
	    oReader.readAsDataURL(oFile);
	}