<?php
// Request selected language - by Ciprian
$hl = (isset($_POST["hl"])) ? $_POST["hl"] : false;
if(!defined("L_LANG") || L_LANG == "L_LANG")
{
	if($hl) define("L_LANG", $hl);

	// You need to tell the class which language do you use.
	// L_LANG should be defined as en_US format!!! Next line is an example, just put your own language from the provided list on the line below and uncomment the line
#	else define("L_LANG", "ar_AE");
}
// START OF: Needed for the manual Language selector - not needed if you pass the LANG from your own script
$langs='calendar/lang/';
$langfiles = opendir($langs); #open directory
	$i = 0;
	while (false !== ($langfile = readdir($langfiles)))
	{
		if (!stristr($langfile,"html") && !stristr($langfile,"localization") && !stristr($langfile,"xx_YY") && $langfile!=='.' && $langfile!=='..')
		{
			$hlf=str_replace("calendar.","",$langfile);
			$hlf=str_replace(".","",$hlf);
			$hlf=str_replace("php","",$hlf);
			$langsfile[]=$hlf;
	 		$i++;
		}
	}
	if ($langsfile)
	{
		array_push($langsfile, "en_US");
	  	natsort($langsfile);
	}
closedir($langfiles);
// END OF: Needed for the manual Language selector - not needed if you pass the LANG from your own script
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Localized PHP DatePicker Calendar - &copy; Triconsole</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<?php
require_once('calendar/tc_calendar.php');
?>
<style type="text/css">
body, input, select { font-size: 13px; font-family: "Verdana", /*"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans",*/ sans-serif; }

pre { font-size: 13px; font-family: "Verdana", /*"Consolas", "Menlo", "Monaco", "Lucida Console", "Liberation Mono", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Courier New",*/ monospace, serif; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color: #FF0000; }
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<h2><a href="http://www.triconsole.com/php/calendar_datepicker.php" target="_blank">PHP - Calendar, DatePicker Calendar - Original English version</a></h2>
<pre>- Credits go to TJ, the original Calendar Datepicker class developer on <a href="http://www.triconsole.com" target="_blank">http://www.triconsole.com</a> -</pre>
<h3><a href="http://www.triconsole.com/php/calendar_datepicker.php" target="_blank">Check-out the main support page on triconsole.com</a></h3>
<h2><a href="http://ciprianmp.com/scripts/calendar" target="_blank">PHP - Calendar, DatePicker Calendar - Localized version</a></h2>
<pre>- Credits go to <a href="mailto:ciprianmp@yahoo.com?subject=Localized%20Calendar%20Class%20feedback" target="_blank">Ciprian Murariu</a>, with the kind help of <a href="http://ciprianmp.com/plus/" target="_blank">phpMyChat-Plus</a> translators, based on <b><font color=red>3.75</font></b> version of TJ's class above -</pre>
<h3><a href="http://ciprianmp.com/scripts/calendar/calendar_localized.zip" target="_blank">Download this multi-language version here.</a> <a href="calendar/change_log.txt" target="_blank">Read what's new...</a></h3>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/<?php echo(str_replace("sr_CS","sr_RS",str_replace("es_AR","es_ES",str_replace("ar_AE","ar_AR",L_LANG)))); ?>/all.js#xfbml=1&appId=674148172599839";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
		<tr>
		  <td colspan=2><b>Available in 43 languages and dialects:</b> Arabian, Argentinian Spanish, Armenian, Brasilian Portuguese, Bulgarian, Catalan, Chinese (Simplified and Traditional), Czech, Danish, Deutch, Dutch, English (US & GB), Farsi (Persian), Finnish, French, Greek, Hebrew, Hindi (Devanagari), Hungarian, Indonesian (Bahasa Indonesia), Italian, Japanese, Korean, Lithuanian, Macedonian, Malaysian (Bahasa Melayu), Norwegian (Bokmål & Nynorsk), Polish, Portuguese, Romanian, Russian, Serbian (Latin), Slovak, Spanish, Swedish, Thai, Turkish, Ukrainean, Vietnamese, Yoruba (and counting...)<br />
		  Here is a plain <a href="sample.php">Greek Sample!</a> and here is the <a href="sample.txt" target="blank">Sample source</a>
		  </td>
		</tr>
		<tr>
		  <td colspan=2><h3><i><font color=green>Can't find your language on this list? Download <a href="calendar.xx_YY.zip" target=_blank>this template</a>, translate and send it to Ciprian by <a href="mailto:ciprianmp@yahoo.com?subject=Calendar%20Class%20localization" target="_blank">email</a>!</font></i></h3>
		  </td>
		</tr>
		<tr>
			<td>
				<div class="fb-like" data-href="https://www.facebook.com/DatePicker" data-send="true" data-width="600" data-show-faces="false" data-font="tahoma" ref="loc_distr_index"></div>
			</td>
		</tr>
        <tr>
          <td><h3>Demo:</h3>
            <form name="form1" method="post" action="">
              <table border="0" cellspacing="0" cellpadding="2">
<!-- START OF: Needed for the manual Language selector - not needed if you pass the LANG from your own script -->
			  <tr>
                  <td nowrap>Select language : </td>
		<td valign=top>
        <input name="hl" type="hidden" id="hl" value="<?php echo($hl); ?>" />
		<?php
		echo ("<select name=\"hl\" onChange=\"this.form.submit()\">");
			$j = 1;
			foreach ($langsfile as $langname)
			{
				if ($langname == "ar_AE") $LANG_NAME = "العربية";
				elseif ($langname == "bg_BG") $LANG_NAME = "български";
				elseif ($langname == "cs_CZ") $LANG_NAME = "čeština";
				elseif ($langname == "da_DK") $LANG_NAME = "dansk";
				elseif ($langname == "en_GB") $LANG_NAME = "English UK";
				elseif ($langname == "en_US") $LANG_NAME = "English US";
				elseif ($langname == "fr_FR") $LANG_NAME = "français";
				elseif ($langname == "de_DE") $LANG_NAME = "Deutsch";
				elseif ($langname == "el_GR") $LANG_NAME = "Ελληνικά";
				elseif ($langname == "es_AR") $LANG_NAME = "español Argentina";
				elseif ($langname == "ca_ES") $LANG_NAME = "català";
				elseif ($langname == "es_ES") $LANG_NAME = "español";
				elseif ($langname == "fa_IR") $LANG_NAME = "فارسی";
				elseif ($langname == "fi_FI") $LANG_NAME = "suomi";
				elseif ($langname == "he_IL") $LANG_NAME = "עברית";
				elseif ($langname == "hi_IN") $LANG_NAME = "हिन्दी";
				elseif ($langname == "hu_HU") $LANG_NAME = "magyar";
				elseif ($langname == "hy_AM") $LANG_NAME = "Հայերեն";
				elseif ($langname == "id_ID") $LANG_NAME = "Bahasa Indonesia";
				elseif ($langname == "ms_MY") $LANG_NAME = "Bahasa Melayu";
				elseif ($langname == "it_IT") $LANG_NAME = "italiano";
				elseif ($langname == "ja_JP") $LANG_NAME = "日本語";
				elseif ($langname == "ko_KR") $LANG_NAME = "한국어";
				elseif ($langname == "lt_LT") $LANG_NAME = "lietuvių";
				elseif ($langname == "mk_MK") $LANG_NAME = "македонски";
				elseif ($langname == "nl_NL") $LANG_NAME = "Nederlands";
				elseif ($langname == "nb_NO") $LANG_NAME = "norsk, bokmål";
				elseif ($langname == "nn_NO") $LANG_NAME = "norsk, nynorsk";
				elseif ($langname == "pl_PL") $LANG_NAME = "polska";
				elseif ($langname == "pt_BR") $LANG_NAME = "português Brasil";
				elseif ($langname == "pt_PT") $LANG_NAME = "português";
				elseif ($langname == "ro_RO") $LANG_NAME = "română";
				elseif ($langname == "ru_RU") $LANG_NAME = "pусский";
				elseif ($langname == "sk_SK") $LANG_NAME = "slovenčina";
				elseif ($langname == "sr_CS") $LANG_NAME = "srpski";
				elseif ($langname == "sv_SE") $LANG_NAME = "svenska";
				elseif ($langname == "th_TH") $LANG_NAME = "ภาษาไทย";
				elseif ($langname == "tr_TR") $LANG_NAME = "Türkçe";
				elseif ($langname == "uk_UA") $LANG_NAME = "український";
				elseif ($langname == "vi_VN") $LANG_NAME = "Tiếng Việt";
				elseif ($langname == "yo_NG") $LANG_NAME = "Yorùbá";
				elseif ($langname == "zh_CN") $LANG_NAME = "简体中文";
				elseif ($langname == "zh_TW") $LANG_NAME = "繁體中文";
				echo("<option value=\"".$langname."\"");
				if((defined("L_LANG") && $langname == L_LANG) || ($langname == "en_US" && !defined("L_LANG"))) echo(" selected");
				echo(">".$LANG_NAME." (".$langname.")</option>");
			$j++;
			}
		unset($langsfile);
		unset($langfile);
		unset($langname);
		?>
				  </select>
				  <input type="submit" name="Submit" value="<?php echo(L_SEL_LANG); ?>" class="font" />
				  </td>
				</tr>
<!-- END OF: Needed for the manual Language selector - not needed if you pass the LANG from your own script -->
			  </table>
              <p><b>Fixed Display Style </b></p>
				<script type="text/javascript">
				<!--
					function setCalendarValue1(){
					setValue('date1', '<?php echo date("Y-m-d"); ?>');
					}
				//-->
				</script>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td valign="top" nowrap>Date 1 :</td>
                  <td valign="top"><?php
	  $myCalendar = new tc_calendar("date1");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1890, 2080);
	  $myCalendar->dateAllow('1890-01-01', '2080-05-01', false);
	  //$myCalendar->autoSubmit(true, "", "test.php");
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->showWeeks(true);
	  $myCalendar->disabledDay('sat');
	  $myCalendar->disabledDay('sun');
	  $myCalendar->setSpecificDate(array("2011-01-01", "2011-04-14", "2011-12-25"), 0, 'year');
	  //Tooltips
	  $myCalendar->setToolTips(array("2013-08-02", "2013-08-15", "2013-08-25"), 'ŞŢĂÎÂ şţăîâ אי אפשר test!', '');
	  $myCalendar->setToolTips(array("2013-08-06", "2013-08-01", "2013-08-05"), 'אי אפשר לבחור תאריך זה', 'month');
	  $myCalendar->setToolTips(array("1970-08-06", "2037-08-01", "2013-08-05"), 'Δεν επιτρέπετε η επιλογή αυτής της ημέρας', 'month');
	  $myCalendar->setToolTips(array("1969-08-06", "2040-08-01", "2013-08-05"), 'الإصدار الخاص بي ليس لديها الدعم للعام 2038 وفيما بعد!', 'month');
	  $myCalendar->setToolTips(array("1969-08-16", "2040-08-01", "2013-08-05"), 'の間の日付を選択してください', 'month');
	  $myCalendar->setToolTips(array("1969-08-06", "2040-08-01", "2013-08-16"), '올바르지 않은 값입니다', 'month');
	  $myCalendar->setToolTips(array("2013-06-06", "2013-06-11", "2013-06-15"), 'और बाद के वर्षों का समर्थन नहीं है!', 'year');
	  $myCalendar->setToolTips(array("2013-08-06", "2013-01-01", "2013-12-25"), 'วันนี้ไม่ได้รับอนุญาตให้มีการเลือก', 'year');
	  $myCalendar->setToolTips(array("2013-08-03", "2013-08-15", "2013-08-25"), '请选择日期之前一个', '');
	  $myCalendar->setTimezone("Europe/Bucharest"); //Australia/Melbourne, Asia/Tokyo, America/Montreal
	  //$myCalendar->setTheme('theme3');
	  $myCalendar->writeScript();
	  ?></td>
                  <td valign="top"><ul>
                    <li>Set default date to server date (Auto unset if date is disabled)</li>
                    <li>Set year navigate from 1890 to 2080</li> <!-- Ciprian comment: It doesn't work if you also activate dateAllow. The setYearInterval has no effect then! -->
                    <li>Allow date selectable from 1st Jan 1890 to 01 May 2045</li>
                    <li>Don't allow to navigate other dates from above</li>
                    <li>Disabled Sat and Sun</li>
                    <li>Disabled 01 Jan, 14 Apr and 25 Dec every year, recursively</li>
                    <li>Show calendar week</li>
                    <li>Set/show tooltips</li>
                    <li>Set timezone to Europe/Bucharest</li>
					<br />
					<br />
                        <input type="button" name="button1" id="button1" value="<?php echo(L_CHK_VAL); ?>" onClick="javascript:alert(this.form.date1.value);" class="font"></li>
						<input type="button" name="button4" id="button4" value="Set calendar value to today" onClick="javascript:setCalendarValue1();"> (it works only if currrent date is not disabled)</li>
				  </ul></td>
				</tr>
              </table>
              <p><b>Code:</b></p>
              <pre>&lt;?php<br />	  $myCalendar = new tc_calendar(&quot;date1&quot;);<br />	  $myCalendar-&gt;setDate(date(&quot;d&quot;), date(&quot;m&quot;), date(&quot;Y&quot;));<br />	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br />	  $myCalendar-&gt;setYearInterval(1890, 2080);<br />	  $myCalendar-&gt;dateAllow(&quot;1890-01-01&quot;, &quot;2080-05-01&quot;, false);<br />	  $myCalendar-&gt;disabledDay(&quot;sat&quot;);<br />	  $myCalendar-&gt;disabledDay(&quot;sun&quot;);<br />	  $myCalendar-&gt;setSpecificDate(array(&quot;2039-04-01&quot;, &quot;2011-04-14&quot;, &quot;2011-04-25&quot;), 0, &quot;month&quot;);<br />	  $myCalendar-&gt;showWeeks(true);<br />	  $myCalendar-&gt;setTimezone(&quot;Europe/Bucharest&quot;);<br />	  $myCalendar-&gt;writeScript();<br />?&gt;</pre>
              <p><b>DatePicker Style </b></p>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td nowrap>Date 2 :</td>
                  <td valign=top>
					<script language="javascript">
					<!--
						function myChanged(v){
							alert("Hello, value has been changed : "+document.getElementById("date2").value+" ["+v+"]");
						}
					//-->
					</script>
                    <?php
	  $myCalendar = new tc_calendar("date2", true);
	  $myCalendar->setAutoHide(false);
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1960, date('Y'));
	  $myCalendar->dateAllow('1960-03-01', date('Y-m-d'));
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->disabledDay('sun');
	  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-14", "2010-12-25"), 0, 'year');
	  $myCalendar->setOnChange("myChanged('Test message')");
	  $myCalendar->setTimezone("Europe/Bucharest"); //Australia/Melbourne, Asia/Tokyo, America/Montreal
	  $myCalendar->writeScript();
	  ?></td>
<!-- START OF: Needed for checking the selected value - not needed in your own script -->
                  <td><input type="button" name="button2" id="button2" value="<?php echo(L_CHK_VAL); ?>" onClick="javascript:alert(this.form.date2.value);" class="font"></td>
<!-- END OF: Needed for checking the selected value - not needed in your own script -->
               </tr>
              </table>
              <ul>
                <li>Set default date to server date (Auto unset if date is disabled)</li>
                <li>Don't show the calendar icon, just the Select link </li>
                <li>Don't autohide the calendar window (displays the Close button) </li>
                <li>Set year navigate from 1960 to current year </li>
                <li>Allow date selectable from 01 March 1960 to current date</li>
                <li>Allow to navigate other dates from above </li>
                <li>Disabled Sun</li>
                <li>Disabled 01 Jan, 14 Apr and 25 Dec every year, recursively</li>
                <li>Custom alert when calendar's value has been changed</li>
                <li>Set TimeZone to Europe/Bucharest (displayed in About info box)</li>
              </ul>
              <p><b>Code:</b></p>
			  First, we set a function for use with class setOnChange() example:
			  <pre>&lt;script language="javascript"&gt;<br />&lt;!--<br />	function myChanged(v){<br />	alert("Hello, value has been changed : "+document.getElementById("date2").value+" ["+v+"]");<br />	}<br />//--&gt;<br />&lt;/script&gt;</pre>
			  then:
              <pre>&lt;?php<br />	  $myCalendar = new tc_calendar(&quot;date2&quot;, <b>true</b>);<br />	  $myCalendar-&gt;<b>setAutoHide(false)</b>;<br />	  $myCalendar-&gt;setDate(date(&quot;d&quot;), date(&quot;m&quot;), date(&quot;Y&quot;));<br />	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br />	  $myCalendar-&gt;setYearInterval(1960, date(&quot;Y&quot;));<br />	  $myCalendar-&gt;dateAllow(&quot;1960-01-01&quot;, date(&quot;Y-m-d&quot;));<br />	  $myCalendar-&gt;setAlignment(&quot;left&quot;, &quot;bottom&quot;);<br />	  $myCalendar-&gt;disabledDay(&quot;sun&quot;);<br />	  $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-01&quot;, &quot;2011-04-14&quot;, &quot;2010-12-25&quot;), 0, &quot;year&quot;);<br />	  $myCalendar-><b>setOnChange("myChanged('Test message')")</b>;<br />	  $myCalendar-><b>setTimezone("Europe/Bucharest")</b>;<br />	  $myCalendar-&gt;writeScript();<br />?&gt;</pre>
              <p><b>DatePicker with no input box</b></p>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td nowrap>Date 3 :</td>
                  <td valign=top><?php
	  $myCalendar = new tc_calendar("date3", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1945, date('Y'));
	  $myCalendar->dateAllow('2008-05-13', date('Y-m-d'));
	  $myCalendar->setAlignment('left', 'bottom');
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
<!-- START OF: Needed for checking the selected value - not needed in your own script -->
                  <td><input type="button" name="button3" id="button3" value="<?php echo(L_CHK_VAL); ?>" onClick="javascript:alert(this.form.date3.value);" class="font"></td>
<!-- END OF: Needed for checking the selected value - not needed in your own script -->
                </tr>
              </table>
              <ul>
                <li>No default date</li>
                <li>Show the calendar icon </li>
                <li>Set year navigate from 1945 to current year</li>
                <li>Allow date selectable from 13 May 2008 to today</li>
                <li>Allow to navigate other dates from above</li>
                <li>Date input box set to false</li>
              </ul>
              <p><b>Code:</b></p>
              <pre>&lt;?php<br />	  $myCalendar = new tc_calendar(&quot;date3&quot;, <b>true, false</b>);<br />	  $myCalendar-&gt;<b>setIcon(&quot;calendar/images/iconCalendar.gif&quot;)</b>;<br />	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br />	  $myCalendar-&gt;setYearInterval(1945, date(&quot;Y&quot;));<br />	  $myCalendar-&gt;dateAllow(&quot;2008-05-13&quot;, date(&quot;Y-m-d&quot;));<br />	  $myCalendar->setAlignment(&quot;left&quot;, &quot;bottom&quot;);<br />	  $myCalendar-&gt;writeScript();<br />?&gt;</pre>
              <p><b>Date Pair Example</b></p>
              <div style="float: left;">
                <div style="float: left; padding-right: 3px; line-height: 18px;">Date 4 interval from:</div>
                <div style="float: left;">
                  <?php
// Example 1 (1 week interval before current date)
		function getDaysInWeek ($weekNumber, $year, $dayStart = 1) {
		  // Count from '0104' because January 4th is always in week 1
		  // (according to ISO 8601).
		  $time = strtotime($year . '0104 +' . ($weekNumber - 1).' weeks');
		  // Get the time of the first day of the week
		  $dayTime = strtotime('-' . (date('w', $time) - $dayStart) . ' days', $time);
		  // Get the times of days 0 -> 6
		  $dayTimes = array ();
		  for ($i = 0; $i < 7; ++$i) {
			$dayTimes[] = strtotime('+' . $i . ' days', $dayTime);
		  }
		  // Return timestamps for mon-sun.
		  return $dayTimes;
		}

		$thisweek = date('W');
		$thisyear = date('Y');
		$dayTimes = getDaysInWeek($thisweek, $thisyear);
		//----------------------------------------

		$date4_default = date('Y-m-d', $dayTimes[0]);
		$date5_default = date('Y-m-d', $dayTimes[(sizeof($dayTimes)-1)]);

// Example 2 (30 days interval before current date)
//(comment out first example lines and uncomment the lines bellow)
#		$GapDays = 60 * 60 *24 * 30;
#		$date4_default = date("Y-m-d");
#		$date5_default = date("Y-m-d",time() - $GapDays);

	  $myCalendar = new tc_calendar("date4", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date4_default)), date('m', strtotime($date4_default)), date('Y', strtotime($date4_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1970, 2020);
	  //$myCalendar->dateAllow('2009-02-20', "", false);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->setDatePair('date4', 'date5', $date5_default);
	  $myCalendar->writeScript();
	  ?>
                </div>
              </div>
              <div style="float: left;">
                <div style="float: left; padding-left: 3px; padding-right: 3px; line-height: 18px;">to</div>
                <div style="float: left;">
                  <?php
	  $myCalendar = new tc_calendar("date5", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date5_default)), date('m', strtotime($date5_default)), date('Y', strtotime($date5_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1970, 2020);
	  //$myCalendar->dateAllow("", '2009-11-03', false);
	  $myCalendar->setAlignment('right', 'bottom');
	  $myCalendar->setDatePair('date4', 'date5', $date4_default);
	  $myCalendar->writeScript();
	  ?>
                </div>
              </div>
              <p>
                &nbsp;<input type="button" name="button4" id="button4" value="<?php echo(L_CHK_VAL); ?>" onClick="javascript:alert('Date interval selected from '+this.form.date4.value+' to '+this.form.date5.value);" class="font">
              </p>
              <p><b>Code:</b></p>
              <pre>&lt;?php
	// <i><u>Example 1</u> (1 week interval before current date)</i>
	function getDaysInWeek ($weekNumber, $year, $dayStart = 1) {
		// Count from '0104' because January 4th is always in week 1
		// (according to ISO 8601).
		$time = strtotime($year . '0104 +' . ($weekNumber - 1).' weeks');
		// Get the time of the first day of the week
		$dayTime = strtotime('-' . (date('w', $time) - $dayStart) . ' days', $time);
		// Get the times of days 0 -> 6
		$dayTimes = array ();
		for ($i = 0; $i < 7; ++$i) {
			$dayTimes[] = strtotime('+' . $i . ' days', $dayTime);
		}
		// Return timestamps for mon-sun.
		return $dayTimes;
	}

	$thisweek = date('W');
	$thisyear = date('Y');
	$dayTimes = getDaysInWeek($thisweek, $thisyear);

	<b>$date4_default = date('Y-m-d', $dayTimes[0]);</b>
	<b>$date5_default = date('Y-m-d', $dayTimes[(sizeof($dayTimes)-1)]);</b>
	//----------------------------------------

	// <i><u>Example 2</u> (30 days interval before current date)</i>
	$GapDays = 60 * 60 *24 * 30;
	$date4_default = date("Y-m-d");
	$date5_default = date("Y-m-d",time() - $GapDays);
	//----------------------------------------
	<br />	$myCalendar = new tc_calendar(&quot;date4&quot;, <b>true, false</b>);<br />	$myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br />	$myCalendar-&gt;setDate(date(&quot;d&quot;, strtotime($date1)), date(&quot;m&quot;, strtotime($date1)), date(&quot;Y&quot;, strtotime($date1)));<br />	$myCalendar-&gt;setPath(&quot;calendar/&quot;);<br />	$myCalendar-&gt;setYearInterval(1970, 2020);<br />	$myCalendar->setAlignment(&quot;left&quot;, &quot;bottom&quot;);<br />	$myCalendar->setDatePair(&quot;date4&quot;, &quot;date5&quot;, <b>$date5_default</b>);<br />	$myCalendar-&gt;writeScript();<br /><br />	$myCalendar = new tc_calendar(&quot;date5&quot;, <b>true, false</b>);<br />	$myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br />	$myCalendar-&gt;setDate(date(&quot;d&quot;, strtotime($date2)), date(&quot;m&quot;, strtotime($date2)), date(&quot;Y&quot;, strtotime($date2)));<br />	$myCalendar-&gt;setPath(&quot;calendar/&quot;);<br />	$myCalendar-&gt;setYearInterval(1970, 2020);<br />	$myCalendar->setAlignment(&quot;right&quot;, &quot;bottom&quot;);<br />	$myCalendar->setDatePair(&quot;date4&quot;, &quot;date5&quot;, <b>$date4_default</b>);<br />	$myCalendar-&gt;writeScript();<br />?&gt;<br /></pre>

<p class="largetxt"><b>Color Themes</b> (v3.75)</p>
<?php
// Read the css directory for theme folders
$themes_ar = array();
$themesDirectory = dir('./calendar/css/');
while($tname = $themesDirectory->read())
{
	if(is_dir('./calendar/css/'.$tname) && file_exists('./calendar/css/'.$tname.'/calendar.css') && !preg_match("/^[\.]/", $tname))
	{
		$themes_ar[$tname] = $tname;
	};
};
natsort($themes_ar);
$themesDirectory->close();
?>
<ul>
	<li>
    	<div style="display: inline-block;">
        	<select name="calendar_theme" onChange="javascript:changeTheme(this.value);">
                <option value="">Default</option>
				<?php
					foreach ($themes_ar as $themename)
					{
						echo("<option value=\"".$themename."\">".$themename."</option>");
					}
					unset($themes_ar);
					unset($themename);
				?>
            </select>
            <script type="text/javascript">
			<!--
			function changeTheme(theme){
				document.getElementById("date_theme_thm").value = theme;

				da_arr = getDateSplit(document.getElementById("date_theme").value, "-");

				tc_submitDate("date_theme", da_arr[2], da_arr[1], da_arr[0]);
				showCalendar("date_theme");
			}
			//-->
			</script>
        </div>
    	<?php
		  $myCalendar = new tc_calendar("date_theme", true, false);
		  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
		  $myCalendar->setDate(1, date('m'), date('Y'));
		  $myCalendar->setPath("calendar/");
		  $myCalendar->setYearInterval(2000, 2015);
		  //$myCalendar->autoSubmit(true, "form1");
		  $myCalendar->setAlignment('left', 'bottom');
		  $myCalendar->setAutoHide(true, 10000); //10 secs
		  $myCalendar->showWeeks(true);
		  $myCalendar->startMonday(true);
		  $myCalendar->writeScript();
		  ?>
    </li>
</ul>
            </form>
		  </td>
		  </tr>
		</table>
	  </td>
  </tr>
	<tr>
	<td>
        <hr>
              <h3>Copyright</h3>
This calendar datepicker is totally free to use. You can use it in all of your projects without any costs.
              <h3>How to setup: </h3>
            <p>Only 2 steps required for setup and use this calendar component. </p>
            <p>Define and check for the selected localization of the calendar. Put the following code in the header of the page. </p>
            <pre>&lt;?php
// Request selected language
$hl = (isset($_POST["hl"])) ? $_POST["hl"] : false;
if(!defined("L_LANG") || L_LANG == "L_LANG")
{
	if($hl) define("L_LANG", $hl);

	// You need to tell the class which language you want to use.
	// L_LANG should be defined as en_US format!!! Next line is an example, just put your own language from the provided list
	else define("L_LANG", "<font color=red>he_IL</font>"); // Ebraic example - change the red value to your desired language (from the list provided)
}
?&gt;
</pre>
              <p>Create form element in the html and put the following code: </p>
            <pre>&lt;form action=&quot;somewhere.php&quot; method=&quot;post&quot;&gt;
&lt;?php
<span class="comment">//get class into the page</span><br />require_once(&quot;classes/tc_calendar.php&quot;);

<span class="comment">//instantiate class and set properties</span>
$myCalendar = new tc_calendar(&quot;date1&quot;, true);<br />$myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;);<br />$myCalendar-&gt;setDate(1, 1, 2000);<br />
<span class="comment">//output the calendar</span><br />$myCalendar-&gt;writeScript();	  <br />?&gt;
&lt;/form&gt;
            </pre>
              <hr>
              <h3>How to get the value?</h3>
            <p>To get the date selected in calendar <b>by php after submit the form</b>, simple write script as the following:</p>
            <pre>&lt;?php
$theDate = isset($_POST[&quot;date1&quot;]) ? $_POST[&quot;date1&quot;] : &quot;&quot;;

?&gt; </pre>
              <p>The above script should be on another file that html form point to. The parameter &quot;date1&quot; is the object name that you set in the code at the time calendar construct. See further in Functions and Constructor below. </p>
            <p>To get the date  selected <b>by javascript on the current page</b>, write script as the following:</p>
            <pre>&lt;form action=&quot;somewhere.php&quot; method=&quot;post&quot; name=&quot;form1&quot;&gt;
&lt;?php
<span class="comment">//get class into the page</span><br />require_once(&quot;classes/tc_calendar.php&quot;);

<span class="comment">//instantiate class and set properties</span>
$myCalendar = new tc_calendar(&quot;date1&quot;, true);<br />$myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;);<br />$myCalendar-&gt;setDate(1, 1, 2000);<br />
<span class="comment">//output the calendar</span><br />$myCalendar-&gt;writeScript();	  <br />?&gt;
&lt;/form&gt;


<span class="comment">//use javascript to get the value</span>
&lt;script language=&quot;javascript&quot;&gt;
&lt;!--
function showDateSelected(){
   alert(&quot;Date selected is &quot;+<b>document.form1.date1.value</b>);
}
//--&gt;
&lt;/script&gt;
<span class="comment">//create link to click and check calendar value</span>
&lt;a href=&quot;javascript:showDateSelected();&quot;&gt;Check calendar value&lt;/a&gt;</pre>
              <hr>
				<h3>Calendar Properties</h3>
				<p><i>rtl</i> - specify the right-to-left direction of calendar (already implemented in the localized version per each language)</p>
				<blockquote>
				  <p>Ex. $myCalendar-&gt;rtl = true;</p>
				</blockquote>
				<p><i>zindex</i> - specify the zindex value to calendar</p>
				<blockquote>
				  <p>Ex. $myCalendar-&gt;zindex = 99;</p>
				</blockquote>
				<h3>Calendar Functions</h3>
              <p><b>Constructor</b></p>
              <p><i>tc_calendar (string bindObjectName) </i></p>
              <p><i>tc_calendar (string bindObjectName, boolean date_picker) </i></p>
              <p><i>tc_calendar (string bindObjectName, boolean date_picker, bool show_input)</i></p>
              <blockquote>
                <p> date_picker default value is false.<br />
                  show_input default value is true </p>
              </blockquote>
              <p><b>Methods</b></p>
              <p><i>autoSubmit (bool flag, string form_name, string target_url)</i></p>
              <blockquote>
                <p> Specify the calendar to auto-submit the value. Default value of autosubmit is <b>false</b></p>
                <p>To set calendar auto submit, specify flag to true and you need to specify either <i>form_name</i> or <i>target_url</i> to make the calendar to perform autosubmit correctly</p>
                <p>Ex 1. $myCalendar-&gt;autoSubmit(true, &quot;myForm&quot;); <br />
                  //assume that the calendar is in the form named &quot;myForm&quot;, then tell the calendar to auto submit the value (other values in myForm will be submitted together by html post method) </p>
                <p> Ex 2. $myCalendar-&gt;autoSubmit(true, &quot;&quot;, &quot;anywhere.php&quot;); <br />
                  //tell the calendar to submit the value to &quot;anywhere.php&quot;. This method will submit only calendar value via html get method </p>
              </blockquote>
              <p><i>dateAllow (date from, date to, bool navigate_not_allowed_date)</i></p>
              <blockquote>
                <p> Specify date range allow to select. Other dates from input will be disabled. The parameter <i>navigate_not_allowed_date</i> will handle the user to navigate over the disable date, default is true (means allow)</p>
                <p>Specify both date <i>from</i> and <i>to</i> will set range of date user can select. <br />
                  Specify only date <i>from</i> or <i>to</i> will set range from/upto year set by setYearInterval method.</p>
                <p>Ex 1. $myCalendar-&gt;dateAllow(&quot;2008-05-13&quot;, &quot;2010-03-01&quot;, false); //allow user select date from 13 May 2008 to 1 Mar 2010 <br />
                  Ex 2. $myCalendar-&gt;dateAllow(&quot;2008-05-13&quot;, &quot;&quot;, false); //allow user select date from 13 May 2008 upto whatever can navigate<br />
                  Ex 3. $myCalendar-&gt;dateAllow(&quot;&quot;, &quot;2010-03-01&quot;, false); //allow user select date from whatever can navigate upto 1 Mar 2010 </p>
              </blockquote>
              <p><i>disabledDay (string day)</i></p>
              <blockquote>
                <p>Specify day column to be disabled. Possible day value: Mon, Tue, Wed, Thu, Fri, Sat, Sun</p>
                <p>Ex. $myCalendar-&gt;disabledDay(&quot;Sun&quot;); //disable Sunday column</p>
              </blockquote>
              <p><i>getDate ()</i></p>
              <blockquote>
                <p>Get the calendar value in date format YYYY-MM-DD</p>
                <p>Ex. $myCalendar-&gt;getDate(); //return 2009-06-19 </p>
              </blockquote>
              <p><i>setAlignment (string horizontal_align, string vertical_align)</i></p>
              <blockquote>
                <p>Optional: Set the alignment of calendar datepicker with the calendar container. The value of horizontal alignment can be &quot;left&quot; or &quot;right&quot; (default) and the value of vertical alignment can be &quot;top&quot; or &quot;bottom&quot; (default).</p>
                <p>Ex. $myCalendar-&gt;setAlignment(&quot;left&quot;, &quot;top&quot;);</p>
              </blockquote>
			  <p><i>setAutoHide (bool auto, int delay_time)</i></p>
			  <blockquote>
			  <p>Optional: Set an auto hide of calendar when not active. The calendar has default value of auto hidden since version 3.65 with default delay time of 1000 (1 second)</p>
			  <p>Ex 1. $myCalendar-&gt;setAutoHide(true, 3000); //auto hide in 3 seconds<br />
				 Ex 2. $myCalendar-&gt;setAutoHide(false);</p>
              <p><i>setDate (int day, int month, int year)</i></p>
              <blockquote>
                <p>Optional: Set default selected date to the value input. For month parameter: January=1 and December=12 </p>
                <p> Ex. $myCalendar-&gt;setDate(15, 6, 2005); //Set the date to 15 June 2005 </p>
              </blockquote>
              <p><i>setDateFormat (string format)</i></p>
              <blockquote>
                <p>Optional: Set the format of date display when no input box. It only accepts the php date() format characters: http://php.net/manual/en/function.date.php. Apply with &quot;showInput&quot; function </p>
                <p> Ex. $myCalendar-&gt;setDateFormat(&quot;j F Y&quot;); //date will display like &quot;9 September 2009&quot; </p>
              </blockquote>
              <p><i>setDatePair (string calendar_name1, string calendar_name2, string default_pair_value)</i></p>
              <blockquote>
                <p>Optional: Set a date pair link to calendar object. This function will work when 2 calendars are setup together.</p>
                <p>Ex 1. $myCalendar-&gt;setDatePair(&quot;date1&quot;, &quot;date2&quot;); //This means when the value of calendar &quot;date1&quot; is set, the calendar &quot;date2&quot; will not allow to select the date prior to &quot;date1&quot;<br />
                  Ex 2.
                  $myCalendar-&gt;setDatePair(&quot;date1&quot;, &quot;date2&quot;, &quot;2011-03-26&quot;); //suppose you are setting this value on date1 object, &quot;2011-03-26&quot; will be assigned as default date of date2 and calculated</p>
              </blockquote>
              <p><i>setIcon (string url)</i></p>
              <blockquote>
                <p>Optional: Set icon in date picker mode. If the icon is not set the date picker will show text as link. </p>
                <p> Ex. $myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;); </p>
              </blockquote>
              <p><i>setHeight (int height) </i><b>- deprecated since v2.9</b> - auto sizing applied</p>
              <blockquote>
                <p>Optional: Set height of calendar. Default value is 205 pixels</p>
                <p>Ex. $myCalendar-&gt;setHeight(205); </p>
              </blockquote>
			  <p><i>setOnChange (string value)</i></p>
			  <blockquote>
			    <p>Optional: Set the onchange javascript function to calendar</p>
				<p>Ex. $myCalendar-&gt;setOnChange(&quot;javascriptFunctionName()&quot;);</p>
			  </blockquote>
              <p><i>setPath (string path)</i></p>
              <blockquote>
                <p>Optional: Set the path to the &quot;calendar_form.php&quot; if it is not in the same directory as your script. The path string is a relative path to the script file. </p>
                <p>Ex. $myCalendar-&gt;setPath(&quot;folder1/&quot;);</p>
              </blockquote>
              <p><i>setSpecificDate (array dates, int type, string recursive)</i></p>
              <blockquote>
                <p>Optional: Set the specific to enable or disable.</p>
                <p><b>dates:</b> the array of date, and date should be in format YYYY-MM-DD<br />
                  <b>type:</b> enable or disable the date specified. 0=disable, 1=enable<br />
                  <b>recursive:</b> &quot;&quot; (blank)=no recursive, calendar will process only on exact date, &quot;month&quot;=monthly recursive, or &quot;year&quot;=yearly recursive</p>
                <p>Ex 1. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;));<br />
                  Ex 2. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;), 0, &quot;month&quot;); //disable date 22 every month<br />
                  Ex 3. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;), 0, &quot;year&quot;); //disable 22 Apr on every year </p>
              </blockquote>
              <p><i>setToolTips (array dates, string tooltip, string recursive)</i></p>
              <blockquote>
                <p>Optional: Set the tooltip info to be displayed on certain dates, recursively or not.</p>
                <p><b>dates:</b> the array of dates, and date should be in format YYYY-MM-DD<br />
                  <b>tooltip:</b> string/text to be displayed when mouse hover the info.gif icon in the top-right corner of each day<br />
                  <b>recursive:</b> &quot;&quot; (blank)=no recursive, calendar will process only on exact date, &quot;month&quot;=monthly recursive, or &quot;year&quot;=yearly recursive<br />
				  <b>hint:</b> the function can be called any number of times, like all 5 examples below, together; multi-tooltips will be displayed on multi-lines, in this main order: non-recurrent, monthly then yearly, and then in the order of calling the function.</p>
				<p>Ex 1. $myCalendar-&gt;setToolTips(array(&quot;2013-08-06&quot;, &quot;2013-08-15&quot;, &quot;2013-08-25&quot;), &quot;Tooltip Test&quot;);<br />
				  Ex 2. $myCalendar-&gt;setToolTips(array(&quot;2013-06-06&quot;, &quot;2013-06-01&quot;, &quot;2013-06-05&quot;), &quot;Monthly Tooltip&quot;, &quot;month&quot;);<br />
				  Ex 3. $myCalendar-&gt;setToolTips(array(&quot;2013-06-06&quot;, &quot;2013-08-11&quot;, &quot;2013-09-15&quot;), &quot;Second Monthly Event&quot;, &quot;month&quot;);<br />
				  Ex 4. $myCalendar-&gt;setToolTips(array(&quot;2013-06-06&quot;, &quot;2013-01-01&quot;, &quot;2013-12-25&quot;), &quot;Yearly Event&quot;, &quot;year&quot;);<br />
				  Ex 5. $myCalendar-&gt;setToolTips(array(&quot;2013-08-06&quot;, &quot;2013-08-15&quot;, &quot;2013-08-25&quot;), &quot;Second Tooltip test&quot;);</p>
				 <p>Known limits:</p>
				  <ul>
					<li> only first 40 rows can be displayed in a tooltip, due to the html limitation. So make sure you keep the number of events to be displayed for a single date less than 41;</li>
<!--				  <li>only dates <?php echo((version_compare(PHP_VERSION, '5.3.0') <= 0) ? "between 01 Jan 1970 and 17 Feb 2038" : "after 01 Jan 1970"); ?> will display tooltips, due to php limitations. We are hardly working for a fix in a future version of the calendar class.</li> -->
				  </ul>
              </blockquote>
              <p><i>setText (string text) </i></p>
              <blockquote>
                <p>Optional: Set text to display. The text will show in date picker mode when the icon is not set.</p>
                <p>Ex. $myCalendar-&gt;setText(&quot;Click Me&quot;); </p>
              </blockquote>
			  <p><em>setTheme (string theme_name)</em> -<strong> v3.75 - <font color="red">New!</font></strong></p>
			  <blockquote>
				<p>Optional: Set calendar color theme. Theme name is represented for css folder name such as 'theme1' and theme folder must exist as {calendar_folder}/css/(theme_name)/calendar.css</p>
				<p>Ex. $myCalendar-&gt;setTheme(&quot;theme1&quot;);</p>
			  </blockquote>
              <p><i>setWidth (int width) </i><b>- deprecated since v2.9</b> - auto sizing applied</p>
              <blockquote>
                <p>Optional: Set width of calendar. Default value is 150 pixels</p>
                <p>Ex. $myCalendar-&gt;setWidth(150); </p>
              </blockquote>
              <p><i>setYearInterval (int year_start, int year_end) </i></p>
              <blockquote>
				<p>Optional: Set the year start and year end display on calendar combo box. Default value is +15 and -15 from current year (30 years)</p>
                <p>Ex. $myCalendar-&gt;setYearInterval(1970, 2020); </p>
              </blockquote>
              <p><i>showInput (bool flag)</i></p>
              <blockquote>
                <p>Optional: Set the input box display on/off. If showInput set to false, the date will display in panel as example above &quot;<b>DatePicker with no input box</b>&quot;. Default value is true </p>
                <p>Ex. $myCalendar-&gt;showInput(false); </p>
              </blockquote>
			  <p><i>showWeeks (bool flag)</i></p>
			  <blockquote>
			    <p>Optional: Display week numbers on calendar upon setting. Default value is false.</p>
			    <p>Ex. $myCalendar-&gt;showWeeks(true);</p>
			  </blockquote>
              <p><i>startDate (bool date_number)</i></p>
              <blockquote>
                <p>Optional: You can choose any day as a start day of week. The possible values are 0 (for Sunday) through 6 (for Saturday). Default value is 0 (Sunday).</p>
                <p>Ex. $myCalendar-&gt;startDate(6); //start day of week is Sat.</p>
              </blockquote>
			  <p><i>startMonday (bool flag) </i><b>- deprecated since v3.61 </b>- use startDate instead</p>
			  <blockquote>
			  	<p>Optional: Set whether the calendar will be start on Sunday or Monday. Set flag to <b>true</b> means the calendar will display  first date as Monday, otherwise <b>false</b> will display first date as Sunday. Default value is false.</p>
			    <p>Ex. $myCalendar-&gt;startMonday(true); </p>
			  </blockquote>
              <p><i>writeScript()</i></p>
              <blockquote>
                <p>Write the output calendar to the screen </p>
              </blockquote></td>
        </tr>
      </table>
      <p align="center">&copy; Triconsole (<a href="http://www.triconsole.com/" target="_blank">triconsole.com</a>)</p></td>
  </tr>
</table>
</body>
</html>