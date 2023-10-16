<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>    
        
        <form action="ajout_db.php" method="POST">
            <table>
                <tr>
                    <th>Nom :</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td><input type="text" name="mail"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Valider"/></td>
                </tr>
            </table>
        </form>

    </body>
</html>