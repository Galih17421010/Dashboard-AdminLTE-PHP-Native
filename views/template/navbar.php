<style>
.max-height-300 pre {
  max-height: 300px;
}

.theme-switch {
  display: inline-block;
  height: 24px;
  position: relative;
  width: 50px;
}

.theme-switch input {
  display: none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: 400ms;
}

.slider::before {
  background-color: #fff;
  bottom: 4px;
  content: "";
  height: 16px;
  left: 4px;
  position: absolute;
  transition: 400ms;
  width: 16px;
}

input:checked + .slider {
  background-color: #66bb6a;
}

input:checked + .slider::before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round::before {
  border-radius: 50%;
}

</style>
  
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- profil  -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <img src="image/user2-160x160.jpg" alt="User Avatar" class="img-size-32 img-circle mr-2">
              Admin
              <i class="fas fa-caret-down"></i>               
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a class="dropdown-item" href="?page=profil"><span class="fa fa-user"></span> My Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php"><span class="fas fa-sign-out-alt"></span> Logout</a>
          </div>
        </li>

        <!-- Theme -->
        <li class="nav-item">
          <div class="theme-switch-wrapper nav-link">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <span class="slider round"></span>
            </label>
          </div>
        </li>

        <!-- Full layar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
       
    </ul>
  </nav>

<script>
  var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  var currentTheme = localStorage.getItem('theme');
  var mainHeader = document.querySelector('.main-header');

  if (currentTheme) {
    if (currentTheme === 'dark') {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      toggleSwitch.checked = true;
    }
  }

  function switchTheme(e) {
    if (e.target.checked) {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      localStorage.setItem('theme', 'dark');
    } else {
      if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-dark')) {
        mainHeader.classList.add('navbar-light');
        mainHeader.classList.remove('navbar-dark');
      }
      localStorage.setItem('theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
</script>
