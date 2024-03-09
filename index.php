<?php
    include "./include/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Cascading Drop Down</title>
</head>
<body style="">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Select Category
                    </div>
                    <div class="card-body">
                        <Select class="w-25">
                            <option value="" >Category</option>
                        </Select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Select Category
                    </div>
                    <div class="card-body">
                        <Select class="w-25">
                            <option value="" >Category</option>
                        </Select>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    
</body>
</html>