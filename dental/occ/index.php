<?php
 
if($_GET['n']==1)
{
$img='background="../img/core/1.png"';	
//$audio='<audio controls autoplay src="../audio/GENERAL INQUIRY.mp3"></audio>';
//$links='<a href="../img/core/p1.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';	
}
elseif($_GET['n']==2)
{
$img='background="../img/core/2.png"';	
//$audio='<audio controls autoplay src="../audio/NEW_CURRENT PATIENT REGISTRATION.mp3"></audio>';
//$links='<a href="../img/core/p2.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';	
}
elseif($_GET['n']==3)
{
$img='background="../img/core/3.png"';	
//$audio='<audio controls autoplay src="../audio/INSURANCE VERIFICATION.mp3"></audio>';
//$links='<a href="../img/core/p3.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';	
}
elseif($_GET['n']==4)
{
$img='background="../img/core/4.png"';	
//$audio='<audio controls autoplay src="../audio/APPOINTMENT SETTING.mp3"></audio>';
//$links='<a href="../img/core/p4.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';	
}
elseif($_GET['n']==5)
{
$img='background="../img/core/5.png"';		
//$audio='<audio controls autoplay src="../audio/5_Reschedule Appointment.mp3"></audio>';
$links='<a href="../img/core/p5.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';		
}
elseif($_GET['n']==6)
{
$img='background="../img/core/6.png"';		
//$audio='<audio controls autoplay src="../audio/6_Cancel an Existing Appointment.mp3"></audio>';
$links='<a href="../img/core/p6.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';			
}
elseif($_GET['n']==7)
{
$img='background="../img/core/7.png"';	
//$audio='<audio controls autoplay src="../audio/7_List Upcoming Appointments.mp3"></audio>';
$links='<a href="../img/core/p7.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';		
}
elseif($_GET['n']==8)
{
$img='background="../img/core/8.png"';	
//$audio='<audio controls autoplay src="../audio/7_List Upcoming Appointments.mp3"></audio>';
$links='<a href="../img/core/p8.png"><img src="../img/core/sb.png" width="200" height="53" alt=""/></a>';		
}
?>

<title>E-TELECONNECT INC.</title>
<link rel="icon" type="image/ico" href="../img/logo_icon.png" />
<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
body {
    background-color: #333333;
}
.style13 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 14; }
.style16 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style17 {    font-size: 18px;
    font-weight: bold;
    color: #090909;
}
</style>
<script type="text/javascript" src="../js/norightclick.js"></script>

<form id="form1" name="form1" method="post">

<table width="900" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td width="300" height="506" valign="top" <?php echo $img; ?>><table width="50%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="10">&nbsp;</td>
        </tr>
        <tr>
          <td height="30" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td height="15"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="1" bgcolor="#FFFFFF"></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="258">&nbsp;</td>
        </tr>
        <tr>
          <td height="80" align="center"><?php echo $links; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="39">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </tbody>
</table>
</form>