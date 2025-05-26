<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechPhone - Điện thoại, laptop, tablet chính hãng</title>
  <?= $this->include('partials/link-header'); ?>
</head>

<body>
<!-- TOAST NHIỀU LỖI -->
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

        <!-- Ảnh đại diện -->
        <div class="text-center mb-3" style="width: 80px; height: 80px; margin: auto; border-radius: 8px; background: #f9f9f9; display: flex; justify-content: center; align-items: center; overflow: hidden;">
          <img src="https://static-account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt="Ảnh đại diện" style="max-width: 70px; max-height: 70px; object-fit: contain;">
        </div>

        <!-- Tiêu đề -->
        <h2 class="mb-4 fw-semibold text-dark text-center">Đăng ký với</h2>

        <!-- Đăng ký với mạng xã hội -->
        <div class="d-flex gap-3 mb-4 justify-content-center">
          <div class="flex-fill text-center p-2 border rounded cursor-pointer user-select-none fw-medium text-secondary" style="color: #444;">
            <i class="fab fa-google me-2" style="color: #DB4437;"></i> Google
          </div>
          <div class="flex-fill text-center p-2 border rounded cursor-pointer user-select-none fw-medium text-primary" style="color: #1877F2;">
            <i class="fab fa-facebook-f me-2"></i> Facebook
          </div>
        </div>

        <!-- Hoặc -->
        <div class="d-flex align-items-center mb-4">
          <hr class="flex-grow-1 m-0" style="border-top: 1px solid #ccc;">
          <span class="px-3 text-secondary" style="font-size: 0.9rem;">hoặc</span>
          <hr class="flex-grow-1 m-0" style="border-top: 1px solid #ccc;">
        </div>

        <!-- BẮT ĐẦU FORM -->
        <form action="register" method="post" class="mb-4">
          <!-- Họ và tên -->
          <div class="mb-3">
            <input type="text" placeholder="Nhập họ và tên" name="name" value="<?= old('name') ?>"
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>

          <!-- Số điện thoại -->
          <div class="mb-3">
            <input type="tel" placeholder="Nhập số điện thoại" name="phone" value="<?= old('phone') ?>"
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>

          <!-- Email -->
          <div class="mb-1">
            <input type="email" placeholder="Nhập email (không bắt buộc)" name="email" value="<?= old('email') ?>"
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>

          <!-- ADDRESS -->
          <div class="mb-3">
            <input type="text" placeholder="Nhập địa chỉ " name="address" value="<?= old('address') ?>"
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>

          <!-- Mật khẩu -->
          <div class="mb-1">
            <input type="password" placeholder="Nhập mật khẩu" name="password" value=""
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>
          <small class="d-block text-secondary mb-3" style="font-size: 0.85rem;">
            (*) Mật khẩu tối thiểu 6 ký tự, có ít nhất 1 chữ và 1 số. (VD: 12345a)
          </small>

          <!-- Nhập lại mật khẩu -->
          <div class="mb-4">
            <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" value=""
              style="width: 100%; padding: 12px 8px; border: none; border-bottom: 2px solid #ccc; font-size: 1rem;" />
          </div>
          <!-- Nút đăng ký -->
          <button type="submit" class="btn btn-danger w-100 py-3 fs-5">Đăng ký</button>
        </form>
        <!-- KẾT THÚC FORM -->

        <!-- Link đăng nhập -->
        <div class="text-center mt-4 mb-4" style="font-size: 0.9rem; color: #333;">
          Bạn đã có tài khoản?
          <a href="login" class="text-danger text-decoration-none fw-semibold">Đăng nhập</a> ngay
        </div>
      </div>
    </div>
  </div>
  <?= $Footer; ?>
<?= $this->include('partials/link-footer'); ?>
  <script>
    document.querySelectorAll('.toast').forEach(function(toastEl) {
      new bootstrap.Toast(toastEl).show();
    });
  </script>
</body>

</html>