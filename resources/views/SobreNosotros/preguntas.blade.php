@extends('/inicio')

@section('titulo','Preguntas Frecuentes')

@section('contenido')

  <main class="flex flex-col w-full min-h-screen bg-gray-200 px-4 py-6 sm:px-8">
  <section class="max-w-4xl mx-auto w-1/3 bg-white rounded-lg shadow-lg p-4 sm:p-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-center mb-6">Preguntas Frecuentes</h1>

    <!-- Contenedor de acordeón -->
    <div id="acordeon" class="space-y-4 text-sm sm:text-base">

      <div class="border-b border-gray-300 pb-4 pregunta">
        <h2 id="pregunta1" class="pregunta-titulo text-lg sm:text-xl font-semibold cursor-pointer text-blue-700 hover:text-blue-900">
          ¿Cómo puedo realizar un pedido?
        </h2>
        <p id="respuesta1" class="respuesta hidden mt-2 text-gray-700">
          Selecciona los productos que desees, agrégalos al carrito y sigue las instrucciones del proceso de compra.
        </p>
      </div>

      <div class="border-b border-gray-300 pb-4 pregunta">
        <h2 id="pregunta2" class="pregunta-titulo text-lg sm:text-xl font-semibold cursor-pointer text-blue-700 hover:text-blue-900">
          ¿Cuáles son los métodos de pago disponibles?
        </h2>
        <p id="respuesta2" class="respuesta hidden mt-2 text-gray-700">
          Aceptamos tarjetas de crédito, débito, PayPal y pagos en efectivo en tiendas participantes.
        </p>
      </div>

      <div class="border-b border-gray-300 pb-4 pregunta">
        <h2 id="pregunta3" class="pregunta-titulo text-lg sm:text-xl font-semibold cursor-pointer text-blue-700 hover:text-blue-900">
          ¿Realizan envíos a todo el país?
        </h2>
        <p id="respuesta3" class="respuesta hidden mt-2 text-gray-700">
          Sí, realizamos envíos a cualquier parte del país con diferentes opciones de paquetería.
        </p>
      </div>

      <div class="border-b border-gray-300 pb-4 pregunta">
        <h2 id="pregunta4" class="pregunta-titulo text-lg sm:text-xl font-semibold cursor-pointer text-blue-700 hover:text-blue-900">
          ¿Cuánto tarda en llegar mi pedido?
        </h2>
        <p id="respuesta4" class="respuesta hidden mt-2 text-gray-700">
          El tiempo de entrega varía entre 3 y 7 días hábiles dependiendo de la ubicación del cliente.
        </p>
      </div>

      <div class="pregunta">
        <h2 id="pregunta5" class="pregunta-titulo text-lg sm:text-xl font-semibold cursor-pointer text-blue-700 hover:text-blue-900">
          ¿Cómo puedo contactar al servicio al cliente?
        </h2>
        <p id="respuesta5" class="respuesta hidden mt-2 text-gray-700">
          Puedes contactarnos a través del formulario de contacto, correo electrónico o por teléfono de lunes a viernes de 9:00 a 18:00.
        </p>
      </div>

    </div>
  </section>
</main>

@endsection

@vite(['resources/css/app.css', 'resources/js/app.js'])