<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // pega os dados enviados pelo formulario
    $titulo    = trim($_POST['titulo']);
    $categoria = trim($_POST['categoria']);
    $descricao = trim($_POST['descricao']);

    //usuario padrao
    $idUsuario = 1;

        //validacao
    if (!empty($titulo) && !empty($categoria) && !empty($descricao)) {
        try {
                //comando do sql
            $sql = "INSERT INTO Chamados (Titulo, Categoria, Descricao, idUsuario) 
                    VALUES (:titulo, :categoria, :descricao, :idUsuario)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':categoria', $categoria);
            $stmt->bindValue(':descricao', $descricao);
            $stmt->bindValue(':idUsuario', $idUsuario);
            
            $stmt->execute();

            //redirecionando
            header('Location: meus-chamados.php');
            exit;

        } catch (PDOException $e) {
            echo "Erro ao salvar o chamado: " . $e->getMessage();
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>