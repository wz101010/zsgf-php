# ZSGF\Client\UserLocationApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userLocation()**](UserLocationApi.md#userLocation) | **GET** /UserLocation/{appKey}/{id} | 获取位置详情 |
| [**userLocationDelete()**](UserLocationApi.md#userLocationDelete) | **DELETE** /UserLocation/{appKey}/{id} | 删除位置 |
| [**userLocationPost()**](UserLocationApi.md#userLocationPost) | **POST** /UserLocation/{appKey} | 添加位置 |
| [**userLocationPut()**](UserLocationApi.md#userLocationPut) | **PUT** /UserLocation/{appKey}/{id} | 更新位置 |
| [**userLocations()**](UserLocationApi.md#userLocations) | **GET** /UserLocation/{appKey} | 获取位置列表 |


## `userLocation()`

```php
userLocation($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\GeoLocationModelApiResponse
```

获取位置详情

根据位置ID获取位置详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userLocation($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLocationApi->userLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModelApiResponse**](../Model/GeoLocationModelApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLocationDelete()`

```php
userLocationDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除位置

根据位置ID删除位置信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->userLocationDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLocationApi->userLocationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
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

## `userLocationPost()`

```php
userLocationPost($app_key, $geo_location_model): \ZSGF\Client\ZSGF\Client\Model\UserLocationPostResultApiResponse
```

添加位置

添加新的位置信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$geo_location_model = new \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel(); // \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel | 位置信息

try {
    $result = $apiInstance->userLocationPost($app_key, $geo_location_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLocationApi->userLocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **geo_location_model** | [**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModel**](../Model/GeoLocationModel.md)| 位置信息 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserLocationPostResultApiResponse**](../Model/UserLocationPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userLocationPut()`

```php
userLocationPut($id, $app_key, $geo_location_model): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新位置

此方法用于更新指定位置ID的位置信息。如果位置不存在，则创建一个新的位置。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 位置ID
$app_key = 'app_key_example'; // string
$geo_location_model = new \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel(); // \ZSGF\Client\ZSGF\Client\Model\GeoLocationModel | 位置信息

try {
    $result = $apiInstance->userLocationPut($id, $app_key, $geo_location_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLocationApi->userLocationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 位置ID | |
| **app_key** | **string**|  | |
| **geo_location_model** | [**\ZSGF\Client\ZSGF\Client\Model\GeoLocationModel**](../Model/GeoLocationModel.md)| 位置信息 | [optional] |

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

## `userLocations()`

```php
userLocations($app_key, $tag, $type, $x, $y, $sphere, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\UserLocationsResultApiResponse
```

获取位置列表

根据条件获取位置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\UserLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$tag = 'tag_example'; // string | 标签
$type = 'type_example'; // string | 分类
$x = 3.4; // float | 纬度
$y = 3.4; // float | 经度
$sphere = 56; // int | 附近距离，单位：米
$skip = 56; // int | 跳过的记录数
$take = 10; // int | 获取的记录数

try {
    $result = $apiInstance->userLocations($app_key, $tag, $type, $x, $y, $sphere, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLocationApi->userLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **tag** | **string**| 标签 | [optional] |
| **type** | **string**| 分类 | [optional] |
| **x** | **float**| 纬度 | [optional] |
| **y** | **float**| 经度 | [optional] |
| **sphere** | **int**| 附近距离，单位：米 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] |
| **take** | **int**| 获取的记录数 | [optional] [default to 10] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\UserLocationsResultApiResponse**](../Model/UserLocationsResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
