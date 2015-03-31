var Isotope = require('isotope-layout');
var $ = require('jquery');

var Item = function (item) {
    this.item = item;
    this.needResize = false;
    this.build();
};

Item.prototype.build = function () {
    this.item.find('.isotope__item__mask').remove();
    this.mask = $('<div>').addClass('isotope__item__mask').attr('data-mask', '').hide();
    this.mask.css({
        'height': this.item.find('img').height(),
        'width': this.item.find('img').width(),
        'margin-left': '30px',
        'margin-top': '30px',
    })
    this.item.prepend(this.mask);
    this.needResize = false;
    this.bind();
};

Item.prototype.bind = function () {
    var that = this;

    this.item.hover(
        function() {
            if (that.needResize) {
                that.build();
            }
            $(this).find('[data-mask]').stop(true, false).fadeIn();

        }, function() {
            $(this).find('[data-mask]').stop(true, false).fadeOut();
        }
    );

    $(window).on('resize', function () {
        that.needResize = true;
    });
};


$(window).load(function() {
    var container = document.querySelector('#isotope');
    // init
    var iso = new Isotope(container, {
        // options
        itemSelector: '.isotope__item',
        layoutMode: 'masonry',
    });

    $('[data-item]').each(function () {
        new Item($(this));
    });

});