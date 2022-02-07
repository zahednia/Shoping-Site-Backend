<?php
    include ("includes/header.php");
?>
<br/>
<from name="register" action="action_register.php" method="GET">
    <table style="width: 50%;" border="0" style="margin-left:auto;margin-right:auto;"> 
    <tr>
        <td style="width: 40%;"> اسم واقعی<span style="color:red;">*</span> </td>
        <td style="width: 60%;"><input type="text"id="realname" name ="realname" /> </td>
   </tr>   
  
        <tr>
            <td>نام کاربری<span style="color:red;">*</span></td>
            <td><input type="text" style="text-align:left;" id="username" 
            name="username" /></input></td>
        </tr>
<tr>
    <td>رمز عبور<span style="color:red;">*</span></td>
    <td><input type="password" style="text-align:left"id="password" name="password" /> </td>
</tr>

<tr>
    <td>تکرار رمز عبور<span style="color:red;">*</span></td>
    <td><input type="password" style="text-align:left"id="repassword" name="repassword" /> </td>
</tr>

<tr>
    <tr>ایمیل<span style="color:red;">*</span></tr>
    <tr><input type="text" stylr="text-align:left;" id="email" name="email" /></tr>
</tr>

<tr>
    <td> <br/> </br> </ttd>
    <td> <input type="submit" value="Sign In"/>
            &nbsp; &nbsp; &nbsp;
            <input type="reset" value="Reset Fills"/> </td>
</tr>

</table>
</from>

<?php
    include ("includes/footer.php");
?>
