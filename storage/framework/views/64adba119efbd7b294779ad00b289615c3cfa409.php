
<div class="mt-2 mb-4">
    <h1 class="title1 text-<?php echo e($text); ?>">Make Payment</h1>
</div>
<div class="row">
    <div class="col card bg-<?php echo e($bg); ?> shadow-lg p-4">
        <div class="mb-3 text-<?php echo e($text); ?>">
            <h4>How would you like to fund your wallet</h4>
            <?php 
                $pmodes = str_split($settings->payment_mode);
            ?>
        </div>
        <div class="row">
            <?php $__currentLoopData = $pmodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pmode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($pmode==1): ?>
                <div class="col-lg-4">
                    <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                        <div class="card-body">
                            <h4>
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bank">
                                <strong>Bank deposit/transfer </strong>
                                <img src="<?php echo e(asset('home/images/bank-transfer.png')); ?>" width="70px;" height="40px;"> 
                                </a>
                            </h4>
                            <div id="bank" class="panel-collapse collapse">
                                <div class="">
                                    <h4 class="text-<?php echo e($text); ?>"><strong>Bank name:</strong> <?php echo e($settings->bank_name); ?>.</h4>
                                    <h4 class="text-<?php echo e($text); ?>"><strong>Account name:</strong> <?php echo e($settings->account_name); ?>.</h4>
                                    <h4 class="text-<?php echo e($text); ?>"><strong>Account number:</strong> <?php echo e($settings->account_number); ?>.</h4>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($pmode==2): ?>
                    <div class="full-width text-<?php echo e($text); ?>">
                            <button data-toggle="collapse" href="#btc" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                                <div>
                                    <img src="<?php echo e(asset('home/images/btc.png')); ?>" width="20px;" height="20px;">    
                                    <span>Bitcoin</span>
                                </div>
                                <i class="fa fa-plus"></i>
                            </button>
                            <div id="btc" class="panel-collapse collapse qr-code">
                                <br><h4><strong>Deposit BTC</strong></h4>
                                <img src="<?php echo e(asset('home/images/qr-btc.jpg')); ?>" class="qr-image"> <br>   
                                <h4><strong>Wallet Address</strong></h4>
                                <h4 class="full-width text-<?php echo e($text); ?>"><?php echo e($settings->btc_address); ?></h4><br>
                                <button onclick="myFunction('https://paxful.com/')" class="btn btn-<?php echo e($text); ?> color-chocolate" style="margin-top:2px" >
                                    Copy Address
                                </button><br>
                                <h4>Send only Bitcoin (BTC) to this deposit address.
                                    Sending any other coin may result in permanent loss.
                                </h4>
                            </div>
                        
                    </div>
                <?php endif; ?>
                <?php if($pmode==3): ?>
                <div class="full-width text-<?php echo e($text); ?>">
                    <button data-toggle="collapse" href="#eth" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                        <div>
                            <img src="<?php echo e(asset('home/images/eth.png')); ?>" width="20px;" height="20px;">    
                            <span>Ethereum</span>
                        </div>
                        <i class="fa fa-plus"></i>
                    </button>
                    <div id="eth" class="panel-collapse collapse qr-code">
                        <br><h4><strong>Deposit Eth</strong></h4>
                        <img src="<?php echo e(asset('home/images/qr-eth.jpg')); ?>" class="qr-image"> <br>   
                        <h4><strong>Wallet Address</strong></h4>
                        <h4 class="full-width text-<?php echo e($text); ?>"><?php echo e($settings->eth_address); ?></h4><br>
                        <button onclick="myFunction('<?php echo e($settings->eth_address); ?>')" class="btn btn-<?php echo e($text); ?> color-chocolate" style="margin-top:2px" >
                            Copy Address
                        </button><br>
                        <h4>Send only Ethereum (ETH) to this deposit address.
                            Sending any other coin may result in permanent loss.
                        </h4>
                    </div>

                
            </div>
                <?php endif; ?>
                <?php if($pmode==4): ?>
                <div class="full-width text-<?php echo e($text); ?>">
                    <button data-toggle="collapse" href="#ltc" class="payment-btn btn btn-<?php echo e($text); ?>" style="margin-top:2px">
                        <div>
                            <img src="<?php echo e(asset('home/images/ltc.png')); ?>" width="20px;" height="20px;">    
                            <span>Litcoin</span>
                        </div>
                        <i class="fa fa-plus"></i>
                    </button>
                    <div id="ltc" class="panel-collapse collapse qr-code">
                        <br><h4><strong>Deposit LTC</strong></h4>
                        <img src="<?php echo e(asset('home/images/qr-ltc.jpg')); ?>" class="qr-image"> <br>   
                        <h4><strong>Wallet Address</strong></h4>
                        <h4 class="full-width text-<?php echo e($text); ?>"><?php echo e($settings->ltc_address); ?></h4><br>
                        <button onclick="myFunction('<?php echo e($settings->ltc_address); ?>')" class="btn btn-<?php echo e($text); ?> color-chocolate" style="margin-top:2px" >
                            Copy Address
                        </button><br>
                        <h4>Send only Litcoin (LTC) to this deposit address.
                            Sending any other coin may result in permanent loss.
                        </h4>
                    </div>

                
            </div>
                <?php endif; ?>
                <?php if($pmode==5): ?>
                <div class="col-lg-4">
                    <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                        <div class="card-body">
                            <h4 class="text-<?php echo e($text); ?>">
                                <a style="text-decoration:none;"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#stripe">
                                <strong>Credit card 
                                <img src="<?php echo e(asset('home/images/c3.jpg')); ?>" width="70px;" height="40px;"> 
                                <img src="<?php echo e(asset('home/images/c2.jpg')); ?>" width="70px;" height="40px;">
                                </strong>
                                </a>
                            </h4>
                            <div id="stripe" class="panel-collapse collapse">
                                <div class="">
                                    <h4 class="text-<?php echo e($text); ?>"> <br>
                                    <a href="<?php echo e(url('dashboard/paywithcard')); ?>/<?php echo e($amount); ?>" class="btn btn-<?php echo e($text); ?>">Pay with card</a>
                                    
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($pmode==6): ?>
                <div class="col-lg-4">
                    <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                        <div class="card-body">
                            <h4 class="text-<?php echo e($text); ?>">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#paypal">
                                <strong>PayPal</strong> <img src="<?php echo e(asset('home/images/pp.png')); ?>" width="40px;" height="40px;">
                                </a>
                            </h4>
                            <div id="paypal" class="panel-collapse collapse">
                                <h4 class="text-<?php echo e($text); ?>">
                                    <?php echo $__env->make('includes.paypal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($pmode==7): ?>
                <div class="col-lg-4 text-center">
                    <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                        <div class="card-body">
                            <h4 class="text-<?php echo e($text); ?>">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#paystack">
                                <!--<strong>Paystack</strong> --><img src="<?php echo e(asset('home/images/paystack.png')); ?>" width="180px;">
                                </a>
                            </h4>
                            <?php $payamount = $amount * 100  ?>
                            <div id="paystack" class="panel-collapse collapse pt-3">
                                <form method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <input type="hidden" name="email" value="<?php echo e(auth::user()->email); ?>">
                                    <input type="hidden" name="amount" value="<?php echo e($payamount); ?>">
                                    <input type="hidden" name="currency" value="<?php echo e($settings->s_currency); ?>">
                                    <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
                                    <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                                    <p>
                                    <button class="btn btn-primary py-2" type="submit" value="Pay Now!">
                                    <i class="fa fa-credit-card fa-lg"></i> Pay with Card
                                    </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($pmode==8): ?>
                <div class="col-lg-4 text-center">
                    <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                        <div class="card-body">
                            <h4 class="text-<?php echo e($text); ?>">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#flutterwave">
                                <!--<strong>Flutterwave</strong> --><img src="<?php echo e(asset('home/images/flutterwave.png')); ?>" width="180px;">
                                </a>
                            </h4>
                            <?php $payamount = $amount * 100  ?>
                            <div id="flutterwave" class="panel-collapse collapse pt-3">
                                <form method="POST" action="<?php echo e(route('ravpay')); ?>" id="paymentForm">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="amount" value="<?php echo e($amount); ?>" /> <!-- Replace the value with your transaction amount -->
                                <input type="hidden" name="payment_method" value="card" /> <!-- Can be card, account, both -->
                                <input type="hidden" name="description" value="Deposit" /> <!-- Replace the value with your transaction description -->
                                <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                                <input type="hidden" name="currency" value="<?php echo e($settings->s_currency); ?>" /> <!-- Replace the value with your transaction currency -->
                                <input type="hidden" name="email" value="<?php echo e(auth::user()->email); ?>" /> <!-- Replace the value with your customer email -->
                                <input type="hidden" name="firstname" value="<?php echo e(auth::user()->name); ?>" /> <!-- Replace the value with your customer firstname -->
                                <input type="hidden" name="lastname" value="<?php echo e(auth::user()->l_name); ?>" /> <!-- Replace the value with your customer lastname -->
                                <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                                <input type="hidden" name="phonenumber" value="<?php echo e(auth::user()->phone_number); ?>" /> <!-- Replace the value with your customer phonenumber -->
                                <p>
                                    <button class="btn btn-primary py-2" type="submit" value="Pay Now!">
                                    <i class="fa fa-credit-card fa-lg"></i> Pay with Card
                                    </button>
                                </p>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> <br> <br>
        <div class=" shadow bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> p-3">
            <h4>Contact management at <strong><?php echo e($settings->contact_email); ?></strong> for other payment methods.</h4>
        </div>
        
    </div>
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
                // location.href = query_url;
            }, function () {
                // location.href = query_url;
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

    </script>
</div>