<?php
 $conn = mysqli_connect("localhost", "root", "", "ramen");
   
 if(! $conn ) {
    die('Błąd połączenia z bazą danych: ' . mysqli_error());
 }
 $sql = 'SELECT * FROM artykuly';
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo(
           '<div class="art">
           <h4>'.$row["utworzony"].'</h4>
            <h2>'.$row["tytul"].'</h2>
            <img alt="miniaturka" src="'.$row["miniaturka"].'" />'.
            $row["tresc"].
            '</div>'
       );
    }
 } else {
    echo "0 results";
 }
 mysqli_close($conn);
?>