document.querySelectorAll('.btn-edit').forEach(function(btn){
    btn.addEventListener('click',function(event){
        let select = event.target.closest('.item');
        let stadium_id = select.querySelector('.stadium_id').innerHTML;
        let stadium_name = select.querySelector('.stadium_name').innerHTML;
        let stadium_city = select.querySelector('.stadium_city').innerHTML;
        let stadium_sport = select.querySelector('.stadium_sport').innerHTML;
        let stadium_location = select.querySelector('.stadium_location').innerHTML;
        let stadium_description = select.querySelector('.stadium_description').innerHTML;
        let stadium_site_web = select.querySelector('.stadium_site_web').innerHTML;

        console.log(stadium_id);

        document.querySelector('#editModal .id').value = stadium_id;
        document.querySelector('#editModal .name').value = stadium_name;
        document.querySelector('#editModal .city').value = stadium_city;
        document.querySelector('#editModal .sport').value = stadium_sport;
        document.querySelector('#editModal .location').value = stadium_location;
        document.querySelector('#editModal .description').value = stadium_description;
        document.querySelector('#editModal .site_web').value = stadium_site_web;
    })
})