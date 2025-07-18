# ZSGF\Client\AlipayApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alipayCreateOrder()**](AlipayApi.md#alipayCreateOrder) | **POST** /Alipay/{appKey}/CreateOrder | 创建当面付订单 |
| [**alipayCreateOrderPagePay()**](AlipayApi.md#alipayCreateOrderPagePay) | **POST** /Alipay/{appKey}/CreateOrderPagePay | 创建PC支付订单 |
| [**alipayCreateOrderWapPay()**](AlipayApi.md#alipayCreateOrderWapPay) | **POST** /Alipay/{appKey}/CreateOrderWapPay | 创建WAP支付订单 |
| [**alipayOrderDetail()**](AlipayApi.md#alipayOrderDetail) | **GET** /Alipay/{appKey}/OrderDetail | 获取订单详情 |
| [**alipayOrderRefund()**](AlipayApi.md#alipayOrderRefund) | **POST** /Alipay/{appKey}/OrderRefund | 发起订单退款 |
| [**alipayReturnPageNotify()**](AlipayApi.md#alipayReturnPageNotify) | **POST** /Alipay/{appKey}/ReturnPageNotify | 支付成功回调通知 |


## `alipayCreateOrder()`

```php
alipayCreateOrder($app_key, $alipay_create_order_request): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

创建当面付订单

创建一个当面付订单，并返回支付二维码。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$alipay_create_order_request = new \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderRequest(); // \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderRequest

try {
    $result = $apiInstance->alipayCreateOrder($app_key, $alipay_create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayCreateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **alipay_create_order_request** | [**\ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderRequest**](../Model/AlipayCreateOrderRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alipayCreateOrderPagePay()`

```php
alipayCreateOrderPagePay($app_key, $alipay_create_order_page_pay_request): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

创建PC支付订单

创建一个PC支付订单，并返回支付页面。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$alipay_create_order_page_pay_request = new \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderPagePayRequest(); // \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderPagePayRequest

try {
    $result = $apiInstance->alipayCreateOrderPagePay($app_key, $alipay_create_order_page_pay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayCreateOrderPagePay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **alipay_create_order_page_pay_request** | [**\ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderPagePayRequest**](../Model/AlipayCreateOrderPagePayRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alipayCreateOrderWapPay()`

```php
alipayCreateOrderWapPay($app_key, $alipay_create_order_wap_pay_request): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

创建WAP支付订单

创建一个WAP支付订单，并返回支付页面。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$alipay_create_order_wap_pay_request = new \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderWapPayRequest(); // \ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderWapPayRequest

try {
    $result = $apiInstance->alipayCreateOrderWapPay($app_key, $alipay_create_order_wap_pay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayCreateOrderWapPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **alipay_create_order_wap_pay_request** | [**\ZSGF\Client\ZSGF\Client\Model\AlipayCreateOrderWapPayRequest**](../Model/AlipayCreateOrderWapPayRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alipayOrderDetail()`

```php
alipayOrderDetail($app_key, $order_no): \ZSGF\Client\ZSGF\Client\Model\AlipayTradeQueryResponseApiResponse
```

获取订单详情

查询订单详情，包括订单状态和支付信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$order_no = 'order_no_example'; // string | 订单号

try {
    $result = $apiInstance->alipayOrderDetail($app_key, $order_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayOrderDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **order_no** | **string**| 订单号 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AlipayTradeQueryResponseApiResponse**](../Model/AlipayTradeQueryResponseApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alipayOrderRefund()`

```php
alipayOrderRefund($app_key, $amount, $order_no): \ZSGF\Client\ZSGF\Client\Model\AlipayTradeRefundResponseApiResponse
```

发起订单退款

对指定订单进行退款操作。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$amount = 'amount_example'; // string | 退款金额
$order_no = 'order_no_example'; // string | 订单号

try {
    $result = $apiInstance->alipayOrderRefund($app_key, $amount, $order_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayOrderRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **amount** | **string**| 退款金额 | [optional] |
| **order_no** | **string**| 订单号 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AlipayTradeRefundResponseApiResponse**](../Model/AlipayTradeRefundResponseApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alipayReturnPageNotify()`

```php
alipayReturnPageNotify($app_key, $return_page_notify_request): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

支付成功回调通知

处理支付宝支付成功的同步通知。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AlipayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$return_page_notify_request = new \ZSGF\Client\ZSGF\Client\Model\ReturnPageNotifyRequest(); // \ZSGF\Client\ZSGF\Client\Model\ReturnPageNotifyRequest

try {
    $result = $apiInstance->alipayReturnPageNotify($app_key, $return_page_notify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayApi->alipayReturnPageNotify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **return_page_notify_request** | [**\ZSGF\Client\ZSGF\Client\Model\ReturnPageNotifyRequest**](../Model/ReturnPageNotifyRequest.md)|  | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
