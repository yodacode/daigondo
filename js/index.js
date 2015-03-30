var Isotope = require('isotope-layout');
var $ = require('jquery');

var Item = function (item) {
    this.item = item;
    this.build();
};
Item.prototype.build = function () {
    this.mask = $('<div>').addClass('isotope__item__mask').attr('data-mask', '').hide();
    this.item.prepend(this.mask);
    this.bind();
};
Item.prototype.bind = function () {
    this.item.on('')
    this.item.hover(
        function() {
            $(this).find('[data-mask]').fadeIn();
            $(this).stop();
        }, function() {
            $(this).find('[data-mask]').fadeOut();
            $(this).stop();
        }
    );
};

// Item.prototype.bind = function () {

// };



$(window).load(function() {
    var container = document.querySelector('#isotope');
    // init
    var iso = new Isotope(container, {
        // options
        itemSelector: '.isotope__item',
        layoutMode: 'masonry',
    });

    // $('[data-item]').each(function () {
    //     new Item($(this));
    // });


});