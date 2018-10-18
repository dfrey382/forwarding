<div class="col-md-12">
    <div class="pull-left">
        <address>
            <img src="{{ asset('images/logo.png') }}" alt="">
            <p style="font-size: smaller"><br> Powering Our Customers to be Leaders in their Markets</p>
            <h4>Cannon Towers, <br>6th Floor, Moi Avenue Mombasa - Kenya <br>
                Email : info@freightwell.com <br> imports@freightwell.com <br>
                Web: www.esl-eastafrica.com</h4>
        </address>
    </div>
    <div class="pull-right">
        <address id="client_details">
            <h3>{{ isset($quotation) ? $quotation->status != \Esl\helpers\Constants::LEAD_QUOTATION_ACCEPTED ? 'Quotation' : 'Proforma Invoice' : ''}} </h3>
            <h4>#QU00{{$quotation->id.'/'.\Carbon\Carbon::parse($quotation->created_at)->format('y')}}</h4>
            <h4>Tax Registration: P051153405J</h4>
            <h4>Telephone: +254 41 2229784</h4>
        </address>
    </div>
</div>
<div class="col-sm-12">
    <hr>
</div>
<div class="col-md-12">
    <div class="pull-left">
        <address>
            <h4><b>To</b></h4>
            <h4>Name : {{ ucwords($quotation->customer->Name) }} </h4>
            <h4>Contact Person : {{ mb_strimwidth(ucwords($quotation->customer->Contact_Person),0,16,"...") }} </h4>
            <h4>Phone : {{ $quotation->customer->Telephone }} </h4>
            <h4>Email :  {{ $quotation->customer->EMail }}</h4>
            <br>
            <p><b>Date : </b> {{ \Carbon\Carbon::parse($quotation->created_at)->format('d-M-y') }}</p>
        </address>
    </div>
    <div class="pull-right text-left">
        <address id="client_details">
            <h4><b>B/L NO: </b>{{ strtoupper($quotation->cargo->bl_no )}}</h4>
            <h4><b>CARGO: </b>{{ strtoupper($quotation->cargo->cargo_name )}}</h4>
            <h4><b>VESSEL/DSTN: </b>{{ strtoupper($quotation->cargo->vessel_name )}}</h4>
            <h4><b>QUANTITY: </b>{{ strtoupper($quotation->cargo->cargo_qty )}}</h4>
            <h4><b>WEIGHT: </b>{{ strtoupper($quotation->cargo->cargo_weight )}}</h4>
            <h4><b>C'NER: </b>{{ strtoupper($quotation->cargo->container_no )}}</h4>
            <h4><b>CONSIGNEE: </b>{{ strtoupper($quotation->cargo->consignee_name )}}</h4>
        </address>
    </div>
</div>
<div class="col-sm-12">
    <hr>
</div>