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
        .container{
            margin: 20px;
            padding: 20px;
        }

        .row special{
            min-height: 100vh;
            background: #f15025;
        }
    </style>
</head>

<body>

<!--  margin padding
    # 1rem - 16px
    # m p  => 0-5
-->
<h1>margin</h1>
<div class="container">
    <div class="bg-danger m-5">I am simple div</div>
    <div class="bg-info m-4">I am simple div</div>
    <div class="bg-warning m-3">I am simple div</div>
    <div class="bg-success m-2">I am simple div</div>
    <div class="bg-primary m-1">I am simple div</div>
    <div class="bg-secondary m-0">I am simple div</div>
</div>

<br><br><br><br><br><br><br><br>

<h1>padding</h1>
<div class="container">
    <div class="bg-danger p-5">I am simple div</div>
    <div class="bg-info p-4">I am simple div</div>
    <div class="bg-warning p-3">I am simple div</div>
    <div class="bg-success p-2">I am simple div</div>
    <div class="bg-primary p-1">I am simple div</div>
    <div class="bg-secondary p-0">I am simple div</div>
</div>

<br><br><br><br><br><br><br><br>

<h1>specific margin side</h1>
<div class="container">
    <div class="bg-danger ml-5">I am simple div</div>
    <div class="bg-info mt-5">I am simple div</div>
    <div class="bg-warning mb-5">I am simple div</div>
    <div class="bg-success mr-5">I am simple div</div>
    <div class="bg-primary mx-5">I am simple div</div>
    <div class="bg-secondary my-5">I am simple div</div>
</div>


<br><br><br><br><br><br><br><br>
<h1>specific padding side</h1>
<div class="container">
    <div class="bg-danger pl-5">I am simple div</div>
    <div class="bg-info pt-5">I am simple div</div>
    <div class="bg-warning pb-5">I am simple div</div>
    <div class="bg-success pr-5">I am simple div</div>
    <div class="bg-primary px-5">I am simple div</div>
    <div class="bg-secondary py-5">I am simple div</div>
</div>

<br><br><br><br><br><br><br><br>

<h1>Width</h1>
<div class="container">
    <div class="bg-danger w-25 mx-auto">I am simple div</div>
    <div class="bg-info w-50 mx-auto">I am simple div</div>
    <div class="bg-warning w-75 mx-auto">I am simple div</div>
    <div class="bg-success w-100 mx-auto">I am simple div</div>
</div>


<br><br><br><br><br><br><br><br>
<!--
        # Flexbox in bootstrap
        # D-flex
        # Justify content (center horizontaly)
        # Align items     (center horizontaly)
        #  affects only direct childeren

-->
<h1>Flexbox in bootstrap</h1>
<div class="container">
    <div class="row">
        <!-- d-flex the items inside the parent only will be effected in this case the two p -->
        <div class="col bg-danger d-flex justify-content-around">
            <p class="bg-warning">hello world</p>
            <p class="bg-info">hello world</p>
            <p class="bg-success">hello world</p>
            <p class="bg-dark">hello world</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col bg-danger d-flex justify-content-around align-items-center">
            <p class="bg-warning align-self-start">hello world</p>
            <p class="bg-info">hello world</p>
            <p class="bg-success">hello world</p>
            <p class="bg-dark align-self-end">hello world</p>
        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row  special  justify-content-center align-items-center">
        <div class="col-9 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid amet animi
                architecto blanditiis consequuntur debitis deserunt distinctio doloremque eaque earum eligendi error
                esse eum eveniet explicabo id illo incidunt ipsa minus nobis obcaecati officia pariatur praesentium
                quaerat qui, quisquam repellendus reprehenderit rerum sed, sint soluta tenetur velit voluptas.</p>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>