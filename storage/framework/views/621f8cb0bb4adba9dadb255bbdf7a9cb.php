<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/">WEB UAS Laravel Elsa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo e(($title === "Home" ? 'active' : '')); ?>" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e(($title === "Profile" ? 'active' : '')); ?>" href="/profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e(($title === "About" ? 'active' : '')); ?>" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e(($title === "Contact" ? 'active' : '')); ?>" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><?php /**PATH D:\applications\project1-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>