# ZSGF\Client\UserCurrencyApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userCurrencies()**](UserCurrencyApi.md#userCurrencies) | **GET** /UserCurrency/{appKey}/{id} | 资产 |
| [**userCurrencyConsume()**](UserCurrencyApi.md#userCurrencyConsume) | **POST** /UserCurrency/{appKey}/CurrencyConsume | 消费虚拟币 |
| [**userCurrencyExchange()**](UserCurrencyApi.md#userCurrencyExchange) | **POST** /UserCurrency/{appKey}/CurrencyExchange | 兑换虚拟币 |
| [**userCurrencyRecharge()**](UserCurrencyApi.md#userCurrencyRecharge) | **POST** /UserCurrency/{appKey}/CurrencyRecharge | 充值虚拟币 |
| [**userCurrencyTransactions()**](UserCurrencyApi.md#userCurrencyTransactions) | **GET** /UserCurrency/{appKey}/CurrencyTransactions | 虚拟币交易记录 |


## `userCurrencies()`

```php
userCurrencies($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

资产

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userCurrencies($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserCurrencyApi->userCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCurrencyConsume()`

```php
userCurrencyConsume($nonce, $timestamp, $signature, $app_key, $currency_consume_request): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

消费虚拟币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nonce = 'nonce_example'; // string | 随机数
$timestamp = 56; // int | 时间戳（允许与服务器时间误差在1分钟内）
$signature = 'signature_example'; // string | 签名
$app_key = 'app_key_example'; // string
$currency_consume_request = new \ZSGF\Client\ZSGF\Client\Model\CurrencyConsumeRequest(); // \ZSGF\Client\ZSGF\Client\Model\CurrencyConsumeRequest | 

try {
    $result = $apiInstance->userCurrencyConsume($nonce, $timestamp, $signature, $app_key, $currency_consume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserCurrencyApi->userCurrencyConsume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nonce** | **string**| 随机数 | |
| **timestamp** | **int**| 时间戳（允许与服务器时间误差在1分钟内） | |
| **signature** | **string**| 签名 | |
| **app_key** | **string**|  | |
| **currency_consume_request** | [**\ZSGF\Client\ZSGF\Client\Model\CurrencyConsumeRequest**](../Model/CurrencyConsumeRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCurrencyExchange()`

```php
userCurrencyExchange($nonce, $timestamp, $signature, $app_key, $exchange_currency_request): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

兑换虚拟币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nonce = 'nonce_example'; // string | 随机数
$timestamp = 56; // int | 时间戳（允许与服务器时间误差在1分钟内）
$signature = 'signature_example'; // string | 签名
$app_key = 'app_key_example'; // string
$exchange_currency_request = new \ZSGF\Client\ZSGF\Client\Model\ExchangeCurrencyRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExchangeCurrencyRequest | 

try {
    $result = $apiInstance->userCurrencyExchange($nonce, $timestamp, $signature, $app_key, $exchange_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserCurrencyApi->userCurrencyExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nonce** | **string**| 随机数 | |
| **timestamp** | **int**| 时间戳（允许与服务器时间误差在1分钟内） | |
| **signature** | **string**| 签名 | |
| **app_key** | **string**|  | |
| **exchange_currency_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExchangeCurrencyRequest**](../Model/ExchangeCurrencyRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCurrencyRecharge()`

```php
userCurrencyRecharge($nonce, $timestamp, $signature, $app_key, $recharge_point_request): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

充值虚拟币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nonce = 'nonce_example'; // string | 随机数
$timestamp = 56; // int | 时间戳（允许与服务器时间误差在1分钟内）
$signature = 'signature_example'; // string | 签名
$app_key = 'app_key_example'; // string
$recharge_point_request = new \ZSGF\Client\ZSGF\Client\Model\RechargePointRequest(); // \ZSGF\Client\ZSGF\Client\Model\RechargePointRequest | 

try {
    $result = $apiInstance->userCurrencyRecharge($nonce, $timestamp, $signature, $app_key, $recharge_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserCurrencyApi->userCurrencyRecharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nonce** | **string**| 随机数 | |
| **timestamp** | **int**| 时间戳（允许与服务器时间误差在1分钟内） | |
| **signature** | **string**| 签名 | |
| **app_key** | **string**|  | |
| **recharge_point_request** | [**\ZSGF\Client\ZSGF\Client\Model\RechargePointRequest**](../Model/RechargePointRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCurrencyTransactions()`

```php
userCurrencyTransactions($app_key, $trans_type, $cur_code, $start_time, $end_time, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

虚拟币交易记录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserCurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$trans_type = 'trans_type_example'; // string | 交易类型
$cur_code = 'cur_code_example'; // string | 货币代码
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 开始时间
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 结束时间
$skip = 56; // int | 跳过的条数
$take = 56; // int | 拉取的条数

try {
    $result = $apiInstance->userCurrencyTransactions($app_key, $trans_type, $cur_code, $start_time, $end_time, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserCurrencyApi->userCurrencyTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **trans_type** | **string**| 交易类型 | [optional] |
| **cur_code** | **string**| 货币代码 | [optional] |
| **start_time** | **\DateTime**| 开始时间 | [optional] |
| **end_time** | **\DateTime**| 结束时间 | [optional] |
| **skip** | **int**| 跳过的条数 | [optional] |
| **take** | **int**| 拉取的条数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
