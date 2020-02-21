Chào quản trị viên .<br/>

Vừa có một khách hàng gửi mail yêu cầu báo giá.<br/>

<b>Họ và tên </b> : {{$data->name}}<br/>
<b>Số điện thoại </b> : {{$data->phone}}<br/>
<b>Email</b> : {{$data->email}}<br/>
<b>Địa chỉ</b> : {{$data->address}}<br/>

<b>Dòng xe</b> : {{$data->product_name}}<br/>
<b>Thời gian</b> : {{$data->time_plan}}<br/>
<b>Ngân sách</b> : {{$data->amount_current}}<br/>
<b>Hình thức</b> : {{$data->payment_name}}<br/>
<b>IP đăng ký</b> : {{$data->request_ip}}<br/>

Để xem chi tiết trong tin , có thể click vào <a href="{{$data->link_admin}}" target="_blank">Link</a> để vào admin.
