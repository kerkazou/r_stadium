
<!-- Modal Reservation -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="<?php echo URLROOT ;?>/Site/booken" class="modal-content">
            <div class="modal-header">
                <div class="modal-title d-flex gap-2 align-items-center" id="exampleModalToggleLabel2">
                    <h2 class="name"></h2>,
                    <p class="city"></p>,
                    <p class="sport"></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="w-100 mb-3">
                            <input class="d-none id" name="stadium_id" type="text">
                            <input type="date" name="date">
                            <input class="d-none" type="text" name="time" id="date">
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

                <div class="modal-footer">
                    <button class="btn btn-lg btn-success" type="submit">Book Now</button>
                </div>
            </div>
        </form>
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
            document.querySelector('#date').value = time;
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

    /* Input Date */
    input[type="date"] {
        width: 70%;
        margin-left: 15%;
        appearance: none;
        -webkit-appearance: none;
        color: #95a5a6;
        font-family: "Helvetica", arial, sans-serif;
        font-size: 18px;
        border:1px solid #ecf0f1;
        background:#ecf0f1;
        padding:5px;
        display: inline-block !important;
        visibility: visible !important;
    }

    input[type="date"], focus {
        color: #95a5a6;
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
    }
</style>