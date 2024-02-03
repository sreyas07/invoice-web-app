<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Invoice List</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Invoice Number</th>
                            <th>Invoice Date</th>
                            <th>Customer</th>
                            <th>#</th>
                            <th>%</th>
                            <th>Rate</th>
                            <th>Qty</th>
                            <th>Tax Val</th>
                            <th>CGST</th>
                            <th>SGST</th>
                            <th>Total</th>
                            <th>Cess</th>
                            <th>KFC</th>
                            <th>Round Off</th>
                            <th>Discount</th>
                            <th>Total Invoice Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterate over invoices and display data -->
                        @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->inv_no }}</td>
                            <td>{{ $invoice->invoice_date }}</td>
                            <td>{{ $invoice->customer }}</td>
                            <td>{{ $invoice->field1 }}</td>
                            <td>{{ $invoice->field2 }}</td>
                            <td>{{ $invoice->field3 }}</td>
                            <td>{{ $invoice->field4 }}</td>
                            <td>{{ $invoice->field5 }}</td>
                            <td>{{ $invoice->field6 }}</td>
                            <td>{{ $invoice->field7 }}</td>
                            <td>{{ $invoice->field8 }}</td>
                            <td>{{ $invoice->field9 }}</td>
                            <td>{{ $invoice->field10 }}</td>
                            <td>{{ $invoice->field11 }}</td>
                            <td>{{ $invoice->field12 }}</td>
                            <td>{{ $invoice->field13 }}</td>
                            <td>{{ $invoice->field14 }}</td>
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
