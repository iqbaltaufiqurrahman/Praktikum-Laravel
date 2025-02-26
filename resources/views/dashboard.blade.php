<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--CSS-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
        * {
            font-family: 'DM Sans';
        }
        td {
            text-align: center;
        }
        .th {
            text-align: center;
        }
    </style>
    <!--CSS Local-->
    <link rel="stylesheet" href="style.css">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <!--Icon Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <!--Sidebar-->
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 200vh;">
            <a class="align-items-center text-white text-decoration-none" href="#">
                <i class="bi bi-amd me-2 fs-4 ps-2 text-danger"></i><span class="fs-3 fw-bold">Laravel.</span>
            </a>
            <hr>
            <!--Menu sidebar-->
            <ul class="nav nav-pills flex-column mb-auto fw-medium">
                <li class="nav-item">
                    <a href="users" class="nav-link text-white" id="dashboard"><i class="bi bi-house me-2"></i>Users</a>
                </li>
                <li class="nav-item">
                    <a href="courts" class="nav-link text-white" id="products"><i class="bi bi-grid-fill me-2"></i>Courts</a>
                </li>
                <li class="nav-item">
                    <a href="types" class="nav-link text-white" id="services"><i class="bi bi-grid-fill me-2"></i>Court-Type</a>
                </li>
                <li class="nav-item">
                    <a href="transactions" class="nav-link text-white" id="services"><i class="bi bi-grid-fill me-2"></i>Transactions</a>
                </li>
            </ul>
            <hr>
            <!--Menu dropdown-->
            <div class="dropdown">
                <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-gear-fill me-2 fs-6"></i><span>Admin</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Call-center</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Email us</a>
                </div>
            </div>
        </div>
        
    <div class="parent col-md-10 bg-light" id="content-area">
        <div class="container-fluid">
            <div class="row">
                @yield('isi')
            </div>
        </div>
    </div>
    
    </div>
    
    </div>
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>

    <!--JS Local-->
    <script>
    </script>
</body>
</html>