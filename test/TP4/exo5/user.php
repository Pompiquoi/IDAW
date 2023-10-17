<?php

    require_once('init_pdo.php');
    header('Content-Type: application/json');

    switch ($_SERVER['REQUEST_METHOD']){

        case 'GET':

            if(isset($_GET['id'])){
                $id = $_GET['id'];
            } else{
                http_response_code(422);
                echo json_encode(["message"=>"Paramètre manquant"]);

                /*** close the database connection ***/
                $pdo = null;

                exit;
            }

            $request = $pdo->prepare("SELECT * FROM users WHERE id = '" . $id . "'");
            

            if($request->execute()){
                $reponse = $request->fetchAll(PDO::FETCH_OBJ);
                http_response_code(200);
                echo json_encode($reponse);
            }else{
                http_response_code(500);
                echo json_encode(["message" => "Erreur lors de l'affichage de l'utilisateur."]);
            }

            break;
        
    }

    /*** close the database connection ***/
    $pdo = null;

?>