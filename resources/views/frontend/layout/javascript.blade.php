 <script>
    $(document).ready(function () {
    $(document).on('click', '#locale', function () {
        var locale = $(this).attr('value');
        var url = $('#languageUrl').val();
        var settings = {
            "url": url + "?locale=" + locale,
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(settings).done(function (response) {
            location.reload();
            });
        });
    });
</script>