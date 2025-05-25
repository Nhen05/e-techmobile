<div class="container mt-5" style="max-width: 720px;">
  <h2>Giỏ hàng của bạn</h2>

  <div class="row mt-4 border-bottom pb-2 fw-bold" style="font-size: 0.9rem;">
    <div class="col-2">Sản phẩm</div>
    <div class="col-3"></div>
    <div class="col-2">Giá</div>
    <div class="col-2">Số lượng</div>
    <div class="col-2">Tổng tiền</div>
    <div class="col-1"></div>
  </div>

  <div class="row align-items-center py-3 border-bottom" style="font-size: 0.9rem;">
    <div class="col-2">
      <img
        src="https://taostore.mobi/wp-content/uploads/2021/11/iphone_13-_pro-2_2-300x300.jpg"
        alt="iPhone 13 Pro"
        style="width: 60px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
      >
    </div>
    <div class="col-3">
      iPhone 13 Pro | Chính hãng
    </div>
    <div class="col-2">
      11,700,000₫
    </div>
    <div class="col-2">
      <div class="input-group input-group-sm" style="max-width: 110px;">
        <button class="btn btn-outline-secondary" type="button" onclick="decreaseQty()">
          <i class="fas fa-minus"></i>
        </button>
        <input
          type="text"
          class="form-control text-center"
          value="1"
          aria-label="Số lượng"
          style="max-width: 50px;"
          readonly
        >
        <button class="btn btn-outline-secondary" type="button" onclick="increaseQty()">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="col-2">
      11,700,000₫
    </div>
    <div class="col-1 text-end">
      <button type="button" class="btn btn-link text-danger p-0" aria-label="Xóa sản phẩm">
        <i class="fas fa-trash-alt"></i>
      </button>
    </div>
  </div>

  <div class="mt-3">
    <div class="input-group mb-3">
      <span class="input-group-text bg-light border-0">
        <i class="fas fa-tag"></i>&nbsp;COUPON
      </span>
      <input type="text" class="form-control" placeholder="Coupon code">
      <button class="btn btn-danger" type="button">Apply coupon</button>
    </div>
  </div>

  <div class="row justify-content-end mt-4">
    <div class="col-4">
      <div class="d-flex justify-content-between fw-bold fs-5">
        <span>Tổng</span>
        <span>11,700,000₫</span>
      </div>
    </div>
  </div>

  <h3 class="mt-5">THÔNG TIN THANH TOÁN</h3>
  <div class="row mt-3">
    <div class="col-md-6 mb-3">
      <label for="ten" class="form-label">Tên <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="ten" placeholder="Họ và tên">
    </div>
    <div class="col-md-6 mb-3">
      <label for="diaChi" class="form-label">Địa chỉ giao sản phẩm <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="diaChi" placeholder="Số nhà và tên đường">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
      <input type="tel" class="form-control" id="phone" placeholder="Số điện thoại">
    </div>
    <div class="col-md-6 mb-3">
      <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
      <input type="email" class="form-control" id="email" placeholder="Địa chỉ email hóa đơn">
    </div>
  </div>

  <div class="mb-3">
    <label for="orderNotes" class="form-label">Order notes (optional)</label>
    <textarea class="form-control" id="orderNotes" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
  </div>

  <button type="button" class="btn btn-danger w-100 mt-4 mb-4">ĐẶT HÀNG</button>
</div>

<script>
  function increaseQty() {
    const input = document.querySelector('.input-group input');
    let qty = parseInt(input.value);
    input.value = qty + 1;
  }

  function decreaseQty() {
    const input = document.querySelector('.input-group input');
    let qty = parseInt(input.value);
    if (qty > 1) {
      input.value = qty - 1;
    }
  }
</script>
