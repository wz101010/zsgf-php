# ZSGF\Client\TenantFileApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tenantFileCreateFolder()**](TenantFileApi.md#tenantFileCreateFolder) | **POST** /TenantFile/CreateFolder | 创建文件夹 |
| [**tenantFileDelete()**](TenantFileApi.md#tenantFileDelete) | **DELETE** /TenantFile | 删除文件 |
| [**tenantFileRename()**](TenantFileApi.md#tenantFileRename) | **POST** /TenantFile/Rename | 重命名文件 |
| [**tenantFileUpload()**](TenantFileApi.md#tenantFileUpload) | **POST** /TenantFile | 上传文件 |
| [**tenantFiles()**](TenantFileApi.md#tenantFiles) | **GET** /TenantFile | 文件列表 |


## `tenantFileCreateFolder()`

```php
tenantFileCreateFolder($path): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

创建文件夹

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 

try {
    $result = $apiInstance->tenantFileCreateFolder($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantFileApi->tenantFileCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | [optional] |

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

## `tenantFileDelete()`

```php
tenantFileDelete($path): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

删除文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 文件路径

try {
    $result = $apiInstance->tenantFileDelete($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantFileApi->tenantFileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| 文件路径 | [optional] |

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

## `tenantFileRename()`

```php
tenantFileRename($source_name, $dest_name): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

重命名文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_name = 'source_name_example'; // string | 
$dest_name = 'dest_name_example'; // string | 

try {
    $result = $apiInstance->tenantFileRename($source_name, $dest_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantFileApi->tenantFileRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_name** | **string**|  | [optional] |
| **dest_name** | **string**|  | [optional] |

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

## `tenantFileUpload()`

```php
tenantFileUpload($path, $file): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

上传文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 上传的路径
$file = '/path/to/file.txt'; // \SplFileObject | 上传的文件

try {
    $result = $apiInstance->tenantFileUpload($path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantFileApi->tenantFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| 上传的路径 | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| 上传的文件 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\JObjectApiResult**](../Model/JObjectApiResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantFiles()`

```php
tenantFiles($path): \ZSGF\Client\ZSGF\Client\Model\JObjectApiResult
```

文件列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\TenantFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 

try {
    $result = $apiInstance->tenantFiles($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantFileApi->tenantFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | [optional] |

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
