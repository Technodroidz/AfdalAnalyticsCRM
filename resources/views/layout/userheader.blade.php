<nav class="navbar navbar-expand-lg bg-transparent user-navbar">
   <div class="container-fluid">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" href="#">Connection</a>
         </li>
      </ul>
      <ul class="navbar-nav mr-auto">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="main-notify">
            <i class="fas fa-bell notification-icon"></i>
            <span class="notify-circle"></span>
            </span>
            </a>
            <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">
                  Notification<br>
                  <span><small>Lorem ipsum dolor sit amet</small></span>
               </a>
               <a class="dropdown-item" href="#">Notification<br>
                  <span><small>Lorem ipsum dolor sit amet</small></span></a>
               <a class="dropdown-item" href="#">Notification<br>
                  <span><small>Lorem ipsum dolor sit amet</small></span></a>
            </div>
         </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{!!asset('public/assets/image/user.jpg')!!}" class="rounded-circle" height="40" width="40">
            </a>
            <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">
                  Profile
               </a>
               <a class="dropdown-item" href="#">Log Out</a>
            </div>
         </li>

         <li class="nav-item">
            <a class="nav-link" href="#"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" class="rounded" height="40" width="40"></a>
         </li>
      </ul>
   </div>
</nav>