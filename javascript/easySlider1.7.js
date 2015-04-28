(function ($) {

    $.fn.easySlider = function () {

        // default configuration properties
        var options = {
            prevId: 'prevBtn',
            prevText: 'Previous',
            nextId: 'nextBtn',
            nextText: 'Next',
            controlsBefore: '',
            controlsAfter: '',
            controlsFade: true,
            firstId: 'firstBtn',
            firstText: 'First',
            firstShow: false,
            lastId: 'lastBtn',
            lastText: 'Last',
            lastShow: true,
            vertical: false,
            speed: 800,
            auto: false,
            pause: 2000,
            continuous: true,
            numericId: 'controls',
            height: '400',
            weight: '400'
        };

        this.each(function () {
            var obj = $(this);
            var s = $("li", obj).length;
            var w = options.weight;
            var h = options.height;
            obj.width(w + "px");
            obj.height(h + "px");
            obj.css("overflow", "hidden");
            var ts = s - 1;
            var t = 0;
            $("ul", obj).css('width', w);
            $("li", obj).css('float', 'left');

            function adjust() {
                if (t > ts) t = 0;
                if (t < 0) t = ts;
                $("ul", obj).css("margin-left", (t * w * -1));
            }

            function animate() {
                var ot = t;
                t = (ot >= ts) ? (options.continuous ? t + 1 : ts) : t + 1;
                var diff = Math.abs(ot - t);
                var speed = diff * options.speed;
                var p = (t * w * -1);

                $("ul", obj).animate(
                    {marginLeft: p},
                    {queue: false, duration: speed, complete: adjust}
                );

                timeout = setTimeout(function () {
                    animate();
                }, diff * options.speed + options.pause);
            }

            var timeout = setTimeout(function () {
                animate();
            }, options.pause);
        });
    };

})(jQuery);



