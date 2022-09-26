
<div class="mt-2 mb-4">
    <h1 class="title1 text-{{$text}}">Make Payment</h1>
</div>
<div class="row">
    <div class="col card bg-{{$bg}} shadow-lg p-4">
        <div class="mb-3 text-{{$text}}">
            <h4>How would you like to fund your wallet</h4>
            <?php 
                $pmodes = str_split($settings->payment_mode);
            ?>
        </div>
        <div class="row">
            @foreach($pmodes as $pmode)
                @if($pmode==1)
                <div class="col-lg-4">
                    <div class="card bg-{{$bg}} shadow text-{{$text}}">
                        <div class="card-body">
                            <h4>
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bank">
                                <strong>Bank deposit/transfer </strong>
                                <img src="{{ asset('home/images/bank-transfer.png')}}" width="70px;" height="40px;"> 
                                </a>
                            </h4>
                            <div id="bank" class="panel-collapse collapse">
                                <div class="">
                                    <h4 class="text-{{$text}}"><strong>Bank name:</strong> {{$settings->bank_name}}.</h4>
                                    <h4 class="text-{{$text}}"><strong>Account name:</strong> {{$settings->account_name}}.</h4>
                                    <h4 class="text-{{$text}}"><strong>Account number:</strong> {{$settings->account_number}}.</h4>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
                @endif
                @if($pmode==2)
                    <div class="full-width text-{{$text}}">
                            <button data-toggle="collapse" href="#btc" class="payment-btn btn btn-{{$text}}" style="margin-top:2px">
                                <div>
                                    <img src="{{ asset('home/images/btc.png')}}" width="20px;" height="20px;">    
                                    <span>Bitcoin</span>
                                </div>
                                <i class="fa fa-plus"></i>
                            </button>
                            <div id="btc" class="panel-collapse collapse qr-code">
                                <br><h4><strong>Deposit BTC</strong></h4>
                                <img src="{{ asset('home/images/qr-btc.jpg')}}" class="qr-image"> <br>   
                                <h4><strong>Wallet Address</strong></h4>
                                <h4 class="full-width text-{{$text}}">{{$settings->btc_address}}</h4><br>
                                <button onclick="myFunction('https://paxful.com/')" class="btn btn-{{$text}} color-chocolate" style="margin-top:2px" >
                                    Copy Address
                                </button><br>
                                <h4>Send only Bitcoin (BTC) to this deposit address.
                                    Sending any other coin may result in permanent loss.
                                </h4>
                            </div>
                        
                    </div>
                @endif
                @if($pmode==3)
                <div class="full-width text-{{$text}}">
                    <button data-toggle="collapse" href="#eth" class="payment-btn btn btn-{{$text}}" style="margin-top:2px">
                        <div>
                            <img src="{{ asset('home/images/eth.png')}}" width="20px;" height="20px;">    
                            <span>Ethereum</span>
                        </div>
                        <i class="fa fa-plus"></i>
                    </button>
                    <div id="eth" class="panel-collapse collapse qr-code">
                        <br><h4><strong>Deposit Eth</strong></h4>
                        <img src="{{ asset('home/images/qr-eth.jpg')}}" class="qr-image"> <br>   
                        <h4><strong>Wallet Address</strong></h4>
                        <h4 class="full-width text-{{$text}}">{{$settings->eth_address}}</h4><br>
                        <button onclick="myFunction('{{$settings->eth_address}}')" class="btn btn-{{$text}} color-chocolate" style="margin-top:2px" >
                            Copy Address
                        </button><br>
                        <h4>Send only Ethereum (ETH) to this deposit address.
                            Sending any other coin may result in permanent loss.
                        </h4>
                    </div>

                
            </div>
                @endif
                @if($pmode==4)
                <div class="full-width text-{{$text}}">
                    <button data-toggle="collapse" href="#ltc" class="payment-btn btn btn-{{$text}}" style="margin-top:2px">
                        <div>
                            <img src="{{ asset('home/images/ltc.png')}}" width="20px;" height="20px;">    
                            <span>Litcoin</span>
                        </div>
                        <i class="fa fa-plus"></i>
                    </button>
                    <div id="ltc" class="panel-collapse collapse qr-code">
                        <br><h4><strong>Deposit LTC</strong></h4>
                        <img src="{{ asset('home/images/qr-ltc.jpg')}}" class="qr-image"> <br>   
                        <h4><strong>Wallet Address</strong></h4>
                        <h4 class="full-width text-{{$text}}">{{$settings->ltc_address}}</h4><br>
                        <button onclick="myFunction('{{$settings->ltc_address}}')" class="btn btn-{{$text}} color-chocolate" style="margin-top:2px" >
                            Copy Address
                        </button><br>
                        <h4>Send only Litcoin (LTC) to this deposit address.
                            Sending any other coin may result in permanent loss.
                        </h4>
                    </div>

                
            </div>
                @endif
                @if($pmode==5)
                <div class="col-lg-4">
                    <div class="card bg-{{$bg}} shadow text-{{$text}}">
                        <div class="card-body">
                            <h4 class="text-{{$text}}">
                                <a style="text-decoration:none;"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#stripe">
                                <strong>Credit card 
                                <img src="{{ asset('home/images/c3.jpg')}}" width="70px;" height="40px;"> 
                                <img src="{{ asset('home/images/c2.jpg')}}" width="70px;" height="40px;">
                                </strong>
                                </a>
                            </h4>
                            <div id="stripe" class="panel-collapse collapse">
                                <div class="">
                                    <h4 class="text-{{$text}}"> <br>
                                    <a href="{{ url('dashboard/paywithcard') }}/{{$amount}}" class="btn btn-{{$text}}">Pay with card</a>
                                    
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($pmode==6)
                <div class="col-lg-4">
                    <div class="card bg-{{$bg}} shadow text-{{$text}}">
                        <div class="card-body">
                            <h4 class="text-{{$text}}">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#paypal">
                                <strong>PayPal</strong> <img src="{{ asset('home/images/pp.png')}}" width="40px;" height="40px;">
                                </a>
                            </h4>
                            <div id="paypal" class="panel-collapse collapse">
                                <h4 class="text-{{$text}}">
                                    @include('includes.paypal')
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($pmode==7)
                <div class="col-lg-4 text-center">
                    <div class="card bg-{{$bg}} shadow text-{{$text}}">
                        <div class="card-body">
                            <h4 class="text-{{$text}}">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#paystack">
                                <!--<strong>Paystack</strong> --><img src="{{ asset('home/images/paystack.png')}}" width="180px;">
                                </a>
                            </h4>
                            <?php $payamount = $amount * 100  ?>
                            <div id="paystack" class="panel-collapse collapse pt-3">
                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    <input type="hidden" name="email" value="{{auth::user()->email}}">
                                    <input type="hidden" name="amount" value="{{$payamount}}">
                                    <input type="hidden" name="currency" value="{{$settings->s_currency}}">
                                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > 
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
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
                @endif
                @if($pmode==8)
                <div class="col-lg-4 text-center">
                    <div class="card bg-{{$bg}} shadow text-{{$text}}">
                        <div class="card-body">
                            <h4 class="text-{{$text}}">
                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#flutterwave">
                                <!--<strong>Flutterwave</strong> --><img src="{{ asset('home/images/flutterwave.png')}}" width="180px;">
                                </a>
                            </h4>
                            <?php $payamount = $amount * 100  ?>
                            <div id="flutterwave" class="panel-collapse collapse pt-3">
                                <form method="POST" action="{{ route('ravpay') }}" id="paymentForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="amount" value="{{$amount}}" /> <!-- Replace the value with your transaction amount -->
                                <input type="hidden" name="payment_method" value="card" /> <!-- Can be card, account, both -->
                                <input type="hidden" name="description" value="Deposit" /> <!-- Replace the value with your transaction description -->
                                <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                                <input type="hidden" name="currency" value="{{$settings->s_currency}}" /> <!-- Replace the value with your transaction currency -->
                                <input type="hidden" name="email" value="{{auth::user()->email}}" /> <!-- Replace the value with your customer email -->
                                <input type="hidden" name="firstname" value="{{auth::user()->name}}" /> <!-- Replace the value with your customer firstname -->
                                <input type="hidden" name="lastname" value="{{auth::user()->l_name}}" /> <!-- Replace the value with your customer lastname -->
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                                <input type="hidden" name="phonenumber" value="{{auth::user()->phone_number}}" /> <!-- Replace the value with your customer phonenumber -->
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
                @endif
            @endforeach
        </div> <br> <br>
        <div class=" shadow bg-{{$bg}} text-{{$text}} p-3">
            <h4>Contact management at <strong>{{$settings->contact_email}}</strong> for other payment methods.</h4>
        </div>
        
    </div>
    <script>
        function myFunction(query_url) {
            navigator.clipboard.writeText("{{$settings->btc_address}}").then(function () {
                new Notify ({
                    status: 'success',
                    title: 'BTC Address Copied',
                    text: '{{$settings->btc_address}}',
                    autoclose: true,
                    effect: 'slide',
                });
                // location.href = query_url;
            }, function () {
                // location.href = query_url;
            });
        }

        var addressCopied = function () {
            navigator.clipboard.writeText("{{$settings->btc_address}}");
            new Notify ({
                status: 'success',
                title: 'Copied',
                autoclose: true
            })
        };

    </script>
</div>