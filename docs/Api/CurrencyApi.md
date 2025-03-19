# ZSGF\Client\CurrencyApi

All URIs are relative to https://api-staging.paomo.fun, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**currencies()**](CurrencyApi.md#currencies) | **GET** /Currency/{appKey} | 货币列表 |
| [**currency()**](CurrencyApi.md#currency) | **GET** /Currency/{appKey}/{id} | 货币详情 |
| [**currencyDelete()**](CurrencyApi.md#currencyDelete) | **DELETE** /Currency/{appKey}/{id} | 删除货币 |
| [**currencyExchangeRateDelete()**](CurrencyApi.md#currencyExchangeRateDelete) | **DELETE** /Currency/{appKey}/ExchangeRates/{id} | 删除汇率 |
| [**currencyExchangeRatePut()**](CurrencyApi.md#currencyExchangeRatePut) | **PUT** /Currency/{appKey}/ExchangeRates/{code} | 更新汇率 |
| [**currencyExchangeRates()**](CurrencyApi.md#currencyExchangeRates) | **GET** /Currency/{appKey}/ExchangeRates/{code} | 汇率列表 |
| [**currencyPost()**](CurrencyApi.md#currencyPost) | **POST** /Currency/{appKey} | 创建货币 |
| [**currencyPut()**](CurrencyApi.md#currencyPut) | **PUT** /Currency/{appKey}/{id} | 更新货币 |
| [**currencyTransactions()**](CurrencyApi.md#currencyTransactions) | **GET** /Currency/{appKey}/Transactions | 货币交易记录 |


## `currencies()`

```php
currencies($app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

货币列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->currencies($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `currency()`

```php
currency($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

货币详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->currency($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currency: ', $e->getMessage(), PHP_EOL;
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

## `currencyDelete()`

```php
currencyDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除货币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->currencyDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyDelete: ', $e->getMessage(), PHP_EOL;
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

## `currencyExchangeRateDelete()`

```php
currencyExchangeRateDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除汇率

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->currencyExchangeRateDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyExchangeRateDelete: ', $e->getMessage(), PHP_EOL;
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

## `currencyExchangeRatePut()`

```php
currencyExchangeRatePut($code, $app_key, $exchange_rate_put_request): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新汇率

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | 
$app_key = 'app_key_example'; // string
$exchange_rate_put_request = new \ZSGF\Client\ZSGF\Client\Model\ExchangeRatePutRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExchangeRatePutRequest | 

try {
    $result = $apiInstance->currencyExchangeRatePut($code, $app_key, $exchange_rate_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyExchangeRatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **app_key** | **string**|  | |
| **exchange_rate_put_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExchangeRatePutRequest**](../Model/ExchangeRatePutRequest.md)|  | [optional] |

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

## `currencyExchangeRates()`

```php
currencyExchangeRates($code, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

汇率列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->currencyExchangeRates($code, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyExchangeRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
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

## `currencyPost()`

```php
currencyPost($app_key, $currency): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

创建货币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$currency = new \ZSGF\Client\ZSGF\Client\Model\Currency(); // \ZSGF\Client\ZSGF\Client\Model\Currency | 

try {
    $result = $apiInstance->currencyPost($app_key, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **currency** | [**\ZSGF\Client\ZSGF\Client\Model\Currency**](../Model/Currency.md)|  | [optional] |

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

## `currencyPut()`

```php
currencyPut($id, $app_key, $currency): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新货币

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$currency = new \ZSGF\Client\ZSGF\Client\Model\Currency(); // \ZSGF\Client\ZSGF\Client\Model\Currency | 

try {
    $result = $apiInstance->currencyPut($id, $app_key, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **currency** | [**\ZSGF\Client\ZSGF\Client\Model\Currency**](../Model/Currency.md)|  | [optional] |

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

## `currencyTransactions()`

```php
currencyTransactions($app_key, $user_id, $trans_type, $cur_code, $start_time, $end_time, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

货币交易记录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$user_id = 56; // int | 用户ID
$trans_type = 'trans_type_example'; // string | 交易类型
$cur_code = 'cur_code_example'; // string | 货币代码
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 开始时间
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 结束时间
$skip = 56; // int | 跳过的条数
$take = 56; // int | 拉取的条数

try {
    $result = $apiInstance->currencyTransactions($app_key, $user_id, $trans_type, $cur_code, $start_time, $end_time, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **user_id** | **int**| 用户ID | [optional] |
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
