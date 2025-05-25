        <style>
            :root {
                --primary-red: #e31e24;
                --secondary-red: #d61e24;
                --dark-bg: #1a1a1a;
                --light-gray: #f8f9fa;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #fff;
            }

            .navbar-custom {
                background-color: var(--primary-red);
                padding: 0.5rem 0;
            }

            .breadcrumb-custom {
                background: none;
                padding: 1rem 0;
            }

            .breadcrumb-custom .breadcrumb-item a {
                color: #666;
                text-decoration: none;
            }

            .product-main {
                background: white;
                border-radius: 10px;
                padding: 2rem;
                margin-bottom: 2rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .product-image-main {
                width: 100%;
                max-width: 400px;
                height: 400px;
                background: linear-gradient(135deg, #f8f9fa, #e9ecef);
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                margin-bottom: 1rem;
            }

            .discount-badge-large {
                position: absolute;
                top: 20px;
                left: 20px;
                background-color: var(--primary-red);
                color: white;
                padding: 0.5rem 1rem;
                border-radius: 25px;
                font-size: 1.1rem;
                font-weight: bold;
            }

            .color-variants {
                display: flex;
                gap: 0.5rem;
                margin: 1rem 0;
            }

            .color-variant {
                width: 60px;
                height: 60px;
                border: 2px solid #ddd;
                border-radius: 10px;
                cursor: pointer;
                transition: all 0.3s ease;
                background: linear-gradient(45deg, #f8f9fa, #e9ecef);
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .color-variant:hover,
            .color-variant.active {
                border-color: var(--primary-red);
                transform: scale(1.05);
            }

            .price-section {
                background: linear-gradient(135deg, #fff3f3, #ffebeb);
                padding: 1.5rem;
                border-radius: 15px;
                margin: 1rem 0;
            }

            .price-original {
                text-decoration: line-through;
                color: #999;
                font-size: 1.1rem;
            }

            .price-current {
                color: var(--primary-red);
                font-size: 1.8rem;
                font-weight: bold;
            }

            .btn-custom {
                padding: 0.75rem 2rem;
                border-radius: 25px;
                font-weight: bold;
                border: none;
                transition: all 0.3s ease;
            }

            .btn-buy-now {
                background: var(--primary-red);
                color: white;
            }

            .btn-buy-now:hover {
                background: var(--secondary-red);
                transform: translateY(-2px);
            }

            .btn-add-cart {
                background: #007bff;
                color: white;
            }

            .btn-add-cart:hover {
                background: #0056b3;
                transform: translateY(-2px);
            }

            .payment-options {
                background: var(--light-gray);
                padding: 1rem;
                border-radius: 10px;
                margin: 1rem 0;
            }

            .payment-option {
                padding: 0.5rem;
                margin: 0.25rem 0;
                background: white;
                border-radius: 8px;
                border-left: 4px solid var(--primary-red);
            }

            .specs-table {
                background: white;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .specs-table th {
                background: var(--light-gray);
                padding: 1rem;
                border: none;
            }

            .specs-table td {
                padding: 1rem;
                border-bottom: 1px solid #eee;
            }

            .review-section {
                background: white;
                border-radius: 10px;
                padding: 2rem;
                margin: 2rem 0;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .review-form {
                background: var(--light-gray);
                padding: 1.5rem;
                border-radius: 10px;
                margin: 1rem 0;
            }

            .review-item {
                border-bottom: 1px solid #eee;
                padding: 1rem 0;
            }

            .stars {
                color: #ffc107;
            }

            .related-products {
                background: white;
                border-radius: 10px;
                padding: 2rem;
                margin: 2rem 0;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .product-card-small {
                border: 1px solid #eee;
                border-radius: 10px;
                padding: 1rem;
                transition: all 0.3s ease;
                height: 100%;
            }

            .product-card-small:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }

            .sidebar-info {
                background: white;
                border-radius: 10px;
                padding: 1.5rem;
                margin-bottom: 1rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .promo-banner {
                background: linear-gradient(135deg, #00d4ff, #5b86e5);
                color: white;
                padding: 2rem;
                border-radius: 15px;
                margin: 1rem 0;
                text-align: center;
            }

            .footer-custom {
                background-color: var(--dark-bg);
                color: white;
                padding: 2rem 0;
                margin-top: 3rem;
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

            .floating-cart {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
            }

            .floating-cart .btn {
                border-radius: 50px;
                padding: 1rem 1.5rem;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }
        </style>
        <!-- Main Product Section -->
        <div class="col-lg-8">
            <div class="product-main">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Swiper main image -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-0-0_3.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-01_6.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>

                        <!-- Swiper thumbnails -->
                        <div class="swiper mySwiper mt-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-0-0_3.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-01_6.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1 class="mb-3">iPhone 13 Pro Max | Chính hãng</h1>
                        <div class="stars mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ms-2 text-muted">(3 đánh giá)</span>
                        </div>

                        <div class="price-section">
                            <div class="price-original">32.990.000đ</div>
                            <div class="price-current">29.490.000đ</div>
                        </div>

                        <!-- Quantity Selector -->
                        <div class="mb-3">
                            <label class="form-label">Số lượng:</label>
                            <div class="input-group" style="width: 150px;">
                                <button class="btn btn-outline-secondary" type="button" onclick="decreaseQty()">-</button>
                                <input type="number" class="form-control text-center" value="1" id="quantity" min="1">
                                <button class="btn btn-outline-secondary" type="button" onclick="increaseQty()">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-custom btn-buy-now">
                                <i class="fas fa-bolt me-2"></i>THÊM VÀO GIỎ HÀNG
                            </button>
                            <button class="btn btn-custom btn-add-cart">
                                <i class="fas fa-shopping-cart me-2"></i>MUA NGAY
                            </button>
                        </div>

                        <!-- Payment Options -->
                        <div class="payment-options">
                            <h6 class="mb-2">Tùy chọn thanh toán:</h6>
                            <div class="payment-option">
                                <i class="fas fa-credit-card me-2 text-primary"></i>
                                <strong>TRẢ GÓP QUA THẺ</strong><br>
                                <small>Qua thẻ tín dụng (Visa, Master Card, JCB)</small>
                            </div>
                            <div class="payment-option">
                                <i class="fas fa-university me-2 text-success"></i>
                                <strong>NHẬN TẠI VĂN PHÒNG</strong><br>
                                <small>Tại các văn phòng (Hà Nội)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            <div class="review-section">
                <h4 class="mb-4">Tìm hiểu về thông số cấu hình iPhone 13 Pro Max: Có mạnh không, có thể làm được những gì?</h4>
                <p class="text-muted">Anthony 08/09/2022 14:07</p>

                <div class="bg-light p-4 rounded mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5>iPhone 13 Pro Max với chip A15 Bionic mạnh mẽ</h5>
                            <p class="mb-0">Khám phá sức mạnh vượt trội của iPhone 13 Pro Max với chip A15 Bionic, camera ProRAW và nhiều tính năng đột phá khác.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-warning rounded p-3">
                                <i class="fas fa-mobile-alt fa-3x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-primary">Xem thêm <i class="fas fa-chevron-down ms-1"></i></button>
            </div>

            <!-- Reviews Section -->
            <div class="review-section">
                <h4 class="mb-4">Thêm đánh giá "iPhone 13 Pro Max | Chính hãng"</h4>

                <div class="review-form">
                    <div class="mb-3">
                        <label class="form-label">Đánh giá của bạn về sản phẩm:</label>
                        <div class="stars">
                            <i class="far fa-star star-rating" data-rating="1"></i>
                            <i class="far fa-star star-rating" data-rating="2"></i>
                            <i class="far fa-star star-rating" data-rating="3"></i>
                            <i class="far fa-star star-rating" data-rating="4"></i>
                            <i class="far fa-star star-rating" data-rating="5"></i>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Chia sẻ cảm nhận về sản phẩm..."></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Name *">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Email *">
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="saveInfo">
                        <label class="form-check-label" for="saveInfo">
                            Lưu tên, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.
                        </label>
                    </div>

                    <button class="btn btn-primary btn-custom">SUBMIT</button>
                </div>

                <!-- Existing Reviews -->
                <div class="mt-4">
                    <div class="review-item">
                        <div class="d-flex align-items-center mb-2">
                            <div class="bg-secondary rounded-circle me-3" style="width: 40px; height: 40px;"></div>
                            <div>
                                <strong>duynhan.advision</strong>
                                <div class="stars small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small class="text-muted">Đã mua hàng tại FPT City - 13/11/2021</small>
                            </div>
                        </div>
                        <p>Nhân viên nhiệt tình, sản phẩm chất lượng, ship nhanh và đúng hẹn</p>
                    </div>

                    <div class="review-item">
                        <div class="d-flex align-items-center mb-2">
                            <div class="bg-secondary rounded-circle me-3" style="width: 40px; height: 40px;"></div>
                            <div>
                                <strong>Phạm Văn Hải</strong>
                                <div class="stars small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small class="text-muted">Đã mua hàng tại FPT City - 18/11/2021</small>
                            </div>
                        </div>
                        <p>Sản phẩm ok, giao hàng nhanh, nhân viên tư vấn nhiệt tình</p>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products">
    <h4 class="mb-4">RELATED PRODUCTS</h4>
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="product-card-small position-relative">
                <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: var(--primary-red); color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem;">20%</div>
                <div class="text-center mb-3">
                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" alt="" style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px;">
                </div>
                <h6>iPhone 11 Pro Max | Chính hãng</h6>
                <div class="price-original small">18.990.000đ</div>
                <div class="price-current">7.990.000đ</div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="product-card-small position-relative">
                <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: var(--primary-red); color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem;">23%</div>
                <div class="text-center mb-3">
                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" alt="" style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px;">
                </div>
                <h6>iPhone 11 | Chính hãng</h6>
                <div class="price-original small">6.990.000đ</div>
                <div class="price-current">5.390.000đ</div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="product-card-small position-relative">
                <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: var(--primary-red); color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem;">25%</div>
                <div class="text-center mb-3">
                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" alt="" style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px;">
                </div>
                <h6>iPhone 12 Pro | Chính hãng VN/A</h6>
                <div class="price-original small">25.990.000đ</div>
                <div class="price-current">19.490.000đ</div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="product-card-small position-relative">
                <div class="discount-badge" style="position: absolute; top: 10px; left: 10px; background: var(--primary-red); color: white; padding: 0.25rem 0.5rem; border-radius: 15px; font-size: 0.8rem;">21%</div>
                <div class="text-center mb-3">
                    <img src="https://taostore.mobi/wp-content/uploads/2021/11/iphone-13-03_6.jpg" alt="" style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px;">
                </div>
                <h6>iPhone 12 Pro Max | Chính hãng</h6>
                <div class="price-original small">34.990.000đ</div>
                <div class="price-current">27.490.000đ</div>
            </div>
        </div>
    </div>
</div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Promo Banner -->
            <div class="promo-banner">
                <i class="fas fa-store fa-3x mb-3"></i>
                <h5>TechMobile</h5>
                <p>Uy tín là thương hiệu</p>
                <span class="badge bg-light text-dark">Gọi ngay: 0366.090.969</span>
            </div>

            <!-- Product Info -->
            <div class="sidebar-info">
                <h6 class="text-danger">Thông tin máy</h6>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i>Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất</li>
                    <li><i class="fas fa-check text-success me-2"></i>Bảo hành 12 tháng tại trung tâm bảo hành chính thức Apple Việt Nam + 6 tháng tại của hàng (6 tháng đầu 1 đổi 1 nếu có lỗi từ nhà sản xuất)</li>
                </ul>
            </div>

            <!-- Payment Options -->
            <div class="sidebar-info">
                <h6 class="text-danger">Chính sách ưu đãi dành cho Member Tạo Store:</h6>
                <ul class="list-unstyled small">
                    <li><i class="fas fa-credit-card me-2 text-primary"></i>Giảm thêm 500K khi thanh toán bằng thẻ tín dụng HSBC</li>
                    <li><i class="fas fa-university me-2 text-success"></i>Giảm 300K khi thanh toán qua thẻ OCB</li>
                    <li><i class="fas fa-percent me-2 text-warning"></i>Giảm 400.000đ khi thanh toán bằng thẻ tín dụng Home Credit</li>
                    <li><i class="fas fa-mobile-alt me-2 text-info"></i>Giảm thêm 700.000đ khi thanh toán qua Kredivo</li>
                    <li><i class="fas fa-gift me-2 text-danger"></i>Ưu đãi hot đổi cũ - ưu đãi tới 30 triệu cho khách hàng doanh nghiệp khi mua số lượng nhiều</li>
                </ul>
            </div>

            <!-- Technical Specs -->
            <div class="sidebar-info">
                <h6 class="text-danger">Thông số kỹ thuật</h6>
                <table class="table table-sm">
                    <tr>
                        <td><strong>Kích thước màn hình:</strong></td>
                        <td>6.7 inches</td>
                    </tr>
                    <tr>
                        <td><strong>Công nghệ màn hình:</strong></td>
                        <td>OLED</td>
                    </tr>
                    <tr>
                        <td><strong>Camera sau:</strong></td>
                        <td>12MP /1.5, Camera góc rộng: 12MP /1.8, Camera tele: 12MP /2.8</td>
                    </tr>
                    <tr>
                        <td><strong>Camera trước:</strong></td>
                        <td>12MP /2.2</td>
                    </tr>
                    <tr>
                        <td><strong>Dung lượng bộ nhớ:</strong></td>
                        <td>8 GB</td>
                    </tr>
                    <tr>
                        <td><strong>Bộ nhớ trong:</strong></td>
                        <td>128 GB</td>
                    </tr>
                    <tr>
                        <td><strong>Pin:</strong></td>
                        <td>4.352mAh</td>
                    </tr>
                    <tr>
                        <td><strong>Hệ điều hành:</strong></td>
                        <td>iOS15</td>
                    </tr>
                </table>
                <button class="btn btn-outline-primary btn-sm">Xem cấu hình chi tiết <i class="fas fa-chevron-down"></i></button>
            </div>

        </div>
        <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        thumbs: {
            swiper: swiper,
        },
    });
</script>
