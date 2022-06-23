<?php require APPROOT . '/views/includes_dashboards/header.php'; ?>

<body class="g-sidenav-show bg-gray-100 overflow-hidden">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
  <!-- Assidbar -->

  <?php require APPROOT . '/views/includes_dashboards/sidebar.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <?php require APPROOT . '/views/includes_dashboards/navbar.php'; ?>

    <div class="container-fluid py-4">
      <!-- tale étudiants -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h1 class="text-uppercase fs-6">Stadium</h1>
              <button type="button" class="btn btn-success fs-6" data-bs-toggle="modal" data-bs-target="#add">Addition Stadium</button>
              <?php require APPROOT . '/views/includes_models/modelstadium.php'; ?>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0" style="min-height: 150px; max-height: 480px; overflow-x: auto;">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">City</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Sport</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Location</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Site Web</th>
                      <th class="col-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['stadiums'] as $stadium) : ?>
                        <tr class="item">
                          <td class="d-none stadium_id"><?php echo  $stadium->stadium_id ;?></td>
                          <td class="col-1 stadium_name"><?php echo  $stadium->stadium_name ;?></td>
                          <td class="col-1 stadium_city"><?php echo  $stadium->stadium_city ;?></td>
                          <td class="col-1 stadium_sport"><?php echo  $stadium->stadium_sport ;?></td>
                          <td class="col-2 stadium_location"><?php echo  $stadium->stadium_location ;?></td>
                          <td class="col-2 stadium_description"><?php echo  $stadium->stadium_description ;?></td>
                          <td class="col-2 stadium_site_web"><?php echo  $stadium->stadium_site_web ;?></td>
                          <td class="col-2">
                              <a class="btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square text-success"></i></a>
                              <a href="<?php echo URLROOT ;?>/dashboardStadium/delet?id=<?php echo  $stadium->stadium_id ;?>"><i class="bi bi-trash text-success"></i></a>
                            </ul>
                          </td>
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