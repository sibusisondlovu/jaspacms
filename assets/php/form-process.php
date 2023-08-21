<?php

include_once '../../connection/dbconnection.php';

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
}
else {
    
    $name = $_POST["name"];
    if (!preg_match('/^[a-zA-Z]+$/', $name)) {
        $errorMSG = "Full name must be only letters!!!"; 
    }

}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}



    if ( $errorMSG == ""){
        $sql = "INSERT INTO clientMessage(clientFullName,clientEmail,clientMessage)\n
        VALUES ('$name','$email','$message')";
        mysqli_query($conn,$sql);
        // echo "success";
        echo '<script>alert("information captured!!!")</script>';
        echo "<script>location.replace('../../index.php');</script>";
        }else{
            if($errorMSG == ""){
                echo "Something went wrong :(";
            } else {
                echo $errorMSG;
            }
        }






// $EmailTo = "hello@jaspa.co.za";
// $EmailTo = "khemfamadlopha@gmail.com";

// $bodySubject = "Website Enquiry";

// // prepare email body text
// $Body = "";
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
// $Body .= "Phone Number: ";
// $Body .= $select_subject;
// $Body .= "\n";
// $Body .= "Select Requirements: ";
// $Body .= $phone_number;
// $Body .= "\n";
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";

// // send email
// $success = mail($EmailTo, $bodySubject, $Body);

// // redirect to success page
// if ($success && $errorMSG == ""){
//    echo "success";
// }else{
//     if($errorMSG == ""){
//         echo "Something went wrong :(";
//     } else {
//         echo $errorMSG;
//     }
// }

?>