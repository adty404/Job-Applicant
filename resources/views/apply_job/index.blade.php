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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <form action="{{ route('apply_job.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone">Nomor Telepon</label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="number" name="whatsapp" id="whatsapp" class="form-control"
                                placeholder="Whatsapp" required>
                        </div>
                        <div class="mb-3">
                            <label for="company">Perusahaan</label>
                            <input type="text" name="company" id="company" class="form-control"
                                placeholder="{{ $job->company }}" value="{{ $job->company }}" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="position">Posisi yang dilamar</label>
                            <input type="text" name="position" id="position" class="form-control"
                                placeholder="{{ $job->position }}" value="{{ $job->position }}" readonly required>
                        </div>

                        <input type="hidden" name="job_application_id" value="{{ $job->id }}" required>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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


</body>

</html>
