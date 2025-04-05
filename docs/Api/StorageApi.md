# ZSGF\Client\StorageApi

All URIs are relative to https://api.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storageAggregate()**](StorageApi.md#storageAggregate) | **GET** /Storage/{appKey}/{table}/Aggregate | 聚合查询 |
| [**storageClear()**](StorageApi.md#storageClear) | **DELETE** /Storage/{appKey}/{table}/Clear | 清空表数据 |
| [**storageDelete()**](StorageApi.md#storageDelete) | **DELETE** /Storage/{appKey}/{table}/{id} | 删除数据 |
| [**storageDeleteIndex()**](StorageApi.md#storageDeleteIndex) | **DELETE** /Storage/{appKey}/{table}/indexes | 删除索引 |
| [**storageDetail()**](StorageApi.md#storageDetail) | **GET** /Storage/{appKey}/{table}/{id} | 数据详情 |
| [**storageExecuteFunction()**](StorageApi.md#storageExecuteFunction) | **GET** /Storage/{appKey}/ExecuteFunction | 执行函数 |
| [**storageExport()**](StorageApi.md#storageExport) | **GET** /Storage/{appKey}/{table}/Export | 导出数据 |
| [**storageImport()**](StorageApi.md#storageImport) | **POST** /Storage/{appKey}/{table}/Import | 导入数据 |
| [**storageIndexes()**](StorageApi.md#storageIndexes) | **GET** /Storage/{appKey}/{table}/Indexes | 获取索引 |
| [**storageList()**](StorageApi.md#storageList) | **GET** /Storage/{appKey}/{table} | 查询数据 |
| [**storagePost()**](StorageApi.md#storagePost) | **POST** /Storage/{appKey}/{table} | 添加数据 |
| [**storagePostIndex()**](StorageApi.md#storagePostIndex) | **POST** /Storage/{appKey}/{table}/indexes | 添加索引 |
| [**storagePut()**](StorageApi.md#storagePut) | **PUT** /Storage/{appKey}/{table}/{id} | 更新数据 |
| [**storageRemove()**](StorageApi.md#storageRemove) | **DELETE** /Storage/{appKey}/{table}/Remove | 删除表 |
| [**storageStats()**](StorageApi.md#storageStats) | **GET** /Storage/{appKey}/{table}/Stats | 数据表统计 |
| [**storageTables()**](StorageApi.md#storageTables) | **GET** /Storage/{appKey}/Tables | 获取数据表 |


## `storageAggregate()`

```php
storageAggregate($table, $app_key, $pipeline): \ZSGF\Client\ZSGF\Client\Model\ObjectListApiResponse
```

聚合查询

根据聚合管道查询指定表中的数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$pipeline = 'pipeline_example'; // string | 构建聚合查询

try {
    $result = $apiInstance->storageAggregate($table, $app_key, $pipeline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageAggregate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **pipeline** | **string**| 构建聚合查询 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ObjectListApiResponse**](../Model/ObjectListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageClear()`

```php
storageClear($table, $app_key, $filter): \ZSGF\Client\ZSGF\Client\Model\Int64ApiResponse
```

清空表数据

根据筛选条件清空指定表中的数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$filter = 'filter_example'; // string | 筛选条件，json格式

try {
    $result = $apiInstance->storageClear($table, $app_key, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageClear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **filter** | **string**| 筛选条件，json格式 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\Int64ApiResponse**](../Model/Int64ApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageDelete()`

```php
storageDelete($table, $id, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除数据

删除指定表中指定ID的数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$id = 'id_example'; // string | 数据ID
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->storageDelete($table, $id, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **id** | **string**| 数据ID | |
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

## `storageDeleteIndex()`

```php
storageDeleteIndex($table, $app_key, $index_name): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除索引

删除指定表的指定索引

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$index_name = 'index_name_example'; // string | 索引名称

try {
    $result = $apiInstance->storageDeleteIndex($table, $app_key, $index_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageDeleteIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **index_name** | **string**| 索引名称 | [optional] |

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

## `storageDetail()`

```php
storageDetail($table, $id, $app_key, $project): \ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse
```

数据详情

获取指定表中指定ID的数据详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$id = 'id_example'; // string | 数据ID
$app_key = 'app_key_example'; // string
$project = 'project_example'; // string | json格式

try {
    $result = $apiInstance->storageDetail($table, $id, $app_key, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **id** | **string**| 数据ID | |
| **app_key** | **string**|  | |
| **project** | **string**| json格式 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse**](../Model/ObjectApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageExecuteFunction()`

```php
storageExecuteFunction($nonce, $timestamp, $signature, $app_key, $execute_function_request): \ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse
```

执行函数

执行指定的函数

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nonce = 'nonce_example'; // string | 随机字符串
$timestamp = 56; // int | 时间戳
$signature = 'signature_example'; // string | 签名
$app_key = 'app_key_example'; // string
$execute_function_request = new \ZSGF\Client\ZSGF\Client\Model\ExecuteFunctionRequest(); // \ZSGF\Client\ZSGF\Client\Model\ExecuteFunctionRequest | 函数请求参数

try {
    $result = $apiInstance->storageExecuteFunction($nonce, $timestamp, $signature, $app_key, $execute_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageExecuteFunction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nonce** | **string**| 随机字符串 | |
| **timestamp** | **int**| 时间戳 | |
| **signature** | **string**| 签名 | |
| **app_key** | **string**|  | |
| **execute_function_request** | [**\ZSGF\Client\ZSGF\Client\Model\ExecuteFunctionRequest**](../Model/ExecuteFunctionRequest.md)| 函数请求参数 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse**](../Model/ObjectApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageExport()`

```php
storageExport($table, $app_key, $filter, $start_time, $end_time): \SplFileObject
```

导出数据

根据筛选条件导出指定表中的数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$filter = 'filter_example'; // string | 筛选条件，json格式
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 开始时间
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 结束时间

try {
    $result = $apiInstance->storageExport($table, $app_key, $filter, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **filter** | **string**| 筛选条件，json格式 | [optional] |
| **start_time** | **\DateTime**| 开始时间 | [optional] |
| **end_time** | **\DateTime**| 结束时间 | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageImport()`

```php
storageImport($table, $app_key, $file): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

导入数据

从文件导入数据到指定表中

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | 导入的文件

try {
    $result = $apiInstance->storageImport($table, $app_key, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**| 导入的文件 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse**](../Model/BooleanApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageIndexes()`

```php
storageIndexes($table, $app_key): \ZSGF\Client\ZSGF\Client\Model\ObjectListApiResponse
```

获取索引

获取指定表的索引列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->storageIndexes($table, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageIndexes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ObjectListApiResponse**](../Model/ObjectListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageList()`

```php
storageList($table, $app_key, $filter, $project, $sort, $start_time, $end_time, $explain, $take, $skip): \ZSGF\Client\ZSGF\Client\Model\StorageListResultApiResponse
```

查询数据

根据条件查询指定表中的数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string
$filter = 'filter_example'; // string | 过滤，json格式
$project = 'project_example'; // string | 字段映射，json格式
$sort = 'sort_example'; // string | 排序，json格式
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 开始时间
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 结束时间
$explain = false; // bool | 查看执行计划
$take = 10; // int | 默认为10
$skip = 0; // int | 默认为0

try {
    $result = $apiInstance->storageList($table, $app_key, $filter, $project, $sort, $start_time, $end_time, $explain, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |
| **filter** | **string**| 过滤，json格式 | [optional] |
| **project** | **string**| 字段映射，json格式 | [optional] |
| **sort** | **string**| 排序，json格式 | [optional] |
| **start_time** | **\DateTime**| 开始时间 | [optional] |
| **end_time** | **\DateTime**| 结束时间 | [optional] |
| **explain** | **bool**| 查看执行计划 | [optional] [default to false] |
| **take** | **int**| 默认为10 | [optional] [default to 10] |
| **skip** | **int**| 默认为0 | [optional] [default to 0] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StorageListResultApiResponse**](../Model/StorageListResultApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePost()`

```php
storagePost($table, $app_key, $request_body): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

添加数据

向指定表中添加数据，可以是单个json对象或json数组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称（小写字母加数字,1-50位）
$app_key = 'app_key_example'; // string
$request_body = NULL; // mixed[] | json对象 / json数组

try {
    $result = $apiInstance->storagePost($table, $app_key, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称（小写字母加数字,1-50位） | |
| **app_key** | **string**|  | |
| **request_body** | [**mixed[]**](../Model/mixed.md)| json对象 / json数组 | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePostIndex()`

```php
storagePostIndex($table, $app_key, $post_index_request): \ZSGF\Client\ZSGF\Client\Model\StringApiResponse
```

添加索引

为指定表添加索引

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称（小写字母加数字,1-50位）
$app_key = 'app_key_example'; // string
$post_index_request = new \ZSGF\Client\ZSGF\Client\Model\PostIndexRequest(); // \ZSGF\Client\ZSGF\Client\Model\PostIndexRequest | json对象 / json数组

try {
    $result = $apiInstance->storagePostIndex($table, $app_key, $post_index_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storagePostIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称（小写字母加数字,1-50位） | |
| **app_key** | **string**|  | |
| **post_index_request** | [**\ZSGF\Client\ZSGF\Client\Model\PostIndexRequest**](../Model/PostIndexRequest.md)| json对象 / json数组 | [optional] |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringApiResponse**](../Model/StringApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePut()`

```php
storagePut($table, $id, $app_key, $body, $replace): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

更新数据

更新指定表中指定ID的数据，可以选择全量更新或部分更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$id = 'id_example'; // string | 数据ID
$app_key = 'app_key_example'; // string
$body = NULL; // mixed | json格式
$replace = false; // bool | 是否为全量更新，默认为false

try {
    $result = $apiInstance->storagePut($table, $id, $app_key, $body, $replace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storagePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **id** | **string**| 数据ID | |
| **app_key** | **string**|  | |
| **body** | **mixed**| json格式 | |
| **replace** | **bool**| 是否为全量更新，默认为false | [optional] [default to false] |

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

## `storageRemove()`

```php
storageRemove($table, $app_key): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
```

删除表

删除指定表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->storageRemove($table, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
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

## `storageStats()`

```php
storageStats($table, $app_key): \ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse
```

数据表统计

获取指定表的数据统计信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table = 'table_example'; // string | 表名称
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->storageStats($table, $app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **table** | **string**| 表名称 | |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\ObjectApiResponse**](../Model/ObjectApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageTables()`

```php
storageTables($app_key): \ZSGF\Client\ZSGF\Client\Model\StringListApiResponse
```

获取数据表

获取当前应用的所有数据表名称

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = ZSGF\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ZSGF\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = 'app_key_example'; // string

try {
    $result = $apiInstance->storageTables($app_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_key** | **string**|  | |

### Return type

[**\ZSGF\Client\ZSGF\Client\Model\StringListApiResponse**](../Model/StringListApiResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
