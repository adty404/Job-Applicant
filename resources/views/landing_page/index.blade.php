<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Job Applicant</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                @include('sweetalert::alert')
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Technical Test creating Job Applicant web</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://github.com/adty404" target="_blank" class="text-white">Portfolio
                                    (Github)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <i class="fa fa-tasks" style="margin-right: 5px"></i>
                    <strong>Job Applicant</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Job Applicant</h1>
                    <p class="lead text-muted">Halaman web yang menyediakan daftar list dari Job Applicant</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @forelse ($jobs as $job)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ $job->thumbnail }}" class="card-img-top" width="400" height="600" alt="...">

                            <div class="card-body">
                                <p class="card-title">{{ $job->company }} - {{ $job->location }}</p>
                                <p class="card-text">
                                    <i>{{ $job->position }}</i>
                                </p>
                                <p class="card-text">{{ $job->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a data-job_application_id="{{$job->id}}" data-company="{{$job->company}}"
                                            data-position="{{$job->position}}" data-location="{{$job->location}}"
                                            data-thumbnail="{{$job->thumbnail}}"
                                            data-description="{{$job->description}}" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-show" type="button"
                                            class="btn btn-warning btn-sm">Show</a>
                                        <a href="{{ route('apply_job.index', ['id' => $job->id]) }}"
                                            class="btn btn-sm btn-success">Apply</a>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-show" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('landing_page.detail','job_application_id')}}"
                                                    method="get">
                                                    @csrf
                                                    <!-- @method('PUT') -->
                                                    <div class="mb-3">
                                                        <img src="{{ $job->thumbnail }}" width="410" height="610" alt="" id="thumbnail">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="company">Perusahaan</label>
                                                        <input type="text" class="form-control" id="company"
                                                            name="company" placeholder="Perusahaan" readonly>
                                                    </div>
                                                    <input type="hidden" id="job_application_id"
                                                        name="job_application_id">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="position">Position</label>
                                                        <input type="text" class="form-control" id="position"
                                                            name="position" placeholder="Posisi" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="location">Location</label>
                                                        <input type="text" class="form-control" id="location"
                                                            name="location" placeholder="Lokasi" readonly>
                                                    </div>
                                                    <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    NO DATA
                    @endforelse
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Copyright &copy;<script>
                    document.write(new Date().getFullYear())
                </script> ADITYA PRASETYO</p>
        </div>
    </footer>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $('#exampleModal-show').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var company = button.data('company')
            var position = button.data('position')
            var location = button.data('location')
            var job_application_id = button.data('job_application_id')
            var modal = $(this)
            modal.find('.modal-title').text('VIEW JOB INFORMATION');
            modal.find('.modal-body #company').val(company);
            modal.find('.modal-body #position').val(position);
            modal.find('.modal-body #location').val(location);
            modal.find('.modal-body #job_application_id').val(job_application_id);
        });
    </script>


</body>

</html>
