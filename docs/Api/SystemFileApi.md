# ZSGF\Client\SystemFileApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**systemFileCreateFolder()**](SystemFileApi.md#systemFileCreateFolder) | **POST** /SystemFile/CreateFolder | 创建文件夹 |
| [**systemFileDelete()**](SystemFileApi.md#systemFileDelete) | **DELETE** /SystemFile | 删除文件 |
| [**systemFileRename()**](SystemFileApi.md#systemFileRename) | **POST** /SystemFile/Rename | 重命名文件 |
| [**systemFileUpload()**](SystemFileApi.md#systemFileUpload) | **POST** /SystemFile | 上传文件 |
| [**systemFiles()**](SystemFileApi.md#systemFiles) | **GET** /SystemFile | 获取文件列表 |


## `systemFileCreateFolder()`

```php
systemFileCreateFolder($path): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

创建文件夹

根据指定路径创建文件夹

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\SystemFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 文件夹路径

try {
    $result = $apiInstance->systemFileCreateFolder($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemFileApi->systemFileCreateFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `systemFileDelete()`

```php
systemFileDelete($path): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除文件

根据指定路径删除文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\SystemFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 文件路径

try {
    $result = $apiInstance->systemFileDelete($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemFileApi->systemFileDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| 文件路径 | [optional] |

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

## `systemFileRename()`

```php
systemFileRename($source_name, $dest_name): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

重命名文件

根据指定的源文件名和目标文件名重命名文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\SystemFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_name = 'source_name_example'; // string | 源文件名
$dest_name = 'dest_name_example'; // string | 目标文件名

try {
    $result = $apiInstance->systemFileRename($source_name, $dest_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemFileApi->systemFileRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **source_name** | **string**| 源文件名 | [optional] |
| **dest_name** | **string**| 目标文件名 | [optional] |

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

## `systemFileUpload()`

```php
systemFileUpload($path, $file): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

上传文件

根据指定路径上传文件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\SystemFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 上传的路径
$file = '/path/to/file.txt'; // \SplFileObject | 上传的文件

try {
    $result = $apiInstance->systemFileUpload($path, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemFileApi->systemFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| 上传的路径 | [optional] |
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

## `systemFiles()`

```php
systemFiles($path): \ZSGF\Client\ZSGF\Client\Model\SystemFileListResultApiResponse
```

获取文件列表

根据指定路径获取文件列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\SystemFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | 文件路径

try {
    $result = $apiInstance->systemFiles($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemFileApi->systemFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| 文件路径 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\SystemFileListResultApiResponse**](../Model/SystemFileListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
