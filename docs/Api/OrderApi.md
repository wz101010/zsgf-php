# ZSGF\Client\OrderApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**order()**](OrderApi.md#order) | **GET** /Order/{appKey}/{id} | 获取订单详情 |
| [**orderCreate()**](OrderApi.md#orderCreate) | **POST** /Order/{appKey}/Create | 创建订单 |
| [**orders()**](OrderApi.md#orders) | **GET** /Order/{appKey} | 获取订单列表 |


## `order()`

```php
order($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\OrderApiResponse
```

获取订单详情

根据订单ID获取订单详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 订单ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->order($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->order: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 订单ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\OrderApiResponse**](../Model/OrderApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCreate()`

```php
orderCreate($app_key, $create_order_request): \ZSGF\Client\ZSGF\Client\Model\CreateOrderResultApiResponse
```

创建订单

根据请求参数创建订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$create_order_request = new \ZSGF\Client\ZSGF\Client\Model\CreateOrderRequest(); // \ZSGF\Client\ZSGF\Client\Model\CreateOrderRequest | 订单创建请求

try {
    $result = $apiInstance->orderCreate($app_key, $create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **create_order_request** | [**\ZSGF\Client\ZSGF\Client\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)| 订单创建请求 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\CreateOrderResultApiResponse**](../Model/CreateOrderResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orders()`

```php
orders($app_key, $status, $order_no, $trade_no, $user_id, $pct_type, $pct_id, $pct_name, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\OrderListResultApiResponse
```

获取订单列表

根据查询条件获取订单列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$status = 'status_example'; // string | 订单状态
$order_no = 'order_no_example'; // string | 系统订单号
$trade_no = 'trade_no_example'; // string | 支付平台单号
$user_id = 56; // int | 用户ID
$pct_type = 'pct_type_example'; // string | 商品类型
$pct_id = 'pct_id_example'; // string | 商品ID
$pct_name = 'pct_name_example'; // string | 商品名称
$skip = 56; // int | 跳过的条数
$take = 56; // int | 拉取的条数

try {
    $result = $apiInstance->orders($app_key, $status, $order_no, $trade_no, $user_id, $pct_type, $pct_id, $pct_name, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **status** | **string**| 订单状态 | [optional] |
| **order_no** | **string**| 系统订单号 | [optional] |
| **trade_no** | **string**| 支付平台单号 | [optional] |
| **user_id** | **int**| 用户ID | [optional] |
| **pct_type** | **string**| 商品类型 | [optional] |
| **pct_id** | **string**| 商品ID | [optional] |
| **pct_name** | **string**| 商品名称 | [optional] |
| **skip** | **int**| 跳过的条数 | [optional] |
| **take** | **int**| 拉取的条数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\OrderListResultApiResponse**](../Model/OrderListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
