<!DOCTYPE html>
<html lang="en">
<head>
<? include 'components/head.php'; ?>
</head>
<body>
	<div class="container" role="main">

		<? include 'components/header-logged-in-no-patient.php'; ?>

		<div class="content">
			<h1 class="badge">Episodes and events</h1>

			<div class="box content">

				<div class="row">
					<aside class="large-2 column sidebar episodes-and-events">

						<h2 class="reader">Specialties</h2>

						<button class="secondary small add-episode" type="button">
							<span class="icon-button-small-plus-sign"></span>
							Add episode
						</button>

						<!-- Specialty Panel -->
						<div class="panel specialty">
							<h3>Ophthalmology</h3>
							<div class="panel episode">
								<div class="episode-date">12 Dec 2011</div>
								<h4>
									<a href="#">
										Adnexal
									</a>
								</h4>
								<button class="button secondary small add-event" type="button">
									<span class="icon-button-small-plus-sign"></span>
									Add event
								</button>
								<ol class="events">
									<li>
										<a href="#">
											<span class="event-type alert">
												<img src="/img/new/operationbooking/small.png" alt="op" width="19" height="19" />
											</span>
											<span class="event-date">
												1 Jan 2000
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="event-type alert">
												<img src="/img/new/operationbooking/small.png" alt="op" width="19" height="19" />
											</span>
											<span class="event-date">
												1 Jan 2000
											</span>
										</a>
									</li>
								</ol>
							</div>
						</div>

					</aside>
					<div class="large-10 column">
						Right column
					</div>
				</div>

				<br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
		<? include 'components/footer.php'; ?>
	</div>
</body>
</html>