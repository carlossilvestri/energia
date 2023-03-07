
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<?php
		include 'inc/layout/head.php';
	?>
	<body class="subpage">	
		
	<?php
		include 'inc/layout/header.php';
	?>
		<section class="c-s section-plans bg-w-secondary section-subpage-first">		
			<div class="subp-header">
				<div class="container">
					<div class="section-title-wrapper text-center">
						<h2 class="section-title">Tarifas de <span class="primary-accent">Gas</span></h2>
						<p>¿Te gustaría ahorrar en tun tarifa de gas? Te ofrecemos los mejores planes, tendrás un pequeño precio fijo y un coste fijo por cada kWh de gas que consumas.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="section-content section-plans-content">					
					<div class="plans-wrapper plans-wrapper-sp">
						<div class="row dm">
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">	
										<div class="plans-item-header">
											<h4 class="plans-item-title">Gas Economy</h4>
											<p class="plans-item-subtitle">La mejor tarifa de gas con el mínimo fijo al mes, ideal para segundas viviendas o viviendas en climas cálidos.</p>
										</div>	
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">7€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Tarifa fija de 0.1320€ por kWh.</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">CALCULAR TU CUOTA</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Factura electrónica</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Precio mínimo mensual</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Sin permanencia</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">	
										<div class="plans-item-header">
											<h4 class="plans-item-title">Gas Medium</h4>
											<p class="plans-item-subtitle">Para consumos medios de gas, te ofrecemos un precio económico por cada Kwh.</p>
										</div>
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">10€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Tarifa fija de 0.1250€ por kWh</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">CALCULAR TU CUOTA</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Factura electrónica</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Precio medio mensual</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Permanencia de 2 meses</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 dp">
								<div class="plans-item-wrapper">
									<div class="plans-item-content">		
										<div class="plans-item-header">
											<h4 class="plans-item-title">Gas Plus</h4>
											<p class="plans-item-subtitle">Si consumes mucho gas, gracias a este plan podremos ofrecerte el mejor precio fijo de gas.</p>
										</div>
										<div class="plans-item-sep"></div>
										<div class="plans-item-inner">
											<div class="plans-item-price-w">
												<span class="pip-v">15€</span><span class="pip-d">/mes</span>
											</div>
											<p class="plans-item-desc">Tarifa fija de 0.1180€ por kWh</p>
											<div class="plan-button-wrapper text-center">
												<a class="button contact-modal-trigger">CALCULAR TU CUOTA</a>
											</div>
											<ul class="plans-item-features-list">
												<li><span class="material-icons-two-tone list-icon">done</span>Factura electrónica</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Precio más bajo fijo</li>
												<li><span class="material-icons-two-tone list-icon">done</span>Permanencia de 3 meses</li>
											</ul>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="img/bg-o.png" class="bg-o" alt="Image">
		</section>
		<section id="faq-wrapper" class="c-s section-last-cta">
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
											<button type="submit" class="button large">Quiero asegurarme</button>
										</div>
										<div id="mail-status"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 dp">
							<div class="last-cta-content-left">
								<h3 class="primary-color">¿Tienes alguna pregunta?</h3>
								<div class="faq-content">
									<div class="faq-content-inner">
										<div class="tab-content faq-content" id="faqTabContent">
											<div class="tab-pane fade active show" id="general-questions" role="tabpanel" aria-labelledby="general-questions-tab">
												<div id="accordion">							    
													<div class="card">
														<div class="card-header" id="headingZero">
															<h5 class="card-header-title">
																<button class="btn btn-link" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
																	¿Quién puede contratar un Plan de gas?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseZero" class="collapse show" aria-labelledby="headingZero" data-parent="#accordion">
															<div class="card-body">
																Nuestros planes de Gas están diseñados para usuarios particulares pero si usted tiene una empresa y requiere una cantidad alta de gas cada mes, 
																por favor contáctenos para poder ofrecerle una tarifa personalizada, en grandes cantidades de gas los precios pueden variar según la ubicación.
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-header" id="headingOne">
															<h5 class="card-header-title">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																	¿Mis precios son fijos?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
															<div class="card-body">
																Según la tarifa que haya elegido nos compromentemos a mantener los precios durante 12 meses, sin perjuicio de su actualización según la 
																variación correspondiente al IPC el 1 de enero de cada año en que el contrato esté vigente.
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-header" id="headingTwo">
															<h5 class="card-header-title">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																	¿Las tarifas de gas tienen permanencia?<i class="fas fa-plus"></i><i class="fas fa-minus"></i>
																</button>
															</h5>
														</div>
														<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
															<div class="card-body">
																Nuestro plan Gas Economy no tiene ninguna permanencia y lo puedes utilizar en todas las viviendas secundarias que quieras. Nuestro plan Medium tiene una 
																permanencia de 2 meses y el Plan Plus de 4 meses.
															</div>
														</div>
													</div>													
												</div>										
											</div>									
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