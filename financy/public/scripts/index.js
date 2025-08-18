// document.addEventListener("turbolinks:load", function() {
if(typeof(loadash) === 'function') loadash();
$('[btn-type=action]').on('click', e => {
    e.preventDefault();
    let attr = e.currentTarget.attributes; 
    switch (attr['btn-title'].value) {
        case 'Delete':
            onDeleted(e)
            break;
        case 'Restore':
            onRestored(e);
            break;
        case 'Erase':
            onErase(e);
            break;
        case 'PrintLink':
            printLink(attr['btn-link'].value);
            break;
        default:
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't to execute this action",
                icon: 'warning',
                showCancelButton: true,
                backdrop: `rgba(60,60,60,0.8)`,
                confirmButtonText: 'Yes, I won\'t!',
                confirmButtonColor: "#c03221"
            }).then((result) => {
                if (result.isConfirmed)
                    $(e).click();
            })
            break;
    }
});
$('#input_section').on('change', e => changeOption());
$('#input_option').on('change', e => changeLevel());
$('#input_option, #input_level, #input_promotion').on('change', e => changeClass());
$('#input_class').on('change', e => changeStudent());
$('#input_level').on('change', e => changeFee());
$('form[dynamic]').on('submit', (e) => { let submitter = e.currentTarget.querySelector('button[type=submit]')||{disabled:false}; submitter.disabled = true;
    e.preventDefault();
    let form = e.currentTarget, 
        data = new FormData(form);
    window.lastDynamicSubmitForm = $.ajax({
        url: unIdLink(form.action) + (! form.action.includes("?") ? '?' : '&') + "method=JSON&sending_by=mcisme&mcisme",
        data: data,
        type: form.method||"POST",
        contentType: false,
        cache: false,
        processData: false,
        statusCode: {
            201: () => Swal.fire(
                'Saved!',
                'Your data has been saved successfully.',
                'success'
            ), 204: () => Swal.fire(
                'Deleted!',
                'Your data has been deleted successfully.',
                'success'
            ), 205: () => Swal.fire(
                'Reset!',
                'Your data has been reseted successfully.',
                'success'
            ), 404: () => Swal.fire(
                'Not Found!',
                'Your data link action has been not found.',
                'success'
            ), 405: () => Swal.fire(
                'Not Allowed!',
                'You are not authorized to perform this action on this data.',
                'success'
            ), 400: () => Swal.fire(
                'Bad Request!',
                'The URL of the data to be processed was badly formatted or incomplete.',
                'error'
            ), 502: () => Swal.fire(
                'Failed!',
                'Another web service could not honor the complete execution of this action.',
                'error'
            ),
        },
        success: function(response) {}
    }).always(function(jqXHR, textStatus) {
        if (![204, 204, 205, 400, 404, 405, 502].includes(jqXHR.status)) Swal.fire(
            'Error!',
            'An unexpected error occurred while performing this action.',
            'error'
        );
    });
});

function onDeleted(e){
    Swal.fire({
        title: 'Are you sure?',
        text: 'are you sure you wont to perform this action',
        icon: 'warning',
        showCancelButton: true,
        backdrop: `rgba(60,60,60,0.8)`,
        confirmButtonText: 'Yes, delete it!',
        confirmButtonColor: "#c03221"
    }).then((result) => {
        if (result.isConfirmed) {
            link = e.currentTarget.href
            fetch(link.slice(0, link.lastIndexOf('#'))+'?method=JSON').then(
                response => {
                    if(response.status === 204) Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ); else if(response.status === 405) Swal.fire(
                        'Not Allowed!',
                        'Your not allowed to deleted this element.',
                        'success'
                    ); else if(response.status === 400) Swal.fire(
                        'Bad Request!',
                        'The url of the thing to delete was malformated.',
                        'error'
                    ); else if(response.status === 502) Swal.fire(
                        'Delete Failed!',
                        'Some other web service could not honour the delete.',
                        'error'
                    ); else  Swal.fire(
                        'Error While Deleting!',
                        'An unexpected error occurred during the removal process.',
                        'error'
                    ); 
                }
            )
        }
    })
}

function onEresed(e){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        backdrop: `rgba(60,60,60,0.8)`,
        confirmButtonText: 'Yes, Erese it!',
        confirmButtonColor: "#c03221"
    }).then((result) => {
        if (result.isConfirmed) {
            link = e.currentTarget.href
            fetch(link.slice(0, link.lastIndexOf('#'))+'?method=JSON').then(
                response => {
                    if(response.status === 204) Swal.fire(
                        'Eresed!',
                        'Your file has been Eresed.',
                        'success'
                    ); else if(response.status === 405) Swal.fire(
                    'Not Allowed!',
                    'Your not allowed to erased this element.',
                    'success'
                    ); else if(response.status === 400) Swal.fire(
                        'Bad Request!',
                        'The url of the thing to Erese was malformated.',
                        'error'
                    ); else if(response.status === 502) Swal.fire(
                        'Erese Failed!',
                        'Some other web service could not honour the Erese.',
                        'error'
                    ); else  Swal.fire(
                        'Error While Erasing!',
                        'An unexpected error occurred during the erase process.',
                        'error'
                    ); 
                }
            )
        }
    })
}

function onRestored(e){
    Swal.fire({
        title: 'Are you sure?',
        text: 'are you sure you wont to perform this action',
        icon: 'warning',
        showCancelButton: true,
        backdrop: `rgba(60,60,60,0.8)`,
        confirmButtonText: 'Yes, restore it!',
        confirmButtonColor: "#21c032"
    }).then((result) => {
        if (result.isConfirmed) {
            link = e.currentTarget.href
            fetch(link.slice(0, link.lastIndexOf('#'))+'?method=JSON').then(
                response => {
                    if(response.status === 205) Swal.fire(
                        'Restored!',
                        'Your file has been restored.',
                        'success'
                    ); else if(response.status === 405) Swal.fire(
                        'Not Allowed!',
                        'Your not allowed to restored this element.',
                        'success'
                    ); else if(response.status === 400) Swal.fire(
                        'Bad Request!',
                        'The url of the thing to restore was malformated.',
                        'error'
                    ); else if(response.status === 502) Swal.fire(
                        'Restore Failed!',
                        'Some other web service could not honour the restore.',
                        'error'
                    ); else  Swal.fire(
                        'Error While Deleting!',
                        'An unexpected error occurred during the restore process.',
                        'error'
                    ); 
                }
            )
        }
    })
}

if ($('table[data-table="default"]').length) {
    $('table[data-table="default"] tfoot th').each(function () {
        const title = $(this).attr('title');
        $(this).html(`<td><input type="text" class="form-control form-control-sm" placeholder="${title}" /></td>`);
    });

    var hiddentable = $('table[data-table="default"]').DataTable({
        initComplete: function () {
        this.api().columns().every(function () {
            var that = this;
    
            $('input', this.footer()).on('keyup change clear', function () {
            if (that.search() !== this.value) {
                that
                .search(this.value)
                .draw();
            }
            });
        });
        }, paging: true,
        retrieve: true,
        stateSave: true,
        info: true,
        lengthChange: true,
        lengthMenu: [20, 50, 75, 100, 500, 1000],
        columnDefs: [{
            targets: [0, -1], // column or columns numbers
            orderable: true // set orderable for selected columns
        }],
        dom: 'Blfrtip',
        buttons: [{
            extend: 'collection',
            text: 'Exporter',
            buttons: ['copy', 'csv', 'excel',
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                }
            , 'print']
        }],
    });

    $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();
        const column = hiddentable.column($(this).attr('data-column'));
        column.visible(!column.visible());
    });
};

function printLink(link){
    if (typeof(wp) === 'undefined' || wp === null || wp.closed) {
        wp = window.open(link, "Mcisme", "modal");
        wp.addEventListener('load', () => {
            wp.document.title = window.document.title;
            wp.moveTo(0,0);
            wp.resizeTo(screen.width, screen.height);
            wp.print();
            wp.addEventListener('afterprint', wp.close)
        })
    } else {
        wp.focus();
        wp.open();
    }
}

changeOption = () => {
    var std = $("#input_option").html('');
    $.ajax({
        url: "/app/settings/get/options.php",
        type: "POST",
        dataType: "json",
        data: {
            section: $('#input_section').val()
        },
        success: function(res) {
            try {
                res.map(({ id, text }) => std.append(new Option(text, id))); changeLevel();
            } catch (error) {
                std.append(new Option(res.text, res.id))
            }
        }
    });
}

changeLevel = () => {
    var selector = $("#input_level").html('');
    $.ajax({
        url: "/app/settings/get/levels.php",
        type: "POST",
        dataType: "json",
        data: {
            option: $('#input_option').val()
        },
        success: function(res) {
            try {
                res.map(({ id, text }) => selector.append(new Option(text, id)));
                changeClass();
            } catch (error) {
                selector.append(new Option(res.text, res.id))
            }
        }
    });
}

changeFee = () => {
    var fee = $("#input_fee").html('');
    $.ajax({
        url: "/app/settings/get/fees.php",
        type: "POST",
        dataType: "json",
        data: {
            level: $('#input_level').val()
        },
        success: function(res) {
            try {
                res.map(({ id, text }) => fee.append(new Option(text, id)));
                changeClass();
            } catch (error) {
                fee.append(new Option(res.text, res.id))
            }
        }
    });
}

changeClass = () => {
    var a = $("#input_class").html('');
    $.ajax({
        url: "/app/settings/get/classes.php",
        type: "POST",
        dataType: "json",
        data: { 
            option: $('#input_option').val(),
            promotion: $('#input_promotion').val(),
            level: $('#input_level').val(),
        },
        success: function(r) {
            try {
                r.map(({ id, text }) => a.append(new Option(text, id)));
                changeStudent();
            } catch (error) {
                a.append(new Option(r.text, r.id))
            }
        }
    });
}

changeStudent = () => {
    var std = $("#input_student").html('');
    $.ajax({
        url: "/app/settings/get/students.php",
        type: "POST",
        dataType: "json",
        data: {
            class: $('#input_class').val(),
            promotion: $('#input_promotion').val(),
        },
        success: function(res) {
            try {
                res.map(({ id, text }) => std.append(new Option(text, id)));
            } catch (error) {
                std.append(new Option(res.text, res.id))
            }
        }
    });
}

const promptedGenerateNewStdKey = () => {
    let keyHash = prompt(
        'Veuillez entrer une clé de chiffrement inférieure à 4 caractères : ',
        'ISTA'
    ); if(
        keyHash,
        confirm('Êtes-vous sûr de vouloir effectuer cette action ?')
    ) alert("Le paiement sélectionné a été fait en mode libre et n’est par conséquent lié à aucun élève. \nVeuillez d’abord effectuer un adressage sur l’élève en cours puis réessayer !")
}

const copyTextToClipboard = (event) => {
    event.preventDefault();
    const text = event.target.parentElement.firstChild.innerText;
    navigator.clipboard.writeText(text).then(() => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        
        Toast.fire({
            icon: 'success',
            title: 'Texte copié dans le presse-papier'
        })
    });
}

const unIdLink = (str) => str.endsWith("#") ? str.substr(0, str.length - 1) : str;

/*--------------single----------------*/
$(".select2-basic-single").select2();

/*--------------tags----------------*/
$(".select2-basic-single-tag").select2({
tags: true
});

/*--------------multiple----------------*/
$(".select2-basic-multiple").select2();

/*--------------disble----------------*/
var $disabledResults = $(".select2-disabled ");
$disabledResults.select2();

/*--------------placeholder----------------*/
$('.select2-placeholder').select2({
placeholder: "Select a State",
allowClear: true
});
/*--------------maximum num----------------*/
$(".select2-multiple-limit").select2({
maximumSelectionLength: 3
});

/*--------------theme----------------*/
$(".select2-theme-single").select2({
theme: "classic"
});
/*--------------select 2----------------*/
$(".select2-option-creation").select2({
tags: true
});
/*--------------select 2 automatic----------------*/
$(".select2-automatic-tokenizer").select2({
tags: true,
tokenSeparators: [',', ' ']
})
// })
// window.addEventListener('load', W => {
//     Turbolinks.start();
// });