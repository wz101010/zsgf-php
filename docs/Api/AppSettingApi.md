# ZSGF\Client\AppSettingApi

All URIs are relative to https://api-staging.paomo.fun, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appServiceSettingGroup()**](AppSettingApi.md#appServiceSettingGroup) | **GET** /AppSetting/{appKey}/Groups/{id} | 服务分组详情 |
| [**appServiceSettingGroupDelete()**](AppSettingApi.md#appServiceSettingGroupDelete) | **DELETE** /AppSetting/{appKey}/Groups/{id} | 删除服务分组 |
| [**appServiceSettingGroupPost()**](AppSettingApi.md#appServiceSettingGroupPost) | **POST** /AppSetting/{appKey}/Groups | 添加服务分组 |
| [**appServiceSettingGroupPut()**](AppSettingApi.md#appServiceSettingGroupPut) | **PUT** /AppSetting/{appKey}/Groups/{id} | 更新服务分组 |
| [**appServiceSettingGroups()**](AppSettingApi.md#appServiceSettingGroups) | **GET** /AppSetting/{appKey}/Groups | 服务分组 |
| [**appServiceSettingItem()**](AppSettingApi.md#appServiceSettingItem) | **GET** /AppSetting/{appKey}/Items/{id} | 服务配置项详情 |
| [**appServiceSettingItemDelete()**](AppSettingApi.md#appServiceSettingItemDelete) | **DELETE** /AppSetting/{appKey}/Items/{id} | 删除服务配置项 |
| [**appServiceSettingItemPost()**](AppSettingApi.md#appServiceSettingItemPost) | **POST** /AppSetting/{appKey}/Items | 添加服务配置项 |
| [**appServiceSettingItemPut()**](AppSettingApi.md#appServiceSettingItemPut) | **PUT** /AppSetting/{appKey}/Items/{id} | 更新服务配置项 |
| [**appServiceSettingItems()**](AppSettingApi.md#appServiceSettingItems) | **GET** /AppSetting/{appKey}/Items | 服务配置项列表 |
| [**appServiceSettingProvider()**](AppSettingApi.md#appServiceSettingProvider) | **GET** /AppSetting/{appKey}/Providers/{id} | 服务商详情 |
| [**appServiceSettingProviderDelete()**](AppSettingApi.md#appServiceSettingProviderDelete) | **DELETE** /AppSetting/{appKey}/Providers/{id} | 删除服务商 |
| [**appServiceSettingProviderPost()**](AppSettingApi.md#appServiceSettingProviderPost) | **POST** /AppSetting/{appKey}/Providers | 添加服务商 |
| [**appServiceSettingProviderPut()**](AppSettingApi.md#appServiceSettingProviderPut) | **PUT** /AppSetting/{appKey}/Providers/{id} | 更新服务商 |
| [**appServiceSettingProviders()**](AppSettingApi.md#appServiceSettingProviders) | **GET** /AppSetting/{appKey}/Providers | 服务商列表 |
| [**appSetting()**](AppSettingApi.md#appSetting) | **GET** /AppSetting/{appKey}/{id} | 配置详情 |
| [**appSettingDelete()**](AppSettingApi.md#appSettingDelete) | **DELETE** /AppSetting/{appKey}/{id} | 删除配置 |
| [**appSettingPost()**](AppSettingApi.md#appSettingPost) | **POST** /AppSetting/{appKey} | 增加配置 |
| [**appSettingPut()**](AppSettingApi.md#appSettingPut) | **PUT** /AppSetting/{appKey}/{id} | 更新配置 |
| [**appSettings()**](AppSettingApi.md#appSettings) | **GET** /AppSetting/{appKey} | 配置列表 |


## `appServiceSettingGroup()`

```php
appServiceSettingGroup($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务分组详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingGroup($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingGroup: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingGroupDelete()`

```php
appServiceSettingGroupDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingGroupDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingGroupDelete: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingGroupPost()`

```php
appServiceSettingGroupPost($app_key, $service_group): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

添加服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$service_group = new \ZSGF\Client\ZSGF\Client\Model\ServiceGroup(); // \ZSGF\Client\ZSGF\Client\Model\ServiceGroup | 

try {
    $result = $apiInstance->appServiceSettingGroupPost($app_key, $service_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingGroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **service_group** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)|  | [optional] |

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

## `appServiceSettingGroupPut()`

```php
appServiceSettingGroupPut($id, $app_key, $service_group): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$service_group = new \ZSGF\Client\ZSGF\Client\Model\ServiceGroup(); // \ZSGF\Client\ZSGF\Client\Model\ServiceGroup | 

try {
    $result = $apiInstance->appServiceSettingGroupPut($id, $app_key, $service_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingGroupPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **service_group** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)|  | [optional] |

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

## `appServiceSettingGroups()`

```php
appServiceSettingGroups($app_key, $provider_id, $show_flag): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$provider_id = 56; // int | 
$show_flag = false; // bool | 

try {
    $result = $apiInstance->appServiceSettingGroups($app_key, $provider_id, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **provider_id** | **int**|  | [optional] |
| **show_flag** | **bool**|  | [optional] [default to false] |

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

## `appServiceSettingItem()`

```php
appServiceSettingItem($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务配置项详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingItem($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingItem: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingItemDelete()`

```php
appServiceSettingItemDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除服务配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingItemDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingItemDelete: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingItemPost()`

```php
appServiceSettingItemPost($app_key, $service_item): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

添加服务配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$service_item = new \ZSGF\Client\ZSGF\Client\Model\ServiceItem(); // \ZSGF\Client\ZSGF\Client\Model\ServiceItem | 

try {
    $result = $apiInstance->appServiceSettingItemPost($app_key, $service_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **service_item** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceItem**](../Model/ServiceItem.md)|  | [optional] |

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

## `appServiceSettingItemPut()`

```php
appServiceSettingItemPut($id, $app_key, $service_item): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新服务配置项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$service_item = new \ZSGF\Client\ZSGF\Client\Model\ServiceItem(); // \ZSGF\Client\ZSGF\Client\Model\ServiceItem | 

try {
    $result = $apiInstance->appServiceSettingItemPut($id, $app_key, $service_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingItemPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **service_item** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceItem**](../Model/ServiceItem.md)|  | [optional] |

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

## `appServiceSettingItems()`

```php
appServiceSettingItems($app_key, $biz_code, $provider_code, $group_code, $show_flag): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务配置项列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$biz_code = 'biz_code_example'; // string | 
$provider_code = 'provider_code_example'; // string | 
$group_code = 'group_code_example'; // string | 
$show_flag = false; // bool | 

try {
    $result = $apiInstance->appServiceSettingItems($app_key, $biz_code, $provider_code, $group_code, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **biz_code** | **string**|  | [optional] |
| **provider_code** | **string**|  | [optional] |
| **group_code** | **string**|  | [optional] |
| **show_flag** | **bool**|  | [optional] [default to false] |

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

## `appServiceSettingProvider()`

```php
appServiceSettingProvider($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务商详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingProvider($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingProvider: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingProviderDelete()`

```php
appServiceSettingProviderDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appServiceSettingProviderDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingProviderDelete: ', $e->getMessage(), PHP_EOL;
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

## `appServiceSettingProviderPost()`

```php
appServiceSettingProviderPost($app_key, $service_provider): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

添加服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$service_provider = new \ZSGF\Client\ZSGF\Client\Model\ServiceProvider(); // \ZSGF\Client\ZSGF\Client\Model\ServiceProvider | 

try {
    $result = $apiInstance->appServiceSettingProviderPost($app_key, $service_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingProviderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **service_provider** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceProvider**](../Model/ServiceProvider.md)|  | [optional] |

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

## `appServiceSettingProviderPut()`

```php
appServiceSettingProviderPut($id, $app_key, $service_provider): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$service_provider = new \ZSGF\Client\ZSGF\Client\Model\ServiceProvider(); // \ZSGF\Client\ZSGF\Client\Model\ServiceProvider | 

try {
    $result = $apiInstance->appServiceSettingProviderPut($id, $app_key, $service_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingProviderPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **service_provider** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceProvider**](../Model/ServiceProvider.md)|  | [optional] |

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

## `appServiceSettingProviders()`

```php
appServiceSettingProviders($app_key, $biz_code, $show_flag): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务商列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$biz_code = 'biz_code_example'; // string | 
$show_flag = false; // bool | 

try {
    $result = $apiInstance->appServiceSettingProviders($app_key, $biz_code, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appServiceSettingProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **biz_code** | **string**|  | [optional] |
| **show_flag** | **bool**|  | [optional] [default to false] |

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

## `appSetting()`

```php
appSetting($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

配置详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appSetting($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appSetting: ', $e->getMessage(), PHP_EOL;
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

## `appSettingDelete()`

```php
appSettingDelete($id, $app_key): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->appSettingDelete($id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appSettingDelete: ', $e->getMessage(), PHP_EOL;
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

## `appSettingPost()`

```php
appSettingPost($app_key, $app_setting): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

增加配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$app_setting = new \ZSGF\Client\ZSGF\Client\Model\AppSetting(); // \ZSGF\Client\ZSGF\Client\Model\AppSetting | 

try {
    $result = $apiInstance->appSettingPost($app_key, $app_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appSettingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **app_setting** | [**\ZSGF\Client\ZSGF\Client\Model\AppSetting**](../Model/AppSetting.md)|  | [optional] |

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

## `appSettingPut()`

```php
appSettingPut($id, $app_key, $app_setting): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_key = 'app_key_example'; // string
$app_setting = new \ZSGF\Client\ZSGF\Client\Model\AppSetting(); // \ZSGF\Client\ZSGF\Client\Model\AppSetting | 

try {
    $result = $apiInstance->appSettingPut($id, $app_key, $app_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appSettingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **app_key** | **string**|  | |
| **app_setting** | [**\ZSGF\Client\ZSGF\Client\Model\AppSetting**](../Model/AppSetting.md)|  | [optional] |

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

## `appSettings()`

```php
appSettings($app_key, $provider_code, $group_code, $tag, $code): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

配置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\AppSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$provider_code = 'provider_code_example'; // string | 服务商代码
$group_code = 'group_code_example'; // string | 服务代码
$tag = 'tag_example'; // string | 标签
$code = 'code_example'; // string | 配置项代码

try {
    $result = $apiInstance->appSettings($app_key, $provider_code, $group_code, $tag, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingApi->appSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **provider_code** | **string**| 服务商代码 | [optional] |
| **group_code** | **string**| 服务代码 | [optional] |
| **tag** | **string**| 标签 | [optional] |
| **code** | **string**| 配置项代码 | [optional] |

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
