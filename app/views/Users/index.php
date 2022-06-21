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
              <h1 class="text-uppercase fs-6">User</h1>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0" style="min-height: 150px; max-height: 480px; overflow-x: hidden;">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Name</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Last Name</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Email</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Phone</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Role</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['users'] as $user) : ?>
                        <tr class="item">
                          <td class="col-1"><?php echo  $user->id ;?></td>
                          <td class="col-2"><?php echo  $user->first_name ;?></td>
                          <td class="col-2"><?php echo  $user->last_name ;?></td>
                          <td class="col-2"><?php echo  $user->email ;?></td>
                          <td class="col-2"><?php echo  $user->phone ;?></td>
                          <td class="col-2"><?php echo  $user->role ;?></td>
                          <td class="col-1">
                            <input type="checkbox" class="user-<?php echo  $user->id ;?>" <?php if($user->status) echo "checked" ;?>  onchange="test(<?php echo $user->id ;?>);">
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
  <script src="<?php echo URLROOT ;?>/js/update_etudiant.js"></script>


  <script>
  function test(id){
    // let user_id = document.querySelectorAll(".user-"+id);
    // console.log(status);
    
    // let status = 1 or 0;
    /* if(selecor )
    {
      active
    }else{
      no active
    }
    $(".user-"+id) */
    let user_id = id;
    let status = 0;
    if($('.user-'+id).is(":checked")){
      status = 1;
    }else{
      status = 0;
    }
    // console.log(status);
      $.ajax({
        url:'<?=URLROOT?>/Logins/statusUser',
        method:'POST',
        data:{
          user_id:user_id,
          status:status
        },
        success:function(data){ console.log(data) }
      })
  }
  </script>


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