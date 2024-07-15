<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hôpital</title>
    <link rel="icon" type="image/jpg" href="img/user.jpg" style="border-radius: 50%;">
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="{{ asset('css/input.css') }}" rel="stylesheet">


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
                        <i class="fa fa-user-circle fa-2x rounded-circle text-info" style="font-size: 40px;"></i>
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->user_type }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Accueil</a>
                    <a href="/employee" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Employées</a>
                    <a href="/pharmacie" class="nav-item nav-link"><i class="fa fa-pills me-2"></i>Pharmacie</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/" class="nav-item nav-link">
                                <i class="fa fa-home"></i> Accueil
                            </a>

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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
                </div>
            </nav>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Chambres -->
                    @foreach($tranokely as $chambre)
                        <div class="col-sm-6 col-xl-6 mb-4 chambre" data-chambre-id="{{ $chambre->id }}">
                            <div class="bg-secondary rounded p-4 position-relative">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-bed fa-3x text-warning me-4" style="margin-top: 6px;"></i>
                                    <div class="flex-grow-1">
                                        <div class="text-center">
                                            <p style="color: chocolate; margin-top:-8px;">
                                                {{ $chambre->Nom }}
                                            </p>
                                        </div>
                                        <div class="position-absolute" style="top: 4px; left: 10px;">
                                            <h6 class="mb-0">
                                                {{ $chambre->Ocupation ? 'occupée' : 'libre' }}
                                            </h6>
                                        </div>
                                        @if($chambre->Ocupation)
                                            <p class="mb-1 text-center" style="margin-top: -10px;">Reste :
                                                <span id="remaining-time-{{ $chambre->id }}"></span>
                                            </p>
                                            @if($chambre->malade)
                                                <p class="mb-1 text-center" style="color: yellow;">
                                                    {{ $chambre->malade->Nom }} {{ $chambre->malade->Prenom }}
                                                </p>
                                                <form action="{{ route('malade.destroy', $chambre->malade->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-info btn-sm position-absolute"
                                                        style="top: 5px; right: 5px;">
                                                        <i class="fa fa-heartbeat"></i>
                                                    </button>
                                                </form>

                                                <form>
                                                    @csrf
                                                    <button type="button" class="btn btn-outline-warning btn-sm position-absolute"
                                                        style="top: 65px; right: 5px;" data-toggle="modal"
                                                        data-target="#caissierModal">
                                                        <i class="fa fa-money-bill"></i>
                                                    </button>
                                                </form>
                                                <!-- Ajout de l'élément pour afficher le reste -->
                                                <p id="restant-{{ $chambre->id }}" class="text-center" style="color: green;"></p>
                                            @endif
                                            <div class="progress mt-2">
                                                <div id="progress-bar-{{ $chambre->id }}" class="progress-bar bg-info"
                                                    role="progressbar" style="width: 100%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        @else
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



            <!-- Tomobile -->
            @foreach($tomobile as $voiture)
                <div class="col-sm-6 col-xl-5">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-ambulance fa-3x text-info"></i>
                        <div class="ms-2">
                            <p class="mb-2"> {{ $voiture->Nom }}</p>
                            <h6 class="mb-0">{{ $voiture->Ocupation ? 'occupée' : 'libre' }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Sale & Revenue End -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Statistiques des maladies</h6>
                                <a href="#" class="text-warning">Afficher tous</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Listes des malades</h6>
                                <a href="#" class="text-info" data-toggle="modal"
                                    data-target="#inscriptionModal">S'inscrire</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover"
                                    style="border-radius: 15px; overflow: hidden;">
                                    <thead class="bg-warning">
                                        <tr>
                                            <th></th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Âge</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th>Cas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($malade as $m)
                                            <tr>
                                                <th scope="col"><input class="form-check-input" type="checkbox">
                                                </th>
                                                <td>{{ $m->Nom }}</td>
                                                <td>{{ $m->Prenom }}</td>
                                                <td>{{ $m->age }}</td>
                                                <td>{{ $m->adresse }}</td>
                                                <td>{{ $m->phone }}</td>
                                                <td>{{ $m->cas }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mandoha vola -->
        <div class="modal fade" id="caissierModal" tabindex="-1" aria-labelledby="caissierModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- pharmacie -->
                        <h5 class="modal-title text-center" id="caissierModalLabel" style="margin-left:40%;">Pharmacie
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach($pharmaciens as $ph)
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle overflow-hidden" style="width: 80px; height: 80px;">
                                    <img src="{{ asset('img/' . $ph->Image) }}" alt="{{ $ph->Nom }}" class="img-fluid">
                                </div>
                                <div class="ms-3">
                                    <h5>{{ $ph->Nom }} {{ $ph->Prenom }}</h5>
                                    <p>{{ $ph->Poste }}</p>
                                </div>
                            </div>
                        @endforeach

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($medicaments as $mdts)
                                    <tr data-medicament-id="{{ $mdts->id }}">
                                        <th scope="col">
                                            <input class="form-check-input medicament-checkbox" type="checkbox"
                                                data-prix="{{ $mdts->Prix }}">
                                        </th>
                                        <td>
                                            <img src="{{ asset('img/' . $mdts->Image) }}" alt="{{ $mdts->Nom }}"
                                                class="rounded-circle" style="width: 20px; height: 20px;">
                                        </td>
                                        <td>{{ $mdts->Nom }}</td>
                                        <td>{{ $mdts->Prix }}</td>
                                        <td>
                                            <select class="form-select medicament-quantite"
                                                data-max-quantite="{{ $mdts->Quantite }}">
                                                @for($i = 1; $i <= $mdts->Quantite; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <button id="calculerTotalBtn" class="btn btn-outline-info btn-sm">Total</button>
                        <h5 id="totalPrix" class="text-center">Total: 0</h5>
                        <hr style="color:chocolate;">
                        <!-- caisse -->
                        <h5 class="modal-title text-center" id="caissierModalLabel" style="margin-left: 1%;">Caissier
                        </h5>
                    </div>
                    <div class="modal-body">
                        @foreach($caisseiers as $caissier)
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle overflow-hidden" style="width: 80px; height: 80px;">
                                    <img src="{{ asset('img/' . $caissier->Image) }}" alt="{{ $caissier->Nom }}"
                                        class="img-fluid">
                                </div>
                                <div class="ms-3">
                                    <h5>{{ $caissier->Nom }} {{ $caissier->Prenom }}</h5>
                                    <p>{{ $caissier->Poste }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="modal-body">
                            <form id="addMoneyForm" method="POST" action="{{ route('caisse.addMoney') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="money" class="form-label">Montant à ajouter</label>
                                    <input id="money" type="number"
                                        class="form-control @error('money') is-invalid @enderror" name="money"
                                        value="{{ old('money') }}" required autofocus>
                                    @error('money')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter Montant</button>
                            </form>
                            <h5 id="resultMessage" class="text-center"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calcul Prix -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            document.getElementById('calculerTotalBtn').addEventListener('click', function () {
                let total = 0;
                let quantities = {};
                let hasError = false;

                document.querySelectorAll('.medicament-checkbox:checked').forEach(function (checkbox) {
                    let prix = parseFloat(checkbox.getAttribute('data-prix'));
                    let quantiteSelect = checkbox.closest('tr').querySelector('.medicament-quantite');
                    let quantite = parseInt(quantiteSelect.value);

                    if (isNaN(quantite) || quantite <= 0) {
                        let medicamentNom = checkbox.closest('tr').querySelector('td:nth-child(3)').textContent;
                        // alert('Quantité invalide pour le médicament: ' + medicamentNom);
                        hasError = true;
                        return;
                    }

                    total += prix * quantite;

                    let medicamentId = checkbox.closest('tr').dataset.medicamentId;
                    quantities[medicamentId] = quantite;
                });

                if (hasError) {
                    document.querySelector('#totalPrix').textContent = 'Erreur: Quantité invalide détectée';
                    return;
                }

                let totalPrixElement = document.querySelector('#totalPrix');
                if (totalPrixElement) {
                    totalPrixElement.textContent = 'Total: ' + Math.round(total);
                }


                // Mettre à jour les quantités restantes
                updateQuantities(quantities);
            });

            function updateQuantities(quantities) {
                for (const [id, quantity] of Object.entries(quantities)) {
                    let quantiteSelect = document.querySelector(`[data-medicament-id="${id}"] .medicament-quantite`);
                    let maxQuantite = parseInt(quantiteSelect.getAttribute('data-max-quantite'));
                    let newQuantite = maxQuantite - quantity;
                    quantiteSelect.innerHTML = '';

                    for (let i = 1; i <= newQuantite; i++) {
                        let option = document.createElement('option');
                        option.value = i;
                        option.textContent = i;
                        quantiteSelect.appendChild(option);
                    }
                }

                // Envoyer les quantités mises à jour au serveur
                $.ajax({
                    url: '{{ route("medicament.updateQuantities") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantities: quantities
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            }

            document.getElementById('addMoneyForm').addEventListener('submit', function (e) {
                e.preventDefault();

                let totalPrixElement = document.querySelector('#totalPrix');
                let totalPrix = totalPrixElement ? parseFloat(totalPrixElement.textContent.replace('Total: ', '')) : 0;
                let money = parseFloat(document.getElementById('money').value);
                let resultMessage = document.getElementById('resultMessage');

                if (!resultMessage) {
                    resultMessage = document.createElement('h5');
                    resultMessage.id = 'resultMessage';
                    this.appendChild(resultMessage);
                }

                if (money < totalPrix) {
                    resultMessage.textContent = 'Le montant ajouté est inférieur au total des médicaments.';
                    resultMessage.classList.add('text-danger');
                    resultMessage.classList.remove('text-success');
                } else {
                    let reste = money - totalPrix;
                    resultMessage.textContent = 'Le reste après paiement est: ' + reste;
                    resultMessage.classList.remove('text-danger');
                    resultMessage.classList.add('text-success');

                    document.querySelectorAll('.chambre').forEach(function (chambre) {
                        let chambreId = chambre.getAttribute('data-chambre-id');
                        let restantElement = document.getElementById('restant-' + chambreId);
                        if (restantElement) {
                            restantElement.textContent = 'Reste: ' + reste;
                        }
                    });

                    // Utiliser AJAX pour envoyer le formulaire
                    let formData = new FormData(this);
                    $.ajax({
                        url: this.action,
                        method: this.method,
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            console.log(response);
                            $('#caissierModal').modal('hide');
                        },
                        error: function (error) {
                            console.error(error);
                        }
                    });
                }
            });
        </script>


        <!-- Modal pour s'inscrire pour le malade -->
        <div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inscriptionModalLabel">Inscription d'un nouveau
                            malade</h5>
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
                        <form action="{{ route('malade') }}" method="POST">
                            @csrf
                            <div class="form_div">
                                <input type="text" class="form_input" id="Nom" name="Nom" placeholder="" required>
                                <label for="Nom" class="form_label text-yellow">Nom</label>
                            </div>
                            <div class="form_div">
                                <input type="text" class="form_input" id="Prenom" name="Prenom" placeholder=" "
                                    required>
                                <label for="Prenom" class="form_label text-yellow">Prénom</label>
                            </div>
                            <div class="form_div">
                                <input type="text" class="form_input" id="Age" name="age" placeholder=" " required>
                                <label for="Age" class="form_label text-yellow">Âge</label>
                            </div>
                            <div class="form_div">
                                <input type="text" class="form_input" id="Adresse" name="adresse" placeholder=""
                                    required>
                                <label for="Adresse" class="form_label text-yellow">Adresse</label>
                            </div>
                            <div class="form_div">
                                <input type="text" class="form_input" id="Phone" name="phone" placeholder="" required>
                                <label for="Phone" class="form_label text-yellow">Téléphone</label>
                            </div>
                            <div class="form_div">
                                <select class="form-control bg-transparent" id="cas" name="cas" required>
                                    <option value="" disabled selected
                                        style="display: none; background-color: transparent;">Choisir un
                                        cas
                                    </option>
                                    <option value="visite" style="background-color: transparent;">Visite
                                    </option>
                                    <option value="transferer" style="background-color: transparent;">
                                        Transférer </option>
                                    <option value="hospitaliser" style="background-color: transparent;">
                                        Hospitaliser</option>
                                </select>
                            </div>
                            <div class="form_div">
                                <select class="form-control bg-transparent" id="chambre_id" name="chambre_id" required>
                                    <option value="" disabled selected
                                        style="display: none; background-color: transparent;">Choisir
                                        une
                                        chambre</option>
                                    @foreach($tranokely as $chambre)
                                        @if(!$chambre->Ocupation)
                                            <option value="{{ $chambre->id }}">{{ $chambre->Nom }} - Libre</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- occupation pour la chambre  -->
        <script>
            @foreach($tranokely as $chambre)
                @if($chambre->Ocupation)
                    let startTime{{ $chambre->id }} = new Date('{{ $chambre->occupation_time }}');
                    let duration{{ $chambre->id }} = 2 * 7 * 24 * 60 * 60; // Durée d'occupation en secondes (2 semaines)
                    setInterval(() => {
                        updateProgressBarAndTime({{ $chambre->id }}, startTime{{ $chambre->id }}, duration{{ $chambre->id }});
                    }, 1000);
                @endif
            @endforeach

            function updateProgressBarAndTime(chambreId, startTime, duration) {
                const progressBar = document.getElementById(`progress-bar-${chambreId}`);
                const remainingTimeElement = document.getElementById(`remaining-time-${chambreId}`);

                // Mettre à jour la barre de progression
                let currentTime = new Date();
                let elapsedTimeInSeconds = Math.floor((currentTime - startTime) / 1000);
                let progressPercentage = (elapsedTimeInSeconds / duration) * 100;
                progressBar.style.width = `${Math.min(progressPercentage, 100)}%`;

                // Mettre à jour l'affichage du temps restant
                let remainingSeconds = Math.max(0, duration - elapsedTimeInSeconds);
                let remainingTime = formatTime(remainingSeconds);
                remainingTimeElement.textContent = remainingTime;
            }

            function formatTime(totalSeconds) {
                let days = Math.floor(totalSeconds / (24 * 3600));
                let hours = Math.floor((totalSeconds % (24 * 3600)) / 3600);
                let minutes = Math.floor((totalSeconds % 3600) / 60);
                let seconds = totalSeconds % 60;
                return `${days} jours ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }
        </script>


        <!-- requette pour la payment -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="lib/chart/chart.min.js"></script>

        <script src="js/main.js"></script>
</body>

</html>