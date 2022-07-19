
<div class="mt-2 mb-4">
    <h1 class="title1 text-{{$text}}">Proof of Payment</h1>
</div>
<div class="row">
    <div class="col card bg-{{$bg}} shadow-lg p-4">
        
        <form method="post" autocomplete="off" action="{{action('SomeController@savedeposit')}}" enctype="multipart/form-data">
                <h5 class="text-{{$text}}">Upload Payment proof after payment.</h5>
                <input type="file" name="proof" class="form-control col-lg-4 bg-{{$bg}} text-{{$text}}" required><br>
                
                <h5 class="text-{{$text}}">Amount Paid:</h5>
                <input type="number" value="{{$amount}}" placeholder="$ 0" name="amount" class="form-control col-lg-4 bg-{{$bg}} text-{{$text}}" required><br>
                
                <h5 class="text-{{$text}}">Payment Mode Used:</h5>
                <select name="payment_mode" class="form-control col-lg-4 bg-{{$bg}} text-{{$text}}" required>
                    <option>Bank transfer</option>
                    <option>Ethereum</option>
                    <option>Bitcoin</option>
                    <option>Credit card</option>
                </select>
                <br> <br>
                <div >
                    <input type="submit" class="btn btn-{{$text}}" value="Submit payment">
                </div> 
                <!-- <input type="hidden" name="amount" value="{{$amount}}"> -->
                <input type="hidden" name="pay_type" value="{{$pay_type}}">
                <input type="hidden" name="plan_id" value="{{$plan_id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form> <br> <br>
        <div class=" shadow bg-{{$bg}} text-{{$text}} p-3">
            <h4>Contact management at<br> 
            <strong>{{$settings->contact_email}}</strong>
            <br>for other payment methods.</h4>
        </div>
    </div>
</div>