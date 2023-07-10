$(document).ready(function() {
    $("#search").on("keyup", function() {
        var query = $(this).val().toLowerCase();
        $("table tr").each(function(index) {
            // Skip the first row (index 0)
            if (index !== 0) {
                var text = $(this).text().toLowerCase();
                if (text.indexOf(query) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });
});
