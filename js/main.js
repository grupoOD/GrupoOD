// ========================================
// MENÚ HAMBURGUESA (MÓVIL)
// ========================================
const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');
const dropdownServicios = document.getElementById('dropdownServicios');

if (menuToggle) {
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    mainNav.classList.toggle('active');
    document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
  });

  // Cerrar menú al hacer clic en un enlace
  document.querySelectorAll('.nav a').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth <= 768) {
        menuToggle.classList.remove('active');
        mainNav.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  });

  // Toggle del dropdown en móvil
  if (dropdownServicios) {
    const dropdownToggle = dropdownServicios.querySelector('.dropdown-toggle');
    dropdownToggle.addEventListener('click', (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        dropdownServicios.classList.toggle('active');
      }
    });
  }
}

// ========================================
// SCROLL SUAVE PARA ENLACES ANCLA
// ========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href === '#') return;
    
    e.preventDefault();
    const target = document.querySelector(href);
    if (target) {
      const headerHeight = document.getElementById('header').offsetHeight;
      const targetPosition = target.offsetTop - headerHeight - 20;
      
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });
});

// ========================================
// HEADER SCROLL EFFECT
// ========================================
window.addEventListener('scroll', () => {
  const header = document.getElementById('header');
  const scrollY = window.scrollY;

  // Cambiar fondo del header cuando se scrollea
  if (scrollY > 50) {
    header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
    header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
  } else {
    header.style.backgroundColor = '#ffffff';
    header.style.boxShadow = '0 3px 8px rgba(0, 0, 0, 0.08)';
  }

  // Activar enlace del menú según sección visible
  const scrollPos = scrollY + 100;
  document.querySelectorAll('section[id]').forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute('id');
    
    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
      document.querySelectorAll('.nav a').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${sectionId}`) {
          link.classList.add('active');
        }
      });
    }
  });
});

// ========================================
// CARRUSEL DE ESPECIALISTAS
// ========================================
const carrusel = document.querySelector(".carrusel-container");
if (carrusel) {
  let desplazamiento = 0;

  function moverCarrusel() {
    const cantidadCards = carrusel.children.length;
    if(cantidadCards <= 1) return;

    const anchoCard = carrusel.children[0].offsetWidth + 20;
    desplazamiento += anchoCard;

    if (desplazamiento >= carrusel.scrollWidth - carrusel.offsetWidth) {
      desplazamiento = 0;
    }

    carrusel.style.transform = `translateX(-${desplazamiento}px)`;
  }

  if(carrusel.children.length > 1) {
    setInterval(moverCarrusel, 3000);
  }
}

// ========================================
// VALIDACIÓN DE FORMULARIO
// ========================================
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    const btnSubmit = this.querySelector('.btn-submit');
    const btnText = btnSubmit.querySelector('.btn-text');
    const btnLoading = btnSubmit.querySelector('.btn-loading');
    
    btnText.classList.add('d-none');
    btnLoading.classList.remove('d-none');
    btnSubmit.disabled = true;
  });
}

// ========================================
// AUTO-CERRAR ALERTAS
// ========================================
document.addEventListener('DOMContentLoaded', () => {
  const alerts = document.querySelectorAll('.alert');
  alerts.forEach(alert => {
    setTimeout(() => {
      alert.style.opacity = '0';
      setTimeout(() => alert.remove(), 300);
    }, 5000);
  });
});

// ========================================
// INDICADOR DE PROGRESO DE SCROLL
// ========================================
const scrollIndicator = document.getElementById('scrollIndicator');
if (scrollIndicator) {
  window.addEventListener('scroll', () => {
    const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    scrollIndicator.style.width = scrolled + '%';
  });
}

// ========================================
// LAZY LOADING DE IMÁGENES
// ========================================
if ('IntersectionObserver' in window) {
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        if (img.dataset.src) {
          img.src = img.dataset.src;
          img.classList.remove('blur-load');
          img.classList.add('loaded');
          observer.unobserve(img);
        }
      }
    });
  });

  document.querySelectorAll('img[data-src]').forEach(img => {
    imageObserver.observe(img);
  });
}

// ========================================
// BOTÓN "VOLVER ARRIBA"
// ========================================
const backToTopBtn = document.createElement('button');
backToTopBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
backToTopBtn.className = 'back-to-top';
backToTopBtn.setAttribute('aria-label', 'Volver arriba');
document.body.appendChild(backToTopBtn);

window.addEventListener('scroll', () => {
  if (window.scrollY > 300) {
    backToTopBtn.classList.add('show');
  } else {
    backToTopBtn.classList.remove('show');
  }
});

backToTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// ========================================
// EFECTO PARALLAX EN SEPARADOR (DESHABILITADO)
// ========================================
// El efecto parallax ha sido deshabilitado para mantener las imágenes fijas
// Si deseas habilitarlo nuevamente, descomenta el código siguiente y 
// elimina la clase .separador-img-fixed del HTML

/*
const separadorImg = document.querySelectorAll('.separador-img:not(.separador-img-fixed)');
if (separadorImg.length > 0) {
  window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    separadorImg.forEach(img => {
      const separador = img.closest('.separador');
      if (separador) {
        const separadorTop = separador.offsetTop;
        const separadorHeight = separador.offsetHeight;
        
        if (scrolled > separadorTop - window.innerHeight && scrolled < separadorTop + separadorHeight) {
          const parallaxValue = (scrolled - separadorTop + window.innerHeight) * 0.3;
          img.style.transform = `translateY(${parallaxValue}px)`;
        }
      }
    });
  });
}
*/

// ========================================
// CONTADOR ANIMADO (si hay estadísticas)
// ========================================
function animateCounter(element, target, duration = 2000) {
  let start = 0;
  const increment = target / (duration / 16);
  
  const timer = setInterval(() => {
    start += increment;
    if (start >= target) {
      element.textContent = target;
      clearInterval(timer);
    } else {
      element.textContent = Math.floor(start);
    }
  }, 16);
}

// Activar contadores cuando sean visibles
if ('IntersectionObserver' in window) {
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
        const target = parseInt(entry.target.dataset.target);
        animateCounter(entry.target, target);
        entry.target.classList.add('counted');
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.counter').forEach(counter => {
    counterObserver.observe(counter);
  });
}

