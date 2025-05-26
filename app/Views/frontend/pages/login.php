<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechPhone - Điện thoại, laptop, tablet chính hãng</title>
  <?= $this->include('partials/link-header'); ?>

</head>

<body>
  <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
  <?php if (session()->getFlashdata('toast_errors')): ?>
    <?php foreach (session('toast_errors') as $error): ?>
      <div class="toast align-items-center text-bg-danger border-0 show mb-2" role="alert">
        <div class="d-flex">
          <div class="toast-body">
            <?= esc($error) ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if (session()->getFlashdata('toast_success')): ?>
    <div class="toast align-items-center text-bg-success border-0 show" role="alert">
      <div class="d-flex">
        <div class="toast-body">
          <?= esc(session('toast_success')) ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  <?php endif; ?>
</div>
  <?= $Header; ?>
  <div class="container">
   <div class="row">
  <div class="row" style="max-width: 70%; margin: auto; padding: 15px; font-family: sans-serif;">

    <!-- FORM ĐĂNG NHẬP -->
    <form method="POST" action="login">
      <div class="text-center mb-3" style="width: 80px; height: 80px; margin: auto; border-radius: 8px; background: #f9f9f9; display: flex; justify-content: center; align-items: center; overflow: hidden;">
        <img src="https://static-account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt="Ảnh đại diện" style="max-width: 70px; max-height: 70px; object-fit: contain;">
      </div>

      <h2 class="mb-4 fw-semibold text-dark text-center">Đăng nhập với</h2>

      <div class="d-flex gap-3 mb-4 justify-content-center">
        <div class="flex-fill text-center p-2 border rounded cursor-pointer user-select-none fw-medium text-secondary" style="color: #444;">
          <i class="fab fa-google me-2" style="color: #DB4437;"></i> Google
        </div>
        <div class="flex-fill text-center p-2 border rounded cursor-pointer user-select-none fw-medium text-primary" style="color: #1877F2;">
          <i class="fab fa-facebook-f me-2"></i> Facebook
        </div>
      </div>

      <div class="d-flex align-items-center mb-4">
        <hr class="flex-grow-1 m-0" style="border-top: 1px solid #ccc;">
        <span class="px-3 text-secondary" style="font-size: 0.9rem;">hoặc</span>
        <hr class="flex-grow-1 m-0" style="border-top: 1px solid #ccc;">
      </div>

      <!-- INPUT: SĐT -->
      <div class="row mb-3">
        <div class="col-12">
          <input type="text" placeholder="Nhập số điện thoại" name="phone" value="<?= old('phone') ?>"
            style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
        </div>
      </div>

      <!-- INPUT: MẬT KHẨU -->
      <div class="row mb-4">
        <div class="col-12">
          <input type="password" placeholder="Mật khẩu" name="password"
            style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
        </div>
      </div>

      <!-- GHI NHỚ + QUÊN MK -->
      <div class="d-flex justify-content-between align-items-center mb-3" style="font-size: 0.9rem; color: #333;">
        <label style="cursor: pointer;">
          <input type="checkbox" name="remember" style="margin-right: 8px;"> Ghi nhớ đăng nhập
        </label>
        <a href="#" style="color: #dc3545; text-decoration: none;">Quên mật khẩu?</a>
      </div>

      <!-- SUBMIT -->
      <button type="submit" class="btn btn-danger w-100 py-3 fs-5">Đăng nhập</button>
    </form>

    <!-- PHẦN NGOÀI FORM -->
    <div class="text-center mt-4 mb-4" style="font-size: 0.9rem; color: #333;">
      Chưa có tài khoản?
      <a href="<?= base_url('register') ?>" class="text-danger text-decoration-none fw-semibold">Đăng ký</a> ngay
    </div>

  </div>
</div>

  </div>
  <?= $Footer; ?>
 <?= $this->include('partials/link-footer'); ?>

  <script>
    // Add interactive effects
    document.addEventListener('DOMContentLoaded', function() {
      // Product card hover effects
      const productCards = document.querySelectorAll('.product-card');
      productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-10px)';
          this.style.boxShadow = '0 15px 35px rgba(0,0,0,0.1)';
        });

        card.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(0)';
          this.style.boxShadow = 'none';
        });
      });

      // Sidebar item clicks
      const sidebarItems = document.querySelectorAll('.sidebar-item');
      sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
          sidebarItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Search functionality
      const searchInput = document.querySelector('input[type="text"]');
      searchInput.addEventListener('focus', function() {
        this.style.borderColor = 'var(--primary-red)';
        this.style.boxShadow = '0 0 5px rgba(227,30,36,0.3)';
      });

      searchInput.addEventListener('blur', function() {
        this.style.borderColor = '';
        this.style.boxShadow = '';
      });
    });
  </script>
  <script>
    function startFlashSaleCountdown(durationInSeconds) {
      let timer = durationInSeconds,
        hours, minutes, seconds;
      const countdownElement = document.getElementById('flashCountdown');

      const countdownInterval = setInterval(function() {
        hours = Math.floor(timer / 3600);
        minutes = Math.floor((timer % 3600) / 60);
        seconds = timer % 60;

        countdownElement.textContent =
          `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        if (--timer < 0) {
          clearInterval(countdownInterval);
          countdownElement.textContent = "Đã kết thúc";
        }
      }, 1000);
    }

    // Gọi hàm với 1 giờ đếm ngược
    startFlashSaleCountdown(3600);
  </script>
</body>

</html>