<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
    <?php include_once('headerlink.php'); ?>
    
    <link rel="stylesheet" href="./Style/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Column 1 - Sidebar -->
            <nav class="col-lg-3 col-md-4 ">
                <?php include_once('bar.php'); ?>
            </nav>

            <!-- Column 2 - Add Form -->
            <div class="col-lg-9 col-md-8 col-12">
                <div class="container mt-5">
                    <h2>Add Shop Record</h2>
                    <form action="process.php" method="post">
                        <div class="mb-3">
                            <label for="shopId" class="form-label">Shop ID</label>
                            <input type="text" class="form-control" id="shopId" name="shopId" required>
                        </div>
                        <div class="mb-3">
                            <label for="shopAddress" class="form-label">Shop Address</label>
                            <input type="text" class="form-control" id="shopAddress" name="shopAddress" required>
                        </div>
                        <div class="mb-3">
                            <label for="shopRent" class="form-label">Shop Rent</label>
                            <input type="number" class="form-control" id="shopRent" name="shopRent" required>
                        </div>
                        <div class="mb-3">
                            <label for="shopStatus" class="form-label">Shop Status</label>
                            <select class="form-select" id="shopStatus" name="shopStatus" required>
                                <option value="Rented">Rented</option>
                                <option value="Free">Free</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tenant" class="form-label">Tenant</label>
                            <input type="text" class="form-control" id="tenant" name="tenant" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footerlink.php'); ?>
    <script type="text/javascript" src="./Script/logic.js"></script>
</body>
</html>
