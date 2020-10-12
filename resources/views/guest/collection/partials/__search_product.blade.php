<script>
    let searchInfo = {
        'product_type' : '{{$searchInfo->product_type}}',
        'product_price' : '{{$searchInfo->product_price}}',
        'product_fuel' : '{{$searchInfo->product_fuel}}',
        'product_number_of_seat' : '{{$searchInfo->product_number_of_seat}}'
    };
    function getSearchInfo(){
        searchInfo.product_type = '';
        $('input[name=product_type]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_type += (searchInfo.product_type == '' ? '' : '-') + $(this).val();
            }
        });
        searchInfo.product_price = '';
        $('input[name=search_price]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_price += (searchInfo.product_price == '' ? '' : '-') + $(this).val();
            }
        });
        searchInfo.product_fuel = '';
        $('input[name=search_fuel]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_fuel += (searchInfo.product_fuel == '' ? '' : '-') + $(this).val();
            }
        });
        searchInfo.product_number_of_seat = '';
        $('input[name=search_number_of_seat]').each(function(){
            if($(this).prop("checked")){
                searchInfo.product_number_of_seat += (searchInfo.product_number_of_seat == '' ? '' : '-') + $(this).val();
            }
        });
    }
    $(document).ready(function(){
       if(searchInfo.product_type != null && searchInfo.product_type != undefined){
           let listProductTypeId = searchInfo.product_type.split('-');
           for(productTypeId of listProductTypeId)
           {
               $('#product_type_'+ productTypeId).prop( "checked", true );
           }
       }
        if(searchInfo.product_price != null && searchInfo.product_price != undefined){
            let listPrice = searchInfo.product_price.split('-');
            for(price of listPrice)
            {
                $('#product_price_'+ price).prop( "checked", true );
            }
        }
        if(searchInfo.product_fuel != null && searchInfo.product_fuel != undefined){
            let listFuel = searchInfo.product_fuel.split('-');
            for(fuel of listFuel)
            {
                $('#product_fuel_'+ fuel).prop( "checked", true );
            }
        }
        if(searchInfo.product_number_of_seat != null && searchInfo.product_number_of_seat != undefined){
            let listNumOfSeat = searchInfo.product_number_of_seat.split('-');
            for(numOfSeat of listNumOfSeat)
            {
                $('#product_number_of_seat_'+ numOfSeat).prop( "checked", true );
            }
        }

       $('.search_info').on('click',function(){
           getSearchInfo();
           $('.btn-apply').removeClass('hide');
       });
        $('.btn-apply').on('click',function(){
            window.location = "{{route('collection_all')}}" + "?product_type="+searchInfo.product_type + "&product_price="+searchInfo.product_price
                + "&product_fuel="+searchInfo.product_fuel + "&product_number_of_seat="+searchInfo.product_number_of_seat;
        });
    });


</script>

<style>
    .block .title_block{
        font-size: 16px;
        font-weight: 700;
        color: #000000;
        padding-left: 15px;
        padding-bottom: 12px;
        margin: 0;
        position: relative;
    }
    .block .title_block button{
        margin-top: -6px;
    }
    .block_search_title{
        font-size: 16px;
        font-weight: 700;
        color: #000000;
        cursor: pointer;
        padding-top: 10px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        position: relative;
        display: block;
        margin: 0;
    }
</style>

<div class="block">
    <div class="title_block">
        BỘ LỌC
        <button type="button" class="btn btn-primary pull-right hide btn-apply" id="btn-apply">Áp dụng</button>
    </div>
</div>

<div class="grid__item large--one-whole medium--one-half small--one-whole pd-left10">
    <div class="collection-filter-vendor">
        <p class="block_search_title col-sb-trigger">
            <span>DANH MỤC SẢN PHẨM</span>
        </p>
        <div class="panel sidebar-sort" style="max-height: none">
            <ul class="no-bullets clearfix check-box-list">
                @foreach($productTypes as $productType)
                    <li>
                        <label data-filter="Suplo" class="filter-vendor__item suplo" for="product_type_{{$productType->id}}">
                            <input type="checkbox" class="search_info" id="product_type_{{$productType->id}}" name="product_type" value="{{$productType->id}}">
                            <span>{{$productType->product_type_name}}</span>
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="grid__item large--one-whole medium--one-half small--one-whole pd-left10">
    <div class="collection-filter-price">
        <p class="block_search_title col-sb-trigger">
            <span>KHOẢNG GIÁ</span>
        </p>
        <div class="panel sidebar-sort" style="max-height: 204px;">
            <ul class="no-bullets filter-price clearfix check-box-list">
                <li>
                    <label for="product_price_less_500t">
                        <input type="checkbox" id="product_price_less_500t" class="search_info" name="search_price" value="less_500t">
                        <span>Dưới 500 triệu</span>
                    </label>
                </li>
                <li>
                    <label for="product_price_500t_1ti">
                        <input type="checkbox" id="product_price_500t_1ti" class="search_info" name="search_price" value="500t_1ti">
                        <span>Từ 500 triệu - 1tỉ </span>
                    </label>
                </li>
                <li>
                    <label for="product_price_1ti_2ti">
                        <input type="checkbox" id="product_price_1ti_2ti" class="search_info" name="search_price" value="1ti_2ti">
                        <span>Từ 1 tỉ - 2 tỉ</span>
                    </label>
                </li>
                <li>
                    <label for="product_price_2ti_3ti">
                        <input type="checkbox" id="product_price_2ti_3ti" class="search_info" name="search_price" value="2ti_3ti">
                        <span>Từ 2 tỉ - 3 tỉ</span>
                    </label>
                </li>
                <li>
                    <label for="product_price_3ti_4ti">
                        <input type="checkbox" id="product_price_3ti_4ti" class="search_info" name="search_price" value="3ti_4ti">
                        <span>Từ 3 tỉ - 4 tỉ</span>
                    </label>
                </li>
                <li>
                    <label for="product_price_bigger_4ti">
                        <input type="checkbox" id="product_price_bigger_4ti" class="search_info" name="search_price" value="bigger_4ti">
                        <span>Trên 4 tỉ</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="grid__item large--one-whole medium--one-half small--one-whole pd-left10">
    <div class="collection-filter-price">
        <p class="block_search_title col-sb-trigger">
            <span>NHIÊN LIỆU</span>
        </p>
        <div class="panel sidebar-sort" style="max-height: 204px;">
            <ul class="no-bullets filter-price clearfix check-box-list">
                <li>
                    <label for="product_fuel_xang">
                        <input type="checkbox" id="product_fuel_xang" class="search_info" name="search_fuel" value="xang">
                        <span>Xăng</span>
                    </label>
                </li>
                <li>
                    <label for="product_fuel_dau">
                        <input type="checkbox" id="product_fuel_dau" class="search_info" name="search_fuel" value="dau">
                        <span>Dầu</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="grid__item large--one-whole medium--one-half small--one-whole pd-left10">
    <div class="collection-filter-price">
        <p class="block_search_title col-sb-trigger">
            <span>SỐ CHỖ NGỒI</span>
        </p>
        <div class="panel sidebar-sort" style="max-height: 204px;">
            <ul class="no-bullets filter-price clearfix check-box-list">
                <li>
                    <label for="product_number_of_seat_5cho">
                        <input type="checkbox" id="product_number_of_seat_5cho" class="search_info" name="search_number_of_seat" value="5cho">
                        <span>5 chỗ</span>
                    </label>
                </li>
                <li>
                    <label for="product_number_of_seat_7cho">
                        <input type="checkbox" id="product_number_of_seat_7cho" class="search_info" name="search_number_of_seat" value="7cho">
                        <span>7 chỗ</span>
                    </label>
                </li>
                <li>
                    <label for="product_number_of_seat_8cho">
                        <input type="checkbox" id="product_number_of_seat_8cho" class="search_info" name="search_number_of_seat" value="8cho">
                        <span>8 chỗ</span>
                    </label>
                </li>
                <li>
                    <label for="product_number_of_seat_15cho">
                        <input type="checkbox" id="product_number_of_seat_15cho" class="search_info" name="search_number_of_seat" value="15cho">
                        <span>15 chỗ</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <button type="button" class="btn btn-primary pull-right hide btn-apply" id="btn-apply">Áp dụng</button>
</div>



