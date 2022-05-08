<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CRUD</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            /* background-color: #F8F8FF; */
            background-color: darkslategray;
        }
        .text-blue{
            color:#4682B4;
        }
        .bg-orange{
            background-color:#FF4500;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-md-4 mx-auto mb-5">
                <div class="card px-2">
                    <div class="card-body">
                        <h2 class="text-center text-secondary">STUDENT DETAILS</h2>
                        <div class="msg">
                        </div>
                        <div class="form-group my-3">
                            <input type="hidden" id="id" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="name" class="text-blue">STUDENT NAME</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="fatherName" class="text-blue">STUDENT FATHER'S  NAME</label>
                            <input type="text" id="fatherName" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="motherName" class="text-blue">STUDENT MOTHER'S  NAME</label>
                            <input type="text" id="motherName" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="phone" class="text-blue">STUDENT PHONE NO</label>
                            <input type="number" id="phone" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="address" class="text-blue">STUDENT ADDRESS</label>
                            <textarea  id="address"rows="3" class="form-control"></textarea>
                        </div>
                        <div class="input-group my-3">
                            <input type="button" value="ADD STUDENT" class="form-control bg-primary text-white" id="add_btn">
                        </div>
                        <div class="input-group my-3">
                            <input type="button" value="UPDATE STUDENT" class="form-control bg-danger text-white" id="update_btn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card px-2">
                    <div class="card-body">
                        <h2 class="text-center text-secondary">STUDENT DETAILS</h2>
                        <div class="student-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- js file -->
    <script src="app.js"></script>
</body>
</html>