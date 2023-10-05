@extends('main') 
@section('dynamic_page')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Lead</h1>

</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lead information</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" action="" method="POST" >
            @csrf
          <div class="col-md-6">
              <label for="inputTitle" class="form-label">Title</label>
              <input type="text" class="form-control" value="{{old('lead-title')}}" id="inputTitle" name="lead-title">
              @error('lead-title')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputCompany" class="form-label">Company</label>
              <input type="text" class="form-control" value="{{old('lead-company')}}" id="inputCompany" name="lead-company">
              @error('lead-company')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputName5" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="inputName5" value="{{old('lead-name')}}" name="lead-name">
              @error('lead-name')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail5" value="{{old('lead-email')}}" name="lead-email">
              @error('lead-email')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="inputPhone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="inputPhone" value="{{old('lead-phone')}}" name="lead-phone">
            </div>
            <div class="col-md-4">
              <label for="inputLeadSource" class="form-label">Lead Source</label>
              <select id="inputState" class="form-select" name="lead-source">
                <option selected disabled>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputLeadStatus" class="form-label">Lead Status</label>
              <select id="inputStatus" class="form-select" name="lead-status">
                <option selected disabled>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
           
            <div class="col-12">
            <h5 class="card-title">Address information</h5>
              <label for="inputAddress5" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddres5s" value="{{old('lead-address')}}" placeholder="1234 Main St" name="lead-address">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name="lead-city">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <input type="text" class="form-control" id="inputState" name="lead-state">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="lead-zip">
            </div>
            <div class="col-md-12">
            <h5 class="card-title">Description information</h5>
              <label for="inputDescription" class="form-label">Description</label>
              <textarea class="form-control" id="inputDescription" name="lead-description" rows=5></textarea>
            </div>
            <div class="text-right">
              <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  @endsection