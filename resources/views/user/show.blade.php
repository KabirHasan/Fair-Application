@extends('layouts.master')

@section('content')
    <div class="panel panel-info" style="margin: 60px;">
        <div class="page-header" style="text-align: center"><h1>User Details</h1></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <label class="col-md-3" style="text-align: right" for="name" >Name</label>
                    <span class="col-md-2">--</span>
                    <span class="col-md-5">{{ $user->name }}</span>
                </div>
                <div class="col-md-12">

                    <label class="col-md-3" style="text-align: right" for="name" >Email</label>
                    <span class="col-md-2">--</span>
                    <span class="col-md-5">{{ $user->email }}</span>
                </div>

                <div class="col-md-12">

                    <label class="col-md-3" style="text-align: right" for="name" >Registered on</label>
                    <span class="col-md-2">--</span>
                    <span class="col-md-5">{{ date('F d, Y', strtotime($user->created_at) ) }}</span>
                </div>



            </div>




        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="col-md-3" style="text-align: right" for="name" >Status</h4>
                    <h4 class="col-md-2">--</h4>
                    <div class="col-md-5">
                        <div class="col-md-3">
                        <h4 style="color: {{ $user->is_active ? 'green':'red' }}">{{ $user->is_active ? 'Active':'Inactive' }}</h4></div>
                        <form class="form-inline" action="/users/{{ $user->id }}" method="post">
                            @csrf
                            @method('patch')
                            <button  class="{{ $user->is_active ? 'btn btn-danger':'btn btn-primary' }}" type="submit" name="changeStatus">Click To {{ $user->is_active ? 'Inactive':'Active' }}</button>
                        </form>

                    </div>

                </div>

            </div>
        </div>


    </div>

@endsection



