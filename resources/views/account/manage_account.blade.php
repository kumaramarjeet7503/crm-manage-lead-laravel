@extends('main') 
@section('dynamic_page')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Account</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Account</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Website</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($accounts as $account)
              <tr>
                <td>{{$account->account_name}}</td>
                <td>{{$account->phone}}</td>
                <td>{{$account->website}}</td>
                <td ><a href="{{url('account/edit-account/'.$account->id)}}" class="ri-edit-2-fill ri-lg" ></span></a><span><a href="{{url('account/delete-account/'.$account->id)}}" class="ri-delete-bin-3-fill ri-lg text-danger" onclick="return confirm('Are you sure? This will be deleted')"></a></span></td>
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