
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<?php
		include 'inc/layout/head.php';
	?>
	<body class="subpage">	
		
	<?php
		include 'inc/layout/header.php';
	?>
		<section class="c-s section-four section-subpage-first section-main-contact-method">
			<div class="container">
				<div class="section-content section-four-content">
					<div class="hero-contact-wrapper question-contact-wrapper">
						<div class="hero-contact-content section-contact-content">
							<span class="hero-contact-title" style="font-family: 'Lato', sans-serif;">¿Qué necesita?</span>?</span>
							<div class="contact-cta-buttons-wrapper" style="font-family: 'Lato', sans-serif;">
								<a class="button content-button call-cta-button call-cta-button-f"><span>Contacto Clientes</span></a>
								<a class="button content-button call-cta-button "><span>Gestionar Incidencia</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c-s section-call-cta bg-w-secondary">
			<div class="container" style="margin-top:-100px;">
				<div class="section-content section-call-cta-content">
					<div class="section-title-wrapper text-center">
						<h2 class="section-title"style="color:black;font-size:1.7em;font-family:'Lato', sans-serif;font-weight:bold;" >Teléfono disponible 24h</h2>
											<div class="modal-end-cta-button-w">
						<a class="button content-button call-cta-big-button" onclick="saveOption(this, 'conversion');" style="font-family: 'Lato', sans-serif;font-weight:bold;margin-top:-20px;" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt" aria-hidden="true" style="margin-right: 5px;"></i><span> <?php echo $phone ?></span></a>
						<p class="text-legal"><?php echo $footerInformation ?></p>
					</div>
					</div>
					<p class="text-center call-cta-text" style="font-weight:300">¿Necesita ayuda? Le ofrecemos un teléfono de información disponible las 24 horas. Puede contactarnos en cualquier momento para gestionar su facturación o informar de una incidencia en el suministro.</p>

				</div>
			</div>
		</section>
		<section class="c-s section-two">
			<div class="container">
				<div class="section-content section-two-content">
					<div class="row dm">
						<div class="col-lg-6 dp">
							<div class="section-two-images-wrapper">
								<div class="s2-img-1-w">
									<img src="img/w-panels.png" class="w.panels img-fluid" alt="" />
								</div>
							</div>
						</div>
						<div class="col-lg-6 dp">
							<h2>Transiciona a las <span class="primary-accent">Energías renovables,</span> por un ambiente más limpio</h2>
							<p>Comienza la lucha contra el cambio climático, nosotros te ayudamos con energía limpia. En nuestro planeta hay más de 850 millones de personas que viven cada día sin acceso a la electricidad..</p>
							<ul class="list-big list-pr">
								<li><span class="material-icons-two-tone list-icon">done</span>Procedente de molinos eólicos y paneles solares</li>
								<li><span class="material-icons-two-tone list-icon">done</span>Energía sin caídas, máxima calidad</li>
							</ul>
							<div class="button-wrapper text-right">
								<a class="button contact-modal-trigger">Quiero Información</a>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>
		
<?php
	include 'inc/layout/footer.php';
?>
<div id="contact-modal-wrapper" class="contact-modal-wrapper mfp-hide  animate__animated">
	<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
	<div class="contact-modal-content">
		<div class="contact-modal-form-wrapper">
			<h2 class="contact-title text-center">¿En qué podemos ayudarte?</h2>
			<form id="contact-modal-form" action="includes/contact/sendcontact.php" method="POST">
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<div class="contact-input-wrapper">
								<span class="material-icons-two-tone input-icon">account_circle</span>
								<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="contact-input-wrapper">
								<span class="material-icons-two-tone input-icon">phone</span>
								<input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="contact-input-wrapper">
						<span class="material-icons-two-tone input-icon">email</span>
						<input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
					</div>
				</div>							
				<div class="contact-button-wrapper text-center">
					<button type="submit" class="button">Enviar información</button>
				</div>
				<div id="mail-status"></div>
			</form>
		</div>
	</div>
</div>
		<div id="question-modal-wrapper" class="question-modal-wrapper mfp-hide animate__animated animate__slideInUp">
			<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
			<div class="question-modal-content">
				<div class="question-modal-step-1-wrapper">
					<h2 class="contact-title text-center">Seleccione una opción</h2>
					<div class="answers-wrapper">						
						<div class="answer-button answer-button-1">ATENCIÓN PERSONALIZADA</div>
						<div class="answer-button answer-button-1">AYUDA CON MI FACTURA</div>
						<div class="answer-button answer-button-1">AVERÍAS</div>
						<div class="answer-button answer-button-1">INFORMACIÓN COMERCIAL</div>
					</div>
				</div>
				<div class="question-modal-step-2-wrapper">
					<h2 class="contact-title text-center" style="font-family:'Laton',sans-serif !important;">Teléfono de Atención</h2>
					<p style="color: var(--primary-color);font-size: 2em;font-weight:500;margin-top: -20px;margin-bottom: 10px;text-align:center;"><?php echo $phone ?></p>
					<div class="modal-end-cta-button-w">
						<a class="button content-button modal-end-cta-button" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt" aria-hidden="true" style="margin-right: 5px;"></i><span style="font-size:0.95em">Llamar ahora</span></a>
						<p class="text-legal"><?php echo $footerInformation ?></p>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php
		include 'inc/layout/scripts.php';
	?>
</html>