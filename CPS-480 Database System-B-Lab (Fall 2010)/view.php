<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/standard/styles.php" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/chameleon/styles.php" />
<script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/yahoo/yahoo-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/event/event-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/connection/connection-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/swfobject/swfobject.js"></script><script type="text/javascript">
  var flashversion = swfobject.getFlashPlayerVersion();
  YAHOO.util.Connect.asyncRequest('GET','http://learn.mcs.edu.pk/login/environment.php?sesskey=51Ob0HgrxT&amp;flashversion='+flashversion.major+'.'+flashversion.minor+'.'+flashversion.release);
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


    <meta name="keywords" content="moodle, CPS480-CSFL10B-Lab: Assignment: Creating and Linking Tables - Assignment " />
    <title>CPS480-CSFL10B-Lab: Assignment: Creating and Linking Tables - Assignment</title>
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

<body  class="mod-assignment course-163 dir-ltr lang-en_utf8" id="mod-assignment-view">

<div id="page">

    <div id="header" class="clearfix">
      <h1 class="headermain">CPS-480 Database System-B-Lab (Fall 2010)</h1>
      <div class="headermenu"><div class="navigation">
<ul><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"  onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="1866" /><button type="submit" title="Previous activity"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;Previous activity</span></button></fieldset></form></li><li><form action="http://learn.mcs.edu.pk/course/jumpto.php" method="get"  id="navmenupopup" class="popupform"><div><select id="navmenupopup_jump" name="jump" onchange="self.location=document.getElementById('navmenupopup').jump.options[document.getElementById('navmenupopup').jump.selectedIndex].value;">
   <option value="http://learn.mcs.edu.pk/mod/forum/view.php?id=1781" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/forum/icon.gif);">News forum</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2255" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Project</option>
   <optgroup label="Week 1">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1806" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Introduction to Oracle 9i SQL</option>
   </optgroup>   <optgroup label="Week 2">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1783" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">SQL - Data Retrieval</option>
   </optgroup>   <optgroup label="Week 3">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1784" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Single Row Function</option>
   </optgroup>   <optgroup label="Week 4">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1785" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Single &amp; Multiple Row Functions</option>
   </optgroup>   <optgroup label="Week 5">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1803" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">SQL-Joins</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1807" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 1</option>
   </optgroup>   <optgroup label="Week 6">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1804" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Subquries</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1809" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1811" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 1 Soln.</option>
   </optgroup>   <optgroup label="Week 7">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1805" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">DML - DDL</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1810" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz II soln.</option>
   </optgroup>   <optgroup label="Week 10">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1866" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Creating and Linking Tables - Assignment</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=1867" selected="selected" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Jump to...</option>
   </optgroup>   <optgroup label="Week 11">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1979" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Exam Paper</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=1980" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution</option>
   </optgroup>   <optgroup label="Week 12">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2182" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 10</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2183" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Form Building Basics</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2396" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Midterm Exam</option>
   </optgroup>   <optgroup label="Week 13">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2292" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Assignment</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2335" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 11</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2336" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 11</option>
   </optgroup>   <optgroup label="Week 14">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=2355" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">PL SQL</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2381" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">PL SQL</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2382" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Oracle Forms</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2384" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=2385" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 3 Solution</option>
    </optgroup></select><input type="hidden" name="sesskey" value="51Ob0HgrxT" /><div id="noscriptnavmenupopup" style="display: inline;"><input type="submit" value="Go" /></div><script type="text/javascript">
//<![CDATA[
document.getElementById("noscriptnavmenupopup").style.display = "none";
//]]>
</script></div></form></li><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"   onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="1979" /><button type="submit" title="Next activity"><span class="accesshide " >Next activity&nbsp;</span><span class="arrow ">&#x25BA;</span></button></fieldset></form></li></ul>
</div></div>
    </div>
    <div class="navbar clearfix">
            <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/">MCS-LMS</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/course/view.php?id=163">CPS480-CSFL10B-Lab</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/mod/assignment/index.php?id=163">Assignments</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> Creating and Linking Tables - Assignment</li></ul></div>
        <div class="navbutton">&nbsp;</div>
        </div>
    <!-- END OF HEADER -->
<div id="content">
<div class="reportlink"></div><div class="clearer"></div><div id="intro" class="box generalbox generalboxcontent boxaligncenter"><p>Table creation and linking - Practice </p></div><div id="dates" class="box generalbox generalboxcontent boxaligncenter"><table><tr><td class="c0">Available from:</td>    <td class="c1">Tuesday,  23 November 2010, 10:45 AM</td></tr><tr><td class="c0">Due date:</td>    <td class="c1">Wednesday,  24 November 2010, 11:55 PM</td></tr></table></div>
</div> <!-- end div containerContent -->
<!-- START OF FOOTER -->
<div id="footer">
<p class="helplink"></p><div class="logininfo">You are currently using guest access (<a  href="http://learn.mcs.edu.pk/login/index.php">Login</a>)</div><div class="homelink"><a  href="http://learn.mcs.edu.pk/course/view.php?id=163">CPS480-CSFL10B-Lab</a></div><!-- <p><div class="homelink"><a  href="/course/view.php?id=">  </a></div></p> -->
<p>
<!-- <<a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1867"><img src="http://learn.mcs.edu.pk/theme/chameleon/xhtml_1_0.gif" alt="XHTML Validator" /></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1867&amp;warning=1&amp;profile=css2&amp;usermedium=all"><img src="http://learn.mcs.edu.pk/theme/chameleon/css.gif" alt="CSS Validator" /></a> 
<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D1867"><img src="http://learn.mcs.edu.pk/theme/chameleon/section_508.gif" alt="Section 508 Validator" /></a> -->
</p>
</div>
</div>
</body>
</html>