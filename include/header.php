<header>
  <!-- Top Bar -->
  <div class="announcement-bar">
    <div class="announcement-track">
      <span>FREE SHIPPING ALL OVER US</span>
      <span>•</span>
      <span>15% OFF FOR STUDENTS & TEACHERS! – ENTER ID AT CHECKOUT</span>
      <span>•</span>
      <span>FREE SHIPPING ALL OVER US</span>
      <span>•</span>
      <span>15% OFF FOR STUDENTS & TEACHERS! – ENTER ID AT CHECKOUT</span>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light px-4">
    <!-- <a class="navbar-brand fw-bold" href="#">AMIY</a> -->
    <a class="navbar-brand fw-bold" href="index.php"><img class="logo-header" src="assets/images/logo.webp" alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100" id="mainNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="shop.php">BRANDS</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">TOOLS & SUPPLIES</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">EDUCATION</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">BLOGS</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.php">PROFESSIONAL</a></li>
      </ul>
    </div>

    <div class="d-flex align-items-center gap-3">
      <a href="login.php" class="text-dark"><i class="fa-regular fa-user"></i></a>
      <i class="fa-solid fa-magnifying-glass"></i>

      <div class="position-relative">
        <a href="javascript:void(0)" class="text-dark" id="openCart">
          <i class="fa-solid fa-bag-shopping"></i>
          <span class="badge bg-dark position-absolute top-0 start-100 translate-middle">3</span>
        </a>
      </div>
    </div>
  </nav>



  <div class="cart-modal-overlay"></div>

  <div class="cart-modal">
    <div class="cart-header d-flex justify-content-between align-items-center">
      <h5>Your Cart</h5>
      <button class="close-cart">&times;</button>
    </div>

    <div class="cart-item d-flex gap-3 mb-3 position-relative">
      <img src="assets/images/na-mp-1.webp" width="60">

      <div class="flex-grow-1">
        <strong>Skin Naturals BB Cream</strong>
        <p class="mb-1">$164.35</p>

        <div class="qty d-flex align-items-center gap-2">
          <button>-</button>
          <span>1</span>
          <button>+</button>
        </div>
      </div>

      <!-- REMOVE BUTTON -->
      <button class="remove-item">&times;</button>
    </div>
    <div class="cart-item d-flex gap-3 mb-3 position-relative">
      <img src="assets/images/na-mp-2.webp" width="60">

      <div class="flex-grow-1">
        <strong>Skin Naturals BB Cream</strong>
        <p class="mb-1">$164.35</p>

        <div class="qty d-flex align-items-center gap-2">
          <button>-</button>
          <span>1</span>
          <button>+</button>
        </div>
      </div>

      <!-- REMOVE BUTTON -->
      <button class="remove-item">&times;</button>
    </div>
    <div class="cart-item d-flex gap-3 mb-3 position-relative">
      <img src="assets/images/na-mp-3.webp" width="60">

      <div class="flex-grow-1">
        <strong>Skin Naturals BB Cream</strong>
        <p class="mb-1">$164.35</p>

        <div class="qty d-flex align-items-center gap-2">
          <button>-</button>
          <span>1</span>
          <button>+</button>
        </div>
      </div>

      <!-- REMOVE BUTTON -->
      <button class="remove-item">&times;</button>
    </div>


    <div class="cart-footer">
      <button class="btn btn-dark w-100">Checkout</button>
    </div>
  </div>

</header>