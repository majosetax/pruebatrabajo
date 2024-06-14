<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <table id="tabla">
        @forelse ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>vacio</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">nada</td>
        </tr>
        @endforelse

    </table>
    <input type="text" name="input1" id="input1">
    <button name="button1" onclick="crear('{{ url('/store') }}')">Enviar</button>
    @csrf
</body>
</html>
