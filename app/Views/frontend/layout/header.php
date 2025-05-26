<nav class="navbar navbar-expand-lg" style="background-color: #0d3b66; padding: 12px 0;">
  <div class="container d-flex justify-content-between align-items-center">
    
    <!-- Logo -->
    <a class="navbar-brand" href="<?= base_url() ?>" style="display: flex; align-items: center;">
      <img src="<?= base_url('assets/images/shadowtek.png') ?>" alt="Shadowtek Logo" style="height: 40px; width: auto;">
    </a>

    <!-- Thanh tìm kiếm -->
    <div class="flex-grow-1 mx-4">
      <div class="input-group" style="max-width: 500px;">
        <input type="text" class="form-control" placeholder="Bạn cần tìm gì...">
        <button class="btn btn-light" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <!-- Icon & chức năng -->
    <div class="d-flex align-items-center text-white gap-4" style="font-size: 13px;">

      <a href="tel:0366090969" class="text-white text-decoration-none text-center">
        <i class="fas fa-phone me-1"></i><br>
        <small class="fw-bold">Gọi mua hàng<br>0366.090.969</small>
      </a>

      <a href="<?= base_url('cua-hang') ?>" class="text-white text-decoration-none text-center">
        <i class="fas fa-map-marker-alt me-1"></i><br>
        <small>Xem<br>Cửa hàng</small>
      </a>

      <a href="<?= base_url('tra-cuu-don-hang') ?>" class="text-white text-decoration-none text-center">
        <i class="fas fa-truck me-1"></i><br>
        <small>Tra cứu<br>đơn hàng</small>
      </a>

      <a href="<?= base_url('cart') ?>" class="text-white text-decoration-none text-center">
        <i class="fas fa-shopping-cart fa-lg"></i><br>
        <small>Giỏ hàng</small>
      </a>

    <?php if (!session()->has('user_id')): ?>
    <a href="<?= base_url('login') ?>" class="text-white text-decoration-none text-center">
        <i class="fas fa-user me-1"></i><br>
        <small>Đăng nhập</small>
    </a>
<?php else: ?>
    <div class="text-white text-decoration-none text-center dropdown">
        <a href="#" class="dropdown-toggle text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle me-1"></i><br>
            <small><?= session('user_name') ?></small>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/profile') ?>">Thông tin cá nhân</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/logout') ?>">Đăng xuất</a></li>
        </ul>
    </div>
<?php endif; ?>

      
    </div>
  </div>
</nav>
