@extends('main') 
@section('dynamic_page')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Contact</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contact</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
              <tr>
                <td>{{$contact->contact_name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td ><a href="{{url('contact/edit-contact/'.$contact->id)}}" class="ri-edit-2-fill ri-lg" ></span></a><span><a href="{{url('contact/delete-contact/'.$contact->id)}}" class="ri-delete-bin-3-fill ri-lg text-danger" onclick="return confirm('Are you sure? This will be deleted')"></a></span></td>
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