<?php
// Datos de contacto - establecidos de manera estática

// Verificación del envío del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = htmlspecialchars($_POST['correo']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  // Envío de correo electrónico
  $para = 'ing.comercialcostos@concremack.com'; // Reemplaza con tus correos electrónicos de destino
  $asunto = "Nuevo mensaje de contacto de: $nombre";
  $cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

  $headers = "From: $correo\r\n";
  $headers .= "Reply-To: $correo\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

  if (mail($para, $asunto, $cuerpo, $headers)) {
    $mensaje_exito = "Tu mensaje ha sido enviado con éxito.";
  } else {
    $mensaje_error = "Hubo un problema al enviar tu mensaje. Por favor, intenta de nuevo.";
  }
}
?>
<section class="my-lg-9 my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-md-12">
        <div class="row g-lg-10 gy-5 align-items-center">
          <div class="col-md-6">
            <div class="card bg-light">
              <div class="card-body p-5">
                <h3 class="mb-4">
                  Contacta Con Nosotros
                </h3>
                <?php if (!empty($mensaje_exito)) echo '<p style="color: green;">' . htmlspecialchars($mensaje_exito) . '</p>'; ?>
                <?php if (!empty($mensaje_error)) echo '<p style="color: red;">' . htmlspecialchars($mensaje_error) . '</p>'; ?>
                <form class="row g-4 needs-validation" action="session7.php" method="POST"
                  enctype="multipart/form-data" novalidate>
                  <div class="mb-3">
                    <label for="nombre"
                      class="form-label">
                      Nombre:
                    </label>
                    <input type="text" name="nombre" key="nombre"
                      class="form-control"
                      id="nombre"
                      placeholder="Nombre."
                      required="" />
                    <div class="invalid-feedback">
                      Por favor, introduzca su nombre.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="correo"
                      class="form-label">
                      Correo Electrónico:
                    </label>
                    <input type="email" name="correo" key="correo"
                      class="form-control"
                      id="correo"
                      placeholder="Correo Electrónico."
                      required="" />
                    <div class="invalid-feedback">
                      Por favor, introduzca su correo electrónico.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="mensaje" class="form-label">
                      Mensaje:
                    </label>
                    <textarea class="form-control" name="mensaje" key="mensaje" id="mensaje"
                      placeholder="Mensaje."
                      rows="10" cols="10" required></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese un mensaje.
                    </div>
                  </div>
                  <button class="btn btn-danger" type="submit">
                    Enviar Mensaje
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-7 text-center text-lg-start">
              <div class="mb-3">
                <image src="assets/images/avatar/avatar-1.jpg"
                  alt="CONCREMACK" title="CONCREMACK"
                  class="avatar avatar-xl rounded-circle" />
              </div>
              <h3 class="mb-0">
                TU NOMBRE
              </h3>
              <small>
                CARGO
              </small>
            </div>
            <div class="d-flex mb-4">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16"
                  fill="currentColor"
                  class="bi bi-geo-alt-fill"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>
              </div>
              <div class="ms-2">
                <h5 class="mb-0">
                  DIRECCI&Oacute;N&#58;
                </h5>
                <small>
                  CALLE 104 N&#176; 14A &#45; 45 &#47; OFICINA &#45; 402&#46; <br /> CENTRO EMPRESARIAL &#45; 104 PH&#46;
                  <br />
                  BOGOT&#193; D&#46;C&#46; &#45; &#40;COLOMBIA&#41;
                </small>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16"
                  fill="currentColor"
                  class="bi bi-telephone"
                  viewBox="0 0 16 16">
                  <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
              </div>
              <div class="ms-2">
                <h5 class="mb-0">
                  TEL&Eacute;FONO&#58;
                </h5>
                <small>
                  Oficina Principal&#58;
                  &#40;&#43;320&#41; 40&#8209;78 <br />
                  Contabilidad&#58;
                  &#40;&#43;57&#41; 318&#8209;358&#8209;50&#8209;13 <br />
                  Cartera&#58;
                  &#40;&#43;57&#41; 318&#8209;659&#8209;24&#8209;22 <br />
                  Recursos Humanos&#58;
                  &#40;&#43;57&#41; 315&#8209;600&#8209;84&#8209;39 <br />
                  Ventas Nacional&#58;
                  &#40;&#43;57&#41; 316&#8209;028&#8209;39&#8209;21
                </small>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16"
                  fill="currentColor"
                  class="bi bi-envelope-check"
                  viewBox="0 0 16 16">
                  <path
                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                  <path
                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                </svg>
              </div>
              <div class="ms-2">
                <h5 class="mb-0">
                  CORREO&#58;
                </h5>
                <small>
                  <a href="mailto:ing.comercialcostos@concremack.com" target="_blank" rel="noopener noreferrer" class="text-reset">
                    ing.comercialcostos@concremack.com
                  </a>
                </small>
              </div>
            </div>
            <div>
              <a href="#" rel="noopener noreferrer" class="text-reset btn btn-facebook btn-icon">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="#" rel="noopener noreferrer" class="text-reset btn btn-instagram btn-icon">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" rel="noopener noreferrer" class="text-reset btn btn-youtube btn-icon">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="#" rel="noopener noreferrer" class="text-reset btn btn-linkedin btn-icon">
                <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="#" rel="noopener noreferrer" class="text-reset btn btn-whatsapp btn-icon">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mb-xl-9">
  <div class="container">
    <div class="row row border-top border-bottom">
      <div
        class="col-md-4 border-end-md border-bottom border-bottom-md-0">
        <div class="text-center p-5 px-xl-8 px-md-0">
          <div
            class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor"
              class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path
                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
          </div>
          <h5>
            DIRECCI&Oacute;N&#58;
          </h5>
          <p class="mb-0">
            CALLE 104 N&#176; 14A &#45; 45 &#47; OFICINA &#45; 402&#46; <br /> CENTRO EMPRESARIAL &#45; 104 PH&#46;
            <br />
            BOGOT&#193; D&#46;C&#46; &#45; &#40;COLOMBIA&#41;
          </p>
        </div>
      </div>
      <div
        class="col-md-4 border-end-md border-bottom border-bottom-md-0">
        <div class="text-center p-5 px-xl-8 px-md-0">
          <div
            class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor"
              class="bi bi-window-dock" viewBox="0 0 16 16">
              <path
                d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
              <path
                d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z" />
            </svg>
          </div>
          <h5>
            HORARIO&#58;
          </h5>
          <p class="mb-0">
            LUNES A VIERNES&#58; <br /> 08&#58;00 A&#46;M&#46; A 06&#58;00 P&#46;M&#46; <br />
            DOMINGO&#58; <br /> CERRADO
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-5 px-xl-8 px-md-0">
          <div
            class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor"
              class="bi bi-ticket-detailed-fill"
              viewBox="0 0 16 16">
              <path
                d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5Zm0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5ZM4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1Z" />
            </svg>
          </div>
          <h5>
            TEL&Eacute;FONO&#58;
          </h5>
          <p class="mb-0">
            Oficina Principal&#58; <br />
            &#40;&#43;320&#41; 40&#8209;78 <br />
            Contabilidad&#58; <br />
            &#40;&#43;57&#41; 318&#8209;358&#8209;50&#8209;13 <br />
            Cartera&#58; <br />
            &#40;&#43;57&#41; 318&#8209;659&#8209;24&#8209;22 <br />
            Recursos Humanos&#58; <br />
            &#40;&#43;57&#41; 315&#8209;600&#8209;84&#8209;39 <br />
            Ventas Nacional&#58; <br />
            &#40;&#43;57&#41; 316&#8209;028&#8209;39&#8209;21
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container py-lg-8 py-5" data-cue="fadeIn"></section>
<section class="container py-lg-8 py-5" data-cue="fadeIn">
  <section class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-12 mt-n10">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d838.9745431927269!2d-74.0466453823206!3d4.688231277910676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9abdcb363d99%3A0x1d89a7c0013f2704!2zQ2wuIDEwNCAjMTRBLTQ1LCBVc2FxdcOpbiwgQm9nb3TDoQ!5e1!3m2!1ses!2sco!4v1728997362877!5m2!1ses!2sco" width="600" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</section>
<section class="container py-lg-8 py-5" data-cue="fadeIn"></section>
