<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="OD Blogs - Artículos de salud, bienestar y medicina integral. Información actualizada sobre tratamientos, consejos de salud y novedades del Grupo OD.">
  <meta name="keywords" content="blog médico, salud, bienestar, medicina integral, consejos de salud, artículos médicos, Grupo OD">
  <meta name="author" content="Grupo OD">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="OD Blogs - Artículos de Salud y Bienestar">
  <meta property="og:description" content="Información actualizada sobre salud, tratamientos y consejos de bienestar por profesionales del Grupo OD.">
  <meta property="og:image" content="/GrupoOD/img/LogoODMedicsOfficial.png">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/GrupoOD/img/LogoODMedicsOfficial.png">
  
  <title>OD Blogs - Artículos de Salud y Bienestar | Grupo OD</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="/GrupoOD/css/estilos.css">
  <link rel="stylesheet" href="/GrupoOD/css/style.css">
  <link rel="stylesheet" href="/GrupoOD/css/animations.css">
  <link rel="stylesheet" href="/GrupoOD/css/odblogs.css">
  
  <!-- Fonts & External CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>

  <?php include("php/header.php"); ?>
  
  <main>
    <!-- Hero Section -->
    <section class="blog-hero">
      <div class="container text-center">
        <h1 data-aos="fade-up">
          <i class="bi bi-newspaper me-3"></i>OD Blogs
        </h1>
        <p data-aos="fade-up" data-aos-delay="100">
          Información actualizada sobre salud, bienestar y medicina integral
        </p>
      </div>
    </section>

    <!-- Contenido Principal -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <!-- Columna Principal -->
          <div class="col-lg-8">
            <!-- Filtros de Categoría -->
            <div class="category-filter" data-aos="fade-up">
              <h5 class="mb-3"><i class="bi bi-funnel me-2"></i>Categorías</h5>
              <div class="d-flex flex-wrap">
                <button class="category-btn active" data-category="all">Todos</button>
                <button class="category-btn" data-category="salud">Salud General</button>
                <button class="category-btn" data-category="odontologia">Odontología</button>
                <button class="category-btn" data-category="estetica">Estética</button>
                <button class="category-btn" data-category="bienestar">Bienestar</button>
              </div>
            </div>

            <!-- Artículo Destacado -->
            <div class="featured-post" data-aos="fade-up">
              <div class="row align-items-center">
                <div class="col-md-12">
                  <div class="featured-content">
                    <span class="featured-badge">
                      <i class="bi bi-star-fill me-2"></i>Artículo Destacado
                    </span>
                    <h2 class="mb-3">La Importancia de la Salud Integral en el Siglo XXI</h2>
                    <p class="mb-4">
                      Descubre cómo el enfoque holístico de la medicina está transformando la manera 
                      en que cuidamos nuestra salud física, mental y emocional. Un equilibrio perfecto 
                      entre cuerpo, mente y espíritu es esencial para una vida plena y saludable.
                    </p>
                    <div class="blog-meta text-white mb-3">
                      <span><i class="bi bi-calendar3"></i> 28 de Octubre, 2025</span>
                      <span><i class="bi bi-person"></i> Dr. Carlos Cañizares</span>
                      <span><i class="bi bi-clock"></i> 5 min lectura</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Grid de Artículos -->
            <div class="row" id="articlesContainer">
              <!-- Artículo 1 - Odontología -->
              <div class="col-md-6" data-aos="fade-up" data-category="odontologia">
                <article class="blog-card">
                  <img src="/GrupoOD/img/slide1.jpg" alt="Salud Dental" class="blog-card-img">
                  <div class="blog-card-body">
                    <span class="blog-category">Odontología</span>
                    <h3>5 Consejos para una Sonrisa Saludable</h3>
                    <p>
                      Mantener una buena higiene dental es fundamental para tu salud general. 
                      La prevención y el cuidado constante son las claves para mantener tus dientes 
                      sanos y fuertes. Conoce las mejores prácticas recomendadas por nuestros especialistas 
                      en odontología para mantener tu sonrisa radiante y saludable toda la vida.
                    </p>
                    <div class="blog-meta">
                      <span><i class="bi bi-calendar3"></i> 25 de Octubre, 2025</span>
                      <span><i class="bi bi-clock"></i> 4 min</span>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Artículo 2 - Bienestar -->
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-category="bienestar">
                <article class="blog-card">
                  <img src="/GrupoOD/img/slide2.jpg" alt="Bienestar" class="blog-card-img">
                  <div class="blog-card-body">
                    <span class="blog-category">Bienestar</span>
                    <h3>Cómo Mantener un Estilo de Vida Saludable</h3>
                    <p>
                      El equilibrio entre cuerpo y mente es esencial para una vida plena. Descubre las mejores 
                      prácticas para mantener tu bienestar integral, desde la alimentación balanceada hasta 
                      el ejercicio regular y el manejo del estrés. Pequeños cambios pueden generar grandes 
                      resultados en tu calidad de vida.
                    </p>
                    <div class="blog-meta">
                      <span><i class="bi bi-calendar3"></i> 23 de Octubre, 2025</span>
                      <span><i class="bi bi-clock"></i> 6 min</span>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Artículo 3 - Estética -->
              <div class="col-md-6" data-aos="fade-up" data-category="estetica">
                <article class="blog-card">
                  <img src="/GrupoOD/img/slide3.jpg" alt="Estética" class="blog-card-img">
                  <div class="blog-card-body">
                    <span class="blog-category">Estética</span>
                    <h3>Tratamientos Estéticos: Qué Debes Saber</h3>
                    <p>
                      La medicina estética ha avanzado significativamente en los últimos años. Conoce los 
                      tratamientos más seguros y efectivos disponibles hoy, respaldados por la ciencia y 
                      realizados por profesionales certificados. Tu belleza natural realzada de manera 
                      segura y profesional.
                    </p>
                    <div class="blog-meta">
                      <span><i class="bi bi-calendar3"></i> 20 de Octubre, 2025</span>
                      <span><i class="bi bi-clock"></i> 5 min</span>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Artículo 4 - Salud General -->
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-category="salud">
                <article class="blog-card">
                  <img src="/GrupoOD/img/odmedics2.jpg" alt="Salud General" class="blog-card-img">
                  <div class="blog-card-body">
                    <span class="blog-category">Salud General</span>
                    <h3>Prevención: La Mejor Medicina</h3>
                    <p>
                      La prevención es clave para una vida saludable y libre de enfermedades. Aprende sobre 
                      la importancia de los chequeos médicos regulares, la detección temprana de enfermedades 
                      y los hábitos que marcan la diferencia en tu salud a largo plazo. Tu bienestar comienza 
                      con pequeñas decisiones diarias.
                    </p>
                    <div class="blog-meta">
                      <span><i class="bi bi-calendar3"></i> 18 de Octubre, 2025</span>
                      <span><i class="bi bi-clock"></i> 7 min</span>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Artículo 5 - Odontología Infantil -->
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-category="odontologia">
                <article class="blog-card">
                  <img src="/GrupoOD/img/ododonto2.jpg" alt="Odontología Infantil" class="blog-card-img">
                  <div class="blog-card-body">
                    <span class="blog-category">Odontología</span>
                    <h3>Cuidado Dental Infantil: Guía para Padres</h3>
                    <p>
                      La salud dental comienza desde la infancia y marca el futuro de la sonrisa de tus hijos. 
                      Descubre cómo cuidar la salud bucal de los más pequeños desde temprana edad, creando 
                      hábitos saludables que durarán toda la vida. Prevención y educación son fundamentales.
                    </p>
                    <div class="blog-meta">
                      <span><i class="bi bi-calendar3"></i> 12 de Octubre, 2025</span>
                      <span><i class="bi bi-clock"></i> 6 min</span>
                    </div>
                  </div>
                </article>
              </div>
            </div>

            <!-- Paginación -->
            <nav aria-label="Paginación de blog" class="mt-5" data-aos="fade-up">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>

          <!-- Sidebar -->
          <div class="col-lg-4">
            <aside class="sidebar">
              <!-- Widget: Artículos Recientes -->
              <div class="sidebar-widget" data-aos="fade-up">
                <h4><i class="bi bi-clock-history me-2"></i>Artículos Recientes</h4>
                
                <div class="recent-post">
                  <img src="/GrupoOD/img/slide1.jpg" alt="Post reciente" class="recent-post-img">
                  <div class="recent-post-content">
                    <h5><a href="#">Innovaciones en Tratamientos Dentales</a></h5>
                    <span class="recent-post-date">
                      <i class="bi bi-calendar3"></i> 27 de Octubre, 2025
                    </span>
                  </div>
                </div>

                <div class="recent-post">
                  <img src="/GrupoOD/img/slide2.jpg" alt="Post reciente" class="recent-post-img">
                  <div class="recent-post-content">
                    <h5><a href="#">Medicina Preventiva: Tu Mejor Aliado</a></h5>
                    <span class="recent-post-date">
                      <i class="bi bi-calendar3"></i> 24 de Octubre, 2025
                    </span>
                  </div>
                </div>

                <div class="recent-post">
                  <img src="/GrupoOD/img/slide3.jpg" alt="Post reciente" class="recent-post-img">
                  <div class="recent-post-content">
                    <h5><a href="#">Rutinas de Belleza Saludables</a></h5>
                    <span class="recent-post-date">
                      <i class="bi bi-calendar3"></i> 21 de Octubre, 2025
                    </span>
                  </div>
                </div>
              </div>

              <!-- Widget: Categorías Populares -->
              <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                <h4><i class="bi bi-grid me-2"></i>Categorías</h4>
                <ul class="list-unstyled" id="categoriesList">
                  <li class="mb-3">
                    <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" data-category="salud">
                      <span><i class="bi bi-heart-pulse me-2 text-danger"></i>Salud General</span>
                      <span class="badge bg-primary rounded-pill" id="count-salud">0</span>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" data-category="odontologia">
                      <span><i class="bi bi-brightness-high me-2 text-warning"></i>Odontología</span>
                      <span class="badge bg-primary rounded-pill" id="count-odontologia">0</span>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" data-category="estetica">
                      <span><i class="bi bi-stars me-2 text-info"></i>Estética</span>
                      <span class="badge bg-primary rounded-pill" id="count-estetica">0</span>
                    </a>
                  </li>
                  <li class="mb-3">
                    <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" data-category="bienestar">
                      <span><i class="bi bi-emoji-smile me-2 text-primary"></i>Bienestar</span>
                      <span class="badge bg-primary rounded-pill" id="count-bienestar">0</span>
                    </a>
                  </li>
                </ul>
              </div>

              <!-- Widget: Tags -->
              <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="200">
                <h4><i class="bi bi-tags me-2"></i>Tags Populares</h4>
                <div class="tag-cloud">
                  <a href="#" class="tag">Salud</a>
                  <a href="#" class="tag">Bienestar</a>
                  <a href="#" class="tag">Odontología</a>
                  <a href="#" class="tag">Prevención</a>
                  <a href="#" class="tag">Estética</a>
                  <a href="#" class="tag">Medicina</a>
                  <a href="#" class="tag">Cuidado</a>
                  <a href="#" class="tag">Tratamientos</a>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("php/footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Indicador de progreso de scroll -->
  <div class="scroll-indicator" id="scrollIndicator"></div>
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      offset: 100,
      easing: 'ease-in-out'
    });
  </script>
  
  <script src="/GrupoOD/js/main.js"></script>
  
  <script>
    // Función para contar artículos por categoría
    function updateCategoryCounts() {
      const categories = ['salud', 'odontologia', 'estetica', 'bienestar'];
      
      categories.forEach(category => {
        const count = document.querySelectorAll(`[data-category="${category}"]`).length;
        const badge = document.getElementById(`count-${category}`);
        if (badge) {
          badge.textContent = count;
        }
      });
    }
    
    // Actualizar conteos cuando la página esté completamente cargada
    window.addEventListener('load', function() {
      setTimeout(updateCategoryCounts, 100);
    });
    
    // Filtro de categorías funcional
    document.querySelectorAll('.category-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        // Remover clase active de todos los botones
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        // Agregar clase active al botón clickeado
        this.classList.add('active');
        
        const category = this.dataset.category;
        const articles = document.querySelectorAll('#articlesContainer > div[data-category]');
        
        articles.forEach(article => {
          if (category === 'all' || article.dataset.category === category) {
            article.style.display = 'block';
            // Reactivar animación AOS
            article.classList.add('aos-animate');
          } else {
            article.style.display = 'none';
          }
        });
      });
    });
    
    // Hacer que los enlaces de categorías en el sidebar también filtren
    document.querySelectorAll('#categoriesList a[data-category]').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const category = this.dataset.category;
        
        // Activar el botón correspondiente en el filtro
        const categoryBtn = document.querySelector(`.category-btn[data-category="${category}"]`);
        if (categoryBtn) {
          categoryBtn.click();
          
          // Scroll hacia arriba para ver los artículos filtrados
          document.querySelector('#articlesContainer').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
    
    // Smooth scroll para enlaces
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
          e.preventDefault();
          const target = document.querySelector(href);
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        }
      });
    });
  </script>
</body>

</html>
