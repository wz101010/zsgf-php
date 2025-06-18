# ZSGF\Client\StorageApi

All URIs are relative to https://api-dev.zashigaofa.cn, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storageAggregate()**](StorageApi.md#storageAggregate) | **GET** /Storage/{appKey}/{table}/Aggregate | 聚合查询 |
| [**storageDelete()**](StorageApi.md#storageDelete) | **DELETE** /Storage/{appKey}/{table}/{id} | 删除数据 |
| [**storageDetail()**](StorageApi.md#storageDetail) | **GET** /Storage/{appKey}/{table}/{id} | 数据详情 |
| [**storageList()**](StorageApi.md#storageList) | **GET** /Storage/{appKey}/{table} | 查询数据 |
| [**storagePost()**](StorageApi.md#storagePost) | **POST** /Storage/{appKey}/{table} | 添加数据 |
| [**storagePut()**](StorageApi.md#storagePut) | **PUT** /Storage/{appKey}/{table}/{id} | 更新数据 |


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

## `storagePut()`

```php
storagePut($table, $id, $app_key, $request_body, $replace): \ZSGF\Client\ZSGF\Client\Model\BooleanApiResponse
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
$request_body = NULL; // mixed[] | json格式
$replace = false; // bool | 是否为全量更新，默认为false

try {
    $result = $apiInstance->storagePut($table, $id, $app_key, $request_body, $replace);
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
| **request_body** | [**mixed[]**](../Model/mixed.md)| json格式 | |
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
