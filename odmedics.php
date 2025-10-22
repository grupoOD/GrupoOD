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

        <!-- Servicios -->
        <section id="servicios" class="container py-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Nuestros Servicios Médicos</h2>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                Atención médica integral con los más altos estándares de calidad
            </p>
            <div class="row-servicios">
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="/GrupoOD/img/serMed1.jpg" alt="Medicina general">
                    <div class="overlay">
                        <h5><i class="bi bi-hospital me-2"></i>Medicina General</h5>
                        <p>Consultas médicas integrales, diagnóstico y tratamiento de enfermedades comunes.</p>
                    </div>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="/GrupoOD/img/serMed2.jpg" alt="Medicina ocupacional">
                    <div class="overlay">
                        <h5><i class="bi bi-briefcase-fill me-2"></i>Medicina Ocupacional</h5>
                        <p>Evaluaciones laborales, exámenes pre-ocupacionales y salud en el trabajo.</p>
                    </div>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="/GrupoOD/img/gino.jpg" alt="Especialidades médicas">
                    <div class="overlay">
                        <h5><i class="bi bi-file-medical me-2"></i>Especialidades Médicas</h5>
                        <p>Atención especializada en diversas áreas de la medicina con profesionales expertos.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
                <a href="/GrupoOD/servicios.php#odmedics" class="btn btn-primary btn-lg">
                    <i class="bi bi-list-ul me-2"></i>Ver todas las especialidades y servicios de OD Medics
                </a>
            </div>
        </section>

        <!-- Especialistas -->
        <section id="especialistas" class="bg-light py-5">
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
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dr. Carlos Mendoza</h5>
                                <p class="card-text">Médico General - 12 años de experiencia en atención primaria y diagnóstico integral.</p>
                            </div>
                        </div>
                        <div class="card mx-2" data-aos="zoom-in" data-aos-delay="200">
                            <img src="/GrupoOD/img/especialista2_1.jpg" class="card-img-top" alt="Dra. Katerine Figueroa" />
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge me-2"></i>Dra. Katerine Figueroa</h5>
                                <p class="card-text">Médico general, magíster en salud y seguridad ocupacional - 5 años de experiencia especializada.</p>
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