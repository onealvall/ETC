<?php
if($_GET['n']==1)
{
$audio='<audio controls autoplay src="../audio/1_Initial Disclaimer and Emergency Direction.mp3"></audio>';
}
elseif($_GET['n']==2)
{
$audio='<audio controls autoplay src="../audio/2_Initial Patient Request.mp3"></audio>';
}
elseif($_GET['n']==3)
{
$audio='<audio controls autoplay src="../audio/3_Account Lookup and Verification.mp3"></audio>';
}
elseif($_GET['n']==4)
{
$audio='<audio controls autoplay src="../audio/4_Schedule Appointment Request Resumed.mp3"></audio>';
}
elseif($_GET['n']==5)
{
$audio='<audio controls autoplay src="../audio/5_Reschedule Appointment.mp3"></audio>';
}
elseif($_GET['n']==6)
{
$audio='<audio controls autoplay src="../audio/6_Cancel an Existing Appointment.mp3"></audio>';
}
elseif($_GET['n']==7)
{
$audio='<audio controls autoplay src="../audio/7_List Upcoming Appointments.mp3"></audio>';
}
?>
<title>E-TELECONNECT INC.</title>
<link rel="icon" type="image/ico" href="../img/logo_icon.png" />
<link href="../css/design.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/norightclick.js"></script>
<script type="text/javascript" src="../js/popup_01.js"></script>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
       
    </tr>
    <tr>
      <td height="100" bgcolor="#ffffff"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
			  <td width="35%"><a href="../../dental"><img src="../img/19.png" width="300" height="72" alt=""/></a></td>
            <td width="37%"><img src="../img/1.png" width="379" height="65" alt=""/></td>
            <td width="19%">&nbsp;</td>
            <td width="9%" align="center"><a href="../../"><img src="../img/h1.png" width="60" height="62" alt=""/></a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
   
	   <tr>
      <td height="800" background="../img/BACKGROUND_DENTAL AI AUDIO SAMPLES.png"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="50%" height="700" background="../img/BACKGROUND_GREEN_ DENTAL AI AUDIO SAMPLES.png"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td><video width="100%" controls autoplay muted >
                    <source src="../audio/DENTAL AI AUDIO SAMPLE PAGE_VIDEO.mp4" type="video/mp4">
                  </video>
					</td>
                </tr>
              </tbody>
            </table></td>
            <td width="50%" valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td align="center"><img src="../img/t1.png" width="400" alt=""/></td>
                      </tr>
                      <tr>
                        <td align="center"><table width="80%" border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                            <tr>
                              <td width="19%" align="center"><a href="index.php?n=1"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td width="81%"><span style="font-size: 16px">Initial Disclaimer and Emergency Direction</span></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center"><?php
							if($_GET['n']==1)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                            <tr>
                              <td align="center"><a href="index.php?n=2"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">Initial Patient Request</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==2)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                             
                            <tr>
                              <td align="center"><a href="index.php?n=3"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">Account Lookup and Verification</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==3)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                              </tr>
                            <tr>
                              <td align="center"><a href="index.php?n=4"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">Schedule Appointment Request</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==4)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                             
                            <tr>
                              <td align="center"><a href="index.php?n=5"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">Reschedule Appointment</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==5)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                             
                            <tr>
                              <td align="center"><a href="index.php?n=6"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">Cancel an Existing Appointment</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==6)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                              </tr>
                            <tr>
                              <td align="center"><a href="index.php?n=7"><img src="../img/play.png" width="50" alt=""/></a></td>
                              <td><span style="font-size: 16px">List Upcoming Appointments</span></td>
                            </tr>
                            <tr>
                               <td colspan="2" align="center"><?php
							if($_GET['n']==7)
							{	
							echo $audio;
							}
							else
							{	
							echo " ";
							}
							?>
								</td>
                              </tr>
                             
                          </tbody>
                        </table></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
          </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="800" align="center" background="../img/callbg.png"><table width="80%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td valign="top" style="font-size: 24px">&nbsp;</td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td width="70%" valign="top" ><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td style="font-size: 30px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><strong>FOR MORE INFORMATION:</strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 20px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><a href="http://www.eteleconnectinc.com/">www.eteleconnectinc.com</a></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 185px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span style="font-size: 18px">Direct US Line: (808)457-9582 </span></td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">sales@eteleconnectinc.com</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 20px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><strong>E-TeleConnect, Inc. PH ROHQ</strong></td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"> Paranaque City, Metro Manila, Philippines</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><p dir="ltr"><strong>Direct: US line (855) 800-0710</strong><br>
                    Tel. No: (632) 8-829-0703 loc.102/114</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 20px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><strong>E-TeleConnect, Inc. Los Banos</strong></td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"> Laguna,
                    Philippines 4030</td>
                </tr>
                <tr>
                  <td style="font-size: 20px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                    Direct: US line (808) 445-6527<br>
                    Tel. No: (6349) 501-1210 loc.117/119</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style: italic;"><strong>Follo us on social media:</strong></td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><img src="../img/fb.png" width="50" height="50" alt=""/><img src="../img/in.png" width="50" height="50" alt=""/></td>
                </tr>
                <tr>
                  <td style="font-size: 18px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">&nbsp;</td>
                </tr>
              </tbody>
            </table></td>
            <td width="30%" align="center"><img src="../img/cu.png" width="600" height="600" alt="" class="img-circle"/></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript" src="../js/top.js"></script>


