@extends('main') 
@section('dynamic_page')
<main id="main" class="main">

<div class="pagetitle">
  <h1> Account</h1>

</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">


    <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="padding-bottom : 0px">Update Contact </h5>
              <!-- Horizontal Form -->
              <form method="POST" action="{{ url('contact/edit-contact').'/'.$contact->id}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" name="contact-name" value="{{ $contact->contact_name }}" class="form-control" id="inputText" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" value="{{ $contact->email }}" name="contact-email"  id="inputEmail" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" value="{{ $contact->phone }}" name="contact-phone"  id="inputPhone" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Account</label>
                  <div class="col-sm-5">
                  <select id="inputState" class="form-select" name="account-id">
                    <option disabled>Choose...</option>
                    @foreach($accounts as $account)
                    @if($contact->account_id == $account->id)
                      <option value="{{$account->id}}" selected >{{ $account->account_name }}</option>
                    @else
                      <option value="{{$account->id}}" >{{ $account->account_name }}</option>
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