<!-- .page -->
<div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar">
            <!-- page title stuff goes here -->
            <h1 class="page-title"><?= $title ?></h1>
            <p class="text-muted"> List of Teams</p>
        </header>
        <!-- /.page-title-bar -->

        <div class="page-section">
            <!-- .section-block -->
            <div class="section-block">
                <!-- metric row -->
                <div class="metric-row">
                    <div class="col-lg-3">
                        <div class="metric-row metric-flush">
                            <!-- metric column -->
                            <div class="col">
                                <!-- .metric -->
                                <a href="#" class="metric metric-bordered align-items-center">
                                    <h2 class="metric-label"> Teams </h2>
                                    <p class="metric-value h3">
                                        <sub><i class="oi oi-people"></i></sub> <span class="value"><?= count($listTeam) ?></span>
                                    </p>
                                </a> <!-- /.metric -->
                            </div><!-- /metric column -->
                            <!-- metric column -->
                        </div>
                    </div><!-- metric column -->
                </div><!-- /metric row -->
            </div><!-- /.section-block -->

            <!-- .page-section -->
            <div class="page-section">
                <!-- page content goes here -->
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- .table -->
                            <table class="table table-sm nowrap w-100">
                                <thead>
                                    <tr>
                                        <th> Team Name </th>
                                        <th> Preferred Location </th>
                                        <th> Captain </th>
                                        <th> Phone Number </th>
                                        <th> Email </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listTeam as $k => $i) { ?>
                                        <tr>
                                            <td><?= $i['team_name'] ?></td>
                                            <td><?= $i['team_location'] ?></td>
                                            <td><?= $i['name'] ?></td>
                                            <td><?= $i['mobileNo'] ?></td>
                                            <td><?= $i['email'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table><!-- /.table -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
        </div>
        <!-- /.page -->