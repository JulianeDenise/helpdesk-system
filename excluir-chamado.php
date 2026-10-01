<?php
require_once 'conexao.php';

// Verifica se o ID do chamado foi enviado pela URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $idChamado = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    if ($idChamado) {
        try {
            // Soft Delete: Atualiza o campo Deletado para 1 sem apagar o registro do banco
            $sql = "UPDATE Chamados SET Deletado = 1 WHERE idChamado = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $idChamado, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir o chamado: " . $e->getMessage();
            exit;
        }
    }
}

// Redireciona de volta para a lista de chamados
header('Location: meus-chamados.php');
exit;
?>