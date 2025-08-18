'use strict';

// Storage Generator
Storage.error = Storage.error || {
    get error() {
        return this._error;
    },
    set error(value) {
        this._error = value;
    },
};



// Show / hide menu
var menuItems = $('.header-top');
$('.menu-icon.menu-box').on('click', ()=>{
    if (menuItems.hasClass('menu-visible')) {
        menuItems.removeClass('menu-visible');
    } else {
        menuItems.addClass('menu-visible');
    }
});

// Hide Loader

$(window).on('load', ()=>{
    $('#cb').on('click', e=>{
        e.preventDefault();
        $('#page-loader').changeClass('hidden', 'opacity-75');
        $('#errorCD').text('').fadeOut();

        var e = e=>{ var rm;
            switch (e) {
                case 'p':
                    rm = 'Code invalide ou incomplet !';
                    break;
                case 'n':
                    rm = 'Aucune information trouver pour ce code !';
                    break;
                case 's':
                    rm = 'Une erreur s\'est produite dans le serveur, réessayer\NSi cela persiste, contacter votre administrateur !';
                    break;
                default:
                    rm = 'Une erreur qui nous est inconnue s\'est produite, réessayer plus tard.<br/>Si cela persiste, contacter votre administrateur !';
                    break;
            } $('#errorCD').text(rm).fadeIn().delay(8000).fadeOut();
            $('#page-loader').changeClass('opacity-75', 'hidden');
        }, a = (s)=>{
            try {
                $.ajax({
                    type: "POST",
                    url: "./-urls/get/student/-direct-profile.php5",
                    timeout: 3000,
                    data: {
                        u: s[0],
                        y: s[1],
                        c: s[2],
                        p: s[3],
                        c: s,
                        m: 'mcisme'
                    }, success: res=>{
                        console.log("END SUCCES", res);
                    }, error: res=>{
                        console.log("END ERROR", res);
                        e('s');
                    }, complete: ()=>{
                        $('#page-loader').changeClass('opacity-75', 'hidden');
                    }
                });
            } catch (error) {
                Storage.error.error = error;
                $('#page-loader').changeClass('opacity-75', 'hidden');
            }
        }, p = t => {
            var p = t.split('-');
            return (p.length === 4) ? p : false;
        }, y = t => p(t) ? a(p(t)) : e('p');
        y($('#cc').val());
    })
    $('#page-loader').addClass('hidden');
    $('body').css({
        overflow: 'auto'
    })
});

var dateReadableText = 'Upcoming date';
if ($('.site-config').attr('data-date-readable') && ($('.site-config').attr('data-date-readable') != '')) {
    $('.timeout-day').text('');
    dateReadableText = $('.site-config').attr('data-date-readable');
    $('.timeout-day').text(dateReadableText);
}
$('.clock-countdown').downCount({
    date: $('.site-config').attr('data-date'),
    offset: +10
}, function() {
    //callback here if finished
    //alert('YES, done!');
    var zerodayText = 'An upcoming date';
    if ($('.site-config').attr('data-zeroday-text') && ($('.site-config').attr('data-zeroday-text') != '')) {
        $('.timeout-day').text('');
        zerodayText = $('.site-config').attr('data-zeroday-text');
    }
    $('.timeout-day').text(zerodayText);
});
