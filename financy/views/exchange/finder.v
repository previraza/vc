<div class="position-relative  iq-banner ">
    <div class="iq-navbar-header" style="height: 175px;">
        <div class="container-fluid iq-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                        <div>
                            <h1>Find a <?=ucfirst($this->request->space)?></h1>
                            <p>Tout type de bordereau de collecte avec votre compte peut être recherché ici, quel que soit son statut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header-img" style="margin-top:-50px;">
            <img src="../../assets/images/dashboard/top-header.png" alt="header"
                class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <img src="../../assets/images/dashboard/top-header1.png" alt="header"
                class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <img src="../../assets/images/dashboard/top-header2.png" alt="header"
                class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <img src="../../assets/images/dashboard/top-header3.png" alt="header"
                class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <img src="../../assets/images/dashboard/top-header4.png" alt="header"
                class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <img src="../../assets/images/dashboard/top-header5.png" alt="header"
                class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        </div>
    </div> <!-- Nav Header Component End -->
    <!--Nav End-->
</div>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Chercher</h4>
                            </div>
                        </div>
                        <form class="form-group input-group mb-0 search-input" method=POST>
                            <input type="text" name=data[search] value="<?=$data_set['search']??$_POST['data']['search']??''?>" class="form-control" placeholder="Chercher...">
                            <span class="input-group-text">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($finding as $payment) { ?>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between <?=$payment->deleted_at?'bg-danger':null?>">
                        <div class="header-title w-100">
                            <h4 class="card-title"><?=$payment->fee?> : <?=$payment->code?></h4>
                            <p>
                                <?=$payment->name?> | <?=$payment->ref?> | <?=$payment->contact?> | <?=$payment->created_at?>.
                            </p>
                        </div>  
                        <div class="d-flex justify-content-end my-4 <?=$payment->deleted_at?'d-none':null?>">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                btn-type=action btn-title=PrintLink data-bs-placement="top" title="Printer" data-original-title="Printer" 
                                btn-link="<?= root('../printer/payment/'.$payment->code) ?>">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
