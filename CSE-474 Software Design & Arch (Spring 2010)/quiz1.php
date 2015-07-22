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


    <meta name="keywords" content="moodle, CSE474-CSSP10: Quiz 1 " />
    <title>CSE474-CSSP10: Quiz 1</title>
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

<body  class="mod-quiz course-22 dir-ltr lang-en_utf8" id="mod-quiz-view">

<div id="page">

    <div id="header" class="clearfix">
      <h1 class="headermain">CSE-474 Software Design &amp; Arch (Spring 2010)</h1>
      <div class="headermenu"><div class="navigation">
<ul><li><form action="http://learn.mcs.edu.pk/mod/forum/view.php"  onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="36" /><button type="submit" title="Previous activity"><span class="arrow ">&#x25C4;</span><span class="accesshide " >&nbsp;Previous activity</span></button></fieldset></form></li><li><form action="http://learn.mcs.edu.pk/course/jumpto.php" method="get"  id="navmenupopup" class="popupform"><div><select id="navmenupopup_jump" name="jump" onchange="self.location=document.getElementById('navmenupopup').jump.options[document.getElementById('navmenupopup').jump.selectedIndex].value;">
   <option value="http://learn.mcs.edu.pk/mod/forum/view.php?id=36" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/forum/icon.gif);">News forum</option>
   <option value="http://learn.mcs.edu.pk/mod/quiz/view.php?id=349" selected="selected" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/quiz/icon.gif);">Jump to...</option>
   <option value="http://learn.mcs.edu.pk/mod/quiz/view.php?id=350" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/quiz/icon.gif);">Quiz # 2</option>
   <option value="http://learn.mcs.edu.pk/mod/quiz/view.php?id=351" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/quiz/icon.gif);">Quiz # 3</option>
   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=380" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 1</option>
   <option value="http://learn.mcs.edu.pk/mod/assignment/view.php?id=711" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/assignment/icon.gif);">Assignment 1</option>
   <optgroup label="Week 1">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=383" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 1</option>
   </optgroup>   <optgroup label="Week 3">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=381" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 2</option>
   </optgroup>   <optgroup label="Week 4">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=382" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 3</option>
   </optgroup>   <optgroup label="Week 6">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=384" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 4</option>
   </optgroup>   <optgroup label="Week 8">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=385" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 5</option>
   </optgroup>   <optgroup label="Week 10">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=386" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 6</option>
   </optgroup>   <optgroup label="Week 12">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=387" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 7</option>
   </optgroup>   <optgroup label="Week 14">   <option value="http://learn.mcs.edu.pk/mod/resource/view.php?id=636" style="background-image: url(http://learn.mcs.edu.pk/theme/chameleon/pix/mod/resource/icon.gif);">Lecture 8</option>
    </optgroup></select><input type="hidden" name="sesskey" value="uZKfZhDjr0" /><div id="noscriptnavmenupopup" style="display: inline;"><input type="submit" value="Go" /></div><script type="text/javascript">
//<![CDATA[
document.getElementById("noscriptnavmenupopup").style.display = "none";
//]]>
</script></div></form></li><li><form action="http://learn.mcs.edu.pk/mod/quiz/view.php"   onclick="this.target='_top';"><fieldset class="invisiblefieldset"><input type="hidden" name="id" value="350" /><button type="submit" title="Next activity"><span class="accesshide " >Next activity&nbsp;</span><span class="arrow ">&#x25BA;</span></button></fieldset></form></li></ul>
</div></div>
    </div>
    <div class="navbar clearfix">
            <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/">MCS-LMS</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/course/view.php?id=22">CSE474-CSSP10</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a  onclick="this.target='_top'" href="http://learn.mcs.edu.pk/mod/quiz/index.php?id=22">Quizzes</a></li><li> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> Quiz 1</li></ul></div>
        <div class="navbutton">&nbsp;</div>
        </div>
    <!-- END OF HEADER -->
<div id="content">
<table id="layout-table"><tr><td id="middle-column"><div><h2   class="main">Quiz 1</h2><div id="intro" class="generalbox box"><p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: center" align="center"><font face="Times New Roman"><place w:st="on"><placename w:st="on"><b style="mso-bidi-font-weight: normal"><u>MILITARY</u></b><b style="mso-bidi-font-weight: normal"><u><placetype w:st="on">COLLEGE</u></b><b style="mso-bidi-font-weight: normal"><u> OF SIGNALS <br />
  <p></p></u></b></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: center" align="center"><b style="mso-bidi-font-weight: normal"><u><font face="Times New Roman">QUIZ # 1 <br />
  <p></p></font></u></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: center" align="center"><b style="mso-bidi-font-weight: normal"><u><font face="Times New Roman">BESE-14 <br />
  <p></p></font></u></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: center" align="center"><b style="mso-bidi-font-weight: normal"><u><font face="Times New Roman">SOFTWARE DESIGN AND ARCHITECTURE <br />
  <p></p></font></u></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt; text-align: center" align="center"><b style="mso-bidi-font-weight: normal"><u><p><span style="text-decoration: none"><font face="Times New Roman"> </font></span></p></u></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><b style="mso-bidi-font-weight: normal"><font face="Times New Roman"><u>Instructor: Rabia Khan</u><span style="mso-tab-count: 3">                                 </span><span style="mso-spacerun: yes">                        </span><span style="mso-spacerun: yes">              </span><u>Time: 30 Mins <br />
  <p></p></u></font></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><b style="mso-bidi-font-weight: normal"><font face="Times New Roman"><span style="mso-tab-count: 3">                                    </span><span style="mso-spacerun: yes">                                      </span><span style="mso-tab-count: 3">                                  </span><span style="mso-spacerun: yes">  </span><u>Max Marks: 10</u><p></p></font></b></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><p><font face="Times New Roman"> </font></p></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><span lang="EN-GB" style="mso-ansi-language: en-gb"><p><font face="Times New Roman"> </font></p></span></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><span lang="EN-GB" style="mso-ansi-language: en-gb"><p><font face="Times New Roman"> </font></p></span></p><ol style="margin-top: 0in" type="1"><li class="MsoNormal" style="margin: 0in 0in 0pt; mso-list: l1 level1 lfo2; tab-stops: list .5in"><span lang="EN-GB" style="mso-ansi-language: en-gb"><font face="Times New Roman">You are required to draw a domain model for the following system. Do <i>not </i>invent any details additional to those given below: <br />
    <p></p></font></span></li></ol><p class="MsoNormal" style="margin: 0in 0in 0pt"><font face="Times New Roman"><b><span style="mso-tab-count: 1">            </span></b><span lang="EN-GB" style="mso-ansi-language: en-gb"><p></p></span></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt 0.25in"><font face="Times New Roman"><i><span lang="EN-GB" style="mso-ansi-language: en-gb">An employee has a name, address, phone number, date of birth and job title. Employees can be appointed and can leave a company and are either monthly paid employees or weekly paid employees. A company needs to keep track of current employees and previous employees. Monthly paid employees have a bank sort code and bank account number, while weekly paid employees are paid in cash on a specified day of the week - their payday. Weekly paid employees may be promoted to monthly paid.</span></i><span lang="EN-GB" style="mso-ansi-language: en-gb"><p></p></span></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt 0.25in"><font face="Times New Roman"><i><span lang="EN-GB" style="mso-ansi-language: en-gb">All employees are entitled to use the Sports Centre if they register to do so. The Sports Centre is made up of two gyms and a swimming pool. The lounge can be booked for special events, and has three rates of hire - a working hours' rate, an evening rate and a weekend rate. The Sports Centre holds a list of employees who have registered and should keep a check to prevent under-age swimming.</span></i><span lang="EN-GB" style="mso-ansi-language: en-gb"><p></p></span></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><font face="Times New Roman"><i><span lang="EN-GB" style="mso-ansi-language: en-gb"> </span></i><span lang="EN-GB" style="mso-ansi-language: en-gb"><p></p></span></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt; text-indent: 0.25in"><font face="Times New Roman">Use Information Expert pattern to assign these responsibilities to the objects:</font></p><p class="MsoNormal" style="margin: 0in 0in 0pt 0.5in; text-indent: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><font face="Times New Roman"><span style="mso-list: ignore">a)<span style="font: 7pt "times new roman"">      </span></span>Keep a check to prevent underage swimming </font></p><p class="MsoNormal" style="margin: 0in 0in 0pt 0.5in; text-indent: -0.25in; mso-list: l0 level1 lfo1; tab-stops: list .5in"><font face="Times New Roman"><span style="mso-list: ignore">b)<span style="font: 7pt "times new roman"">      </span></span>Find the total money earned by ALL employees. </font></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><p><font face="Times New Roman"> </font></p></p><p class="MsoNormal" style="margin: 0in 0in 0pt 0.25in"><font face="Times New Roman">Identify all the methods that give partial information to ensure this check. State the reasons for your decision.<span lang="EN-GB" style="mso-ansi-language: en-gb"><p></p></span></font></p><p class="MsoNormal" style="margin: 0in 0in 0pt"><p><font face="Times New Roman"> </font></p></p></div><div class="quizinfo"><p>Grading method: Highest grade</p></div><div id="notice" class="generalbox box"><p><p>Sorry, guests cannot see or attempt quizzes</p>

</p>Would you like to log in now with a full user account?</p></p><div class="buttons"><div class="singlebutton"><form action="http://learn.mcs.edu.pk/login/index.php" method="post"><div><input type="submit" value="Yes"   /></div></form></div><div class="singlebutton"><form action="http://learn.mcs.edu.pk/course/view.php?id=22" method="post"><div><input type="submit" value="No"   /></div></form></div></div></div></div></td></tr></table>
</div> <!-- end div containerContent -->
<!-- START OF FOOTER -->
<div id="footer">
<p class="helplink"></p><div class="logininfo">You are currently using guest access (<a  href="http://learn.mcs.edu.pk/login/index.php">Login</a>)</div><div class="homelink"><a  href="http://learn.mcs.edu.pk/course/view.php?id=22">CSE474-CSSP10</a></div><!-- <p><div class="homelink"><a  href="/course/view.php?id=">  </a></div></p> -->
<p>
<!-- <<a href="http://validator.w3.org/check?verbose=1&amp;ss=1&amp;uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fquiz%2Fview.php%3Fid%3D349"><img src="http://learn.mcs.edu.pk/theme/chameleon/xhtml_1_0.gif" alt="XHTML Validator" /></a>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fquiz%2Fview.php%3Fid%3D349&amp;warning=1&amp;profile=css2&amp;usermedium=all"><img src="http://learn.mcs.edu.pk/theme/chameleon/css.gif" alt="CSS Validator" /></a> 
<a href="http://www.contentquality.com/mynewtester/cynthia.exe?rptmode=-1&amp;url1=http%3A%2F%2Flearn.mcs.edu.pk%2Fmod%2Fquiz%2Fview.php%3Fid%3D349"><img src="http://learn.mcs.edu.pk/theme/chameleon/section_508.gif" alt="Section 508 Validator" /></a> -->
</p>
</div>
</div>
</body>
</html>
