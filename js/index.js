var Isotope = require('isotope-layout');
var $ = require('jquery');

$( window ).load(function() {

    var container = document.querySelector('#isotope');
    // init
    var iso = new Isotope(container, {
        // options
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

});