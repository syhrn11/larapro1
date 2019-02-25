


@extends('layouts.app')
@section('content')

<center><table border= "1" width="400" height="300">
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

</table>

@endsection






