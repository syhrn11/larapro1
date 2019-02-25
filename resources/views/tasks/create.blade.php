@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create new Tasks 
                   

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('tasks') }}" method="POST">
                        <div class="form-group">
                            <label>Task name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Pic</label>
                            <input type="text" name="pic" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <input type="submit" name ="submit" class="btn btn-block btn-primary">
                    </form>
                    </div>
                     </div>
                      </div>
                       </div>


                    @endsection