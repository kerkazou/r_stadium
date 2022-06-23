<?php require APPROOT . '/views/includes_dashboards/header.php'; ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require APPROOT . '/views/includes_dashboards/sidebar2.php'; ?>

  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <?php require APPROOT . '/views/includes_dashboards/navbar2.php'; ?>

    <!-- Statistiques -->
    <div class="container-fluid pt-5 pb-3">
      
      <div class="row">
        <div class="col-sm-3 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body px-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="mb-5 fs-5 text-uppercase font-weight-bold">number of users</p>
                    <h5 class="font-weight-bolder fs-4"><?php echo $data['numberuser']; ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape fs-5 rounded-circle bg-success">
                    <img class="w-100" src="<?php echo URLROOT; ?>/assets/user.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body px-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="mb-5 fs-5 text-uppercase font-weight-bold">number of stadiums</p>
                    <h5 class="font-weight-bolder fs-4"><?php echo $data['numberstadium']; ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape fs-5 rounded-circle bg-success">
                    <img class="w-100" src="<?php echo URLROOT; ?>/assets/stadium.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body px-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="mb-5 fs-5 text-uppercase font-weight-bold">number of bookens</p>
                    <h5 class="font-weight-bolder fs-4"><?php echo $data['numberbooken']; ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape fs-5 rounded-circle bg-success">
                    <img class="w-100" src="<?php echo URLROOT; ?>/assets/booken.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body px-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="mb-5 fs-5 text-uppercase font-weight-bold">number of contacts</p>
                    <h5 class="font-weight-bolder fs-4"><?php echo $data['numbercontact']; ?></h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape fs-5 rounded-circle bg-success">
                    <img class="w-100" src="<?php echo URLROOT; ?>/assets/contact.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="row mt-4">
          <div class="col-lg-6 mb-md-0 mb-3">
            <div class="card">
              <div class="card-header pb-0 py-3 px-4">
                <div class="d-flex mb-0"><h5 class="font-weight-bolder"><?php echo  $data['numbercity'] ;?></h5><h5>, City</h5></div>
              </div>
              <div style="max-height: 290px; overflow-y: auto;">
                <table class="table table-striped table-hover mb-0 text-center">
                    <thead>
                      <tr>
                        <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                        <th class="col-9 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">City</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['citys'] as $city) : ?>
                          <tr class="item">
                            <td class="col-3"><?php echo  $city->id ;?></td>
                            <td class="col-9"><?php echo  $city->city ;?></td>
                          </tr>
                          <?php endforeach ;?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header pb-0 py-3 px-4">
                <div class="d-flex mb-0"><h5 class="font-weight-bolder"><?php echo  $data['numbersport'] ;?></h5><h5>, Sport</h5></div>
              </div>
              <div style="max-height: 290px; overflow-y: auto;">
                <table class="table table-striped table-hover mb-0 text-center">
                    <thead>
                      <tr>
                        <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                        <th class="col-9 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Sport</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['sports'] as $sport) : ?>
                          <tr class="item">
                            <td class="col-3"><?php echo  $sport->id ;?></td>
                            <td class="col-9"><?php echo  $sport->sport ;?></td>
                          </tr>
                          <?php endforeach ;?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require APPROOT . '/views/includes_dashboards/footer.php'; ?>