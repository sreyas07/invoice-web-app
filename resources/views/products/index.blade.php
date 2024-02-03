<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Products</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>HSN/SANCode</th>
                            <th>UQC</th>
                            <th>Tax Rate</th>
                            <th>RC Applicable</th>
                            <th>Track Inventory</th>
                            <th>Sl.No</th>
                            <th>Quantity</th>
                            <th>P Rate</th>
                            <th>S Rate</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->hsn_sancode }}</td>
                            <td>{{ $product->uqc }}</td>
                            <td>{{ $product->tax_rate }}</td>
                            <td>{{ $product->rc_applicable ? 'Yes' : 'No' }}</td>
                            <td>{{ $product->track_inventory ? 'Yes' : 'No' }}</td>
                            <td>{{ $product->sl_no }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->p_rate }}</td>
                            <td>{{ $product->s_rate }}</td>
                            <td>{{ $product->value }}</td>
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
