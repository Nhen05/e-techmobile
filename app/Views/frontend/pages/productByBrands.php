<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPhone - Điện thoại, laptop, tablet chính hãng</title>
  <?= $this->include('partials/link-header'); ?>
   
</head>
<body>
       <?= $Header; ?>
   <div class="container">
        <div class="row">
   <div class="mb-4 mt-4" style="display: flex; gap: 20px; font-family: Arial, sans-serif; font-size: 14px;">

  <!-- Sidebar trái: Sản phẩm bán chạy -->
  <div style="width: 22%; padding: 10px; border: 1px solid #e0e0e0; background-color: #f9f9f9;">
    <h5 style="margin-bottom: 16px; font-weight: bold; color: #333;">Sản phẩm bán chạy</h5>

    <div style="margin-bottom: 16px; display: flex; gap: 10px;">
      <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" alt="Sản phẩm 1" style="flex-shrink: 0; width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
      <div>
        <p style="margin: 0 0 4px 0; font-weight: 500;">iPhone 13 Pro</p>
        <strong style="color: red;">11.990.000₫</strong>
      </div>
    </div>

    <div style="margin-bottom: 16px; display: flex; gap: 10px;">
      <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" alt="Sản phẩm 2" style="flex-shrink: 0; width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
      <div>
        <p style="margin: 0 0 4px 0; font-weight: 500;">Galaxy S22</p>
        <strong style="color: red;">10.990.000₫</strong>
      </div>
    </div>

    <div style="margin-bottom: 16px; display: flex; gap: 10px;">
      <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" alt="Sản phẩm 3" style="flex-shrink: 0; width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
      <div>
        <p style="margin: 0 0 4px 0; font-weight: 500;">iPhone 12</p>
        <strong style="color: red;">9.990.000₫</strong>
      </div>
    </div>
  </div>

  <!-- Nội dung phải: danh sách sản phẩm theo brand -->
<div style="width: 78%;">
  <div class="row gx-3 gy-3">
    <!-- Mỗi sản phẩm -->
    <div class="col-3">
      <div class="card shadow-sm rounded-3 h-100 d-flex flex-column" style="padding: 10px;">
        <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" class="card-img-top" alt="sp1" style="height: 200px; object-fit: contain;">
        <div class="card-body d-flex flex-column justify-content-between p-2" style="flex-grow: 1;">
          <div>
            <p class="card-title mb-1" style="font-weight: 500;">iPhone 15 Pro</p>
            <div><del style="color: gray; font-size: 13px;">29.990.000₫</del></div>
          </div>
          <strong style="color: red;">25.990.000₫</strong>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card shadow-sm rounded-3 h-100 d-flex flex-column" style="padding: 10px;">
        <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" class="card-img-top" alt="sp2" style="height: 200px; object-fit: contain;">
        <div class="card-body d-flex flex-column justify-content-between p-2" style="flex-grow: 1;">
          <div>
            <p class="card-title mb-1" style="font-weight: 500;">iPhone 12</p>
            <div><del style="color: gray; font-size: 13px;">19.990.000₫</del></div>
          </div>
          <strong style="color: red;">15.990.000₫</strong>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card shadow-sm rounded-3 h-100 d-flex flex-column" style="padding: 10px;">
        <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" class="card-img-top" alt="sp3" style="height: 200px; object-fit: contain;">
        <div class="card-body d-flex flex-column justify-content-between p-2" style="flex-grow: 1;">
          <div>
            <p class="card-title mb-1" style="font-weight: 500;">Samsung A54</p>
          </div>
          <strong style="color: red;">8.990.000₫</strong>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card shadow-sm rounded-3 h-100 d-flex flex-column" style="padding: 10px;">
        <img src="https://taostore.mobi/wp-content/uploads/2024/09/iphone-11-pro-max-64gb-quoc-te-chinh-hang-cu-p7277-300x300.png" class="card-img-top" alt="sp4" style="height: 200px; object-fit: contain;">
        <div class="card-body d-flex flex-column justify-content-between p-2" style="flex-grow: 1;">
          <div>
            <p class="card-title mb-1" style="font-weight: 500;">Xiaomi 13T</p>
          </div>
          <strong style="color: red;">9.990.000₫</strong>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

</div>
</div>
    <?= $Footer; ?>
<?= $this->include('partials/link-footer'); ?>
    <script>
        // Add interactive effects
        document.addEventListener('DOMContentLoaded', function () {
            // Product card hover effects
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 15px 35px rgba(0,0,0,0.1)';
                });

                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });

            // Sidebar item clicks
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            sidebarItems.forEach(item => {
                item.addEventListener('click', function () {
                    sidebarItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Search functionality
            const searchInput = document.querySelector('input[type="text"]');
            searchInput.addEventListener('focus', function () {
                this.style.borderColor = 'var(--primary-red)';
                this.style.boxShadow = '0 0 5px rgba(227,30,36,0.3)';
            });

            searchInput.addEventListener('blur', function () {
                this.style.borderColor = '';
                this.style.boxShadow = '';
            });
        });
    </script>
    <script>
        function startFlashSaleCountdown(durationInSeconds) {
            let timer = durationInSeconds, hours, minutes, seconds;
            const countdownElement = document.getElementById('flashCountdown');

            const countdownInterval = setInterval(function () {
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
