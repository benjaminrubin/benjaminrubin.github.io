<?php 

    //if POST is not empty, a form was submitted. Validate the form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ( !isset($_POST['fullname']) || 
        empty($_POST['fullname']) || 
        !isset($_POST['email']) || 
        empty($_POST['email']) || 
        !isset($_POST['subject']) || 
        empty($_POST['subject']) || 
        !isset($_POST['message']) || 
        empty($_POST['message']) )  {

            $error = "Inputs cannot be blank.";
        
        }
            //none are empty
            else {
                //check the fullname
                if( isset($_POST['fullname']) && !empty($_POST['fullname']) ){
                    $fullname = $_POST['fullname'];
                }
                else {
                    $fullname = "empty";
                }

                //check the email
                if( isset($_POST['email']) && !empty($_POST['email']) ){
                    $email = $_POST['email'];
                }
                else {
                    $emailError = "empty";
                }

                //check subject
                if( isset($_POST['subject']) && !empty($_POST['subject']) ){
                    $subject = $_POST['subject'];
                }
                else {
                    $subjectError = "empty";
                }

                //check message
                if( isset($_POST['message']) && !empty($_POST['message']) ){
                    $message = $_POST['message'];
                }
                else {
                    $messageError = "empty";
                }


                //all the components of the email
                $to = 'bennyfrubin@gmail.com';
                $message = "Message received through personal website \n Name: " . $fullname . "\n Email: " . $email . "\n" . $message;
                $headers = array(
                    'From' => $email,
                    'Reply-To' => $email
                );
                $message = wordwrap($message, 70, "\r\n");
                // $eventType = $mysqli->real_escape_string($_POST['eventType']); 

                mail($to, $subject, $message, $headers);

                $newUrl = "contactConfirmed.php";
                // forward to confirmation
                // header('Location: ' . $newUrl);

            }

    }


?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90328546-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90328546-2');
</script>

    <title>Benjamin Floyd Rubin</title>
</head>

<body onload="divLoad('contact');">

<?php require "navigation.html"; ?>

    <div class="container-fluid">
        <div id="contactBox">
            <h1>CONTACT</h1>


            <p id="contactDescription">
                Feel free to reach out to me with any questions,<br/>concerns, proposals or opportunities. E-mail me at <a href="mailto:example@email.com" target="_blank">bennyfrubin@gmail.com</a>, or you may submit the form below and I will respond to you shortly. <br/><br/>
                Cheers!<br/>
            </p>

            <div id="contactForm">
            <div class="text-danger small">
                <?php if ( isset($error) && !empty($error) ){
                    echo $error;
                } ?>         
            </div>

                <form onsubmit="return validateForm();" method="POST" action="contact.php">
                    <div class="form-group">
                        <label for="fullname">Name</label>
                        <small id="fullnameError" class="form-text text-danger">
                        </small>
                        <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullnameError" placeholder="Enter name" required>

                    </div>   
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailError" placeholder="yourEmail@domain.com" required>
                         <small id="emailError" class="form-text text-danger">
                         </small>
                    </div>                     
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subjectHelp" placeholder="Subject for message" required>
                        <small id="subjectError" class="form-text text-danger">
                        </small>
                    </div>   
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your message here" required></textarea>
                        <small id="messageError" class="form-text text-danger">
                        </small>

                    </div>
                    <div class="form-group">
                        <div class="button" style="text-align: center">
                        <button class="btn btn-primary myButton" id="submitButton" type="submit">SUBMIT</button>
                    </div>  
                    </div>
                </form>

            </div>

        </div>
    </div>
   
   <?php require "social.html"; ?>

</body>

</html>

<script>
    function validateForm() {
        var fullname = document.getElementById("fullname").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;

        console.log("fullname is: " + fullname);
        console.log("email is: " + email);
        console.log("subject is: " + subject);
        console.log("message is: " + message);

        // make sure email is not empty
        if (fullname == "" || email == "" || subject =="" || message == ""){

            //make sure fullname is not empty
            if (fullname == ""){
                document.getElementById("fullnameError").innerHTML = "Please include your name";
            }
            //make sure email is not mepty
            if (email == "") {
                document.getElementById("emailError").innerHTML = "Email cannot be empty";    
            }
            //make sure subjectis not empty
            if (subject == ""){
                document.getElementById("subjectError").innerHTML = "Please include a subject";
            }
            if (message == ""){
                document.getElementById("messageError").innerHTML = "Don't forget your message!";
            }

            return false;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>