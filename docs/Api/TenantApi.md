# ZSGF\Client\TenantApi

All URIs are relative to https://api-staging.paomo.fun, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tenant()**](TenantApi.md#tenant) | **GET** /Tenant/{id} | 服务器详情 |
| [**tenantBackup()**](TenantApi.md#tenantBackup) | **POST** /Tenant/Backup | 备份数据库 |
| [**tenantBackupDelete()**](TenantApi.md#tenantBackupDelete) | **DELETE** /Tenant/Backup | 删除备份 |
| [**tenantBackupRemark()**](TenantApi.md#tenantBackupRemark) | **GET** /Tenant/BackupRemark | 标注数据库备份 |
| [**tenantBackupRemarkPut()**](TenantApi.md#tenantBackupRemarkPut) | **PUT** /Tenant/BackupRemarkPut | 更新数据库备份标注 |
| [**tenantBackups()**](TenantApi.md#tenantBackups) | **GET** /Tenant/Backups | 数据库备份列表 |
| [**tenantCheckVersion()**](TenantApi.md#tenantCheckVersion) | **GET** /Tenant/CheckVersion | 升级数据库 |
| [**tenantPut()**](TenantApi.md#tenantPut) | **PUT** /Tenant/{id} | 更新服务器 |
| [**tenantRollback()**](TenantApi.md#tenantRollback) | **POST** /Tenant/Rollback | 回滚数据库 |
| [**tenantSettings()**](TenantApi.md#tenantSettings) | **GET** /Tenant/Settings | 配置列表 |
| [**tenants()**](TenantApi.md#tenants) | **GET** /Tenant | 服务器列表 |


## `tenant()`

```php
tenant($id): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务器详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->tenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `tenantBackup()`

```php
tenantBackup(): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

备份数据库

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantBackup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `tenantBackupDelete()`

```php
tenantBackupDelete($id, $version): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除备份

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$version = 'version_example'; // string | 

try {
    $result = $apiInstance->tenantBackupDelete($id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantBackupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **version** | **string**|  | [optional] |

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

## `tenantBackupRemark()`

```php
tenantBackupRemark($version): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

标注数据库备份

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string | 

try {
    $result = $apiInstance->tenantBackupRemark($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantBackupRemark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**|  | [optional] |

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

## `tenantBackupRemarkPut()`

```php
tenantBackupRemarkPut($version, $request_body): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新数据库备份标注

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string | 
$request_body = array('key' => 'request_body_example'); // array<string,string> | 

try {
    $result = $apiInstance->tenantBackupRemarkPut($version, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantBackupRemarkPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**|  | [optional] |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | [optional] |

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

## `tenantBackups()`

```php
tenantBackups($skip, $take): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

数据库备份列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | 
$take = 10; // int | 

try {
    $result = $apiInstance->tenantBackups($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |

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

## `tenantCheckVersion()`

```php
tenantCheckVersion($check_only): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

升级数据库

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_only = true; // bool | 

try {
    $result = $apiInstance->tenantCheckVersion($check_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantCheckVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `tenantPut()`

```php
tenantPut($id, $tenant): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

更新服务器

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$tenant = new \ZSGF\Client\ZSGF\Client\Model\Tenant(); // \ZSGF\Client\ZSGF\Client\Model\Tenant | 

try {
    $result = $apiInstance->tenantPut($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **tenant** | [**\ZSGF\Client\ZSGF\Client\Model\Tenant**](../Model/Tenant.md)|  | [optional] |

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

## `tenantRollback()`

```php
tenantRollback($id, $version): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

回滚数据库

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$version = 'version_example'; // string | 

try {
    $result = $apiInstance->tenantRollback($id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantRollback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **version** | **string**|  | [optional] |

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

## `tenantSettings()`

```php
tenantSettings(): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

配置列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenantSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `tenants()`

```php
tenants(): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

服务器列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenants();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->tenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
