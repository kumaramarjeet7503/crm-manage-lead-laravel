@extends('main') 
@section('dynamic_page')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage leads</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Leads</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Company</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Lead Source</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
              <tr>
                <td>{{$lead->lead_name}}</td>
                <td>{{$lead->lead_company}}</td>
                <td>{{$lead->lead_email}}</td>
                <td>{{$lead->lead_phone}}</td>
                <td>{{$lead->lead_source}}</td>
                <td ><span ><a href="{{url('lead/view-lead/'.$lead->id)}}" class="ri-eye-2-fill ri-lg" ></span><a href="{{url('lead/edit-lead/'.$lead->id)}}" class="ri-edit-2-fill ri-lg" ></span></a><span><a href="{{url('lead/delete-lead/'.$lead->id)}}" class="ri-delete-bin-3-fill ri-lg text-danger" onclick="return confirm('Are you sure? This will be deleted')"></a></span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection