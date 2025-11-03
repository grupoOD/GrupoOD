# 📋 DOCUMENTACIÓN TÉCNICA - GRUPO OD

## 🏥 Descripción del Proyecto
Sitio web informativo para el Centro Médico Grupo OD, que ofrece servicios integrales de salud incluyendo medicina general, odontología, estética médica y servicios de importación.

## 🚀 Características Principales

### ✨ Mejoras Implementadas (Octubre 2025)

1. **SEO y Metadatos**
   - Meta tags descriptivos en todas las páginas
   - Open Graph tags para redes sociales
   - Favicon implementado
   - Robots.txt configurado
   - Alt text descriptivo en todas las imágenes

2. **Optimización de Rendimiento**
   - Rutas absolutas consistentes en todo el proyecto
   - Preconexión a fuentes externas
   - Compresión y caché configurados en .htaccess
   - Lazy loading de imágenes implementado

3. **Diseño y UX**
   - Eliminación del efecto parallax en imágenes separadoras
   - Animaciones AOS para experiencia fluida
   - Efectos hover profesionales en tarjetas
   - Indicador de progreso de scroll
   - Botón "volver arriba" animado
   - Menú responsive mejorado

4. **Contenido Mejorado**
   - Descripciones detalladas de servicios
   - Información de especialistas actualizada
   - Footer con información completa de contacto
   - Horarios de atención agregados
   - Enlaces a redes sociales

5. **Seguridad**
   - Prepared statements en formularios
   - Validación de inputs mejorada
   - Headers de seguridad en .htaccess
   - Protección de archivos sensibles
   - Manejo de errores seguro

## 📁 Estructura del Proyecto

```
GrupoOD/
├── index.php              # Página principal
├── odmedics.php          # Página de servicios médicos
├── odondoto.php          # Página de servicios odontológicos
├── servicios.php         # Catálogo completo de servicios
├── odblogs.php           # Blog de salud
├── robots.txt            # Configuración SEO
├── .htaccess            # Configuración Apache
├── css/
│   ├── estilos.css      # Estilos principales + Responsive
│   ├── style.css        # Header/Footer + Responsive
│   ├── odblogs.css      # Blog styles + Responsive
│   └── animations.css   # Animaciones y efectos
├── js/
│   └── main.js          # JavaScript principal + Mobile
├── php/
│   ├── header.php       # Encabezado compartido
│   ├── footer.php       # Pie de página compartido
│   ├── conexion.php     # Conexión a base de datos
│   └── formulario.php   # Procesamiento de formularios
├── img/                 # Imágenes del sitio
├── db/                  # Base de datos
└── docs/
    ├── CHECKLIST.md     # Checklist de desarrollo
    ├── DOCUMENTACION.md # Este archivo
    ├── README.md        # Información general
    └── GUIA-ESTILOS.md  # Guía de estilos
```

## 🎨 Paleta de Colores

- **Azul Oscuro**: #354b8c
- **Azul Medio**: #30588c
- **Azul Claro**: #329aa6
- **Gris Claro**: #f2f2f2
- **Negro**: #0d0d0d

## 🔧 Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript ES6+
- **Framework CSS**: Bootstrap 5.3.0
- **Iconos**: Bootstrap Icons 1.11.0
- **Animaciones**: AOS (Animate On Scroll)
- **Backend**: PHP 7.4+
- **Base de Datos**: MySQL/MariaDB
- **Servidor**: Apache (XAMPP)

## 📦 Dependencias Externas

- Bootstrap 5.3.0
- Bootstrap Icons 1.11.0
- AOS Library 2.3.1
- Google Fonts (Inter)

## 🌐 Configuración del Servidor Local

### Requisitos
- XAMPP (Apache + PHP + MySQL)
- PHP 7.4 o superior
- MySQL 5.7 o superior

### Instalación

1. **Clonar o copiar el proyecto** en `C:\xampp\htdocs\GrupoOD`

2. **Configurar la base de datos**:
   ```sql
   CREATE DATABASE centro_medico CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   
   USE centro_medico;
   
   CREATE TABLE contacto (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nombre VARCHAR(100) NOT NULL,
       correo VARCHAR(100) NOT NULL,
       asunto VARCHAR(200) NOT NULL,
       mensaje TEXT NOT NULL,
       fecha DATETIME DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Iniciar Apache y MySQL** desde el panel de control de XAMPP

4. **Acceder al sitio**: `http://localhost/GrupoOD/`

## 📝 Páginas Principales

### 🏠 Inicio (index.php)
- Carrusel de imágenes destacadas
- Sección de servicios con tarjetas interactivas
- Equipo de especialistas
- Sección "Nosotros" con tabs (Visión, Misión, Objetivo)
- Separador visual con call-to-action
- Formulario de contacto

### 💉 OD Medics (odmedics.php)
- Banner principal
- Servicios médicos específicos
- Equipo médico especializado

### 🦷 OD Odontologics (odondoto.php)
- Banner principal
- Servicios odontológicos
- Especialistas en odontología

## 🔒 Características de Seguridad

- ✅ SQL Injection protection (Prepared Statements)
- ✅ XSS Protection headers
- ✅ CSRF tokens (recomendado implementar)
- ✅ Validación de entrada de formularios
- ✅ Sanitización de datos
- ✅ Archivos sensibles protegidos

## 📱 Responsive Design Completo (✅ Implementado Nov 2025)

El sitio es completamente responsive y optimizado para todos los dispositivos móviles:

### 🎯 Breakpoints Implementados
- **1024px** - Tablets (iPad, Galaxy Tab)
- **768px** - Tablets pequeñas
- **640px** - Móviles grandes (iPhone Plus, Galaxy S)
- **480px** - Móviles estándar (iPhone SE, Galaxy A)
- **360px** - Móviles muy pequeños

### 📱 Características Responsive por Dispositivo

#### Desktop (> 1024px)
- Layout completo de 3-4 columnas
- Sidebar sticky en blog
- Hover effects activos
- Tipografía: 16px base
- Carrusel: 585px altura

#### Tablets (768px - 1024px)
- Layout de 2-3 columnas
- Menú hamburguesa: 280px slide-in
- Logo: 35px
- Tipografía: 15-16px
- Carrusel: 350-400px
- Footer responsive

#### Móviles Grandes (640px - 768px)
- Layout de 1-2 columnas
- Menú: 75% width
- Cards 100% width
- Tipografía: 14px
- Carrusel: 300-350px
- Imágenes: 180-200px altura

#### Móviles Estándar (480px - 640px)
- Layout de 1 columna
- Menú: 85% width
- Logo: 30px
- Tipografía: 13-14px
- Carrusel: 250-300px
- Botones touch: 44x44px mínimo

#### Móviles Pequeños (360px - 480px)
- Layout optimizado 1 columna
- Menú: 90% width
- Logo: 28px
- Tipografía: 12-13px
- Carrusel: 220-250px
- Footer compacto

### ✨ Optimizaciones Touch
- **Touch targets**: Mínimo 44x44px (accesibilidad)
- **Hover effects**: Deshabilitados en dispositivos táctiles
- **Smooth scrolling**: -webkit-overflow-scrolling en carruseles
- **Overflow control**: Sin scroll horizontal no deseado
- **Menú hamburguesa**: Transiciones suaves y cierre automático
- **Back-to-top button**: Responsive (50px → 40px)

### 🎨 Archivos CSS Responsive

#### estilos.css
- 5 breakpoints completos
- Tipografía escalable progresiva
- Carruseles adaptativos
- Service cards responsive
- Botones con sizing adaptativo
- Formularios optimizados
- Touch device optimizations
- Image lazy loading classes
- Responsive spacing utilities

#### style.css
- Header responsive con logo adaptativo
- Menú hamburguesa completamente funcional
- Navegación móvil con slide-in
- Footer con layout flexible
- Redes sociales escalables
- Dropdown menu touch-friendly

#### odblogs.css
- Hero section adaptativo
- Blog cards responsive
- Sidebar adaptativo (sticky → fluid)
- Filtros de categorías optimizados
- Posts recientes con thumbnails adaptativos
- Tags y badges responsive
- Paginación mobile-friendly

## 🎯 Funcionalidades JavaScript

- Menú hamburguesa responsive
- Scroll suave a secciones
- Efectos en header al hacer scroll
- Carrusel automático de especialistas
- Validación de formularios
- Indicador de progreso de scroll
- Botón "volver arriba"
- Lazy loading de imágenes
- Auto-cierre de alertas

## 📧 Formulario de Contacto

El formulario incluye:
- Validación client-side y server-side
- Sanitización de inputs
- Mensajes de éxito/error
- Protección contra spam (recomendado: agregar reCAPTCHA)
- Almacenamiento en base de datos

## 🚀 Próximas Mejoras Recomendadas

1. **Funcionalidades**:
   - [ ] Sistema de citas en línea
   - [ ] Panel de administración
   - [ ] Blog de salud
   - [ ] Galería de casos
   - [ ] Chat en vivo

2. **SEO**:
   - [ ] Sitemap XML
   - [ ] Schema.org markup
   - [ ] Optimización de imágenes WebP
   - [ ] Meta tags dinámicos

3. **Seguridad**:
   - [ ] Implementar HTTPS
   - [ ] Google reCAPTCHA en formularios
   - [ ] Rate limiting
   - [ ] Tokens CSRF
   - [ ] Backup automático

4. **Performance**:
   - [ ] CDN para recursos estáticos
   - [ ] Minificación de CSS/JS
   - [ ] Service Workers para PWA
   - [ ] Optimización de bases de datos

## 📞 Información de Contacto

**Grupo OD - Centro Médico Integral**
- **Email**: odmedicsas@gmail.com
- **Teléfonos**: 0980312202 / 0981732398
- **Dirección**: Hermandad Ferroviaria y Miguel Hermoso S11-115
- **Horario**: Lun-Vie 8:00-18:00, Sáb 9:00-14:00

## 📄 Licencia

Todos los derechos reservados © 2025 Grupo OD

---

---

## 🚀 Historial de Actualizaciones

### v2.1 (3 Noviembre 2025) - Responsivo Completo
- ✅ **5 breakpoints** implementados para todos los dispositivos
- ✅ **Touch optimizations** completas
- ✅ **Menú hamburguesa** mejorado y funcional
- ✅ **Footer responsive** con layout flexible
- ✅ **Blog completamente responsive** (odblogs.css)
- ✅ **Tipografía escalable** (16px → 12px progresivo)
- ✅ **Carruseles adaptativos** (585px → 220px)
- ✅ **Botón back-to-top** responsive
- ✅ **Imágenes optimizadas** para cada tamaño
- ✅ **Formularios mobile-friendly**
- ✅ Testeo en iPhone, Samsung, iPad

### v2.0 (14 Octubre 2025) - SEO y Optimización
- ✅ SEO completo con meta tags
- ✅ Eliminación de parallax
- ✅ Seguridad mejorada
- ✅ Performance optimizada

---

**Última actualización**: 3 de noviembre de 2025
**Versión**: 2.1 - Responsivo Completo
**Desarrollador**: Equipo de desarrollo Grupo OD
