<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
    <a href="" class="navbar-brand">Logo</a>
    <ul class="navbar-nav">
        <li><a href="" class="nav-link">Home</a></li>
        <li><a href="" class="nav-link">Product</a></li>
            <li class="dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
            <ul class="dropdown-menu">
                <li><a href="" class="dropdown-item">Item-1</a></li>
                <li><a href="" class="dropdown-item">Item-2</a></li>

            </ul>

        </li>
        <li><a href="" class="nav-link">Gallery</a></li>
        <li><a href="" class="nav-link">Contract</a></li>

        </ul>
    </div>
</nav>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All student</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            <?php foreach ($students as $student) { ?>
                            <tr>
                                <td><?php echo $student['name']?> </td>
                                <td><?php echo $student['email']?></td>
                                <td><?php echo $student['phone']?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>