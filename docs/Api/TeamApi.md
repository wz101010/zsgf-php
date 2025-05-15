# ZSGF\Client\TeamApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**teamDelete()**](TeamApi.md#teamDelete) | **DELETE** /Team/{id} | 删除团队 |
| [**teamPost()**](TeamApi.md#teamPost) | **POST** /Team | 创建团队 |
| [**teamPut()**](TeamApi.md#teamPut) | **PUT** /Team/{id} | 更新团队信息 |
| [**teams()**](TeamApi.md#teams) | **GET** /Team | 获取团队列表 |


## `teamDelete()`

```php
teamDelete($id): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除团队

根据团队ID删除团队

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 团队ID

try {
    $result = $apiInstance->teamDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 团队ID | |

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

## `teamPost()`

```php
teamPost($team): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

创建团队

创建一个新的团队

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = new \ZSGF\Client\ZSGF\Client\Model\Team(); // \ZSGF\Client\ZSGF\Client\Model\Team | 团队信息

try {
    $result = $apiInstance->teamPost($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team** | [**\ZSGF\Client\ZSGF\Client\Model\Team**](../Model/Team.md)| 团队信息 | [optional] |

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

## `teamPut()`

```php
teamPut($id, $team): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新团队信息

根据团队ID更新团队信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 团队ID
$team = new \ZSGF\Client\ZSGF\Client\Model\Team(); // \ZSGF\Client\ZSGF\Client\Model\Team | 团队信息

try {
    $result = $apiInstance->teamPut($id, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 团队ID | |
| **team** | [**\ZSGF\Client\ZSGF\Client\Model\Team**](../Model/Team.md)| 团队信息 | [optional] |

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

## `teams()`

```php
teams($channel_code, $channel_app_id): \ZSGF\Client\ZSGF\Client\Model\ListResponseItemListApiResponse
```

获取团队列表

根据渠道代码和渠道应用ID获取团队列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_code = 'channel_code_example'; // string | 渠道代码
$channel_app_id = 'channel_app_id_example'; // string | 渠道应用ID

try {
    $result = $apiInstance->teams($channel_code, $channel_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_code** | **string**| 渠道代码 | [optional] |
| **channel_app_id** | **string**| 渠道应用ID | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ListResponseItemListApiResponse**](../Model/ListResponseItemListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
