$(document).ready(function () {
    var logo = $('.awards-logo');

    var tl = new TimelineLite({
        onComplete: function () {
            tl.restart();
        }
    });

    TweenLite.defaultEase = Circ.easeOut;

    var time = 0.5;
    var y = 20;

    tl
        .add(TweenMax.staggerFromTo(
            logo, time,
            {
                opacity: 0,
                y: y,
            },
            {
                opacity: 1,
                y: 0,
            },
            2))
        .add(TweenMax.staggerTo(
            logo, time,
            {
                delay: time,
                opacity: 0,
                y: -y,
            },
            2), 1);
});
