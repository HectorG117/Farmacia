@extends('/index')

@section('titulo','Contacto')

@section('contenido')

<main class="flex flex-col w-full min-h-screen bg-gray-200 p-4">
    <section class="w-full md:max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-2xl md:text-3xl font-bold text-center mb-6">Envíanos un mensaje</h2>

      <form class="space-y-4">
        <div>
          <label class="block font-semibold mb-2" for="nombre">Nombre completo</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label class="block font-semibold mb-2" for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label class="block font-semibold mb-2" for="asunto">Asunto</label>
          <input type="text" id="asunto" name="asunto" placeholder="Motivo del mensaje"
                 class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label class="block font-semibold mb-2" for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..."
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>

        <div class="flex justify-center">
          <button type="submit"
                  class="bg-blue-500 text-black font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 transition">
            Enviar mensaje
          </button>
        </div>
      </form>

      <div class="mt-8 text-center">
        <h2 class="text-lg md:text-xl font-semibold mb-2">Información de contacto</h2>
        <p>Teléfono: +52 55 1234 5678</p>
        <p>Correo: contacto@empresa.com</p>
        <p>Dirección: Calle #123, Ciudad de México</p>
      </div>
    </section>
  </main>

@endsection