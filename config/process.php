<?php
session_start();

include_once("connection.php");

include_once("url.php");

$data = $_POST;

if(!empty($data)){
    // Modificações do banco

    print_r($data);

    // Criar contato

    if($data["type"] === "create"){

        $name = $data["name"];

        $phone = $data["phone"];

        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) values (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);

        $stmt->bindParam(":phone", $phone);

        $stmt->bindParam(":observations", $observations);
        
        try{

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";

        }catch(PDOExceptions $e){
            $error = $e->getMessage();
            echo "erro: $error";
        }
    }
    //redirect HOME
    header("location: " . $BASE_URL . "../index.php");

}else{

    //SELEÇÃO DE DADOS

    $id = [];

    if(!empty($_GET)){

        $id = $_GET["id"];
    }

    if(!empty($id)){

        //retorna dados de um contato
        
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {

        // Retorna contatos
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

$conn=null;

?>