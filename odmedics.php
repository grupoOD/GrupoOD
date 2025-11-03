<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OD Medics - Servicios médicos integrales con profesionales especializados. Medicina general, especialidades y atención personalizada de calidad.">
    <meta name="keywords" content="medicina general, consulta médica, especialidades médicas, atención médica, salud integral">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/GrupoOD/img/LogoODMedicsOfficial.png">

    <title>OD Medics - Servicios Médicos Integrales y Especializados</title>

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
            <img src="/GrupoOD/img/medico.jpg" alt="Servicios médicos profesionales" class="separador-img separador-img-fixed">
            <div class="overlay-content" data-aos="fade-up" data-aos-delay="200">
                <h4><i class="bi bi-heart-pulse me-2"></i>OD MEDICS</h4>
                <p class="text-white mb-3">Tu salud, nuestra misión</p>
            </div>
        </section>
        <!-- CIERRE separador -->

        <!-- Servicios Destacados -->
        <section id="servicios-destacados" class="container py-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Servicios Destacados</h2>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                Servicios complementarios para una atención médica integral
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm hover-zoom">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-clipboard2-pulse-fill text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Consultas Médicas</h5>
                            <p class="card-text text-muted">Consultas médicas generales y especializadas con profesionales expertos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm hover-zoom">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-heart-pulse-fill text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Controles de Salud</h5>
                            <p class="card-text text-muted">Controles de salud y planes de manejo personalizados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm hover-zoom">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-prescription2 text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Laboratorio Básico</h5>
                            <p class="card-text text-muted">Laboratorio básico y pruebas rápidas para diagnóstico inmediato.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm hover-zoom">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-activity text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Electrocardiogramas</h5>
                            <p class="card-text text-muted">Electrocardiogramas y monitoreo cardíaco especializado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm hover-zoom">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-calendar-check-fill text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title">Seguimiento Crónico</h5>
                            <p class="card-text text-muted">Planes de seguimiento para enfermedades crónicas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Especialidades Médicas -->
        <section id="especialidades" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Especialidades Médicas</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Atención médica integral con los más altos estándares de calidad
                </p>
                <div class="row-servicios">
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="/GrupoOD/img/serMed1.jpg" alt="Medicina General">
                        <div class="overlay">
                            <h5><i class="bi bi-hospital me-2"></i>Medicina General</h5>
                            <p>Atención primaria, control y seguimiento de la salud.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="/GrupoOD/img/pediatria.jpg" alt="Pediatría">
                        <div class="overlay">
                            <h5><i class="bi bi-balloon-heart me-2"></i>Pediatría</h5>
                            <p>Control del crecimiento, vacunación y atención integral del niño.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="/GrupoOD/img/odmedics2.jpg" alt="Ginecología y Obstetricia">
                        <div class="overlay">
                            <h5><i class="bi bi-person-hearts me-2"></i>Ginecología y Obstetricia</h5>
                            <p>Control prenatal, salud reproductiva y atención integral de la mujer.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="/GrupoOD/img/medinterna.jpg" alt="Medicina Interna">
                        <div class="overlay">
                            <h5><i class="bi bi-heart-pulse me-2"></i>Medicina Interna</h5>
                            <p>Manejo de enfermedades crónicas y diagnóstico integral.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="/GrupoOD/img/cardiologia.jpg" alt="Cardiología">
                        <div class="overlay">
                            <h5><i class="bi bi-heart-pulse-fill me-2"></i>Cardiología</h5>
                            <p>Diagnóstico y tratamiento de enfermedades cardiovasculares.</p>
                        </div>
                    </div>
                    <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="/GrupoOD/img/traumatologia.jpg" alt="Traumatología">
                        <div class="overlay">
                            <h5><i class="bi bi-bandaid me-2"></i>Traumatología</h5>
                            <p>Atención de lesiones musculoesqueléticas y fracturas.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="700">
                    <a href="/GrupoOD/servicios.php#odmedics" class="btn btn-primary btn-lg">
                        <i class="bi bi-arrow-right me-2"></i>Ver todos los servicios
                    </a>
                </div>
            </div>
        </section>

        <!-- Especialistas -->
        <section id="especialistas" class="container py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Nuestro Equipo Médico</h2>
                <p class="text-center text-muted mb-5" data-aos="fade-up">
                    Profesionales de la salud comprometidos con tu bienestar
                </p>
                <div class="carrusel">
                    <div class="carrusel-container d-flex">
                        <!-- Repetir por cada especialista -->
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="100">
                            <img src="/GrupoOD/img/especialista1.jpg" class="card-img-top" alt="Dr. Especialista en medicina general" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dr. Jorge Chicaiza</h5>
                                <p class="card-text">Cirujano General - especialista en cirugía general digestiva y laparoscopica avanzada - 25 años de experiencia.</p>
                            </div>
                        </div>
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="200">
                            <img src="/GrupoOD/img/especialista2.png" class="card-img-top" alt="Dra. Katerine Figueroa" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dra. Katerine Figueroa</h5>
                                <p class="card-text">Médico general - magíster en salud y seguridad ocupacional - 5 años de experiencia especializada.</p>
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