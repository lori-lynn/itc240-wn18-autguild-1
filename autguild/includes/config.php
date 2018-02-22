<?php
/*config.php

put configuration information here


*/

define('DEBUG',TRUE); #we want to see all errors

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));//creating a constant, we need two things, the word that defines it, and the data it holds. 

$nav1['index.php'] = "HOME";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['contact.php'] = "CONTACT";
$nav1['daily.php'] = "DAILY";

//defaults for header.php
$banner= 'AUTGuild';
$slogan = 'Sell shit and stay angry';

switch(THIS_PAGE){
        
    case 'template.php':
        $title = 'Template Page';
    break;
    
    default:
        $title = THIS_PAGE;
}
//OTHER INCLUDE FILES REFERENCED HERE:
include 'credentials.php';

//echo DB_HOST; to test the connection to credential file
//die;


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
        //echo '<li><a href="' . $url . '">' . $text . '</a></li>';

        if(THIS_PAGE == $url)
        {//current page - add highlight
              echo '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }else{//no highlight
             echo '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }
        
        
        
        
        
        
      
    }

}//end coffee_links()

?>