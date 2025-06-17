# ZSGF\Client\AppApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appInfo()**](AppApi.md#appInfo) | **GET** /App/{appKey}/Info | 应用详情 |


## `appInfo()`

```php
appInfo($app_key, $prop_code): \ZSGF\Client\ZSGF\Client\Model\AppInfoResultApiResponse
```

应用详情

根据应用Key获取应用的详细信息和属性。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$prop_code = 'prop_code_example'; // string | 属性代码

try {
    $result = $apiInstance->appInfo($app_key, $prop_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **prop_code** | **string**| 属性代码 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\AppInfoResultApiResponse**](../Model/AppInfoResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
