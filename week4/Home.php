
<?php 
include("check.php");
?> 

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
<br><br><br>

<br>
<a href="logout.php" style="font-size:18px">Logout</a>
<br><br><br><br>
<form method="post"action="">
    <fieldset>
        <div><legend>Bug</legend>
        <table width="400" border="0"cellpadding="10"cellspacing="10">
        <tr>
        <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right"><label for="title">Bugtitle:</label></div>
        </td>
        <td>
        <input name="title" type="text" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right">
        <label for="date">Date posted:</label>
        </div>
        </td>
        <td>
         
        <input name="date" type="date" class="input" size="25" required/>
        </td>
        </tr>
        <br><br>
        <tr>
        <td style="font-weight:bold">
        <div align="right">
        <label for="date">Date fixed:</label>
        </div>
        </td>
        <td>
         
        <input name="date" type="date" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight: bold">
        <div align="right">
        <label>Bug description:</label></td>
<td><textarea name="comments" cols="45" rows="5"required>
</textarea>
        </td>
        </tr>
        </tr>
        <td style="font-weight:bold">
        <div align="right"><label for="title">UserID:</label></div>
        </td>
        <td>
        <input name="title" type="text" class="input" size="25" required/
        </td>
        <tr>
            <tr>
                <br><br>
               <td style="font-weight:bold">
        <div align="right"><label for="title">fixedBugID:</label></div>
        </td>
        <td>
        <input name="title" type="text" class="input" size="25" required/
        </td>
        <tr>
            <tr> 
            
        <td hight="23"></td>
        <td>
        <div align="right">
        <input type="submit" name="submit" value="Post!" />
        </div>
        </td>
        </tr>
        </table> </div>
        <br><br>
        <div>
            <section>
        <legend>Bug comment</legend>
        <table width="400" border="0"cellpadding="10"cellspacing="10">
        <tr>
        <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right"><label for="name">Username:</label></div>
        </td>
        <td>
        <input name="name" type="text" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right">
        <label for="date">Date:</label>
        </section>
        </div>
        </td>
        <td>
         
        <input name="date" type="date" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight: bold">
        <div align="right">
        <label>Comment:</label></td>
<td><textarea name="comments" cols="45" rows="5"required>
</textarea>
        </td>
        </tr>
        </tr>
        <td hight="23"></td>
        <td>
        <div align="right">
        <input type="submit" name="submit" value="Post!" />
        </div>
        </td>
        </tr>
        </table>
        </div>
        </fieldset>
        
        </form>
        
</body>
</html>
