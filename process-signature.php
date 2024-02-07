<?php
// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check Injection
    function sanitize($data) {
        $data   = trim($data);
        $data   = stripslashes($data);
        $data   = htmlspecialchars($data);
        return $data;
    }

    // Get The form data
    $name           = sanitize($_POST['name']);
    $designation    = sanitize($_POST['designation']);
    $phone          = sanitize($_POST['phone']);
    $email          = sanitize($_POST['email']);

    // Check that data was sent to the mailer.
    $errors = array();

    if(isset($_POST['name'], $_POST['designation'], $_POST['phone'], $_POST['email'])) {
        $fields = array(
            'name'          => trim($_POST['name']),
            'designation'   => trim($_POST['designation']),
            'phone'         => trim($_POST['phone']),
            'email'         => trim($_POST['email']),
        );

        foreach ($fields as $field => $data) {
            if(empty($data)) {
                // $errors[] = "The " . $field . " is required";
                $errors[] = "Please fill out all the fields.";
                break 1;
            }
        }

        // Phone Validation
        if(empty($errors)) {
            // Assuming $phone contains the phone number submitted by the user
            $phone = $_POST['phone'];

            // Regular expression for matching USA phone number format (XXX) XXX-XXXX
            $pattern = '/^\(\d{3}\) \d{3}-\d{4}$/';

            // Validate phone number format
            if (!preg_match($pattern, $phone)) {
                $errors[] = "Phone number is invalid. Please use the format (XXX) XXX-XXXX.";
            }
        }

        // Check Valid E-mail
        if(empty($errors) === true) {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Oops! Invalid E-mail!";
            }
        }

        // File upload handling
        if(empty($errors) === true) {
            if (isset($_FILES['picture'])) {
                // Check if a file was selected
                if ($_FILES['picture']['error'] === UPLOAD_ERR_NO_FILE) {
                    $errors[] = "No picture was selected. Please select a picture to upload.";
                } else if ($_FILES['picture']['error'] !== UPLOAD_ERR_OK) {
                    // Check for other errors
                    $errors[] = "An error occurred during file upload.";
                } else {
                    $uploadedFileUrl = '';
                    if (isset($_FILES['picture'])) {
                        $targetDirectory = "uploads/";
                        $fileExtension = strtolower(pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION));
                        $fileName = uniqid("file_", true) . '.' . $fileExtension;
                        $targetFilePath = $targetDirectory . $fileName;
        
                        // File MIME type validation
                        $finfo = new finfo(FILEINFO_MIME_TYPE);
                        $fileMimeType = $finfo->file($_FILES['picture']['tmp_name']);
                        $allowedMimeTypes = ['image/png', 'image/webp', 'image/jpeg', 'image/jpg'];
        
                        if (!in_array($fileMimeType, $allowedMimeTypes)) {
                            $errors[] = "Only PNG, JPG and WEBP files are allowed.";
                        }
        
                        // File size validation (< 100KB)
                        if ($_FILES['picture']['size'] > 102400) {
                            $errors[] = "File size should be under 100KB.";
                        }
        
                        // Image resolution validation (<= 300x300)
                        list($width, $height) = getimagesize($_FILES['picture']['tmp_name']);
        
                        if ($width != 300 || $height != 300) {
                            $errors[] = "Image dimensions should be 300x300 pixels.";
                        }
        
                        if (empty($errors)) {
                            // Attempt to move the uploaded file to its new place
                            if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFilePath)) {
                                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
                                $domainName = $_SERVER['HTTP_HOST'];
                                $scriptPath = $_SERVER['SCRIPT_NAME'];
                                $pathParts = explode('/', $scriptPath);
                                array_pop($pathParts);
                                $appPath = implode('/', $pathParts) . '/';
                                $uploadedFileUrl = $protocol . $domainName . $appPath . $targetFilePath;
                            } else {
                                $errors[] = "Sorry, there was an error uploading your file.";
                            }
                        }
                    }
                }
            }
        }

    }

    // If Get Errors 
    if(empty($errors) === false) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        $errors_msg = implode(" ",$errors);
        $errors_msg_data = json_encode([
            'status' => 'error',
            'message' => $errors_msg,
        ]);

        echo $errors_msg_data;
    }

    // At the end of your file processing and validation in your PHP script
    if (empty($errors)) {
        // Assuming file upload is successful and $uploadedFileUrl is set
        http_response_code(200); // Set a success HTTP response code

        $responseData = json_encode([
            'status' => 'success',
            'message' => 'Thank You! Your message has been sent.',
            'fileUrl' => $uploadedFileUrl, // URL of the uploaded file
            'name' => $name,
            'designation' => $designation,
            'phone' => $phone,
            'email' => $email
        ]);

        echo $responseData;
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    // echo "There was a problem with your submission, please try again.";
    header('Location: ../');
}
?>