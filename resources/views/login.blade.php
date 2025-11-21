@extends('/inicio')

@section('titulo','Login - Misericordia')

@section('contenido')
  <!-- CONTENIDO PRINCIPAL -->
  <main class="flex flex-col flex-grow items-center justify-center p-6">
    
 <!-- Imagen superior -->
<section class="w-full flex flex-col justify-center items-center   rounded-lg p-4">
  <img src="/pictures/Login/banner.png" 
       alt="Acceso Farmacia VidaPlena" 
       class="w-full md:w-3/5 lg:w-2/5 max-h-72 object-cover rounded-lg shadow-md mx-auto">
</section>

    <!-- Tarjetas de login y registro -->
    <div class="flex flex-col md:flex-row gap-6 justify-center">

      <!-- Login -->
      <section class="flex flex-col bg-gray-300 p-6 rounded-lg w-80 shadow-md">
        <h2 class="text-center text-gray-700 font-bold mb-4">Iniciar Sesión</h2>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Nombre</label>
          <input type="text" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Correo electrónico</label>
          <input type="email" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="flex flex-row justify-center">
          <button class="bg-blue-500 text-white rounded px-6 py-2 mt-4 hover:bg-blue-600 transition"><a href="/Perfil">Perfil</a></button>
        </div>
      </section>

      <!-- Registro -->
      <section class="flex flex-col bg-gray-300 p-6 rounded-lg w-80 shadow-md">
        <h2 class="text-center text-gray-700 font-bold mb-4">Registrar Usuario</h2>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Nombre</label>
          <input type="text" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Correo electrónico</label>
          <input type="email" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="flex flex-row justify-center">
          <button class="bg-green-500 text-white rounded px-6 py-2 mt-4 hover:bg-green-600 transition">Registrar</button>
        </div>
      </section>

    </div>
  </main>

</body>
</html>

@endsection