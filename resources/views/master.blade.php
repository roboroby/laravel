<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <title>Wayne Movie Manager</title>
    @yield('includes')
</head>
<style>


</style>
<body class="dt-example">
<div class="page-wrapper container">
    @yield('content')
</div>
<footer class="footer">
    <section>
        <div class="footer">
            <center>
                <div class="epilogue" style="padding-top:5em">
                    <p class="copyright">Epic Movies PRO+ designed in the USA © 2017<br>
                        Licensed under the <a href="https://opensource.org/licenses/MIT">MIT license</a></p>
                </div>
            </center>
        </div>
        <!-- /.footer -->
    </section>
</footer>
</div>
<!-- /.container -->
</body>
</html>