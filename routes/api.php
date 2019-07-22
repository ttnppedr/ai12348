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
