<?php 

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "djalloh2016@gamil.com";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = $_POST["firstname"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $isSuccess = true;
        $emailText = "";
        
        if(empty($firstname))
        {
            $firstnameError = "Vous devez entrez votre prénom.";
            $isSuccess = false;
        }
        else
        {
         $emailText .= "firstname: $firstname\n";  
        }
            
        
        if(empty($name))
        {
            $nameError = "Vous devez entrez votre nom.";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "name: $name\n";
        }
            
        
        
        if(empty($message))
        {
            $messageError = "Vous devez dire quelques choses.";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "email: $email\n";
        }
        if(!isEmail($email))
        {
            $emailError = "Veuillez entrez un email valide svp.merci";
            $isSuccess = false;
        }
        else
        {
           $emailText .= "phone: $phone\n"; 
        }
        if(!isPhone($phone))
        {
            $phoneError = "Vou devez entrez un numero de phone valide";
            $isSuccess = false;
        }
        
        if($isSuccess)
            
        {
            $headers = "From: $firstname $name <$email>\r\nReplay-To: $email";
            mail($emailTo, "un message de votre site", $emailText , $headers);
            $firstname = $name = $email = $phone = $message = "";
        }
        
        
    }
    function isPhone($var)
    {
       return preg_match("/^[0-9 ]*$/", $var);
        
    }



    function isEmail($var)
    {
        
        return filter_var($var, FILTER_VALIDATE_EMAIL);
        
    }
  function verifyInput($var)
  {
      $var = trim($var);
      $var = stripslashes($var);
      $var = htmlspecialchars($var);
        return $var;
  }
     
?>