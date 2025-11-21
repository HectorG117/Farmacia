@extends('/index')

@section('titulo','Politicas')

@section('contenido')

  <main class="flex-grow flex flex-col items-center px-4 py-10">
    <section id="formPoliticas" class="bg-white max-w-4xl w-full rounded-2xl shadow-xl p-6 sm:p-10 border border-gray-200">
      <h2 class="text-3xl font-extrabold text-center text-blue-600 mb-8">Nuestras Políticas</h2>
      <p class="text-gray-700 text-center mb-10 text-base sm:text-lg">
        Consulta nuestras políticas de privacidad, devoluciones, envíos, uso y cookies.  
        Nos comprometemos a ofrecer transparencia y seguridad en todos nuestros servicios.
      </p>

      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="policy-card p-5 rounded-xl shadow-md border border-gray-200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Privacidad</h3>
          <p class="text-gray-700">Tu información es confidencial y solo se usa con fines del servicio. No compartimos tus datos sin consentimiento.</p>
        </div>

        <div class="policy-card p-5 rounded-xl shadow-md border border-gray-200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Devoluciones</h3>
          <p class="text-gray-700">Aceptamos devoluciones dentro de 15 días con comprobante de compra y producto en buen estado.</p>
        </div>

        <div class="policy-card p-5 rounded-xl shadow-md border border-gray-200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Envíos</h3>
          <p class="text-gray-700">Realizamos envíos a todo el país con entrega estimada entre 3 a 7 días hábiles.</p>
        </div>

        <div class="policy-card p-5 rounded-xl shadow-md border border-gray-200">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Cookies</h3>
          <p class="text-gray-700">Usamos cookies para mejorar tu experiencia. Puedes desactivarlas desde la configuración del navegador.</p>
        </div>

        <div class="policy-card p-5 rounded-xl shadow-md border border-gray-200 md:col-span-2">
          <h3 class="text-xl font-semibold text-blue-600 mb-2">Condiciones de Uso</h3>
          <p class="text-gray-700">Al usar este sitio aceptas nuestras condiciones. Nos reservamos el derecho de realizar modificaciones cuando sea necesario.</p>
        </div>
      </div>
    </section>
  </main>
@endsection

@vite(['resources/css/app.css', 'resources/js/app.js'])