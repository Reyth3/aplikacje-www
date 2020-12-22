<div id="TRESC">
    <?php
        if(isset($_POST["form"])) // różne formularze dostępne na stronie
        {
            $form = $_POST["form"];
            if($form == "contact")
                echo ("<h3>Dziękujemy za wiadomość.</h3> <a href='/''>Strona główna ></a>");
            else if ($form == "delivery")
            {
                echo ("Dziękujemy za zgłoszenie zamówienia.");
            }
            elseif($form == "logout") {
                session_destroy();
                header("Refresh:0; url=/");
            }
            elseif($form == "login")
            {
                $_SESSION["user_token"] = "1";
                header("Refresh:0; url=/");
            }
            else if ($form == "addnews")
            {
                $a_title = $_POST["title"];
                $a_password = $_POST["password"];
                $a_thumb = 0;
                $a_art = $_POST["art"];
                
                if($a_password == "1234") {
                $target_dir = "art/";
                $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["thumb"]["tmp_name"]);
                if($check !== false) {
                    if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
                        $a_thumb = $target_file;
                    }
                } else {
                    echo "File is not an image.";
                }

                $html = '<div class="art">'.
                '<h2>'.$a_title.'</h2>'.
                '<img src="'.$a_thumb.'" alt="lorem ipsum ramen" />'.
                $a_art.'</div>';
                if($a_thumb !== 0) {
                $html_file = fopen($target_dir.sprintf('%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535)).'.html', "w");
                fwrite($html_file, $html);
                fclose($html_file);
                echo("<h2>News dodany poprawnie!</h2>");
                }
                else echo("News nie został dodany.");
            }
        }
                else echo("Nie masz uprawnień, aby dodawać newsy.");
            }
        elseif(!isset($_GET["content"])) // strona główna
            include("content/news.php");
        else { // zawartość podstron
            $content = $_GET["content"];
            $path = "content/".$content.".php";
            if(file_exists($path))
                include($path);
        }
    ?>
</div>