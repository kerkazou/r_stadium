<!-- Modal Addition Stadium -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Addition Stadium</h5>
        <p class="text-danger text-center"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </p>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/dashboardStadium/addStadium" data-parsley-validate>
        <div class="d-flex flex-wrap gap-3 modal-body">
            <input class="w-100 form-control" name="name" type="text" placeholder="Name*" required data-parsley-minlength="3">
            <div class="w-100 d-flex gap-3">
              <div class="search_select_box w-50">
                <select class="selectpicker w-100" name="sport" data-live-search="true">
                    <?php foreach ($data['sports'] as $sport) : ?>
                        <option value="<?php echo  $sport->id ;?>"><?php echo  $sport->sport ;?></option>
                    <?php endforeach ;?>
                </select>
              </div>
              <div class="search_select_box w-50">
                <select class="selectpicker w-100" name="city" data-live-search="true">
                    <?php foreach ($data['citys'] as $city) : ?>
                        <option value="<?php echo  $city->id ;?>"><?php echo  $city->city ;?></option>
                    <?php endforeach ;?>
                </select>
              </div>
            </div>
            <input class="w-100 form-control" name="location" type="text" placeholder="Location">
            <input class="w-100 form-control" name="site_web" type="text" placeholder="Site Web" data-parsley-type="url">
            <textarea class="w-100 form-control" name="description" placeholder="Description"></textarea>
        </div>
        <div class="modal-footer pb-0">
          <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
          <input type="submit" class="btn btn-primary" value="Addition Stadium">
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edite Etudiant -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title xyz" id="exampleModalLabel">Edite Etudiant</h5>
        <p class="text-danger text-center"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </p>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/Etudiants/edite" data-parsley-validate>
        <div class="modal-body">
          <div class="modal-body d-flex gap-3">
            <input class="form-control d-none id" name="id" type="text">
            <div class="w-75">
              <input class="form-control username" name="username" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <select class="form-select genre" name="genre" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control email" name="email" type="email" placeholder="Email Adress" required data-parsley-type="email">
            </div>
            <div class="w-25">
              <select class="form-select class" name="class" required>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex align-items-center gap-3">
            <div class="w-75">
              <input class="form-control parent" name="parent" type="text" placeholder="Parent" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <input class="form-control date_de_naissance" name="date_de_naissance" type="date" placeholder="Date de naissance" required>
            </div>
          </div>
          <div class="modal-body">
            <textarea class="form-control adresse" name="adresse" placeholder="Adresse" required></textarea>
          </div>
        </div>
        <div class="modal-footer pb-0">
          <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
          <input type="submit" class="btn btn-primary" value="Save changes">
        </div>
      </form>
    </div>
  </div>
</div>


<style>
  .parsley-errors-list{
      color: red;
      list-style: none;
      font-size: 0.8em;
  }
</style>