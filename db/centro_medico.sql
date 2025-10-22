-- =====================================================
-- GRUPO OD - Base de Datos
-- Centro Médico Integral
-- Fecha: 14 de octubre de 2025
-- =====================================================

-- Crear base de datos
CREATE DATABASE IF NOT EXISTS centro_medico 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE centro_medico;

-- =====================================================
-- TABLA: contacto
-- Almacena los mensajes de contacto del formulario
-- =====================================================
CREATE TABLE IF NOT EXISTS contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    asunto VARCHAR(200) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('pendiente', 'leido', 'respondido') DEFAULT 'pendiente',
    ip_address VARCHAR(45) NULL,
    user_agent VARCHAR(255) NULL,
    INDEX idx_fecha (fecha),
    INDEX idx_estado (estado),
    INDEX idx_correo (correo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- TABLA: servicios (Opcional - para futuras mejoras)
-- =====================================================
CREATE TABLE IF NOT EXISTS servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria ENUM('medicos', 'odontologicos', 'esteticos', 'courier') NOT NULL,
    imagen VARCHAR(255) NULL,
    activo BOOLEAN DEFAULT TRUE,
    orden INT DEFAULT 0,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_categoria (categoria),
    INDEX idx_activo (activo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- TABLA: especialistas (Opcional - para futuras mejoras)
-- =====================================================
CREATE TABLE IF NOT EXISTS especialistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100) NOT NULL,
    descripcion TEXT NULL,
    foto VARCHAR(255) NULL,
    email VARCHAR(100) NULL,
    telefono VARCHAR(20) NULL,
    anios_experiencia INT DEFAULT 0,
    categoria ENUM('medicos', 'odontologicos', 'esteticos') NOT NULL,
    activo BOOLEAN DEFAULT TRUE,
    orden INT DEFAULT 0,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_categoria (categoria),
    INDEX idx_activo (activo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- TABLA: citas (Opcional - para futuras mejoras)
-- =====================================================
CREATE TABLE IF NOT EXISTS citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    servicio_id INT NULL,
    especialista_id INT NULL,
    fecha_cita DATE NOT NULL,
    hora_cita TIME NOT NULL,
    motivo TEXT NULL,
    estado ENUM('pendiente', 'confirmada', 'cancelada', 'completada') DEFAULT 'pendiente',
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    notas TEXT NULL,
    FOREIGN KEY (servicio_id) REFERENCES servicios(id) ON DELETE SET NULL,
    FOREIGN KEY (especialista_id) REFERENCES especialistas(id) ON DELETE SET NULL,
    INDEX idx_fecha_cita (fecha_cita),
    INDEX idx_estado (estado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =====================================================
-- DATOS DE EJEMPLO - Servicios
-- =====================================================
INSERT INTO servicios (nombre, descripcion, categoria, orden) VALUES
('Medicina General', 'Consultas médicas integrales, diagnóstico y tratamiento de enfermedades comunes.', 'medicos', 1),
('Medicina Ocupacional', 'Evaluaciones laborales, exámenes pre-ocupacionales y salud en el trabajo.', 'medicos', 2),
('Especialidades Médicas', 'Atención especializada en diversas áreas de la medicina con profesionales expertos.', 'medicos', 3),
('Ortodoncia', 'Corrección de malposiciones dentales con brackets y alineadores invisibles.', 'odontologicos', 1),
('Implantes Dentales', 'Reemplazo de piezas dentales con implantes de titanio de última generación.', 'odontologicos', 2),
('Estética Dental', 'Blanqueamiento, carillas y diseño de sonrisa personalizado.', 'odontologicos', 3),
('Tratamientos Faciales', 'Tratamientos estéticos avanzados para el cuidado facial.', 'esteticos', 1),
('Rejuvenecimiento', 'Procedimientos no invasivos para rejuvenecimiento facial.', 'esteticos', 2),
('Importación de Productos', 'Servicios de importación seguros de productos médicos y especializados.', 'courier', 1);

-- =====================================================
-- DATOS DE EJEMPLO - Especialistas
-- =====================================================
INSERT INTO especialistas (nombre, especialidad, descripcion, anios_experiencia, categoria, orden) VALUES
('Dr. Carlos Cañizares', 'Gerente General', 'Gerente General con amplia experiencia en administración de centros médicos.', 15, 'medicos', 1),
('Dr. Carlos Mendoza', 'Médico General', 'Médico General con 12 años de experiencia en atención primaria y diagnóstico integral.', 12, 'medicos', 2),
('Dra. Katerine Figueroa', 'Medicina Ocupacional', 'Médico general, magíster en salud y seguridad ocupacional con 5 años de experiencia especializada.', 5, 'medicos', 3),
('Dr. Juan Pérez', 'Ortodoncista', 'Ortodoncista con 8 años de experiencia en alineadores y brackets.', 8, 'odontologicos', 1),
('Dra. María González', 'Implantóloga', 'Implantóloga con 10 años de experiencia en rehabilitación oral.', 10, 'odontologicos', 2);

-- =====================================================
-- VISTA: contactos_recientes
-- Muestra los mensajes de contacto más recientes
-- =====================================================
CREATE OR REPLACE VIEW contactos_recientes AS
SELECT 
    id,
    nombre,
    correo,
    asunto,
    LEFT(mensaje, 100) as mensaje_preview,
    estado,
    fecha
FROM contacto
ORDER BY fecha DESC
LIMIT 50;

-- =====================================================
-- PROCEDIMIENTO: marcar_contacto_leido
-- Marca un mensaje de contacto como leído
-- =====================================================
DELIMITER //
CREATE PROCEDURE marcar_contacto_leido(IN contacto_id INT)
BEGIN
    UPDATE contacto 
    SET estado = 'leido' 
    WHERE id = contacto_id;
END //
DELIMITER ;

-- =====================================================
-- FIN DEL SCRIPT
-- =====================================================
