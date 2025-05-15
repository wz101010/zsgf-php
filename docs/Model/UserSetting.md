# # UserSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 用户的唯一标识符。 | [optional]
**user_id** | **int** | 关联的用户ID，表示该配置属于哪个用户。 |
**provider_code** | **string** | 提供商的唯一代码，用于标识服务提供者。 | [optional]
**group_code** | **string** | 组的唯一代码，用于分类设置项。 | [optional]
**code** | **string** | 设置项的唯一代码或键名，用于标识具体的配置项。 |
**value** | **string** | 设置项的具体值或选项。 |
**tags** | **string** | 用于对设置项进行分类或标记的标签。 | [optional]
**description** | **string** | 设置项的详细描述，说明其作用或用途。 | [optional]
**frontend_usable** | **bool** | 指示该设置项是否在前端界面中可用。 | [optional]
**create_date** | **\DateTime** | 设置项的创建时间。 | [optional]
**last_update** | **\DateTime** | 设置项的最后更新时间。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
