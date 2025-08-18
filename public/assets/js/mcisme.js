window.addEventListener('load', function() {
    if (jQuery.fn.owlCarousel) {
        $("#testimonial-carousel").owlCarousel({
            center: false,
            loop: true,
            margin: 30,
            responsive: {
                1000: { items: 3 },
                600: { items: 2 },
                0: { items: 1 }
            }
        });
    }

    // Spice-Navigator
    (function() {
        let internal = $('body>#contenair'),
            external = $('body>#content'),
            separator = $('div#separator'),
            internallH = internal.height(),
            externalH = external.height();

        /* internal.css({
            height: internallH + 'px',
        }) */

        external.css({
            display: 'block',
            top: '-' + (externalH + innerHeight) + 'px'
        })

        $('a[spiceLink]').on('click', function(e) {
            mci = e;
            let a = e.target,
                id = a.attributes.href.value,
                el = $(id);
            if (id === '#_mcisme_') {
                separator.fadeIn(0).css({
                    top: '',
                });
                setTimeout(() => {
                    external.removeClass('activeted');
                }, 500);
                internal.css({
                    height: internallH + 'px'
                });
                $('body>#content>section').css({
                    top: 0
                });
            } else if (el.length) {
                internal.css({
                    height: 0
                })
                separator.css({
                    top: '125vh',
                })
                setTimeout(() => {
                    separator.css({
                        display: 'none',
                    });
                }, 1500);
                setTimeout(() => {
                    external.addClass('activeted');
                }, 500);
                el.css({
                    position: 'absolute',
                    top: (externalH + innerHeight) + 'px'
                })
            }
        });
        $('button[register-box]').on('click', e => $('#register>.register-wrapper').css({ right: (e.currentTarget.attributes['register-box'].value - 1) + '0' + (2 * (e.currentTarget.attributes['register-box'].value - 1)) + '%' }));

        $('form[dynamic-form]').on('submit', (e) => {
            e.preventDefault();
            var data = new FormData(e.currentTarget),
                err = $('.errorRapport', e.currentTarget).html('');
            window.a = $.ajax({
                url: e.currentTarget.action + "&sending_by=mcisme&mcisme",
                data: data,
                type: "POST",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    try {
                        var res = JSON.parse(response);
                        if (res.status == '5400') {
                            location.reload();
                        } else {
                            console.log(res.content);
                            err.html(`<div class="p-3 alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect">
                                <div><strong>${res.title} : </strong><br /><small>${res.content}</small></div>
                            </div>`);
                        }
                    } catch (error) {
                        console.error(response);
                        err.html(`<div class="p-3 alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect">
                            <div><strong>Erreur : </strong><br /><small>Une erreur inattendue s'est produit pendant l'enregistrement.<br />Veuillez réessayer plus tard, si cela persiste, contacté votre administrateur</small></div>
                        </div>`);
                    }
                }
            });
        })
    })();
});