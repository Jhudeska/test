<!doctype html>
<html>

<head>
    <title>FLEXBOX TUTORIAL</title>
    <!-- external stylesheet-->
    <link rel="stylesheet" href="main.css">
    <style>

        /*    #flex-direction
                -> This properties will be apply on parent and affect the childeren
                -> #row (default)  #row-reverse  #column  #column-reverse
        */


        /*    #flex-wrap
                -> This properties will be apply on parent and affect the childeren
                -> #wrap #no-wrap (default)  #wrap-reverse
        */


        /*    #justify-content (controls horizontal layout)
                -> This properties will be apply on parent and affect the childeren (self can be apply to modify only one child)
                -> #flex-start #flex-end  #center #space around  #between
        */

        /*    #align-items(controls vertically layout)
                -> This properties will be apply on parent and affect the childeren
                -> #flex-start #flex-end  #center #baseline  #stretch (default)
        */

        /*    #align-content
                -> This properties will be apply on parent and affect the childeren
                -> #flex-start #flex-end  #center #  #stretch
        */

        /*    #Main Axis  x || horizontal     Cross Axis  y || vertical
                -> This properties will be apply on parent and affect the childeren
                -> #flex-start #flex-end  #center #  #stretch
        */

        /*    #Order
                -> Order is default set on 0
                -> With order our html order  will stay the same only the way CSS will display the order will be changed
                -> Optional can change the order when an different @media screen needs to be displayed
        */


        /*    #Align-self
                 -> This properties will be apply on the childeren of an parent
                -> childeren should have an #height set
        */


        /*    #Flex-grow
                 -> This properties will be apply on the childeren of an parent
                -> Please  fill in an integer to grow the box equally
        */

        /*    #Flex-shrink
                 -> This properties will be apply on the childeren of an parent
                -> Please  fill in an integer to grow the box equally
                -> default is flex-shink set to 1
        */

        /*    #Flex-basis
                 -> This properties will be apply on the childeren of an parent
                -> #auto || or set in pixel
        */


        /*    #Flex
         -> This properties will be apply on the childeren of an parent
        -> #flex: 1 (flex grow) 0 (flex shrink) 200px (basis) ||  flex: 1 0 200px;
*/






        @media screen and (max-width: 567px){

            .container{
                display: flex;
                flex-direction: column;
            }


            .box-1{
                order: 1;
            }

            .box-4{
                order: 2;
                width: 300px;
                flex-shrink: 0;
            }

            .box-5{
                order: -1;
            }
        }

        .box{
            flex-grow: 1;
            flex-basis: 100px;
        }
        .box-3{
            align-self: stretch;
        }


        .box-5{
            align-self: flex-end;
            flex-grow: 6;
        }

        .container{
            display: flex;
            height: 400px;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: stretch;
            align-content: flex-start;
            justify-content: center;
            align-items: center;
        }

        .container-1{
            border: 5px solid blue;
            display: flex;
            height: 800px;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }


    </style>
</head>

<body>
<div class="container">
    <div class="box box-1">1</div>
    <div class="box box-2">2</div>
    <div class="box box-3">3</div>
    <div class="box box-4">4</div>
    <div class="box box-5">5</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
</div>



<div class="container-1">
    <div class="box box-1">1</div>
    <div class="box box-2">2</div>
    <div class="box box-3">3</div>
    <div class="box box-4">4</div>
    <div class="box box-5">5</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
    <div class="box generic">G</div>
</div>

</body>
</html>