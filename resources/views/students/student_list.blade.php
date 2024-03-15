@extends('layouts.main')

@section('content')
<main>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <h5>All students </h5><a href="{{ route('add-studentView') }}"><button type="button"
                            class="btn-sm btn btn-success">Add</button></a>
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class=" card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Admn No</th>
                                    <th>Class</th>
                                    <th>Admin Date</th>
                                    <th>Age</th>
                                    <th>D.O.B</th>
                                    <th>County</th>
                                    <th>Sub-county</th>
                                    <th>Gender</th>
                                    <th>F-No.</th>
                                    <th>M-No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->admission_number}}</td>
                                    <td>{{$student->class}}</td>
                                    <td>{{$student->admission_date}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->county}}</td>
                                    <td>{{$student->sub_county}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->father_contact}}</td>
                                    <td>{{$student->mother_contact}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
