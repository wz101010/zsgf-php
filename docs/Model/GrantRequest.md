# # GrantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redirect_uri** | **string** | 返回地址。默认无限制，也可在【安全-开放认证网址白名单】配置 | [optional]
**grant_type** | **string** | 授权类型。可选：email、phone、unionid、account |
**scopes** | **string** | 自定义授权范围，用英文空格分隔 |
**user_name** | **string** | 用户名。授权类型为：email/phone/account必填 | [optional]
**password** | **string** | 登录密码。授权类型为：email/phone/account必填 | [optional]
**union_id** | **string** | unionId。授权类型为：unionid必填 | [optional]
**platform** | **string** | 平台。授权类型为：unionid必填 | [optional]
**expire_in_days** | **int** | 授权有效期。1~99天 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
