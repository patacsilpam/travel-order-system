<div class="d-flex flex-row align-items-center p-2">
    <img src="/images/logo.png" alt="NCIP Logo" class="img-logo p-1">
    <div class="d-none d-md-flex flex-column ">
        <small>NCIP R1</small>
        <small>Employee Travel Order System</small>
       
    </div>
</div>
<ul class="list-group ul-list mt-5">
    <li class="p-3">
        <a href="{{ url('/superadmin/dashboard') }}" class="text-decoration-none nav-link" title="Dashboard">
            <i class='bx bxs-dashboard'></i>
            <span class="d-none d-md-flex mx-2">Dashboard</span>
        </a>
    </li>
    <li class="p-3">
        <a href="#request" class="text-decoration-none nav-link" title="Request"> 
            <i class='bx bxs-file-blank'></i>
            <span class="d-none d-md-flex mx-2">Request</span>
        </a>
    </li>
    <li class="p-3">
        <a href="#to" class="text-decoration-none nav-link" title="Travel Orders"> 
            <i class='bx bxs-map'></i>
            <span class="d-none d-md-flex mx-2">Travel Orders</span>
        </a>
    </li>
    <li class="p-3">
        <a href="#employees" class="text-decoration-none nav-link" title="Employees">
            <i class='bx bxs-user'></i>
            <span class=" d-none d-md-flex mx-2">Employees</span>
        </a>
    </li>
    <li class="p-3">
        <a href="#officials" class="text-decoration-none nav-link" title="Officials">
            <i class='bx bxs-user'></i> 
            <span class="d-none d-md-flex mx-2">Officials</span>
        </a>
    </li>
    <li class="p-3">
        <a href="#division" class="text-decoration-none nav-link" title="Divisions">
            <i class='bx bx-building'></i> 
            <span class="d-none d-md-flex mx-2">Divisions</span>
        </a>
    </li>
    <li class="p-3">
        <a href="{{ url('/superadmin/users') }}" class="text-decoration-none nav-link" title="Users"> 
            <i class='bx bxs-user'></i>
            <span class="d-none d-md-flex mx-2">Users</span>
        </a>
    </li>
    <li class="p-3" data-bs-toggle="collapse" href="#settingsCollapse" role="button" aria-expanded="false" aria-controls="settingsCollapse">
        <a href="#settings" class="text-decoration-none nav-link" title="Settings">
            <i class='bx bxs-cog' ></i>
            <span class="d-none d-md-flex mx-2">Settings<i class='bx bxs-down-arrow' style="margin-left:150px; margin-top:5px;"></i></span>
        </a>
        <!----->
    </li>
    <div class="collapse multi-collapse" id="settingsCollapse">
        <ul class="list-group mt-2 ul-list ">
            <li class="p-2"><a href="#" class="text-decoration-none text-white" title="Station">Station</a></li>
            <li class="p-2"><a href="{{ url('/superadmin/settings/position') }}" class="text-decoration-none text-white" title="Position">Position</a></li>
            <li class="p-2"><a href="#" class="text-decoration-none text-white" title="Role">Role</a></li>
        </ul>
    </div>
</ul>
<script>
        $(document).ready(function () {
            // If you want to remove the "active" class from all li elements on page load
            $('li').removeClass('active');
        });
    </script>