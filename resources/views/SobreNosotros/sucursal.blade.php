@extends('/index')

@section('titulo','Sucursales')

@section('contenido')

<!-- MAIN -->
  <main class="flex flex-col flex-grow bg-gray-50 p-4 space-y-8">
    <!-- Sección de imagen y horarios -->
    <div class="flex flex-col md:flex-row w-full h-auto md:h-64 rounded-xl p-4 space-y-4 md:space-y-0 md:space-x-4 ">
      <!-- Imagen lado izquierdo -->
      <div class="flex w-full md:w-1/2  items-center justify-center rounded-lg overflow-hidden">
        <img 
          src="/Pictures/Inicio/farmacias-pjpg.webp" 
          alt="Sucursal Farmacia Misericordia" 
          class="w-full h-full object-contain object-center rounded-lg"
        >
      </div>

      <!-- Horarios lado derecho -->
      <div class="flex flex-col w-full md:w-1/2 bg-white shadow-md p-6 rounded-lg justify-center shadow-inner">
        <h2 class="text-2xl font-bold mb-3 text-gray-800">Horarios de atención</h2>
        <ul class="text-gray-700 space-y-1">
          <li><strong>Lunes a Viernes:</strong> 8:00 a.m. – 9:00 p.m.</li>
          <li><strong>Sábado:</strong> 9:00 a.m. – 7:00 p.m.</li>
          <li><strong>Domingo:</strong> 10:00 a.m. – 5:00 p.m.</li>
        </ul>
        <p class="mt-3 text-sm text-gray-600 italic">
          *Atención continua en farmacia y servicio a domicilio disponible.
        </p>
      </div>
    </div>

    <!-- Sección de opiniones -->
    <div class="flex flex-col bg-white shadow-md w-full p-6 rounded-xl shadow-lg">
      <h2 class="text-2xl font-bold mb-4 text-gray-800">Opiniones de nuestros clientes</h2>
      <div class="space-y-4">
        <div class="p-4 rounded-lg ">
          <p class="font-semibold text-gray-800">María López ⭐⭐⭐⭐⭐</p>
          <p class="text-gray-700 text-sm">Excelente atención y buenos precios. Siempre encuentro los medicamentos que necesito.</p>
        </div>
        <div class="p-4 rounded-lg">
          <p class="font-semibold text-gray-800">Carlos Méndez ⭐⭐⭐⭐☆</p>
          <p class="text-gray-700 text-sm">Muy buena atención, aunque a veces hay algo de fila. El personal es amable y rápido.</p>
        </div>
        <div class="p-4 rounded-lg">
          <p class="font-semibold text-gray-800">Ana Torres ⭐⭐⭐⭐⭐</p>
          <p class="text-gray-700 text-sm">Farmacia limpia, organizada y con servicio a domicilio puntual. Muy recomendable.</p>
        </div>
      </div>
    </div>
  </main>

@endsection