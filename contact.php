<!DOCTYPE html>


<?php
//PHP validation on form input
$firstName = $lastName = $reference = "";
$email = $_POST["email"];

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
//   $gender = test_input($_POST["gender"]);
//   $feedback = test_input($_POST["feedback"]);
  
// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<?php

//defining the variables
//these are the variables for the error messages
$firstNameErr = $lastNameErr = $referenceErr = "";
$firstNameFull = $lastNameFull = $referenceFull = false;
// $name = $gender = $reference = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $firstNameErr = "Name is required.";
  }
  else {
    $firstName = test_input($_POST["name"]);
    $firstNameFull = true;
  }

  if (empty($_POST["gender"])) {
    $lastNameErr = "Gender is required.";
  }
  else {
    $lastName = test_input($_POST["gender"]);
    $lastNameFull = true;
    }

  if (empty($_POST["feedback"])) {
    $referenceErr = "Your feedback is required.";
  }
  else {
    $reference = test_input($_POST["feedback"]);
    $referenceFull = true;
  }
}
  if ($firstNameFull = $lastNameFull = $referenceFull === TRUE) {
    echo"<script type='text/javascript'>alert('Feedback submitted succesfully!');</script>";
  }
 ?>
<html>
    <head>
        <title>Roll of the Dice - Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>


        <script>
        </script>

    </head>
    <body>
        <nav class="navigation">
            <ul>
                <li>
                    <a class="indexLink" href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <a class="aboutLink" href="about.html">
                        About SeaMi Studios
                    </a>
                    
                </li>
                <li>
                    <a class="contactLink" href="contact.php">
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        <header id="mainHeader">
            <h1> Contact Us</h1>
        </header>
        <section id="boxes">
            <article class="one"></article>
            <article class="two"></article>
            <article class="three"></article>
            <article class="four"></article>
            <article class="five"></article>
            <article class="six"></article>
        </section>
            <section id="contact">
                <article class="form">
                    <h2>Please leave your details below.</h2>
                    <article class="contactDetails">
                        <form class="userForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); method="JQUERY/post">
                            <p>Name:</p><input class="name" label="name" type="text"/>
                            <br><br>
                            <p>eMail:</p><input class="email" label="email" type="email"/>
                            <br>
                            <br>
                            <p>Feedback:</p>
                            <textarea cols="40" rows="5" class="textArea" name="feedback" type="text"></textarea>
                            <br>
                            <br>
                            <button class="submit" type="button">Submit Feedback</button>
                        </form>
                    </article>
                </article>
                
                <aside class="feedback">

                </aside>
            </section>
            
        
        <footer class="footer">
            <nav class="navigation">
                <ul>
                    <li>
                        <a class="indexLink" href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="aboutLink" href="about.html">
                            About SeaMi Studios
                        </a>
                        
                    </li>
                    <li>
                        <a class="contactLink" href="contact.html">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
        </footer>
        

    </body>
</html>