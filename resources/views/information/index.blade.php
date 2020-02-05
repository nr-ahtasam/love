@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-4">
      <form action="{{route('information_create')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" >
        </div>

        <div class="form-group">
          <label for="project">Project Name</label>
          <input type="test" class="form-control" id="project" name="project_name">
        </div>
        <div class="form-group">
          <label for="Github">Github Link</label>
          <input type="test" class="form-control" id="Github" name="github_link" >
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>

</div>




@endsection
