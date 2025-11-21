@extends('/inicio')

@section('titulo','Perfil')

@section('contenido')
<!-- CONTENIDO PRINCIPAL -->
  <main class="flex flex-col flex-grow  p-4 bg-gray-50">
    <!-- Perfil -->
    <section class="flex flex-col items-center m-4 p-6 rounded-lg">
      <div class="flex justify-center items-center m-4">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
             alt="Foto de perfil" 
             class="h-32 w-32 sm:h-40 sm:w-40 rounded-full border-4 border-gray-400 shadow-md bg-white">
      </div>
      <p class="text-gray-700 font-bold text-lg mt-2">Usuario</p>
    </section>

    <!-- Cuadros de información -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 m-4">
      <!-- Dirección -->
      <div class="flex flex-col bg-white shadow-md p-4 rounded-lg">
        <h2 class="text-gray-600 font-semibold mb-2">Dirección</h2>
        <div class="flex flex-col p-4 text-gray-700 rounded">
          <p><span class="font-semibold">Calle:</span> Av. Salud y Bienestar #123</p>
          <p><span class="font-semibold">Colonia:</span> Centro</p>
          <p><span class="font-semibold">Ciudad:</span> Monterrey, N.L.</p>
          <p><span class="font-semibold">Código Postal:</span> 64000</p>
        </div>
      </div>

      <!-- Información general -->
      <div class="flex flex-col bg-white shadow-md p-4 rounded-lg">
        <h2 class="text-gray-600 font-semibold mb-2">Información</h2>
        <div class="flex flex-col  p-4 text-gray-700  rounded">
          <p><span class="font-semibold">Nombre:</span> Luis Ramírez</p>
          <p><span class="font-semibold">Correo electrónico:</span> lramirez@farmaciasalud.com</p>
          <p><span class="font-semibold">Teléfono:</span> +52 81 5555 2233</p>
          <p><span class="font-semibold">Membresía:</span> Cliente Frecuente (Nivel Oro)</p>
        </div>
      </div>

      <!-- Historial -->
      <div class="flex flex-col bg-white shadow-md p-4 rounded-lg">
        <h2 class="text-gray-600 font-semibold mb-2">Historial</h2>
        <div class="flex flex-col  p-4 text-gray-700 rounded">
          <ul class="list-disc pl-5 space-y-1">
            <li><span class="font-semibold">10 Oct 2025:</span> Compra de medicamentos generales ($450 MXN)</li>
            <li><span class="font-semibold">25 Sep 2025:</span> Recarga de vitaminas y suplementos ($320 MXN)</li>
            <li><span class="font-semibold">12 Ago 2025:</span> Pedido en línea – Entrega a domicilio ($890 MXN)</li>
          </ul>
        </div>
      </div>

      <!-- Cambiar contraseña -->
      <div class="flex flex-col bg-white shadow-md p-4 rounded-lg">
        <h2 class="text-gray-600 font-semibold mb-2">Cambiar contraseña</h2>
        <div class="flex flex-col  p-4 text-gray-700  rounded">
          <label for="actual" class="text-sm font-semibold mb-1">Contraseña actual:</label>
          <input id="actual" type="password" class="p-2 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">

          <label for="nueva" class="text-sm font-semibold mb-1">Nueva contraseña:</label>
          <input id="nueva" type="password" class="p-2 mb-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">

          <label for="confirmar" class="text-sm font-semibold mb-1">Confirmar nueva contraseña:</label>
          <input id="confirmar" type="password" class="p-2 mb-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">

          <button class="bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Actualizar contraseña</button>
        </div>
      </div>
    </section>
  </main>
@endsection