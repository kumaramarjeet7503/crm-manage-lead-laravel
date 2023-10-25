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
              <h5 class="card-title" style="padding-bottom : 0px">Update Account </h5>
              <!-- Horizontal Form -->
              <form method="POST" action="{{ url('account/edit-account').'/'.$account->id}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputEmail3"  class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" name="account-name" class="form-control" id="inputText" value="{{ $account->account_name }}" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-5">
                    <input type="test" class="form-control" name="account-phone" value="{{ $account->phone }}"  id="inputPhone" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Website</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="account-website" value="{{ $account->website }}"   id="inputwebsite">
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