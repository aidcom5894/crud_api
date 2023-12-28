<!-- section for navbar starts here -->


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $base_address; ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="register_admin">Admin Registration</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="register_admin">Admin Login</a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User Portal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">User Registration</a></li>
            <li><a class="dropdown-item" href="#">User Login</a></li>
            <li><a class="dropdown-item" href="#">User Message</a></li>
            <li><a class="dropdown-item" href="#">User Webmail</a></li>
           
          </ul>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="send_mail">API Example</a>
        </li>

        
    
      </ul>
    
    </div>
  </div>
</nav>


<!-- section for navbar ends here -->
