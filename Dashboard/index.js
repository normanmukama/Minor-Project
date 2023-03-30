
$(document).ready(function(){
    $('#example').DataTable({
        'ajax':'index.json',
        'columns':[
            {'data':'id'},
            {'data':'first_name'},
            {'data':'last_name'},
            {'data':'email'},
            {'data':'location'},
            {'data':'job_title'}
        ]
    })
})
