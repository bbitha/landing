<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>NebulaSoft | Soluciones Tecnológicas Empresariales</title>
  <meta name="description" content="Desarrollo de software personalizado, soluciones cloud y consultoría tecnológica para transformar digitalmente tu negocio">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#fb1e23">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://via.placeholder.com/32/fb1e23/FFFFFF?text=NS">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- PWA -->
  <link rel="manifest" href="/manifest.json">
  @laravelPWA

  <style>
    :root {
      --primary-color: #fb1e23;
      --primary-light: #fc4734;
      --primary-dark: #fc0b19;
      --secondary-color: #fc9419;
      --accent-color: #fc2b39;
      --light-color: #f8f9fa;
      --dark-color: #1a1a1a;
      --text-color: #333;
      --text-light: #777;
    }

    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.7;
      color: var(--text-color);
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background-color: white !important;
      padding: 15px 0;
      box-shadow: 0 2px 30px rgba(251, 30, 35, 0.1);
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      padding: 10px 0;
      box-shadow: 0 5px 20px rgba(251, 30, 35, 0.15);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      color: var(--primary-color) !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand i {
      font-size: 1.5em;
      margin-right: 10px;
    }

    .nav-link {
      font-weight: 500;
      margin: 0 15px;
      color: var(--text-color) !important;
      position: relative;
      transition: all 0.3s ease;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary-color);
      transition: width 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary-color) !important;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
      color: white;
      padding: 120px 0 100px;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: -50px;
      right: -50px;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 25px;
      line-height: 1.2;
    }

    .hero-subtitle {
      font-size: 1.25rem;
      margin-bottom: 35px;
      opacity: 0.9;
    }

    .btn-hero {
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 8px;
      font-size: 1.1rem;
      margin-right: 15px;
      margin-bottom: 15px;
      transition: all 0.3s ease;
    }

    .btn-hero-primary {
      background-color: white;
      color: var(--primary-color);
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .btn-hero-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .btn-hero-outline {
      border: 2px solid white;
      color: white;
      background: transparent;
    }

    .btn-hero-outline:hover {
      background: white;
      color: var(--primary-color);
      transform: translateY(-3px);
    }

    /* Section Titles */
    .section {
      padding: 80px 0;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: "";
      position: absolute;
      bottom: -15px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--secondary-color);
      border-radius: 2px;
    }

    .section-subtitle {
      font-size: 1.1rem;
      color: var(--text-light);
      margin-bottom: 50px;
      max-width: 700px;
    }

    .text-center .section-title::after {
      left: 50%;
      transform: translateX(-50%);
    }

    /* Services */
    .service-card {
      border: none;
      border-radius: 12px;
      transition: all 0.4s ease;
      height: 100%;
      background: white;
      box-shadow: 0 5px 20px rgba(251, 30, 35, 0.05);
      padding: 30px;
      margin-bottom: 30px;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(251, 30, 35, 0.1);
    }

    .service-icon {
      font-size: 3rem;
      color: var(--primary-color);
      margin-bottom: 20px;
    }

    .service-title {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .service-description {
      color: var(--text-light);
    }

    /* Features */
    .feature-section {
      background-color: #f9f9f9;
    }

    .feature-box {
      background: white;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 5px 20px rgba(251, 30, 35, 0.05);
      height: 100%;
      transition: all 0.4s ease;
    }

    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(251, 30, 35, 0.1);
    }

    .feature-icon {
      font-size: 2.5rem;
      color: var(--secondary-color);
      margin-bottom: 20px;
    }

    .feature-title {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    /* Contact Form */
    .contact-section {
      background: white;
      border-radius: 12px;
      padding: 50px;
      box-shadow: 0 10px 40px rgba(251, 30, 35, 0.08);
    }

    .form-control {
      padding: 15px;
      border-radius: 8px;
      border: 1px solid #eee;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(251, 30, 35, 0.25);
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      padding: 15px 30px;
      font-weight: 600;
      font-size: 1.1rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 20px rgba(251, 30, 35, 0.3);
    }

    /* Footer */
    .footer {
      background: linear-gradient(135deg, var(--dark-color), #2a2a2a);
      color: white;
      padding: 80px 0 30px;
      position: relative;
    }

    .footer::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(251,30,35,0.15) 0%, rgba(0,0,0,0) 70%);
    }

    .footer-logo {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 20px;
      display: inline-block;
      color: white;
    }

    .footer-logo i {
      color: var(--secondary-color);
    }

    .footer-about {
      margin-bottom: 30px;
    }

    .footer-badge {
      background: var(--primary-color);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      display: inline-block;
      margin-bottom: 15px;
    }

    .footer-links h5 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 10px;
    }

    .footer-links h5::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 2px;
      background: var(--secondary-color);
    }

    .footer-links ul {
      list-style: none;
      padding-left: 0;
    }

    .footer-links li {
      margin-bottom: 12px;
    }

    .footer-links a {
      color: #bbb;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: white;
      padding-left: 5px;
    }

    .social-icons {
      margin-top: 20px;
    }

    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255,255,255,0.1);
      color: white;
      border-radius: 50%;
      margin-right: 10px;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      background: var(--primary-color);
      transform: translateY(-3px);
    }

    .contact-info li {
      margin-bottom: 15px;
      display: flex;
      align-items: flex-start;
    }

    .contact-info i {
      margin-right: 10px;
      color: var(--secondary-color);
      margin-top: 3px;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 30px;
      margin-top: 50px;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .hero-title {
        font-size: 2.8rem;
      }
      
      .section {
        padding: 60px 0;
      }
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.3rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .contact-section {
        padding: 30px;
      }
    }

    @media (max-width: 576px) {
      .hero-section {
        padding: 100px 0 80px;
      }
      
      .hero-title {
        font-size: 2rem;
      }
      
      .btn-hero {
        display: block;
        width: 100%;
        margin-right: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-rocket"></i>NebulaSoft
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-content">
            <h1 class="hero-title">Transformación Digital para tu Empresa</h1>
            <p class="hero-subtitle">Soluciones tecnológicas innovadoras diseñadas para impulsar el crecimiento y eficiencia de tu negocio.</p>
            <div class="d-flex flex-wrap">
              <a href="#contacto" class="btn btn-hero btn-hero-primary">Contáctanos</a>
              <a href="#servicios" class="btn btn-hero btn-hero-outline">Nuestros Servicios</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="section-title">Nuestros Servicios</h2>
          <p class="section-subtitle">Ofrecemos soluciones tecnológicas integrales diseñadas para las necesidades específicas de tu empresa</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="service-title">Desarrollo a Medida</h3>
            <p class="service-description">Software personalizado que se adapta perfectamente a tus procesos y flujos de trabajo empresarial.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h3 class="service-title">Soporte Técnico</h3>
            <p class="service-description">Asistencia especializada 24/7 con tiempos de respuesta garantizados para mantener tu negocio funcionando.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-robot"></i>
            </div>
            <h3 class="service-title">Automatización</h3>
            <p class="service-description">Implementación de IA y RPA para optimizar procesos, reducir costos y aumentar la productividad.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h3 class="service-title">Consultoría IT</h3>
            <p class="service-description">Asesoramiento estratégico para tu transformación digital con roadmap claro y objetivos medibles.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="nosotros" class="section feature-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="section-title">Por Qué NebulaSoft</h2>
          <p class="section-subtitle">Nuestro enfoque único combina tecnología avanzada con un profundo entendimiento de los negocios</p>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h3 class="feature-title">Disponibilidad 24/7</h3>
            <p>Nuestro equipo está disponible en todo momento con soporte prioritario para clientes empresariales y tiempos de respuesta garantizados.</p>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-brain"></i>
            </div>
            <h3 class="feature-title">IA Avanzada</h3>
            <p>Sistemas inteligentes que aprenden de tus operaciones para ofrecer soluciones cada vez más precisas y personalizadas.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="feature-title">Seguridad Integral</h3>
            <p>Protegemos tus datos con protocolos de seguridad de última generación y cumplimiento normativo.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="feature-title">Enfoque en Resultados</h3>
            <p>No solo entregamos tecnología, nos aseguramos de que genere valor medible para tu negocio.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="contact-section">
            <div class="row align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title">Contáctanos</h2>
                <p class="mb-4">Estamos listos para ayudarte a llevar tu negocio al siguiente nivel con tecnología innovadora.</p>
                
                <div class="contact-info">
                  <div class="d-flex mb-3">
                    <i class="fas fa-map-marker-alt mt-1 me-3" style="color: var(--primary-color);"></i>
                    <div>
                      <h5 class="mb-1">Oficina Principal</h5>
                      <p class="mb-0">Av. Tecnológica 1234, Santa Cruz, Bolivia</p>
                    </div>
                  </div>
                  
                  <div class="d-flex mb-3">
                    <i class="fas fa-phone mt-1 me-3" style="color: var(--primary-color);"></i>
                    <div>
                      <h5 class="mb-1">Teléfono</h5>
                      <p class="mb-0">+591 700 123 456</p>
                    </div>
                  </div>
                  
                  <div class="d-flex">
                    <i class="fas fa-envelope mt-1 me-3" style="color: var(--primary-color);"></i>
                    <div>
                      <h5 class="mb-1">Correo Electrónico</h5>
                      <p class="mb-0">info@nebulasoft.com</p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                @if(session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" required>
                  </div>
                  
                  <div class="mb-4">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos sobre tu proyecto" required></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-paper-plane me-2"></i> Enviar Mensaje
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="footer-about">
            <span class="footer-badge">Innovación Tecnológica</span>
            <a href="#" class="footer-logo text-white text-decoration-none">
              <i class="fas fa-rocket me-2"></i>NebulaSoft
            </a>
            <p class="mb-4">Líderes en desarrollo de software empresarial con más de 10 años de experiencia transformando negocios en Bolivia y la región.</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
          <div class="footer-links">
            <h5>Servicios</h5>
            <ul>
              <li><a href="#">Desarrollo Web</a></li>
              <li><a href="#">Apps Móviles</a></li>
              <li><a href="#">Inteligencia Artificial</a></li>
              <li><a href="#">Cloud Solutions</a></li>
              <li><a href="#">Consultoría IT</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
          <div class="footer-links">
            <h5>Empresa</h5>
            <ul>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Equipo</a></li>
              <li><a href="#">Casos de Éxito</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Trabaja con Nosotros</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4">
          <div class="footer-links">
            <h5>Contacto</h5>
            <ul class="contact-info">
              <li><i class="fas fa-map-marker-alt"></i> Av. Tecnológica 1234, Santa Cruz, Bolivia</li>
              <li><i class="fas fa-phone"></i> +591 700 123 456</li>
              <li><i class="fas fa-envelope"></i> info@nebulasoft.com</li>
              <li><i class="fas fa-clock"></i> Lunes-Viernes: 8:00 - 18:00</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3 mb-md-0">
            <p class="mb-0">© 2025 <strong>NebulaSoft</strong>. Todos los derechos reservados.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <a href="#" class="text-white me-3" data-bs-toggle="modal" data-bs-target="#terminosModal">Términos y Condiciones</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal de Términos y Condiciones -->
  <div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color: var(--primary-color);">
          <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <p><strong>1. Aceptación de términos:</strong> Al utilizar nuestros servicios, el usuario acepta estos términos en su totalidad.</p>
          <p><strong>2. Uso permitido:</strong> La plataforma está destinada a empresas que requieran soluciones tecnológicas, queda prohibido su uso para fines ilegales o fraudulentos.</p>
          <p><strong>3. Propiedad intelectual:</strong> Todo el contenido, código y diseño visual pertenece a NebulaSoft.</p>
          <p><strong>4. Protección de datos:</strong> Cumplimos con la Ley N° 164 y otras normativas vigentes en Bolivia sobre protección de datos personales.</p>
          <p><strong>5. Cambios en los términos:</strong> Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios se publicarán en esta página.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  @include('partials.chatbot')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('scrolled');
      } else {
        document.querySelector('.navbar').classList.remove('scrolled');
      }
    });
  </script>
</body>

</html>