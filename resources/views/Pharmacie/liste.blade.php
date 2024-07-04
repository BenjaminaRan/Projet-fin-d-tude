<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hôpital</title>
    <link rel="icon" type="image/jpg" href="img/1717682800_31824.jpg" style="border-radius: 60px;">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning"><i class="fa fa-hospital me-2"></i>Hôpital</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Benjamina</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Accueil</a>
                    <a href="/employee" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Employées</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-pills me-2"></i>Pharmacie</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Historiques</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Se Déconnecter</a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Content Start -->
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0 info">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="/chatify" class="nav-link">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Un commentaire</h6>
                                <small>15 minutes</small>
                            </a>

                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Afficer tous les Notification</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Benjamina</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon Profil</a>
                            <a href="#" class="dropdown-item">Se Déconnecter</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-bed fa-3x text-warning"></i>
                            <div class="ms-3">
                                <p class="mb-2">Chambre 1</p>
                                <h6 class="mb-0">libre</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-bed fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Chambre 2</p>
                                <h6 class="mb-0">libre</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-ambulance fa-3x text-warning"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ambulance</p>
                                <h6 class="mb-0">libre</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-ambulance fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ambulance</p>
                                <h6 class="mb-0">libre</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Liste des Médicaments</h6>
                        <button class="btn btn-outline-warning" onclick="openAddModal()">
                            <!-- <i class="fa fa-user-plus me-2"></i> -->
                            <i class="fas fa-pills plus me-2"></i>
                        </button>
                    </div>
                    <div class="row">
                        @foreach($pharma as $pharmacie)
                            <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                                <div class="card h-100 bg-transparent border-dark mx-auto" style="max-width: 18rem;">
                                    <div class="d-flex justify-content-center"
                                        style="height: 150px; width: 150px; margin-left:27%; overflow: hidden; margin-top: 12px;">
                                        <img src="{{ asset('img/' . $pharmacie->Image) }}"
                                            class="card-img-top rounded-circle img-fluid img-fluid img-thumbnail""
                                             alt=" {{ $pharmacie->Nom }}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nom: {{ $pharmacie->Nom }}</h5>
                                        <p class="card-text">Quantité: {{ $pharmacie->Quantite }}</p>
                                        <p class="card-text">Prix: {{ $pharmacie->Prix }}</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-info"
                                            onclick="openEditModal({{ json_encode($pharmacie) }})">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- //Modal Ajouter et Modifier un medicament -->
            <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="employeeModalLabel">Ajouter/Modifier un Medicame</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="employeeForm" action="{{ route('pharmacie.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="employee_id" name="employee_id">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="Image" name="Image"
                                            onchange="previewImage(event)">
                                        <label class="custom-file-trigger" for="Image" id="uploadIconLabel">
                                            <i class="fas fa-upload"></i>
                                        </label>
                                    </div>
                                    <div id="imagePreview" class="mt-2"></div>
                                </div>
                                <div class="form_div">
                                    <input type="text" class="form_input" id="Nom" placeholder="" name="Nom" required>
                                    <label for="Nom" class="form_label text-yellow">Nom .....</label>
                                </div>
                                <div class="form_div">
                                    <input type="text" class="form_input" id="Quantite" placeholder="" name="Quantite"
                                        required>
                                    <label for="Quantite" class="form_label text-yellow">Quantité .....</label>
                                </div>
                                <div class="form_div">
                                    <input type="text" class="form_input" id="Prix" placeholder="" name="Prix" required>
                                    <label for="Prix" class="form_label text-yellow">Prix</label>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-outline-info">Enregistrer</button>
                                <button type="button" class="btn btn-outline-danger"
                                    data-dismiss="modal">Quitter</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- fonction JavaScript pour la méthode Ajouteret mmodifier  -->

            <script>
                $(document).ready(function () {
                    bsCustomFileInput.init();
                });

                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function () {
                        var output = '<img src="' + reader.result + '" class="img-fluid img-thumbnail">';
                        document.getElementById('imagePreview').innerHTML = output;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
                function openAddModal() {
                    $('#employeeForm').attr('action', '{{ route('pharmacie.store') }}');
                    $('#employeeForm').trigger("reset");
                    $('#employee_id').val('');
                    $('#employeeModalLabel').text('Ajouter un Medicament');
                    $('#employeeModal').modal('show');
                }

                function openEditModal(pharmaci) {
                    $('#employeeForm').attr('action', '{{ route('pharmacie.update', '') }}/' + pharmaci.id);
                    $('#employeeForm').find('input[name="_method"]').remove();
                    $('#employeeForm').prepend('<input type="hidden" name="_method" value="PUT">');
                    $('#Nom').val(pharmaci.Nom);
                    $('#Quantite').val(pharmaci.Quantite);
                    $('#Prix').val(pharmaci.Prix);
                    $('#employee_id').val(pharmaci.id);
                    $('#employeeModalLabel').text('Modifier un Médicament');

                    var imagePreview = '<img src="{{ asset('img/') }}/' + pharmaci.Image + '" class="img-fluid img-thumbnail">';
                    $('#imagePreview').html(imagePreview);

                    $('#employeeModal').modal('show');
                }


            </script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>

            <script src="lib/chart/chart.min.js"></script>

            <script src="js/main.js"></script>
</body>

</html>