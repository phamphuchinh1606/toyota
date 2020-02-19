<style>
    .form-request-price .col {
        width: 100%;
        padding: 0 10px;
        float: left;
        box-sizing: border-box;
    }
    .form-request-price .col-6 {
        width: 50% ;
    }
    .form-request-price form label {
        display: block;
        background: #f0f0f0;
        border-radius: 20px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        font-weight: bold;
        margin: 20px 0;
        font-size: 1rem;
        color: #000000;
    }
    .form-request-price form input, .modal-dialog form select {
        color: #707070;
        margin: 0;
        height: 30px;
        border: 0;
        border-bottom: 1px solid #9e9e9e;
        width: 100%;
        line-height: 30px;
        padding: 0;
        margin-bottom: 20px;
        font-size: 16px;
        font-family: inherit;
    }
    .form-request-price form button {
        color: #fff;
        background-color: #2596cf;
        text-align: center;
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        z-index: 1;
        line-height: 40px;
        padding: 0;
        border-radius: 5px;
        border: 0;
        width: 100%;
        font-family: inherit;
        font-size: 18px;
        margin-bottom: 10px;
    }
</style>
<div class="modal form-request-price" id="form-request-price" style="display: none; background-color: rgba(0, 0, 0, 0.4);">
    <div class="modal-content" style="opacity: 1; transform: translateY(0px);">
        <span id="close" class="close">×</span>
        <form class="grid" method="post" id="form-quick-view " action="{{route('home.request_info_pri')}}">
            @csrf
            <div class="grid__item text-center">
                <h4 style="color:red">
                    YÊU CẦU BÁO GIÁ </br>
                </h4>
                <p>
                    Kính chào Anh/Chị, Để nhận ngay báo giá mới và tốt nhất từ Toyota Hùng Vương, Anh/Chị hãy liên hệ với Phòng Kinh Doanh qua số điện thoại 0918 378 789 hoặc điền form bên dưới
                </p>
            </div>
            <div class="grid__item">
                <div class="row">
                    <div class="col col-6">
                        <label>Thông tin khách hàng</label>
                        <input name="name" type="text" placeholder="Họ tên" required="">
                        <input name="phone" type="text" placeholder="Số điện thoại" required="">
                        <input name="email" type="email" placeholder="Email">
                        <input name="address" type="text" placeholder="Địa chỉ">
                    </div>
                    <div class="col col-6">
                        <label class="pc">Thông tin xe cần báo giá</label>
                        <!-- Select Product -->
                        @include('both.common.__select_product',['selectName' => 'product_id'])

                        <input class="pc" name="time_plan" type="date" placeholder="Thời gian dự kiến">
                        <input class="pc" name="amount_current" type="text" placeholder="Ngân sách hiện có">
                        <select class="pc" name="payment_id">
                            <option value="1">Mua trả góp</option>
                            <option value="2">Trả toàn bộ</option>
                        </select>
                        <button type="submit" class="btnConfirm" name="task" value="request">Gửi yêu cầu</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#form-request-price').show();
        $('#form-request-price #close').click(function(){
            $('#form-request-price').hide();
        })
    });
</script>
