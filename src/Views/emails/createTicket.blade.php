<?php $notification_owner = unserialize($notification_owner);?>
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
                                            <td valign="left" height="40"><img width="120" height="65" align="right" src="{{ asset('assets/frontend/logo/logo_email.png') }}" alt="" class="CToWUd">
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
                                                <h2 style="text-align:center;font-size:24px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">Hi {!!$notification_owner->user_name !!}, </h2>

                                                <br>
                                                <h2 style="text-align:center;font-size:20px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">Thanks for getting in touch with Appbajar! </h2>
                                                <br>
                                                <h3 style="text-align:left;font-size:14px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">Just letting you know we have received your inquiry and our Support Team will get back to you in a few days.</h3>
                                                <br>
                                                <h3 style="text-align:left;font-size:14px;font-weight:100;font-family:Helvetica,Arial,sans-serif;color:#797979;margin:0px">For your reference, here are the details of your ticket:</h3>
                                                <br>
                                                <br>
                                                
                                                <table cellspacing="0" cellpadding="0"> 
                                                <tbody >


                                                <tr width="300" height="40" align="left">
                                                    <td  width="40">Ticket ID </td>
                                                    <td  width="40">: </td>
                                                    <td width="220">{!! $ticket->ticket_no !!}</td>
                                                </tr>


                                                <tr width="300" height="40" align="left">
                                                    <td  width="40">Subject </td>
                                                    <td  width="40">: </td>
                                                    <td  width="220">{!! $ticket->subject !!}</td>
                                                </tr>



                                                <tr width="300" height="40" align="left">
                                                    <td  width="40">Department </td>
                                                    <td  width="40">: </td>
                                                    <td  width="220">{!! $ticket->category->name !!}</td>
                                                </tr>


                                                <tr width="300" height="40" align="left">
                                                    <td  width="40">Status </td>
                                                    <td  width="40">: </td>
                                                    <td  width="220">{!! $ticket->status->name !!}</td>
                                                </tr>


                                                </tbody></table> 
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