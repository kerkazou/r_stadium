<!-- Modal Addition Stadium -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Addition Stadium</h5>
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
        <h5 class="modal-title xyz" id="exampleModalLabel">Edit Stadium</h5>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/dashboardStadium/editStadium" data-parsley-validate>
        <div class="d-flex flex-wrap gap-3 modal-body">
            <input class="d-none w-100 form-control id" name="id" type="text" placeholder="Id">
            <input class="w-100 form-control name" name="name" type="text" placeholder="Name*" required data-parsley-minlength="3">
            <div class="w-100 d-flex gap-3">
              <div class="search_select_box w-50">
                <select class="w-100 sport" name="sport" data-live-search="true">
                    <?php foreach ($data['sports'] as $sport) : ?>
                        <option value="<?php echo  $sport->sport ;?>"><?php echo  $sport->sport ;?></option>
                    <?php endforeach ;?>
                </select>
              </div>
              <div class="search_select_box w-50">
                <select class="w-100 city" name="city" data-live-search="true">
                    <?php foreach ($data['citys'] as $city) : ?>
                        <option value="<?php echo  $city->city ;?>"><?php echo  $city->city ;?></option>
                    <?php endforeach ;?>
                </select>
              </div>
            </div>
            <input class="w-100 form-control location" name="location" type="text" placeholder="Location">
            <input class="w-100 form-control site_web" name="site_web" type="text" placeholder="Site Web" data-parsley-type="url">
            <textarea class="w-100 form-control description" name="description" placeholder="Description"></textarea>
        </div>
        <div class="modal-footer pb-0">
          <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
          <input type="submit" class="btn btn-primary" value="Addition Stadium">
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