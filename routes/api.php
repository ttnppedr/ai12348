<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function (Request $request) {
        $catas = [[
                'title' => '婚姻问题',
                'sub' => [[
                        'link' => '/g/divorce/?action=start',
                        'title' => '整体离婚咨询'
                    ],
                    [
                        'link' => '/g/where_to_divorce/?action=start',
                        'title' => '去哪里离婚'
                    ],
                    [
                        'link' => '/g/divorce_rate/?action=start',
                        'title' => '能不能离婚'
                    ],
                    [
                        'link' => '/g/custody/?action=start',
                        'title' => '小孩问题'
                    ],
                    [
                        'link' => '/g/our_children/?action=start',
                        'title' => '离婚后小孩的问题'
                    ],
                    [
                        'link' => '/g/properties_division/?action=start',
                        'title' => '财产问题'
                    ],
                    [
                        'link' => '/g/live_together_dispute/?action=start',
                        'title' => '同居问题'
                    ],
                    [
                        'link' => '/g/divorce_indictment/?action=start',
                        'title' => '起诉状'
                    ],
                    [
                        'link' => '/g/divorce_agreement/?action=start',
                        'title' => '离婚协议书'
                    ],
                    [
                        'link' => '/g/properties_agreement/?action=start',
                        'title' => '财产协议'
                    ],
                    [
                        'link' => '/g/premarital_counseling/?action=start',
                        'title' => '婚前问题咨询'
                    ],
                    [
                        'link' => '/g/after_the_divorce_disputes/?action=start',
                        'title' => '离婚后问题'
                    ]
                ],
            ], [
                'title' => '劳动纠纷',
                'sub' => [[
                        'link' => '/g/labor/?action=start',
                        'title' => '劳动纠纷'
                    ],
                    [
                        'link' => '/g/labor_changjian/?action=start',
                        'title' => '劳动纠纷常见问题'
                    ],
                    [
                        'link' => '/g/double_pay/?action=start',
                        'title' => '不签劳动合同的双倍工资'
                    ],
                    [
                        'link' => '/g/overtime_pay/?action=start',
                        'title' => '加班工资'
                    ],
                    [
                        'link' => '/g/salary/?action=start',
                        'title' => '工资问题'
                    ],
                    [
                        'link' => '/g/shiyongqi/?action=start',
                        'title' => '试用期问题'
                    ],
                    [
                        'link' => '/g/severance_pay/?action=start',
                        'title' => '离职时的经济补偿金'
                    ]
                ],
            ], [
                'title' => '工伤赔偿',
                'sub' => [[
                        'link' => '/g/injury_benefit/?action=start',
                        'title' => '工伤赔偿(精准)'
                    ],
                    [
                        'link' => '/g/jiuye_yiliao/?action=start',
                        'title' => '工伤赔偿(快速)'
                    ],
                    [
                        'link' => '/g/identify_injury/?action=start',
                        'title' => '工伤认定'
                    ],
                    [
                        'link' => '/g/work_ca_eva/?action=start',
                        'title' => '工伤鉴定'
                    ],
                    [
                        'link' => '/g/rending_shenqing/?action=start',
                        'title' => '工伤认定申请表'
                    ]
                ],
            ], [
                'title' => '交通事故',
                'sub' => [[
                        'link' => '/g/traffic_accident_compensation/?action=start',
                        'title' => '交通事故赔偿计算'
                    ],
                    [
                        'link' => '/g/injury/?action=start',
                        'title' => '交通伤残鉴定'
                    ],
                    [
                        'link' => '/g/compensation_procedure/?action=start',
                        'title' => '交通事故赔偿流程'
                    ],
                    [
                        'link' => '/g/indictment/?action=start',
                        'title' => '交通事故起诉状'
                    ]
                ],
            ],
            [
                'title' => '借贷纠纷',
                'sub' => [[
                        'link' => '/g/debit_credit/?action=start',
                        'title' => '借贷纠纷'
                    ],
                    [
                        'link' => '/g/prosecution_form/?action=start',
                        'title' => '法院起诉状'
                    ],
                    [
                        'link' => '/g/application_preservation/?action=start',
                        'title' => '保全申请书'
                    ]
                ]
            ],
            [
                'title' => '继承问题',
                'link' => '/g/inherit?action=start'
            ],
            [
                'title' => '买房纠纷',
                'sub' => [[
                        'link' => '/g/subscription/?action=start',
                        'title' => '认购书纠纷'
                    ],
                    [
                        'link' => '/g/late_certificate/?action=start',
                        'title' => '逾期办证'
                    ],
                    [
                        'link' => '/g/area_error/?action=start',
                        'title' => '面积误差'
                    ],
                    [
                        'link' => '/g/two_buyer/?action=start',
                        'title' => '一房二卖'
                    ],
                    [
                        'link' => '/g/late_deliver/?action=start',
                        'title' => '逾期交房'
                    ]
                ]
            ],
            [
                'title' => '物业纠纷',
                'sub' => [[
                        'link' => '/g/property_dispute/?action=start',
                        'title' => '物业费纠纷'
                    ],
                    [
                        'link' => '/g/service_quality_dispute/?action=start',
                        'title' => '物业服务质量纠纷'
                    ],
                    [
                        'link' => '/g/proprietor_committee/?action=start',
                        'title' => '业主委员会相关问题'
                    ],
                    [
                        'link' => '/g/parking_space/?action=start',
                        'title' => '车位或其他小区公共区域纠纷'
                    ],
                    [
                        'link' => '/g/owners_rights/?action=start',
                        'title' => '业主权益受到其他业主侵害纠纷'
                    ],
                    [
                        'link' => '/g/property_common_problems/?action=start',
                        'title' => '其他常见问题'
                    ]
                ]
            ],
            [
                'title' => '产品质量',
                'link' => '/g/zhiliangzeren?action=start'
            ],
            [
                'title' => '电商纠纷',
                'link' => '/g/electronics_electric_vehicles?action=start'
            ],
            [
                'title' => '校园侵权',
                'link' => '/g/campus_tort?action=start'
            ],
            [
                'title' => '雇佣侵权',
                'link' => '/g/laowuqinquan?action=start'
            ],
            [
                'title' => '医患纠纷',
                'link' => '/g/yihuanjiufen?action=start'
            ],
            [
                'title' => '食品安全',
                'link' => '/g/food_safety?action=start'
            ],
            [
                'title' => '收养问题',
                'link' => '/g/adoption_issues?action=start'
            ]
        ];

        $result = '';
        foreach ($catas as $cata) {
            $result .= '<p>';
            if (isset($cata['sub'])) {
                $result .= $cata['title'];
                $result .= '<br>';
                foreach ($cata['sub'] as $sub) {
                    $result .= '<form method="POST" action="first-action">';
                    $result .= '<input value="' . $sub['link'] .'" type="hidden">';
                    $result .= '<a href="" onclick="form.submit();">' . $sub['title'] . '</a>';
                    $result .= '<br>';
                    $result .= '</form>';
                }
            } else {
                $result .= '<form method="POST" action="first-action">';
                $result .= '<input value="' . $cata['link'] .'" type="hidden">';
                $result .= '<a href="" onclick="form.submit();">' . $cata['title'] . '</a>';
                $result .= '<br>';
                    $result .= '</form>';
            }
            $result .= '</p>';
        }

        return $result;
});

Route::post('/first', function (Request $request) {
    $client = new \GuzzleHttp\Client();
    $jar = new \GuzzleHttp\Cookie\CookieJar();

    $base = 'https://ai.12348.gov.cn';

    $res = $client->request('POST', $base . $request->get('url') . '?action_type=ajax', [
        'headers' => [
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => $base . $request->get('url') . '?',
            'Origin' => $base,
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
        ],
        'cookies' => $jar,
    ]);

    $res = $client->request('POST', $base . $request->get('url') . '?action_type=ajax', [
        'headers' => [
            'Accept' => '*/*',
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => $base . $request->get('url') . '?',
            'Origin' => $base,
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        ],
        'cookies' => $jar,
    ]);

    $body = $res->getBody();

    $output = json_decode($body, true);

    return [
        'data' => $output['c'],
        'cookie' => $jar->toArray(),
    ];
});

Route::post('/send', function (Request $request) {
    $client = new \GuzzleHttp\Client();
    $jar = \GuzzleHttp\Cookie\CookieJar::fromArray($request->get('cookie'), 'ai.12348.gov.cn');

    $base = 'https://ai.12348.gov.cn';

    $res = $client->request('POST', $base . $request->get('url') . '?action_type=ajax', [
        'form_params' => $request->get('data'),
        'headers' => [
            'Accept' => '*/*',
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => $base . $request->get('url') . '?',
            'Origin' => $base,
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        ],
        'cookies' => $jar,
    ]);

    $body = $res->getBody();

    $output = json_decode($body, true);

    return [
        'data' => $output,
        'cookie' => $jar->toArray(),
    ];
});

Route::get('/getData', function (Request $request) {
    $client = new \GuzzleHttp\Client();
    $jar = new \GuzzleHttp\Cookie\CookieJar();

    $res = $client->request('POST', 'https://ai.12348.gov.cn/g/labor_changjian?action_type=ajax', [
        'headers' => [
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => 'https://ai.12348.gov.cn/g/labor_changjian?',
            'Origin' => 'https://ai.12348.gov.cn',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
        ],
        'cookies' => $jar,
    ]);

    $res = $client->request('POST', 'https://ai.12348.gov.cn/g/labor_changjian?action_type=ajax', [
        'headers' => [
            'Accept' => '*/*',
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => 'https://ai.12348.gov.cn/g/labor_changjian?',
            'Origin' => 'https://ai.12348.gov.cn',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        ],
        'cookies' => $jar,
    ]);

    $res = $client->request('POST', 'https://ai.12348.gov.cn/g/labor_changjian?action_type=ajax', [
        'form_params' => array('item' => '3acb305e3950c27216056e6e911aea49', 'action'=>'next'),
        'headers' => [
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => 'https://ai.12348.gov.cn/g/labor_changjian?',
            'Origin' => 'https://ai.12348.gov.cn',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        ],
        'cookies' => $jar,
    ]);

    $res = $client->request('POST', 'https://ai.12348.gov.cn/g/labor_changjian?action_type=ajax', [
        'form_params' => array('action'=>'more_info', 'username'=>'PC用户', 'tell'=>'13000000000'),
        'headers' => [
            'Accept' => '*/*',
            'X-Requested-With' => 'XMLHttpRequest',
            'Referer' => 'https://ai.12348.gov.cn/g/labor_changjian?',
            'Origin' => 'https://ai.12348.gov.cn',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        ],
        'cookies' => $jar,
    ]);

    $body = $res->getBody();

    $output = json_decode($body, true);
    echo $output['url'];
});
