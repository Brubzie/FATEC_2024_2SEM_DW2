<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Título -->
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Cadastro de Usuário</h2>
                <form method="POST" action="" class="p-4 border rounded shadow-sm">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Nome:</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" pattern="[A-Za-zÀ-ÿ\s]+" title="O nome não pode conter números ou caracteres especiais" required>
                    </div>

                    <div class="mb-3">
                        <label for="lastName" class="form-label">Sobrenome:</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" pattern="[A-Za-zÀ-ÿ\s]+" title="O sobrenome não pode conter números ou caracteres especiais" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- PHP -->
    <?php
        function validar_post($dado_enviado) {
            return isset($dado_enviado) && !empty(trim($dado_enviado)) && preg_match("/^[A-Za-zÀ-ÿ\s]+$/", $dado_enviado);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (validar_post($_POST['firstName']) && validar_post($_POST['lastName'])) {
                $firstName = htmlspecialchars($_POST['firstName']);
                $lastName = htmlspecialchars($_POST['lastName']);

                echo '<div class="container mt-4">';
                echo '<div class="alert alert-success" role="alert">';
                echo 'Nome: ' . $firstName . '<br>Sobrenome: ' . $lastName;
                echo '</div></div>';
            } else {
                echo '<div class="container mt-4">';
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Por favor, preencha os campos corretamente (somente letras são permitidas)!';
                echo '</div></div>';
            }
        }
    ?>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" async defer></script>
</body>
</html>