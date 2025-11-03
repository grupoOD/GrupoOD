<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Grupo OD - Centro médico integral especializado en servicios de salud, odontología, estética y más. Profesionales capacitados con experiencia comprobada.">
  <meta name="keywords" content="centro médico, odontología, salud integral, estética médica, profesionales de la salud, Ecuador">
  <meta name="author" content="Grupo OD">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Grupo OD - Centro Médico Integral">
  <meta property="og:description" content="Atención médica integral con profesionales especializados y experiencia comprobada.">
  <meta property="og:image" content="/GrupoOD/img/LogoODMedicsOfficial.png">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/GrupoOD/img/LogoODMedicsOfficial.png">
  
  <title>Grupo OD - Centro Médico Integral | Inicio</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="/GrupoOD/css/estilos.css">
  <link rel="stylesheet" href="/GrupoOD/css/style.css">
  <link rel="stylesheet" href="/GrupoOD/css/animations.css">
  
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
  <main class="pt-5">
    <!-- Carrusel -->
    <section id="inicio" class="mt-1 pt-1">
      <div id="carouselInicio" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/GrupoOD/img/carrusel.jpg" class="d-block w-100" alt="Sala de espera moderna y cómoda" />
            <div class="carousel-caption">
              <h5>
                Bienvenido a un espacio diseñado para tu comodidad y tranquilidad. 
                Tu salud comienza aquí.
              </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/GrupoOD/img/clinica2.jpg" class="d-block w-100" alt="Consultorio médico equipado" />
            <div class="carousel-caption">
              <h5>
                Consultorios médicos modernos con tecnología de vanguardia 
                para tu diagnóstico y tratamiento integral.
              </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/GrupoOD/img/clinica3.jpeg" class="d-block w-100" alt="Consultorio odontológico especializado" />
            <div class="carousel-caption">
              <h5>
                Atención odontológica especializada en un ambiente profesional 
                que garantiza tu mejor sonrisa.
              </h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselInicio"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselInicio"
          data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="bg-light container py-5">
      <h2 class="text-center mb-4" data-aos="fade-up">Nuestros Servicios</h2>
      <p class="text-center mb-4" data-aos="fade-up" data-aos-delay="50">
        <a href="/GrupoOD/servicios.php" class="btn btn-primary">
          <i class="bi bi-info-circle me-2"></i>Ver detalles de especialidades y servicios
        </a>
      </p>
      <div class="row-servicios">
        <div class="service-item" data-aos="fade-up" data-aos-delay="100">
          <img src="/GrupoOD/img/odmedics2.jpg" alt="OD Medics - Servicios médicos integrales">
          <div class="overlay">
            <h5><i class="bi bi-heart-pulse me-2"></i>OD Medics</h5>
            <p>Atención médica integral con profesionales especializados y experiencia comprobada.</p>
          </div>
        </div>
        <div class="service-item" data-aos="fade-up" data-aos-delay="200">
          <img src="/GrupoOD/img/ododonto2.jpg" alt="OD Odontomedics - Servicios odontológicos">
          <div class="overlay">
            <h5><i class="bi bi-brightness-high me-2"></i>OD Odontomedics</h5>
            <p>Servicios odontológicos completos, desde limpieza hasta tratamientos especializados.</p>
          </div>
        </div>
        <div class="service-item" data-aos="fade-up" data-aos-delay="300">
          <img src="/GrupoOD/img/odstetics1.jpg" alt="OD Stetics - Estética médica avanzada">
          <div class="overlay">
            <h5><i class="bi bi-stars me-2"></i>OD Stetics</h5>
            <p>Estética avanzada y tratamientos personalizados para mejorar la salud y apariencia.</p>
          </div>
        </div>
        <div class="service-item" data-aos="fade-up" data-aos-delay="400">
          <img src="/GrupoOD/img/courier.jpg" alt="OD Courier - Importación de productos médicos">
          <div class="overlay">
            <h5><i class="bi bi-box-seam me-2"></i>OD Courier</h5>
            <p>Servicios de importación seguros de productos médicos y especializados.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Especialistas -->
    <section id="especialistas" class="bg-white py-5">
      <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Conozca a Nuestro Equipo</h2>
        <div class="carrusel">
          <div class="carrusel-container d-flex">
            <!-- Repetir por cada especialista -->
            <div class="card mx-2" data-aos="zoom-in" data-aos-delay="100">
              <img src="/GrupoOD/img/gerente1.jpg" class="card-img-top" alt="Dr. Carlos Cañizares - Gerente General" />
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Gerente General</h5>
                <p class="card-text">
                  Dr. Carlos Cañizares
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Nosotros -->
    <section id="nosotros" class="container-fluid py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up">Nosotros</h2>
        <p class="text-center text-muted" data-aos="fade-up" data-aos-delay="100">
          Grupo Médico con varios años de experiencia en el restablecimiento
          del bienestar integral.
        </p>
        <div class="row align-items-center mt-4">
          <div class="col-md-6" data-aos="fade-right">
            <img id="nosotros-img" src="/GrupoOD/img/Equipo2.png" alt="Equipo médico de Grupo OD" class="img-fluid rounded shadow nosotros-img" />
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#vision">Visión</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#mision">Misión</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#objetivogeneral">Objetivo General</button>
              </li>
            </ul>
            <div class="tab-content px-3">
              <div class="tab-pane fade show active" id="vision">
                Ser un referente de atención en holística, reconocido por ofrecer servicios integrales
                que promuevan la salud y el bienestar en armonía con los aspectos físicos, emocionales,
                mentales y espirituales de cada persona. Aspiramos a transformar la percepción de la salud,
                fomentando una cultura de autocuidado y prevención, e innovando continuamente en la
                integración de terapias convencionales y complementarias basadas en la evidencia científica.
              </div>
              <div class="tab-pane fade" id="mision">
                Brindar atención integral y personalizada que promueva el bienestar físico, mental,
                emocional y espiritual de nuestros pacientes. Nos comprometemos a ofrecer servicios
                de salud centrados en la persona, combinando prácticas médicas basadas en evidencia
                con enfoques holísticos que respetan la diversidad cultural y las necesidades.
                Individuos, fomentando una vida equilibrada y saludable en armonía con el entorno.
              </div>
              <div class="tab-pane fade" id="objetivogeneral">
                Proporcionar servicios médicos especializados que aborden las necesidades físicas,
                emocionales, mentales y espirituales de cada paciente.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Separador -->
    <section class="separador position-relative" data-aos="fade">
      <img src="/GrupoOD/img/edificio1.jpg" alt="Instalaciones de Grupo OD" class="separador-img separador-img-fixed">
      <div class="overlay-content" data-aos="fade-right" data-aos-delay="200">
        <h4><i class="bi bi-building me-2"></i>GRUPO OD</h4>
        <p class="text-white mb-3">Comprometidos con tu salud y bienestar</p>
        <a href="#contacto" class="btn btn-primary mt-3 btn-pulse">
          Contáctanos <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="container py-5">
      <h2 class="text-center mb-4">¡TU SALUD, NUESTRA MEJOR ESPECIALIDAD!</h2>
      <p class="text-center text-muted mb-4">
        Ponte en las manos de los mejores especialistas en el GRUPO OD
      </p>
      
      <!-- Alertas de respuesta -->
      <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle-fill"></i> ¡Mensaje enviado correctamente! Nos pondremos en contacto pronto.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>
      
      <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i> 
          <?php 
            $error = $_GET['error'];
            if ($error == 'campos_vacios') echo 'Por favor completa todos los campos.';
            elseif ($error == 'correo_invalido') echo 'Por favor ingresa un correo válido.';
            else echo 'Hubo un error. Intenta nuevamente.';
          ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>
      
      <form class="row g-3 contact-form" action="php/formulario.php" method="POST" id="contactForm">
        <div class="col-md-6">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required />
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" name="correo" placeholder="Email" required />
        </div>
        <div class="col-12">
          <input type="text" class="form-control" name="asunto" placeholder="Asunto" required />
        </div>
        <div class="col-12">
          <textarea
            class="form-control"
            name="mensaje"
            rows="4"
            placeholder="Mensaje"
            required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary btn-submit">
            <span class="btn-text">Enviar Mensaje</span>
            <span class="btn-loading d-none">
              <span class="spinner-border spinner-border-sm me-2"></span>Enviando...
            </span>
          </button>
        </div>
      </form>
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
</body>

</html>