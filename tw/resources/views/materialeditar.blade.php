use App\Models\Produto

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
        <div class="lg:w-2/4 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar</h1>
            </div>

            @foreach($produto as $id)
                @csrf
                
            <form enctype="multipart/form-data" action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
              
                <div class="flex flex-wrap">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="descrição" class="leading-7 text-sm text-gray-600">Descrição</label>
                            <input  type="text" id="descrição" name="descrição" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            value="{{ $produto->descrição }}">
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="preço" class="leading-7 text-sm text-gray-600">Preço</label>
                            <input   type="text" id="preço" name="preço"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" 
                                   value="{{ $produto->preço }}" >
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="quantidade" class="leading-7 text-sm text-gray-600">Estoque</label>
                            <input  type="text" id="quantidade" name="quantidade"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                   value="{{ $produto->quantidade }}"}>
                        </div>
                    </div>
                    

                    
                    <div class="p-2 w-full">
                        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Editar</button>
                    </div>

                </div>
               @endforeach
            </form>
        </div>
    </div>
</section>

</body>
</html>
