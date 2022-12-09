@extends('Layouts.app')

@section('content')
  
  <div class="container">
    <a href="/todos">Back</a>
  </div>

 {{-- Content Section --}}

 <div class="container">
    <h1 class="text-center my-5">
      Todo
    </h1>
      <div class="row justify-content-center">
        <div class="card card-default md-8">
          <div class="card card-header">
              {{$todo->name}}
          </div>
          
          <div class="card card-body">
              {{$todo->description}}
              <br>
              {{$todo->email}}
          </div>
        </div> {{-- Card div --}}
      </div> {{-- Row div --}}
 </div> {{-- Container div --}}

 {{-- End of Content Section --}}
   
@endsection