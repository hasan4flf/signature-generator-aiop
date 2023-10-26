<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Check Injection
         function sanitize($data) {
            $data   = trim($data);
            $data   = stripslashes($data);
            $data   = htmlspecialchars($data);
            return $data;
        }

        // Get The form data
        $photo      	= sanitize($_POST['photo']);
        $name      		= sanitize($_POST['name']);
        $designation	= sanitize($_POST['designation']);
        $phone      	= sanitize($_POST['phone']);
        $link_phone 	= preg_replace('/[^0-9]/', '', $phone);
        $email      	= sanitize($_POST['email']);
    } else {
        header('Location: ./');
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		
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
                                                                        <img src="https://drive.google.com/uc?export=view&id=<?php echo $photo ?>" style="width: 100%;max-width: 100%;border: 8px solid #09163A;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
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
						                                                                <h1 class="h1" style="color: #09163A;display: block;font-family: Arial;font-size: 28px;font-weight: bold;line-height: 100%;text-transform: uppercase;text-align: center;margin-top: 10px !important;margin-right: 0 !important;margin-bottom: 5px !important;margin-left: 0 !important;"><?php echo $name ?></h1>
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
                                                                                                <img src="./images/globe.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="https://aiopaward.com/" style="color: #09163A;font-weight: normal;text-decoration: none;">www.aiopaward.com</a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="./images/location.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
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
                                                                                                <img src="./images/call.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="tel:+1&lt;?php echo $link_phone ?&gt;" style="color: #09163A;font-weight: normal;text-decoration: none;"><?php echo $phone ?></a>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" valign="middle" style="border-collapse: collapse;">
                                                                                                <img src="./images/mail.png" style="margin: 0 !important;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;">
                                                                                            </td>
                                                                                            <td align="left" valign="top" style="border-collapse: collapse;">
                                                                                                <div style="color: #505050;font-family: Arial;font-size: 12px;line-height: 150%;text-align: left;">
                                                                                                    <a href="mailto:&lt;?php echo $email ?&gt;" style="color: #09163A;font-weight: normal;text-decoration: none;"><?php echo $email ?></a>
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
                        </table>
                        <br>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>