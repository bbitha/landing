<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Tecnología CLARVID | Soluciones Digitales para Empresas</title>
  <meta name="description"
    content="Desarrollo de software personalizado, asistencia técnica y consultoría en tecnología para impulsar tu negocio">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#004AAD">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://via.placeholder.com/32/004AAD/FFFFFF?text=CV">

  <!-- PWA -->
  <link rel="manifest" href="/manifest.json">
  @laravelPWA

  <!-- Fonts & CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    :root {
      --primary-color: #004AAD;
      --secondary-color: #003580;
      --accent-color: #00A6FB;
      --light-color: #f8f9fa;
      --dark-color: #212529;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      line-height: 1.6;
      color: var(--dark-color);
    }

    .navbar {
      background-color: var(--primary-color) !important;
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
    }

    .hero-section {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 40%;
      background: url('https://via.placeholder.com/600x400/004AAD/FFFFFF?text=CLARVID') no-repeat center right;
      background-size: cover;
      opacity: 0.2;
    }

    .section-title {
      position: relative;
      margin-bottom: 2.5rem;
      font-weight: 700;
    }

    .section-title::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--accent-color);
    }

    .service-card {
      border: none;
      border-radius: 8px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .service-icon {
      font-size: 2.5rem;
      color: var(--accent-color);
      margin-bottom: 1rem;
    }

    .contact-section {
      background-color: var(--light-color);
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      padding: 10px 25px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
      transform: translateY(-2px);
    }

    footer {
      background-color: var(--dark-color);
      padding: 30px 0;
      margin-top: 50px;
    }

    .feature-box {
      padding: 30px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      height: 100%;
    }
  </style>
</head>
<!-- Modal de Términos y Condiciones -->
<div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><strong>1. Aceptación de términos:</strong> Al utilizar nuestros servicios, el usuario acepta estos términos en su totalidad.</p>
        <p><strong>2. Uso permitido:</strong> La plataforma está destinada a empresas que requieran soluciones tecnológicas, queda prohibido su uso para fines ilegales o fraudulentos.</p>
        <p><strong>3. Propiedad intelectual:</strong> Todo el contenido, código y diseño visual pertenece a Tecnología CLARVID.</p>
        <p><strong>4. Protección de datos:</strong> Cumplimos con la Ley N° 164 y otras normativas vigentes en Bolivia sobre protección de datos personales.</p>
        <p><strong>5. Cambios en los términos:</strong> Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios se publicarán en esta página.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-laptop-code me-2"></i>CLARVID
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
            <a class="nav-link" href="#contacto">Contáctenos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-4">Impulsando tu negocio con tecnología avanzada</h1>
          <p class="lead mb-4">Soluciones de software personalizadas diseñadas para optimizar tus operaciones y
            potenciar tu crecimiento.</p>
          <a href="#contacto" class="btn btn-light btn-lg px-4 me-2">Contáctanos</a>
          <a href="#servicios" class="btn btn-outline-light btn-lg px-4">Nuestros servicios</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-5 my-5">
    <div class="container">
      <h2 class="text-center section-title">Nuestros Servicios</h2>
      <p class="text-center mb-5">Ofrecemos soluciones tecnológicas integrales para transformar tu negocio</p>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card service-card p-4 text-center">
            <div class="service-icon">
              <i class="fas fa-code"></i>
            </div>
            <h4>Desarrollo a Medida</h4>
            <p class="text-muted">Software personalizado adaptado a tus procesos y necesidades específicas.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card service-card p-4 text-center">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h4>Soporte Técnico</h4>
            <p class="text-muted">Asistencia especializada disponible 24/7 para resolver tus problemas técnicos.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card service-card p-4 text-center">
            <div class="service-icon">
              <i class="fas fa-robot"></i>
            </div>
            <h4>Automatización</h4>
            <p class="text-muted">Implementación de IA y RPA para optimizar tus procesos operativos.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card service-card p-4 text-center">
            <div class="service-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h4>Consultoría</h4>
            <p class="text-muted">Asesoramiento estratégico para la transformación digital de tu empresa.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Asistencia -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <h2 class="text-center section-title">Nuestro Enfoque de Asistencia</h2>
        <p>En CLARVID entendemos que cada minuto cuenta. Por eso hemos desarrollado un sistema de soporte multicanal que
          combina:</p>

        <div class="feature-box mb-3">
          <h4><i class="fas fa-clock text-primary me-2"></i> Disponibilidad 24/7</h4>
          <p>Nuestro equipo está disponible en todo momento para atender tus requerimientos.</p>
        </div>

        <div class="feature-box">
          <h4><i class="fas fa-brain text-primary me-2"></i> IA Avanzada</h4>
          <p>Sistemas automatizados con inteligencia artificial para respuestas rápidas y precisas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto" class="py-5 my-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-section">
            <h2 class="text-center section-title">Contáctenos</h2>
            <p class="text-center mb-4">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.
            </p>

            @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

            <form method="POST" action="{{ route('contact.send') }}">
              @csrf
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control p-3" id="nombre" name="nombre" placeholder="Ingresa tu nombre"
                  required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control p-3" id="email" name="email" placeholder="Ingresa tu email"
                  required>
              </div>

              <div class="mb-4">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control p-3" id="mensaje" name="mensaje" rows="4"
                  placeholder="Cuéntanos sobre tu proyecto" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary w-100 py-3">
                <i class="fas fa-paper-plane me-2"></i> Enviar Mensaje
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
<footer class="mt-5 text-white" style="background-color: #004AAD;">
  <div class="container py-4">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 mb-3 mb-md-0">
        <h5 class="mb-2"><i class="fas fa-laptop-code me-2"></i> Tecnología CLARVID</h5>
        <p class="mb-0">Soluciones digitales para empresas innovadoras.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <p class="mb-1">© 2025 Tecnología CLARVID. Todos los derechos reservados.</p>
        <a href="#" class="text-white text-decoration-underline" data-bs-toggle="modal" data-bs-target="#terminosModal">Términos y Condiciones</a>
      </div>
    </div>
  </div>
</footer>

  @include('partials.chatbot')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>