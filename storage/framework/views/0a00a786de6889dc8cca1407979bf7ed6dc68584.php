
<div class="mt-2 mb-4">
    <h1 class="title1 text-<?php echo e($text); ?>">Proof of Payment</h1>
</div>
<div class="row">
    <div class="col card bg-<?php echo e($bg); ?> shadow-lg p-4">
        
        <form method="post" action="<?php echo e(action('SomeController@savedeposit')); ?>" enctype="multipart/form-data">
                    <h5 class="text-<?php echo e($text); ?>">Upload Payment proof after payment. (Ignore if paid with card).</h5>
                    <input type="file" name="proof" class="form-control col-lg-4 bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
                <br>
                
                <h5 class="text-<?php echo e($text); ?>">Payment Mode Used:</h5>
                <select name="payment_mode" class="form-control col-lg-4 bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
                    <option>Bank transfer</option>
                    <option>Ethereum</option>
                    <option>Bitcoin</option>
                    <option>Credit card</option>
                </select>
                <br> <br>
                <div >
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit payment">
                </div> 
                <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                <input type="hidden" name="pay_type" value="<?php echo e($pay_type); ?>">
                <input type="hidden" name="plan_id" value="<?php echo e($plan_id); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </form> <br> <br>
        <div class=" shadow bg-<?php echo e($bg); ?> text-<?php echo e($text); ?> p-3">
            <h4>Contact management at<br> 
            <strong><?php echo e($settings->contact_email); ?></strong>
            <br>for other payment methods.</h4>
        </div>
    </div>
</div>