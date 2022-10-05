// Search elements

$(function () {
    $('table').searchable({
        striped: true,
        oddRow: {
            'background-color': '#f5f5f5'
        },
        evenRow: {
            'background-color': '#fff'}
        ,
        searchType: 'fuzzy'
    });

    $('#searchable-container').searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function (elem) {
            elem.slideDown(100);
        },
        hide: function (elem) {
            elem.slideUp(100);
        }
    });
});


$(document).on('show','.accordion', function (e) {
         $(e.target).prev('.accordion-heading').addClass('accordion-opened');
    });
$(document).on('hide','.accordion', function (e) {
        $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
});