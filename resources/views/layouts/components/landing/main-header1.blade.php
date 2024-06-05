
				<div class="app-header hor-header header">
					<div class="container main-container main-header-container">

						<!-- Start::header-content-left -->
						<div class="header-content-left">

							<!-- LOGO -->
								<!-- Start::header-element -->
								<div class="header-element">
									<div class="horizontal-logo">
										<a href="{{url('index')}}" class="header-logo">
											<img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="logo" class="toggle-logo">
											<img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="logo" class="toggle-dark">
										</a>
									</div>
								</div>
							<!-- End::header-element -->
							<!-- LOGO -->

							<!-- Start::header-element -->
							<div class="header-element">
								<!-- Start::header-link -->
								<a href="#" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
									<span class="open-toggle">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24"><path d="M24 0v24H0V0h24z" fill="none" opacity=".87"/><path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z"/></svg>
									</span>
									<span class="close-toggle">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
									</span>
								</a>
								<!-- End::header-link -->
							</div>
							<!-- End::header-element -->
						</div>
						<!-- Ends::header-content-left -->

						<!-- Start::header-content-Right -->
						<div class="header-content-left">
							<div class="d-flex order-lg-2 header-right-icons">
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
									data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical"></span>
								</button>
								<div class="navbar navbar-collapse responsive-navbar p-0">
									<div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
										<!-- SEARCH -->
										<div class="header-nav-right p-3 d-flex">
											<a href="{{url('register')}}" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto"
												target="_blank">New User
											</a>
											<a href="{{url('login')}}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto"
												target="_blank">Login
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Ends::header-content-Right -->
					</div>
				</div>
