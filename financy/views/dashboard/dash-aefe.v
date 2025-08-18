<?php 
    $payments = $Payment->mine();
    $SUM = ['USD'=>[], 'CFD'=>[]];
    foreach ($payments ?? [] as $payment) {
        $SUM[$payment->devise]['TOTAL'] = ($SUM[$payment->devise]['TOTAL']??0) + filterValue($payment->transh, $payment->transhis);
        $SUM[$payment->devise]['MONTH'][MONTH[$payment->month-1]] = ($SUM[$payment->devise]['MONTH'][MONTH[$payment->month-1]]??0)+filterValue($payment->transh, $payment->transhis);
        $SUM[$payment->devise]['TODAY'][$payment->today] = ($SUM[$payment->devise]['TODAY'][$payment->today]??0)+filterValue($payment->transh, $payment->transhis);
    }
    
    $slips = $Slip->mine();
    $SUM_ = ['USD'=>[], 'CFD'=>[]];
    foreach ($slips ?? [] as $payment) {
        $SUM_[$payment->devise]['TOTAL'] = ($SUM_[$payment->devise]['TOTAL']??0) + filterValue($payment->transh, $payment->transhis);
        $SUM_[$payment->devise]['MONTH'][MONTH[$payment->month-1]] = ($SUM_[$payment->devise]['MONTH'][MONTH[$payment->month-1]]??0)+filterValue($payment->transh, $payment->transhis);
        $SUM_[$payment->devise]['TODAY'][$payment->today] = ($SUM_[$payment->devise]['TODAY'][$payment->today]??0)+filterValue($payment->transh, $payment->transhis);
    }
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="row row-cols-1">
                <div class="overflow-hidden d-slider1">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <?php $count=7; foreach($Fee->allMine() AS $fee){
                            ?> <li class="swiper-slide card card-slide w-auto" data-aos="fade-up" data-aos-delay="<?=$count++?>00">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div id="circle-progress-<?=$count?>"
                                            class="text-center circle-progress-01 circle-progress circle-progress-primary"
                                            data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                            <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                            </svg>
                                        </div>
                                        <div class="progress-detail">
                                            <h5 class="counter text-primary"><?=$fee->value?> <?=$fee->devise?></h5>
                                            <p class="mb-2"><?=$fee->name?></p>
                                            <h4 class="counter"><?=($fee->value * $fee->payment)?> <?=$fee->devise?></h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 row m-0 p-0">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">                  
                            <div class=" bg-soft-info rounded p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-1">Perception des Paiement Direct</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM['USD']['TODAY'][date('Y-m-d')]??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-primary">Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                            <h2 class="counter"><?=$SUM['CFD']['TODAY'][date('Y-m-d')]??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-primary">Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                            <h2 class="counter"><?=$SUM['USD']['MONTH'][MONTH[date('m')-1]]??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-warning">Monthly</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM['CFD']['MONTH'][MONTH[date('m')-1]]??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-warning">Monthly</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM['USD']['TOTAL']??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-info">Total</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM['CFD']['TOTAL']??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-info">Total</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 row m-0 p-0">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">                  
                            <div class=" bg-soft-info rounded p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-1">Enregistrement des Bordereaux</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM_['USD']['TODAY'][date('Y-m-d')]??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-primary">Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                            <h2 class="counter"><?=$SUM_['CFD']['TODAY'][date('Y-m-d')]??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-primary">Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                            <h2 class="counter"><?=$SUM_['USD']['MONTH'][MONTH[date('m')-1]]??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-warning">Monthly</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM_['CFD']['MONTH'][MONTH[date('m')-1]]??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-warning">Monthly</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM_['USD']['TOTAL']??0?> USD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-info">Total</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Dollars American</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <span><b>Revenue</b></span>
                            <div class="mt-2">
                                <h2 class="counter"><?=$SUM_['CFD']['TOTAL']??0?> CFD</h2>
                            </div>
                            </div>
                            <div>
                            <span class="badge bg-info">Total</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            <span>Franc Congolais</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="col-md-12 col-lg-12">
                <div class="card" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                        <div class="header-title text-center">
                            <h4 class="card-title"><?=$SUM['USD']['TOTAL']??0?> USD</h4>
                            <p class="mb-0">Dollar American</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div>
                                Perception des Paiement Direct
                            </div>
                            <div class="d-flex align-items-center align-self-center">
                                <div class="d-flex align-items-center text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">USD</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-3 text-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">CFD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-title text-center">
                            <h4 class="card-title"><?=$SUM['CFD']['TOTAL']??0?> CFD</h4>
                            <p class="mb-0">Franc Congolais</p>
                        </div>
                    </div>
                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                        <div class="header-title text-center">
                            <h4 class="card-title"><?=$SUM['USD']['TOTAL']??0?> USD</h4>
                            <p class="mb-0">Dollar American</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div>
                                Enregistrement des Bordereaux
                            </div>
                            <div class="d-flex align-items-center align-self-center">
                                <div class="d-flex align-items-center text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">USD</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-3 text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                    <div class="ms-2">
                                        <span class="text-secondary">CFD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-title text-center">
                            <h4 class="card-title"><?=$SUM['CFD']['TOTAL']??0?> CFD</h4>
                            <p class="mb-0">Franc Congolais</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div
                            id="d-main" class="d-main"
                            data-value-usd="<?= implode(', ', array_values($SUM['USD']['MONTH']??[0])) ?>"
                            data-value-cfd="<?= implode(', ', array_values($SUM['CFD']['MONTH']??[0])) ?>"
                            data-value-usd_="<?= implode(', ', array_values($SUM_['USD']['MONTH']??[0])) ?>"
                            data-value-cfd_="<?= implode(', ', array_values($SUM_['CFD']['MONTH']??[0])) ?>"
                            data-label="<?= implode(', ', array_keys($SUM['USD']['MONTH']??[])) ?>"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                        <div class="pb-4 border-0 card-header">
                            <div class="p-4 border border-white rounded primary-gradient-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="font-weight-bold"><?=auth()->username?> </h5>
                                        <P class="mb-0"><?=strtoupper(auth()->fullname)?></P>
                                    </div>
                                    <div class="master-card-content">
                                        <svg class="master-card-1" width="60" height="60" viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                        <svg class="master-card-2" width="60" height="60" viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mb-0">
                            <div class="card mb-0" data-aos="fade-up" data-aos-delay="500">
                                <div class="text-center mt-3">
                                    Perception des Paiement Direct
                                </div>
                                <div class="text-center card-body d-flex justify-content-around p-0">
                                    <div>
                                        <h2 class="mb-2"><?=$SUM['USD']['TOTAL']??0?></h2>
                                        <p class="mb-0 text-secondary">Dollars Americain</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                        <h2 class="mb-2"><?=$SUM['CFD']['TOTAL']??0?></h2>
                                        <p class="mb-0 text-secondary">Franc Congolais</p>
                                    </div>
                                </div>
                                <hr class="border border-info"/>
                                <div class="text-center">
                                    Enregistrement des Bordereaux
                                </div>
                                <div class="text-center card-body d-flex justify-content-around p-0 pb-3">
                                    <div>
                                        <h2 class="mb-2"><?=$SUM_['USD']['TOTAL']??0?></h2>
                                        <p class="mb-0 text-secondary">Dollars Americain</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                        <h2 class="mb-2"><?=$SUM_['CFD']['TOTAL']??0?></h2>
                                        <p class="mb-0 text-secondary">Franc Congolais</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-body">
            <?=HTML::createTable(
                    ['ID', 'Etudiants', 'Frais', 'Tranche', 'N° Bordereau', 'Reference', 'Contact','Date d\'enregistrement', 'Action'],
                    array_merge($payments ?? [], $slips ?? []),
                    ['id', 'name', 'fee', 'transhis', 'number', 'ref', 'contact', 'created_at'],
                    null,
                    ['print', 'delete'],
                    'TypeOfPay'
                )?>
            </div>
        </div>
    </div>
</div>