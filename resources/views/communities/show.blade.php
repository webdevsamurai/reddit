@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __($community->name) }}</div>

        <div class="card-body">
          <form>
            @csrf
            <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $community->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <div class="row mb-3">
              <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

              <div class="col-md-6">
                <textarea id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">
                {{ $community->description }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="topics" class="col-md-4 col-form-label text-md-end">{{ __('Topics') }}</label>

              <div class="col-md-6">
                <select class="select2 form-control" name="topics[]" multiple="multiple">
                  @foreach($community->topics as $topic)
                  <option value="{{$topic->id}}" @if ($community->topics->contains($topic->id)) selected @endif>
                    {{$topic->name}}
                  </option>
                  @endforeach
                </select>

              </div>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection