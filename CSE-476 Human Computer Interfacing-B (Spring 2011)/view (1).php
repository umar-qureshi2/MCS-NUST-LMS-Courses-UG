<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/standard/styles.php" />
<link rel="stylesheet" type="text/css" href="http://learn.mcs.edu.pk/theme/chameleon/styles.php" />
<script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/yahoo/yahoo-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/event/event-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/yui/connection/connection-min.js"></script><script type="text/javascript"  src="http://learn.mcs.edu.pk/lib/swfobject/swfobject.js"></script><script type="text/javascript">
  var flashversion = swfobject.getFlashPlayerVersion();
  YAHOO.util.Connect.asyncRequest('GET','http://learn.mcs.edu.pk/login/environment.php?sesskey=6eja18aH72&amp;flashversion='+flashversion.major+'.'+flashversion.minor+'.'+flashversion.release);
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


    <meta name="keywords" content="moodle, CSE476-CSSP11B: Assignment: Assignment#2 " />
    <title>CSE476-CSSP11B: Assignment: Assignment#2</title>
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
  if ( opener.document.forms['mform1'].text.createTextRange && opener.document.forms['mform1'].text.caretPos) {
    var caretPos = opener.document.forms['mform1'].text.caretPos;
    caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
  } else {
    opener.document.forms['mform1'].text.value  += text;
  }
  opener.document.forms['mform1'].text.focus();
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

<body  class="mod-assignment course-243 dir-ltr lang-en_utf8" id="mod-assignment-view">

<div id="page">

    <div id="header" class="clearfix">
      <h1 class="headermain">CSE-476 Human Computer Interfacing-B (Spring 2011)</h1>
      <div class="headermenu"><div class="navigation">
<ul><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"  onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="3918" /><button type="submit" title="Previous activity"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;Previous activity</span></button></fieldset></form></li><li><form action="http://learn.mcs.edu.pk/course/jumpto.php" method="get"  id="navmenupopup" class="popupform"><div><select id="navmenupopup_jump" name="jump" onchange="self.location=document.getElementById('navmenupopup').jump.options[document.getElementById('navmenupopup').jump.selectedIndex].value;">
   <option value="http://learn.mcs.edu.pk/mod/forum/view.php?id=2914" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/forum/icon.gif);">News forum</option>
   <optgroup label="Week 1">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3008" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Course Outline</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3003" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 1a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3132" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 1 - Fitts Law [10 Feb]</option>
   </optgroup>   <optgroup label="Week 2">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3004" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 1b</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3133" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab2 - UI Design [17 Feb]</option>
   </optgroup>   <optgroup label="Week 3">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3172" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 2a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3134" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab3 - UI Design [24 Feb]</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4313" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4314" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Soluion - Quiz 1</option>
   </optgroup>   <optgroup label="Week 4">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3233" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 4</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3282" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 2b</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=3319" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment #1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4678" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Assignment 1</option>
   </optgroup>   <optgroup label="Week 5">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3355" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 5</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3437" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 3a</option>
   </optgroup>   <optgroup label="Week 6">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3475" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 6</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3566" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 3b</option>
   </optgroup>   <optgroup label="Week 7">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3673" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 4</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3730" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 7</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=3731" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Lab 7</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4316" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4317" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Quiz 2</option>
   </optgroup>   <optgroup label="Week 8">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3715" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 8</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3839" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 5a</option>
   </optgroup>   <optgroup label="Week 9">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3838" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Midterm Exam</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3921" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Midterm Exam</option>
   </optgroup>   <optgroup label="Week 10">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3849" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 9</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3850" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">HTML Tutorial</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=3918" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 5b</option>
   </optgroup>   <optgroup label="Week 11">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=3917" selected="selected" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Jump to...</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4679" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Assignment 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4036" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 10</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4154" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 9a</option>
   </optgroup>   <optgroup label="Week 12">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4109" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 11</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4235" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 9b</option>
   </optgroup>   <optgroup label="Week 13">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4197" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 12</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4237" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Internationalization</option>
   </optgroup>   <optgroup label="Week 14">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4312" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 15</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4315" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4367" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Missing Lab Submissions</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4681" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz # 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4682" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Quiz#3</option>
   </optgroup>   <optgroup label="Week 15">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=4374" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment#3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4680" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution-Assignment 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4389" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 11</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4399" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 14</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4436" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 16a</option>
   </optgroup>   <optgroup label="Week 16">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4437" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 16b</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4444" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">HCI Lab Result (Sessional Marks)</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4484" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Group List</option>
   </optgroup>   <optgroup label="Week 17">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4540" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Chapter 16c</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4541" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">HCI - Trends</option>
   </optgroup>   <optgroup label="Week 18">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4561" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Sessional Marks</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4653" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">HCI Lab Result (Updated)</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=4737" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Final Award List</option>
    </optgroup></select><input type="hidden" name="sesskey" value="6eja18aH72" /><div id="noscriptnavmenupopup" style="display: inline;"><input type="submit" value="Go" /></div><script type="text/javascript">
//<![CDATA[
document.getElementById("noscriptnavmenupopup").style.display = "none";
//]]>
</script></div></form></li><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"   onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="4679" /><button type="submit" title="Next activity"><span class="accesshide " >Next activity&nbsp;</span><span class="arrow ">&#x25BA;</span></button></fieldset></form></li></ul>
</div></div>
    </div>
    <div class="navbar clearfix">
            <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/">MCS-LMS</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/course/view.php?id=243">CSE476-CSSP11B</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/mod/assignment/index.php?id=243">Assignments</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> Assignment#2</li></ul></div>
        <div class="navbutton">&nbsp;</div>
        </div>
    <!-- END OF HEADER -->
<div id="content">
<div class="reportlink"></div><div class="clearer"></div><div id="intro" class="box generalbox generalboxcontent boxaligncenter"><p><p align="center"><strong>Assignment # 2 </strong></p><p align="center"><strong>Human Computer Interfacing </strong></p><p align="center"><strong>BESE-15B </strong></p><p>You need to design a simple groupware that allows transfer of files between different users. A user may first create an account and add people to the friend list. The user may select any file on the local disk and send it to any of the friends online. If any of the two users loses connection, the file transfer is aborted and needs to be initiated again. </p><p>1. Show the hierarchical diagram for this groupware. </p><p>2. Show the network diagram. </p><p>3. Show the design of different screens and error/success messages. </p><p></p><p>Available from: 20-04-2011 </p><p>Due on: 29-04-2011 </p></p></div><div id="dates" class="box generalbox generalboxcontent boxaligncenter"><table><tr><td class="c0">Available from:</td>    <td class="c1">Wednesday,  20 April 2011, 01:10 PM</td></tr><tr><td class="c0">Due date:</td>    <td class="c1">Friday,  29 April 2011, 12:00 PM</td></tr></table></div>
</div> <!-- end div containerContent -->
<!-- START OF FOOTER -->
<div id="footer">
<p class="helplink"></p><div class="logininfo">You are currently using guest access (<a  href="http://learn.mcs.edu.pk/login/index.php">Login</a>)</div><div class="homelink"><a  href="http://learn.mcs.edu.pk/course/view.php?id=243">CSE476-CSSP11B</a></div><!-- <p><div class="homelink"><a  href="/course/view.php?id=">  </a></div></p> -->
<p>
<!-- <<a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D3917"><img src="http://learn.mcs.edu.pk/theme/chameleon/xhtml_1_0.gif" alt="XHTML Validator" /></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D3917&amp;warning=1&amp;profile=css2&amp;usermedium=all"><img src="http://learn.mcs.edu.pk/theme/chameleon/css.gif" alt="CSS Validator" /></a> 
<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D3917"><img src="http://learn.mcs.edu.pk/theme/chameleon/section_508.gif" alt="Section 508 Validator" /></a> -->
</p>
</div>
</div>
</body>
</html>
