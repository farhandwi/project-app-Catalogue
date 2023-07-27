@extends('layouts.navbar')

@section('detail-information')
<div class="container text-center mb-5">
  <h1>{{ $title }}</h1>
</div>
<div class="d-flex justify-content-center">
  <div style="width: 800px">
    <form class="row g-3" method="post" action="{{ env('APP_URL') }}/dashboard/cooperations/@if(!Request::is('dashboard/cooperations/create')){{ !Request::is('dashboard/cooperations/create') ? $cooperation->id : '' }}@endif">
      @csrf
      @if(!Request::is('dashboard/cooperations/create'))
        @method('put')
      @endif
      <div class="col-md-7">
        <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{Request::is('dashboard/cooperations/create') ? old('name') : $cooperation->name }}" placeholder="Name">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-5">
        <select id="inputState" class="form-select @error('country_id') is-invalid  @enderror" name="country_id">
          <option value="{{ old('country_id') }}" selected disabled>Country</option>
          @foreach ($countries as $country)

            <option value="{{ $country->id }}" @if(!Request::is('dashboard/cooperations/create')) @if($country->id === $cooperation->country_id) selected @endif @endif>{{ $country->name }}</option>
          
          @endforeach
        </select>
        @error('country_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-6">
        <select id="inputState" class="form-select @error('organizationtype_id') is-invalid  @enderror" name="organizationtype_id">
          <option value="{{ old('organizationtype_id') }}" selected disabled>Organization Type</option>
          @foreach ($organization as $org)
          
            <option value="{{ $org->id }}" @if(!Request::is('dashboard/cooperations/create'))  @if($org->id === $cooperation->organizationtype_id) selected @endif @endif>{{ $org->name }}</option>
          
          @endforeach
        </select>
        @error('organizationtype_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-6">
        <select id="inputState" class="form-select @error('industry_id') is-invalid  @enderror" name="industry_id">
          <option value="{{ Request::is('dashboard/cooperations/create') ? old('industry_id') : '' }}" selected disabled>{{ Request::is('dashboard/cooperations/create') ? 'Industry Type' : '' }}</option>
          @foreach ($industries as $industry)
        
            <option value="{{ $industry->id }}"@if(!Request::is('dashboard/cooperations/create')) @if($industry->id === $cooperation->industry_id) selected @endif @endif>{{ $industry->name }}</option>
          
          @endforeach
        </select>
        @error('industry_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="description" class="mb-2">Add Company Description</label>
        <textarea class="form-control @error('name') is-invalid  @enderror" id="description" rows="5" placeholder="Add Description" name="description" value="fad">
          {{Request::is('dashboard/cooperations/create') ? old('description') : $cooperation->description }}
        </textarea>
        @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-12 d-flex justify-content-between ">
        <a href="{{ env('APP_URL') }}/dashboard/cooperations" class="btn btn-danger">Return to home</a>
        <button type="submit" class="btn btn-success">Add Company</button>
      </div>
    </form>
  </div>
</div>
@endsection