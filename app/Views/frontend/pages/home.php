<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPhone - Điện thoại, laptop, tablet chính hãng</title>
  <?= $this->include('partials/link-header'); ?>
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
       <?= $Header; ?>
   <div class="container">
        <div class="row">
    <!-- Sidebar -->
 <div class="col-md-2 sidebar">
     <div class="sidebar-item">
         <i class="fas fa-mobile-alt me-2"></i>Điện thoại
     </div>
     <div class="sidebar-item">
         <i class="fas fa-star me-2"></i>Thương hiệu nổi bật
     </div>
     <div class="sidebar-item">
         <i class="fas fa-tags me-2"></i>Giá tốt mỗi ngày
     </div>
     <div class="sidebar-item">
         <i class="fas fa-sync-alt me-2"></i>Thu cũ đổi mới
     </div>
     <div class="sidebar-item">
         <i class="fas fa-shield-alt me-2"></i>Bảo hành & sửa chữa
     </div>
     <div class="sidebar-item">
         <i class="fas fa-box-open me-2"></i>Hàng sắp về
     </div>
     <div class="sidebar-item">
         <i class="fas fa-bolt me-2"></i>Flash Sale
     </div>
     <div class="sidebar-item">
         <i class="fas fa-gift me-2"></i>Quà tặng kèm
     </div>
     <div class="sidebar-item">
         <i class="fas fa-percentage me-2"></i>Khuyến mãi
     </div>
     <div class="sidebar-item">
         <i class="fas fa-question-circle me-2"></i>Hỗ trợ mua hàng
     </div>
 </div>
 <!-- Main Content -->
 <div class="col-md-10">
     <!-- Banner Section -->
<div class="banner-section p-0 ">
  <div class="row gx-3" style="height: 300px;">

    <!-- Slider bên trái -->
    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0" style="height: 100%;">
      <div id="phoneCarousel" class="carousel slide h-100" data-bs-ride="carousel" style="background: transparent;">
        <div class="carousel-inner h-100">

          <div class="carousel-item active h-100" style="background: transparent;">
            <img src="https://taostore.mobi/wp-content/uploads/2021/11/eries-7-.webp"
              class="d-block w-100 h-100" style="object-fit: cover;" alt="Slide 1">
          </div>

          <div class="carousel-item h-100" style="background: transparent;">
            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/s25-home-moi.png"
              class="d-block w-100 h-100" style="object-fit: cover;" alt="Slide 2">
          </div>

          <div class="carousel-item h-100" style="background: transparent;">
            <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:90/plain/https://dashboard.cellphones.com.vn/storage/poco-x7-moi-home.jpg"
              class="d-block w-100 h-100" style="object-fit: cover;" alt="Slide 3">
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#phoneCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#phoneCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </div>

<!-- Ảnh bên phải -->
<div class="col-lg-4 col-md-12 d-flex flex-column"
     style="height: 300px; gap: 6px;">

  <a href="#" class="d-block" style="height: 96px;">
    <img src="https://taostore.mobi/wp-content/uploads/2021/11/a52s-r-690-300-max.webp"
         class="w-100 h-100" style="object-fit: cover; object-position: top center;" alt="Banner phụ 1">
  </a>

  <a href="#" class="d-block" style="height: 96px;">
    <img src="https://taostore.mobi/wp-content/uploads/2021/11/mn-Right_Banner_Desktop_2_.webp"
         class="w-100 h-100" style="object-fit: cover; object-position: top center;" alt="Banner phụ 2">
  </a>

  <a href="#" class="d-block" style="height: 96px;">
    <img src="https://taostore.mobi/wp-content/uploads/2021/11/ltRB.webp"
         class="w-100 h-100" style="object-fit: cover; object-position: top center;" alt="Banner phụ 3">
  </a>

</div>


  </div>
</div>
 <!-- Promotional Banners -->
     <div class="row mb-4 mt-0">
         <!-- Nếu blackFriday.gif nằm cùng thư mục với file HTML -->
         <img src="<?= base_url('assets/images/blackFriday.gif') ?>" alt="Black Friday Banner" />
     </div>
     <!-- Categories Section -->
     <div class="mb-4">
         <div class="row">

             <!-- Một item mẫu áp dụng cho tất cả -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_59.png"
                         alt="Apple" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Copy và thay đổi hãng dưới đây -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_60.png"
                         alt="Samsung" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Thêm các hãng tiếp theo giống hệt cấu trúc trên -->
             <!-- Xiaomi -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_61.png"
                         alt="Xiaomi" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- OPPO -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_62.png"
                         alt="OPPO" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Vivo -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/t/_/t_i_xu_ng_67_.png"
                         alt="Vivo" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Realme -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_63.png"
                         alt="realme" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Nokia -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_37_1.png"
                         alt="Nokia" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Asus -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_67.png"
                         alt="Asus" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Infinix -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/i/n/infinixlogo.png"
                         alt="Infinix" style="width:100%; height:auto;">
                 </div>
             </div>

             <!-- Tecno -->
             <div class="col-md-2 col-4 mb-3 text-center">
                 <div class="border rounded-3 py-2 px-2 bg-white">
                     <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:50/q:30/plain/https://cellphones.com.vn/media/tmp/catalog/product/f/r/frame_69_1_.png"
                         alt="Tecno" style="width:100%; height:auto;">
                 </div>
             </div>

         </div>
     </div>
     <div class="mb-4 row g-3">
         <h4 class="fw-bold mb-4 text-dark text-uppercase">GỢI Ý THEO NHU CẦU</h4>
         <!-- Tiêu chí -->
         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Chơi game
                 </div>
                 <img src="https://cdn.tgdd.vn/Files/2021/03/12/1334681/cach-tang-toc-do-choi-game-tren-android_800x450.jpg"
                     alt="Chơi game" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Điện thoại gập
                 </div>
                 <img src="https://cdn.tgdd.vn/Files/2020/09/15/1290409/galaxyzfold2gold-38-_2048x1152.jpg"
                     alt="Điện thoại gập" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Chụp ảnh đẹp
                 </div>
                 <img src="https://cdn.tgdd.vn/Files/2018/06/19/1096304/top-3-chup-hinh-dep-nhat-hien-nay-13.jpg"
                     alt="Chụp ảnh đẹp" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Livestream
                 </div>
                 <img src="https://cdn11.dienmaycholon.vn/filewebdmclnew/public/userupload/files/KNMS/1-tong-hop-dien-thoai-livestream-dep-nhat-va-dang-mua-hien-nay.jpg"
                     alt="Livestream" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Dung lượng lớn
                 </div>
                 <img src="https://cdn.tgdd.vn/Files/2023/07/10/1537687/iphone-bi-loi-day-bo-nho-3-100723-213749.jpg"
                     alt="Dung lượng lớn" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Pin trâu
                 </div>
                 <img src="https://beta-api.bachlongmobile.com/media/.renditions/wysiwyg/16_8.jpg"
                     alt="Pin trâu" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Cấu hình cao
                 </div>
                 <img src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/10/snapdragon-8-gen-2.jpg"
                     alt="Cấu hình cao" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Điện thoại AI
                 </div>
                 <img src="https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture/News/News_expe_13929/13929.png?version=221751"
                     alt="Điện thoại AI" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>

         <div class="col-4 col-md-2" style="position: relative;">
             <div class="position-relative border rounded overflow-hidden" style="background:#fff;">
                 <div
                     style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-weight:bold; color: #fff; padding: 4px 8px; font-size: 0.85rem; border-radius: 4px;">
                     Điện thoại phổ thông
                 </div>
                 <img src="https://media.thuonghieuvaphapluat.vn/upload/2017/02/09/nhung-dien-thoai-cuc-gach-nao-dang-duoc-ua-chuong-nhat.jpg"
                     alt="Phổ thông" style="width:100%; height:120px; object-fit:cover;">
             </div>
         </div>
     </div>
     <!-- Product Section -->
     <div class="mb-4">
         <div class="d-flex justify-content-between align-items-center mb-3">
             <h4>ĐIỆN THOẠI NỔI BẬT NHẤT</h4>
             <a href="#" class="text-decoration-none">Xem tất cả <i class="fas fa-arrow-right"></i></a>
         </div>

         <div class="row">
             <!-- Product Cards -->
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-12-pro-max_4__7-300x300.jpg"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>

             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>

             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- FLASH SALE -->
     <div class="mb-4">
         <div class="d-flex justify-content-between align-items-center mb-3">
             <h4 style="color: red; font-weight: bold;">FLASH SALE 🔥</h4>
             <div style="font-size: 14px; color: gray;">
                 Kết thúc sau: <span id="flashCountdown"
                     style="color: red; font-weight: bold;">00:59:59</span>
             </div>
         </div>

         <div class="row">
             <!-- Sản phẩm Flash Sale -->
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -20%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-14-pro_1.png"
                             alt="iPhone 14 Pro" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 14 Pro | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             27.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">22.490.000đ</div>
                     </div>
                 </div>
             </div>

             <!-- Copy block này cho các sản phẩm khác -->
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Best Selling Phones Section -->
     <div style="margin-bottom: 30px;">
         <div
             style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
             <h4 style="margin:0; font-weight: 700; font-size: 1.5rem; color: #333;">SẢN PHẨM BÁN CHẠY NHẤT
             </h4>
             <a href="#" style="text-decoration: none; color: #007bff; font-weight: 500; font-size: 0.9rem;">
                 Xem tất cả <span style="font-size: 1.2rem;">→</span>
             </a>
         </div>

         <div class="row">
             <!-- Sản phẩm Flash Sale -->
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -20%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-14-pro_1.png"
                             alt="iPhone 14 Pro" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 14 Pro | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             27.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">22.490.000đ</div>
                     </div>
                 </div>
             </div>

             <!-- Copy block này cho các sản phẩm khác -->
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-2 col-sm-4 col-6 mb-4 product-card">
                 <div
                     style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #fff; position: relative;">
                     <div
                         style="position: absolute; top: 8px; left: 8px; background-color: red; color: white; padding: 2px 6px; font-size: 12px; border-radius: 4px;">
                         -15%
                     </div>
                     <div style="text-align: center; padding: 16px;">
                         <img src="https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-13_1.png"
                             alt="iPhone 13" style="width: 100%; height: auto;">
                         <h6 style="margin-top: 10px; font-size: 14px;">iPhone 13 | Chính hãng</h6>
                         <div style="color: gray; text-decoration: line-through; font-size: 13px;">
                             21.990.000đ</div>
                         <div style="color: red; font-weight: bold; font-size: 15px;">18.690.000đ</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <h4 style="font-weight: 700; font-size: 1.5rem; color: #333; margin-bottom: 20px;">SO SÁNH ĐIỆN THOẠI
         HOT</h4>
     <div style="display: flex; gap: 15px; flex-wrap: wrap;">

         <!-- So sánh 1 -->
         <div
             style="flex: 1 1 350px; background: #fff; border-radius: 8px; padding: 15px; border: 1px solid #ddd; box-shadow: 0 1px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
             <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-14-pro_2__5.png"
                 alt="iPhone 14 Pro Max vs 13 Pro Max"
                 style="width: 100%; max-width: 280px; height: auto; border-radius: 6px; object-fit: cover; margin-bottom: 15px;">
             <strong
                 style="display: block; margin-bottom: 12px; font-size: 1.1rem; color: #222; text-align: center;">iPhone
                 14 Pro Max vs iPhone 13 Pro Max</strong>
             <ul style="padding-left: 20px; margin: 0; color: #555; font-size: 14px;">
                 <li>Hiệu năng A16 vs A15</li>
                 <li>Camera nâng cấp</li>
                 <li>Màn hình sáng hơn</li>
             </ul>
         </div>

         <!-- So sánh 2 -->
         <div
             style="flex: 1 1 350px; background: #fff; border-radius: 8px; padding: 15px; border: 1px solid #ddd; box-shadow: 0 1px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
             <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-13-pro-max-128gb-cu-dep_3_.png"
                 alt="Samsung S24 Ultra vs iPhone 15 Pro Max"
                 style="width: 100%; max-width: 280px; height: auto; border-radius: 6px; object-fit: cover; margin-bottom: 15px;">
             <strong
                 style="display: block; margin-bottom: 12px; font-size: 1.1rem; color: #222; text-align: center;">Samsung
                 S24 Ultra vs iPhone 15 Pro Max</strong>
             <ul style="padding-left: 20px; margin: 0; color: #555; font-size: 14px;">
                 <li>Zoom xa vs Quay ProRes</li>
                 <li>Màn hình AMOLED vs Super Retina</li>
                 <li>Android vs iOS</li>
             </ul>
         </div>

     </div>


x` </div>
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
