<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ato</h1>
  

    <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        @foreach($tranokely as $chambre)
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-bed fa-3x text-warning"></i>
                    <div class="ms-3">
                        <p class="mb-2">Chambre {{ $chambre->Nom }}</p>
                        <h6 class="mb-0">{{ $chambre->Ocupation ? 'occupée' : 'libre' }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>