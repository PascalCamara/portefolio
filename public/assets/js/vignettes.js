$(document).ready(function() {

    $('.vignette').each(function(index) {
        var href = $(this)[0].dataset.url;
        var project_title = $(this).find(".vignette_project_title").text();
        var data = {
            'href' : href,
            'project_title' : project_title
        };

        $(this).find('a').first().click(function() {
            var container = $('.pp_default').find('.pp_bottom');
            $(container).empty();
            $(container).append(
                '<a target="_blank" href="'+ data.href +'" class="btn">Voir le projet ' + data.project_title +' </a>'
            );
        });
    });
});