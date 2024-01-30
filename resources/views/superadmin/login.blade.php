<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="d-flex flex-row text-white" style="background: #2B2D37;">
            <div>
                <img src="/images/logo.png" alt="">
            </div>
            <div class="d-flex flex-column">
                <span class="">National Commission on Indigenous Peoples Region 1</span>
                <strong>EMPLOYEE TRAVEL ORDER SYSTEM</strong>
            </div>
        </div>

        <div>
            <h1>Login</h1>
            <form action="">
                <div class="form-group">
                    <label for="emailaddress">Email address</label>
                    <input type="email" class="form-control" id="emailaddress" aria-describedby="emailAddress" placeholder="Enter email address">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label for="office">Office</label>
                    <select class="form-control" id="office">
                        <option disabled selected>Select Office</option>
                        <option value="Regional Office - ORD">Regional Office - ORD</option>
                        <option value="Regional Office - TMSD">Regional Office - TMSD</option>
                        <option value="Regional Office - AFSD">Regional Office - AFSD</option>
                        <option value="Ilocos Norte Provincial Office">Ilocos Norte Provincial Office</option>
                        <option value="Dingras CSC">Dingras CSC</option>
                        <option value="Ilocos Sur Provincial Office">Ilocos Sur Provincial Office</option>
                        <option value="Banayoyo CSC">Banayoyo CSC</option>
                        <option value="Tagudin CSC">Tagudin CSC</option>
                        <option value="Sudipen CSC">Sudipen CSC</option>
                        <option value="Pugo CSC">Pugo CSC</option>
                        <option value="Pangasinan Provincial Office">Pangasinan Provincial Office</option>
                        <option value="Sison CSC">Sison CSC</option>
                        <option value="Urdaneta CSC">Urdaneta CSC</option>
                    </select>
                  </div>
            </form>
        </div>
    </div>
</body>
</html>