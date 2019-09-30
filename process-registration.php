<?php 
    session_start();
    require_once("Dev/autoload.php");
    $all_purpose = new AllPurpose();
    $register = new Registration();

    try{

        $dir = "assets/passport/";
        
        $file_name = $_FILES['passport']['name'];
        $file_size =$_FILES['passport']['size'];
        $file_tmp =$_FILES['passport']['tmp_name'];
        $file_type=$_FILES['passport']['type'];
        $file_ext = pathinfo($file_name);
        $ext = $file_ext['extension'];
        $extensions= array("jpeg","jpg","png", "JPEG", "JPG", "PNG");
        
        if(!(in_array($ext,$extensions))){
            $_SESSION['error']="Image Extension not allowed, Please choose a JPEG or PNG file.";
            $all_purpose->redirect('./');
        }
        if($file_size > 1097152){
            $_SESSION['error'] = 'File size must be not greater than 1 MB';
            $all_purpose->redirect('./');
        }else{

            if(isset($_POST['register'])){
                $reg_number = $all_purpose->generateRandomHash(6);
                $firstname = $all_purpose->sanitizeInput($_POST['firstname']);
                $lastname = $all_purpose->sanitizeInput($_POST['lastname']);
                $email = $all_purpose->sanitizeInput($_POST['email']);
                $employer = $all_purpose->sanitizeInput($_POST['employer']);
                $home_phone = $all_purpose->sanitizeInput($_POST['home_phone']);
                $position = $all_purpose->sanitizeInput($_POST['position']);
                $mobile = $all_purpose->sanitizeInput($_POST['mobile']);
                $business = $all_purpose->sanitizeInput($_POST['business']);
                $home_address = $all_purpose->sanitizeInput($_POST['home_address']);
                $business_address = $all_purpose->sanitizeInput($_POST['business_address']);
                $birth = $all_purpose->sanitizeInput($_POST['birth']);
                $details = $all_purpose->sanitizeInput($_POST['details']);
                $contribute = $all_purpose->sanitizeInput($_POST['contribute']);

                if($register->checkEmail($email)){
                    $_SESSION['error'] = "$email has been registered by a member already";
                    $all_purpose->redirect('./');
                }else{

                    $move= move_uploaded_file($file_tmp, $dir.$file_name);
                    $passport = $file_name;

                    if($register->addRegistration($reg_number, $passport, $firstname, $lastname, $email, $employer,
                        $home_phone, $position, $mobile, $business, $home_address, $business_address, $birth, $details, $contribute)){
                        $_SESSION['success'] = "$email You Have Registered Successfully";
                        $all_purpose->redirect("details.php?reg_number=$reg_number");
                    }else{
                        $_SESSION['error'] = "Network Failure, Please Try Again Later";
                        $all_purpose->redirect('./');
                    }
                }

            }else{
                $_SESSION['error'] = "Please Fill The Form Below To Become a member";
                $all_purpose->redirect('./');
            }

        }
    }catch(PDOException $e){
        $_SESSION['error'] =  $e->getMessage();
        $all_purpose->redirect('./');
    }


?>