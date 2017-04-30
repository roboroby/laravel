@extends('master')
@section('includes')
    <!-- dataTables styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.2/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="css/custom.datatables.styles.css">

    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <!-- dataTables js -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="./js/dataTables.editor.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" language="javascript" src="./js/custom.dataTables.movies.js"></script>
@stop
@section('content')
    <header>
        <div id="primary-header">
            <div id="logo">
                <a href="/">Epic Movies PRO+</a>
            </div>
        </div>
    </header>

    <section id="content">
        <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Length</th>
                <th>Year</th>
                <th>Format</th>
                <th>Rating</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Title</th>
                <th>Length</th>
                <th>Year</th>
                <th>Format</th>
                <th>Rating</th>
            </tr>
            </tfoot>
        </table>
    </section>
@stop