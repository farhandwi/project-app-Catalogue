@extends('layouts.navbar')

@section('detail-information')

  @auth

    @if(session()->has('success'))
    
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>

    @endif
    
    <a href="{{ env('APP_URL') }}/dashboard/cooperations/create" class="btn btn-primary mb-4 ">Add new cooperation</a>

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
          <form action="{{ env('APP_URL') }}/dashboard/cooperations/{{ $cooperation->id }}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-sm text-light fw-bold bg-danger rounded-pill me-3" onclick="return confirm('Are you sure you want to delete cooperation with this company?')">Delete</button>
          </form>
    
        @endauth
        <a href="{{ env('APP_URL') }}/detail/{{ $cooperation->name }}" class="btn btn-sm text-light fw-bold bg-primary rounded-pill">More</a href="#">
      </li>
      
    @endforeach

  @else
      
      <p class="text-center fs-4">No cooperation found</p>

  @endif

  <div class="d-flex justify-content-center mt-5 ">
    {{ $cooperations->links() }}
  </div>

@endsection
