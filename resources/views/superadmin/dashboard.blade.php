<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<style>
    li{
        list-style: none;
    }
    ul>li:hover{
        background: #bcbcbc5c;
    }
    .nav-link{
        color: #B2B2B2;
        font-size: 1.2rem;
    }
    .nav-link:hover,
    .nav-link:active{
        color: #ffffff;
    }
</style>
<body>
    <div class="grid">
        <!--Sidebar-->
            <div class="col h-full" style="height: 100vh; width: 350px; background-color:#2B2D37; position: fixed;">
                <div  class="d-flex align-items-center">
                    <img src="/images/logo.png" alt="NCIP LOGO" class="p-2 h-50">
                    <div class="d-flex flex-column  text-white">
                        <span>NCIP R1</span>
                        <span>Employee Travel Order System</span>
                    </div>
                </div>
                <aside style="margin-top: 70px" >
                    <ul class="list-group">
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link active"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bxs-file-blank'></i> Request</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bxs-map' ></i> Travel Orders</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bxs-user'></i> Employees</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bxs-user'></i> Officials</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bx-building' ></i> Divisions</a></li>
                        <li class="p-3"><a href="#" class="text-decoration-none nav-link"><i class='bx bxs-user'></i> Users</a></li>
                        <li class="p-3">
                            <a class=" text-decoration-none nav-link" data-bs-toggle="collapse" href="#settingsCollapse" role="button" aria-expanded="false" aria-controls="settingsCollapse">
                                <i class='bx bxs-cog' ></i> Settings <i class='bx bxs-down-arrow' style="margin-left: 170px;"></i>
                            </a>
                            <div class="collapse multi-collapse" id="settingsCollapse">
                                <ul class="list-group mt-2">
                                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Station</a></li>
                                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Position</a></li>
                                    <li class="p-2"><a href="#" class="text-decoration-none text-white">Role</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </aside>
            </div>
            <nav class="bg-primary">
                fghsfg
            </nav>
            <main class="h-full bg-warning" style="height: 100vh">
                asdfasdf
            </main>
    </div>
</body>
</html>