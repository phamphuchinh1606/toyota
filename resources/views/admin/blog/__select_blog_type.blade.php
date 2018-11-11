<?php use App\Common\Constant; ?>
<select name="blog_type" class="form-control">
    <option value="{{Constant::$BLOG_TYPE_GENERAL_ID}}">{{Constant::$BLOG_TYPE_GENERAL_NAME}}</option>
    <option value="{{Constant::$BLOG_TYPE_PROMOTION_ID}}">{{Constant::$BLOG_TYPE_PROMOTION_NAME}}</option>
    <option value="{{Constant::$BLOG_TYPE_EVENT_ID}}">{{Constant::$BLOG_TYPE_EVENT_NAME}}</option>
</select>

<script>
    @if(isset($defaultValue))
        $('select[name=blog_type]').val({{$defaultValue}});
    @endif
</script>
