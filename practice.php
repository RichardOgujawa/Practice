<?php
//Message Vars
$msg = ''; //This is the message that will be outputed, it's emtpy because we fill it with text when we need it (i.e. in the Passed and Failed sections)
$msgClass = ''; //This allows you to give the message some properties, like red text. It's empty for the same reason as above
//Check For Submit

if(filter_has_var(INPUT_POST, 'submit')){
    //Get Form Data 
    $name = $_POST['name']; //grab the variables from the form
    $email = $_POST['email']; 
    $message = $_POST['message']; 

    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)) {
        //Passed 
    } else {
        //Failed

        $msg = 'Please fill in all fields'; //message outputed if the form isn't filled out
        $msgClass = 'alert-danger'; //we'll use this class to make the text red in css
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact us page for the site">
    <meta name="keywords" content="contact form">
    <meta name="author" content="Richard Ogujawa">

    <title>Contact Us</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="" href="">
    <link rel="" href="">

    <script src></script>
    <script src></script>
    <script src></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container notThis">

            <div class="navbar-header">
                <a class="navbar-brand" href="practice.php">My Website </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--PHP_SELF just means that it echoes to itself-->
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>