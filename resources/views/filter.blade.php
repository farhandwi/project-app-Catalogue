@extends('layouts.navbar')

@section('detail-information')

  @auth

    @if(session()->has('success'))
    
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>

    @endif

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Add Data
    </button>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <a href="{{ env('APP_URL') }}/dashboard/cooperations/create" class="btn btn-primary mb-4 ">Add new cooperation</a>
            <a href="{{ env('APP_URL') }}/country/create" class="btn btn-primary mb-4">Add new country</a>            
            <a href="{{ env('APP_URL') }}/organizationtype/create" class="btn btn-primary mb-4 ">Add new organization type</a>
            <a href="{{ env('APP_URL') }}/industrytype/create" class="btn btn-primary mb-4 ">Add new industry type</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  @endauth

@endsection

@section('list-cooperation')

  @if($cooperations->count())

    @foreach ($cooperations as $cooperation)

      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"> {{ $cooperation->name }} </div>
          Cooperated since {{ date('d F Y', strtotime($cooperation->cooperation_started_from)) }}
        </div>
        @auth
        
          <a href="{{ env('APP_URL') }}/dashboard/cooperations/{{ $cooperation->id }}/edit" class="btn btn-sm text-light fw-bold bg-success rounded-pill me-3">Update</a href="#">
          <form id="formdelete" action="{{ env('APP_URL') }}/dashboard/cooperations/{{ $cooperation->id }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-sm text-light fw-bold bg-danger rounded-pill me-3 confirmDelete">Delete</button>
          </form>
    
        @endauth
        <a href="{{ env('APP_URL') }}/detail/{{ $cooperation->name }}" class="btn btn-sm text-light fw-bold bg-primary rounded-pill">More</a href="#">
      </li>
      
    @endforeach

  @else
      
      <p class="text-center fs-4">No cooperation found</p>

  @endif

@endsection
