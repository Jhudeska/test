<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            background: aqua;
        }

        @media screen and (min-width: 576px){
            /* 576px and up*/
            body{
                background: red;
            }
        }

        @media screen and (min-width: 768px){
            /* 768px and up*/
            body{
                background: blue;
            }
        }

        @media screen and (min-width: 992px){
            /* 992px and up*/
            body{
                background: green;
            }
        }

        @media screen and (min-width: 1200px){
            /* 1200px and up*/
            body{
                background: yellow;
            }
        }

    </style>
</head>

<body>

<!-- grid (12)
    # an container contains a padding right and left
    # container-fluid stays on the whole screen
-->
<div class="container">
    <div class="row">
        <div class="col bg-danger">i'm a single column</div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class=" bg-info">i'm a single column</div>
        <div class=" bg-warning">i'm a single column</div>
        <div class=" bg-dark">i'm a single column</div>
        <div class=" bg-danger">i'm a single column</div>
    </div>

    <br><br><br><br><br><br><br><br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7 col-md-10 col-lg-3 col-xl-9 bg-info">i'm a single column</div>
            <div class="col-sm-5 col-md-2 col-lg-9 col-xl-3 bg-warning">i'm a single column</div>
            <div class="col-sm-8 col-md-11 col-lg-7 col-xl-2 bg-dark">i'm a single column</div>
            <div class="col-sm-4 col-md-1 col-lg-5 col-xl-10 bg-danger">i'm a single column</div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 bg-primary">I am three</div>
            <div class="col-sm-6 bg-primary">I am six</div>
            <div class="col-sm-3 bg-primary">I am three
                <div class="row">
                    <div class="col-6 bg-danger">I am half
                        <div class="row">
                            <div class="col-1 bg-dark">I am half</div>
                            <div class="col-11 bg-warning">I am half</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br>











        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>