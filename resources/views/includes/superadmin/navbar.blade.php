<div class="menu-bar">
    <i class='bx bx-menu' id="toggleSidebar" style="font-size: 24px;"></i>
</div>
<div class="dropdown">
    <img src="/images/logo.png" alt="Profile pic" style="height: 25px;">
    <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" id="userProfile" data-bs-toggle="dropdown" aria-expanded="false">
      Juan Dela Cruz
    </a>
    <ul class="dropdown-menu" aria-labelledby="userProfile">
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><a class="dropdown-item" href="{{ url('/superadmin/login') }}">Logout</a></li>
    </ul>
  </div>