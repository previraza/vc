<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="d-flex flex-wrap justify-content-between mb-4">
        <h3 class="mb-0">Analytics Overview</h3>
        <div class="dropdown">
            <a href="#" class="text-secondary dropdown-toggle" id="dropdownMenuButton22"
                data-bs-toggle="dropdown" aria-expanded="false">Last 30 Days</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22" style="">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row row-cols-1">
                <div class="overflow-hidden d-slider1">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <?php $count=7; foreach($Fee->allMineExpense() AS $fee){ ?>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="<?=$count++?>00">
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
        <div class="col-lg-8">
            <div class="card">
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Followers</h4>
                    </div>
                    <ul class="nav nav-tabs nav-tunnel nav-slider mb-0" data-toggle="slider-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab"
                                data-chart="update" data-type="blog-chart-growth"
                                data-bs-target="#blog-chart-growth" type="button" role="tab"
                                aria-selected="true">
                                Growth
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center" data-bs-toggle="tab"
                                data-chart="update" data-type="blog-chart-fall"
                                data-bs-target="#blog-chart-fall" type="button" role="tab"
                                aria-selected="false">
                                Fall
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div id="growthChart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Devices</h4>
                        <div class="dropdown">
                            <svg class="icon-20" width="20" id="dropdownMenuLink2" data-bs-toggle="dropdown"
                                role="button" aria-expanded="false" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3" cy="12" r="3" fill="currentColor" />
                                <circle cx="12" cy="12" r="3" fill="currentColor" />
                                <circle cx="21" cy="12" r="3" fill="currentColor" />
                            </svg>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="activity-chart"></div>
                    <div class="col-lg-12 p-0 d-flex align-items-center justify-content-center">
                        <div class="text-center d-flex justify-content-between">
                            <p class="mx-2">
                                <svg width="8" class="me-2 text-primary" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4" cy="4" r="4" fill="currentColor" />
                                </svg>
                                Mobile - 85%
                            </p>
                            <p class="mx-2">
                                <svg width="8" class="me-2 text-info" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4" cy="4" r="4" fill="currentColor" />
                                </svg>
                                Laptop - 50%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">        
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 card-title">History</h4>
                </div>
                <div class="card-body card-thumbnail px-0">
                    <div class="table-responsive">
                        <table class="table table-striped py-3" role="grid" data-toggle="blog_admin">
                            <thead class="bg-soft-primary">
                                <tr class="text-dark">
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Contact no.</th>
                                    <th class="text-center">More Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img class="img-fluid avatar-50 rounded-circle"
                                                        src="/assets/images/blog-avatar/06.png" alt="profile"
                                                        loading="lazy" />
                                                    <div>
                                                        <span class="fw-bold">Oscar Phelps</span>
                                                        <p class="text-body mb-0">oscarp@example.com</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>                                    
                                    </td>
                                    <td class="text-center">USA</td>
                                    <td class="text-end fw-bold">13</td>
                                    <td class="text-end fw-bold">48</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th title="User">
                                        <input type="text" class="form-control form-control-sm" placeholder="User">
                                    </th>
                                    <th title="Email">
                                        <input type="text" class="form-control form-control-sm" placeholder="Email">
                                    </th>
                                    <th title="Contact-Number">
                                        <input type="text" class="form-control form-control-sm" placeholder="Contact-Number">
                                    </th>
                                    <th title="More Details">
                                        <input type="text" class="form-control form-control-sm" placeholder="More Details">
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>