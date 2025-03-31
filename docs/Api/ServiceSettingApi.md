# ZSGF\Client\ServiceSettingApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serviceSetting()**](ServiceSettingApi.md#serviceSetting) | **GET** /ServiceSetting/{id} | 获取配置详情 |
| [**serviceSettingDelete()**](ServiceSettingApi.md#serviceSettingDelete) | **DELETE** /ServiceSetting/{id} | 删除配置 |
| [**serviceSettingGroup()**](ServiceSettingApi.md#serviceSettingGroup) | **GET** /ServiceSetting/Groups/{id} | 获取服务分组详情 |
| [**serviceSettingGroupDelete()**](ServiceSettingApi.md#serviceSettingGroupDelete) | **DELETE** /ServiceSetting/Groups/{id} | 删除服务分组 |
| [**serviceSettingGroupPost()**](ServiceSettingApi.md#serviceSettingGroupPost) | **POST** /ServiceSetting/Groups | 添加服务分组 |
| [**serviceSettingGroupPut()**](ServiceSettingApi.md#serviceSettingGroupPut) | **PUT** /ServiceSetting/Groups/{id} | 更新服务分组 |
| [**serviceSettingGroups()**](ServiceSettingApi.md#serviceSettingGroups) | **GET** /ServiceSetting/Groups | 获取服务分组列表 |
| [**serviceSettingItem()**](ServiceSettingApi.md#serviceSettingItem) | **GET** /ServiceSetting/Items/{id} | 服务配置详情 |
| [**serviceSettingItemDelete()**](ServiceSettingApi.md#serviceSettingItemDelete) | **DELETE** /ServiceSetting/Items/{id} | 删除服务配置 |
| [**serviceSettingItemPost()**](ServiceSettingApi.md#serviceSettingItemPost) | **POST** /ServiceSetting/Items | 添加服务配置 |
| [**serviceSettingItemPut()**](ServiceSettingApi.md#serviceSettingItemPut) | **PUT** /ServiceSetting/Items/{id} | 更新服务配置 |
| [**serviceSettingItems()**](ServiceSettingApi.md#serviceSettingItems) | **GET** /ServiceSetting/Items | 服务配置列表 |
| [**serviceSettingPost()**](ServiceSettingApi.md#serviceSettingPost) | **POST** /ServiceSetting | 增加配置 |
| [**serviceSettingProvider()**](ServiceSettingApi.md#serviceSettingProvider) | **GET** /ServiceSetting/Providers/{id} | 获取服务商详情 |
| [**serviceSettingProviderDelete()**](ServiceSettingApi.md#serviceSettingProviderDelete) | **DELETE** /ServiceSetting/Providers/{id} | 删除服务商 |
| [**serviceSettingProviderPost()**](ServiceSettingApi.md#serviceSettingProviderPost) | **POST** /ServiceSetting/Providers | 添加服务商 |
| [**serviceSettingProviderPut()**](ServiceSettingApi.md#serviceSettingProviderPut) | **PUT** /ServiceSetting/Providers/{id} | 更新服务商 |
| [**serviceSettingProviders()**](ServiceSettingApi.md#serviceSettingProviders) | **GET** /ServiceSetting/Providers | 获取服务商列表 |
| [**serviceSettingPut()**](ServiceSettingApi.md#serviceSettingPut) | **PUT** /ServiceSetting/{id} | 更新配置 |
| [**serviceSettings()**](ServiceSettingApi.md#serviceSettings) | **GET** /ServiceSetting | 获取配置列表 |


## `serviceSetting()`

```php
serviceSetting($id): \ZSGF\Client\ZSGF\Client\Model\SettingsApiResponse
```

获取配置详情

根据配置ID获取配置详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 配置ID

try {
    $result = $apiInstance->serviceSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 配置ID | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\SettingsApiResponse**](../Model/SettingsApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingDelete()`

```php
serviceSettingDelete($id): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除配置

根据配置ID删除配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 配置ID

try {
    $result = $apiInstance->serviceSettingDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 配置ID | |

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

## `serviceSettingGroup()`

```php
serviceSettingGroup($id): \ZSGF\Client\ZSGF\Client\Model\ServiceGroupApiResponse
```

获取服务分组详情

根据服务分组ID获取服务分组详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务分组ID

try {
    $result = $apiInstance->serviceSettingGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务分组ID | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceGroupApiResponse**](../Model/ServiceGroupApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingGroupDelete()`

```php
serviceSettingGroupDelete($id): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除服务分组

根据服务分组ID删除服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务分组ID

try {
    $result = $apiInstance->serviceSettingGroupDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingGroupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务分组ID | |

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

## `serviceSettingGroupPost()`

```php
serviceSettingGroupPost($service_group): \ZSGF\Client\ZSGF\Client\Model\ServiceSettingGroupPostResultApiResponse
```

添加服务分组

添加新的服务分组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_group = new \ZSGF\Client\ZSGF\Client\Model\ServiceGroup(); // \ZSGF\Client\ZSGF\Client\Model\ServiceGroup | 服务分组实体

try {
    $result = $apiInstance->serviceSettingGroupPost($service_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingGroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_group** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)| 服务分组实体 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceSettingGroupPostResultApiResponse**](../Model/ServiceSettingGroupPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingGroupPut()`

```php
serviceSettingGroupPut($id, $service_group): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新服务分组

根据服务分组ID更新服务分组信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务分组ID
$service_group = new \ZSGF\Client\ZSGF\Client\Model\ServiceGroup(); // \ZSGF\Client\ZSGF\Client\Model\ServiceGroup | 服务分组实体

try {
    $result = $apiInstance->serviceSettingGroupPut($id, $service_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingGroupPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务分组ID | |
| **service_group** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)| 服务分组实体 | [optional] |

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

## `serviceSettingGroups()`

```php
serviceSettingGroups($provider_id, $show_flag): \ZSGF\Client\ZSGF\Client\Model\ServiceGroupListApiResponse
```

获取服务分组列表

根据服务商ID和显示标志获取服务分组列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 56; // int | 服务商ID
$show_flag = false; // bool | 是否显示

try {
    $result = $apiInstance->serviceSettingGroups($provider_id, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **int**| 服务商ID | [optional] |
| **show_flag** | **bool**| 是否显示 | [optional] [default to false] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceGroupListApiResponse**](../Model/ServiceGroupListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingItem()`

```php
serviceSettingItem($id): \ZSGF\Client\ZSGF\Client\Model\ServiceItemApiResponse
```

服务配置详情

根据服务配置ID获取服务配置详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务配置ID

try {
    $result = $apiInstance->serviceSettingItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务配置ID | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceItemApiResponse**](../Model/ServiceItemApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingItemDelete()`

```php
serviceSettingItemDelete($id): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除服务配置

根据服务配置ID删除服务配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务配置ID

try {
    $result = $apiInstance->serviceSettingItemDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务配置ID | |

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

## `serviceSettingItemPost()`

```php
serviceSettingItemPost($service_item): \ZSGF\Client\ZSGF\Client\Model\ServiceSettingItemPostResultApiResponse
```

添加服务配置

添加新的服务配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_item = new \ZSGF\Client\ZSGF\Client\Model\ServiceItem(); // \ZSGF\Client\ZSGF\Client\Model\ServiceItem | 服务配置实体

try {
    $result = $apiInstance->serviceSettingItemPost($service_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_item** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceItem**](../Model/ServiceItem.md)| 服务配置实体 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceSettingItemPostResultApiResponse**](../Model/ServiceSettingItemPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingItemPut()`

```php
serviceSettingItemPut($id, $service_item): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新服务配置

根据服务配置ID更新服务配置信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务配置ID
$service_item = new \ZSGF\Client\ZSGF\Client\Model\ServiceItem(); // \ZSGF\Client\ZSGF\Client\Model\ServiceItem | 服务配置实体

try {
    $result = $apiInstance->serviceSettingItemPut($id, $service_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingItemPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务配置ID | |
| **service_item** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceItem**](../Model/ServiceItem.md)| 服务配置实体 | [optional] |

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

## `serviceSettingItems()`

```php
serviceSettingItems($biz_code, $provider_code, $group_code, $show_flag): \ZSGF\Client\ZSGF\Client\Model\ServiceItemListApiResponse
```

服务配置列表

根据业务代码、服务商代码、分组代码和显示标志获取服务配置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biz_code = 'biz_code_example'; // string | 业务代码
$provider_code = 'provider_code_example'; // string | 服务商代码
$group_code = 'group_code_example'; // string | 分组代码
$show_flag = false; // bool | 是否显示

try {
    $result = $apiInstance->serviceSettingItems($biz_code, $provider_code, $group_code, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **biz_code** | **string**| 业务代码 | [optional] |
| **provider_code** | **string**| 服务商代码 | [optional] |
| **group_code** | **string**| 分组代码 | [optional] |
| **show_flag** | **bool**| 是否显示 | [optional] [default to false] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceItemListApiResponse**](../Model/ServiceItemListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingPost()`

```php
serviceSettingPost($settings): \ZSGF\Client\ZSGF\Client\Model\ServiceSettingSettingPostResultApiResponse
```

增加配置

添加新的配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settings = new \ZSGF\Client\ZSGF\Client\Model\Settings(); // \ZSGF\Client\ZSGF\Client\Model\Settings | 配置实体

try {
    $result = $apiInstance->serviceSettingPost($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings** | [**\ZSGF\Client\ZSGF\Client\Model\Settings**](../Model/Settings.md)| 配置实体 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceSettingSettingPostResultApiResponse**](../Model/ServiceSettingSettingPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingProvider()`

```php
serviceSettingProvider($id): \ZSGF\Client\ZSGF\Client\Model\ServiceProviderApiResponse
```

获取服务商详情

根据服务商ID获取服务商详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务商ID

try {
    $result = $apiInstance->serviceSettingProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务商ID | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceProviderApiResponse**](../Model/ServiceProviderApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingProviderDelete()`

```php
serviceSettingProviderDelete($id): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除服务商

根据服务商ID删除服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务商ID

try {
    $result = $apiInstance->serviceSettingProviderDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingProviderDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务商ID | |

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

## `serviceSettingProviderPost()`

```php
serviceSettingProviderPost($service_provider): \ZSGF\Client\ZSGF\Client\Model\ServiceSettingProviderPostResultApiResponse
```

添加服务商

添加新的服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_provider = new \ZSGF\Client\ZSGF\Client\Model\ServiceProvider(); // \ZSGF\Client\ZSGF\Client\Model\ServiceProvider | 服务商实体

try {
    $result = $apiInstance->serviceSettingProviderPost($service_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingProviderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_provider** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceProvider**](../Model/ServiceProvider.md)| 服务商实体 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceSettingProviderPostResultApiResponse**](../Model/ServiceSettingProviderPostResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingProviderPut()`

```php
serviceSettingProviderPut($id, $service_provider): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新服务商

根据服务商ID更新服务商信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 服务商ID
$service_provider = new \ZSGF\Client\ZSGF\Client\Model\ServiceProvider(); // \ZSGF\Client\ZSGF\Client\Model\ServiceProvider | 服务商实体

try {
    $result = $apiInstance->serviceSettingProviderPut($id, $service_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingProviderPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 服务商ID | |
| **service_provider** | [**\ZSGF\Client\ZSGF\Client\Model\ServiceProvider**](../Model/ServiceProvider.md)| 服务商实体 | [optional] |

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

## `serviceSettingProviders()`

```php
serviceSettingProviders($biz_code, $show_flag): \ZSGF\Client\ZSGF\Client\Model\ServiceProviderListApiResponse
```

获取服务商列表

根据业务代码和显示标志获取服务商列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biz_code = 'biz_code_example'; // string | 业务代码
$show_flag = false; // bool | 是否显示

try {
    $result = $apiInstance->serviceSettingProviders($biz_code, $show_flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **biz_code** | **string**| 业务代码 | [optional] |
| **show_flag** | **bool**| 是否显示 | [optional] [default to false] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ServiceProviderListApiResponse**](../Model/ServiceProviderListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceSettingPut()`

```php
serviceSettingPut($id, $settings): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新配置

根据配置ID更新配置信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 配置ID
$settings = new \ZSGF\Client\ZSGF\Client\Model\Settings(); // \ZSGF\Client\ZSGF\Client\Model\Settings | 配置实体

try {
    $result = $apiInstance->serviceSettingPut($id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| 配置ID | |
| **settings** | [**\ZSGF\Client\ZSGF\Client\Model\Settings**](../Model/Settings.md)| 配置实体 | [optional] |

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

## `serviceSettings()`

```php
serviceSettings($biz_code, $biz_id, $provider_code, $group_code, $tag, $code): \ZSGF\Client\ZSGF\Client\Model\SettingsListApiResponse
```

获取配置列表

根据业务代码、业务标识、服务商代码、分组代码、标签和配置项代码获取配置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\ServiceSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$biz_code = 'biz_code_example'; // string | 业务代码
$biz_id = 'biz_id_example'; // string | 业务标识
$provider_code = 'provider_code_example'; // string | 服务商代码
$group_code = 'group_code_example'; // string | 分组代码
$tag = 'tag_example'; // string | 标签
$code = 'code_example'; // string | 配置项代码

try {
    $result = $apiInstance->serviceSettings($biz_code, $biz_id, $provider_code, $group_code, $tag, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingApi->serviceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **biz_code** | **string**| 业务代码 | |
| **biz_id** | **string**| 业务标识 | |
| **provider_code** | **string**| 服务商代码 | [optional] |
| **group_code** | **string**| 分组代码 | [optional] |
| **tag** | **string**| 标签 | [optional] |
| **code** | **string**| 配置项代码 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\SettingsListApiResponse**](../Model/SettingsListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
