<?php
       include ("includes/header.php");


        if (isset($_POST['realname']) &&  ($_POST['realname'] !="")
             isset($_POST['username']) &&  ($_POST['username'] !="")
                    isset($_POST['password']) && ($_POST['password'])
                    isset($_POST['repassword']) &&  ($_POST['repassword']!="")
                isset($_POST['email']) && ($_POST['email'] !="")
        )
            
                    {

                $realname=$_GET['realname'];
                $username=$_GET['username'];
                        $password=$_GET['password'];
                        $repassword=$_GET['repassword'];
                    $email=$_GET['email'];

                    }

                                    else 
                                        exit ("لطفا کامل کنید");
?>

<div dir="ltr" style="text-align:left;">

<?php

    echo("realname=".$realname."<br/>");
    echo("username=".$username."<br/>");
            echo("password=".$password."<br/>");
            echo("repassword=".$repassword."<br/>");
        echo("email=".$email."<br/>");

?>

</div>

    <?php
        include ("includes/footer.php");
     ?>
