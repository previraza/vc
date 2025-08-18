$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Retour',
            next : 'Suivant',
            finish : 'Envoyer',
            current : ''
        },
        onStepChanging: function (e, i, j) {
            if(!window.__checked_element) return false;
            $('#full_name').val(($('#dt_nom').val()&&$('#dt_postnom').val()&&$('#dt_prenom').val())?$('#dt_nom').val()+' '+$('#dt_postnom').val()+ ' ' +$('#dt_prenom').val():'');
            $('#user_name').val('user_'+Date.now());
            return(--j>i||(j>=i&&((a,r=0)=>{a.removeClass('no-data');a.each(i=>{if(!a[i].value){r=a[i];$(r).addClass('no-data')}});a.on('keyup', e=>$(e).removeClass('no-data'));return r;})($('.inner-'+i+' [required]'))))?false:true;
        },onFinishing:(e,i)=>{
            if(!((a,r=0)=>{a.parent().removeClass('no-data');a.each(i=>{if(!a[i].value){r=a[i];$(r).parent().addClass('no-data')}});a.on('keyup', e=>$(e).parent().removeClass('no-data'));return r;})($('.inner-'+i+' [required]'))){
                $('#form-loader').fadeIn(300);
                $('#json_error_response').remove();
                $.ajax({
                    url: '/public/profile/setting.php?sending_by=mcisme',
                    data: new FormData(document.getElementById('form-register')),
                    type: "POST",
                    contentType: !1,
                    cache: !1,
                    processData: !1,
                    success: function(e) {
                        try {
                            res = JSON.parse(e);
                            if(res.type == 'success') $('#form-total>div>ul').fadeOut();
                            $('#form-total > div.actions.clearfix').append(`<div class="alert alert-${res.type == 'success'?'success':'danger'}" id=json_error_response>${res.content} <div ${(res.getId?'':'style=display:none')}>Vous trouverez une copie imprimable de votre demande dans le lien suivant <a class="btn-big rounded-3 bg-secondary" target=_blank href="/app/admin/pages/actions/print-register.php?id=${res.getId}"><i>Lien d'impression</i><a/></div></div>`).addClass('d-flex flex-column-reverse');
                        } catch (error) {
                            console.log('Traitement incorrect...');
                            $('#form-total > div.actions.clearfix').append(`<div class="alert alert-danger" id=json_error_response>Une erreur s'est produit pendant la mise en ligne de vos donnee, si cela persiste veuillez le signaler a votre administrateur...</div>`).addClass('d-flex flex-column-reverse');
                        } $('#form-loader').fadeOut(300)
                    }   
                });
            }
        }
    }); 
    $('#std_profile').on('change', e=>e.currentTarget.parentElement.style.backgroundImage='url('+URL.createObjectURL(e.currentTarget.files[0])+')');
    $('input[name="cycle"]').on('change', e=>{
        window.__checked_element = true
        $('input.orientation').parent().fadeOut(0)
        $('input.orientation.'+e.currentTarget.id).parent().fadeIn()[0].children[0].checked = true
    })
    $('.select2').select2({
        width: '100%'
    });
});
