# # CurrencyExchangeRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 货币兑换比率的唯一标识符。 | [optional]
**from_currency_code** | **string** | 兑换的源货币代码，例如 &#39;USD&#39;。 | [optional]
**to_currency_code** | **string** | 兑换的目标货币代码，例如 &#39;CNY&#39;。 | [optional]
**exchange_rate** | **int** | 从源货币到目标货币的兑换比率。例如，1 USD &#x3D; 6.5 CNY。 | [optional]
**description** | **string** | 兑换比率的详细描述信息。 | [optional]
**create_date** | **\DateTime** | 货币兑换比率的创建日期，默认为当前时间。 | [optional]
**last_update** | **\DateTime** | 货币兑换比率的最后更新日期，默认为当前时间。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
