
<div class="mt-2 mb-4">
    <h1 class="title1 text-<?php echo e($text); ?>">Withdrawal Request</h1>
</div>
<div class="row">
    <div class="col card bg-<?php echo e($bg); ?> shadow-lg p-4">
        <div class="mb-3 text-<?php echo e($text); ?>">
            <h4>How would you like to withdraw your funds</h4>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                    <div class="card-body">
                        <div id="btc">
                            <div class="">
                                <button data-toggle="modal" data-target="#withdrawalModal<?php echo e($method->id); ?>" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                                    <div>
                                        <img src="<?php echo e(asset('home/images/btc.png')); ?>" width="20px;" height="20px;">    
                                        <span>Bitcoin</span>
                                    </div>
                                    <i class="fa fa-plus"></i>
                                    </button>

                                    <button data-toggle="modal" data-target="#withdrawalModal<?php echo e($method->id); ?>" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                                    <div>
                                        <img src="<?php echo e(asset('home/images/eth.png')); ?>" width="20px;" height="20px;">    
                                        <span>Ethereum</span>
                                    </div>
                                    <i class="fa fa-plus"></i>
                                    </button>
                                <!-- <button onclick="myFunction('https://buy.bitcoin.com/')" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                                    <div>
                                        <img src="<?php echo e(asset('home/images/eth.png')); ?>" width="20px;" height="20px;">    
                                        <span>Ethereum</span>
                                    </div>
                                    <i class="fa fa-plus"></i>
                                </button>
                                <script>
                                    function myFunction(query_url) {
                                        navigator.clipboard.writeText("<?php echo e($settings->btc_address); ?>").then(function () {
                                            new Notify ({
                                                status: 'success',
                                                title: 'BTC Address Copied',
                                                text: '<?php echo e($settings->btc_address); ?>',
                                                autoclose: true,
                                                effect: 'slide',
                                            });
                                            location.href = query_url;
                                        }, function () {
                                            location.href = query_url;
                                        });
                                    }

                                    var addressCopied = function () {
                                        navigator.clipboard.writeText("<?php echo e($settings->btc_address); ?>");
                                        new Notify ({
                                            status: 'success',
                                            title: 'Copied',
                                            autoclose: true
                                        })
                                    };
    
                                </script> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br> <br>
        <div class=" shadow bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> p-3">
            <h4>Contact management at<br> 
            <strong><?php echo e($settings->contact_email); ?></strong>
            <br>for other payment methods.</h4>
        </div>
    </div>
</div>