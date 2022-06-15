

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title d-flex align-items-center" id="exampleModalToggleLabel2">
            <h2 class="name"> </h2>,
            <h4 class="city"> </h3>,
            <h4 class="sport"> </h4>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input class="d-none id" type="text">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mb-3">
                    <input type="date">
                </div>
                <div class="row d-flex justify-content-center align-items-center flex-wrap gap-4">
                    <div class="col-3 btn time">
                        <label for="8am">8:00AM</label>
                        <input class="input_time" type="radio" id="8am" value="8:00AM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="9am">9:00AM</label>
                        <input class="input_time" type="radio" id="9am" value="9:00AM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="10am">10:00AM</label>
                        <input class="input_time" type="radio" id="10am" value="10:00AM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="11am">11:00AM</label>
                        <input class="input_time" type="radio" id="11am" value="11:00AM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="12am">12:00AM</label>
                        <input class="input_time" type="radio" id="12am" value="12:00AM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="2pm">2:00PM</label>
                        <input class="input_time" type="radio" id="2pm" value="2:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="3pm">3:00PM</label>
                        <input class="input_time" type="radio" id="3pm" value="3:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="4pm">4:00PM</label>
                        <input class="input_time" type="radio" id="4pm" value="4:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="5pm">5:00PM</label>
                        <input class="input_time" type="radio" id="5pm" value="5:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="6pm">6:00PM</label>
                        <input class="input_time" type="radio" id="6pm" value="6:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="7pm">7:00PM</label>
                        <input class="input_time" type="radio" id="7pm" value="7:00PM">
                    </div>
                    <div class="col-3 btn time">
                        <label for="8pm">8:00PM</label>
                        <input class="input_time" type="radio" id="8pm" value="8:00PM">
                    </div>
                </div>
            </div>
        </div>

      </div>
      <div class="modal-footer">
      <button class="btn btn-lg btn-success">Book Now</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.querySelectorAll('.btn_book_now').forEach(function(btn){
        btn.addEventListener('click',function(event){
            let select = event.target.closest('.card_stadium');
            let stadium_id = select.querySelector('.stadium_id').innerHTML;
            let stadium_name = select.querySelector('.stadium_name').innerHTML;
            let stadium_city = select.querySelector('.stadium_city').innerHTML;
            let stadium_sport = select.querySelector('.stadium_sport').innerHTML;

            document.querySelector('#exampleModalToggle2 .id').value = stadium_id;
            document.querySelector('#exampleModalToggle2 .name').innerHTML = stadium_name;
            document.querySelector('#exampleModalToggle2 .city').innerHTML = stadium_city;
            document.querySelector('#exampleModalToggle2 .sport').innerHTML = stadium_sport;
        })
    })

    document.querySelectorAll('.time').forEach(function(btn){
        btn.addEventListener('click',function(event){
            document.querySelectorAll('.time').forEach(value => {
             value.classList.remove('select');
           });
            let time = btn.children[0].innerHTML;
            btn.classList.add('select');
            console.log(time);
        })
    })
</script>


<style>
    /* modal Of Reservation */
    .time{
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .time label{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input[type="radio"]{
        display: none;
    }

    .select{
        background-color: #15D155;
    }
</style>