<a href="javascript:void(0)" id="back-to-top" class="small--hide" style="bottom: 5%;">
	<span>
		<img src="//theme.hstatic.net/1000305059/1000394224/14/backtotop_img.png?v=3615" alt="backtotop">

		<img class="hover" src="//theme.hstatic.net/1000305059/1000394224/14/car-focus.png?v=3615" alt="hover">

	</span>
</a>

<!-- Back to top -->
<script>
    jQuery(document).ready(function() {
        var offset = 400;
        var duration = 1000;
        var header_height = $("#header").height();
        console.log(header_height);
        jQuery(window).scroll(function() {
            if(jQuery(this).scrollTop() < header_height){
                $('#back-to-top').removeClass("car-run");
            }else{
                if (jQuery(this).scrollTop() > offset) {
                    //$('#back-to-top').addClass("car-up");
                    $('#back-to-top').css("bottom","5%");
                }else{
                    //$('#back-to-top').removeClass("car-up");
                    $('#back-to-top').css("bottom","-150px");
                }
            }
        });

        jQuery('#back-to-top').click(function(event) {
            event.preventDefault();
            $('#back-to-top').removeClass("car-run");
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            $('#back-to-top').addClass("car-run");
            return false;
        });
    });
</script>
