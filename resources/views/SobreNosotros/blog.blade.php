@extends('/index')

@section('titulo','Blog')

@section('contenido')

    <main class="flex flex-col lg:flex-row w-full bg-gray-50 min-h-screen">

    
    <section class="flex flex-col w-full lg:w-2/3  m-2 rounded-lg p-3">
      <h2 class=" p-3 rounded text-lg font-semibold text-center mb-2">Noticias Recientes</h2>

      
      <article class="bg-white m-2 rounded-lg p-3 shadow-md">
        <h3 class="text-lg p-2 m-1 rounded font-semibold text-center sm:text-left">Nueva Línea de Productos Naturales</h3>
        <p class="text-lg p-2 m-1 rounded text-sm text-justify">Farmacia VidaPlena lanza su nueva línea de productos naturales, incluyendo suplementos herbales, 
          cremas orgánicas y vitaminas sin aditivos artificiales. Diseñados para quienes buscan un estilo de vida más saludable y sostenible.
        </p>
        <picture class="w-full h-40 sm:h-56 flex justify-center items-center m-1 rounded text-gray-500">
          <img src="/pictures/Blog/MedicinaNatural.jpg" alt="Productos Naturales" class="rounded-lg object-cover w-full h-full">
        </picture>
      </article>

      <!-- Tarjeta Noticia 2 -->
      <article class="bg-white m-2 rounded-lg p-3 shadow-md">
        <h3 class="p-2 m-1 rounded font-semibold text-center text-lg sm:text-left">Programa de Lealtad Misericordia</h3>
        <p class="p-2 m-1 rounded text-sm text-justify">Presentamos nuestro nuevo programa de puntos VidaPlena. Cada compra te acerca a descuentos, 
          regalos exclusivos y beneficios especiales en servicios médicos. ¡Inscríbete gratis en tu próxima visita!
        </p>
        <picture class="w-full h-40 sm:h-56 flex justify-center items-center m-1 rounded text-gray-500">
          <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb" alt="Programa de Lealtad" class="rounded-lg object-cover w-full h-full">
        </picture>
      </article>

      <!-- Tarjeta Noticia 3 -->
      <article class="bg-white m-2 rounded-lg p-3">
        <h3 class="text-lg m-1 rounded font-semibold text-center sm:text-left">Consultas Médicas Gratuitas en Octubre</h3>
        <p class="p-2 m-1 rounded text-sm text-justify">Durante el mes de octubre, Farmacia VidaPlena ofrecerá consultas médicas gratuitas los fines de semana 
          para revisiones básicas. Acude con tu familia y aprovecha esta oportunidad para cuidar tu salud.
        </p>
        <picture class="w-full h-40 sm:h-56 flex justify-center items-center m-1 rounded text-gray-500">
          <img src="/pictures/Blog/Consulta.webp" alt="Consultas Médicas" class="rounded-lg object-cover w-full h-full">
        </picture>
      </article>
    </section>

    
    <aside class="flex flex-col w-full lg:w-1/3 m-2 rounded-lg p-3">
      <h2 class="p-3 rounded text-lg font-semibold text-center mb-2">Próximos Eventos</h2>
      
      <div class="bg-white m-2 rounded-lg p-3 shadow-md">
        <h3 class="p-2 m-1 rounded font-semibold text-center sm:text-left">Jornada de Vacunación</h3>
        <p class="p-2 m-1 rounded text-sm text-justify">Fecha: 20 al 25 de octubre<br>Hora: 9:00 a.m. - 5:00 p.m.<br>Lugar: Sucursal Central VidaPlena.
          <br>Aplica tu vacuna antigripal y recibe un cupón del 10% en tu próxima compra.
        </p>
      </div>
      
      <div class="bg-white m-2 rounded-lg p-3 shadow-md">
        <h3 class="p-2 m-1 rounded font-semibold text-center sm:text-left">Charla de Salud Preventiva</h3>
        <p class="p-2 m-1 rounded text-sm text-justify">Fecha: 10 de noviembre<br>Hora: 11:00 a.m.<br>Lugar: Auditorio VidaPlena.
          <br>Aprende con nuestros especialistas sobre hábitos saludables y prevención de enfermedades comunes.
        </p>
      </div>
      
      <div class="bg-white m-2 rounded-lg p-3 shadow-md">
        <h3 class="p-2 m-1 rounded font-semibold text-center sm:text-left">Feria de la Salud Familiar</h3>
        <p class="p-2 m-1 rounded text-sm text-justify">Fecha: 5 de diciembre<br>Hora: 10:00 a.m. - 4:00 p.m.<br>Lugar: Parque Vida Sana.
          <br>Actividades gratuitas, chequeos médicos básicos y promociones exclusivas para toda la familia.
        </p>
      </div>
    </aside>

  </main>
@endsection
