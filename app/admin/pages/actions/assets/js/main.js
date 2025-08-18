!function(e) {
    "use strict";
    e("#download_btn").on("click", (function() {
        var t = e("#download_section")
        , n = t.width()
        , o = t.height()
        , d = n + 80
        , a = 1.5 * d + 80
        , i = n
        , c = o
        , r = Math.ceil(o / a) - 1;
        html2canvas(t[0], {
            allowTaint: !0
        }).then((function(e) {
            e.getContext("2d");
            var t = e.toDataURL("image/jpeg", 1)
            , n = new jsPDF("p","pt",[d, a]);
            n.addImage(t, "JPG", 40, 40, i, c);
            for (var o = 1; o <= r; o++)
                n.addPage(d, a),
                n.addImage(t, "JPG", 40, -a * o + 0, i, c);
            n.save("as-invoice.pdf")
        }
        ))
    })),
    e(".print_btn").on("click", (function(e) {
        window.print()
    }
    )),
    window.addEventListener("contextmenu", (function(e) {
        e.preventDefault()
    }), !1),
    document.onkeydown = function(e) {
        return 123 != event.keyCode && ((!e.ctrlKey || !e.shiftKey || e.keyCode != "I".charCodeAt(0)) && ((!e.ctrlKey || !e.shiftKey || e.keyCode != "C".charCodeAt(0)) && ((!e.ctrlKey || !e.shiftKey || e.keyCode != "J".charCodeAt(0)) && ((!e.ctrlKey || e.keyCode != "U".charCodeAt(0)) && void 0))))
    }

    var UpIn = false;
    e("#update_btn").on("click", (function() {
        let btn = document.createElement('button');
        btn.className = "save_btn bg-success";
        btn.id = 'save_btn';
        btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9688 8.46875C12.1146 8.32292 12.2917 8.25 12.5 8.25C12.7083 8.25 12.8854 8.32292 13.0312 8.46875C13.1771 8.61458 13.25 8.79167 13.25 9C13.25 9.20833 13.1771 9.38542 13.0312 9.53125C12.8854 9.67708 12.7083 9.75 12.5 9.75C12.2917 9.75 12.1146 9.67708 11.9688 9.53125C11.8229 9.38542 11.75 9.20833 11.75 9C11.75 8.79167 11.8229 8.61458 11.9688 8.46875ZM13.5 5.5C14.1875 5.5 14.7708 5.75 15.25 6.25C15.75 6.72917 16 7.3125 16 8V12C16 12.1458 15.9479 12.2708 15.8438 12.375C15.7604 12.4583 15.6458 12.5 15.5 12.5H13.5V15.5C13.5 15.6458 13.4479 15.7604 13.3438 15.8438C13.2604 15.9479 13.1458 16 13 16H3C2.85417 16 2.72917 15.9479 2.625 15.8438C2.54167 15.7604 2.5 15.6458 2.5 15.5V12.5H0.5C0.354167 12.5 0.229167 12.4583 0.125 12.375C0.0416667 12.2708 0 12.1458 0 12V8C0 7.3125 0.239583 6.72917 0.71875 6.25C1.21875 5.75 1.8125 5.5 2.5 5.5V1C2.5 0.729167 2.59375 0.5 2.78125 0.3125C2.96875 0.104167 3.1875 0 3.4375 0H10.375C10.7917 0 11.1458 0.145833 11.4375 0.4375L13.0625 2.0625C13.3542 2.35417 13.5 2.70833 13.5 3.125V5.5ZM4 1.5V5.5H12V3.5H10.5C10.3542 3.5 10.2292 3.45833 10.125 3.375C10.0417 3.27083 10 3.14583 10 3V1.5H4ZM12 14.5V12.5H4V14.5H12ZM14.5 11V8C14.5 7.72917 14.3958 7.5 14.1875 7.3125C14 7.10417 13.7708 7 13.5 7H2.5C2.22917 7 1.98958 7.10417 1.78125 7.3125C1.59375 7.5 1.5 7.72917 1.5 8V11H14.5Z" fill="white" />
                        </svg><span>Sauvegarder</span>`;
                        
        e("[data-input]").addClass('update-case').keyup('change', (e) => e.currentTarget.dataset.inputUpdated = UpIn = true);
        e('button.print_btn').after(btn);
        e("#update_btn").off("click");

        btn.addEventListener('click', ()=>{
            if (!UpIn) return alert("Aucune modification n'a ete detecter...");
            console.log('Updated Saving...'); (function() {
                let inputs = $("[data-input]"), data = {
                    register : true,
                    formular_id : ((id) => typeof(id)=='number'?id:0)($("[data-formular]").data('formular')),
                    inputs : {}
                };
                inputs.each((idx,el)=>{
                    if(el.dataset.inputUpdated) data.inputs[el.dataset.input] = el.innerText
                }); $.ajax({
                    type: "POST",
                    url: "/public/profile/updating.php?sending_by=HASH_GLOSAC_XLSSK-ROOT",
                    data: data,
                    dataType: "json",
                    success: function (res) {
                        alert(res.content)
                        alert(res.content)
                        if (res.type == 'success') location.reload();
                    }
                }); console.log('End of update backup!');
            })();
        }); 
    }));     
    e("#share_btn").on("click", (function() {
        let l = location.href, btn = document.createElement('div'),
        links = `<a target=_blank class="bg-success" href="https://wa.me/?text=${l}%2526anacad=2022">Whatsapp</a>
                 <a target=_blank class="bg-primary" href="https://www.facebook.com/sharer/sharer.php?u=${l}">Facebook</a>`
        btn.innerHTML = links;
        e('button.print_btn').after(btn);
        e("#share_btn").off("click");
    }))
}(jQuery);
