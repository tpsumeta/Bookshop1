var xmlHttp = createXmlHttpRequestObject();

function friend_process(eid,cuserid,userid,status)
{
  // only continue if xmlHttp isn't void
  var  myDiv = document.getElementById(eid);
  URL	=	"../_ajax/friend_request.php?eid=" + eid +"&cuserid="+cuserid+"&userid="+userid+"&status="+status;
//  alert(URL);
  myDiv.innerHTML = "<img src='../images/loading_button.gif'>";
  if (xmlHttp)
  {
    // try to connect to the server
    try
    {
      // initiate reading the async.txt file from the server
      xmlHttp.open("get", URL, true);
      xmlHttp.onreadystatechange =  function() {
//		  alert(myDiv);
//			alert(xmlHttp.status);
		  // display the status of the request 
		   if (xmlHttp.readyState == 4) 
		  {
			// continue only if HTTP status is "OK"
			if (xmlHttp.status == 200) 
			{
			  try
			  {
				// read the message from the server
				response = xmlHttp.responseText;
				// display the message 
				myDiv.innerHTML = response;
			  }
			  catch(e)
			  {
				// display error message
	//			alert("Error reading the response: " + e.toString());
			  }
			} 
			else
			{
			  // display status message
	//		  alert("There was a problem retrieving the data:\n" + 
	//				xmlHttp.statusText);
			}

		//	setTimeout("process();", updateInterval * 1000);     
		  }


	  } // end of if readystate

      xmlHttp.send(null);
    }
    // display the error in case of failure
    catch (e)
 
    {
//      alert("Can't connect to server:\n" + e.toString());
    }
  }

}
