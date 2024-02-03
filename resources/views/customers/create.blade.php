<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container">
            <!-- Styled heading -->
            <h2 class="text-center font-weight-200">CREATE CUSTOMER</h2>
            <!-- Form content goes here -->
        </div>
            <form method="POST" action="{{ route('customers.store') }}">
            @csrf

            <!-- First Section -->
            <div class="row">
                <div class="col-md-3">
                    <!-- Group -->
                    <div class="form-group">
                        <label for="group">Group</label>
                        <select class="form-control" id="group" name="group">
                            <option value="Sundry Debtors">Sundry Debtors</option>
                            <option value="Sundry Creditors">Sundry Creditors</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Opening Balance -->
                    <div class="form-group">
                        <label for="opening_balance">Opening Balance</label>
                        <input id="opening_balance" type="text" class="form-control" name="opening_balance">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Cr/Dr -->
                    <div class="form-group">
                        <label for="cr_dr">Cr/Dr</label>
                        <select class="form-control" id="cr_dr" name="cr_dr">
                            <option value="Cr">Cr</option>
                            <option value="Dr">Dr</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Registration Type -->
                    <div class="form-group">
                        <label for="registration_type">Registration Type</label>
                        <select class="form-control" id="registration_type" name="registration_type">
                            <option value="Regular">Regular</option>
                            <option value="Unregistered">Unregistered</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Ecommerce Operator -->
                    <div class="form-group">
                        <label>Ecommerce Operator</label>
                        <div>
                            <input type="radio" id="ecommerce_yes" name="ecommerce_operator" value="Yes">
                            <label for="ecommerce_yes">Yes</label>
                            <input type="radio" id="ecommerce_no" name="ecommerce_operator" value="No">
                            <label for="ecommerce_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Trade Name -->
                    <div class="form-group">
                        <label for="trade_name">Trade Name</label>
                        <input id="trade_name" type="text" class="form-control" name="trade_name">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Mobile Number -->
                    <div class="form-group">
                        <label for="mobile_no">Mobile Number</label>
                        <input id="mobile_no" type="text" class="form-control" name="mobile_no">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Shrinkage Percentage -->
                    <div class="form-group">
                        <label for="shrinkage_percentage">Shrinkage Percentage</label>
                        <input id="shrinkage_percentage" type="text" class="form-control" name="shrinkage_percentage">
                    </div>
                </div>
            </div>

            <!-- Second Section -->
            <h2>Primary Place of Business</h2>
            <div class="row">
                <div class="col-md-3">
                    <!-- Building Name -->
                    <div class="form-group">
                        <label for="building_name">Building Name</label>
                        <input id="building_name" type="text" class="form-control" name="building_name">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Building No -->
                    <div class="form-group">
                        <label for="building_no">Building No</label>
                        <input id="building_no" type="text" class="form-control" name="building_no">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Floor No -->
                    <div class="form-group">
                        <label for="floor_no">Floor No</label>
                        <input id="floor_no" type="text" class="form-control" name="floor_no">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Street -->
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input id="street" type="text" class="form-control" name="street">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Post -->
                    <div class="form-group">
                        <label for="post">Post</label>
                        <input id="post" type="text" class="form-control" name="post">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Location/Place -->
                    <div class="form-group">
                        <label for="location_place">Location/Place</label>
                        <input id="location_place" type="text" class="form-control" name="location_place">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Country -->
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                            <!-- Options for countries -->
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Pincode -->
                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input id="pincode" type="text" class="form-control" name="pincode">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional, if you need JS components) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
