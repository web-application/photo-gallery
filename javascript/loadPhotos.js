/**
 * Created by olgaoskina on 24/05/15.
 */
function ajaxLoader() {
    var inProgress = false;
    var startFrom = 5;

    $(window).scroll(function () {
        if (($(window).scrollTop()) >= ($(document).height() - $(window).height()) && !inProgress) {
            $.ajax({
                url: 'showPhotos.php',
                type: 'POST',
                data: {"startFrom": startFrom},
                beforeSend: function () {
                    inProgress = true;
                },
                success: function (data) {
                    if (data.length > 0) {
                        $("#photos").append(data);
                        inProgress = false;
                        startFrom += 4;
                    }
                }
            });
        }
    });
}
