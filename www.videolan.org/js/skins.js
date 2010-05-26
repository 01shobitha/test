/* Based upon SkinBox JS by Lokesh Dhakar - http://www.huddletogether.com
 * which is licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/
 * Adapted for the skins gallery by Daniel Dreibrodt
 */
 

var loadingImage = 'http://images.videolan.org/images/skinlist/loading.gif';		
var closeButton = 'http://images.videolan.org/images/skinlist/close.gif';	

//
// getPageScroll()
// Returns array with x,y page scroll values.
// Core code from - quirksmode.org
//
function getPageScroll(){

	var yScroll;

	if (self.pageYOffset) {
		yScroll = self.pageYOffset;
	} else if (document.documentElement && document.documentElement.scrollTop){	 // Explorer 6 Strict
		yScroll = document.documentElement.scrollTop;
	} else if (document.body) {// all other Explorers
		yScroll = document.body.scrollTop;
	}

	arrayPageScroll = new Array('',yScroll) 
	return arrayPageScroll;
}

//
// getPageSize()
// Returns array with page width, height and window width, height
// Core code from - quirksmode.org
// Edit for Firefox by pHaez
//
function getPageSize(){
	
	var xScroll, yScroll;
	
	if (window.innerHeight && window.scrollMaxY) {	
		xScroll = document.body.scrollWidth;
		yScroll = window.innerHeight + window.scrollMaxY;
	} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
		xScroll = document.body.scrollWidth;
		yScroll = document.body.scrollHeight;
	} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
		xScroll = document.body.offsetWidth;
		yScroll = document.body.offsetHeight;
	}
	
	var windowWidth, windowHeight;
	if (self.innerHeight) {	// all except Explorer
		windowWidth = self.innerWidth;
		windowHeight = self.innerHeight;
	} else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
		windowWidth = document.documentElement.clientWidth;
		windowHeight = document.documentElement.clientHeight;
	} else if (document.body) { // other Explorers
		windowWidth = document.body.clientWidth;
		windowHeight = document.body.clientHeight;
	}	
	
	// for small pages with total height less then height of the viewport
	if(yScroll < windowHeight){
		pageHeight = windowHeight;
	} else { 
		pageHeight = yScroll;
	}

	// for small pages with total width less then width of the viewport
	if(xScroll < windowWidth){	
		pageWidth = windowWidth;
	} else {
		pageWidth = xScroll;
	}


	arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight) 
	return arrayPageSize;
}

//
// Shows the skin details
//
function showSkinBox(id, name, author, date, downloads, file, size, rating, votes, screenshot, canvote, minv) { 

  // prep objects
	var objOverlay = document.getElementById('overlay');
	var objSkinBox = document.getElementById('skinbox');
	var objCaption = document.getElementById('skinboxCaption');
	var objImage = document.getElementById('skinboxImage');
	var objLoadingImage = document.getElementById('loadingImage');
	var objSkinBoxDetails = document.getElementById('skinboxDetails');

	
	var arrayPageSize = getPageSize();
	var arrayPageScroll = getPageScroll();
  
  // center loadingImage if it exists
	if (objLoadingImage) {
		objLoadingImage.style.top = (arrayPageScroll[1] + ((arrayPageSize[3] - 35 - objLoadingImage.height) / 2) + 'px');
		objLoadingImage.style.left = (((arrayPageSize[0] - 20 - objLoadingImage.width) / 2) + 'px');
		objLoadingImage.style.display = 'block';
	}
  
  
	// set height of Overlay to take up whole page and show
	objOverlay.style.height = (arrayPageSize[1] + 'px');
	objOverlay.style.display = 'block';
      
	// preload image
	imgPreload = new Image();

	imgPreload.onload=function(){
    wd = imgPreload.width;
    if(wd>900) wd = 900;
    ht = imgPreload.height;
    //if(ht>700) ht = 700;
  
  
		objImage.src = screenshot;

		// center skinbox and make sure that the top and left values are not negative
		// and the image placed outside the viewport
		var skinboxTop = arrayPageScroll[1] + ((arrayPageSize[3] - 35 - ht) / 2);
		var skinboxLeft = ((arrayPageSize[0] - 20 - wd) / 2);
		
		objSkinBox.style.top = (skinboxTop < 0) ? "0px" : skinboxTop + "px";
		objSkinBox.style.left = (skinboxLeft < 0) ? "0px" : skinboxLeft + "px";
    
		objSkinBoxDetails.style.width = wd + 'px';
		    
    caption  = "<span class=\"skin-title\">"+name+"</span> by "+author+" - <span class=\"skin-date\">Last updated on "+date+"</span><br>"; 
    caption += "<i>Requires VLC "+minv+" or later</i><br>";
    caption += "<a class=\"skin-dl\" href=\"http://www1.videolan.org/vlc/download-skins2-go.php?url="+file+"\">Download</a> ("+size+") - <span class=\"skin-dls\">"+downloads+" Downloads</span><br>";
    caption += "<br>Rating: ";
        
    for( i=0; i<5; i++ )   {      
    
      v = 0;
      if((rating-i)>=1) {
        v = 10;
      }      
      else if((rating-i)>0) {         
         v = Math.round((rating-i)*10);
      }
      caption+= "<img alt='' src='http://images.videolan.org/vlc/skins2/cone-"+v+".png' />";
    }
    rating = Math.round(rating*100)/100;
    caption += " ("+rating+" with "+votes+" votes)<br>";        
    if(canvote==1) {      
      caption += "<form method=\"post\" action=\"skins.php\" style=\"display:inline;\"><div>"
      caption += "<input type=\"radio\" name=\"rating\" value=\"1\" id=\"rate_1_"+id+"\" />";
      caption += "<label for=\"rate_1_"+id+"\">1</label>"; 
      caption += "<input type=\"radio\" name=\"rating\" value=\"2\" id=\"rate_2_"+id+"\" />";
      caption += "<label for=\"rate_2_"+id+"\">2</label>"; 
      caption += "<input type=\"radio\" name=\"rating\" value=\"3\" id=\"rate_3_"+id+"\" />";
      caption += "<label for=\"rate_3_"+id+"\">3</label>"; 
      caption += "<input type=\"radio\" name=\"rating\" value=\"4\" id=\"rate_4_"+id+"\" />";
      caption += "<label for=\"rate_4_"+id+"\">4</label>"; 
      caption += "<input type=\"radio\" name=\"rating\" value=\"5\" id=\"rate_5_"+id+"\" />";
      caption += "<label for=\"rate_5_"+id+"\">5</label>"; 
      caption += "<input type=\"hidden\" name=\"skin_id\" value=\""+id+"\" />";
      caption += "&nbsp;<input type=\"submit\" value=\"Vote\" />";
      caption += "</div></form>";
    }
        
    objCaption.style.display = 'block';
    objCaption.innerHTML = caption;
		
		if (objLoadingImage) {	objLoadingImage.style.display = 'none'; }

		// Hide select boxes as they will 'peek' through the image in IE
		selects = document.getElementsByTagName("select");
        for (i = 0; i != selects.length; i++) {
                selects[i].style.visibility = "hidden";
        }
  
		objSkinBox.style.display = 'block';

		// After image is loaded, update the overlay height as the new image might have
		// increased the overall page height.
		arrayPageSize = getPageSize();
		objOverlay.style.height = (arrayPageSize[1] + 'px');

		return false;
  }
    imgPreload.src = screenshot;
}

function hideSkinBox() {
  // get objects
	objOverlay = document.getElementById('overlay');
	objSkinBox = document.getElementById('skinbox');

	// hide skinbox and overlay
	objOverlay.style.display = 'none';
	objSkinBox.style.display = 'none';

	// make select boxes visible
	selects = document.getElementsByTagName("select");
    for (i = 0; i != selects.length; i++) {
		selects[i].style.visibility = "visible";
	}
}

function initSkinBox() {
  var objBody = document.getElementsByTagName("body").item(0);

  var objOverlay = document.createElement("div");
	objOverlay.setAttribute('id','overlay');
	objOverlay.onclick = function () {hideSkinBox(); return false;}
	objOverlay.style.display = 'none';
	objOverlay.style.position = 'absolute';
	objOverlay.style.top = '0';
	objOverlay.style.left = '0';
	objOverlay.style.zIndex = '90';
 	objOverlay.style.width = '100%';
	objBody.insertBefore(objOverlay, objBody.firstChild);
  
  var arrayPageSize = getPageSize();
	var arrayPageScroll = getPageScroll();
  
  // preload and create loader image
	var imgPreloader = new Image();
	
	// if loader image found, create link to hide skinbox and create loadingimage
	imgPreloader.onload=function(){

		var objLoadingImageLink = document.createElement("a");
		objLoadingImageLink.setAttribute('href','#');
		objLoadingImageLink.onclick = function () {hideSkinBox(); return false;}
		objOverlay.appendChild(objLoadingImageLink);
		
		var objLoadingImage = document.createElement("img");
		objLoadingImage.src = loadingImage;
		objLoadingImage.setAttribute('id','loadingImage');
		objLoadingImage.style.position = 'absolute';
		objLoadingImage.style.zIndex = '150';
		objLoadingImageLink.appendChild(objLoadingImage);

		imgPreloader.onload=function(){};	//	clear onLoad, as IE will flip out w/animated gifs

		return false;
	}

	imgPreloader.src = loadingImage;

	// create skinbox div, same note about styles as above
	var objSkinBox = document.createElement("div");
	objSkinBox.setAttribute('id','skinbox');
	objSkinBox.style.display = 'none';
	objSkinBox.style.position = 'absolute';
	objSkinBox.style.zIndex = '100';	
	objBody.insertBefore(objSkinBox, objOverlay.nextSibling);
	
	// create link
	var objLink = document.createElement("a");
	objLink.setAttribute('href','#');
	objLink.setAttribute('title','Click to close');
	objLink.onclick = function () {hideSkinBox(); return false;}
	objSkinBox.appendChild(objLink);

	// preload and create close button image
	var imgPreloadCloseButton = new Image();

	// if close button image found, 
	imgPreloadCloseButton.onload=function(){

		var objCloseButton = document.createElement("img");
		objCloseButton.src = closeButton;
		objCloseButton.setAttribute('id','closeButton');
		objCloseButton.style.position = 'absolute';
		objCloseButton.style.zIndex = '200';
		objLink.appendChild(objCloseButton);

		return false;
	}

	imgPreloadCloseButton.src = closeButton;

	// create image
	var objImage = document.createElement("img");
	objImage.setAttribute('id','skinboxImage');
	objLink.appendChild(objImage);
	
	// create details div, a container for the caption and keyboard message
	var objSkinBoxDetails = document.createElement("div");
	objSkinBoxDetails.setAttribute('id','skinboxDetails');
	objSkinBox.appendChild(objSkinBoxDetails);

	// create caption
	var objCaption = document.createElement("div");
	objCaption.setAttribute('id','skinboxCaption');
	objCaption.style.display = 'none';
	objSkinBoxDetails.appendChild(objCaption);
}
