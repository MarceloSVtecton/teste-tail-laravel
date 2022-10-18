
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

<body class="bg-blue-300">
    <header>
        <div class=" bg-blue-100 w-96 h-32">
            <h1 class="text-center text-5xl font-bold">Gerador de Comissões</h1>
        </div>
        <nav>
        <div class="text-center text-l text-black font-bold space-x-48 ">
                <a href="/ordem_serviço">OS</a>
                <a href="/colaboradores">PRODUTIVOS</a>
                <a href="/materiais">MATERIAIS</a>
                <a href="/apontamentos">APONTAMENTOS</a>
                <a href="/comissoes">COMISSÕES</a>
                <a href="/user">LOGIN</a>
            </div>
       
        </nav>

        <section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Produtos</h1>
                <a href="/materialincluir" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
            </div>
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr >
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Valor</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Estoque</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($produtos as $produto)
                @csrf
                <tr @if($loop->even)class="bg-gray-100"@endif>
                    <td class="px-4 py-3">{{ $produto->id }}</td>
                   
                    <td class="px-4 py-3">{{ $produto->descrição }}</td>
                    <td class="px-4 py-3">{{ $produto->preço }}</td>
                    <td class="px-4 py-3">{{ $produto->quantidade }}</td>
                    <td class="px-4 py-3 text-right text-black title-font tracking-wider font-medium ">
                        <a href="/materialeditar" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Deletar</a>
                    </td>
               
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


</footer>