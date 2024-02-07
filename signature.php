<?php
// Use htmlspecialchars to prevent XSS attacks by escaping HTML entities
$fileUrl = isset($_GET['fileUrl']) ? htmlspecialchars($_GET['fileUrl']) : 'Not provided';
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Not provided';
$designation = isset($_GET['designation']) ? htmlspecialchars($_GET['name']) : 'Not provided';
$phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : 'Not provided';
$phone_link = preg_replace('/\D+/', '', $phone);
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Not provided';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>AIOP Signature Generator</title>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: #FAFAFA;width: 100% !important;">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="margin: 0;padding: 0;background-color: #FAFAFA;height: 100% !important;width: 100% !important;">
            	<tr>
                	<td align="center" valign="top" style="border-collapse: collapse;">
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border: 1px solid #DDDDDD;background-color: #C79D2A;">
                        	<tr>
                            	<td align="center" valign="top" style="border-collapse: collapse;">
                                    <!-- // Begin Template Body \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                            <!-- // Begin Sidebar \\ -->
                                        	<td valign="top" width="230" id="templateSidebar" style="border-collapse: collapse;">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="230">
                                                	<tr>
                                                    	<td valign="top" class="sidebarContent" style="border-collapse: collapse;">

                                                            <!-- // Begin Module: Top Image with Content \\ -->
                                                            <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top" style="border-collapse: collapse;">
                                                                        <img src="<?php echo $fileUrl; ?>" style="width: 100%;max-width: 100%;border: 8px solid #09163A;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // End Module: Top Image with Content \\ -->
                                                        
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <!-- // End Sidebar \\ -->
                                        	<td valign="top" width="370" style="border-collapse: collapse;">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="370">
                                                	<tr>
                                                    	<td valign="top" style="border-collapse: collapse;">
                                            				<table border="0" cellpadding="0" cellspacing="0" width="370">
                                                            	<tr>
                                                                	<td valign="top" class="bodyContent" style="border-collapse: collapse;background-color: #C79D2A;">
                                                            
                                                                        <!-- // Begin Module: Standard Content \\ -->
                                                                        <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td valign="top" style="padding-bottom: 10px;border-collapse: collapse;">
						                                                            <div style="text-align: center;color: #09163A;font-family: Arial;font-size: 14px;line-height: 150%;">
                                                                                        <img src="https://aiopaward.com/wp-content/uploads/2023/06/American-Institute-of-Professionals-Logo.png" style="max-width: 100%;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
						                                                                <h1 class="h1" style="color: #09163A;display: block;font-family: Arial;font-size: 22px;font-weight: bold;line-height: 100%;text-transform: uppercase;text-align: center;margin-top: 10px !important;margin-right: 0 !important;margin-bottom: 5px !important;margin-left: 0 !important;"><?php echo $name ?></h1>
						                                                                <p style="color: #09163A;display: block;font-family: Arial;font-size: 14px;font-weight: normal;line-height: 100%;text-transform: uppercase;text-align: center;margin-top: 0 !important;margin-right: 0 !important;margin-bottom: 0 !important;margin-left: 0 !important;"><?php echo $designation ?></p>
						                                                            </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- // End Module: Standard Content \\ -->
                                                            
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                		</td>
                                                    </tr>
                                                    <tr>
                                                    	<td valign="top" style="border-collapse: collapse;">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="350">
                                                                <tr>
                                                                    <td valign="top" width="150" class="leftColumnContent" style="border-collapse: collapse;">
                                                                    
                                                                        <!-- // Begin Module: Top Image with Content \\ -->
                                                                        <table border="0" cellpadding="5" cellspacing="0" width="100%" style="width: 170px;">
                                                                            <tr>
                                                                                <td valign="top" style="padding-right: 0;border-collapse: collapse;">
                                                                                    <!-- // Begin Module: Social Block with Icons \\ -->
                                                                                    <table border="0" cellpadding="3" cellspacing="0">
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="https://raw.githubusercontent.com/hasan4flf/signature-generator-aiop/main/images/globe.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="https://aiopaward.com/" style="color: #09163A;font-weight: normal;text-decoration: none;">www.aiopaward.com</a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="https://raw.githubusercontent.com/hasan4flf/signature-generator-aiop/main/images/location.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="#" style="color: #09163A;font-weight: normal;text-decoration: none;">12079 W. Jefferson Blvd.
                                                                                                        Los Angeles, CA 90230</a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <!-- // End Module: Social Block with Icons \\ -->
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- // End Module: Top Image with Content \\ -->
                                                                        
                                                                    </td>
                                                                    <td valign="top" width="150" class="rightColumnContent" style="border-collapse: collapse;">
                                                                    
                                                                        <!-- // Begin Module: Top Image with Content \\ -->
                                                                        <table border="0" cellpadding="5" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td valign="top" style="padding-left: 5px;padding-right: 5px;border-collapse: collapse;">
                                                                                    <table border="0" cellpadding="3" cellspacing="0">
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="https://raw.githubusercontent.com/hasan4flf/signature-generator-aiop/main/images/call.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="tel:+1<?php echo $phone_link; ?>" style="color: #09163A;font-weight: normal;text-decoration: none;"><?php echo $phone ?></a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="https://raw.githubusercontent.com/hasan4flf/signature-generator-aiop/main/images/mail.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="mailto:<?php echo $email; ?>" style="color: #09163A;font-weight: normal;text-decoration: none;"><?php echo $email ?></a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- // End Module: Top Image with Content \\ -->
                                                                                                                                            
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                            <tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter" style="background-color: #09163A;">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Standard Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="social">
                                                            <!-- Footer Content will go here -->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>