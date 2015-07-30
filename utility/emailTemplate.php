<body style="-webkit-text-size-adjust: none; -ms-text-size-adjust: none; background: #F6F6F6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size:13px; margin:0; padding:0px;">
<table cellspacing="0" cellpadding="0" border="0" height="100%" width="100%">
    <tr>
        <td align="center" valign="top" style="padding-top: 0px; padding-right: 0px; padding-bottom:20px; padding-left: 0px;">
            <center>
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0" width="600" style="border:1px solid #E0E0E0; padding:0px;">
                    <tr>
                        <td>
                            <table cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="382" height="115" align="left" valign="top">
                                        <a href="http://www.theretrofitsource.com/" target="_blank"><!-- <img src="{{skin url='images/email/email-headerlogo.jpg'}}" alt="Morimoto HID" width="382" height="115" border="0" /> --><img src="../img/email-headerlogo.jpg"></a>

                                    </td>
                                    <td width="216" height="115" align="left" valign="top">
                                        <a href="https://www.facebook.com/MorimotoLighting?fref=ts" target="_blank"><!-- <img src="{{skin url='images/email/email-header2.jpg'}}" width="216" height="115" /> --><img src="../img/email-header2.jpg"></a>
                                    </td>
                                </tr>
                            </table>
                            <center>
                                <table width="558" cellspacing="0" cellpadding="0" border="0">
                                    
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top" style="padding-top: 30px; padding-right: 10px; padding-bottom:30px; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #454545;">
                                            <span style="font-size:22px; font-weight:normal; line-height:22px; margin:0 0 11px 0;">Hello, {{htmlescape var=$order.getCustomerName()}}</span><br><br>
                                            Thank you for your order from Morimoto HID. Once your package ships we will send an email with a link to track your order. You can check the status of your order by logging into <a href="{{store url="customer/account/"}}" style="color:#1E7EC8;"> your account</a>.<br><br>
                                            If you have any questions about your order please contact us at <a href="mailto:{{config path='trans_email/ident_support/email'}}">{{config path='trans_email/ident_support/email'}}</a> or call us at {{config path='general/store_information/phone}}, {{config path='general/store_information/phone_hours}}<br><br>
                                            Please refer to  &quot;<a href="http://www.theretrofitsource.com/diy-installation-guides.html"><strong>DIY  Installation Guides</strong></a>&quot; section of our website for helpful information on all of our products.<br><br>
                                            Your order information is below. Thanks again for your business!
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="middle" bgcolor="#c6a571" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;">Your Order {{var order.increment_id}} (placed on {{var order.getCreatedAtFormated('long')}})
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="558" cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td style="padding-top:10px;" align="left" valign="top" width="265">
                                                        <table width="274" cellspacing="0" cellpadding="0" border="0" style="border:1px solid #EAEAEA;">
                                                            <tr>
                                                                <td bgcolor="#939598" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;" width="305">
                                                                    <strong>Billing Information:</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:12px; padding:10px;">
                                                                    {{var order.billing_address.format('html')}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="padding-top:10px;"  align="right" valign="top" width="265">
                                                        <table width="274" cellspacing="0" cellpadding="0" border="0"style="border:1px solid #EAEAEA;">
                                                            <tr>
                                                                <td bgcolor="#939598" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;" width="305">
                                                                    <strong>Payment Method:</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:12px; padding:10px;">
                                                                    {{var payment_html}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top:10px; padding-bottom:10px;" align="left" valign="top" width="265">
                                                        <table width="274" cellspacing="0" cellpadding="0" border="0" style="border:1px solid #EAEAEA;">
                                                            <tr>
                                                                <td bgcolor="#939598" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;" width="305">
                                                                    <strong>Shipping Information:</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:12px; padding:10px;">
                                                                    {{var order.getShippingAddress().format('html')}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="padding-top:10px; padding-bottom:10px;"  align="right" valign="top" width="265">
                                                        <table width="274" cellspacing="0" cellpadding="0" border="0"style="border:1px solid #EAEAEA;">
                                                            <tr>
                                                                <td bgcolor="#939598" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;" width="305">
                                                                    <strong>Shipping Method:</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:12px; padding:10px;">
                                                                    {{var order.getShippingDescription()}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" bgcolor="#939598" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #ffffff; font-weight:bold; padding:10px;">
                                                        Order Items:
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" style="padding-top: 0px; padding-right: 10px; padding-bottom:30px; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #454545;">

                                            {{layout handle="sales_email_order_items" order=$order}}<br><br>
                                            {{var comment}}<br><br>
                                            Thank you,<br>
                                            Morimoto HID
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                </table>
                <table width="600" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td align="center" bgcolor="#363232">
                            <center><!-- <img src="{{skin url='images/email/email-footercap.jpg'}}" width="600" height="18" border="0" /> --><img src="../img/email-footercap.jpg"></center>
                            <center>
                                <table cellspacing="0" cellpadding="0" border="0" width="538">
                                    <tr>
                                        <td align="left" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #ffffff; line-height:20px">{{config path='general/store_information/address'}}<br />
                  {{config path='general/store_information/phone'}}<br />
                  Email: <a href="mailto:support@theretrofitsource.com" style="color:#FFFFFF; text-decoration:none">{{config path='trans_email/ident_support/email'}}</a></td>
                                        <td align="right" valign="bottom">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tr>
                                                    <td width="40" align="left" valign="middle">
                                                        <a href="https://www.facebook.com/MorimotoLighting?fref=ts"><!-- <img src="{{skin url='images/email/email-footerfb.jpg'}}" alt="Facebook" width="30" height="30" border="0" /> --><img src="../img/email-footerfb.jpg"></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <!-- <img src="{{skin url='images/email/email-footer.jpg'}}" width="600" height="18" border="0" /> --><img src="../img/email-footer.jpg">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #454545; padding-top:4px;">
                            <center><small>Copyright &copy; 2015 Morimoto HID. All rights reserved.</small></center>
                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>

<style>
body,td { color:#2f2f2f; font:11px/1.35em Verdana, Arial, Helvetica, sans-serif; }
a {color: #c6a571;}
</style>

