<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Farmacia VidaPlena</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100" x-data="{ open: false }">

  <!-- HEADER -->
<header class="flex flex-col md:flex-row items-center justify-between w-full bg-blue-500 p-4 relative z-50">
  
  <!-- Logo -->
  <div class="flex items-center gap-3">
    <img src="{{ asset('assets/img/logo-farmacia.jpg') }}" alt="Logo Farmacia VidaPlena" class="h-12 w-12 object-contain rounded bg-white p-1 shadow-md">
    <span class="text-white font-bold text-lg">Farmacia Misericordia</span>
  </div>

  <!-- Botón hamburguesa (solo móviles) -->
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

  <div class="hidden md:flex flex-1"></div>

  <!-- Perfil con imagen -->
  <div class="flex items-center gap-2 bg-blue-400 text-white p-2 rounded mt-2 md:mt-0 cursor-pointer hover:bg-blue-600 transition">
    <img src="{{ asset('assets/img/perfil.png') }}" alt="Perfil Usuario" class="h-8 w-8 rounded-full bg-white p-1">
    <span class="hidden md:inline font-medium">Perfil</span>
  </div>
</header>


  <!-- NAV normal (solo escritorio) -->
<nav class="hidden md:flex flex-row justify-center items-center bg-cyan-500 p-2 space-x-2">
  <a href="/" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Inicio</a>
  <a href="/productos" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Productos</a>
  <a href="/servicios" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Servicios</a>
  <a href="/promociones" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Promociones</a>
  <a href="/nosotros" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Sobre nosotros</a>
  <a href="/carrito" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600">Carrito</a>
</nav>

  <!-- MENÚ LATERAL (solo móviles) -->
  <div class="fixed inset-0 bg-black bg-opacity-40 z-40 md:hidden" x-show="open" x-transition.opacity @click="open = false"></div>

  <div
    class="fixed top-0 left-0 w-64 h-full bg-cyan-500 text-white transform -translate-x-full transition-transform duration-300 z-50 md:hidden"
    :class="{ 'translate-x-0': open }"
    x-show="open"
    x-transition>
    <div class="flex flex-col p-4 space-y-3">
      <a href="/" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Inicio</a>
      <a href="/productos" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Productos</a>
      <a href="/servicios" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Servicios</a>
      <a href="/promociones" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Promociones</a>
      <a href="/nosotros" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Sobre nosotros</a>
      <a href="/carrito" class="bg-cyan-400 p-2 rounded hover:bg-cyan-600 text-center">Carrito</a>
      <button @click="open = false" class="mt-4 bg-red-500 hover:bg-red-600 p-2 rounded">Cerrar menú</button>
    </div>
  </div>

  <!-- CONTENIDO PRINCIPAL -->
  <main class="flex flex-col flex-grow  items-center justify-center p-6">
    
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
            <button class="bg-blue-500 text-white rounded px-6 py-2 mt-4 hover:bg-blue-600 transition">Entrar</button>
        </div>
        <div class="flex flex-row justify-center mt-4">
            <button id="login" class="bg-purple-500 text-white rounded px-6 py-2 hover:bg-purple-600 transition">🔒 Iniciar con huella dactilar</button>
        </div>

      </section>


      <!-- Registro -->
      <section class="flex flex-col bg-gray-300 p-6 rounded-lg w-80 shadow-md">
        <h2 class="text-center text-gray-700 font-bold mb-4">Registrar Usuario</h2>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Nombre</label>
          <input id="nombreRegistro" type="text" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="flex flex-col bg-gray-200 p-3 m-2 rounded border-2 border-dashed border-gray-400 text-gray-600">
          <label>Correo electrónico</label>
          <input id="correoRegistro" type="email" class="mt-1 p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div class="flex flex-row justify-center">
          <button class="bg-green-500 text-white rounded px-6 py-2 mt-4 hover:bg-green-600 transition">Registrar</button>
        </div>
        <div class="flex flex-row justify-center mt-4">
            <button id="register" class="bg-purple-500 text-white rounded px-6 py-2 hover:bg-purple-600 transition">🔒 Registrar con huella dactilar</button>
        </div>
      </section>
    </div>
  </main>



  <!-- FOOTER -->
  <footer class="flex flex-col md:flex-row w-full bg-blue-500 text-white text-center p-4">
    <div class="bg-blue-400 flex-1 m-2 p-2 rounded">
      <h3 class="text-xl font-semibold mb-2">Sobre nosotros</h3>
      <p>Farmacia Misericordia nació con el compromiso de brindar productos farmacéuticos y servicios médicos accesibles, siempre con un trato humano y profesional.</p>
    </div>
    <div class="bg-blue-400 flex-1 m-2 p-2 rounded">
      <h3 class="text-xl font-semibold mb-2">Contáctanos</h3>
      <p>📞 55 1234 5678<br>📍 Calle Salud #45, Col. Esperanza, CDMX<br>✉️ contacto@vidaplena.com.mx</p>
    </div>
  </footer>

    <!-- Modal de estado -->
<div id="statusModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-80 text-center">
    <h3 id="statusTitle" class="text-lg font-semibold mb-2 text-gray-800">Estado</h3>
    <p id="statusMessage" class="text-gray-600 mb-4"></p>
    <button id="closeModal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Cerrar</button>
  </div>
</div>

<!-- Script de autenticación biométrica -->
<script>
  const rpId = window.location.hostname === "127.0.0.1" ? "localhost" : window.location.hostname;

  // Modal functions
  const modal = document.getElementById("statusModal");
  const modalTitle = document.getElementById("statusTitle");
  const modalMessage = document.getElementById("statusMessage");
  const closeModal = document.getElementById("closeModal");

  function showModal(title, message, color = "text-gray-800") {
    modalTitle.textContent = title;
    modalTitle.className = `text-lg font-semibold mb-2 ${color}`;
    modalMessage.textContent = message;
    modal.classList.remove("hidden");
  }

  closeModal.addEventListener("click", () => modal.classList.add("hidden"));

  // Codifica y decodifica arrays a Base64 URL-safe
  function bufferEncode(value) {
    return btoa(String.fromCharCode(...new Uint8Array(value)))
      .replace(/\+/g, "-").replace(/\//g, "_").replace(/=/g, "");
  }

  function bufferDecode(value) {
    value = value.replace(/-/g, "+").replace(/_/g, "/");
    const pad = value.length % 4;
    if (pad) value += "=".repeat(4 - pad);
    return Uint8Array.from(atob(value), c => c.charCodeAt(0));
  }

  // Registrar huella
  async function registrarHuella() {
    const nombre = document.getElementById("nombreRegistro").value || "Usuario2 Demo";
    const correo = document.getElementById("correoRegistro").value || "usuario2@demo.com";

    showModal("Registro Biométrico", "Esperando registro biométrico...");

    const publicKey = {
      challenge: new Uint8Array([0x8C, 0x7A, 0x2C, 0xB1, 0xF5, 0x00, 0x3B, 0xAF]),
      rp: { name: "Farmacia VidaPlena", id: rpId },
      user: {
        id: new Uint8Array([1, 2, 3, 4]),
        name: correo,
        displayName: nombre
      },
      pubKeyCredParams: [{ type: "public-key", alg: -7 }],
      authenticatorSelection: { authenticatorAttachment: "platform", userVerification: "required" },
      timeout: 60000,
      attestation: "none"
    };

    try {
      const credential = await navigator.credentials.create({ publicKey });
      localStorage.setItem("credID", bufferEncode(credential.rawId));
      localStorage.setItem("userName", nombre);
      showModal("✅ Éxito", "Huella registrada correctamente.", "text-green-600");
    } catch (e) {
      showModal("❌ Error durante el registro", e.message, "text-red-600");
    }
  }

  // Iniciar sesión con huella
  async function loginHuella() {
    const credID = localStorage.getItem("credID");
    const nombre = localStorage.getItem("userName") || "Usuario Demo";

    if (!credID) {
      showModal("⚠️ Atención", "Primero registra tu huella antes de iniciar sesión.", "text-yellow-600");
      return;
    }

    const publicKey = {
      challenge: new Uint8Array([0x79, 0x45, 0x11, 0xA9, 0x33, 0x90]),
      allowCredentials: [{ type: "public-key", id: bufferDecode(credID) }],
      timeout: 60000,
      userVerification: "required"
    };

    try {
      await navigator.credentials.get({ publicKey });
      showModal("✅ Bienvenido", `Autenticación exitosa, ${nombre}.`, "text-green-600");
    } catch (e) {
      showModal("❌ Error durante autenticación", e.message, "text-red-600");
    }
  }

  document.getElementById("register").addEventListener("click", registrarHuella);
  document.getElementById("login").addEventListener("click", loginHuella);
</script>


</body>
</html>