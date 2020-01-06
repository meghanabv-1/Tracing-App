@extends('adminlte::page')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('teamleads.update', $teamlead->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">teamleadname:</label>
          <input type="text" class="form-control" name="teamleadname" value={{ $teamlead->teamleadname }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection