var idx = "";

function getQueryString(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
      return "na";
}


function InsertApplets(AppletWidth, PTViewerHeight, menu0360Height)
{
  document.write('<applet code="ptviewer.class" name="viewer" width="' + AppletWidth + '" height="' + PTViewerHeight +'">\r\n');
  document.write('<param name="java_arguments" value=" -Xms256m -Xmx256m " />\r\n');
  document.write('You must have java enabled to view this tour.  Please visit <a href="http://www.java.com">www.java.com</a> for a free java download');
  document.write('</applet><applet code="menu0360.class" width="' + AppletWidth + '" height="' + menu0360Height + '">\r\n');
  document.write('<param name="attachwith" value="viewer" />\r\n');
  document.write('<param name="java_arguments" value=" -Xms256m -Xmx256m " />\r\n');
  idx = getQueryString("idx");
    if (   (idx.toLowerCase() == "true") || (idx.toLowerCase() == "yes")    ) {
        document.write('<param name="idx" value="yes" />\r\n');
     }
  document.write('</applet>\r\r\n');
}

