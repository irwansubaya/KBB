<?php echo form_open('login/login/proseslogin');?>
<table border="0" align="center">
    <tr>
        <td></td>
        <td><h2>User Login</h2></td>
    </tr>
    <tr>
        <td> Username</td>
        <td><?php echo form_input('username');?> </td>
    </tr>
    <tr>
        <td> Password</td>
        <td><?php echo form_password('password');?></td>
    </tr>
    <tr>
        <td>&nbsp;  </td>
        <td><input name="submit" type="submit" class="btn btn-primary" value="Login" ></td>
    </tr>
</table>
<?php echo form_close();?>
<?php
if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
if(isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>";
?>