<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
{{--<script type="text/javascript">--}}
    {{--$('#date').datepicker()--}}
{{--</script>--}}
{{--<script>--}}
    {{--$(function () {--}}
        {{--$('#example1').datetimepicker({--}}
            {{--// format:'mm-dd-yyyy'--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
    {{--$(function () {--}}
        {{--$('#example2').datetimepicker({--}}
            {{--useCurrent: false,--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
<script type="text/javascript">

    $('.date').datepicker({

        format: 'yyyy-mm-dd'

    });

</script>
</body>
</html>