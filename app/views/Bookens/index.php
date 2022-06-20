<?php require APPROOT . '/views/includes_dashboards/header.php'; ?>

<body class="g-sidenav-show bg-gray-100 overflow-hidden">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
  <!-- Assidbar -->

  <?php require APPROOT . '/views/includes_dashboards/sidebar2.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <?php require APPROOT . '/views/includes_dashboards/navbar2.php'; ?>

    <div class="container-fluid py-4">
      <!-- tale étudiants -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h1 class="text-uppercase fs-6">Booken</h1>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0" style="min-height: 150px; max-height: 480px; overflow-x: hidden;">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-4 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">User</th>
                      <th class="col-4 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Stadium</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Hour</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Bookens'] as $booken) : ?>
                        <tr class="item">
                          <td class="col-4"><?php echo  $booken->first_name.' '.$booken->last_name ;?></td>
                          <td class="col-4"><?php echo  $booken->name ;?></td>
                          <td class="col-2"><?php echo  $booken->date ;?></td>
                          <td class="col-2"><?php echo  $booken->hour ;?></td>
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
  <script src="<?php echo URLROOT ;?>/js/update_etudiant.js"></script>


  <style>
    /* Style of select */
    .search_select_box button{
        height: 45px !important;
        border: 0px;
    }
    .bi{
        color: var(--color-green) !important;
    }
  </style>