<?php
ob_start();
?>
<?php
session_start();
include 'connect.php';
require_once "phpmailer/class.phpmailer.php";
//require_once "admin/config.php";


$cemail = $_POST['email'];

$sql = $link->rawQueryOne("select * from tb_business_registration where business_Email_Id=?", array($cemail));
if ($link->count > 0) {
  $mail = $sql['business_Email_Id'];
  try {

    //$mms2="Your Account Is Temporary Inactive";

    //$lastID = $DB->lastInsertId();

    $message = '<html><head>
               <title>Recover password</title>
               </head>
               <body>
			   <head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @media screen and (max-width: 720px) {
      body .c-v84rpm {
        width: 100% !important;
        max-width: 720px !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-1c86scm {
        display: none !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
        border-width: 1px 0 0 !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-183lp8j .c-1qv5bbj {
        border-width: 1px 0 !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
        padding-left: 8px !important;
        padding-right: 8px !important;
      }
      body .c-v84rpm .c-ry4gth .c-1dhsbqv {
        display: none !important;
      }
    }


    @media screen and (max-width: 720px) {
      body .c-v84rpm .c-ry4gth .c-1vld4cz {
        padding-bottom: 10px !important;
      }
    }
  </style>
  <title>Recover Your ' . $project_name . ' Account Password</title>
</head>

<body style="margin: 0; padding: 0; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; font-stretch: normal; font-size: 14px; letter-spacing: .35px; background: #EFF3F6; color: #333333;">
  <table border="1" cellpadding="0" cellspacing="0" align="center" class="c-v84rpm" style="border: 0 none; border-collapse: separate; width: 720px;" width="720">
    <tbody>
      <tr class="c-1syf3pb" style="border: 0 none; border-collapse: separate; height: 114px;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate;">
            <tbody>
              <tr align="center" class="c-1p7a68j" style="border: 0 none; border-collapse: separate; padding: 16px 0 15px;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"></td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr class="c-7bgiy1" style="border: 0 none; border-collapse: separate; -webkit-box-shadow: 0 3px 5px rgba(0,0,0,0.04); -moz-box-shadow: 0 3px 5px rgba(0,0,0,0.04); box-shadow: 0 3px 5px rgba(0,0,0,0.04);">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
        <form action="http://localhost/Busi-Nessster/reset_password.php">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate; width: 100%;" width="100%">
            <tbody>
              <tr class="c-pekv9n" style="border: 0 none; border-collapse: separate; text-align: center;" align="center">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                  <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-color: #E3E3E3; border-style: solid; width: 100%; border-width: 1px 1px 0; background: #FBFCFC; padding: 40px 54px 42px;">
                    <tbody>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-1m9emfx c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; color: #1D2531; font-size: 25.45455px;"
                          valign="middle">' . $sql['business_Name'] . ', Recover your password.</td>
                         
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeueRoman&quot;,&quot;HelveticaNeue-Roman&quot;,&quot;HelveticaNeueRoman&quot;,&quot;HelveticaNeue-Regular&quot;,&quot;HelveticaNeueRegular&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 400; color: #7F8FA4; font-size: 15.45455px; padding-top: 20px;"
                          valign="middle">Looks like you lost your password?</td>
                      </tr>
                      
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-eitm3s c-16v5f34" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueMedium&quot;,&quot;HelveticaNeue-Medium&quot;,&quot;HelveticaNeueMedium&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,sans-serif;font-weight: 500; font-size: 13.63636px; padding-top: 12px;"
                          valign="middle">We’re here to help. Click on the Link below to change your password.</td>
                      </tr>
					  <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-rdekwa" style="border: 0 none; border-collapse: separate; vertical-align: middle; padding-top: 38px;text-align:center;" valign="middle"><a href="#" 
                            class="c-1eb43lc c-1sypu9p c-16v5f34" style="color: #000000; -webkit-border-radius: 4px; font-family: &quot; HelveticaNeueMedium&quot;,&quot;HelveticaNeue-Medium&quot;,&quot;HelveticaNeueMedium&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,sans-serif;padding: 12px 24px;"></a>
                            <a href="http://localhost/Busi-Nessster/reset-password.php?key=' . $mail . '">Click Here To Reset</a>
                         
                      </tr>
                      
                      
                      
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-ryskht c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; font-size: 12.72727px; font-style: italic; padding-top: 52px;"
                          valign="middle">If you didn’t ask to recover your password, please ignore this email.</td>
                      </tr>
                    </tbody>
                  </table>
                  </form>
                </td>
              </tr>
              
        <tr class="c-183lp8j" style="border: 0 none; border-collapse: separate;">
          <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
            <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-color: #E3E3E3; border-style: solid; width: 100%; background: #FFFFFF; border-width: 1px; font-size: 11.81818px; text-align: center; padding: 18px 40px 20px;"
              align="center">
              <tbody>
                <tr style="border: 0 none; border-collapse: separate;">
                  <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><span class="c-1w4lcwx">You receive this email because you or someone initiated a password recovery operation on your ' . $project_name . ' account.</span></td>
                </tr>

              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
        </td>
      </tr>
      <tr class="c-ry4gth" style="border: 0 none; border-collapse: separate;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1vld4cz" style="border: 0 none; border-collapse: separate; padding-top: 26px; padding-bottom: 26px;">
            <tbody>
              <tr style="border: 0 none; border-collapse: separate;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                  <table border="1" cellpadding="0" cellspacing="0" width="55%" align="center" class="c-jfe37" style="border: 0 none; border-collapse: separate; font-size: 10.90909px; text-align: center;">
                    <tbody>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><a href="#" target="_blank" class="c-1cmrz5j" style="text-decoration: underline; color: #7F8FA4;"></a></td>
                        
                       
                      </tr>
                    </tbody>
                  </table>
                  <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-15u37ze" style="border: 0 none; border-collapse: separate; font-size: 10.90909px; text-align: center; color: #7F8FA4; padding-top: 22px;" align="center">
                    <tbody>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">© 2022 ' . $project_name . ' - All rights reserved.</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-154w5of" style="border: 0 none; border-collapse: separate;">
            <tbody>
              <tr class="c-1dhsbqv" style="border: 0 none; border-collapse: separate; text-align: center;" align="center">
                <td class="c-1l1fguz" style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><img alt="" src="https://mail.crisp.chat/images/footer/common/separator.png" class="c-y3y5wk" style="border: 0 none; line-height: 100%; outline: none; text-decoration: none; height: 2px; width: 719px;" width="719" height="2"></td>
              </tr>
              <tr class="c-19hn9rj" style="border: 0 none; border-collapse: separate;">
                <td align="center" class="c-172hpk9" style="border: 0 none; border-collapse: separate; vertical-align: middle; padding-top: 15px; padding-bottom: 22px;" valign="middle">
                  <a href="#" target="_blank" class="c-1td7ar" style="color: #000000; text-decoration: none;">
                
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

        </td>
      </tr>
    </tbody>
  </table>
</body>
			   ';

    $message .= "</body></html>";


    // php mailer code starts
    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP

    $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = false;                 // sets the prefix to the servier
    $mail->Host = $host_name;      // sets GMAIL as the SMTP server
    $mail->Port = $port;                   // set the SMTP port for the GMAIL server
    // set the SMTP port for the GMAIL server

    $mail->Username = $email_username;
    $mail->Password = $email_password;

    $mail->SetFrom($email_username, $team_name);
    $mail->AddAddress($cemail);


    $mail->Subject = trim("Recover Password");
    $mail->MsgHTML($message);

    try {
      $mail->send();
      echo $msg = "An email has been sent for verfication.";
      $msgType = "success";
      header("location:business-forgot-password.php?err=1");
    } catch (Exception $ex) {
      echo $msg = $ex->getMessage();
      $msgType = "warning";
      echo $msg;
      die();
      header("location:business-forgot-password.php?err=2");
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
?>
<?php



  if ($msgType == "success") {
    header("location:business-forgot-password.php?err=1");
  ?>
<div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>

</div>
<?php }
} else {
  header("location:business-forgot-password.php?err=3");
}


?>