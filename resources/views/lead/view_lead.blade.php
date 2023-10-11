@extends('main') 
@section('dynamic_page')
<main id="main" class="main">

<div class="pagetitle">
  <h1>View Lead</h1>

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
              <input type="text" readonly class="form-control" value="{{$lead->lead_title}}" id="inputTitle" name="lead-title">
              @error('lead-title')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputCompany" class="form-label">Company</label>
              <input type="text" readonly class="form-control" value="{{$lead->lead_company}}" id="inputCompany" name="lead-company">
              @error('lead-company')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputName5" class="form-label">Your Name</label>
              <input type="text" readonly class="form-control" id="inputName5" value="{{$lead->lead_name}}" name="lead-name">
              @error('lead-name')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Email</label>
              <input type="email" readonly class="form-control" id="inputEmail5" value="{{$lead->lead_email}}" name="lead-email">
              @error('lead-email')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="col-md-4">
              <label for="inputPhone" class="form-label">Phone</label>
              <input type="text" readonly class="form-control" id="inputPhone" value="{{$lead->lead_phone}}" name="lead-phone">
            </div>
            @php
              $lead_sources = ['Advertising','Direct','Linkedin','News'] ;
            @endphp
            <div class="col-md-4">
              <label for="inputLeadSource" class="form-label">Lead Source</label>
              <select id="inputState" disabled class="form-select" name="lead-source">
                <option selected >{{ $lead->lead_source }}</option>
              </select>
            </div>
            @php
              $lead_statuses = ['Qualifications','Needs Analysis','Proposal/Price','Closed Won'] ;
            @endphp
            <div class="col-md-4">
              <label for="inputLeadStatus" class="form-label">Lead Status</label>
              <select id="inputStatus" disabled class="form-select" name="lead-status">  
              <option selected >{{ $lead->lead_status }}</option>
              </select>
            </div>
           
            <div class="col-12">
            <h5 class="card-title">Address information</h5>
              <label for="inputAddress5" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddres5s" readonly value="{{$lead->lead_address}}" placeholder="1234 Main St" name="lead-address">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" readonly value="{{$lead->lead_city}}" name="lead-city">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <input type="text" class="form-control" id="inputState" readonly value="{{$lead->lead_state}}" name="lead-state">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" readonly value="{{$lead->lead_zip}}"  name="lead-zip">
            </div>
            <div class="col-md-12">
            <h5 class="card-title">Description information</h5>
              <label for="inputDescription" class="form-label">Description</label>
              <textarea class="form-control" id="inputDescription"  readonly  name="lead-description" rows=5>{{$lead->lead_description}}</textarea>
            </div>
            <div class="text-right">
              <a  href="{{url('lead/convert-lead/'.$lead->id)}}"  class="btn btn-primary">Convert</a>
              <a  href="{{url('lead/edit-lead/'.$lead->id)}}" class="btn btn-secondary">Edit</a>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
  @endsection