<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Database Data to Excel Export</title>
</head>

<body>
    <div class="container mx-auto my-5">
        <h2 class="text-center py-4">Database All Data show</h2>
        <a href="#" class="btn btn-sm btn-success mb-3 float-right">Export to Excel</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Company Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bilash Kumar mondol</td>
                    <td>bilash@ci-gsc.com</td>
                    <td>0170537343</td>
                    <td>Gulshan Dhaka</td>
                    <td>GSC</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-warning ">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>