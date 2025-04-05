# ZSGF\Client\UserSettingApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userSetting()**](UserSettingApi.md#userSetting) | **GET** /UserSetting/{appKey}/{id} | 获取用户配置项详情 |
| [**userSettingDelete()**](UserSettingApi.md#userSettingDelete) | **DELETE** /UserSetting/{appKey}/{id} | 删除用户配置项 |
| [**userSettingPost()**](UserSettingApi.md#userSettingPost) | **POST** /UserSetting/{appKey} | 添加用户配置项 |
| [**userSettingPut()**](UserSettingApi.md#userSettingPut) | **PUT** /UserSetting/{appKey}/{id} | 更新用户配置项 |
| [**userSettings()**](UserSettingApi.md#userSettings) | **GET** /UserSetting/{appKey} | 获取用户配置列表 |


## `userSetting()`

```php
userSetting($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\UserSettingApiResponse
```

获取用户配置项详情

根据配置项ID获取用户配置项详情

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
$id = 56; // int | 配置项ID
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
| **id** | **int**| 配置项ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserSettingApiResponse**](../Model/UserSettingApiResponse.md)

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
userSettingDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除用户配置项

根据配置项ID删除用户配置项

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
$id = 56; // int | 配置项ID
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
| **id** | **int**| 配置项ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

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
userSettingPost($app_key, $user_setting): \ZSGF\Client\ZSGF\Client\Model\UserSettingPostResultApiResponse
```

添加用户配置项

添加新的用户配置项

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
$user_setting = new \ZSGF\Client\ZSGF\Client\Model\UserSetting(); // \ZSGF\Client\ZSGF\Client\Model\UserSetting | 配置项内容

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
| **user_setting** | [**\ZSGF\Client\ZSGF\Client\Model\UserSetting**](../Model/UserSetting.md)| 配置项内容 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserSettingPostResultApiResponse**](../Model/UserSettingPostResultApiResponse.md)

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
userSettingPut($id, $app_key, $user_setting): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新用户配置项

根据配置项ID更新用户配置项内容

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
$id = 56; // int | 配置项ID
$app_key = 'app_key_example'; // string
$user_setting = new \ZSGF\Client\ZSGF\Client\Model\UserSetting(); // \ZSGF\Client\ZSGF\Client\Model\UserSetting | 配置项内容

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
| **id** | **int**| 配置项ID | |
| **app_key** | **string**|  | |
| **user_setting** | [**\ZSGF\Client\ZSGF\Client\Model\UserSetting**](../Model/UserSetting.md)| 配置项内容 | [optional] |

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

## `userSettings()`

```php
userSettings($app_key, $user_id, $code, $tag): \ZSGF\Client\ZSGF\Client\Model\UserSettingListApiResponse
```

获取用户配置列表

根据用户ID、配置项代码和标签获取用户配置列表

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
$user_id = 56; // int | 用户ID
$code = 'code_example'; // string | 配置项代码
$tag = 'tag_example'; // string | 配置项标签

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
| **user_id** | **int**| 用户ID | [optional] |
| **code** | **string**| 配置项代码 | [optional] |
| **tag** | **string**| 配置项标签 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserSettingListApiResponse**](../Model/UserSettingListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
