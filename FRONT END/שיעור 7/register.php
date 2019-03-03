	<?php
	
   echo("Name: " . $_POST['name'] . "<br />\n");
    echo("E-mail: " . $_POST['email'] . "<br />\n");
   echo("Sex: " . $_POST['radiobutton'] . "<br />\n");
    echo ("Curses: ");
   foreach($_POST['curses'] as $check) {
            echo ( $check );
            echo (", ");
    }
   echo("<br />\n");
   echo("Location: " . $_POST['location'] . "<br />\n");
   echo("Comments: " . $_POST['comments'] . "<br />\n");
    

?>
