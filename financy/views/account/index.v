<?php $data_set = isset($data_edit) && $data_edit !== false; $admin = in_array(auth()->role, ['A:A:A:AA', 'A:F:A:ES']); ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <?php if($admin) { ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">
                                <?= $this->request->space ?> |
                                <?= $this->request->action ?>
                            </h4>
                        </div>
                        <div class="card-action mt-2 mt-sm-0">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card collapse <?= $data_set ? 'show' : null ?>" id="collapseExample">
                    <div class="card-body">
                        <form class="row align-items-end justify-content-between" action=<?= $data_set ? str_replace('edit', 'update', url()) : root($this->request->space . '/add') ?> method=POST dynamic>
                            <?php FORM::init($data_set ? $data_edit : NULL) ?>
                            <div class="form-contenair">
                                <div class="row">
                                    <?php if ($this->request->action === 'index') { ?>
                                        <div class="col-lg-3">
                                            <div id="postp" class=input--poster>
                                                <div class="poster-wrapper h-100">
                                                    <div class="poster-header">
                                                        <input type="file" id="poster" accept="*/image" style="display:none">
                                                        <input type="hidden" name="data[poster]">
                                                    </div>
                                                    <div class="poster-body">
                                                        <div class="croops">
                                                            <div class="croops-title">
                                                                Image Profile
                                                            </div>
                                                            <div class="croops-content">
                                                                <img src="/assets/images/user/11.jpg" alt="Profile"
                                                                    data-poster='poster' class="w-100 h-100" loading="lazy">
                                                            </div>
                                                            <div class="croops-buttons mt-2">
                                                                <label for="poster" class="btn btn-primary">Upload</label>
                                                                <button class="btn btn-secondary">Croops</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="poster-footer mt-3 mb-2">
                                                        <div class="final-poster">
                                                            <div class="croops">
                                                                <div class="croops-title">
                                                                    Image Profile
                                                                </div>
                                                                <div class="croops-content">
                                                                    <div class="croops-result d-flex justify-content-center">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 row p-0 m-0">
                                            <div class="col-lg-8">
                                                <?= Form::input('fullname', 'Nom Complet') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::input('username', 'Nom d\'Utilisateur') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::input('email', 'Couriel') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::input('phone', 'Telephone') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::input('date_of_birth', 'Date de naissance', true, 'date', ['min' => 1920, 'max' => 2005]) ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::select('gender', M_GENDER, 'Genre') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::select('country', COUNTRIES, 'Nationalite') ?>
                                            </div>
                                            <div class="col-lg-4">
                                                <?= Form::select('role', ROLES, 'Attribution') ?>
                                            </div>
                                            <div class="col-lg-12 row p-0 m-0">
                                                <?= Form::textarea('address', 'Adresse', true) ?>
                                            </div>
                                            <div class="col-lg-12 row p-0 m-0">
                                                <div class="col-lg-6">
                                                    <?= Form::input('password', 'Mot de passe', true, 'password') ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?= Form::input('c_password', 'Confirmer le Mot de passe', true, 'password', ['cpass' => 'password']) ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?= Form::choose('confirmation', 'J\'approuve les conditions d\'utilisation !') ?>
                                                </div>
                                                <div class="text-end col-lg-6">
                                                    <button type="save" class="btn btn-primary" name=FORM::PAYMENT
                                                        value='<?= $data_set ? 'UPDATE' : 'INSERT' ?>'>Sauvégarder</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-lg-8">
                                            <?= Form::input('client_name', 'Nom complet') ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <?= Form::input('contact', 'Numéro de Téléphone', false) ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        } if (!$data_set) { ?>
            <div class="col-lg-12">
                <div class="card card-body">
                    <?= HTML::createTable(
                        ['Profile', 'Nom Complet', 'Telephone', 'Date de naissance', 'Role', 'Date d\'enregistrement', 'Action'],
                        ($User->all() ?? []),
                        [
                            ['profile' => '<td class="text-center"><img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="${data}" alt="profile" loading="lazy" /></td>'],
                            'fullname',
                            'phone',
                            'date_of_birth',
                            'role',
                            'created_at'
                        ],
                        null,
                        $admin?['delete', 'profile', 'resetPassword']:['profile']
                    ) ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="modal fade" id="resetPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="resetPassword" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action=<?= $data_set ? str_replace('edit', 'resetPassword', url()) : root($this->request->space . '/resetPassword') ?> method=POST dynamic>
                    <h3 class="text-center">Mot de passe</h3>
                    <p class="text-center"><span id=resetPasswordUserName>Undefined</span> | Reinitialisation</p>
                    <input type="hidden" name="data_id" id="data_id" value='0'>
                    <?= Form::input('UPDATE_password', 'Mot de passe', true, 'password') ?>
                    <?= Form::input('UPDATE_c_password', 'Confirmer le Mot de passe', true, 'password', ['cpass' => 'password']) ?>
                    <?= Form::choose('UPDATE_confirmation', 'J\'approuve les conditions d\'utilisation !') ?>
                    <div class="text-center pb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>