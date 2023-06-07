
<?php


$temp = '';

$temp .= '<head>';
$temp .= '    <title>Change Password</title>';
$temp .= '</head>';
$temp .= '<body>';

$temp .= '        <div class="card" style="width: 600px;  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .25);  height: 730px; margin: 45px 65px; border-radius: 0px; border: 2px solid #f4f4f4; background-color: #fff; position: relative; ">';
$temp .= '             <br><table width="" >';
$temp .= '                 <tr>';
$temp .= '                     <td width="20%">';
$temp .= '                         <img src="https://www.1343actionline.ph/images/logos/iacat.png"  style="width:50px; height:50px; margin-top: 20px; margin-left: 45px;">';
$temp .= '                     </td>';
$temp .= '                     <td width="80%">';
$temp .= '                         <p style=" margin-top: 17px; font-family: Microsoft Yahei, sans-serif;  font-size: 16px; color: #1e518a; text-transform: uppercase; font-weight: 600;">Integrated Case Management System</p>';
$temp .= '                     </td>';
$temp .= '                 </tr>';
$temp .= '             </table>';
$temp .= '            <div class="row">';
$temp .= '                <div class="col-lg-12 col-md-12 col-sm-12">';
$temp .= '                    <div class="row" style=" margin-top: 0px; margin-left: 50px;">';
$temp .= '                        <p style="font-size:16px;  font-family: san-serif; margin-left: 0; margin-top: 30px; color: #000;">';
$temp .= '                           Hi <span style="font-family: san-serif; font-size:20px; color: #12447b; text-transform:capitalize;">' . $aMailContent['data']['recipient_name'] . '</span>,';
$temp .= '                        </p>';
$temp .= '                        <p style=" font-size: 25px; color: #1e518a; font-family: cursive; margin-left: 165px; line-height: 42px; ">';
$temp .= '                            Welcome to ICMS! ';
$temp .= '                       </p>';
$temp .= '                        <img src="https://cdn.dribbble.com/users/4874/screenshots/1776423/inboxiconanimation_30.gif" style="width:200px; margin-top: -30px; margin-left: 155px;">';
$temp .= '                        <p style=" padding-right: 57px; font-family: san serif; font-size:14px;  color: #000; line-height: 24px;">';
$temp .= '                           Greetings! We are happy to work with you to give help and support. You now have access to ICMS. ';
$temp .= '                            Please make sure that you understand and you adhere to the rules set by IACAT in using ICMS.';
$temp .= '                            You may contact IACAT should you have any questions. ';
$temp .= '                        </p>';
$temp .= '                        <p style="text-align: center;  color: #000; font-family: san serif; font-size:14px;  line-height: 24px; ">';
$temp .= '                            Here is your Username: <span style="font-family: sans-serif; font-size:18px; color: #12447b; line-height: 24px; ">' . $aMailContent['data']['username'] . '</span>';
$temp .= '                        </p>';
$temp .= '                       <p style=" margin-left: 147px; font-family: san serif; font-size:14px;  color: #000; line-height: 24px;">';
$temp .= '                            To activate your account and set password : ';
$temp .= '                        </p>';
$temp .= '                        <a href="' . $aMailContent['data']['link'] . '"><button type="button" style="background-color:#ffb011;color: #000; font-family:sen-serif; border:1px solid #ffb011; border-radius: 5px;  color: #fff; padding: 6px 45px; font-size: 12px; margin-left: 190px; ">';
$temp .= '                            Click Here ';
$temp .= '                        </button></a>';
$temp .= '                        <p style="font-family: san-serif; font-size:14px; text-align: left; color: #000;">Thank you,</p>';
$temp .= '                        <span style="font-size:24px; text-align: left; font-family: cursive; color: #1e518a; margin-top: 0px;">IACAT</span>';
$temp .= '                       <br>';
$temp .= '                    </div>';
$temp .= '            </div>';
$temp .= '      </div>';
$temp .= '</body>';



return $temp;
?>