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

    $body = '';
    $data = $request->get('data');
    if (is_array($request->get('data')['item'])) {
        foreach ($request->get('data')['item'] as $item) {
            $body .= 'item[]=' . $item . '&';
        }
    } else {
        $body .= 'item=' . $request->get('data')['item'] . '&';
    }
    if (isset($request->get('data')['other'])) {
        foreach ($request->get('data')['other'] as $k => $v) {
            $body .= $k . '=' . $v . '&';
        }
    }
    $body .= 'action=' . $request->get('data')['action'];

    $res = $client->request('POST', $base . $request->get('url') . '?action_type=ajax', [
        'body' => $body,
        'headers' => [
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

Route::post('/last', function (Request $request) {
    $client = new \GuzzleHttp\Client();
    $jar = \GuzzleHttp\Cookie\CookieJar::fromArray($request->get('cookie'), 'ai.12348.gov.cn');

    $base = 'https://ai.12348.gov.cn';

    $res = $client->request('POST', $base . $request->get('url') . '?action_type=ajax', [
        'form_params' => array('action'=>'more_info', 'username'=>'PC用户', 'tell'=>'13000000000'),
        // 'form_params' => $request->get('data'),
        'headers' => [
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

    return $output['url'];
});

Route::post('/location', function (Request $request) {
    $client = new \GuzzleHttp\Client();

    $base = 'https://ai.12348.gov.cn';

    $res = $client->request('GET', $base . $request->get('url') . '?' . http_build_query($request->get('data')), [
        'headers' => [
            'Accept' => 'application/json, text/javascript, */*; q=0.01',
            'X-Requested-With' => 'XMLHttpRequest',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36',
            'Authority' => 'ai.12348.gov.cn',
            'Accept-encoding' => 'gzip, deflate, br',
            'Accept-language' => 'en-US,en;q=0.9,zh-TW;q=0.8,zh;q=0.7',
        ],
    ]);

    return $res->getBody();
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
