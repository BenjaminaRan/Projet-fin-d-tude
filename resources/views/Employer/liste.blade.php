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
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Afficer tous les message</a>
                        </div>
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

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Liste des Employées</h6>
                        <button class="btn btn-outline-warning" onclick="openAddModal()">
                            <i class="fa fa-user-plus me-2"></i>

                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 text-center">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Poste</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emps as $emp)
                                    <tr>
                                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                        <td>
                                            <img src="{{ asset('img/' . $emp->Image) }}" class="rounded-image">
                                        </td>
                                        <td>{{ $emp->Nom }}</td>
                                        <td>{{ $emp->Prenom }}</td>
                                        <td>{{ $emp->Phone }}</td>
                                        <td>{{ $emp->Poste }}</td>
                                        <td>{{ $emp->Email }}</td>
                                        <td>
                                            <button class="btn btn-outline-info"
                                                onclick="openEditModal({{ json_encode($emp) }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="{{ route('employees.destroy', $emp->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

                <!-- The Modal -->
                <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="employeeModalLabel">Ajouter/Modifier un Employé</h5>
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
                                <form id="employeeForm" action="{{ route('employees.store') }}" method="POST"
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
                                    <div class="form-group">
                                        <label for="Nom">Nom</label>
                                        <input type="text" class="form-control" id="Nom" name="Nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Prenom">Prénom</label>
                                        <input type="text" class="form-control" id="Prenom" name="Prenom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Phone">Téléphone</label>
                                        <input type="text" class="form-control" id="Phone" name="Phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Poste">Poste</label>
                                        <input type="text" class="form-control" id="Poste" name="Poste" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" id="Email" name="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="MotDePasse">Mot de Passe</label>
                                        <input type="password" class="form-control" id="MotDePasse" name="MotDePasse">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-outline-info">Enregistrer</button>
                                    <button type="button" class="btn btn-outline-danger"
                                        data-dismiss="modal">Quitter</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                $('#employeeForm').attr('action', '{{ route('employees.store') }}');
                $('#employeeForm').trigger("reset");
                $('#employee_id').val('');
                $('#employeeModalLabel').text('Ajouter un Employé');
                $('#employeeModal').modal('show');
            }

            function openEditModal(employee) {
                $('#employeeForm').attr('action', '{{ route('employees.update', '') }}/' + employee.id);
                $('#employeeForm').find('input[name="_method"]').remove();
                $('#employeeForm').prepend('<input type="hidden" name="_method" value="PUT">');
                $('#Nom').val(employee.Nom);
                $('#Prenom').val(employee.Prenom);
                $('#Phone').val(employee.Phone);
                $('#Poste').val(employee.Poste);
                $('#Email').val(employee.Email);
                $('#employee_id').val(employee.id);
                $('#employeeModalLabel').text('Modifier un Employé');

                var imagePreview = '<img src="{{ asset('img/') }}/' + employee.Image + '" class="img-fluid img-thumbnail">';
                $('#imagePreview').html(imagePreview);

                $('#employeeModal').modal('show');
            }

        </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

        <script src="lib/chart/chart.min.js"></script>

        <script src="js/main.js"></script>
</body>

</html>