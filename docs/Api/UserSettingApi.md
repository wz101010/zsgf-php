# ZSGF\Client\UserSettingApi

All URIs are relative to https://api-staging.paomo.fun, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userSetting()**](UserSettingApi.md#userSetting) | **GET** /UserSetting/{appKey}/{id} | 用户配置项详情 |
| [**userSettingDelete()**](UserSettingApi.md#userSettingDelete) | **DELETE** /UserSetting/{appKey}/{id} | 删除用户配置项 |
| [**userSettingPost()**](UserSettingApi.md#userSettingPost) | **POST** /UserSetting/{appKey} | 添加用户配置项 |
| [**userSettingPut()**](UserSettingApi.md#userSettingPut) | **PUT** /UserSetting/{appKey}/{id} | 更新用户配置项 |
| [**userSettings()**](UserSettingApi.md#userSettings) | **GET** /UserSetting/{appKey} | 用户配置列表 |


## `userSetting()`

```php
userSetting($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

用户配置项详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userSetting($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingApi->userSetting: ', $e->getMessage(), PHP_EOL;
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

## `userSettingDelete()`

```php
userSettingDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除用户配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userSettingDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingApi->userSettingDelete: ', $e->getMessage(), PHP_EOL;
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

## `userSettingPost()`

```php
userSettingPost($app_key, $user_setting): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

添加用户配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$user_setting = new \ZSGF\Client\ZSGF\Client\Model\UserSetting(); // \ZSGF\Client\ZSGF\Client\Model\UserSetting | 

try {
    $result = $apiInstance->userSettingPost($app_key, $user_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingApi->userSettingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **user_setting** | [**\ZSGF\Client\ZSGF\Client\Model\UserSetting**](../Model/UserSetting.md)|  | [optional] |

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

## `userSettingPut()`

```php
userSettingPut($id, $app_key, $user_setting): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新用户配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$user_setting = new \ZSGF\Client\ZSGF\Client\Model\UserSetting(); // \ZSGF\Client\ZSGF\Client\Model\UserSetting | 

try {
    $result = $apiInstance->userSettingPut($id, $app_key, $user_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingApi->userSettingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **user_setting** | [**\ZSGF\Client\ZSGF\Client\Model\UserSetting**](../Model/UserSetting.md)|  | [optional] |

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

## `userSettings()`

```php
userSettings($app_key, $user_id, $code, $tag): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

用户配置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$user_id = 56; // int | 
$code = 'code_example'; // string | 
$tag = 'tag_example'; // string | 

try {
    $result = $apiInstance->userSettings($app_key, $user_id, $code, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingApi->userSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **user_id** | **int**|  | [optional] |
| **code** | **string**|  | [optional] |
| **tag** | **string**|  | [optional] |

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
