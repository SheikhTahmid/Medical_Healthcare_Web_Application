@extends('layouts.patient_dash')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Non Specialist Doctors</h5>
                <p class="mb-4">Take premium membership to see specialists</p> <br>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th>Doctor Name</th>
                            <th>Doctor Type</th>
                            <th>Speciality</th>
                            <th>Remuneration</th>
                            <th>Appointment</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach ($details as $det)
                            <tr>
                                <td>{{ $det->doctor_name }}</td>
                                <td><span class="badge bg-label-info me-1">{{ $det->doctor_type }}</span></td>
                                <td>{{ $det->doctor_specialty }}</td>
                                <td><s>{{ $det->visit.'$' }}</s> {{ (int)$det->visit - (((int)$det->visit*(int)$det->discount_per)/100) .'$' }}</td>
                                <td><a href="/tA-{{ $det->doctor_id }}" class="btn btn-sm btn-primary"><i class='bx bx-injection'></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
