@extends('main') 
@section('dynamic_page')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Convert Lead</h1>

</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">


    <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="padding-bottom : 0px">Convert Lead {{ "[".$lead->lead_name."-".$lead->lead_company ."]"}}</h5>
              <!-- Horizontal Form -->
              <label class="card-title col-md-12" style="padding-bottom : 0px">Create New Account <span class="badge bg-primary text-light">{{$lead->lead_name}}</span></label>
              <label class="card-title" style="padding-top : 0px ; padding-bottom : 0px">Create New Contact <span class="badge bg-primary text-light">{{$lead->lead_company}}</span></label>
              <label class="card-title col-md-12" style="padding-top : 0px ; padding-bottom : 10px">Create New Deal for this Account</label>
              <form method="POST" action="{{ url('lead/convert-lead').'/'.$lead->id}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">Amount</label>
                  <div class="col-sm-5">
                    <input type="text" name="deal-amount" class="form-control" id="inputText" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Deal Name</label>
                  <div class="col-sm-5">
                    <input type="test" class="form-control" name="deal-name"  id="inputEmail" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Closing Date</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" name="deal-date"  id="inputPassword">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Stage</label>
                  <div class="col-sm-5">
                        @php
                        $lead_statuses = ['Qualifications','Needs Analysis','Proposal/Price','Closed Won'] ;
                        @endphp
                        <select id="inputStatus" class="form-select" name="deal-stage">
                            <option selected disabled>Choose...</option>
                            @foreach($lead_statuses as $lead_status)
                            @if($lead->lead_status == $lead_status)
                            <option selected>{{ $lead_status }}</option>
                            @else
                            <option>{{ $lead_status }}</option>
                            @endif
                            @endforeach
                        </select>
                  </div>
                </div>


                <div class="text-center">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Confirm</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  @endsection