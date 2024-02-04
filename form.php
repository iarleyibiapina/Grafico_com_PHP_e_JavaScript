<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-group center">
        <div class="form-header">
            <h1>Adicionar dados ao grafico</h1>
        </div>
        <form action="save.php" method="post">
            <a href="index.php">Voltar</a>
            <div class="input-select">

                <label for="group">Qual seu grupo?</label>
                <select name="group" id="group">
                    <option selected value="1">Grupo 1</option>
                    <option value="2">Grupo 2</option>
                    <option value="3">Grupo 3</option>
                </select>
            </div>
            <div class="input-select">
                <label for="value">Qual sua cor?</label>
                <select name="value" id="value">
                    <option selected value="1">Azul</option>
                    <option value="2">Vermelho</option>
                    <option value="3">Amarelo</option>
                </select>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>