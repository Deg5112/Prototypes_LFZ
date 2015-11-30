<!DOCTYPE>
<html>
<head>
    <script src="jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<style>
    div#image-container {
        border: 1px solid black;
        width: 50%;
        height: 50%;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        min-width: 370px;
        min-height: 317px;
        background-color: black;
    }
    div#inner-container {
        border: 1px solid green;
        position: absolute;
        height: 90%;
        width: 90%;

        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }

    img {
        width: 100%;
        height: 100%;
    }
    #next, #prev {
        background-color: rgba(58, 51, 51, 0.23);
        display: inline-block;
        position: absolute;
    }
    #next:hover, #prev:hover{
        cursor: pointer;
    }
    #next {
        right: 0;
        bottom: 50%;
    }
    #prev{
        left: 0;
        bottom: 50%;
    }
    .glyphicon {
        padding: 11px;
        background-color: rgba(128, 128, 128, 0.19);
    }

    .photo-icon {
        border: 2px solid white;
        position: relative;
        width: 1em;
        height: .9em;
        display: inline-block;
        z-index: 8;
        border-radius: 50%;
        top: 95.5%;
        left: 35%;
    }
    span{
        color:white;
    }

    .active{
     background-color:white;
    }
</style>
</head>
<body>
<?php
include('object.php');
?>
<div id="image-container">
    <div class="photo-icon" id="0"></div>
    <div class="photo-icon" id="1"></div>
    <div class="photo-icon" id="2"></div>
    <div class="photo-icon" id="3"></div>
    <div class="photo-icon" id="4"></div>
    <div class="photo-icon" id="5"></div>
    <div class="photo-icon" id="6"></div>
    <div id="inner-container">

        <div id="next"><span class="glyphicon glyphicon-chevron-right"></span></div>
        <div id="prev"><span class="glyphicon glyphicon-chevron-left"></span></div>


    </div>
</div>

</body>

</html>


