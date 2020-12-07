<h2>Dodaj Newsa</h2>
<form method="post" action="/" enctype="multipart/form-data">
<table>
    <tr>
        <td>Tytuł:</td>
        <td><input type="text" name="title"></td>
    </tr>
    <tr>
        <td>Miniaturka:</td>
        <td><input type="file" name="thumb"></td>
    </tr>
    <tr>
        <td>Wiadomość:</td>
        <td><textarea name="art" rows="20" cols="60"></textarea></td>
    </tr>
    <tr>
        <td>Hasło administratora:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td><input type="hidden" name="form" value="addnews" /></td>
        <td><input type="submit" /></td>
    </tr>
</table>
</form>