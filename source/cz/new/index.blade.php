@extends('_layouts.czech')

@section('title')
<title>DevConf.CZ 2020</title>
@endsection


@section('body')
<header class="masthead vh-100">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark">
		<span class="nav-brand"></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="#about" class="nav-link">About & Topics</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#news" class="nav-link">News</a>
				</li>
				<li class="nav-item active px-3">
					<a class="nav-link">Schedule</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#travel" class="nav-link">How to get here?</a>
				</li>
				<li class="nav-item active px-3">
					<a class="nav-link">FAQ</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="row mr-0" style="height: 85%">
		<div class="col-lg-1 border-right text-center pr-0">
			<a><img src="/assets/images/mail.svg" alt="mail" class="social-icon"></a>
			<a><img src="/assets/images/facebook.svg" alt="facebook" class="social-icon"></a>
			<a><img src="/assets/images/twitter.svg" alt="twitter" class="social-icon"></a>
			<a><img src="/assets/images/telegram.svg" alt="telegram" class="social-icon"></a>
			<a><img src="/assets/images/youtube.svg" alt="youtube" class="social-icon"></a>
			<a><img src="/assets/images/github.svg" alt="github" class="social-icon"></a>
		</div>
		<div class="col-lg-10 h-100 px-0">
                	<div style="padding: 5% 0 0 0">
                        	<img src="/assets/images/devconf-logo-cz-reverse.svg" alt="DevConf logo" class="text-logo">
                        	<img src="/assets/images/devconf-abstract.svg" alt="DevConf abstract logo" class="abstract-logo">
                        </div>
			<div class="heading-text mont-400 h5 pb-5">
				open source community conference
			</div>
			<div class="heading-text mont-700 h1 pt-5">
				January 24-26, 2020
			</div>
			<div class="heading-text mont-700 h4">
				Brno, Czech Republic
			</div>
		</div>
	</div>
</header>

<section id="about" class="mx-auto col-lg-11">
	<div class="card-group py-4 col-lg-8 mx-auto">
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Submit a proposal</a>
		</div>
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Run a booth</a>
		</div>
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Host a meetup</a>
		 </div>
	</div>

	<div class="row py-4">
		<div class="col-lg-4 mx-5" style="background: #eee">
		</div>
		<div class="col-lg-7 px-5">
			<h1 class="mont-700 underline pb-4">About DevConf</h1>
			<div class="os-400">
				<p>DevConf.CZ 2020 is the 12th annual, free, Red Hat sponsored community conference for developers, admins, DevOps engineers, testers, 
				documentation writers and other contributors to open source technologies such as Linux, Middleware, Virtualization, Storage, Cloud and 
				mobile where FLOSS communities sync, share, and hack on upstream projects together in the beautiful city of Brno, Czech Republic.</p>

				<p>There is no admission or ticket charge for DevConf.CZ events. Free registration is required though. Stay tuned to receive updates about registration.</p>

				<p>We are committed to fostering an open and welcoming environment at our conference. We are setting expectations for inclusive behavior 
				through our code of conduct and media policies, and are prepared to enforce these.</p>
			</div>
		</div>
	</div>

	<div class="row py-4">
		<div class="col-xl-5 col-lg-12 d-flex pl-xl-5">
			<div class="card mb-4" style="background: #4a4a7e">
				<div class="card-body p-5">
					<h3 class="card-title mont-700 mt-5 pt-5">Agile, DevOps &amp; CI/CD</h3>
					<p class="card-text">The Agile, DevOps &amp; CI/CD track is intended to address the practices, methods and tooling that technical audiences
					 need to deliver increased business value and responsiveness through rapid, high-quality delivery.</p>
					<p class="card-text text-right mt-5">
						<a class="border p-3 mont-700">EXPLORE NOW</a>
					</p>
				</div>
			</div> 
		</div>
		<div class="col-xl-7 col-lg-12 pr-xl-5">
			<div class="card-deck">
				<div class="card mb-4" style="background: #8e83e4">
					<div class="card-body">
						<h4 class="card-title mont-700 pt-5 pl-3">Frontend UI/UX</h4>
						<p class="card-text px-3 pb-5">The Frontend/UX/UI track is intended to address user experience design, user interface design, and front end development.
						</p>
					</div>
				</div>
				<div class="card mb-4" style="background: #aaa0f7">
					<div class="card-body">
						<h4 class="card-title mont-700 pt-5 pl-3">Networking</h4>
						<p class="card-text px-3 pb-5">What is on the horizon for the next 3-12 months for networking. 
						</p>
					</div>
				</div>
				<div class="w-100 d-none d-sm-block d-md-none"></div>
				<div class="w-100 d-none d-md-block d-lg-none"></div>
				<div class="w-100 d-none d-lg-block"></div>

				<div class="card mb-4" style="background: #7a6ed8">
					<div class="card-body">
						<h4 class="card-title mont-700 pt-5 pl-3">Cloud and Containers</h4>
						<p class="card-text px-3 pb-5">Cloud, containers, clusters. Buildah, CRI-O, Docker, Kubernetes, Skopeo. Hybrid cloud and other buzzwords.
						</p>
					</div>
				</div>
				<div class="card mb-4">
					<div class="card-body" style="background: #5e53b5">
						<h4 class="card-title mont-700 pt-5 text-center">See all topics</h4>
						<p class="card-text text-center my-5">
							<a class="border p-3 mont-700">EXPLORE NOW</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="news" class="mx-auto col-lg-11">
	<div class="row">
		<div class="col-lg-6 pl-lg-5">
			<div class="h2 mont-700">Important dates</div>
		</div>
		<div class="col-lg-6 pr-lg-5">
			<div class="h2 mont-700">Recent news</div>
		</div>
	</div>
</section>

<section id="schedule" class="mx-auto col-lg-12 background-gray text-center my-5 py-5">
	<div class="h1 mont-700 py-4 mt-3">Schedule</div>
	<a class="p-3 mont-700 mb-3 d-inline-block purple-href">SHOW SCHEDULE</a>
</section>

<section id="travel" class="mx-auto col-lg-11">
	<div class="row py-4">
		<div class="col-xl-4 mx-5">
			<div class="mont-700 h1 underline position-relative pb-4">How to get there?</div>
			<div class="card-text pt-4 os-400">
				<p> LOREM IPSUM DevConf.CZ 2020 is the 12th annual, free, Red Hat sponsored community conference for developers, admins, DevOps engineers, testers,
				documentation writers and other contributors to open source technologies such as Linux, Middleware, Virtualization, Storage, Cloud and
				mobile where FLOSS communities sync, share, and hack on upstream projects together in the beautiful city of Brno, Czech Republic.</p>
			</div>
		</div>
		<div class="col-xl-3 container mr-xl-0 card-body" style="background: #4a4a7e">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<h2 class="mont-700 py-4">Getting to Brno</h2>
					<div class="card-text os-400">Lorem ipsum dolor sit ament. Duis maximus semper maximus. Pellentesque vestibulum iaculis fermentum.</div>
					<p class="card-text my-5">
						<a class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 container ml-xl-0 card-body" style="background: #8e83e4">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<h2 class="mont-700 py-4">Hotels</h2>
					<div class="card-text os-400">Lorem ipsum dolor sit ament. Duis maximus semper maximus. Pellentesque vestibulum iaculis fermentum.</div>
					<p class="card-text my-5">
						<a class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="background-gray">
	<div class="row py-5 w-100 mx-auto">
		<div class="mx-auto col-lg-11">
			<div class="row px-5">
				<div class="col-lg-7">
					<div class="h5 mont-600">This event is brought to you by</div>
					<a href="https://redhat.com" target="_blank"><img class="sponsor-logo pr-3 py-3" src="/assets/images/sponsors/logo-redhat.svg"></a>
					<a href="https://fit.vutbr.cz" target="_blank"><img class="sponsor-logo pr-3 py-3" src="/assets/images/sponsors/logo-fit-vut.svg"></a>
				</div>
				<div class="col-lg-5 links">
					<div class="h5 mont-600">Privacy &amp; Terms</div>
					<div class="row">
					<a class="col-md-6 col-12" href="#">Code of conduct</a>
					<a class="col-md-6 col-12" href="#">Participation agreement</a>
					<a class="col-md-6 col-12" href="#">On-site volunteer roles</a>
					<a class="col-md-6 col-12" href="#">Media policy</a>
					<a class="col-md-6 col-12" href="#">Privacy statement</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row px-5 py-3 border-top w-100 mx-auto">
		<div class="col-lg-11 mx-auto copyright">
			Copyleft <?php echo date("Y", time()); ?> Red Hat. Some rights reserved.
		</div>
	</div>
</footer>
@endsection