@extends('/index')

@section('titulo','Pago')

@section('contenido')

<main class="flex flex-col lg:flex-row w-full bg-gray-50">

    
    <section id="formPago" class="flex flex-col w-full lg:w-1/2 p-3">
      <div class="p-3 m-2 rounded text-center font-semibold text-lg">Confirmación del pago</div>

      <!-- Tipo de servicio -->
      <div class="m-2 p-3 rounded">
        <label class="block mb-2 font-medium border-gray-300 text-lg">Tipo de servicio</label>
        <select class="form-input w-full p-2 rounded border border-gray-300">
          <option>Consulta médica a domicilio</option>
          <option>Entrega de medicamentos</option>
          <option>Ninguno</option>
        </select>
      </div>

      <!-- Dirección -->
      <div class=" m-2 p-3 rounded">
        <label class="block mb-2 font-medium text-lg">Dirección completa</label>
        <input type="text" class="form-input w-full p-2 rounded border border-gray-300" placeholder="Calle, número, colonia">
      </div>

      <!-- Código postal, estado, localidad -->
      <div class="m-2 p-3 rounded grid grid-cols-1 sm:grid-cols-3 gap-2">
        <input type="text" placeholder="Código Postal" class="form-input p-2 rounded border border-gray-300">
        <input type="text" placeholder="Estado" class="form-input p-2 rounded border border-gray-300">
        <input type="text" placeholder="Localidad" class="form-input p-2 rounded border border-gray-300">
      </div>

      <!-- Dirección y referencias -->
      <div class="m-2 p-3 rounded grid grid-cols-1 sm:grid-cols-2 gap-2">
        <input type="text" placeholder="Entre calles o número interior" class="form-input p-2 rounded border border-gray-300 ">
        <input type="text" placeholder="Referencias" class="form-input p-2 rounded border border-gray-300 ">
      </div>

      <!-- Teléfono -->
      <div class="m-2 p-3 rounded">
        <label class="block mb-2 font-medium text-lg">Teléfono de contacto</label>
        <input type="tel" placeholder="Ej. 5512345678" class="form-input w-full p-2 rounded border border-gray-300 ">
      </div>

      <!-- Fecha -->
      <div class="m-2 p-3 rounded grid grid-cols-1 sm:grid-cols-2 gap-2">
        <label class="p-2 font-medium text-lg">Fecha de consulta</label>
        <input type="date" class="form-input p-2 rounded border border-gray-300">
      </div>

      <!-- Método de pago -->
      <div class="m-2 p-3 rounded">
        <label class="block mb-2 font-medium">Método de pago</label>
        <select class="form-input w-full p-2 rounded border border-gray-300">
          <option>Tarjeta de crédito</option>
          <option>Tarjeta de débito</option>
          <option>Efectivo</option>
        </select>
      </div>

      <!-- Detalles de tarjeta -->
      <div class="m-2 p-3 rounded">
        <label class="block mb-2 font-medium">Número de tarjeta</label>
        <input type="text" maxlength="16" placeholder="1234 5678 9012 3456" class="form-input w-full p-2 rounded border border-gray-300">
      </div>

      <div class="m-2 p-3 rounded">
        <label class="block mb-2 font-medium">Titular</label>
        <input type="text" placeholder="Nombre del titular" class="form-input w-full p-2 rounded border border-gray-300">
      </div>

      <div class="m-2 p-3 rounded grid grid-cols-1 sm:grid-cols-3 gap-2">
        <input type="month" class="form-input p-2 rounded border border-gray-300" placeholder="MM/AA">
        <div></div>
        <input type="text" maxlength="3" placeholder="CCV" class="form-input p-2 rounded border border-gray-300">
      </div>
    </section>
    </section>

    
    <section class="flex flex-col w-full lg:w-1/2 bg-gray-50 p-3">
      <div class=" h-32 m-2 rounded"></div>

      <div class="m-2 p-3 rounded flex flex-col lg:flex-row">
        <div class="hidden lg:block lg:w-1/3 m-2 rounded"></div>

        <div class="flex flex-col w-full lg:w-1/3 bg-white m-2 rounded p-3 shadow-lg">
          <div class="flex justify-between m-1 p-2 rounded">
            <span>Precio total:</span> <span>$350</span>
          </div>
          <div class="flex justify-between  m-1 p-2 rounded">
            <span>Coste de servicio:</span> <span>$50</span>
          </div>
          <div class="text-center text-gray-600 my-2">----------------------------</div>
          <div class="flex justify-between m-1 p-2 rounded font-semibold">
            <span>Total:</span> <span>400</span>
          </div>
          <div class="flex justify-between m-1 p-2 rounded">
            <input type="text" placeholder="Tengo un cupon" class="form-input w-full p-2 rounded border border-gray-300">
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded shadow transition-all">Aplicar</button>
          </div>
          <div class="flex justify-end m-1 p-2 rounded">
            <button class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded shadow-lg text-lg font-semibold transition-all">💳 Pagar</button>
          </div>
        </div>

        <div class="hidden lg:block lg:w-1/3 m-2 rounded"></div>
      </div>
    </section>

  </main>

@endsection

@vite(['resources/css/app.css', 'resources/js/app.js'])