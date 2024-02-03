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
            <h2 class="text-center font-weight-200">CREATE INVOICE</h2>
            <!-- Form content goes here -->
        </div>
            <form method="POST" action="{{ route('invoices.store') }}">
            @csrf

            <div class="row">
                <!-- Invoice Number -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inv_no">Invoice Number</label>
                        <input id="inv_no" type="text" class="form-control" name="inv_no" required>
                    </div>
                </div>
                <!-- Invoice Date -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="invoice_date">Invoice Date</label>
                        <input id="invoice_date" type="date" class="form-control" name="invoice_date" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Customer -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="customer">Customer</label>
                        <select id="customer" class="form-control" name="customer">
                            <!-- Options for customers -->
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Second Section -->
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="#">#</label>
                        <input id="#" type="text" class="form-control" name="#" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="%">%</label>
                        <input id="%" type="text" class="form-control" name="%">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="rate">Rate</label>
                        <input id="rate" type="text" class="form-control" name="rate">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input id="qty" type="text" class="form-control" name="qty">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="tax_val">Tax Val</label>
                        <input id="tax_val" type="text" class="form-control" name="tax_val">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="cgst">CGST</label>
                        <input id="cgst" type="text" class="form-control" name="cgst">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="sgst">SGST</label>
                        <input id="sgst" type="text" class="form-control" name="sgst">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input id="total" type="text" class="form-control" name="total">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Third Section -->
                <div class="col-md-3 offset-md-9">
                    <div class="form-group">
                        <label for="cess">Cess</label>
                        <input id="cess" type="text" class="form-control" name="cess">
                    </div>
                </div>
                <div class="col-md-3 offset-md-9">
                    <div class="form-group">
                        <label for="kfc">KFC</label>
                        <input id="kfc" type="text" class="form-control" name="kfc">
                    </div>
                </div>
                <div class="col-md-3 offset-md-9">
                    <div class="form-group">
                        <label for="round_off">Round Off</label>
                        <input id="round_off" type="text" class="form-control" name="round_off">
                    </div>
                </div>
                <div class="col-md-3 offset-md-9">
                    <div class="form-group">
                        <label for="discount">Discount</label>
                        <input id="discount" type="text" class="form-control" name="discount">
                    </div>
                </div>
                <div class="col-md-3 offset-md-9">
                    <div class="form-group">
                        <label for="total_invoice_value">Total Invoice Value</label>
                        <input id="total_invoice_value" type="text" class="form-control" name="total_invoice_value">
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
