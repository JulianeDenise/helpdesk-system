<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk - Meus Chamados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <h2 class="logo">
            <span class="destaque-logo">J.D</span>Solutions
        </h2>
        <nav>
            <ul>
                <li><a href=#>MEUS CHAMADOS</a></li>
                <li><a href=#>AJUDA</a></li>
                <li><a href=#>SAIR</a></li>
            </ul>
        </nav>
    </header>


    <h1 class="titulo-pagina">ABERTURA DE CHAMADO</h1>

    <form class="formulario-chamado" id="formulario-chamado" action="salvar-chamado.php" method="POST">

        <!-- coluna da esquerda-->
        <div class="coluna">

            <div class="campo">
                <label for="usuario">Usuário:</label>
                <div class="input-icone">
                    <i class="fa-regular fa-user icone"></i>
                    <input type="text" id="usuario" name="usuario">
                </div>
            </div>

            <div class="campo">
                <label for="titulo">Título do Problema:</label>
                <div class="input-icone">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <input type="text" id="titulo" name="titulo" placeholder="Ex: Erro na impressora" required>
                </div>
            </div>

            <div class="campo">
                <label for="descricao">Descrição</label>
                <div class="input-icone">
                    <i class="fa-solid fa-align-left"></i>
                    <textarea id="descricao" name="descricao" placeholder="Descreva o problema..." required></textarea>
                </div>

            </div>

        </div>

        <!-- coluna da direita-->
        <div class="coluna">

            <div class="campo">
                <label for="email">Email:</label>
                <div class="input-icone">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="campo">
                <label for="categoria">Categoria</label>
                <div class="input-icone">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <select id="categoria" name="categoria">
                        <option value="">Selecione uma categoria</option>
                        <option value="Redes">Redes</option>
                        <option value="Sistemas">Sistemas</option>
                        <option value="Hardware">Hardware</option>
                    </select>
                </div>
            </div>

            <div class="container-button">
                <button type="submit" class="btn-enviar">ENVIAR CHAMADO</button>
            </div>
        </div>

    </form>

    <script>
        const form = document.getElementById('formulario-chamado');

        form.addEventListener('submit', function(event) {
            //event.preventDefault();

            const titulo = document.getElementById('titulo').value.trim();

            if (titulo === "") {
                alert("Por favor, preencha o título do chamado!");
                return;
            }

            alert("Chamado criado com sucesso!");
            //window.location.href = "meus-chamados.html";
        });
    </script>

</body>

</html>