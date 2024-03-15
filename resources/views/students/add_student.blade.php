@extends('layouts.main')

@section('content')
<main>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <div class="card-body">
                    <div class="row">
                        <h4> Student Details</h4>
                        <form action="{{ route('add-student') }}" method="POST" class="#">
                            @csrf
                            <div class="form-row">

                                <div class="col-md-4">
                                    <label for="inputEmail4">Full Names</label>
                                    <input type="name" class="form-control" name="name" id="inputName"
                                        placeholder="Full Names" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail4">Primary Index</label>
                                    <input type="text" class="form-control" name="primary_index" id="inputPrimaryIndex"
                                        placeholder="primary Index" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputKCPEMarks">KCPE Marks</label>
                                    <input type="text" class="form-control" name="kcpe_marks" id="inputKCSEMarks"
                                        placeholder="KCPE Marks" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState">Class</label>
                                    <select id="inputState" name="class" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="f1">Form 1</option>
                                        <option value="f2">Form 2</option>
                                        <option value="f3">Form 3</option>
                                        <option value="f4">Form 4</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Stream</label>
                                    <select id="inputState" name="stream" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="W">West</option>
                                        <option value="N">North</option>
                                        <option value="S">South</option>
                                        <option value="E">East</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Admission Number</label>
                                    <input type="text" class="form-control" name="admission_number" id="inputDOB"
                                        placeholder="enter Admission Number" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Admission Date</label>
                                    <input type="date" class="form-control" name="admission_date" id="inputDOB"
                                        placeholder="Date of Admission" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">D.O.B</label>
                                    <input type="date" class="form-control" name="dob" id="inputDOB"
                                        placeholder="enter Dateof Birth" required placeholder="Date of Birth">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Nationality</label>
                                    <input type="text" class="form-control" name="nationality" id="inputNationality"
                                        placeholder="Nationality" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress2">County</label>
                                    <input type="text" class="form-control" name="county" id="inpupCountry"
                                        placeholder="select country" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputCity">Sub County</label>
                                    <input type="text" name="sub_county" class="form-control" id="inputCity" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Gender</label>
                                    <select id="inputState" name="gender" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                            </div>
                            <h4>Parents Details</h4>
                            <h5>father's details</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="parentContacts">Name</label>
                                    <input type="text" class="form-control" id="inputPContacts" name="father_name"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="parentContacts">Father Contact</label>
                                    <input type="text" class="form-control" id="inputPContacts" name="father_contact"
                                        placeholder="Enter Fathers Contact" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputparentId">ID</label>
                                    <input type="text" class="form-control" id="inputZip" name="father_id"
                                        placeholder="Enter Father ID">
                                </div>
                            </div>
                            <h5>Mother's details</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="parentContacts">Mother's Name</label>
                                    <input type="text" class="form-control" id="inputPContacts" name="mother_name"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="parentContacts">Mother's Contact </label>
                                    <input type="text" class="form-control" id="inputPContacts" name="mother_contact"
                                        placeholder="Enter contact">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputparentId">Mother ID</label>
                                    <input type="text" class="form-control" id="inputZip" name="mother_id"
                                        placeholder="Enter ID">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection