<?php 
   $emailPattern = "/\S+@\S+\.\S+/";
    function checkLength($field , $value)
    {
        if (strlen($value) <= 2) {
           return "$field is too short";
        } else if(strlen($value) > 25){
            return "$field is too long";
        }
        return "ok";
    }

    if (isset($_POST["submit"])) {
       $fname = $_POST["inputfName"];
       $lname = $_POST["inputlName"];
       $email = $_POST["inputEmail"];
       $address = $_POST["inputAddress"];
       $errors =[];
    
       if(checkLength( "firstname", $fname) != "ok"){  
           array_push($errors , checkLength("firstname" , $fname)); 
       }
       if(checkLength( "lastname", $lname) != "ok"){ 
           array_push($errors , checkLength("lastname" , $lname)); 
       }
       if ((preg_match($emailPattern, $_POST['inputEmail']))){
        $email = $_POST['inputEmail'];
       }else{
        $errors['inputmail']= "Email must be valid*";
       }

       if (sizeof($errors) > 0) {
          print_r($errors);
       } else {
           print_r([$fname,$lname , $email , $address]);
       }
    }
?>