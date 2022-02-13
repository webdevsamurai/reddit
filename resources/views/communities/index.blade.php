@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-8">
      <div class="d-flex justify-content-end mb-2">
        <a href="{{route('communities.create')}}" class="btn btn-success">
          New Community
        </a>
      </div>
      <table class="table table-sm">
        <thead>
          <tr>Name</tr>
          <tr></tr>
        </thead>
        <tbody>
          @foreach($communities as $community)
          <tr>
            <td>{{$community->name}}</td>
            <td>
              <a href="{{ route('communities.edit',$community) }}" class="btn btn-sm btn-primary">
                Edit
              </a>
              <form method="POST" action="{{ route('communities.destroy',$community) }}"  class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection