<script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>

<?php
if(isset($_POST['calls']))
{
$cwoai=((($_POST['calls']*5)*25)/1000)*400;		
$cwai_1=(0.7*$_POST['calls']*25)*1.5;
$cwai_2=((((0.3*$_POST['calls'])*25)*5)/1000)*400;	
$cwai_total=($cwai_1+$cwai_2);
$savings=($cwoai-$cwai_total);	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>COST CALCULATOR</title>
<link href="css/links.css" rel="stylesheet" type="text/css">	
<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
<link href="css/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/metisMenu/metisMenu.min.css" rel="stylesheet">	
<style type="text/css">
body {
    background-image: url(img/BACKGROUND_DENTAL%20AI%20AUDIO%20SAMPLES.png);
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td height="20"></td>
            </tr>
            <tr>
              <td align="center" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bolder; font-size: 45px;">COST CALCULATOR</td>
            </tr>
            <tr>
              <td height="497" valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td height="522" valign="top" background="img/cc.png"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td height="511" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td height="18">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="39">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="59"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td width="69%">&nbsp;</td>
                                      <td width="24%"><input type="text" name="calls" class="form-control" style="text-align:center; color:#629D02; border: hidden" value="<?php echo $_POST['calls']; ?>" ></td>
                                      <td width="7%">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table></td>
                              </tr>
                              <tr>
                                <td height="195" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td width="73%" height="43"></td>
                                      <td width="19%"></td>
                                      <td width="8%"></td>
                                    </tr>
                                    <tr>
                                      <td height="24" colspan="3" align="center"><button type="submit" class="bsubmit" id="calculate">COMPUTE</button>                                      </td>
                                      </tbody>
                                </table></td>
                              </tr>
                              <tr>
                                <td height="52"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td width="17%">&nbsp;</td>
                                      <td width="24%" align="center"><?php echo $cwai_total; ?></td>
                                      <td width="25%">&nbsp;</td>
                                      <td width="19%" align="center"><?php echo $cwoai; ?></td>
                                      <td width="15%">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table></td>
                              </tr>
                              <tr>
                                <td height="30">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="88"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td width="52%">&nbsp;</td>
                                      <td width="34%" align="center"><?php echo $savings; ?></td>
                                      <td width="14%">&nbsp;</td>
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
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
