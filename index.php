<?php 

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = $_POST["firstname"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        
        if(empty($firstname))
        {
            $firstnameError = "Vous devez entrez votre prénom.";
        }
        
        if(empty($name))
        {
            $nameError = "Vous devez entrez votre nom.";
        }
        
        if(empty($message))
        {
            $messageError = "Vous devez dire quelques choses.";
        }
        if(!isEmail($email))
        {
            $emailError = "Veuillez entrez un email valide svp?merci";
        }
        
        
        
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

<!DOCTYPE html>
<html>
   <head>
       <title>Contactez-moi !</title>
       <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-witdth, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="css/style.css">
       <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   </head>
   <body>
       
       
            <div class="container">
               <div class="divider"></div>  
               <div class="heading">
                 <h2>Contactez-moi</h2>
               </div>
           <div class="row">
                
                <!--<div class="col-lg-10 col-lg-offset-1">-->
            
                     <form id="contact-form" method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" role="form"> 
                    <div class="row">
                        
                       <div class="col-md-6">
                           <label for="firstname">Prénom<span class="blue"> *</span></label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                           <p class="comments"><?php echo $firstnameError; ?></p>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                         <input type="name" id="name"  name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name; ?>">
                           <p class="comments"><?php echo $nameError; ?></p>
                        </div>
                        
                         <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                         <input type="email" id="email"  name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>">
                           <p class="comments"><?php echo $emailError; ?></p>
                        </div>
                        
                         <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                         <input type="tel" id="phone"  name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>">
                           <p class="comments"><?php echo $phoneError; ?></p>
                        </div>
                        
                         <div class="col-md-12">
                            <label for="message">Message<span class="blue">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre Méssage" rows="4"><?php echo $message; ?></textarea>
                           <p class="comments"><?php echo $messageError; ?></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p class="blue"><strong> * Ces informations sont obligatoires</strong></p>
                        </div>
                        
                        <div class="col-md-12">
                           <input type="submit" class="button1" value="Envoyer">
                        </div>
                          
                       </div>
                       
                        <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
                   
                    </form>
               </div>
            </div>
        
      <!-- </div>-->
 </body>

</html>