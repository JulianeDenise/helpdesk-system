<?php
require_once 'conexao.php';

try{

    $sql = "SELECT idChamado, Titulo, Categoria, Status, DataCriacao 
            FROM Chamados 
            WHERE Deletado = 0 
            ORDER BY idChamado DESC";

    $stmt = $pdo->query($sql);
    $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar chamados: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.D Solutions - Meus Chamados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    
    <header>
        <h2 class="logo">
            <span class="destaque-logo">J.D</span>Solutions
        </h2>
        <nav>
            <ul>
                <li><a href="meus-chamados.php">MEUS CHAMADOS</a></li>
                <li><a href="#">AJUDA</a></li>
                <li><a href="#">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <!--  trava e centraliza alinhamento -->
    <main class="container-principal">
        
        
        <div class="cabecalho-secao">
            <h1 class="titulo-pagina">MEUS CHAMADOS</h1>
            <a href="index.php" class="btn-enviar">NOVO CHAMADO</a>
        </div>

        <!-- quadro branco -->
        <div class="formulario-chamado container-tabela">
            <table class="tabela-chamados">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Ações</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($chamados)): ?>
                        <tr>
                            <td colspan="6" style="text-align: center;">Nenhum chamado encontrado.</td>  
                        </tr>
                    
                    <?php else: ?>
                        <?php foreach ($chamados as $chamado): ?>
                            <?php
                                $statusClass = strtolower(str_replace(' ', '-', $chamado['Status']));
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($chamado['idChamado']) ?></td>
                                <td><?= htmlspecialchars($chamado['Titulo']) ?></td>
                                <td><?= htmlspecialchars($chamado['Categoria']) ?></td>
                                <td><?= date('d/m/Y H:i', strtotime($chamado['DataCriacao'])) ?></td>
                                <td> 
                                    <span class="status-badge <?= $statusClass ?>">
                                        <?= htmlspecialchars($chamado['Status']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="excluir-chamado.php?id=<?= $chamado['idChamado'] ?>" 
                                        class="btn-excluir" 
                                        onclick="return confirm('Tem certeza que deseja excluir este chamado?');"
                                        title="Excluir Chamado">
                                        &times;
                                    </a>
                                </td>
                                
                            </tr>   
                        <?php endforeach; ?>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </main>
</body>
</html>