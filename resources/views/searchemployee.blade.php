@extends("theme")
@section("content")
        <div class="row">
        <h2>Search Employee</h2>
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <td>Employee Code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Search</button></td>
                    </tr>
                </table>
            </div>
        </div>
@endsection