<?php
    $allUser = $User->getUser();
    $Account = (object) [
        'USD' => (object) ['payment'=> (object) [
            'count' => 0,
            'solde' => 0,
        ] ,'slip'=> (object) [
            'count' => 0,
            'solde' => 0,
        ]],
        'CFD' => (object) ['payment'=> (object) [
            'count' => 0,
            'solde' => 0,
        ] ,'slip'=> (object) [
            'count' => 0,
            'solde' => 0,
        ]],
        'MONTH' => (object) [
            'payment'=>filterMonth($Payment->getMoth()),
            'slip'=>filterMonth($Slip->getMoth())
        ]
    ];
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="card bg-transparent shadow-none border-0">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex flex-column mb-4 mb-md-0">
                    <h3>Finance</h3>
                    <small>Bienvenue dans votre tableau de bord</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12 col-lg-12">
            <div class="row row-cols-1">
                <div class="overflow-hidden d-slider1">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <?php foreach ($allUser as $user) { 
                            $user->account = (object) ['payment'=>$Payment->filterMine($user), 'slip'=>$Slip->filterMine($user)];
                            ?> <li class="swiper-slide card card-slide credit-card-widget w-auto" data-aos="fade-up" data-aos-delay="900">
                            <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                        <div class="pb-4 border-0 card-header">
                            <div class="p-4 border border-white rounded primary-gradient-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="font-weight-bold"><?=strtoupper($user->fullname)?> </h5>
                                        <P class="mb-0"><?=$user->username?></P>
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
                                        <h2 class="mb-2"><?=$user->account->payment->USD??0?></h2>
                                        <p class="mb-0 text-secondary">Dollars Americain</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                    <h2 class="mb-2"><?=$user->account->payment->CFD??0?></h2>
                                        <p class="mb-0 text-secondary">Franc Congolais</p>
                                    </div>
                                </div>
                                <hr class="border border-info"/>
                                <div class="text-center">
                                    Enregistrement des Bordereaux
                                </div>
                                <div class="text-center card-body d-flex justify-content-around p-0 pb-3">
                                    <div>
                                    <h2 class="mb-2"><?=$user->account->slip->USD??0?></h2>
                                        <p class="mb-0 text-secondary">Dollars Americain</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                    <h2 class="mb-2"><?=$user->account->slip->CFD??0?></h2>
                                        <p class="mb-0 text-secondary">Franc Congolais</p>
                                    </div>
                                </div>
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
        <div class="col-lg-8">
            <div class="row">
            <?php foreach ($Fee->allMine('*') AS $fee) {
                    $payment_solde = $slip_solde = 0;
                    $devise = $fee->devise;
                    $transh = $fee->transh??false;
                    if($transh&&$transh!='full'){
                        $Account->$devise->payment->count += $fee->payment_first;
                        $Account->$devise->payment->count += $fee->payment_second;
                        $Account->$devise->slip->count += $fee->slip_first;
                        $Account->$devise->slip->count += $fee->slip_second;
                        $payment_solde += filterValue($transh, 'first') * $fee->payment_first;
                        $payment_solde += filterValue($transh, 'second') * $fee->payment_second;
                        $slip_solde += filterValue($transh, 'first') * $fee->slip_first;
                        $slip_solde += filterValue($transh, 'second') * $fee->slip_second;
                    } else $fee->payment+= $fee->payment_first+$fee->payment_second+$fee->slip_first+$fee->slip_second ;
                    $Account->$devise->payment->count += $fee->payment;
                    $Account->$devise->slip->count += $fee->slip;                    
                    $payment_solde += $fee->value * $fee->payment;
                    $slip_solde += $fee->value * $fee->slip;
                    $Account->$devise->payment->solde += $payment_solde;
                    $Account->$devise->slip->solde += $slip_solde;
                ?>
                <div class="col-6 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="m-auto d-inline-block p-4 bg-soft-primary rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                        fill="currentColor"></path>
                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <h4 class="mt-4 mb-2 counter"><?=$fee->value?> <?=$fee->devise?></h4>
                            <p class="mb-0"><?=$fee->name?></p>
                            <h4 class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <span class="counter text-success"><?=$payment_solde?> <?=$fee->devise?></span>
                                    <small class="mb-0">Payments</small>
                                </div>
                                |
                                <div class="d-flex flex-column">
                                    <span class="counter text-info"><?=$slip_solde?> <?=$fee->devise?></span>
                                    <small class="mb-0">Bordereaux</small>
                                </div>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php $payment_solde = $slip_solde = NULL; } ?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-soft-primary rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="pt-3">Total Payments</p>
                                <h4 class="mb-3 counter"><?=$Account->USD->payment->solde?> USD</h4>
                                <p class="mb-0 text-danger pt-2"><?=$Account->USD->payment->count?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-soft-primary rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="pt-3">Total Payments</p>
                                <h4 class="mb-3 counter"><?=$Account->CFD->payment->solde?> CFD</h4>
                                <p class="mb-0 text-danger pt-2"><?=$Account->CFD->payment->count?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-soft-primary rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M13.7505 9.70303V7.68318C13.354 7.68318 13.0251 7.36377 13.0251 6.97859V4.57356C13.0251 4.2532 12.764 4.00049 12.4352 4.00049H5.7911C3.70213 4.00049 2 5.653 2 7.68318V10.1155C2 10.3043 2.07737 10.4828 2.21277 10.6143C2.34816 10.7449 2.53191 10.8201 2.72534 10.8201C3.46035 10.8201 4.02128 11.3274 4.02128 11.9944C4.02128 12.6905 3.45068 13.2448 2.73501 13.2533C2.33849 13.2533 2 13.5257 2 13.9203V16.3262C2 18.3555 3.70213 19.9995 5.78143 19.9995H12.4352C12.764 19.9995 13.0251 19.745 13.0251 19.4265V17.3963C13.0251 17.0027 13.354 16.6917 13.7505 16.6917V14.8701C13.354 14.8701 13.0251 14.5497 13.0251 14.1655V10.4076C13.0251 10.0224 13.354 9.70303 13.7505 9.70303Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.9787 11.9948C19.9787 12.69 20.559 13.2443 21.265 13.2537C21.6615 13.2537 22 13.5262 22 13.9113V16.3258C22 18.3559 20.3075 20 18.2186 20H15.0658C14.7466 20 14.4758 19.7454 14.4758 19.426V17.3967C14.4758 17.0022 14.1567 16.6921 13.7505 16.6921V14.8705C14.1567 14.8705 14.4758 14.5502 14.4758 14.1659V10.4081C14.4758 10.022 14.1567 9.70348 13.7505 9.70348V7.6827C14.1567 7.6827 14.4758 7.36328 14.4758 6.9781V4.57401C14.4758 4.25366 14.7466 4 15.0658 4H18.2186C20.3075 4 22 5.64406 22 7.6733V10.0407C22 10.2286 21.9226 10.4081 21.7872 10.5387C21.6518 10.6702 21.4681 10.7453 21.2747 10.7453C20.559 10.7453 19.9787 11.31 19.9787 11.9948Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="pt-3">Total Bordereaux</p>
                            <h4 class="mb-3 counter"><?=$Account->USD->slip->solde?> USD</h4>
                            <p class="mb-0 text-success pt-2"><?=$Account->USD->slip->count?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-soft-primary rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M13.7505 9.70303V7.68318C13.354 7.68318 13.0251 7.36377 13.0251 6.97859V4.57356C13.0251 4.2532 12.764 4.00049 12.4352 4.00049H5.7911C3.70213 4.00049 2 5.653 2 7.68318V10.1155C2 10.3043 2.07737 10.4828 2.21277 10.6143C2.34816 10.7449 2.53191 10.8201 2.72534 10.8201C3.46035 10.8201 4.02128 11.3274 4.02128 11.9944C4.02128 12.6905 3.45068 13.2448 2.73501 13.2533C2.33849 13.2533 2 13.5257 2 13.9203V16.3262C2 18.3555 3.70213 19.9995 5.78143 19.9995H12.4352C12.764 19.9995 13.0251 19.745 13.0251 19.4265V17.3963C13.0251 17.0027 13.354 16.6917 13.7505 16.6917V14.8701C13.354 14.8701 13.0251 14.5497 13.0251 14.1655V10.4076C13.0251 10.0224 13.354 9.70303 13.7505 9.70303Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.9787 11.9948C19.9787 12.69 20.559 13.2443 21.265 13.2537C21.6615 13.2537 22 13.5262 22 13.9113V16.3258C22 18.3559 20.3075 20 18.2186 20H15.0658C14.7466 20 14.4758 19.7454 14.4758 19.426V17.3967C14.4758 17.0022 14.1567 16.6921 13.7505 16.6921V14.8705C14.1567 14.8705 14.4758 14.5502 14.4758 14.1659V10.4081C14.4758 10.022 14.1567 9.70348 13.7505 9.70348V7.6827C14.1567 7.6827 14.4758 7.36328 14.4758 6.9781V4.57401C14.4758 4.25366 14.7466 4 15.0658 4H18.2186C20.3075 4 22 5.64406 22 7.6733V10.0407C22 10.2286 21.9226 10.4081 21.7872 10.5387C21.6518 10.6702 21.4681 10.7453 21.2747 10.7453C20.559 10.7453 19.9787 11.31 19.9787 11.9948Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="pt-3">Total Bordereaux</p>
                            <h4 class="mb-3 counter"><?=$Account->CFD->slip->solde?> CFD</h4>
                            <p class="mb-0 text-success pt-2"><?=$Account->CFD->slip->count?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-primary">
                        <div id="admin-chart-02" class="admin-chart-02"></div>
                        <div class="card-body">
                            <p class="text-white">Total en Dollars Américan</p>
                            <h4 class="text-white counter mb-0"><?=$Account->USD->payment->solde+$Account->USD->slip->solde?> USD</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-info">
                        <div id="admin-chart-03" class="admin-chart-03"></div>
                        <div class="card-body">
                        <p class="text-white">Total en Franc Congolais</p>
                        <h4 class="text-white counter mb-0"><?=$Account->CFD->payment->solde+$Account->CFD->slip->solde?> CFD</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="card" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex-wrap card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="mb-2 card-title">Notifications</h4>
                                <p class="mb-0">
                                    <svg class="me-2" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#17904b"
                                            d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                                    </svg>
                                    Mcisme
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-1 d-flex profile-media align-items-top">
                                <div class="mt-1 profile-dots-pills border-primary"></div>
                                <div class="ms-4">
                                    <h6 class="mb-1 ">Disponibilite de classe</h6>
                                    <span class="mb-0">Section Aviation, Maintenance, Meteorologie, Electricite, Informatique, Electronique et Mecanique : Les listes de L3 et 2G ont été mises à jour ce mardi 09 mai.</span>
                                </div>
                            </div>
                            <div class="mb-1 d-flex profile-media align-items-top">
                                <div class="mt-1 profile-dots-pills border-primary"></div>
                                <div class="ms-4">
                                    <h6 class="mb-1 ">Disponibilite de classes</h6>
                                    <span class="mb-0">PREPO et TCI : la dernier mise a jours de listes seront apportees ce mercredi 10 mai</span>
                                </div>
                            </div>
                            <div class="mb-1 d-flex profile-media align-items-top">
                                <div class="mt-1 profile-dots-pills border-primary"></div>
                                <div class="ms-4">
                                    <h6 class="mb-1 ">Disponibilite de classes</h6>
                                    <span class="mb-0">Toutes les classes ont été mises à jour dans le système Viraza-Financy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                            <div class="header-title text-center">
                                <h4 class="card-title"><?=$Account->USD->payment->solde?> USD</h4>
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
                                <h4 class="card-title"><?=$Account->CFD->payment->solde?> CFD</h4>
                                <p class="mb-0">Franc Congolais</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div
                                id="d-main1" class="d-main charted"
                                data-value-usd="<?= implode(', ', array_values($Account->MONTH->payment['USD']??[0])) ?>"
                                data-value-cfd="<?= implode(', ', array_values($Account->MONTH->payment['CFD']??[0])) ?>"
                                data-label="<?= implode(', ', array_keys($Account->MONTH->payment['USD']??[])) ?>"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center border-bottom pb-2">
                            <div class="header-title text-center">
                                <h4 class="card-title"><?=$Account->USD->slip->solde?> USD</h4>
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
                                <h4 class="card-title"><?=$Account->CFD->slip->solde?> CFD</h4>
                                <p class="mb-0">Franc Congolais</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div
                                id="d-main2" class="d-main charted"
                                data-value-usd="<?= implode(', ', array_values($Account->MONTH->slip['USD']??[0])) ?>"
                                data-value-cfd="<?= implode(', ', array_values($Account->MONTH->slip['CFD']??[0])) ?>"
                                data-label="<?= implode(', ', array_keys($Account->MONTH->slip['USD']??[])) ?>"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                                <div class="card-header">
                                    <div class="header-title">
                                    <h4 class="card-title">Top Products</h4>
                                    </div>
                                </div>
                                <div class="px-0 card-body">
                                    <?=HTML::createTable(
                                        ['Etudiants', 'N° Bordereau', 'Reference', 'Contact', 'Frais', 'Code Etudiant', 'Date d\'Enregistrement', 'Action'],
                                        array_merge($Payment->all() ?? [], $Slip->all() ?? []),
                                        ['name', 'number', 'ref', 'contact', 'fee', 'stdKey', 'created_at'],
                                        null,
                                        ['print'],
                                        'TypeOfPay'
                                    )?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    