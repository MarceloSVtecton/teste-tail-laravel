
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
        <div class="text-center text-l text-white font-bold space-x-48 ">
                <a href="/ordem_serviço">OS</a>
                <a href="/colaboradores">PRODUTIVOS</a>
                <a href="/materiais">MATERIAIS</a>
                <a href="/apontamentos">APONTAMENTOS</a>
                <a href="/comissoes">COMISSÕES</a>
                <a href="/user">LOGIN</a>
            </div>
       
        </nav>
        <section class="text-white body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
            <h1 class= "mb-10 font-bold text-2xl">Cadastrar Material</h1>
    <form action="">
              <label for="">descrição</label> <br />
              <input type="text" autocomplete="of" name="descrição" class="text-black"> <br />
              <label for="">preço</label> <br /> 
              <input type="text" autocomplete="of" name="preço" class="text-black"> <br />
              <label for="">quantidade<label> <br />
              <input type="text" autocomplete="of" name="quantidade" class="text-black"> 
        
        </div>
       
        <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">ENVIAR</button>
      </div>
    </form>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
        <h1 class= "mb-10 font-bold text-2xl">Registrar Gastos</h1>
        <form action="">
              <label for="">os</label> <br />
              <input type="text" autocomplete="of" name="descrição" class="text-black"> <br />
              <label for="">material</label> <br /> 
              <select name="produto" id="produto"  class="text-black w-40"></select> <br />
              <label for="">quantidade<label> <br />
              <input type="text" autocomplete="of" name="quantidade" class="text-black"> 
        
          
        </div>
       
        <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">ENVIAR</button>
      </div>
      </form>
    </div>
  </div>
            