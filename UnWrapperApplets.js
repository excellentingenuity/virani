var PTVParamStr = '\t You must have java enabled to view this tour.  Please visit www.java.com for a free download. \t';
var menu0360ParamStr = '\t';
var QTVRobjectParamStr = '\t';
var QTVRembedParamStr = '';
var menu0360ParamStr = '';

function addPTViewerParameter(Name,Value) {
	PTVParamStr = PTVParamStr + '<param name="' + Name + '" value="' + Value + '">\n\t';
}


function InsertPTVApplet(Name, Width, Height) {
  document.write('<applet code="ptviewer.class" name="' + Name + '" width="' + Width + '" height="' + Height +'">\n');
  document.write('<PARAM NAME="java_arguments" VALUE=" -Xms256m -Xmx256m " />\r\n');
  document.write(PTVParamStr + '\n');
  document.write('</applet>\n');
}


function addQTVRParameter(Name,Value) {
	QTVRobjectParamStr = QTVRobjectParamStr + '<param name="' + Name + '" value="' + Value + '">\n\t';
	QTVRembedParamStr = QTVRembedParamStr + Name + '="' + Value + '" ';
}

function InsertQTVR(Name, Width, Height) {
  document.write('<object name="' + Name + '" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" width="' + Width + '" height="' + Height +'">\n');
  document.write(QTVRobjectParamStr + '\n');
  document.write('<embed width="' + Width + '" height="' + Height + '" ' + QTVRembedParamStr + '>\n');
  document.write('</embed>\n');
  document.write('</object>\n');
}

function addMenu0360Parameter(Name,Value) {
	menu0360ParamStr = menu0360ParamStr + '<param name="' + Name + '" value="' + Value + '">\n\t';
}

function InsertMenu0360Applets(ViewerName,PTVWidth,PTVHeight,menu0360Height) {
  document.write('<applet code="ptviewer.class" name="' + ViewerName + '" width="' + PTVWidth+ '" height="' + PTVHeight +'">\n');
  document.write('<PARAM NAME="java_arguments" VALUE=" -Xms256m -Xmx256m " />\r\n');
  document.write(PTVParamStr + '\n');
  document.write('</applet><applet code="menu0360.class" width="' + PTVWidth+ '" height="' + menu0360Height +'">\n');
  document.write('<param name="attachwith" value="' + ViewerName + '">\n');
  document.write('<PARAM NAME="java_arguments" VALUE=" -Xms256m -Xmx256m " />\r\n');
  document.write(menu0360ParamStr);
  document.write('</applet>');
}