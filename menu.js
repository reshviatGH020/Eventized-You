  const toggleBtn = document.getElementById('menuToggle');
  const navLinks = document.querySelector('.nav-menu');

  toggleBtn.addEventListener('click', () => {
    navLinks.classList.toggle('open');
  }
);
