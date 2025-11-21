@extends('/inicio')

@section('titulo','Producto')

@section('contenido')

<div x-data="{ open: false }" class="flex flex-col min-h-screen">

    

    <main class="flex flex-col flex-grow bg-gray-100 p-8" id="detalle-producto">

        @php
            $nombre = request('nombre');
            $precio = request('precio');
            $descripcion = request('descripcion');
            $imagen = request('imagen'); // Solo el nombre del archivo
        @endphp

        @if($nombre)
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-700">{{ $nombre }}</h1>

        <div class="flex flex-col md:flex-row justify-between bg-gray-300 p-6 rounded-lg shadow-lg mb-6 space-y-6 md:space-y-0 md:space-x-6">

            <div class="flex flex-col w-full md:w-1/2 space-y-4">
                
                <h2 class="text-xl font-semibold text-gray-800">
                    💲 Precio: 
                    <span class="text-blue-700">{{ $precio }}</span>
                </h2>

                <p class="bg-gray-200 p-4 rounded-lg text-gray-700">
                    <strong>Descripción:</strong><br>
                    {{ $descripcion }}
                </p>

                <div class="bg-gray-200 p-4 rounded-lg text-gray-700">
                    <strong>Indicaciones:</strong><br>
                    Tomar según recomendación médica.
                </div>

                <div class="bg-gray-200 p-4 rounded-lg text-gray-700">
                    <strong>Precauciones:</strong><br>
                    Mantener fuera del alcance de los niños.
                </div>

                <button class="bg-blue-500 text-white rounded-lg px-6 py-2 w-40 hover:bg-blue-600 transition shadow">
                    🛒 Agregar al carrito
                </button>

            </div>

            <div class="flex flex-col w-full md:w-1/2 items-center justify-center">
                <div class="flex flex-col w-80 h-80 bg-white items-center justify-center border border-gray-400 rounded-lg shadow-inner">
                    <img  src="{{ request()->get('imagen')}}" 
    alt="{{ request()->get('nombre') }}"
    class="w-64 h-64 object-contain rounded shadow">
                </div>
                <p class="text-gray-600 mt-2 italic text-sm">Imagen ilustrativa del producto</p>
            </div>

        </div>

        @else
        <div class="flex flex-col items-center justify-center text-center text-gray-700">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">⚠️ No se encontró información del producto</h2>
            <p class="mb-6">
                Regresa a <a href="/productos" class="text-blue-600 underline">Productos</a> y selecciona uno.
            </p>
        </div>
        @endif

    </main>
</div>

<div id="contenido-producto" class="max-w-3xl mx-auto bg-white p-6 rounded shadow-lg mt-6">

    <h2 id="titulo-producto" class="text-3xl font-bold text-center text-blue-600 mb-4">
        Cargando...
    </h2>

    <div class="flex flex-col items-center">
        <img id="img-producto"
             src=""
             class="w-64 h-64 object-contain mb-4 rounded shadow">
    </div>

    <p id="descripcion-producto" class="text-gray-700 text-lg mb-4 text-center">
        Cargando descripción...
    </p>

    <p id="precio-producto" class="text-center text-xl font-semibold text-green-600">
        Cargando precio...
    </p>

</div>



<script>
document.addEventListener("DOMContentLoaded", () => {

    const data = localStorage.getItem("productoSeleccionado");

    // Si no hay datos
    if (!data) {
        document.getElementById("contenido-producto").innerHTML =
            "<p class='text-center text-red-600 text-xl'>No se encontró información del producto.</p>";
        return;
    }

    // Convertir a JSON
    let producto = {};
    try {
        producto = JSON.parse(data);
    } catch (e) {
        console.error("Error al convertir JSON:", e);
        return;
    }

    console.log("Producto cargado:", producto);

    // VALIDACIONES
    if (!producto.imagen) {
        console.warn("⚠ La propiedad 'imagen' no existe en el objeto producto");
    }
    if (!producto.nombre) console.warn("⚠ Falta 'nombre'");
    if (!producto.descripcion) console.warn("⚠ Falta 'descripcion'");
    if (!producto.precioNormal) console.warn("⚠ Falta 'precioNormal'");

    // Insertar datos
    document.getElementById("img-producto").src = producto.imagen || "";
    document.getElementById("titulo-producto").textContent = producto.nombre || "Producto sin nombre";
    document.getElementById("descripcion-producto").textContent = producto.descripcion || "Sin descripción";

    // Precios
    if (producto.precioPromo) {
        document.getElementById("precio-producto").innerHTML = `
            <span class="line-through text-gray-500 mr-2">$${producto.precioNormal}</span>
            <span class="text-green-600 font-bold text-2xl">$${producto.precioPromo}</span>
        `;
    } else {
        document.getElementById("precio-producto").innerHTML =
            `<span class="text-blue-600 font-bold text-2xl">$${producto.precioNormal}</span>`;
    }

    
});

document.addEventListener("DOMContentLoaded", () => {

    const data = localStorage.getItem("productoSeleccionado");

    // SI VIENE DESDE PROMOCIONES (localStorage)
    if (data) {
        document.getElementById("detalle-producto").style.display = "none"; 
        document.getElementById("contenido-producto").style.display = "block"; 
    }

    // SI VIENE DESDE PRODUCTOS (URL)
    else {
        document.getElementById("detalle-producto").style.display = "block";
        document.getElementById("contenido-producto").style.display = "none";
    }


</script>



@endsection
