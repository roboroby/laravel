@extends('master')
@section('includes')
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Dark theme custom styles -->
    <link rel="stylesheet" type="text/css" href="css/custom.bootstrap.styles.css">

    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stop
@section('content')
    <div class="row">
        <div class="text-center" style="padding:1em">
            <span style="vertical-align:center"><h1>Epic Movies PRO+</h1></span>
            <a href="movies">
                <center>
                    <img src="./images/Movie_White.png" class="img-responsive" alt="Epic Movies PRO+">
                </center>
            </a>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="text-center">
            <a href="movies" class="btn btn-purple-power btn-lg">Experience</a>
        </div>
    </div>
    <!-- /.row -->
@stop