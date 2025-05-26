<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPhone - Điện thoại, laptop, tablet chính hãng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <base href="<?= base_url()?>">
    <style>
        :root {
            --primary-red: #e31e24;
            --secondary-red: #d61e24;
            --dark-bg: #1a1a1a;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background-color: var(--primary-red);
            padding: 0.5rem 0;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .sidebar {
            background-color: #f8f9fa;
            min-height: 600px;
            padding: 1rem;
        }

        .sidebar-item {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e9ecef;
            cursor: pointer;
        }

        .sidebar-item:hover {
            background-color: #e9ecef;
            margin: 0 -1rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .banner-section {
            
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 1rem 0;
        }

        .product-card {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 200px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #6c757d;
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--primary-red);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .price-original {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .price-current {
            color: var(--primary-red);
            font-weight: bold;
            font-size: 1.1rem;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin-bottom: 0.5rem;
        }

        .brand-banner {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            padding: 1rem;
            color: white;
            margin-bottom: 1rem;
        }

        .footer-custom {
            background-color: var(--dark-bg);
            color: white;
            padding: 2rem 0;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--primary-red);
        }

        footer.footer-custom {
            background-color: #f1f1f1;
            /* xám nhạt */
        }
    </style>
</head>
<body>
    <?php echo view('frontend/layout/header'); ?>
   <div class="container">
        <div class="row">
    <?php echo view($content); ?>
</div>
</div>
<?php echo view('frontend/layout/footer'); ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
