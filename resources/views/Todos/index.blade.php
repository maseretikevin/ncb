@extends('Layouts.app')
    
    @section('content')
                {{-- <div class="container">
                <h1 class="text-center">Todos Page</h1>
                <div class="card card-default">
                        <div class="card-header">
                            Todos
                        </div>
                        <div class="card-body">
                            @foreach ($todos as $todo)
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            {{$todo->id}}
                                            {{$todo->name}}
                                            {{$todo->email}}
                                            <a href="/todos/{{$todo->id}}" class="btn btn-prrimary btn-sm float-right">view</a>
                                        </li>
                                    </ul>
                                @endforeach
                        </div>
                </div>
            </div>  --}}
                         <h1 class="text-center"> Todos Page</h1>  
                <div class="container mx-120 mb-50">
                    <div class="card card-default col-md-8 ">
                        <div class="class-header display-5">Todos</div>
                        <div class="class-body ">
                            <table class="table table-info table-striped table-hover">
                                <thead>
                                    <tr class="table-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todos as $todo)
                                    <tr>                            
                                    <td>{{$todo->id}}</td>
                                    <td>{{$todo->name}}</td>
                                    <td>{{$todo->email}}</td>    
                                    <td>{{$todo->created_at}}</td>
                                    <td><a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">view</a></td>    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                    </div>
                    
                </div>          
            

    @endsection