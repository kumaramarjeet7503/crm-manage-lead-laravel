@extends('main') 
@section('dynamic_page')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Manage Deals</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Deal</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
              <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Account</th>
                <th scope="col">Contact</th>
                <th scope="col">Closing Date</th>
                <th scope="col">Stage</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($deals as $deal)
              <tr>
              <td>{{$deal->deal_name}}</td>
                <td>{{$deal->amount}}</td>
                <td>{{$deal->account_id}}</td>
                <td>{{$deal->contact_id}}</td>
                <td>{{$deal->closing_date}}</td>
                <td>{{$deal->stage}}</td>
                <td ><a href="{{url('deal/edit-deal/'.$deal->id)}}" class="ri-edit-2-fill ri-lg" ></span></a><span><a href="{{url('deal/delete-deal/'.$deal->id)}}" class="ri-delete-bin-3-fill ri-lg text-danger" onclick="return confirm('Are you sure? This will be deleted')"></a></span></td>
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