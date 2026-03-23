<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cálculo do imc</title>
</head>
<body>
    <h1>Dados imc</h1>
    <form method='post' action='/aluno/salvar'>
        @csrf
        Peso: <br>
        <input type="number" name="peso"><br>
        Altura: <br>
        <input type="number" name="altura"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>