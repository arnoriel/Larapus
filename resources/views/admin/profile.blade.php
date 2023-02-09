@extends('layouts.admin')

@section('content')
<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile</h5>
								</div>
								<div class="card-body text-center">
									<img src="{{ asset('admin/static/img/avatars/garou.png') }}" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">{{ Auth::user()->name }}</h5>
									<div class="text-muted mb-2">Web Development</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">Laravel</a>
									<a href="#" class="badge bg-primary me-1 my-1">PHP</a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">Indonesia</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">IT Programming Centre</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Indonesia</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><i class="bi bi-whatsapp"></i><a href="#"> WhatsApp</a></li>
										<li class="mb-1"><i class="bi bi-facebook"></i><a href="#"> Facebook</a></li>
										<li class="mb-1"><i class="bi bi-instagram"></i><a href="#"> Instagram</a></li>
                                        <li class="mb-1"><i class="bi bi-telegram"></i><a href="#"> Telegram</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/static/img/avatars/kanye.png') }}" width="36" height="36" class="rounded-circle me-2" alt="Kanye West">
										<div class="flex-grow-1">
											<small class="float-end text-navy">5m ago</small>
											<strong>Kanye West</strong> started following <strong>{{ Auth::user()->name }}</strong><br />
											<small class="text-muted">Today 7:51 pm</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/static/img/avatars/mesi.png') }}" width="36" height="36" class="rounded-circle me-2" alt="messi">
										<div class="flex-grow-1">
											<small class="float-end text-navy">30m ago</small>
											<strong>Messi</strong> posted something on <strong>{{ Auth::user()->name }}</strong>'s timeline<br />
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												eres el jogar del mundo, artinya apa bang messi
                                                <br>
                                                ente adalah centre forward paling terbaik
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/static/img/avatars/garou.png') }}" width="36" height="36" class="rounded-circle me-2" alt="">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1h ago</small>
											<strong>{{ Auth::user()->name }}</strong> Already take sarapan<br />

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/static/img/avatars/garou.png') }}" width="36" height="36" class="rounded-circle me-2" alt="">
										<div class="flex-grow-1">
											<small class="float-end text-navy">3h ago</small>
											<strong>{{ Auth::user()->name }}</strong> posted two photos <br />
											<small class="text-muted">Today 5:12 pm</small>

											<div class="row g-0 mt-1">
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="{{ asset('admin/static/img/photos/mesgot.png') }}" class="img-fluid pe-2" alt="messi goat">
												</div>
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="{{ asset('admin/static/img/avatars/mesi.png') }}" class="img-fluid pe-2" alt="mesi">
												</div>
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/static/img/avatars/eminem.png') }}" width="36" height="36" class="rounded-circle me-2" alt="eminem">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>Eminem</strong> started following <strong>{{ Auth::user()->name }}</strong><br />
											<small class="text-muted">Yesterday 3:12 pm</small>

											<div class="d-flex align-items-start mt-1">
												<a class="pe-3" href="#">
                <img src="{{ asset('admin/static/img/avatars/garou.png') }}" width="36" height="36" class="rounded-circle me-2" alt="">
              </a>
												<div class="flex-grow-1">
													<div class="border text-sm text-muted p-2 mt-1">
														Ngerap 10 jam faster nonstop
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />
									<div class="d-grid">
										<a href="#" class="btn btn-primary">Load more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection