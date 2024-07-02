// Fonction pour initialiser la page
function initializePage() {
    setupSpinner();
    setupSidebar();
    setupNavbar();
    setupContent();
}

// Fonction pour configurer le spinner de chargement
function setupSpinner() {
    $(document).ready(function () {
        // Masquer le spinner lorsque la page est complètement chargée
        $(window).on('load', function () {
            $('#spinner').fadeOut('slow');
        });
    });
}

// Fonction pour configurer la barre latérale
function setupSidebar() {
    var sidebarToggler = document.querySelector('.sidebar-toggler');
    var sidebar = document.querySelector('.sidebar');

    if (sidebarToggler && sidebar) {
        sidebarToggler.addEventListener('click', function () {
            sidebar.classList.toggle('show');
        });
    }
}

// Fonction pour configurer la barre de navigation
function setupNavbar() {
    // Gestion des dropdowns dans la navbar
    $('.navbar-nav .dropdown-toggle').on('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien

        var $dropdownMenu = $(this).next('.dropdown-menu');
        
        // Fermer tous les autres dropdowns ouverts
        $('.navbar-nav .dropdown-menu').not($dropdownMenu).removeClass('show');

        // Basculer la classe 'show' sur le dropdown cliqué
        $dropdownMenu.toggleClass('show');
    });

    // Fermer le dropdown lorsqu'on clique en dehors
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.navbar-nav').length) {
            $('.navbar-nav .dropdown-menu').removeClass('show');
        }
    });

    // Empêcher la fermeture du dropdown si on clique à l'intérieur
    $('.navbar-nav .dropdown-menu').on('click', function (e) {
        e.stopPropagation();
    });
}

// Fonction pour configurer le contenu principal
function setupContent() {
    // Ajouter ici le code JavaScript nécessaire pour configurer le contenu principal
    setupChambres();
    setupCharts();
}

// Fonction pour initialiser les chambres
function setupChambres() {
    // Code pour récupérer et afficher les informations sur les chambres
    $('.col-xl-3 .bg-secondary').each(function () {
        var chambreName = $(this).find('p').text();
        if (chambreName === 'Chambre 1') {
            $(this).find('h6').text('occupée').addClass('text-danger');
        }
    });
}


// Fonction pour configurer les graphiques
function setupCharts() {
    // Initialisation du premier graphique avec Chart.js
    var ctx = document.getElementById('worldwide-sales');
    if (ctx) {
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2, 3, 10],
                    backgroundColor: '#ffc107',
                    borderColor: '#ffc107',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Initialisation du deuxième graphique avec Chart.js
    var ctx2 = document.getElementById('salse-revenue');
    if (ctx2) {
        var myChart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Revenue',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: '#17a2b8',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
}

// Exécuter les fonctions au chargement du document
$(document).ready(function () {
    initializePage(); // Appeler la fonction principale d'initialisation
});
