
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>    
        <?php
            $id_modif = $_POST['modif_id'];
            $name_modif = $_POST['modif_name'];
            $mail_modif = $_POST['modif_mail'];
        ?>
            <form action="modif_vali_db.php" method="POST">
            <table>
                <tr>
                    <td><input type="hidden" name="id_modif" value= <?php echo $id_modif;?> ></td>
                </tr>
                <tr>
                    <th>Nom :</th>
                    <td><input type="text" name="name_modif" value=<?php echo $name_modif;?> required minlength="1"></td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td><input type="email" name="mail_modif" value=<?php echo $mail_modif;?> required minlength="1"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Valider"/></td>
                </tr>
            </table>
        </form>

    </body>
</html>