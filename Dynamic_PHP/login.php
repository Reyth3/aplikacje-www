<div>
<?php
if(isset($_SESSION["user_token"]))
{
?>
<form method="post" action="/">
Jesteś zalogowany. 
<input type="hidden" name="form" value="logout" />
<input type="submit" value="Wyloguj" />
</form>
<?php
}
else 
{
?>
<form method="post" action="/">
<table>
    <tr>
        <td>Użytkownik:</td>
        <td><input type="text" name="user" /></td>
    </tr>
    <tr>
        <td>Hasło:</td>
        <td><input type="password" name="password" /></td>
    </tr>
    <tr>
        <td><input type="hidden" name="form" value="login" /></td>
        <td><input type="submit" /></td>
    </tr>
</table>
</form>
<?php
}
?>
</div>