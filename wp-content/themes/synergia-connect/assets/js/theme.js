(function () {
  const menuToggle = document.querySelector('.menu-toggle');
  const contextualMenu = document.querySelector('.contextual-menu');
  const closeMenuButton = document.querySelector('.contextual-menu .close-menu');
  const menuLinks = document.querySelectorAll('.contextual-menu nav a');
  const counters = document.querySelectorAll('[data-count-target]');

  const toggleMenu = () => {
    if (!contextualMenu) {
      return;
    }
    contextualMenu.classList.toggle('open');
    document.body.classList.toggle('menu-open', contextualMenu.classList.contains('open'));
  };

  if (menuToggle && contextualMenu) {
    menuToggle.addEventListener('click', toggleMenu);
  }

  if (closeMenuButton) {
    closeMenuButton.addEventListener('click', toggleMenu);
  }

  if (menuLinks && menuLinks.length) {
    menuLinks.forEach((link) => link.addEventListener('click', () => {
      contextualMenu.classList.remove('open');
      document.body.classList.remove('menu-open');
    }));
  }

  const formatNumber = (value, suffix) => {
    return `${value.toLocaleString('fr-FR')} ${suffix}`.trim();
  };

  const animateCounter = (entry) => {
    const el = entry.target;
    const target = parseFloat(el.dataset.countTarget);
    const duration = parseInt(el.dataset.countDuration || '1800', 10);
    const suffix = el.dataset.countSuffix || '';
    const startTime = performance.now();

    const step = (now) => {
      const progress = Math.min((now - startTime) / duration, 1);
      const current = Math.floor(progress * target);
      if (suffix.trim().toLowerCase() === 'mmad') {
        el.textContent = formatNumber(current, 'MMAD');
      } else {
        el.textContent = formatNumber(current, suffix);
      }
      if (progress < 1) {
        requestAnimationFrame(step);
      }
    };

    requestAnimationFrame(step);
  };

  if (counters.length) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach((counter) => observer.observe(counter));
  }
})();
