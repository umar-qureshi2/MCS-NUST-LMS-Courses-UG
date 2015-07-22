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


    <meta name="keywords" content="moodle, CSE476-CSSP10: Assignment: Assignment # 5 " />
    <title>CSE476-CSSP10: Assignment: Assignment # 5</title>
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

<body  class="mod-assignment course-13 dir-ltr lang-en_utf8" id="mod-assignment-view">

<div id="page">

    <div id="header" class="clearfix">
      <h1 class="headermain">CSE-476 Human Computer Interfacing (Spring 2010)</h1>
      <div class="headermenu"><div class="navigation">
<ul><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"  onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="196" /><button type="submit" title="Previous activity"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;Previous activity</span></button></fieldset></form></li><li><form action="http://learn.mcs.edu.pk/course/jumpto.php" method="get"  id="navmenupopup" class="popupform"><div><select id="navmenupopup_jump" name="jump" onchange="self.location=document.getElementById('navmenupopup').jump.options[document.getElementById('navmenupopup').jump.selectedIndex].value;">
   <option value="http://learn.mcs.edu.pk/mod/forum/view.php?id=12" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/forum/icon.gif);">News forum</option>
   <optgroup label="Week 1">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=57" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Introduction to the course</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=61" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=62" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 1</option>
   </optgroup>   <optgroup label="Week 2">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=63" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=64" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 2</option>
   </optgroup>   <optgroup label="Week 3">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=65" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=66" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 3</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=79" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=610" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Assignment 1</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=85" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz1 14A</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=206" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz1-14A-Solution</option>
   </optgroup>   <optgroup label="Week 4">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=67" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 4a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=68" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 4b</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=69" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 4</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=80" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 2</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=611" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Assignment 2</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=82" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=612" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Assignment 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=86" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz1 14B</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=87" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz2 14A</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=207" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz1-14B-Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=208" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz2-14A-Solution</option>
   </optgroup>   <optgroup label="Week 5">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=70" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 5</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=71" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 5</option>
   </optgroup>   <optgroup label="Week 6">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=72" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 6</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=73" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 6</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=216" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz2-14B</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=217" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz2-14B-Solution</option>
   </optgroup>   <optgroup label="Week 7">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=74" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 7</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=75" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 7</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=89" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz3 14A</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=209" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz3-14A-Solution</option>
   </optgroup>   <optgroup label="Week 8">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=76" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 8</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=77" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 8</option>
   </optgroup>   <optgroup label="Week 9">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=94" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Mid-Term Exam</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=469" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Midterm Exam Solution</option>
   </optgroup>   <optgroup label="Week 10">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=97" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 9a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=98" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 9b</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=95" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 9</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=96" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 9a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=107" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Term Project</option>
   </optgroup>   <optgroup label="Week 11">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=134" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 10</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=135" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 10</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=145" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 10</option>
   </optgroup>   <optgroup label="Week 12">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=136" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 11</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=137" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 11</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=146" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 11</option>
   </optgroup>   <optgroup label="Week 13">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=147" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment # 4 Cognitive Walkthrough</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=613" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Assignment 4</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=196" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 12</option>
   </optgroup>   <optgroup label="Week 14">   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=197" selected="selected" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Jump to...</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=210" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz4-14A</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=211" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz4-14A-Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=212" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz3-14B</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=213" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Quiz3-14B-Solution</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=317" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 13 Dialog Notations</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=536" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 12</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=547" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">List of Heuristics</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=548" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">JabRef Reference Manager</option>
   </optgroup>   <optgroup label="Week 15">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=535" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Syllabus Final Exams</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=549" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lab 13</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=550" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 14a</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=551" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 14b</option>
   </optgroup>   <optgroup label="Week 16">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=552" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Trends in HCI</option>
   </optgroup>   <optgroup label="Week 17">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=637" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Final Exam</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=659" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Solution Final Exam</option>
    </optgroup></select><input type="hidden" name="sesskey" value="uZKfZhDjr0" /><div id="noscriptnavmenupopup" style="display: inline;"><input type="submit" value="Go" /></div><script type="text/javascript">
//<![CDATA[
document.getElementById("noscriptnavmenupopup").style.display = "none";
//]]>
</script></div></form></li><li><form action="http://learn.mcs.edu.pk/mod/resource/view.php"   onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="210" /><button type="submit" title="Next activity"><span class="accesshide " >Next activity&nbsp;</span><span class="arrow ">&#x25BA;</span></button></fieldset></form></li></ul>
</div></div>
    </div>
    <div class="navbar clearfix">
            <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/">MCS-LMS</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/course/view.php?id=13">CSE476-CSSP10</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/mod/assignment/index.php?id=13">Assignments</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> Assignment # 5</li></ul></div>
        <div class="navbutton">&nbsp;</div>
        </div>
    <!-- END OF HEADER -->
<div id="content">
<div class="reportlink"></div><div class="clearer"></div><div id="intro" class="box generalbox generalboxcontent boxaligncenter"><p><div style="text-align: center; text-decoration: underline;"><span style="font-family: arial,helvetica,sans-serif;">First Deliverable of <a class="resource autolink" title="Term Project" href="http://learn.mcs.edu.pk/mod/resource/view.php?r=60" >Term Project</a></span><br style="font-family: arial,helvetica,sans-serif;" /></div><br style="font-family: arial,helvetica,sans-serif;" /><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta content="Word.Document" name="ProgId" /><meta content="Microsoft Word 11" name="Generator" /><meta content="Microsoft Word 11" name="Originator" /><link href="file:///C:\DOCUME~1\ADMINI~1\LOCALS~1\Temp\msohtml1\01\clip_filelist.xml" rel="File-List" style="font-family: arial,helvetica,sans-serif;" /><!--[if gte mso 9]><xml><w:WordDocument><w:View>Normal</w:View><w:Zoom>0</w:Zoom><w:PunctuationKerning/><w:ValidateAgainstSchemas/><w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid><w:IgnoreMixedContent>false</w:IgnoreMixedContent><w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText><w:Compatibility><w:BreakWrappedTables/><w:SnapToGridInCell/><w:WrapTextWithPunct/><w:UseAsianBreakRules/><w:DontGrowAutofit/><w:UseFELayout/></w:Compatibility><w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState="false" LatentStyleCount="156"></w:LatentStyles></xml><![endif]--><style> &lt;!-- /* Font Definitions */ @font-face {font-family:Wingdings; panose-1:5 0 0 0 0 0 0 0 0 0; mso-font-charset:2; mso-generic-font-family:auto; mso-font-pitch:variable; mso-font-signature:0 268435456 0 0 -2147483648 0;} @font-face {font-family:&quot;MS Mincho&quot;; panose-1:2 2 6 9 4 2 5 8 3 4; mso-font-alt:&quot;ＭＳ 明朝&quot;; mso-font-charset:128; mso-generic-font-family:roman; mso-font-format:other; mso-font-pitch:fixed; mso-font-signature:1 134676480 16 0 131072 0;} @font-face {font-family:Batang; panose-1:2 3 6 0 0 1 1 1 1 1; mso-font-alt:바탕; mso-font-charset:129; mso-generic-font-family:auto; mso-font-format:other; mso-font-pitch:fixed; mso-font-signature:1 151388160 16 0 524288 0;} @font-face {font-family:&quot;\@MS Mincho&quot;; panose-1:0 0 0 0 0 0 0 0 0 0; mso-font-charset:128; mso-generic-font-family:roman; mso-font-format:other; mso-font-pitch:fixed; mso-font-signature:1 134676480 16 0 131072 0;} @font-face {font-family:&quot;\@Batang&quot;; panose-1:0 0 0 0 0 0 0 0 0 0; mso-font-charset:129; mso-generic-font-family:auto; mso-font-format:other; mso-font-pitch:fixed; mso-font-signature:1 151388160 16 0 524288 0;} /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal {mso-style-parent:&quot;&quot;; margin:0in; margin-bottom:.0001pt; mso-pagination:widow-orphan; font-size:12.0pt; font-family:&quot;Times New Roman&quot;; mso-fareast-font-family:&quot;MS Mincho&quot;; mso-fareast-language:JA;} @page Section1 {size:8.5in 11.0in; margin:1.0in 1.25in 1.0in 1.25in; mso-header-margin:.5in; mso-footer-margin:.5in; mso-paper-source:0;} div.Section1 {page:Section1;} /* List Definitions */ @list l0 {mso-list-id:1504660035; mso-list-type:hybrid; mso-list-template-ids:1347606676 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;} @list l0:level1 {mso-level-number-format:bullet; mso-level-text:; mso-level-tab-stop:.5in; mso-level-number-position:left; text-indent:-.25in; font-family:Symbol;} ol {margin-bottom:0in;} ul {margin-bottom:0in;} --&gt; </style><!--[if gte mso 10]><style> <br />
 /* Style Definitions */<br />
 table.MsoNormalTable<br />
	{mso-style-name:"Table Normal";<br />
	mso-tstyle-rowband-size:0;<br />
	mso-tstyle-colband-size:0;<br />
	mso-style-noshow:yes;<br />
	mso-style-parent:"";<br />
	mso-padding-alt:0in 5.4pt 0in 5.4pt;<br />
	mso-para-margin:0in;<br />
	mso-para-margin-bottom:.0001pt;<br />
	mso-pagination:widow-orphan;<br />
	font-size:10.0pt;<br />
	font-family:"Times New Roman";<br />
	mso-ansi-language:#0400;<br />
	mso-fareast-language:#0400;<br />
	mso-bidi-language:#0400;}<br /> </style><![endif]--><p class="MsoNormal" style="font-family: arial,helvetica,sans-serif;">This assignment constitutes a part of your project report. For your selected project theme, provide the following information:</p><p class="MsoNormal" style="font-family: arial,helvetica,sans-serif;"><o:p></o:p></p><ul type="disc" style="margin-top: 0in; font-family: arial,helvetica,sans-serif;"><li class="MsoNormal">Input and Output Devices</li><li class="MsoNormal">A sketch/image of how the system/machine would look like</li><li class="MsoNormal">User Centered Design features (First 5 only)</li></ul><p class="MsoNormal" style="font-family: arial,helvetica,sans-serif;"><o:p></o:p></p><p class="MsoNormal" style="font-family: arial,helvetica,sans-serif;"><o:p></o:p></p><p class="MsoNormal" style="font-family: arial,helvetica,sans-serif;">Since you will develop the same assignment into your project report, submit a SOFT COPY only.</p><br /> </p></div><div id="dates" class="box generalbox generalboxcontent boxaligncenter"><table><tr><td class="c0">Available from:</td>    <td class="c1">Friday,  21 May 2010, 10:00 AM</td></tr><tr><td class="c0">Due date:</td>    <td class="c1">Friday,  28 May 2010, 12:00 PM</td></tr></table></div>
</div> <!-- end div containerContent -->
<!-- START OF FOOTER -->
<div id="footer">
<p class="helplink"></p><div class="logininfo">You are currently using guest access (<a  href="http://learn.mcs.edu.pk/login/index.php">Login</a>)</div><div class="homelink"><a  href="http://learn.mcs.edu.pk/course/view.php?id=13">CSE476-CSSP10</a></div><!-- <p><div class="homelink"><a  href="/course/view.php?id=">  </a></div></p> -->
<p>
<!-- <<a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D197"><img src="http://learn.mcs.edu.pk/theme/chameleon/xhtml_1_0.gif" alt="XHTML Validator" /></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D197&amp;warning=1&amp;profile=css2&amp;usermedium=all"><img src="http://learn.mcs.edu.pk/theme/chameleon/css.gif" alt="CSS Validator" /></a> 
<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fassignment%2Fview.php%3Fid%3D197"><img src="http://learn.mcs.edu.pk/theme/chameleon/section_508.gif" alt="Section 508 Validator" /></a> -->
</p>
</div>
</div>
</body>
</html>
