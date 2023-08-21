<?php

include_once '../../connection/dbconnection.php';

$errorMSG = "";


// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}


    if ( $errorMSG == ""){


        $sql = "SELECT * FROM subscriber WHERE subEmail = '$email'";
        $result = mysqli_query($conn,$sql);
        $values = mysqli_fetch_assoc($result);

        if($values > 0)
        {
            echo '<script>alert("You have already subscribed with us, thank you!!!")</script>';
            echo "<script>location.replace('../../index.php');</script>";

        }
        else
        {

            $sql = "INSERT INTO subscriber(subEmail)\n
            VALUES ('$email')";
            $result = mysqli_query($conn,$sql);

            if($result > 0)
            {
                // echo "success";
                 echo '<script>alert("You have successful subscribe, thank you for your subscription!!!")</script>';
                echo "<script>location.replace('../../index.php');</script>";

            }
            else
            {
                echo "Something went wrong :(";

            }
        
        }
    } else {
        // echo $errorMSG;
        echo '<script>alert("',$errorMSG,'")</script>';

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