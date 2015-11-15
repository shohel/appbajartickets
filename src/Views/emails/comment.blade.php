<?php $comment = unserialize($comment);?>
<?php $ticket = unserialize($ticket);?>

<html>


<body>


<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF">
    <tbody><tr>
        <td>
            
            <table width="624" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody><tr>
                    <td>
                        
                        <table width="624" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                                <td valign="top">


                                    <table width="0" cellspacing="0" cellpadding="0" border="0">
                                        <tbody><tr>
                                            <td width="52" valign="left" height="40"><img height="65" align="right" src="{{ asset('assets/frontend/logo/logo_email.png') }}" alt="" class="CToWUd">
                                            </td>
                                            
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        
                        
                        <table width="624" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                                <td>
                                    
                                    <table width="624" cellspacing="0" cellpadding="0" border="0">
                                        <tbody><tr>
                                            <td align="center" style="background-color:#f2f2f2;padding:55px 15px 55px 15px;border-radius:8px">
                                                <h2 style="text-align:center;font-size:24px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">Hi {!! $ticket->user->user_name !!}, </h2>

                                                <br>
                                                <h2 style="text-align:center;font-size:20px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">New Comment ! </h2>
                                                <br>
                                             <h3 style="text-align:left;font-size:14px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">{!! $comment->user->user_name !!} commented on ticket: {!! $ticket->subject !!}. For your reference, here are the details of comment:</h3>

                                                <br>
                                                <table>

                                                        <tr>
                                                            
                                                            <td style="border-radius:3px;color:#ffffff;display:block" align="center" height="100%" bgcolor="#0aabc0" width="100%">
                                                                
                                                            <p style="margin: 17px 44px 19px 0px;color:#ffffff;font-size:16px;font-weight:bold;font-family:Helvetica,Arial,sans-serif;text-decoration:none;line-height:40px;width:100%;display:inline-block">{!! $comment->content !!}</p>

                                                            </td>

                                                        </tr>

                                                </table>
   
                                                <br>
                                                <br>
                                                <h3 style="text-align:left;font-size:14px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">You can check the status and update your ticket in My Support Tickets page.</h3>

                                                <br>
                                                <h3 style="text-align:left;font-size:14px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">If your concern needs immediate assistance, have a chat with our Customer Support Team. They are ready to assist you anytime.</h3>


                                                <p style="text-align:center;font-size:17px;line-height:24px;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">Regards,</p>
                                                <br>
                                                
                                                <p style="text-align:center;font-size:17px;line-height:24px;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px"> - The AppBajar Team</p>
                                            </td>
                                        </tr>
                                    </tbody></table>



                                    <table style="margin: 0 auto;" cellpadding="0" cellspacing="10" width="80%"  style="margin: 0 auto">
                                        <tr>
                                            <td style="text-align: center;">
                                                <br>
                                                <a href="https://plus.google.com/103431356737551106408/about" target="_blannk"><img style="width: 70%;"src="{{ asset('assets/emo/googleplus.png') }}" alt="google+"></a>
                                                <br>
                                            </td>

                                            <td style="text-align: center;">
                                                <br>
                                                <a href="https://www.facebook.com/appbajar" target="_blank"><img style="width: 70%;"  src="{{ asset('assets/emo/find-us-on-facebook.jpg') }}" alt="facebook"></a>
                                                <br>
                                            </td>

                                            <td style="text-align: center;">
                                                <br>
                                                <a href="https://twitter.com/TheAppBajar" target="_blank"><img style="width: 70%;" src="{{ asset('assets/emo/twitterIcon.png') }}" alt="twitter"></a>

                                                <br>
                                            </td>
                                        </tr>
                                    </table>
                                
                                    
                                    <br>
                                    <br>
                                    <table width="624" cellspacing="0" cellpadding="0" border="0">
                                        <tbody><tr>
                                            <td>
                                                <p style="text-align:center;font-size:12px;line-height:18px;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">&copy;20015- {{ date('Y') }} AppBajar,
                                            All Rights Reserved. <br>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                    </td>
                </tr>
            </tbody></table>



        </td>
    </tr>
</tbody></table>




</body>
</html>