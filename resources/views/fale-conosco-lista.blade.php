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
            <th>Enviado por</th>
            <th>Email</th>
            <th>Setor</th>
            <th>UF</th>
            <th>Cidade</th>
            <th>Telefone</th>
            <th>Mensagem</th>
        </tr>
        @foreach ($mensagens as $msg)
            <tr>
                <td>{{ $msg->nome }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->setor }}</td>
                <td>{{ $msg->uf }}</td>
                <td>{{ $msg->cidade }}</td>
                <td>{{ $msg->telefone }}</td>
                <td>{{ $msg->mensagem }}</td>
                
            </tr>
        @endforeach    
    </table>
</body>
</html>