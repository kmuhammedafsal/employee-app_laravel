@extends("theme")

@section("content")


    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <table class="table">
                <tr>
                    <td>employee name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>employee code</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>designation</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>salary</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>date of birth</td>
                    <td><input type="date" class="form-control"></td>
                </tr>
                <tr>
                    <td>place</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>pincode</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>phone number</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">submit</button></td>
                </tr>
            </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
   
   @endsection