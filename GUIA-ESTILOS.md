# 🎨 GUÍA DE ESTILOS - GRUPO OD

## 🎯 IDENTIDAD VISUAL

### Paleta de Colores Principal

```
┌─────────────────────────────────────────────────────┐
│  AZUL OSCURO                                        │
│  #354b8c                                            │
│  RGB(53, 75, 140)                                   │
│  Uso: Headers, títulos principales, navegación     │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│  AZUL MEDIO                                         │
│  #30588c                                            │
│  RGB(48, 88, 140)                                   │
│  Uso: Botones, enlaces, elementos interactivos    │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│  AZUL CLARO                                         │
│  #329aa6                                            │
│  RGB(50, 154, 166)                                  │
│  Uso: Hover, estados activos, acentos             │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│  GRIS CLARO                                         │
│  #f2f2f2                                            │
│  RGB(242, 242, 242)                                 │
│  Uso: Fondos, secciones alternadas                │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│  NEGRO                                              │
│  #0d0d0d                                            │
│  RGB(13, 13, 13)                                    │
│  Uso: Texto principal, contenido                   │
└─────────────────────────────────────────────────────┘
```

---

## 📝 TIPOGRAFÍA

### Familia de Fuentes
```css
font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
```

### Jerarquía de Texto

```
H1 - 2.5rem (40px)   - Títulos principales de página
H2 - 2rem (32px)     - Títulos de sección
H3 - 1.5rem (24px)   - Subtítulos
H4 - 1.2rem (19px)   - Títulos de tarjetas
H5 - 1rem (16px)     - Títulos pequeños
Body - 1rem (16px)   - Texto general
Small - 0.875rem     - Texto secundario
```

### Pesos de Fuente
- **Regular (400)**: Texto de párrafo
- **Medium (500)**: Texto enfatizado
- **Semi-Bold (600)**: Títulos y subtítulos
- **Bold (700)**: Encabezados principales

---

## 🎨 COMPONENTES

### Botones

#### Botón Principal
```css
background: linear-gradient(135deg, #30588c, #329aa6);
padding: 10px 24px;
border-radius: 25px;
color: white;
font-weight: 500;
box-shadow: 0 4px 12px rgba(48, 88, 140, 0.2);

/* Hover */
transform: translateY(-3px);
box-shadow: 0 6px 20px rgba(48, 88, 140, 0.3);
```

#### Botón Secundario
```css
background: transparent;
border: 2px solid #30588c;
color: #30588c;
padding: 10px 24px;
border-radius: 25px;

/* Hover */
background: #30588c;
color: white;
```

### Tarjetas (Cards)

```css
background: white;
border-radius: 12px;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
overflow: hidden;
transition: transform 0.3s, box-shadow 0.3s;

/* Hover */
transform: translateY(-5px);
box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
```

### Formularios

#### Input Fields
```css
border: 2px solid #e0e0e0;
border-radius: 8px;
padding: 12px 18px;
font-size: 1rem;

/* Focus */
border-color: #329aa6;
box-shadow: 0 0 0 0.2rem rgba(50, 154, 166, 0.15);
```

---

## 🔄 ANIMACIONES

### Transiciones Estándar
```css
transition: all 0.3s ease;
transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
```

### Efectos Hover
- **Elevación**: `transform: translateY(-5px)`
- **Escala**: `transform: scale(1.05)`
- **Sombra**: `box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15)`

### Scroll Animations (AOS)
- `fade-up`: Aparece desde abajo
- `fade-left`: Aparece desde la izquierda
- `fade-right`: Aparece desde la derecha
- `zoom-in`: Aparece con zoom
- Duración: 800ms
- Offset: 100px

---

## 📐 ESPACIADO

### Sistema de Espaciado (múltiplos de 8px)

```
XS  - 8px   (0.5rem)
SM  - 16px  (1rem)
MD  - 24px  (1.5rem)
LG  - 32px  (2rem)
XL  - 40px  (2.5rem)
XXL - 48px  (3rem)
```

### Márgenes de Sección
- Padding vertical: 60px - 80px
- Padding horizontal: 20px (móvil) / 40px (tablet) / 80px (desktop)

---

## 📱 BREAKPOINTS RESPONSIVE (✅ Implementado Nov 2025)

### Sistema de 5 Breakpoints

```css
/* Móvil muy pequeño - 360px */
@media (max-width: 360px) {
  /* iPhone SE, Galaxy pequeños */
  body { font-size: 12px; }
  .carousel-banner { height: 220px; }
  .logo { height: 28px; }
}

/* Móvil estándar - 480px */
@media (max-width: 480px) {
  /* iPhone 12/13/14, Galaxy S */
  body { font-size: 13px; }
  .carousel-banner { height: 250px; }
  .logo { height: 30px; }
  .menu-mobile { width: 85%; }
}

/* Móvil grande - 640px */
@media (max-width: 640px) {
  /* iPhone Plus, Galaxy Note */
  body { font-size: 14px; }
  .carousel-banner { height: 300px; }
  .logo { height: 32px; }
  .menu-mobile { width: 75%; }
}

/* Tablet pequeña - 768px */
@media (max-width: 768px) {
  /* iPad Mini, tablets pequeñas */
  body { font-size: 15px; }
  .carousel-banner { height: 350px; }
  .logo { height: 35px; }
  .menu-mobile { width: 280px; }
}

/* Tablet estándar - 1024px */
@media (max-width: 1024px) {
  /* iPad, Galaxy Tab */
  body { font-size: 16px; }
  .carousel-banner { height: 400px; }
  .sidebar { position: relative; }
}

/* Desktop */
@media (min-width: 1025px) {
  /* Laptops, desktops */
  body { font-size: 16px; }
  .carousel-banner { height: 585px; }
  .sidebar { position: sticky; }
}
```

### 🎯 Elementos Adaptativos por Breakpoint

| Elemento | 360px | 480px | 640px | 768px | 1024px | Desktop |
|----------|-------|-------|-------|-------|--------|---------|
| Font Base | 12px | 13px | 14px | 15px | 16px | 16px |
| Logo Height | 28px | 30px | 32px | 35px | 35px | 40px |
| Carrusel | 220px | 250px | 300px | 350px | 400px | 585px |
| Menú Width | 90% | 85% | 75% | 280px | 280px | Full |
| Botón Size | 40px | 42px | 44px | 44px | 44px | 50px |
| Card Img | 140px | 160px | 180px | 200px | 230px | 250px |

### 📱 Touch Optimizations

```css
/* Deshabilitar hover en touch devices */
@media (hover: none) and (pointer: coarse) {
  .hover-zoom:hover {
    transform: none;
  }
  
  .card:hover {
    transform: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  }
}

/* Touch targets mínimos */
@media (max-width: 768px) {
  button, a, .touch-target {
    min-width: 44px;
    min-height: 44px;
    padding: 12px;
  }
}

/* Smooth scrolling en carruseles */
.carousel-scroll {
  -webkit-overflow-scrolling: touch;
  scroll-behavior: smooth;
}
```

### 🚫 Prevención de Overflow Horizontal

```css
html, body {
  overflow-x: hidden;
  max-width: 100vw;
}

.container-fluid,
.row {
  max-width: 100%;
}

img {
  max-width: 100%;
  height: auto;
}
```

---

## 🎭 EFECTOS ESPECIALES

### Glassmorphism
```css
background: rgba(255, 255, 255, 0.1);
backdrop-filter: blur(10px);
border: 1px solid rgba(255, 255, 255, 0.2);
```

### Gradiente Animado
```css
background: linear-gradient(270deg, #354b8c, #30588c, #329aa6);
background-size: 400% 400%;
animation: gradient-shift 15s ease infinite;
```

### Overlay en Imágenes
```css
position: relative;
overflow: hidden;

&::before {
  content: '';
  position: absolute;
  background: rgba(53, 75, 140, 0.8);
  opacity: 0;
  transition: opacity 0.4s;
}

&:hover::before {
  opacity: 1;
}
```

---

## 🖼️ IMÁGENES

### Tamaños Recomendados

| Elemento | Ancho | Alto | Ratio |
|----------|-------|------|-------|
| Carrusel | 1920px | 585px | 16:9 |
| Servicios | 350px | 200px | 16:9 |
| Especialistas | 450px | 450px | 1:1 |
| Separador | 1920px | 350px | Custom |
| Logo | 200px | Auto | Auto |

### Optimización
- Formato: JPG (fotos), PNG (logos/transparencia), WebP (moderno)
- Compresión: 80-85% calidad
- Lazy loading habilitado
- Alt text siempre presente

---

## ♿ ACCESIBILIDAD

### Contraste Mínimo
- Texto normal: 4.5:1 (WCAG AA)
- Texto grande: 3:1 (WCAG AA)
- Elementos interactivos: 3:1

### Tamaños Mínimos
- Texto desktop: 16px (1rem)
- Texto móvil: 12-14px (escalable)
- Botones desktop: 40x40px
- Botones móvil: 44x44px (WCAG AA)
- Áreas táctiles: 44x44px mínimo
- Links en móvil: 44x44px con padding

### Focus States
```css
:focus {
  outline: 2px solid #329aa6;
  outline-offset: 2px;
}
```

---

## 🎯 ICONOS

### Bootstrap Icons
```html
<i class="bi bi-heart-pulse"></i>    <!-- Médico -->
<i class="bi bi-teeth"></i>           <!-- Odontología -->
<i class="bi bi-stars"></i>           <!-- Estética -->
<i class="bi bi-box-seam"></i>        <!-- Courier -->
<i class="bi bi-envelope"></i>        <!-- Email -->
<i class="bi bi-telephone"></i>       <!-- Teléfono -->
<i class="bi bi-geo-alt"></i>         <!-- Ubicación -->
<i class="bi bi-arrow-up"></i>        <!-- Volver arriba -->
```

---

## 📋 BUENAS PRÁCTICAS

### CSS
✅ Usar variables CSS (`:root`)
✅ Agrupar estilos por componente
✅ Comentar secciones importantes
✅ Usar BEM o nomenclatura consistente
✅ Mobile-first approach

### JavaScript
✅ Event delegation cuando sea posible
✅ Debounce/throttle en scroll events
✅ Cargar scripts al final del body
✅ Usar `const` y `let`, no `var`
✅ Comentar funciones complejas

### HTML
✅ Semántica correcta (`<header>`, `<nav>`, `<main>`)
✅ Alt text en todas las imágenes
✅ Aria-labels en elementos interactivos
✅ Estructura lógica de headings (h1 → h6)
✅ Validar HTML con W3C Validator

---

## 🎨 EJEMPLOS DE CÓDIGO

### Card con Hover Effect
```html
<div class="card lift-on-hover">
  <img src="imagen.jpg" alt="Descripción" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Título</h5>
    <p class="card-text">Descripción</p>
  </div>
</div>
```

### Botón con Icono
```html
<button class="btn btn-primary">
  <i class="bi bi-envelope me-2"></i>
  Contactar
</button>
```

### Sección con Animación
```html
<section id="servicios" data-aos="fade-up">
  <h2>Nuestros Servicios</h2>
  <!-- Contenido -->
</section>
```

---

## 📊 PERFORMANCE

### Métricas Objetivo
- First Contentful Paint: < 1.8s
- Largest Contentful Paint: < 2.5s
- Time to Interactive: < 3.8s
- Cumulative Layout Shift: < 0.1
- First Input Delay: < 100ms

### Optimizaciones
✅ Minificar CSS/JS
✅ Comprimir imágenes
✅ Lazy loading
✅ CDN para librerías
✅ Caché del navegador

---

---

## 📱 ARCHIVOS CSS RESPONSIVE

### ✅ estilos.css (Principal + Responsive)
- **5 breakpoints completos** (1024px, 768px, 640px, 480px, 360px)
- Tipografía escalable progresiva
- Carruseles adaptativos (585px → 220px)
- Service items responsive (350px → 100%)
- Image heights adaptativos (200px → 130px)
- Card sizing para todos los dispositivos
- Botones con sizing adaptativo
- Formularios optimizados móvil
- Back-to-top button responsive (50px → 40px)
- Touch device optimizations
- Overflow-x prevention
- Scroll optimizations
- Image blur-load classes

### ✅ style.css (Header/Footer + Responsive)
- Header responsive con logo adaptativo (35px → 28px)
- Menú hamburguesa funcional (280px → 100%)
- Navegación móvil con slide-in desde derecha
- Footer layout flexible y adaptativo
- Redes sociales escalables (35px → 28px)
- Dropdown menu touch-friendly
- Typography responsive en nav

### ✅ odblogs.css (Blog + Responsive)
- Hero section adaptativo (3rem → 1.3rem)
- Blog cards responsive (250px → 140px)
- Sidebar sticky en desktop, fluido en móvil
- Filtros de categorías optimizados
- Posts recientes con thumbnails adaptativos (80px → 55px)
- Tags y badges responsive
- Paginación mobile-friendly
- Meta info con wrapping en móvil

---

## 🎯 TESTING RESPONSIVE

### Dispositivos Probados
✅ **iPhone SE** (375x667) - Móvil pequeño
✅ **iPhone 12/13** (390x844) - Móvil estándar
✅ **iPhone 14 Plus** (428x926) - Móvil grande
✅ **Samsung Galaxy S21** (360x800) - Android estándar
✅ **iPad Mini** (768x1024) - Tablet pequeña
✅ **iPad Pro** (1024x1366) - Tablet grande

### Checklist de Responsive
- [x] Sin scroll horizontal en ningún breakpoint
- [x] Imágenes se adaptan correctamente
- [x] Textos legibles en todos los tamaños
- [x] Botones touch-friendly (44x44px)
- [x] Menú hamburguesa funciona perfectamente
- [x] Formularios usables en móvil
- [x] Footer adaptativo sin overflow
- [x] Carruseles con touch swipe
- [x] Animaciones suaves en todos los dispositivos
- [x] Hover deshabilitado en touch devices

---

*Guía de estilos - GRUPO OD v2.1*
*Última actualización: 3 de Noviembre 2025*
*Responsive Design Completo Implementado*
