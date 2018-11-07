<?php
use Illuminate\Database\Seeder;
use App\Services\{SettingSpecificationService};
class SettingSpecificationSeeder extends Seeder
{
    protected $settingSpecificationService;
    public function __construct(SettingSpecificationService $settingSpecificationService)
    {
        $this->settingSpecificationService = $settingSpecificationService;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataGroup = [
            [
                'groupName' => 'Động cơ & Khung xe',
                'types' => [
                    [
                        'typeName' => 'Kích thước',
                        'items' =>
                            [
                                'Kích thước tổng thể bên ngoài (D x R x C) (mm x mm x mm)',
                                'Kích thước tổng thể bên trong (D x R x C) (mm x mm x mm)',
                                'Chiều dài cơ sở (mm)',
                                'Chiều rộng cơ sở (Trước/ sau) (mm)',
                                'Khoảng sáng gầm xe (mm)',
                                'Góc thoát (Trước/Sau) (độ/degree)',
                                'Bán kính vòng quay tối thiểu (m)',
                                'Trọng lượng không tải (kg)',
                                'Trọng lượng toàn tải (kg)',
                                'Dung tích bình nhiên liệu (L)',
                                'Kích thước khoang chở hàng (D x R x C) (mm)'
                            ]
                    ],
                    [
                        'typeName' => 'Động cơ',
                        'items' =>
                            [
                                'Loại động cơ',
                                'Số xy lanh',
                                'Bố trí xy lanh',
                                'Dung tích xy lanh (cc)',
                                'Tỉ số nén',
                                'Hệ thống nhiên liệu',
                                'Loại nhiên liệu',
                                'Công suất tối đa (kW (Mã lực) @ vòng/phút)',
                                'Mô men xoắn tối đa (Nm @ vòng/phút)',
                                'Tốc độ tối đa',
                                'Tiêu chuẩn khí thải',
                            ]
                    ],
                    [
                        'typeName' => 'Chế độ lái',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Hệ thống truyền động',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Hộp số',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Hệ thống treo',
                        'items' =>
                            [
                                'Trước',
                                'Sau'
                            ]
                    ],
                    [
                        'typeName' => 'Hệ thống lái',
                        'items' =>
                            [
                                'Trợ lực tay lái',
                                'Hệ thống tay lái tỉ số truyền biến thiên (VGRS)'
                            ]
                    ],
                    [
                        'typeName' => 'Vành & lốp xe',
                        'items' =>
                            [
                                'Loại vành',
                                'Kích thước lốp',
                                'Lốp dự phòng'
                            ]
                    ],
                    [
                        'typeName' => 'Phanh',
                        'items' =>
                            [
                                'Trước',
                                'Sau'
                            ]
                    ],
                    [
                        'typeName' => 'Tiêu thụ nhiên liệu',
                        'items' =>
                            [
                                'Kết hợp',
                                'Trong đô thị',
                                'Ngoài đô thị'
                            ]
                    ]
                ]
            ],
            [
                'groupName' => 'Ngoại thất',
                'types' => [
                    [
                        'typeName' => 'Cụm đèn trước',
                        'items' =>
                            [
                                'Đèn chiếu gần',
                                'Đèn chiếu xa',
                                'Đèn chiếu sáng ban ngày',
                                'Hệ thống rửa đèn',
                                'Hệ thống điều khiển đèn tự động',
                                'Hệ thống nhắc nhở đèn sáng',
                                'Hệ thống mở rộng góc chiếu tự động',
                                'Hệ thống cân bằng góc chiếu',
                                'Chế độ đèn chờ dẫn đường'
                            ]
                    ],
                    [
                        'typeName' => 'Cụm đèn sau',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Đèn báo phanh trên cao',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Đèn sương mù',
                        'items' =>
                            [
                                'Trước',
                                'Sau'
                            ]
                    ],
                    [
                        'typeName' => 'Gương chiếu hậu ngoài',
                        'items' =>
                            [
                                'Chức năng điều chỉnh điện',
                                'Chức năng gập điện',
                                'Tích hợp đèn báo rẽ',
                                'Màu',
                                'Chức năng tự điều chỉnh khi lùi',
                                'Bộ nhớ vị trí',
                                'Chức năng sấy gương',
                                'Chức năng chống bám nước',
                                'Chức năng chống chói tự động'
                            ]
                    ],
                    [
                        'typeName' => 'Gạt mưa',
                        'items' =>
                            [
                                'Trước',
                                'Sau'
                            ]
                    ],
                    [
                        'typeName' => 'Chức năng sấy kính sau',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Ăng ten',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Tay nắm cửa ngoài',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Bộ quây xe thể thao',
                        'items' =>
                            [
                                ''
                            ]
                    ],
                    [
                        'typeName' => 'Thanh cản (giảm va chạm)',
                        'items' => [
                            'Trước',
                            'Sau'
                        ]
                    ],
                    [
                        'typeName' => 'Lưới tản nhiệt',
                        'items' => [
                            'Trước'
                        ]
                    ],
                    [
                        'typeName' => 'Chắn bùn',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Ống xả kép',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Thanh đỡ nóc xe',
                        'items' => [
                            ''
                        ]
                    ]
                ]
            ],
            [
                'groupName' => 'Nội thất',
                'types' => [
                    [
                        'typeName' => 'Tay lái',
                        'items' => [
                            'Loại tay lái',
                            'Chất liệu',
                            'Nút bấm điều khiển tích hợp',
                            'Điều chỉnh',
                            'Lẫy chuyển số',
                            'Bộ nhớ vị trí'
                        ]
                    ],
                    [
                        'typeName' => 'Gương chiếu hậu trong',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Tay nắm cửa trong',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Cụm đồng hồ',
                        'items' => [
                            'Loại đồng hồ',
                            'Đèn báo chế độ Eco',
                            'Chức năng báo lượng tiêu thụ nhiên liệu',
                            'Chức năng báo vị trí cần số',
                            'Màn hình hiển thị đa thông tin',
                        ]
                    ],
                    [
                        'typeName' => 'Cửa sổ trời',
                        'items' => [
                            ''
                        ]
                    ]
                ]
            ],
            [
                'groupName' => 'Ghế',
                'types' => [
                    [
                        'typeName' => 'Chất liệu bọc ghế',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Ghế trước',
                        'items' => [
                            'Loại ghế',
                            'Điều chỉnh ghế lái',
                            'Điều chỉnh ghế hành khách',
                            'Bộ nhớ vị trí',
                            'Chức năng thông gió',
                            'Chức năng sưởi',
                        ]
                    ],
                    [
                        'typeName' => 'Ghế sau',
                        'items' => [
                            'Hàng ghế thứ hai',
                            'Hàng ghế thứ ba',
                            'Hàng ghế thứ bốn',
                            'Hàng ghế thứ năm',
                            'Tựa tay hàng ghế sau'
                        ]
                    ]
                ]
            ],
            [
                'groupName' => 'Tiện nghi',
                'types' => [
                    [
                        'typeName' => 'Rèm che nắng kính sau',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Rèm che nắng cửa sau',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống điều hòa',
                        'items' => [
                            'Trước'
                        ]
                    ],
                    [
                        'typeName' => 'Cửa gió sau',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hộp làm mát',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống âm thanh',
                        'items' => [
                            'Đầu đĩa',
                            'Số loa',
                            'Cổng kết nối AUX',
                            'Cổng kết nối USB',
                            'Kết nối Bluetooth',
                            'Hệ thống điều khiển bằng giọng nói',
                            'Chức năng điều khiển từ hàng ghế sau',
                            'Kết nối wifi',
                            'Hệ thống đàm thoại rảnh tay',
                            'Kết nối điện thoại thông minh',
                            'Kết nối HDMI',
                        ]
                    ],
                    [
                        'typeName' => 'Chìa khóa thông minh & khởi động bằng nút bấm',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Khóa cửa điện',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Chức năng khóa cửa từ xa',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Cửa sổ điều chỉnh điện',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Cốp điều khiển điện',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống sạc không dây',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống điều khiển hành trình',
                        'items' => [
                            ''
                        ]
                    ],
                ]
            ],
            [
                'groupName' => 'An ninh',
                'types' => [
                    [
                        'typeName' => 'Hệ thống báo động',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống mã hóa khóa động cơ',
                        'items' => [
                            ''
                        ]
                    ]
                ]
            ],
            [
                'groupName' => 'An toàn chủ động',
                'types' => [
                    [
                        'typeName' => 'Hệ thống chống bó cứng phanh',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống hỗ trợ lực phanh khẩn cấp',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống phân phối lực phanh điện tử',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống ổn định thân xe',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống kiểm soát lực kéo',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống hỗ trợ khởi hành ngang dốc',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống hỗ trợ khởi hành đỗ đèo',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống lựa chọn vận tốc vượt địa hình',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Hệ thống thích nghi địa hình',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Đèn báo phanh khẩn cấp',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Camera lùi',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Cảm biến hỗ trợ đỗ xe',
                        'items' => [
                            'Sau',
                            'Góc trước',
                            'Góc sau'
                        ]
                    ],
                ]
            ],
            [
                'groupName' => 'An toàn bị động',
                'types' => [
                    [
                        'typeName' => 'Túi khí',
                        'items' => [
                            'Túi khí người lái & hành khách phía trước',
                            'Túi khí bên hông phía trước',
                            'Túi khí rèm',
                            'Túi khí bên hông phía sau',
                            'Túi khí đầu gối người lái',
                            'Túi khí đầu gối hành khách'
                        ]
                    ],
                    [
                        'typeName' => 'Khung xe GOA',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Dây đai an toàn',
                        'items' => [
                            'Trước'
                        ]
                    ],
                    [
                        'typeName' => 'Ghế có cấu trúc giảm chấn thương cổ',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Cột lái tự đổ',
                        'items' => [
                            ''
                        ]
                    ],
                    [
                        'typeName' => 'Bàn đạp phanh tự đổ',
                        'items' => [
                            ''
                        ]
                    ],
                ]
            ]
        ];
        try{
            \Illuminate\Support\Facades\DB::beginTransaction();
            foreach ($dataGroup as $index => $groupItem){
                $specificationGroup = $this->settingSpecificationService->createSpecificationGroup($groupItem['groupName'],$index+1);
                $groupId = $specificationGroup->id;
                if(isset($groupId)){
//                    dump($groupItem['types']);
                    foreach ($groupItem['types'] as $indexType => $type){
                        $specificationType = $this->settingSpecificationService->createSpecificationType($groupId,$type['typeName'],$indexType+1);
                        $typeId = $specificationType->id;
                        if(isset($typeId)){
                            $indexItem = 1;
                            foreach ($type['items'] as $keyItem => $item){
                                $this->settingSpecificationService->createSpecificationItem($typeId,$item,$indexItem);
                                $indexItem= $indexItem+1;
                            }
                        }
                    }
                }
            }
            \Illuminate\Support\Facades\DB::commit();
        }catch (\Exception $ex){
            \Illuminate\Support\Facades\DB::rollBack();
            dump($ex);
        }
    }
}
