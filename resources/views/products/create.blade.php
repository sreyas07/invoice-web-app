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
        /* Optional: Additional custom styles */
        /* Adjust margins for better spacing */
        form div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container">
            <!-- Styled heading -->
            <h2 class="text-center font-weight-200">CREATE PRODUCT</h2>
            <!-- Form content goes here -->
        </div>
            <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <!-- Category -->
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            <option value="Cake">Cake</option>
                            <option value="Cookies">Cookies</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Code -->
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input id="code" type="text" class="form-control" name="code" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- HSN/SANCode -->
                    <div class="form-group">
                        <label for="hsn_sancode">HSN/SANCode</label>
                        <input id="hsn_sancode" type="text" class="form-control" name="hsn_sancode">
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- HSN/SANCode -->
                    <div class="form-group">
                        <label for="uqc">UQC</label>
                    </select>
                    <select class="form-control" id="uqc" name="uqc">
                        <option value="Kilogram">Kilogram</option>
                        <option value="Numbers">Numbers</option>
                        <option value="Pieces">Pieces</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- HSN/SANCode -->
                    <div class="form-group">
                        <label for="tax_rate">Tax Rate</label>
                        <select class="form-control" id="tax_rate" name="tax_rate">
                            <option value="5%">5%</option>
                            <option value="10%">10%</option>
                            <option value="15%">15%</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- RC Applicable -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rc_applicable" name="rc_applicable" value="1">
                        <label class="form-check-label" for="rc_applicable">RC Applicable</label>
                        <!-- Use JavaScript to handle checkbox value -->
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Track Inventory -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="track_inventory" name="track_inventory" value="1">
                        <label class="form-check-label" for="track_inventory">Track Inventory</label>
                        <!-- Use JavaScript to handle checkbox value -->
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Section -->
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="sl_no">Sl.No</label>
                        <input id="sl_no" type="text" class="form-control" name="sl_no">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input id="quantity" type="text" class="form-control" name="quantity">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="p_rate">P Rate</label>
                        <input id="p_rate" type="text" class="form-control" name="p_rate">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="s_rate">S Rate</label>
                        <input id="s_rate" type="text" class="form-control" name="s_rate">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input id="value" type="text" class="form-control" name="value">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" style="margin-top: 32px;">+</button>
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
