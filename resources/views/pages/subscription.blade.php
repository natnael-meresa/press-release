@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-weight:bold;">
                <center>Choose your Package</center>
            </h1>
            @if(\Session::has('error'))
            <div class="alert alert-danger">{{ \Session::get('error') }}</div>
            {{ \Session::forget('error') }}
          @endif
          @if(\Session::has('success'))
              <div class="alert alert-success">{{ \Session::get('success') }}</div>
              {{ \Session::forget('success') }}
          @endif
        </div>
        <div class="col-md-12 pt-3"> 
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Tier 1</h4>
                     
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <p> Guaranteed News Distribution with Media Coverage</p>

                        <li> <i class="fas fa-check"></i> <span class="num-media">145+</span> Guaranteed Placements. Google News Inclusion.</li>
                        <li> <i class="fas fa-times"></i> <span class="num-media">Guaranteed Press Release Reach (9K-16K)<sup>*</sup></span></li>
                        <li> <i class="fas fa-times"></i>  Premium Google News Network</li>
                        <li> <i class="fas fa-times"></i> <img src="/images/pricing-nbc-logo.png" alt="nbc">, <img src="/images/pricing-cbs-logo.png" alt="cbs"> &amp; <img src="/images/pricing-fox-logo.png" alt="fox"></li>
                      </ul>
                      <form action="/process-transaction" method="get">
                        @csrf
                        <select name="multipck" onchange="myFunction()" id="multipck_value1" class="form-control form-select packageoption1">
                            <option value="21" price="21">1 Press Release for $21.00</option>
                            <option value="39" price="39">2 Press Release for $39.00</option>
                            <option value="96" price="96">5 Press Release for $96.00</option>
                            <option value="180" price="180">10 Press Release for $180.00</option>
                            <option value="299" price="299">20 Press Release for $299.00</option>
                            <option value="600" price="600">50 Press Release for $600.00</option>
                            <option value="960" price="960">100 Press Release for $960.00</option>
                            <option value="1860" price="1860">200 Press Release for $1860.00</option>                                
                          </select>
                          
                            <input type="radio" checked="" value="1" name='tire' style="display: none">
                        
                          <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Total :$</small>
                            <span id="change_price1">21</span>
                        </h4>
    
                          <label for="pplb1">
                            <input type="radio" checked="" name="paymentmethod1" value="paypal" id="pplb1">
                            <img src="https://www.issuewire.com/assets/images/paypal.svg" alt="Paypal" style="width:75px;">
                        </label>
                          <button class=" btn btn-custom btn-fx btn-promote paypal_pay_btn3" type="submit"  name="submit_paypal">
                            Pay and Promote Now(USD)
                           </button>
                        
                          
                    </form>

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Tier 1 Pro</h4>
                     
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <p> Guaranteed News Distribution with Media Coverage</p>

                        <li> <i class="fas fa-check"></i> <span class="num-media">145+</span> Guaranteed Placements. Google News Inclusion.</li>
                        <li> <i class="fas fa-check"></i> <span class="num-media">Guaranteed Press Release Reach (9K-16K)<sup>*</sup></span></li>
                        <li> <i class="fas fa-check"></i>  Premium Google News Network</li>
                        <li> <i class="fas fa-times"></i> <img src="/images/pricing-nbc-logo.png" alt="nbc">, <img src="/images/pricing-cbs-logo.png" alt="cbs"> &amp; <img src="/images/pricing-fox-logo.png" alt="fox"></li>
                      </ul>
                      <form action="/process-transaction" method="get">
                        @csrf
                        <select name="multipck" onchange="tire1proChange()" id="multipck_value2" class="form-control packageoption3">
                          <option value="42" price="42">1 Press Release for $42.00</option>
                          <option value="76" price="76">2 Press Release for $76.00</option>
                          <option value="185" price="185">5 Press Release for $185.00</option>
                          <option value="350" price="350">10 Press Release for $350.00</option>
                          <option value="680" price="680">20 Press Release for $680.00</option>
                          <option value="1600" price="1600">50 Press Release for $1600.00</option>
                          <option value="3000" price="3000">100 Press Release for $3000.00</option>
                          <option value="5400" price="5400">200 Press Release for $5400.00</option>                                
                        </select>
                          
                            <input type="radio" checked="" value="1pro" name='tire' style="display: none">
                        
                          <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Total :$</small>
                            <span id="change_price2">42</span>
                        </h4>
    
                          <label for="pplb1">
                            <input type="radio" checked="" name="paymentmethod1" value="paypal" id="pplb1">
                            <img src="https://www.issuewire.com/assets/images/paypal.svg" alt="Paypal" style="width:75px;">
                        </label>
                          <button class=" btn btn-custom btn-fx btn-promote paypal_pay_btn3" type="submit"  name="submit_paypal">
                            Pay and Promote Now(USD)
                           </button>
                        
                           
                          
                    </form>

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Tier 2</h4>
                     
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <p> Guaranteed News Distribution with Media Coverage</p>

                        <li> <i class="fas fa-check"></i> <span class="num-media">145+</span> Guaranteed Placements. Google News Inclusion.</li>
                        <li> <i class="fas fa-times"></i> <span class="num-media">Guaranteed Press Release Reach (9K-16K)<sup>*</sup></span></li>
                        <li> <i class="fas fa-times"></i>  Premium Google News Network</li>
                        <li> <i class="fas fa-check"></i> <img src="/images/pricing-nbc-logo.png" alt="nbc">, <img src="/images/pricing-cbs-logo.png" alt="cbs"> &amp; <img src="/images/pricing-fox-logo.png" alt="fox"></li>
                      </ul>
                      <form action="/process-transaction" method="get">
                        @csrf
                        <select onchange="tire2Change()" name="multipck" id="multipck_value3" class="form-control packageoption2">
                          <option value="45" price="45">1 Press Release for $45.00</option>
                          <option value="85" price="85">2 Press Release for $85.00</option>
                          <option value="190" price="190">5 Press Release for $190.00</option>
                          <option value="350" price="350">10 Press Release for $350.00</option>
                          <option value="680" price="680">20 Press Release for $680.00</option>
                          <option value="1650" price="1650">50 Press Release for $1650.00</option>
                          <option value="3000" price="3000">100 Press Release for $3000.00</option>
                          <option value="5700" price="5700">200 Press Release for $5700.00</option>                                
                        </select>
                          
                            <input type="radio" checked="" value="2" name='tire' style="display: none">
                        
                          <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Total :$</small>
                            <span id="change_price3">45</span>
                        </h4>
    
                          <label for="pplb1">
                            <input type="radio" checked="" name="paymentmethod1" value="paypal" id="pplb1">
                            <img src="https://www.issuewire.com/assets/images/paypal.svg" alt="Paypal" style="width:75px;">
                        </label>
                          <button class=" btn btn-custom btn-fx btn-promote paypal_pay_btn3" type="submit"  name="submit_paypal">
                            Pay and Promote Now(USD)
                           </button>
                          
                    </form>

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Tier 2 Pro</h4>
                     
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <p> Guaranteed News Distribution with Media Coverage</p>

                        <li> <i class="fas fa-check"></i> <span class="num-media">145+</span> Guaranteed Placements. Google News Inclusion.</li>
                        <li> <i class="fas fa-check"></i> <span class="num-media">Guaranteed Press Release Reach (9K-16K)<sup>*</sup></span></li>
                        <li> <i class="fas fa-check"></i>  Premium Google News Network</li>
                        <li> <i class="fas fa-check"></i> <img src="/images/pricing-nbc-logo.png" alt="nbc">, <img src="/images/pricing-cbs-logo.png" alt="cbs"> &amp; <img src="/images/pricing-fox-logo.png" alt="fox"></li>
                      </ul>
                      <form action="/process-transaction" method="get">
                        @csrf
                        <select onchange="tire2proChange()" name="multipck" id="multipck_value4" class="form-control packageoption4">
                          <option value="65" price="65">1 Press Release for $65.00</option>
                          <option value="120" price="120">2 Press Release for $120.00</option>
                          <option value="280" price="280">5 Press Release for $280.00</option>
                          <option value="530" price="530">10 Press Release for $530.00</option>
                          <option value="980" price="980">20 Press Release for $980.00</option>
                          <option value="2250" price="2250">50 Press Release for $2250.00</option>
                          <option value="4250" price="4250">100 Press Release for $4250.00</option>
                          <option value="8000" price="8000">200 Press Release for $8000.00</option>                                
                        </select>
                          
                            <input type="radio" checked="" value="2pro" name='tire' style="display: none">
                        
                          <h4 class="card-title pricing-card-title"><small class="text-muted fw-light">Total :$</small>
                            <span id="change_price4">65</span>
                        </h4>
    
                          <label for="pplb1">
                            <input type="radio" checked="" name="paymentmethod1" value="paypal" id="pplb1">
                            <img src="https://www.issuewire.com/assets/images/paypal.svg" alt="Paypal" style="width:75px;">
                        </label>
                          <button class=" btn btn-custom btn-fx btn-promote paypal_pay_btn3" type="submit"  name="submit_paypal">
                            Pay and Promote Now(USD)
                           </button>
                        
                          
                    </form>

                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection