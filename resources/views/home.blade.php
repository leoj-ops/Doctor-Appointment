@extends('layouts.layout')

@section('content')


<div class="container "  style="padding-top:70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('Patient Appointments') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <tr class="font-weight-bold">
                        <th>Patient Name</th>
                        <th>Ailments </th>
                        <th>Doctor speciality required </th>
                        <th>Telephone number </th>
                        <th>Email </th>

                        </tr>
                        @foreach ($med_report as $value)
                    
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->ailments}}</td>
                            <td>{{$value->doctor}}</td>
                            <td>{{$value->telephone}}</td>
                            <td>{{$value->email}}</td>
                        </tr>
                   
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
