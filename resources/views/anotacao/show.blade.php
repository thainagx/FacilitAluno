<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>{{ $anotacao->titulo }}</li>
        <li>{{ $anotacao->conteudo }}</li>
        <li>{{ $anotacao->cor }}</li>
        <li><a href="{{ route('anotacao.edit', ['anotacao' => $anotacao]) }}">Editar</a></li>
        <li>
            <form method="POST" action="{{ route('anotacao.destroy', ['anotacao' => $anotacao]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>            
        </li>
    </ul>
</body>
</html>