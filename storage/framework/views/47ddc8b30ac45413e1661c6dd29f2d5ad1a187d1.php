<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="empty-cart-container justify-content-start" style="padding-top: 30px;padding-bottom: 30px">
                    <h1>Thanh toán chuyển khoản</h1>
                    <p class="mt-2">
                        Ngân hàng: <b><?php echo e($channel->bankName); ?></b>
                    </p>
                    <div>
                        STK: <b><?php echo e($channel->bankNumber); ?></b>
                    </div>
                    <div>
                        Số tiền: <b><?php echo e(handlePrice($order->total_amount)); ?></b>
                    </div>
                    <div>
                        Nội dung: <b><?php echo e($channel->getContent($order)); ?></b>
                    </div>
                    <?php if($order->status != 'paid'): ?>
                        <div class="mt-2 d-flex justify-content-center">
                            <img style="max-width: 300px; max-height: 300px;" src="<?php echo e($channel->getQrCodeSource($order)); ?>" alt="">
                        </div>
                        <div class="mt-2 d-flex align-items-center alert alert-info" role="alert">
                            <div class="mr-3">
                                Đang đợi thanh toán
                            </div>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden"></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h3>Hướng dẫn</h3>
                            <ul class="ml-4">
                                <li style="list-style: unset">Đăng nhập ứng dụng Mobile Banking, chọn chức năng QRPay và quét mã QR.</li>
                                <li style="list-style: unset">Kiểm tra thông tin số tiền, và nội dung</li>
                                <li style="list-style: unset"><strong>Lưu ý: Không chỉnh sửa nội dung và số tiền chuyển khoản</strong></li>
                                <li style="list-style: unset">Xác nhận thanh toán và hoàn tất giao dịch.</li>
                            </ul>
                        </div>
                        <div class="alert alert-info mt-2" role="alert">
                            Nếu quá 5 phút sau chuyển khoản giao dịch không thành công, hãy liên hệ tôi qua Facebook
                        </div>
                    <?php else: ?>
                        <div class="alert alert-success mt-3" role="alert">
                            Thanh toán thành công, hãy kiểm tra khoá học trong danh sách khoá học của bạn
                        </div>
                        <a href="/panel/webinars/purchases" class="mt-3 d-flex btn btn-sm btn-primary nav-start-a-live-btn">
                            Danh sách khoá học
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if($order->status != 'paid'): ?>
        <script>
            setInterval(function () {
                fetch('/payments/get-order-by-code/<?php echo e($order->reference_id); ?>')
                    .then((res) => res.json())
                    .then((res) => {
                        if(res.data.status === 'paid')  {
                            location.reload()
                        }
                    })
            }, 2000)
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/rocket/rocket/resources/views/web/default/payment/bank-transfer.blade.php ENDPATH**/ ?>