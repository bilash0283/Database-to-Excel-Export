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
        <a href="#" class="btn btn-sm btn-success mb-3 ">Export to Excel</a>
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

            <?php 
                $db = include('db.php');
                $sqlagent = "SELECT * FROM agents";
                $res = mysqli_query($db,$sqlagent);
                $sl = 0;
                while($row = mysqli_fetch_assoc($res)){
                    $sl = $sl ++;
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                    $company = $row['company'];
            ?>

            <tbody>
                <tr>
                    <td><?php echo $sl; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $company; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-warning ">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>