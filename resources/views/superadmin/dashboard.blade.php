<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/design/admin-design.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="grid-container">
        <!--Sidebar-->
        <aside class="sidebar text-white ">
            <div class="d-flex flex-row align-items-center p-2">
                <img src="/images/logo.png" alt="NCIP Logo" class="img-logo p-1">
                <div class="d-none d-md-flex flex-column ">
                    <small>NCIP R1</small>
                    <small>Employee Travel Order System</small>
                </div>
            </div>
            <ul class="list-group ul-list mt-5">
                <li class="p-3">
                    <i class='bx bxs-dashboard'></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex">Dashboard</a>
                </li>
                <li class="p-3">
                    <i class='bx bxs-file-blank'></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Request</a>
                </li>
                <li class="p-3">
                    <i class='bx bxs-map' ></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Travel Orders</a>
                </li>
                <li class="p-3">
                    <i class='bx bxs-user'></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Employees</a>
                </li>
                <li class="p-3">
                    <i class='bx bxs-user'></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Officials</a>
                </li>
                <li class="p-3">
                    <i class='bx bx-building' ></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Divisions</a>
                </li>
                <li class="p-3">
                    <i class='bx bxs-user'></i>
                    <a href="#" class="text-decoration-none nav-link d-none d-md-flex"> Users</a>
                </li>
                <li class="p-3" data-bs-toggle="collapse" href="#settingsCollapse" role="button" aria-expanded="false" aria-controls="settingsCollapse">
                    <i class='bx bxs-cog' ></i>
                    <a class="text-decoration-none nav-link d-none d-md-flex" >Settings </a>
                    <i class='bx bxs-down-arrow mx-5 d-none d-md-flex'></i>
                </li>
                <div class="collapse multi-collapse " id="settingsCollapse">
                    <ul class="list-group mt-2  d-flex flex-column justify-start bg-primary">
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Station</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Position</a></li>
                        <li class="p-2"><a href="#" class="text-decoration-none text-white">Role</a></li>
                    </ul>
                </div>
            </ul>
        </aside>
        <nav class="nav">
            Navbar
        </nav>
        <main class="main">
            main
        </main>
    </div>
</body>
</html>