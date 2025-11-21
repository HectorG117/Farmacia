<!DOCTYPE html>
<html lang="es" x-data="{ open: false }">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos - Farmacia VidaPlena</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

  <!-- HEADER -->
  <header class="flex flex-col md:flex-row items-center justify-between w-full bg-blue-500 p-4 relative z-50">
    <div class="flex items-center gap-3 pl-6">
      <img src="{{ asset('assets/img/logo-farmacia.jpg') }}" 
           alt="Logo Farmacia VidaPlena" 
           class="h-12 w-12 object-contain rounded bg-white p-1 shadow-md">
      <span class="text-white font-bold text-xl">Farmacia Misericordia</span>
    </div>

    <div class="flex justify-center text-white font-bold text-lg md:text-xl mt-2 md:mt-0">
      Productos
    </div>

    <div class="flex items-center gap-2 bg-blue-400 text-white p-2 rounded-lg mr-6 cursor-pointer hover:bg-blue-600 transition">
      <img src="{{ asset('assets/img/perfil.png') }}" 
           alt="Perfil Usuario" 
           class="h-8 w-8 rounded-full bg-white p-1">
      <span class="hidden md:inline font-medium">Perfil</span>
    </div>

    <!-- Botón hamburguesa -->
    <button @click="open = !open" class="md:hidden absolute right-4 top-4 bg-blue-400 p-2 rounded text-white focus:outline-none">
      <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </header>

  <!-- NAV principal (centrado en escritorio) -->
  <nav class="hidden md:flex justify-center items-center w-full bg-cyan-500 p-2 space-x-4">
    <a href="inicio" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600 transition">Inicio</a>
    <a href="productos" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600 transition">Productos</a>
    <a href="servicios" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600 transition">Servicios</a>
    <a href="promociones" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600 transition">Promociones</a>

    <!-- Menú desplegable centrado -->
    <div class="relative">
      <select id="menu" name="menu"
        class="bg-cyan-400 text-white font-medium rounded px-4 py-2 hover:bg-cyan-600 focus:ring-2 focus:ring-cyan-300 cursor-pointer outline-none">
        <option selected disabled>Sobre nosotros</option>
        <option value="blog">Blog</option>
        <option value="faq">Preguntas frecuentes</option>
        <option value="contacto">Contacto</option>
        <option value="politicas">Políticas</option>
        <option value="sucursal">Sucursal</option>
      </select>
    </div>

    <a href="pagos" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600 transition">Carrito</a>
  </nav>

 <!-- MENÚ LATERAL (solo móviles) -->
  <div class="fixed inset-0 bg-black bg-opacity-40 z-40 md:hidden" x-show="open" x-transition.opacity @click="open = false"></div>
  <div
    class="fixed top-0 left-0 w-64 h-full bg-cyan-500 text-white transform -translate-x-full transition-transform duration-300 z-50 md:hidden"
    :class="{ 'translate-x-0': open }"
    x-show="open"
    x-transition>
    <div class="flex flex-col p-4 space-y-3">
      <a href="inicio" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Inicio</a>
      <a href="productos" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Productos</a>
      <a href="servicios" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Servicios</a>
      <a href="promociones" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Promociones</a>

      <div class="bg-cyan-400 p-2 rounded">
        <label class="block text-center font-semibold mb-1">Sobre nosotros</label>
        <select id="menuMobile" name="menuMobile"
          class="w-full appearance-none bg-cyan-400 text-white font-medium rounded hover:bg-cyan-600 focus:ring-2 focus:ring-cyan-300 cursor-pointer outline-none">
          <option selected disabled>Selecciona...</option>
          <option value="blog">Blog</option>
          <option value="faq">Preguntas frecuentes</option>
          <option value="contacto">Contacto</option>
          <option value="politicas">Políticas</option>
          <option value="sucursal">Sucursal</option>
        </select>
      </div>

      <a href="pagos" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Carrito</a>
      <button @click="open = false" class="mt-4 bg-red-500 hover:bg-red-600 p-2 rounded">Cerrar menú</button>
    </div>
  </div>

  <!-- MAIN -->
  <main class="flex flex-col flex-grow p-6" id="productos-container">

    <!-- BOTONES FILTRO -->
    <div class="flex flex-wrap gap-2 justify-center mb-6">
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition filtro-btn" data-categoria="todos">Todos</button>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition filtro-btn" data-categoria="medicamentos">Medicamentos</button>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition filtro-btn" data-categoria="vitaminas">Vitaminas</button>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition filtro-btn" data-categoria="higiene">Higiene</button>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition filtro-btn" data-categoria="equipo">Equipo Médico</button>
    </div>

    <!-- PRODUCTOS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center" id="productos-grid">

      <!-- MEDICAMENTOS -->
      <div class="producto flex flex-col items-center" data-categoria="medicamentos" data-nombre="Paracetamol 500mg" data-precio="$100" data-descripcion="Analgésico y antipirético que ayuda a reducir el dolor y la fiebre." data-imagen="{{ asset('assets/img/productos/paracetamol.webp') }}">
        <img src="{{ asset('assets/img/productos/paracetamol.webp') }}" alt="Paracetamol" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Paracetamol 500mg - $100</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="medicamentos" data-nombre="Ibuprofeno 400mg" data-precio="$120" data-descripcion="Antiinflamatorio no esteroideo que ayuda a aliviar el dolor y la inflamación." data-imagen="{{ asset('assets/img/productos/ibuprofeno.png') }}">
        <img src="{{ asset('assets/img/productos/ibuprofeno.png') }}" alt="Ibuprofeno" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Ibuprofeno 400mg - $120</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="medicamentos" data-nombre="Amoxicilina 500mg" data-precio="$150" data-imagen="{{ asset('assets/img/productos/amoxicilina.webp') }}">
        <img src="{{ asset('assets/img/productos/amoxicilina.webp') }}" alt="Amoxicilina" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Amoxicilina 500mg - $150</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="medicamentos" data-nombre="Omeprazol 20mg" data-precio="$130" data-imagen="{{ asset('assets/img/productos/omeprazol.png') }}">
        <img src="{{ asset('assets/img/productos/omeprazol.png') }}" alt="Omeprazol" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Omeprazol 20mg - $130</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="medicamentos" data-nombre="Suero Oral Vida 4 sobres" data-precio="$60" data-imagen="{{ asset('assets/img/productos/suero.webp') }}">
        <img src="{{ asset('assets/img/productos/suero.webp') }}" alt="Suero Oral" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Suero Oral Vida 4 sobres - $60</p>
      </div>

      <!-- VITAMINAS -->
      <div class="producto flex flex-col items-center" data-categoria="vitaminas" data-nombre="Vitamina C 300mg" data-precio="$400" data-imagen="{{ asset('assets/img/productos/vitaminaC.jpg') }}">
        <img src="{{ asset('assets/img/productos/vitaminaC.jpg') }}" alt="Vitamina C" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Vitamina C 300mg - $400</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="vitaminas" data-nombre="Complejo B (30 cápsulas)" data-precio="$180" data-imagen="{{ asset('assets/img/productos/complejoB.jpg') }}">
        <img src="{{ asset('assets/img/productos/complejoB.jpg') }}" alt="Complejo B" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Complejo B (30 cápsulas) - $180</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="vitaminas" data-nombre="Magnesio" data-precio="$399" data-imagen="{{ asset('assets/img/productos/magnesio.jpg') }}">
        <img src="{{ asset('assets/img/productos/magnesio.jpg') }}" alt="Magnesio" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Magnesio - $399</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="vitaminas" data-nombre="Multivitamínico Adulto" data-precio="$365" data-imagen="{{ asset('assets/img/productos/multivitaminico.jpg') }}">
        <img src="{{ asset('assets/img/productos/multivitaminico.jpg') }}" alt="Multivitamínico" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Multivitamínico Adulto - $365</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="vitaminas" data-nombre="Calcio + Vitamina D3" data-precio="$250" data-imagen="{{ asset('assets/img/productos/calcioD3.jpg') }}">
        <img src="{{ asset('assets/img/productos/calcioD3.jpg') }}" alt="Calcio D3" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Calcio + Vitamina D3 - $250</p>
      </div>

      <!-- HIGIENE -->
      <div class="producto flex flex-col items-center" data-categoria="higiene" data-nombre="Alcohol en Gel 250ml" data-precio="$25" data-imagen="{{ asset('assets/img/productos/alcohol-gel.jpeg') }}">
        <img src="{{ asset('assets/img/productos/alcohol-gel.jpeg') }}" alt="Alcohol en Gel" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Alcohol en Gel 250ml - $25</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="higiene" data-nombre="Jabón Antibacterial" data-precio="$40" data-imagen="{{ asset('assets/img/productos/jabon-antibacterial.jpg') }}">
        <img src="{{ asset('assets/img/productos/jabon-antibacterial.jpg') }}" alt="Jabón" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Jabón Antibacterial - $40</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="higiene" data-nombre="Mascarilla facial" data-precio="$260" data-imagen="{{ asset('assets/img/productos/mascarilla.png') }}">
        <img src="{{ asset('assets/img/productos/mascarilla.png') }}" alt="Mascarilla" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Mascarilla facial - $260</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="higiene" data-nombre="Cepillo Dental" data-precio="$35" data-imagen="{{ asset('assets/img/productos/cepillo-dental.webp') }}">
        <img src="{{ asset('assets/img/productos/cepillo-dental.webp') }}" alt="Cepillo" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Cepillo Dental - $35</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="higiene" data-nombre="Pasta Dental 150g" data-precio="$120" data-imagen="{{ asset('assets/img/productos/pasta-dental.webp') }}">
        <img src="{{ asset('assets/img/productos/pasta-dental.webp') }}" alt="Pasta" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Pasta Dental 150g - $120</p>
      </div>

      <!-- EQUIPO MÉDICO -->
      <div class="producto flex flex-col items-center" data-categoria="equipo" data-nombre="Termómetro Digital" data-precio="$220" data-imagen="{{ asset('assets/img/productos/termometro-digital.jpg') }}">
        <img src="{{ asset('assets/img/productos/termometro-digital.jpg') }}" alt="Termómetro" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Termómetro Digital - $220</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="equipo" data-nombre="Oxímetro de Pulso" data-precio="$450" data-imagen="{{ asset('assets/img/productos/oximetro.webp') }}">
        <img src="{{ asset('assets/img/productos/oximetro.webp') }}" alt="Oxímetro" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Oxímetro de Pulso - $450</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="equipo" data-nombre="Tensiómetro de Brazo" data-precio="$600" data-imagen="{{ asset('assets/img/productos/tensiometro.png') }}">
        <img src="{{ asset('assets/img/productos/tensiometro.png') }}" alt="Tensiómetro" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Tensiómetro de Brazo - $600</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="equipo" data-nombre="Curitas (30 unidades)" data-precio="$50" data-imagen="{{ asset('assets/img/productos/curitas.webp') }}">
        <img src="{{ asset('assets/img/productos/curitas.webp') }}" alt="Curitas" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Curitas (30 unidades) - $50</p>
      </div>
      <div class="producto flex flex-col items-center" data-categoria="equipo" data-nombre="Guantes de Látex (100 pzas)" data-precio="$150" data-imagen="{{ asset('assets/img/productos/guantes-latex.jpg') }}">
        <img src="{{ asset('assets/img/productos/guantes-latex.jpg') }}" alt="Guantes" class="h-48 w-48 object-contain mb-2">
        <p class="text-center">Guantes de Látex (100 pzas) - $150</p>
      </div>

    </div>

  </main>

  <!-- FOOTER -->
  <footer class="flex flex-col md:flex-row w-full bg-blue-500 text-white text-center p-4">
    <div class="bg-blue-400 flex-1 m-2 p-2 rounded">
      <h3 class="text-xl font-semibold mb-2">Sobre nosotros</h3>
      <p>Farmacia VidaPlena nació con el compromiso de brindar productos farmacéuticos y servicios médicos accesibles, siempre con un trato humano y profesional.</p>
    </div>
    <div class="bg-blue-400 flex-1 m-2 p-2 rounded">
      <h3 class="text-xl font-semibold mb-2">Contáctanos</h3>
      <p>📞 55 1234 5678<br>📍 Calle Salud #45, Col. Esperanza, CDMX<br>✉️ contacto@vidaplena.com.mx</p>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script>
    // Filtrar productos por categoría
    const filtroBtns = document.querySelectorAll('.filtro-btn');
    const productos = document.querySelectorAll('.producto');

    filtroBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const categoria = btn.dataset.categoria;
        productos.forEach(p => {
          if (categoria === 'todos' || p.dataset.categoria === categoria) {
            p.style.display = 'flex';
          } else {
            p.style.display = 'none';
          }
        });
      });
    });

    // Selección de producto
    productos.forEach(prod => {
      prod.addEventListener('click', () => {
        const productoData = {
          nombre: prod.dataset.nombre,
          precio: prod.dataset.precio,
          descripcion: prod.dataset.descripcion || "Sin descripción disponible.",
          imagen: prod.dataset.imagen
        };
        localStorage.setItem("productoSeleccionado", JSON.stringify(productoData));
        window.location.href = "/producto";
      });
    });
  </script>

  <!-- SCRIPT -->
  <script>
  document.getElementById("menu").addEventListener("change", function() {
    const value = this.value;
    if (value === "blog") window.location.href = "blog";
    if (value === "faq") window.location.href = "preguntas_frecuentes.html";
    if (value === "contacto") window.location.href = "contacto.html";
    if (value === "politicas") window.location.href = "politicas.html";
    if (value === "sucursal") window.location.href = "sucursal";
  });

  document.getElementById("menuMobile").addEventListener("change", function() {
    const value = this.value;
    if (value === "blog") window.location.href = "blog";
    if (value === "faq") window.location.href = "preguntas_frecuentes.html";
    if (value === "contacto") window.location.href = "contacto.html";
    if (value === "politicas") window.location.href = "politicas.html";
    if (value === "sucursal") window.location.href = "sucursal";
  });
  </script>

</body>
</html>