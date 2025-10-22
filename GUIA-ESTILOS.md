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

## 📱 BREAKPOINTS RESPONSIVE

```css
/* Móvil pequeño */
@media (max-width: 480px) { }

/* Móvil */
@media (max-width: 768px) { }

/* Tablet */
@media (max-width: 1024px) { }

/* Desktop */
@media (min-width: 1025px) { }
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
- Texto: 16px (1rem)
- Botones desktop: 40x40px
- Botones móvil: 44x44px
- Áreas táctiles: 48x48px

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

*Guía de estilos - GRUPO OD v1.0*
*Última actualización: Octubre 2025*
