# ClientCreateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | 
**auto_import_pscs** | **bool** |  | [optional] 
**name** | **string** |  | 
**type** | **string** |  | 
**company_number** | **string** |  | [optional] 
**reference** | **string** |  | [optional] 
**trading_address** | [**\MLVerify\Client\Model\AddressModel**](AddressModel.md) |  | 
**correspondence_address** | [**\MLVerify\Client\Model\AddressModel**](AddressModel.md) |  | [optional] 
**phone1** | **string** |  | [optional] 
**phone2** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**web_address** | **string** |  | [optional] 
**next_review_date** | **string** |  | [optional] 
**start_date** | **string** |  | [optional] 
**end_date** | **string** |  | [optional] 
**risk_level** | **string** |  | [optional] 
**tags** | **string** | Supply upto 5 comma separated tags, with each tag conforming to the following pattern [a-z0-0_-]{1,40} | [optional] 
**first_name** | **string** | required for sole-trader and individual types | [optional] 
**surname** | **string** | required for sole-trader and individual types | [optional] 
**nationality_code** | **string** | required for sole-trader and individual types | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


