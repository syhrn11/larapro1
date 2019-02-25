@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard 
                    <a href="{{ url('tasks/create') }}" class="btn btn-success float-right">create new tasks</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><table class="table table-hover">
<tr>

<th>Tasks</th>
<th>Pic</th>
<th>Email</th>
<th>Phone</th>

</tr>

@foreach ($tasks as $tasks)

<tr>

<td>{{ $tasks->name}}</td>
<td>{{ $tasks->pic}}</td>
<td>{{ $tasks->email}}</td>
<td>{{ $tasks->phone}}</td>

</tr>

@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
