@extends("theme")
@section("content")
        <div class="row">
        <h2>Add Employee</h2>
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <td>Employee Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Employee Code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pincode</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
            </div>
        </div>
@endsection