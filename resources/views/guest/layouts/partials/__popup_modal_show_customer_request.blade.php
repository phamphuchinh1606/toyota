<style>
    a.customer-reques{
        right: -10px;
    }
    .customer-reques .suntory-alo-ph-img-circle{
        overflow: hidden;
    }
</style>
<a href="Javascript:void()" class="suntory-alo-phone suntory-alo-green customer-reques" id="suntory-alo-phoneIcon" style="bottom: 0px;">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle">
        <img src="{{asset('images/guest/customer-request.png')}}">
    </div>
</a>
<script>
    $(document).ready(function () {
        $('a.customer-reques').on('click',function () {
            $('#form-request-price').show();
        });
    })
</script>
