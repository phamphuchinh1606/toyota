<div id="sec_dt_07" class="scrollspy">
    <div class="inner_scrollspy">
        <div>
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>Thông số kỹ thuật XE OTO TOYOTA</span>
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
                        <div class="indicator" style="right: 1023.75px; left: 0px;"></div>
                        <div class="indicator" style="right: 1023.75px; left: 0px;"></div>
                    </ul>
                    @foreach($product->specifications as $indexGroup => $group)
                        <div id="tab_dt_{{$group->group_id}}" class="specification-content-tab content-spec" data-catspec="{{$group->group_id}}" style="display: block;">
                            <div class="inner">
                                <table class="tbltk striped">
                                    <tbody>
                                        @foreach($group->types as $indexType => $type)
                                            @foreach($type->items as $indexItem => $item)
                                                @if(isset($item->content))
                                                    <tr class="lv1 @if($indexType %2 == 0) group-2 @else group-1 @endif notnull">
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
