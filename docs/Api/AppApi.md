# ZSGF\Client\AppApi

All URIs are relative to https://api-staging.paomo.fun, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**app()**](AppApi.md#app) | **GET** /App/{appKey} | 应用详情 |
| [**app2FA()**](AppApi.md#app2FA) | **GET** /App/{appKey}/2FA | 双因素验证 获取 |
| [**app2FACheck()**](AppApi.md#app2FACheck) | **GET** /App/{appKey}/2FACheck | 双因素验证 验证 |
| [**appCheckVersion()**](AppApi.md#appCheckVersion) | **GET** /App/{appKey}/CheckVersion | 更新应用数据库 |
| [**appDelete()**](AppApi.md#appDelete) | **DELETE** /App/{appKey} | 删除应用 |
| [**appInfo()**](AppApi.md#appInfo) | **GET** /App/{appKey}/Info | 应用详情 |
| [**appPost()**](AppApi.md#appPost) | **POST** /App | 创建应用 |
| [**appPut()**](AppApi.md#appPut) | **PUT** /App/{appKey} | 更新应用 |
| [**appTransfer()**](AppApi.md#appTransfer) | **GET** /App/{appKey}/Transfer | 转移应用 |
| [**apps()**](AppApi.md#apps) | **GET** /App | 应用列表 |


## `app()`

```php
app($app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

应用详情

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

try {
    $result = $apiInstance->app($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->app: ', $e->getMessage(), PHP_EOL;
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

## `app2FA()`

```php
app2FA($app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

双因素验证 获取

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

try {
    $result = $apiInstance->app2FA($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->app2FA: ', $e->getMessage(), PHP_EOL;
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

## `app2FACheck()`

```php
app2FACheck($app_key, $code): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

双因素验证 验证

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
$code = 'code_example'; // string

try {
    $result = $apiInstance->app2FACheck($app_key, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->app2FACheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **code** | **string**|  | [optional] |

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

## `appCheckVersion()`

```php
appCheckVersion($app_key, $check_only): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新应用数据库

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
$check_only = true; // bool | 

try {
    $result = $apiInstance->appCheckVersion($app_key, $check_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appCheckVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **check_only** | **bool**|  | [optional] [default to true] |

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

## `appDelete()`

```php
appDelete($app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除应用

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

try {
    $result = $apiInstance->appDelete($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appDelete: ', $e->getMessage(), PHP_EOL;
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

## `appInfo()`

```php
appInfo($app_key, $prop_code): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

应用详情

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
$prop_code = 'prop_code_example'; // string

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
| **prop_code** | **string**|  | [optional] |

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

## `appPost()`

```php
appPost($app): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

创建应用

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
$app = new \ZSGF\Client\ZSGF\Client\Model\App(); // \ZSGF\Client\ZSGF\Client\Model\App | 

try {
    $result = $apiInstance->appPost($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app** | [**\ZSGF\Client\ZSGF\Client\Model\App**](../Model/App.md)|  | [optional] |

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

## `appPut()`

```php
appPut($app_key, $app): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新应用

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
$app = new \ZSGF\Client\ZSGF\Client\Model\App(); // \ZSGF\Client\ZSGF\Client\Model\App | 

try {
    $result = $apiInstance->appPut($app_key, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **app** | [**\ZSGF\Client\ZSGF\Client\Model\App**](../Model/App.md)|  | [optional] |

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

## `appTransfer()`

```php
appTransfer($app_key, $project_id): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

转移应用

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
$project_id = 56; // int | 

try {
    $result = $apiInstance->appTransfer($app_key, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->appTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **project_id** | **int**|  | [optional] |

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

## `apps()`

```php
apps($project_id, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

应用列表

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
$project_id = 56; // int | 
$skip = 56; // int | 
$take = 56; // int | 

try {
    $result = $apiInstance->apps($project_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->apps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **take** | **int**|  | [optional] |

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
