<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Hello World </title>
    </head>
    <body>
        <button id="get_notification"> Get Data! </button>

        <ol id="list">
        </ol>

    </body>

    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#get_notification").click(function() {
                $.getJSON("{{ url("/notification") }}", function(data) {

                    var items = [];
                    $.each( data, function( key, val ) {
                        items.push( "<li id='" + key + "'>" + val + "</li>" );
                    });

                    $("#list").html(items);

                });
            });
        });
    </script>
</html>
