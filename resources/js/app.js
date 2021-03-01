require('./bootstrap');
global.$ = global.jQuery = require('jquery');

require('./autocomplete');

(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#weglot-with-load').load( '/weglot-load', function () {

    });

    axios.get( '/weglot-ajax' )
    .then(res => {
        $('#weglot-with-append').html( '' );
        
        res.data.results.forEach( function( result, index) {
            $('#weglot-with-append').append( '<div class="card col-2"> \
            <img src="" class="card-img-top" alt="' + result.name + '"> \
            <div class="card-body"> \
              <h5 class="card-title">' + result.name + '</h5> \
              <p class="card-text">hair_color: ' + result.hair_color + '</p> \
              <a href="#" class="btn btn-primary">eye_color: ' + result.eye_color + '</a> \
            </div></div>');
        });
    })
    .catch(err => {
        console.log(err);
    });


    

})();