+ function($) {
    $.windowHeight = function() {
        var de = document.documentElement;
        return self.innerHeight || (de && de.clientHeight) || document.body.clientHeight;
    }
    $.extend(String.prototype, {
        isPositiveInteger: function() {
            return new RegExp(/^[1-9]\d*$/).test(this)
        },
        isInteger: function() {
            return new RegExp(/^\d+$/).test(this)
        },
        isNumber: function() {
            return new RegExp(/^([-]{0,1}(\d+)[\.]+(\d+))|([-]{0,1}(\d+))$/).test(this)
        },
        includeChinese: function() {
            return new RegExp(/[\u4E00-\u9FA5]/).test(this)
        },
        trim: function() {
            return this.replace(/(^\s*)|(\s*$)|\r|\n/g, "")
        },
        startsWith: function(a) {
            return 0 === this.indexOf(a)
        },
        endsWith: function(a) {
            var b = this.length - a.length;
            return b >= 0 && this.lastIndexOf(a) === b
        },
        replaceAll: function(a, b) {
            return this.replace(new RegExp(a, "gm"), b)
        }
    });
}(jQuery) +

function($) {
    function initLoad() {

        var adaptiveHeight = function() {
            var $this = $(this)
            var val = $this.data("adaptiveheight");

            if (!val) return;

            if (!String(val).isInteger()) {
                val = 0;
            }

            $this.css("overflow-y", "auto");
            $this.css("height", ($.windowHeight() - $this.offset().top - val) + "px")
        }

        $.fn.adaptiveHeight = adaptiveHeight;
        $("[data-adaptiveHeight]").each(function() {
            $(this).adaptiveHeight = adaptiveHeight;
            $(this).adaptiveHeight();
        })
    }


    $(document).ready(function() {
        initLoad();
    })


}(jQuery);