function createXmlHttpRequestObject() 
{
  // will store the reference to the XMLHttpRequest object
  var xmlHttp;
  // this should work for all browsers except IE6 and older
  try
  {
    // try to create XMLHttpRequest object
    xmlHttp = new XMLHttpRequest();
  }
  catch(e)
  {
    // assume IE6 or older
    var XmlHttpVersions = new Array("MSXML2.XMLHTTP.6.0",
                                    "MSXML2.XMLHTTP.5.0",
                                    "MSXML2.XMLHTTP.4.0",
                                    "MSXML2.XMLHTTP.3.0",
                                    "MSXML2.XMLHTTP",
                                    "Microsoft.XMLHTTP");
    // try every prog id until one works
    for (var i=0; i<XmlHttpVersions.length && !xmlHttp; i++) 
    {
      try 
      { 
        // try to create XMLHttpRequest object
        xmlHttp = new ActiveXObject(XmlHttpVersions[i]);
      } 
      catch (e) {}
    }
  }
  // return the created object or display an error message
  if (!xmlHttp)
    alert("Error creating the XMLHttpRequest object.");
  else 
    return xmlHttp;
}

function showdeadcenterdiv(Xwidth,Yheight,divid) {
	// First, determine how much the visitor has scrolled

	var scrolledX, scrolledY;
	if( self.pageYOffset ) {
	scrolledX = self.pageXOffset;
	scrolledY = self.pageYOffset;
	} else if( document.documentElement && document.documentElement.scrollTop ) {
	scrolledX = document.documentElement.scrollLeft;
	scrolledY = document.documentElement.scrollTop;
	} else if( document.body ) {
	scrolledX = document.body.scrollLeft;
	scrolledY = document.body.scrollTop;
	}

	// Next, determine the coordinates of the center of browser's window

	var centerX, centerY;
	if( self.innerHeight ) {
	centerX = self.innerWidth;
	centerY = self.innerHeight;
	} else if( document.documentElement && document.documentElement.clientHeight ) {
	centerX = document.documentElement.clientWidth;
	centerY = document.documentElement.clientHeight;
	} else if( document.body ) {
	centerX = document.body.clientWidth;
	centerY = document.body.clientHeight;
	}

	// Xwidth is the width of the div, Yheight is the height of the
	// div passed as arguments to the function:
	var leftOffset = scrolledX + (centerX - Xwidth) / 2;
	var topOffset = scrolledY + (centerY - Yheight) / 2;
	// The initial width and height of the div can be set in the
	// style sheet with display:none; divid is passed as an argument to // the function
	var o=document.getElementById(divid);
	var r=o.style;
	r.position='absolute';
	r.top = topOffset + 'px';
	r.left = leftOffset + 'px';
	r.display = "block";
} 
