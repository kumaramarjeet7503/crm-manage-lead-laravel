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
              <h5 class="card-title" style="padding-bottom : 0px">Add Contact </h5>
              <!-- Horizontal Form -->
              <form method="POST" action="{{ url('contact/add-contact').'/'}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" name="account-name" class="form-control" id="inputText" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" name="account-phone"  id="inputEmail" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-5">
                    <input type="test" class="form-control" name="account-phone"  id="inputPhone" required>
                  </div>
                </div>

            <div class="row mb-3">
              <label for="inputAccounts" class="form-label">Account</label>
              <select id="inputState" class="form-select" name="account-id">
                <option selected disabled>Choose...</option>
                @foreach($accounts as $account)
                <option>{{ $account->account_name }}</option>
                @endforeach
              </select>
            </div>
                <!-- <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Account</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="account-website"  id="inputwebsite">
                  </div>
                </div> -->
                </div>


                <div class="text-center mb-3">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
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