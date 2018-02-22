<?php
//email2.php

if(isset($_POST['Submit'])){
    //send email?
//    echo '<pre>';
//    var_dump($_POST);
//    echo '</pre>';
    $to = "lori.mahieu@seattlecentral.edu";
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    $text = '';//initialize variable
    
    $text .= 'Name: '. $_POST['Name'] . PHP_EOL . PHP_EOL;
    $text .= 'Email: '. $_POST['Email'] . PHP_EOL . PHP_EOL;
    $text .= 'Comments: '. $_POST['Comments'] . PHP_EOL . PHP_EOL;
    
    mail("$to","$subject",$text);
    
    echo "email sent?";
}else{//show form!
    echo '
    <form action="" method="post">
    Name: <input type="text" name="Name" /><br />
    Email: <input type="email" name="Email" /><br />
    Comments: <textarea name="Comments"></textarea><br />
    <input type="submit" name="Submit" />
    </form>
    ';

}