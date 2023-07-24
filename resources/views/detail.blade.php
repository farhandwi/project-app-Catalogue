@extends('layouts.navbar')

@section('detail-information')
<article>
  <h1>{{ $cooperation->name }}</h1>
  <h5>Bekerja sama sejak {{ date('d F Y', strtotime($cooperation->cooperation_started_from)) }}</h5>
  <p>
    {{ $cooperation->detail_cooperation }}
  </p>
</article>
@endsection