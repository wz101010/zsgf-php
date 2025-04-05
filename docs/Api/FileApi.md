# ZSGF\Client\FileApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fileCreateFolder()**](FileApi.md#fileCreateFolder) | **POST** /File/{appKey}/CreateFolder | 创建文件夹 |
| [**fileDelete()**](FileApi.md#fileDelete) | **DELETE** /File/{appKey} | 删除文件或文件夹 |
| [**fileRename()**](FileApi.md#fileRename) | **POST** /File/{appKey}/Rename | 重命名文件或文件夹 |
| [**fileUpload()**](FileApi.md#fileUpload) | **POST** /File/{appKey}/Upload | 上传文件 |
| [**files()**](FileApi.md#files) | **GET** /File/{appKey} | 获取文件列表 |


## `fileCreateFolder()`

```php
fileCreateFolder($app_key, $path): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

创建文件夹

在指定路径创建文件夹

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$path = 'path_example'; // string | 文件夹路径

try {
    $result = $apiInstance->fileCreateFolder($app_key, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **path** | **string**| 文件夹路径 | [optional] |

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

## `fileDelete()`

```php
fileDelete($app_key, $path): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除文件或文件夹

根据指定路径删除文件或文件夹

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$path = 'path_example'; // string | 文件或文件夹路径

try {
    $result = $apiInstance->fileDelete($app_key, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **path** | **string**| 文件或文件夹路径 | [optional] |

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

## `fileRename()`

```php
fileRename($app_key, $source_name, $dest_name): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

重命名文件或文件夹

将指定的文件或文件夹重命名

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$source_name = 'source_name_example'; // string | 原文件或文件夹名称
$dest_name = 'dest_name_example'; // string | 新文件或文件夹名称

try {
    $result = $apiInstance->fileRename($app_key, $source_name, $dest_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **source_name** | **string**| 原文件或文件夹名称 | [optional] |
| **dest_name** | **string**| 新文件或文件夹名称 | [optional] |

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

## `fileUpload()`

```php
fileUpload($app_key, $path, $file): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

上传文件

将文件上传到指定路径

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$path = 'path_example'; // string | 文件夹路径
$file = '/path/to/file.txt'; // \SplFileObject | 上传的文件

try {
    $result = $apiInstance->fileUpload($app_key, $path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **path** | **string**| 文件夹路径 | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| 上传的文件 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `files()`

```php
files($app_key, $path, $skip, $take): \ZSGF\Client\ZSGF\Client\Model\FileListResultApiResponse
```

获取文件列表

根据指定路径获取文件和文件夹列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string
$path = 'path_example'; // string | 文件路径
$skip = 0; // int | 跳过的记录数
$take = 100; // int | 获取的记录数

try {
    $result = $apiInstance->files($app_key, $path, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->files: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |
| **path** | **string**| 文件路径 | [optional] |
| **skip** | **int**| 跳过的记录数 | [optional] [default to 0] |
| **take** | **int**| 获取的记录数 | [optional] [default to 100] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\FileListResultApiResponse**](../Model/FileListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
