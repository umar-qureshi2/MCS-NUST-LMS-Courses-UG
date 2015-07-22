<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/standard/styles.php" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/chameleon/styles.php" />
<script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/yahoo/yahoo-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/event/event-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/connection/connection-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/swfobject/swfobject.js"></script><script type="text/javascript">
  var flashversion = swfobject.getFlashPlayerVersion();
  YAHOO.util.Connect.asyncRequest('GET','http://learn.mcs.edu.pk/login/environment.php?sesskey=uZKfZhDjr0&amp;flashversion='+flashversion.major+'.'+flashversion.minor+'.'+flashversion.release);
</script>
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/standard/styles_ie7.css" />
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/standard/styles_ie6.css" />
<![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/chameleon/styles_ie7.css" />
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/chameleon/styles_ie6.css" />
<![endif]-->


    <meta name="keywords" content="moodle, EEFL10EE-481: Assignment: Assignment1-Steganography " />
    <title>EEFL10EE-481: Assignment: Assignment1-Steganography</title>
    <link rel="shortcut icon" href="http://learn.mcs.edu.pk/theme/chameleon/favicon.ico" />

        <!--<style type="text/css">/*<![CDATA[*/ body{behavior:url(http://learn.mcs.edu.pk/lib/csshover.htc);} /*]]>*/</style>-->

<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/javascript-static.js"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/javascript-mod.php"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/overlib/overlib.js"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/overlib/overlib_cssstyle.js"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/cookies.js"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/ufo.js"></script>
<script type="text/javascript" src="http://learn.mcs.edu.pk/lib/dropdown.js"></script>  

<script type="text/javascript" defer="defer">
//<![CDATA[
setTimeout('fix_column_widths()', 20);
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
function openpopup(url, name, options, fullscreen) {
    var fullurl = "http://learn.mcs.edu.pk" + url;
    var windowobj = window.open(fullurl, name, options);
    if (!windowobj) {
        return true;
    }
    if (fullscreen) {
        windowobj.moveTo(0, 0);
        windowobj.resizeTo(screen.availWidth, screen.availHeight);
    }
    windowobj.focus();
    return false;
}

function uncheckall() {
    var inputs = document.getElementsByTagName('input');
    for(var i = 0; i < inputs.length; i++) {
        inputs[i].checked = false;
    }
}

function checkall() {
    var inputs = document.getElementsByTagName('input');
    for(var i = 0; i < inputs.length; i++) {
        inputs[i].checked = true;
    }
}

function inserttext(text) {
  text = ' ' + text + ' ';
  if ( opener.document.forms['theform'].message.createTextRange && opener.document.forms['theform'].message.caretPos) {
    var caretPos = opener.document.forms['theform'].message.caretPos;
    caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
  } else {
    opener.document.forms['theform'].message.value  += text;
  }
  opener.document.forms['theform'].message.focus();
}

function getElementsByClassName(oElm, strTagName, oClassNames){
	var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName);
	var arrReturnElements = new Array();
	var arrRegExpClassNames = new Array();
	if(typeof oClassNames == "object"){
		for(var i=0; i<oClassNames.length; i++){
			arrRegExpClassNames.push(new RegExp("(^|\\s)" + oClassNames[i].replace(/\-/g, "\\-") + "(\\s|$)"));
		}
	}
	else{
		arrRegExpClassNames.push(new RegExp("(^|\\s)" + oClassNames.replace(/\-/g, "\\-") + "(\\s|$)"));
	}
	var oElement;
	var bMatchesAll;
	for(var j=0; j<arrElements.length; j++){
		oElement = arrElements[j];
		bMatchesAll = true;
		for(var k=0; k<arrRegExpClassNames.length; k++){
			if(!arrRegExpClassNames[k].test(oElement.className)){
				bMatchesAll = false;
				break;
			}
		}
		if(bMatchesAll){
			arrReturnElements.push(oElement);
		}
	}
	return (arrReturnElements)
}
//]]>
</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22878531-2']);
  _gaq.push(['_setDomainName', '.mcs.edu.pk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script
</head>

<body  class="mod-assignment course-106 dir-ltr lang-en_utf8" id="mod-assignment-view">

<div id="page">

    <div id="header" class="clearfix">
      <h1 class="headermain">EE-481 Digital Image Processing (Fall 2010)</h1>
      <div class="headermenu"><div class="navigation">
<ul><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"  onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="967" /><button type="submit" title="Previous activity"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;Previous activity</span></button></fieldset></form></li><li><form action="http://learn.mcs.edu.pk/course/jumpto.php" method="get"  id="navmenupopup" class="popupform"><div><select id="navmenupopup_jump" name="jump" onchange="self.location=document.getElementById('navmenupopup').jump.options[document.getElementById('navmenupopup').jump.selectedIndex].value;">
   <option value="http://learn.mcs.edu.pk/mod/forum/view.php?id=805" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/forum/icon.gif);">News forum</option>
   <optgroup label="Week 1">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=911" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Introduction to the Course</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=912" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">1A-Introduction to DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=913" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">1B-Introduction to DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=921" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">2A - Fundamentals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=920" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 2 - DIP BOOK 2nd Edn.</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=914" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=968" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab1a</option>
   </optgroup>   <optgroup label="Week 2">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=986" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">2B-Fundamentals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1008" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">2C - Fundamentals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=967" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 2</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=1029" selected="selected" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Jump to...</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2069" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Assignment 1</option>
   </optgroup>   <optgroup label="Week 3">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1238" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">2D - Fundamentals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1078" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab-03</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1200" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 1 - BESE 13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1201" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Quiz 1 - BESE 13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1202" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 1 - BESE 14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1203" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Quiz 1 - BESE 14</option>
   </optgroup>   <optgroup label="Week 4">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1239" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">3A-Intensity Transformations</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1230" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 4</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1299" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Term Projects for BESE 14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1316" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 2 - BESE 13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1317" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Quiz 2-BESE 13</option>
   </optgroup>   <optgroup label="Week 5">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1367" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">3B - Intensity Transformations</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1368" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Basics of Probability</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1382" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 5</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1430" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 3 - DIP Book 2nd Edn</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1468" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz2- DIP:BESE 14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1469" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution: Quiz 2 - DIP:BESE 14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1799" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE-13: Lab Quiz-01 Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1800" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE-14a: Lab Quiz-01 Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1801" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE-14b: Lab Quiz-01 Solution</option>
   </optgroup>   <optgroup label="Week 6">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1568" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">3C - Spatial Filtering</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1644" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">3D - Spatial Filtering</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1431" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BOOK: Image Processing in C</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1432" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BOOK: OpenCV</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1433" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">OpenCV Online Manual</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1577" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 06 DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1862" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE-13: Lab Quiz-02 Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1863" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE-14&amp;b: Lab Quiz-02 Solution</option>
   </optgroup>   <optgroup label="Week 7">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1818" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">9A - Morphological Image Processing</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1709" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 07</option>
   </optgroup>   <optgroup label="Week 8">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1816" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">MidTerm Exam</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1817" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution - MidTerm</option>
   </optgroup>   <optgroup label="Week 10">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1907" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">9B-Morphological Image Processing</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1903" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 08 DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1960" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">9C - Morphological Image Processing</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2071" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz3-DIP BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2072" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution: Quiz3-DIP BESE14</option>
   </optgroup>   <optgroup label="Week 11">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1987" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">10A-Image Segmentation</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2004" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab-09</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2059" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 4 - DIP BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2060" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution: Quiz4-DIP BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2065" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz4-DIP BESE13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2066" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution:Quiz4-DIP BESE13</option>
   </optgroup>   <optgroup label="Week 12">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=2070" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 02 - Clustering</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2538" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution - Assginment 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2139" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">10B-Image Segmentation</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2211" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">A-Pattern Recognition</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2168" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 10 DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2267" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Kmeans Function</option>
   </optgroup>   <optgroup label="Week 13">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2300" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 11 Dip</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2318" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">B-Pattern Recognition</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2423" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">8A- Image Compression</option>
   </optgroup>   <optgroup label="Week 14">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2393" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 12 DIP</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2424" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">8B - Image Compression</option>
   </optgroup>   <optgroup label="Week 15">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2574" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">8C-Video Compression</option>
   </optgroup>   <optgroup label="Week 16">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=2526" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 3 - Huffman Encoding</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2736" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Assignment3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2588" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">6-Color Image Processing</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2589" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Representation of Objects - Features</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2733" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz5-DIP:BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2734" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Quiz5-DIP:BESE14</option>
   </optgroup>   <optgroup label="Week 17">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2644" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE13 Sessionals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2645" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE14A-Sessionals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2646" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">BESE14B-Sessionals</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2726" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Image Processing in Frequency Domain</option>
   </optgroup>   <optgroup label="Week 18">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2799" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Final Exam - BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2800" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Final Exam - BESE13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2802" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution:Final Exam-BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2803" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Final Exam-BESE13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2809" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Marks-Final Exam-BESE14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2812" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Final Exam Marks-BESE13</option>
    </optgroup></select><input type="hidden" name="sesskey" value="uZKfZhDjr0" /><div id="noscriptnavmenupopup" style="display: inline;"><input type="submit" value="Go" /></div><script type="text/javascript">
//<![CDATA[
document.getElementById("noscriptnavmenupopup").style.display = "none";
//]]>
</script></div></form></li><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"   onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="2069" /><button type="submit" title="Next activity"><span class="accesshide " >Next activity&nbsp;</span><span class="arrow ">&#x25BA;</span></button></fieldset></form></li></ul>
</div></div>
    </div>
    <div class="navbar clearfix">
            <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/">MCS-LMS</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/course/view.php?id=106">EEFL10EE-481</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/mod/assignment/index.php?id=106">Assignments</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> Assignment1-Steganography</li></ul></div>
        <div class="navbutton">&nbsp;</div>
        </div>
    <!-- END OF HEADER -->
<div id="content">
<div class="reportlink"></div><div class="clearer"></div><div id="intro" class="box generalbox generalboxcontent boxaligncenter"><p><p align="center"><strong><u><font color="#990000">Assignnment 1 </font></u></strong></p><p align="center"><strong>EE 481 Digital Image Processing </strong></p><p align="center"><strong>BESE 13 &amp; 14 </strong></p><p align="justify">You need to transmit an 8-bit gray scale image hiding it in a 3-channel colored image. As an example, you may consider the following images (You can load them directly in Matlab) : </p><p>1. ‘cameraman.tif’ </p><p>2. ‘saturn.png’ </p><p><table cellspacing="1" cellpadding="1" width="100%" border="1"><tbody><tr><td valign="top" width="50%"><p align="center"><img title="cameraman" height="256" alt="cameraman" hspace="0" src="http://learn.mcs.edu.pk/file.php/106/cameraman.jpg" width="256" border="0" /></p></td><td valign="top" width="50%"><p align="center"><img title="saturn" height="350" alt="saturn" hspace="0" src="http://learn.mcs.edu.pk/file.php/106/saturn.jpg" width="300" border="0" /></p></td></tr><tr><td valign="top" width="50%"><p align="center">'cameraman.tif'</p></td><td valign="top" width="50%"><p align="center">'saturn.png'</p></td></tr></tbody></table></p><p>The image ‘cameraman.tif’ is an 8-bit gray scale while ‘saturn.png’ is a colored image. You need to send 2 bits of the gray image in the <strong><i>red</i></strong> channel, 2 bits in the <strong><i>green</i></strong> channel and 2 in the <strong><i>blue</i></strong> channel of the colored image. So in total you will be sending the 6 out of 8 bits from the gray scale image (Of course you will keep the most significant 6 bits). </p><p align="justify"><strong><font color="#990000">Tasks </font></strong></p><ul><li><div align="justify">Write a small program in Matlab to hide the gray image in the colored image as already discussed. </div></li></ul><ul><li><div align="justify">Once encoded, add statements to your program to extract the gray image from the colored image. </div></li></ul><ul><li><div align="justify">Display the original, encoded and extracted images in your program. </div></li></ul><p align="justify"><strong><font color="#990000">Submission Requirement</font></strong></p><ul><li><div align="justify">Submit the Matlab source file. </div></li></ul><p align="justify"><strong><font color="#990000">Submission Deadline</font></strong></p><ul><li><div align="justify"><strong>Tuesday, October 12th, 2010 </strong></div></li></ul><p align="justify"><strong><font color="#990000">Hints </font></strong></p><ul><li><div align="justify">Resize the gray image to the same size as the colored image. </div></li><li><div align="justify">Consider the colored image as three separate images and extract the R,G and B matrices as : </div><ul><li><div align="justify"><font face="courier new,courier,monospace" size="2">R=I(:,:,1); </font></div></li><li><div align="justify"><font face="courier new,courier,monospace" size="2">G=I(:,:,2); </font></div></li><li><div align="justify"><font face="courier new,courier,monospace" size="2">B=I(:,:,3); </font></div></li></ul></li><li><div align="justify">Encode 2-bits in each of R,G and B. </div></li><li><div align="justify">Form a colored image from encoded R,G and B. </div><ul><li><div align="justify"><font face="courier new,courier,monospace" size="2">EncodedImage(:,:,1)=REncoded; </font></div></li><li><div align="justify"><font face="courier new,courier,monospace" size="2">EncodedImage(:,:,2)=GEncoded; </font></div></li><li><div align="justify"><font face="courier new,courier,monospace" size="2">EncodedImage(:,:,3)=BEncoded;</font></div></li></ul></li><li><div align="justify">Exract the 2-bits from each channel and form the 6 bit image. </div></li><li><div align="justify">Useful functions : </div><ul><li><div align="justify"><strong><i>imresize, bitshift, bitor, bitand </i></strong></div></li></ul></li></ul></p></div><div id="dates" class="box generalbox generalboxcontent boxaligncenter"><table><tr><td class="c0">Available from:</td>    <td class="c1">Saturday, 2 October 2010, 07:55 PM</td></tr><tr><td class="c0">Due date:</td>    <td class="c1">Tuesday,  12 October 2010, 11:55 PM</td></tr></table></div>
</div> <!-- end div containerContent -->
<!-- START OF FOOTER -->
<div id="footer">
<p class="helplink"></p><div class="logininfo">You are currently using guest access (<a  href="http://learn.mcs.edu.pk/login/index.php">Login</a>)</div><div class="homelink"><a  href="http://learn.mcs.edu.pk/course/view.php?id=106">EEFL10EE-481</a></div><!-- <p><div class="homelink"><a  href="/course/view.php?id=">  </a></div></p> -->
<p>
<!-- <<a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1029"><img src="http://learn.mcs.edu.pk/theme/chameleon/xhtml_1_0.gif" alt="XHTML Validator" /></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1029&amp;warning=1&amp;profile=css2&amp;usermedium=all"><img src="http://learn.mcs.edu.pk/theme/chameleon/css.gif" alt="CSS Validator" /></a> 
<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1029"><img src="http://learn.mcs.edu.pk/theme/chameleon/section_508.gif" alt="Section 508 Validator" /></a> -->
</p>
</div>
</div>
</body>
</html>
