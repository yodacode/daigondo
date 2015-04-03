var Isotope = require('isotope-layout');
global.$ = require('jquery');


var currentColor = 0;

var Item = function (item) {
    this.item = item;
    this.needResize = false;


    this.build();
};

Item.prototype.pickColor = function () {
    var colors = [
        '#FCCC7A',
        '#9ECFA9',
        '#4F77B9',
        '#F29A94',
        '#B6D5E0',
    ];

    if (currentColor === colors.length - 1) {
        currentColor = 0;
    } else {
        currentColor += 1;
    }

    return colors[currentColor];
};

Item.prototype.build = function () {
    this.item.find('.isotope__item__mask').remove();
    this.mask = $('<div>').addClass('isotope__item__mask')
        .attr('data-mask', '')
        .css('background-color', this.pickColor())
        .hide();

    this.mask.css({
        'height': this.item.find('img').height(),
        'width': this.item.find('img').width(),
        'margin-left': '30px',
        'margin-top': '30px',
    });

    this.mask.append(
        $('<div>').addClass('isotope__item__mask__content')
        .append(
            $('<h2>').addClass('isotope__item__mask__title animated fadeIn').text('Chevignon')
        )
        .append(
            $('<div>').addClass('isotope__item__mask__separator')
        )
        .append(
            $('<p>').addClass('isotope__item__mask__paragraph animated fadeInUp').text('Collection t-shirt Summer 2015')
        )
        .append(
            $('<p>').addClass('isotope__item__mask__paragraph animated fadeInUp').text('Made at Sublim Design')
        )
    );

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
            $(this).find('[data-mask]').stop(true, false).fadeIn(400);
        }, function() {
            $(this).find('[data-mask]').stop(true, false).fadeOut(400);
        }
    );

    $(window).on('resize', function () {
        that.needResize = true;
    });
};

var Page = function () {
    this.linkProfil = $('[data-link-profil]');
    this.linkPortfolio = $('[data-link-portfolio]');
    this.linkContact = $('[data-link-contact]');
    $('[data-page-profil], [data-page-contact]').hide();
    this.bind();
    console.log(this);
};

Page.prototype.bind = function () {
    var that = this;

    this.linkPortfolio.on('click', function (e) {
        e.preventDefault();
        that.changeColor('white');
        that.getPage('portfolio');
    });

    this.linkProfil.on('click', function (e) {
        e.preventDefault();
        that.changeColor('blue');
        that.getPage('profil');
    });

    this.linkContact.on('click', function (e) {
        e.preventDefault();
        that.changeColor('brown');
        that.getPage('contact');
    });
};

Page.prototype.changeColor = function (color) {
    $('body').removeClass('white brown blue')
    $('body').addClass(color);
};

Page.prototype.getPage = function (page) {
    $('[data-page]').hide();
    $('[data-page-' + page + ']').show();
};

$(function () {
    var page = new Page();
});

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