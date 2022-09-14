
<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
        <title>Document</title>
    </head>

<body class="bg-blue-500">
    <header>
        <div class=" bg-blue-100 w-96 h-32">
            <h1 class="text-center text-5xl font-bold">Gerador de Comissões</h1>
        </div>
        <nav>
            <div class="text-center text-2xl text-white font-bold space-x-48 ">
                <a href="/os">OS</a>
                <a href="/materiais">MATERIAIS</a>
                <a href="/apontamentos">APONTAMENTOS</a>
                <a href="/comissoes">COMISSÕES</a>
                <a href="/user">LOGIN</a>
            </div>
            <div class="bg-white rounded-md shadow-inner w-64 h-36 mt-4 ml-8 p-2">
                <h1 class="text-center font-bold">CADASTRAR</h1>
                <form action="">
                    <label for="">DESCRIÇÃO</label><br />
                    <input type="text" name="nome"><br />
                    <label for="">PREÇO</label><br />
                    <input type="text" name="preço"><br />
                    <label for="">QUANTIDADE</label><br />
                    <input type="text" name="quantidade"><br />
                    <button class="self-center bg-blue-600 text-white font-bold">SALVAR</button>


                </form>
            </div>
        </nav>