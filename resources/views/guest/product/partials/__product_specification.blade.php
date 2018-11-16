<div id="sec_dt_07" class="scrollspy">
    <div class="inner_scrollspy">
        <div itemscope="" itemtype="http://schema.org/Product">
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>Thông số kỹ thuật</span>
                    </h2>
                </div>
                <div class="box_tabs thong_so_ky_thuat animated fadeInUpShort go delay-150">
                    <ul class="tabs tabs-fixed-width" style="width: 100%;">
                        @foreach($product->specifications as $key => $group)
                            <li class="tab">
                                @if($key == 0)
                                    <button id="defaultOpenSpecificationTabs" title="{{$group->group_name}}" class="specification-tablinks active"
                                            onclick="openSpecificationTag(event, 'tab_dt_{{$group->group_id}}')">
                                        {{$group->group_name}}
                                    </button>
                                @else
                                    <button title="{{$group->group_name}}" class="specification-tablinks"
                                            onclick="openSpecificationTag(event, 'tab_dt_{{$group->group_id}}')">
                                        {{$group->group_name}}
                                    </button>
                                @endif

                            </li>
                        @endforeach

                        {{--<li class="tab">--}}
                            {{--<button id="defaultOpenSpecificationTabs" title="Động cơ &amp; Khung xe" class="specification-tablinks"--}}
                                    {{--onclick="openSpecificationTag(event, 'tab_dt_2')">--}}
                                {{--Động cơ &amp; Khung xe--}}
                            {{--</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="Ngoại thất" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_3')">Ngoại thất</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="Nội thất" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_4')">Nội thất</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="Ghế" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_203')">Ghế</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="Tiện nghi" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_5')">Tiện nghi</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="An ninh" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_8')">An ninh</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="An toàn chủ động" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_6')">An toàn chủ động</button>--}}
                        {{--</li>--}}
                        {{--<li class="tab">--}}
                            {{--<button title="An toàn bị động" class="specification-tablinks" onclick="openSpecificationTag(event, 'tab_dt_7')">An toàn bị động</button>--}}
                        {{--</li>--}}
                        <div class="indicator" style="right: 1023.75px; left: 0px;"></div>
                        <div class="indicator" style="right: 1023.75px; left: 0px;"></div>
                    </ul>
                    @foreach($product->specifications as $indexGroup => $group)
                        <div id="tab_dt_{{$group->group_id}}" class="specification-content-tab content-spec" data-catspec="{{$group->group_id}}" style="display: block;">
                            <div class="inner">
                                <table class="tbltk striped">
                                    <tbody>
                                        @foreach($group->types as $type)
                                            @foreach($type->items as $indexItem => $item)
                                                @if(isset($item->content))
                                                    <tr class="lv1 group-2 notnull">
                                                        <td style="width: 30%" class="th">
                                                            @if($indexItem == 0) <b>{{$type->type_name}}</b> @endif
                                                        </td>
                                                        <td style="width: 30%" class="td">{{$item->item_name}}</td>
                                                        <td class="hide"></td>
                                                        <td style="width: 40%">
                                                            <table>
                                                                <tbody>
                                                                <tr class="lv2">
                                                                    <td>{{$item->content}}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                    {{--<div id="tab_dt_1" class="specification-content-tab content-spec" data-catspec="2" style="display: block;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Kích thước</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kích thước tổng thể bên ngoài (D x R x C) <i>(mm x--}}
                                            {{--mm x mm)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>4145 x 1730 x 1500</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chiều dài cơ sở <i>(mm)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>2550</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chiều rộng cơ sở (Trước/ sau) <i>(mm)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>1460/1445</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Khoảng sáng gầm xe <i>(mm)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>135</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Góc thoát (Trước/Sau) <i>(độ/degree)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>N/A</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Bán kính vòng quay tối thiểu <i>(m)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>5.7</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trọng lượng không tải <i>(kg)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>1120</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trọng lượng toàn tải <i>(kg)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>1550</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Dung tích bình nhiên liệu <i>(L)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>42</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Dung tích khoang hành lý <i>(L)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>N/A</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kích thước khoang chở hàng (D x R x C) <i>(mm)</i>--}}
                                    {{--</td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>N/A</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Động cơ</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại động cơ <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>2NR-FE (1.5L)</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Số xy lanh <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>4</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Bố trí xy lanh <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Thẳng hàng/In line</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Dung tích xy lanh <i>(cc)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>1496</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Tỉ số nén <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>-</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống nhiên liệu <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Phun xăng điện tử/Electronic fuel injection</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại nhiên liệu <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Xăng/Petrol</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Công suất tối đa <i>(kW (Mã lực) @ vòng/phút)</i>--}}
                                    {{--</td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>(79)107@ 6000</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Mô men xoắn tối đa <i>(Nm @ vòng/phút)</i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>140@4200</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Tiêu chuẩn khí thải <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Euro 4</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống ngắt/ mở động cơ tự động <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chế độ lái</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống truyền động</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Dẫn động cầu trước/FWD</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hộp số</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Số tự động vô cấp/ CVT</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống treo</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Mc Pherson/Mc Pherson Struts</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Thanh xoắn/Torsion beam</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống lái</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trợ lực tay lái <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Điện/Electric</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống tay lái tỉ số truyền biến thiên (VGRS)--}}
                                        {{--<i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Vành &amp; lốp xe</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại vành <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Mâm đúc/Alloy</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kích thước lốp <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>195/50 R16</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Lốp dự phòng <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>195/50 R16, Mâm đúc/Alloy</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Phanh</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Đĩa thông gió 15"/Ventilated disc 15"</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Đĩa đặc 15"/Solid disc 15"</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Tiêu thụ nhiên liệu</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kết hợp <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>5,7</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trong đô thị <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>7</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Ngoài đô thị <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>4.9</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_3" class="specification-content-tab content-spec" data-catspec="3" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cụm đèn trước</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Đèn chiếu gần <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Halogen projector</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Đèn chiếu xa <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Halogen reflector</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Đèn chiếu sáng ban ngày <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With (LED)</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống rửa đèn <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống điều khiển đèn tự động <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống nhắc nhở đèn sáng <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống mở rộng góc chiếu tự động <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống cân bằng góc chiếu <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chế độ đèn chờ dẫn đường <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cụm đèn sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>LED</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Đèn báo phanh trên cao</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có (LED)/ Có/With (LED)</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Đèn sương mù</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Gương chiếu hậu ngoài</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng điều chỉnh điện <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng gập điện <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Tích hợp đèn báo rẽ <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Tích hợp đèn chào mừng <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Màu <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Cùng màu thân xe/Colored</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng tự điều chỉnh khi lùi <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Bộ nhớ vị trí <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng sấy gương <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng chống bám nước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng chống chói tự động <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Gạt mưa</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Gián đoạn (điều chỉnh thời gan) Intermittent (Time adjustment +--}}
                                                    {{--Mist)--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có (liên tục)/With (without intermittent)</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chức năng sấy kính sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Ăng ten</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Vây cá/Shark fin</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Tay nắm cửa ngoài</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Mạ/Plating</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Bộ quây xe thể thao</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Thanh cản (giảm va chạm)</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Cùng màu thân xe/Colored</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Cùng màu thân xe/Colored</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Lưới tản nhiệt</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Mạ/Plating</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chắn bùn</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Ống xả kép</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Thanh đỡ nóc xe</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_4" class="specification-content-tab content-spec" data-catspec="4" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Tay lái</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại tay lái <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>3 chấu/3-spoke</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chất liệu <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Bọc da/leather</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Nút bấm điều khiển tích hợp <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Điều chỉnh âm thanh/Audio switch</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Điều chỉnh <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Chỉnh tay 2 hướng/Manual tilt</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Lẫy chuyển số <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Bộ nhớ vị trí <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Gương chiếu hậu trong</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>2 chế độ ngày và đêm/Day &amp; Night</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Tay nắm cửa trong</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Mạ/Plating</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cụm đồng hồ</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại đồng hồ <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Optitron</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Đèn báo chế độ Eco <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng báo lượng tiêu thụ nhiên liệu <i></i>--}}
                                    {{--</td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng báo vị trí cần số <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Màn hình hiển thị đa thông tin <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cửa sổ trời</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_203" class="specification-content-tab content-spec" data-catspec="203" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chất liệu bọc ghế</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Da/Leather</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Ghế trước</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Loại ghế <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Thường/Normal</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Điều chỉnh ghế lái <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Chỉnh tay 6 hướng/6 way manual</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Điều chỉnh ghế hành khách <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Chỉnh tay 4 hướng/4 way manual</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng thông gió <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng sưởi <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Ghế sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hàng ghế thứ hai <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Gập lưng ghế 60:40/ 60:40 Spilt fold</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Tựa tay hàng ghế sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_5" class="specification-content-tab content-spec" data-catspec="5" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Rèm che nắng kính sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Rèm che nắng cửa sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống điều hòa</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Tư động/Auto</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cửa gió sau</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hộp làm mát</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống âm thanh</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Đầu đĩa <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>DVD 7" touch screen</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Số loa <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>6</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Cổng kết nối AUX <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Cổng kết nối USB <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kết nối Bluetooth <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống điều khiển bằng giọng nói <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Chức năng điều khiển từ hàng ghế sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kết nối wifi <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Hệ thống đàm thoại rảnh tay <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kết nối điện thoại thông minh <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Kết nối HDMI <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chìa khóa thông minh &amp; khởi động bằng nút--}}
                                            {{--bấm</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Khóa cửa điện</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Chức năng khóa cửa từ xa</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cửa sổ điều chỉnh điện</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có (1 chạm và chống kẹt bên người lái)/With (Auto &amp; Jam--}}
                                                    {{--protection for driver window)--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cốp điều khiển điện</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống sạc không dây</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống điều khiển hành trình</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_8" class="specification-content-tab content-spec" data-catspec="8" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống báo động</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống mã hóa khóa động cơ</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_6" class="specification-content-tab content-spec" data-catspec="6" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống chống bó cứng phanh</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống hỗ trợ lực phanh khẩn cấp</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống phân phối lực phanh điện tử</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống ổn định thân xe</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống kiểm soát lực kéo</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống hỗ trợ khởi hành ngang dốc</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống hỗ trợ khởi hành đỗ đèo</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống lựa chọn vận tốc vượt địa hình</b>--}}
                                    {{--</td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Hệ thống thích nghi địa hình</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Đèn báo phanh khẩn cấp</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Camera lùi</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cảm biến hỗ trợ đỗ xe</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Góc trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Góc sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="tab_dt_7" class="specification-content-tab content-spec" data-catspec="7" style="display: none;">--}}
                        {{--<div class="inner">--}}
                            {{--<table class="tbltk striped">--}}
                                {{--<tbody>--}}


                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Túi khí</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí người lái &amp; hành khách phía trước--}}
                                        {{--<i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí bên hông phía trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí rèm <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí bên hông phía sau <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí đầu gối người lái <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 null">--}}
                                    {{--<td style="width: 30%" class="th null"><b></b></td>--}}
                                    {{--<td style="width: 30%" class="td">Túi khí đầu gối hành khách <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Không có/Without</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Khung xe GOA</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Dây đai an toàn</b></td>--}}
                                    {{--<td style="width: 30%" class="td">Trước <i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>3 điểm ELR, 5 vị trí/ 3 P ELR x5</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Ghế có cấu trúc giảm chấn thương cổ</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-2 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Cột lái tự đổ</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="lv1 group-1 notnull">--}}
                                    {{--<td style="width: 30%" class="th"><b>Bàn đạp phanh tự đổ</b></td>--}}
                                    {{--<td style="width: 30%" class="td null"><i></i></td>--}}
                                    {{--<td class="hide"></td>--}}
                                    {{--<td style="width: 40%">--}}
                                        {{--<table>--}}
                                            {{--<tbody>--}}
                                            {{--<tr class="lv2">--}}
                                                {{--<td>Có/With</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    function openSpecificationTag(evt, cityName) {
        var i, pro_tabcontent, pro_tablinks;
        pro_tabcontent = document.getElementsByClassName("specification-content-tab");
        for (i = 0; i < pro_tabcontent.length; i++) {
            pro_tabcontent[i].style.display = "none";
        }
        pro_tablinks = document.getElementsByClassName("specification-tablinks");
        for (i = 0; i < pro_tablinks.length; i++) {
            pro_tablinks[i].className = pro_tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        return false;
    }

    document.getElementById("defaultOpenSpecificationTabs").click();
</script>
