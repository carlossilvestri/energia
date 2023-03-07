<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<?php
		include 'inc/layout/head.php';
	?>
	<body>	
		
	<?php
		include 'inc/layout/header.php';
	?>
		<section class="c-s hero-section">
			<div class="container">
				<div class="hero-content">
					<div class="row dm">
						<div class="col-12 dp text-center">
							<span class="hero-subtitle">Compañía Energética</span>
							<h1 class="hero-title">Energía España Renovable</h1>
							<p>Tenemos las mejores tarifas de planes de energía y gas con los precios mas bajos del mercado. Tenemos gran cantidad de energía renovable para hacerle frente al cambio climático. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c-s section-two">
			<div class="container">
				<div class="hero-cta-box">
					<div class="hero-cta-box-content">
						<div class="hero-contact-wrapper">
							<div class="hero-contact-content">
								<span class="hero-contact-title">¿En qué podemos ayudarte?</span>
								<form id="contact-form" action="" method="POST">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<div class="contact-input-wrapper">
													<span class="material-icons-two-tone input-icon">account_circle</span>
													<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
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
										<button type="submit" class="button button-w large">Contáctame</button>
									</div>
									<div id="mail-status"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="section-content section-two-content">
					<div class="row dm">
						<div class="col-lg-6 dp">
							<h2 class="text-right">¡Impulsamos la transición a <span class="primary-accent">sistemas de energía fiables</span> y asequibles con nuestras tecnologías innovadoras!</h2>
							<ul class="list-big list-pr">
								<li><span class="material-icons-two-tone list-icon">done</span>Tendrás luz 100% verde</li>
								<li><span class="material-icons-two-tone list-icon">done</span>Conoce tu consumo</li>
								<li><span class="material-icons-two-tone list-icon">done</span>Ahorra en tus horas de consumo</li>
								<li><span class="material-icons-two-tone list-icon">done</span>Gestiona tu energía digitalmente</li>
							</ul>
							<div class="button-wrapper text-right">
								<a class="button contact-modal-trigger">Quiero Información</a>
							</div>
						</div>
						<div class="col-lg-6 dp">
							<div class="section-two-images-wrapper">
								<div class="s2-img-1-w">
									<img src="img/w-panels.png" class="w-panels img-fluid" alt="" />
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>
		<section class="c-s section-plans bg-w-secondary">
			<div class="container">
				<div class="section-content section-plans-content">
					<div class="section-title-wrapper text-center">
						<h2 class="section-title">Toda nuestra energía, para construir un <span class="primary-accent">futuro sostenible</span></h2>
						<p>Integramos la sostenibilidad en todo lo que hacemos para crear valor para la sociedad, contribuir en la lucha contra el cambio climático e impulsar la inclusión, la diversidad, la ética y la transparencia.</p>
					</div>
					<div class="plans-wrapper">
						<div class="row dm">
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">	
										<div class="plans-item-header">
                                    	<h4 class="plans-item-title">Plan Estable</h4>
											<p class="plans-item-subtitle">El plan perfecto para pequeñas y medianas viviendas que consuman poca energía.</p>
										</div>	
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">70€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Un único precio a todas horas, todos los días del año para poder estar tranquilo.</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">QUIERO SABER MÁS</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Tendrás luz 100% verde</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Gestiona tu energía digitalmente</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Ahorra en tus horas de mayor consumo</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Conoce tu consumo</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">	
										<div class="plans-item-header">
											<h4 class="plans-item-title">Plan 8 Horas</h4>
											<p class="plans-item-subtitle">Perfecto para aprovechar la energía en un horario cerrado, por ejemplo de 14:00 a las 22:00 de la noche.</p>
										</div>
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">120€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Elige las 8 horas del día en las que quieres ahorrar más y cámbialas en tiempo real.</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">QUIERO SABER MÁS</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Tendrás luz 100% verde</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Gestiona tu energía digitalmente</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Ahorra en tus horas de consumo</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Conoce tu consumo</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">		
										<div class="plans-item-header">
											<h4 class="plans-item-title">Plan fijo mensual</h4>
											<p class="plans-item-subtitle">El plan perfecto para consumos altos de energía y empresas</p>
										</div>
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">200€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Te ofrece una cuota personalizada calculada en base a tus hábitos de consumo.</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">QUIERO SABER MÁS</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Cuota Personalizada</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Tranquilidad</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Tendrás Luz 100% verde</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Conoce tu consumo</li>
											</ul>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="img/bg-d.png" class="bg-o" alt="Image">
		</section>
		<section id="count-me-in-wrapper" class="c-s section-last-cta">
			<div class="container">
				<div class="section-content section-last-cta-content">
					<div class="row dm">
						<div class="col-lg-6 dp">
							<div class="hero-contact-wrapper">
								<div class="hero-contact-content section-contact-content">
									<span class="hero-contact-title">¿En qué podemos ayudarte?</span>
									<form id="contact-form-2" action="" method="POST">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<div class="contact-input-wrapper">
														<span class="material-icons-two-tone input-icon">account_circle</span>
														<input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
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
											<button type="submit" class="button large">Contáctame</button>
										</div>
										<div id="mail-status"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 dp">
							<div class="last-cta-content-left">
								<div class="cta-i-w">
									<i class="flaticon-040-green-energy"></i>
								</div>
								<h3>Hacia un futuro integrador, limpio y sostenible</h3>
								<div class="row">
									<div class="col-12">
										<div class="stats-col-content">
											<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="2.4" data-decimals="2" data-speed="2000" data-refresh-interval="10">2.4</span></span>
											<span class="stats-col-text">VALOR DE MERCADO</span>
										</div>
									</div>
									<div class="col-12">
										<div class="stats-col-content">
											<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="4.8" data-decimals="2" data-speed="2500" data-refresh-interval="10">4.8</span>%</span>
											<span class="stats-col-text">CRECIMIENTO DE LA INDUSTRIA</span>
										</div>
									</div>
									<div class="col-12">
										<div class="stats-col-content">
											<span class="stats-col-val"><span class="count-me-in" data-from="0" data-to="36" data-speed="1000" data-refresh-interval="1">36</span></span>
											<span class="stats-col-text">AÑOS DE EXPERIENCIA</span>
										</div>
									</div>
								</div>
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
	</body>
<?php
	include 'inc/layout/scripts.php';
?>
</html>