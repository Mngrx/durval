<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fale conosco - Email</title>
</head>
<body>

    <h2>Email de contato - Pelo Fale Conosco</h2>

    <table>
        <tr>
            <td>Enviado por:</td>
            <td>{{ $nome }}</td>
        </tr>
        <tr>
            <td>Setor:</td>
            <td>{{ $setor }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>UF:</td>
            <td>{{ $uf }}</td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td>{{ $cidade }}</td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td>{{ $telefone }}</td>
        </tr>
        <tr>
            <td>Mensagem:</td>
            <td>{{ $mensagem }}</td>
        </tr>
    </table>
</body>
</html>