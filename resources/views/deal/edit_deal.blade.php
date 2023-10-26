@extends('main') 
@section('dynamic_page')
<main id="main" class="main">

<div class="pagetitle">
  <h1> Deal</h1>

</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">


    <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="padding-bottom : 0px">Update Deal </h5>
              <!-- Horizontal Form -->
              <form method="POST" action="{{ url('deal/edit-deal').'/'.$deal->id}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputDeal"  class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" name="deal-name" value="{{ $deal->deal_name }}" class="form-control" id="inputText" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputAmount" class="col-sm-2 col-form-label">Amount</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control"  value="{{ $deal->amount }}"  name="amount"  id="inputAmount" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Account</label>
                  <div class="col-sm-5">
                  <select id="inputState" class="form-select" name="account_id">
                    <option selected disabled>Choose...</option>
                    @foreach($accounts as $account)
                    @if($deal->account_id == $account->id)
                      <option value="{{$account->id}}" selected >{{ $account->account_name }}</option>
                    @else
                      <option value="{{$account->id}}" >{{ $account->account_name }}</option>
                    @endif
                    @endforeach
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-5">
                  <select id="inputState" class="form-select" name="contact_id">
                    <option selected disabled>Choose...</option>
                    @foreach($contacts as $contact)
                    @if($deal->contact_id == $contact->id)
                      <option value="{{$contact->id}}" selected >{{ $contact->contact_name }}</option>
                    @else
                      <option value="{{$contact->id}}" >{{ $contact->contact_name }}</option>
                    @endif
                    @endforeach
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputclosing" class="col-sm-2 col-form-label">Closing Date</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" name="closing_date"  value="{{ $deal->closing_date }}"  id="inputclosing" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Stage</label>
                  <div class="col-sm-5">
                        @php
                        $lead_statuses = ['Qualifications','Needs Analysis','Proposal/Price','Closed Won'] ;
                        @endphp
                        <select id="inputStatus" class="form-select" name="stage">
                            <option selected disabled>Choose...</option>
                            @foreach($lead_statuses as $lead_status)
                            @if($deal->stage == $lead_status)
                              <option  selected >{{ $deal->stage }}</option>
                            @else
                              <option  >{{ $lead_status }}</option>
                            @endif
                            @endforeach
                        </select>
                  </div>
                </div>

                </div>


                <div class="text-center mb-3">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
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