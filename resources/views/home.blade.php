@extends('layouts.navbar')

@section('list-cooperation')

  @if($cooperations->count())

    @foreach ($cooperations as $cooperation)

      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"> {{ $cooperation->name }} </div>
          Cooperated since {{ date('d F Y', strtotime($cooperation->cooperation_started_from)) }}
        </div>
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
