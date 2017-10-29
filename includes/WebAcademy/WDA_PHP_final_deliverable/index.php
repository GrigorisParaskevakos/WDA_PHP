<?php           
// Check form submission: 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['submitted'])){
        $errors = array(); //Initialize an error array.
        // Check for a first name:
        if (empty($_POST['Name'])) { 
            $errors[] = 'You forgot to enter your first name.';
        }
        else{
            $name = trim($_POST['Name']);
        }  
        //Check for an email address:
        if (empty($_POST['Email'])){
            $errors[] = 'You forgot to enter your email address.';
        }
        else{
            $email = trim($_POST['Email']);
        }
        // Check for the comment
        if (empty($_POST['Comment'])){
            $errors[] = 'You forgot to enter your comment.';
        }
        else{
            $comment = trim($_POST['Comment']);
        }
        //everything is OK
        if (empty($errors)){ 
            require_once('../mysqli_connect.php'); //Connect to the db
            /////////////////////////////////////////Make the query:\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
            $q = "INSERT INTO webacademydb.contact (Name, Email, Comment, Comment_date) VALUES ('$name', '$email','$comment', NOW())";
            $r = @mysqli_query ($dbc, $q); // Run the query.
            if ($r){ //if it ran OK
                //Print a message:
                echo "<div class='col-md-12 success'><div class='row none'><span>Thank you for your <a class='wordFeedback' href='feedback.php' target='_blank'>feedback!</a></span></div></div>";
                include ("includes/header.html");
                include ("includes/main.html");
                include ("includes/contact.html");  
                include ("includes/footer.html");
            }
            else{ //if it did not run OK
                //Public message:
                echo '<h1 class="error">OOOps System Error</h1><p class="error">You could not send feedback due to a system error.</p>';
                include ("includes/header.html");
                include ("includes/main.html");
                include ("includes/contact.html");  
                include ("includes/footer.html");
                //Debugging message:
                echo '<p class="error">'.mysqli_error($dbc).'<br/><br/>Query: '.$q.'</p>'; 
                include ("includes/header.html");
                include ("includes/main.html");
                include ("includes/contact.html");  
                include ("includes/footer.html");
            }//End of if ($r) IF.
            mysqli_close($dbc); //close the db connection
            exit();
        }
        //Report the errors.
        else{   
            echo '<h1 class="error">OOOps Error!</h1><p class="error">The following error(s) occurred:<br/>';
            foreach ($errors as $msg){ //Print each error.
                echo " - $msg<br/>\n";
                
            }
            echo '<p class="error">Please try again</p><p><br/></p>';
            include ("includes/header.html");
            include ("includes/main.html");
            include ("includes/contact.html");  
            include ("includes/footer.html");
        } // End if (empty($errors))  
    } //End if submitted
}//End if REQUEST_METHOD
include ("includes/header.html");  
include ("includes/main.html");
include ("includes/contact.html");  
include ("includes/footer.html");  
?>
