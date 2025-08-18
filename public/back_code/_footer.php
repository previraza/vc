
        <!-- Start of Footer section
        ============================================= -->
        <footer id="ft-footer" class="ft-footer-section">
            <div class="container">
                <div class="ft-footer-widget-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-footer-widget ul-li-block headline pera-content">
                                <div class="logo-widget">
                                    <div class="site-logo">
                                        <a href="#" aria-label="Accueil"><img loading="lazy" src="/public/assets/img/logo/logo2.webp" alt=""></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="ft-btn">
                                        <a class="d-flex justify-content-center align-items-center" href="project.html">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-footer-widget ul-li-block headline pera-content">
                                <div class="menu-widget">
                                    <h3 class="widget-title">Our Service</h3>
                                    <ul>
                                        <li><a href="#mcisme">Land Transportation</a></li>
                                        <li><a href="#mcisme">Air Freight</a></li>
                                        <li><a href="#mcisme">Ocen Freight</a></li>
                                        <li><a href="#mcisme">Warehousing</a></li>
                                        <li><a href="#mcisme">Rail Internation Shipping</a></li>
                                        <li><a href="#mcisme">Contract Logistics</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-footer-widget ul-li-block headline pera-content">
                                <div class="menu-widget">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Compnay History</a></li>
                                        <li><a href="#">Company Events</a></li>
                                        <li><a href="#mcisme">Supply Chain Managment</a></li>
                                        <li><a href="#">Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-footer-widget ul-li-block headline pera-content">
                                <div class="gallery-widget clearfix">
                                    <h3 class="widget-title">Gallery </h3>
                                    <ul class="zoom-gallery">
                                        <li>
                                            <a class="h-100 w-100" aria-label="Voire la gallerie" href="/layouts/default/images/portefolio/1.webp" data-source="/layouts/default/images/portefolio/1.webp"><img loading="lazy" src="/layouts/default/images/portfolio/1.webp" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer section
        ============================================= -->
        </div>
    </div>
   
    <!-- For Js Library -->
    <script src="/public/assets/js/jquery.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
    <script src="/public/assets/js/popper.min.js"></script>
    <script src="/public/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/public/assets/js/appear.js"></script>
    <script src="/public/assets/js/slick.js"></script>
    <script src="/public/assets/js/jquery.counterup.min.js"></script>
    <script src="/layouts/default/js/owl.carousel.js"></script>
    <script src="/public/assets/js/waypoints.min.js"></script>
    <script src="/public/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/public/assets/js/jquery.filterizr.js"></script>
    <script src="/public/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/public/assets/js/wow.min.js"></script>
    <script src="/public/assets/js/jquery.cssslider.min.js"></script>
    <script src="/public/assets/js/rbtools.min.js"></script>
    <script src="/public/assets/js/rs6.min.js"></script>
    <script src="/public/assets/js/mcisme.js"></script>
    <script src="/public/assets/js/tinymce/tinymce.min.js"></script>
    <script>
        $(function() {
            tinymce.init({
                selector: 'textarea.tynimce',
                plugins: "preview powerpaste casechange searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker editimage help formatpainter permanentpen pageembed charmap quickbars linkchecker emoticons advtable export",
                menubar: "file edit view insert format tools table tc help",
                toolbar: "undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | export",
            });
            $('#profile').on('change', e => {
                $("#imgProfile")[0].src = URL.createObjectURL(e.target.files[0]);
                $('#send_form').fadeIn(1000);
            });
            $('#addStudent').on('submit', (e) => {
                $('#sign_fail, #sign_success').fadeOut();
                $('.sign_messageries').fadeOut();
                e.preventDefault();
                $('#promotion').text();
                var data = new FormData(e.currentTarget);
                $.ajax({
                    url: "/app/settings/add/students.php?sending_by=mcisme",
                    data: data,
                    type: "POST",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        try {
                            var res = JSON.parse(response);
                            if (res.status == 'succes') $('#sign_success').fadeIn();
                            else if (res.status == 'error') $('#sign_fail').text(res.content).fadeIn();
                        } catch (error) {
                            console.error(response);
                            $('#sign_fail').fadeIn();
                        }
                    }
                });
            });
            $("#lb").on("click", (e) => {
                $('#page-loader').removeClass('hidden').css({
                    opacity: '.7'
                }).fadeIn();
                e.preventDefault();
                $.post("/app/settings/get/connected.php", {
                        un: $('#un').val(),
                        pw: $('#pw').val()
                    },
                    function(data, textStatus, jqXHR) {
                        try {
                            var res = JSON.parse(data);
                            if (res.status == "succes") location.href = '/';
                            else if (res.status == "error") {
                                console.log(res.header, res.content);
                                $('#errorBox').html(`
                                        <div class="alert alert-danger alert-dismissible mt-3" role="alert" id="alertConnect">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button><strong>${res.content}</strong>
                                        </div>
                                    `);
                                $('#page-loader').fadeOut(300);
                            } else {
                                $('#page-loader').fadeOut(300);
                                console.log(res);
                            }
                        } catch (error) {
                            $('#page-loader').fadeOut(300);
                            return console.log(data);
                        }
                    }
                );
            })
        });
    </script>
    <script src="/public/assets/js/script.js"></script>
</body>

</html>