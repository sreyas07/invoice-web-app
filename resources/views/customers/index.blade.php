<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Customers</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Opening Balance</th>
                            <th>Cr/Dr</th>
                            <th>Registration Type</th>
                            <th>Ecommerce Operator</th>
                            <th>Trade Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Shrinkage Percentage</th>
                            <th>Building Name</th>
                            <th>Building No</th>
                            <th>Floor No</th>
                            <th>Street</th>
                            <th>Post</th>
                            <th>Location/Place</th>
                            <th>Country</th>
                            <th>Pincode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterate over customers and display data -->
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->group }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->opening_balance }}</td>
                            <td>{{ $customer->cr_dr }}</td>
                            <td>{{ $customer->registration_type }}</td>
                            <td>{{ $customer->ecommerce_operator }}</td>
                            <td>{{ $customer->trade_name }}</td>
                            <td>{{ $customer->mobile_no }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->shrinkage_percentage }}</td>
                            <td>{{ $customer->building_name }}</td>
                            <td>{{ $customer->building_no }}</td>
                            <td>{{ $customer->floor_no }}</td>
                            <td>{{ $customer->street }}</td>
                            <td>{{ $customer->post }}</td>
                            <td>{{ $customer->location_place }}</td>
                            <td>{{ $customer->country }}</td>
                            <td>{{ $customer->pincode }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you need JS components) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
