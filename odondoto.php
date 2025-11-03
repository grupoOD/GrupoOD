<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OD Odontomedics - Servicios odontológicos completos con tecnología avanzada y profesionales especializados. Cuidamos tu sonrisa con excelencia.">
    <meta name="keywords" content="odontología, dentista, ortodoncia, implantes dentales, estética dental, limpieza dental">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/GrupoOD/img/LogoODMedicsOfficial.png">
    
    <title>OD Odontomedics - Servicios Odontológicos Profesionales</title>
    
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
                <h4><i class="bi bi-teeth me-2"></i>OD ODONTOMEDICS</h4>
                <p class="text-white mb-3">Tu sonrisa, nuestra prioridad</p>
            </div>
        </section>
        <!-- CIERRE separador -->

        <!-- Servicios Destacados -->
        <section id="servicios-destacados" class="container py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Servicios Destacados</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Servicios complementarios para una salud bucal integral
                </p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm hover-zoom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-gem text-primary" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="card-title">Blanqueamiento Dental</h5>
                                <p class="card-text text-muted">Tratamientos avanzados para una sonrisa más blanca y brillante.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm hover-zoom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-virus text-primary" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="card-title">Implantes Dentales</h5>
                                <p class="card-text text-muted">Reemplazo de piezas dentales con implantes de titanio de alta calidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 border-0 shadow-sm hover-zoom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-star-fill text-primary" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="card-title">Estética Dental</h5>
                                <p class="card-text text-muted">Carillas, coronas y diseño de sonrisa para mejorar tu apariencia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 border-0 shadow-sm hover-zoom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-shield-fill-check text-primary" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="card-title">Odontopediatría</h5>
                                <p class="card-text text-muted">Atención especializada para la salud dental de niños y adolescentes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 border-0 shadow-sm hover-zoom">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <i class="bi bi-heart-pulse-fill text-primary" style="font-size: 3rem;"></i>
                                </div>
                                <h5 class="card-title">Periodoncia</h5>
                                <p class="card-text text-muted">Tratamiento de encías y prevención de enfermedades periodontales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Especialidades Odontológicas -->
        <section id="servicios" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Especialidades Odontológicas</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Ofrecemos tratamientos dentales especializados con tecnología de vanguardia
                </p>
                <div class="row-servicios">
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="/GrupoOD/img/serOd1.jpg" alt="Consultas generales">
                        <div class="overlay">
                            <h5><i class="bi bi-clipboard2-pulse me-2"></i>Consultas Generales</h5>
                            <p>Evaluación integral de tu salud bucal con diagnóstico profesional.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="/GrupoOD/img/serOd2.jpg" alt="Limpieza dental">
                        <div class="overlay">
                            <h5><i class="bi bi-droplet me-2"></i>Limpieza Dental</h5>
                            <p>Profilaxis profesional para mantener tus dientes y encías saludables.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="/GrupoOD/img/serOd3.png" alt="Ortodoncia">
                        <div class="overlay">
                            <h5><i class="bi bi-align-center me-2"></i>Ortodoncia</h5>
                            <p>Corrección de malposiciones dentales con brackets y alineadores invisibles.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="/GrupoOD/img/gino.jpg" alt="Radiografía Dental">
                        <div class="overlay">
                            <h5><i class="bi bi-camera me-2"></i>Radiografía Dental</h5>
                            <p>Diagnóstico preciso por imagen digital para tratamientos efectivos.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="/GrupoOD/img/caries.jpg" alt="Tratamiento de caries">
                        <div class="overlay">
                            <h5><i class="bi bi-shield-check me-2"></i>Tratamiento de Caries</h5>
                            <p>Restauraciones dentales con materiales de alta calidad y duración.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="/GrupoOD/img/endodoncia.jpg" alt="Endodoncia">
                        <div class="overlay">
                            <h5><i class="bi bi-heart-pulse me-2"></i>Endodoncia</h5>
                            <p>Tratamiento de conductos radiculares para salvar tus dientes naturales.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="700">
                    <a href="/GrupoOD/servicios.php#ododonto" class="btn btn-primary btn-lg">
                        <i class="bi bi-arrow-right me-2"></i>Ver todos los servicios
                    </a>
                </div>
            </div>
        </section>

        <!-- Especialistas -->
        <section id="especialistas" class="container py-5">
                <h2 class="text-center mb-4" data-aos="fade-up">Nuestro Equipo Odontológico</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Profesionales certificados con años de experiencia en odontología
                </p>
                <div class="carrusel">
                    <div class="carrusel-container d-flex">
                        <!-- Repetir por cada especialista -->
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="100">
                            <img src="/GrupoOD/img/user.jpg" class="card-img-top" alt="Especialista en ortodoncia" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dr. Juan Pérez</h5>
                                <p class="card-text">Ortodoncista - 8 años de experiencia en alineadores y brackets.</p>
                            </div>
                        </div>
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="200">
                            <img src="/GrupoOD/img/user.jpg" class="card-img-top" alt="Especialista en implantes" />
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