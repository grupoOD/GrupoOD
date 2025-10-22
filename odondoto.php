<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OD Odontologics - Servicios odontológicos completos con tecnología avanzada y profesionales especializados. Cuidamos tu sonrisa con excelencia.">
    <meta name="keywords" content="odontología, dentista, ortodoncia, implantes dentales, estética dental, limpieza dental">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/GrupoOD/img/LogoODMedicsOfficial.png">
    
    <title>OD Odontologics - Servicios Odontológicos Profesionales</title>
    
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

        <!-- Separador -->
        <section class="separador position-relative" data-aos="fade">
            <img src="/GrupoOD/img/sonrisa.png" alt="Servicios odontológicos de calidad" class="separador-img separador-img-fixed">
            <div class="overlay-content" data-aos="fade-up" data-aos-delay="200">
                <h4><i class="bi bi-teeth me-2"></i>OD ODONTOLOGICS</h4>
                <p class="text-white mb-3">Tu sonrisa, nuestra prioridad</p>
            </div>
        </section>
        <!-- CIERRE separador -->

        <!-- Servicios -->
        <section id="servicios" class="container py-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Nuestros Servicios Odontológicos</h2>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                Ofrecemos tratamientos dentales especializados con tecnología de vanguardia
            </p>
            <div class="row-servicios">
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="/GrupoOD/img/serOd1.jpg" alt="Ortodoncia profesional">
                    <div class="overlay">
                        <h5><i class="bi bi-align-center me-2"></i>Ortodoncia</h5>
                        <p>Corrección de malposiciones dentales con brackets y alineadores invisibles.</p>
                    </div>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="/GrupoOD/img/serOd2.jpg" alt="Implantes dentales">
                    <div class="overlay">
                        <h5><i class="bi bi-gear me-2"></i>Implantes Dentales</h5>
                        <p>Reemplazo de piezas dentales con implantes de titanio de última generación.</p>
                    </div>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="/GrupoOD/img/serOd3.png" alt="Estética dental">
                    <div class="overlay">
                        <h5><i class="bi bi-star me-2"></i>Estética Dental</h5>
                        <p>Blanqueamiento, carillas y diseño de sonrisa personalizado.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
                <a href="/GrupoOD/servicios.php#ododonto" class="btn btn-primary btn-lg">
                    <i class="bi bi-list-ul me-2"></i>Ver todas las especialidades y servicios de OD Odontologics
                </a>
            </div>
        </section>

        <!-- Especialistas -->
        <section id="especialistas" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Nuestro Equipo Odontológico</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Profesionales certificados con años de experiencia en odontología
                </p>
                <div class="carrusel">
                    <div class="carrusel-container d-flex">
                        <!-- Repetir por cada especialista -->
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="100">
                            <img src="/GrupoOD/img/especialista3.jpg" class="card-img-top" alt="Especialista en ortodoncia" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dr. Juan Pérez</h5>
                                <p class="card-text">Ortodoncista - 8 años de experiencia en alineadores y brackets.</p>
                            </div>
                        </div>
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="200">
                            <img src="/GrupoOD/img/especialista4.jpg" class="card-img-top" alt="Especialista en implantes" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dra. María González</h5>
                                <p class="card-text">Implantóloga - 10 años de experiencia en rehabilitación oral.</p>
                            </div>
                        </div>
                        <!-- Agregar más cards aquí -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("php/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/GrupoOD/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>

</html>