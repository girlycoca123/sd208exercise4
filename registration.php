<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
</head>

<body class="main">
    <div class="container d-flex flex-column min-vh-100">
        <div class="row flex-grow-1 justify-content-center align-items-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                      <center> <b><div class= "text white txt" >S I G N  U P ! </div></center></b> 
                    </div>
                    <div class="card-body">
                        <form class="laban" action="./handler/register.php" method="post">
                            <div class="form-row laban">
                                <div class="form-group col-md-6 ">
                                    <input type="text" class="form-control" name="inputfName" placeholder="First Name*"  required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="inputlName" placeholder="Last Name*" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="email" class="form-control" name="inputEmail" placeholder="Enter Your Email*" required>
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control" name="inputAddress" placeholder="Enter Your Address*" required>
                            </div>
                             <button type="submit" name="submit" class="btn  btn-block btn-violet">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>