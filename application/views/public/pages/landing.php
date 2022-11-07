<section class="py-5">
    <div class="container container-fluid-xl">
        <div class="row align-items-center">
            <!-- <div class="col-12 col-md-6 order-md-2" data-aos="fade-left">
                <img class="img-fluid img-float-md-6 mb-5 mb-md-0" src="assets/images/illustration/launch.svg" alt="">
            </div> -->
            <div class="col-12 col-md-6 order-md-1" data-aos="fade-in">
                <div class="col-fix pl-xl-3 ml-auto text-center text-sm-left">
                    <h1 class="display-4 enable-responsive-font-size mb-4 text-light"> Hello, <strong>I'm <?= getenv('REP_NAME') ?></strong></h1>
                    <p class="lead text-muted mb-5"> Representing <?= getenv('REP_TEAM') ?>. Find us on Rival Platform to challenge us for game.</p>

                    <?php

                    $error = array(
                        'name' => form_error('name') ? 'is-invalid' : '',
                        'email' => form_error('email') ? 'is-invalid' : '',
                        'mobileNo' => form_error('obileNo') ? 'is-invalid' : '',
                        'teamName' => form_error('teamName') ? 'is-invalid' : '',
                        'location' => form_error('location') ? 'is-invalid' : '',
                    );

                    $name = array('name' => 'name', 'class' => 'form-control ' . $error['name'], 'value' => set_value('name'), 'required' => 'required', 'placeholder' => 'Full Name');
                    $email = array('type' => 'email', 'name' => 'email', 'class' => 'form-control ' . $error['email'], 'value' => set_value('email'), 'required' => 'required', 'placeholder' => 'example@gmail.com');
                    $mobileNo = array('name' => 'mobileNo', 'class' => 'phone2 form-control ' . $error['mobileNo'], 'value' => set_value('mobileNo'), 'required' => 'required', 'placeholder' => '+6010-000 00000');
                    $teamName = array('name' => 'teamName', 'class' => 'form-control ' . $error['teamName'], 'value' => set_value('teamName'), 'required' => 'required', 'placeholder' => 'Team Name');
                    $location = array(
                        '' => 'Choose...',
                        'Shah Alam' => 'Shah Alam',
                        'Klang' => 'Klang',
                        'Subang Jaya' => 'Subang Jaya',
                        'Ampang Jaya' => 'Ampang Jaya',
                        'Petaling Jaya' => 'Petaling Jaya',
                        'Cheras' => 'Cheras',
                        'Kajang' => 'Kajang',
                        'Rawang' => 'Rawang',
                        'Semenyih' => 'Semenyih',
                        'Banting' => 'Banting',
                        'Balakong' => 'Balakong',
                        'Gombak Setia' => 'Gombak Setia',
                        'Kuala Selangor' => 'Kuala Selangor',
                        'Serendah' => 'Serendah',
                        'Bukit Beruntung' => 'Bukit Beruntung',
                        'Jenjarom' => 'Jenjarom',
                        'Sungai Besar' => 'Sungai Besar',
                        'Batu Arang' => 'Batu Arang',
                        'Tanjung Sepat' => 'Tanjung Sepat',
                        'Kuang' => 'Kuang',
                        'Kuala Kubu Baharu' => 'Kuala Kubu Baharu',
                        'Batang Berjuntai' => 'Batang Berjuntai',
                        'Sekinchan' => 'Sekinchan',
                        'Sabak' => 'Sabak',
                        'Tanjung Karang' => 'Tanjung Karang',
                        'Beranang' => 'Beranang',
                        'Sungai Pelek' => 'Sungai Pelek',
                    );

                    ?>

                    <?= form_open(base_url('soon/team_form'), array(
                        'class' => '',
                    )) ?>

                    <div class="form-group">
                        <div class="form-label-group">
                            <?= form_input($name) ?>
                            <?= form_label('Full Name', 'name') ?>
                            <div class="invalid-feedback"><?= form_error('name') ?></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="form-label-group">
                                <?= form_input($email) ?>
                                <?= form_label('Email', 'email') ?>
                                <div class="invalid-feedback"><?= form_error('email') ?></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="form-label-group">
                                <?= form_input($mobileNo) ?>
                                <?= form_label('Phone Number', 'mobileNo') ?>
                                <div class="invalid-feedback"><?= form_error('mobileNo') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <?= form_input($teamName) ?>
                            <?= form_label('Team Name', 'teamName') ?>
                            <div class="invalid-feedback"><?= form_error('teamName') ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <?= form_dropdown('location', $location, set_value('location'), 'class="custom-select ' . $error['location'] . '" required') ?>
                            <?= form_label('Preferred Playing Area', 'location') ?>
                            <div class="invalid-feedback"><?= form_error('location') ?></div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-lg btn-danger custom rounded-pill" type="submit">Submit <span class="oi oi-arrow-right ml-2"></span></button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>