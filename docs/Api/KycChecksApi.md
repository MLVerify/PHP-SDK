# MLVerify\Client\KycChecksApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kycChecksDelete**](KycChecksApi.md#kycChecksDelete) | **DELETE** /kyc/{id} | Deletes KYC check
[**kycChecksGet**](KycChecksApi.md#kycChecksGet) | **GET** /kyc/{id} | Gets KYC check by id
[**kycChecksGetAll**](KycChecksApi.md#kycChecksGetAll) | **GET** /kyc | Gets KYC checks by search criteria
[**kycChecksPost**](KycChecksApi.md#kycChecksPost) | **POST** /kyc | Creates KYC check
[**kycChecksPut**](KycChecksApi.md#kycChecksPut) | **POST** /kyc/{id} | Updates KYC check
[**kycChecksRespond**](KycChecksApi.md#kycChecksRespond) | **POST** /kyc/{id}/respond | Updates KYC check response


# **kycChecksDelete**
> kycChecksDelete($id)

Deletes KYC check

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->kycChecksDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycChecksGet**
> \MLVerify\Client\Model\KycCheckModel kycChecksGet($id)

Gets KYC check by id

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->kycChecksGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\MLVerify\Client\Model\KycCheckModel**](../Model/KycCheckModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycChecksGetAll**
> \MLVerify\Client\Model\KycCheckModel[] kycChecksGetAll($client_id, $person_id, $type)

Gets KYC checks by search criteria

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | 
$person_id = "person_id_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->kycChecksGetAll($client_id, $person_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **person_id** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\MLVerify\Client\Model\KycCheckModel[]**](../Model/KycCheckModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycChecksPost**
> \MLVerify\Client\Model\KycCheckModel kycChecksPost($form_data)

Creates KYC check

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\KycCheckCreateModel(); // \MLVerify\Client\Model\KycCheckCreateModel | 

try {
    $result = $apiInstance->kycChecksPost($form_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\KycCheckCreateModel**](../Model/KycCheckCreateModel.md)|  |

### Return type

[**\MLVerify\Client\Model\KycCheckModel**](../Model/KycCheckModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycChecksPut**
> \MLVerify\Client\Model\KycCheckModel kycChecksPut($form_data, $id)

Updates KYC check

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\KycCheckUpdateModel(); // \MLVerify\Client\Model\KycCheckUpdateModel | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->kycChecksPut($form_data, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\KycCheckUpdateModel**](../Model/KycCheckUpdateModel.md)|  |
 **id** | **string**|  |

### Return type

[**\MLVerify\Client\Model\KycCheckModel**](../Model/KycCheckModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kycChecksRespond**
> kycChecksRespond($id, $answer, $file)

Updates KYC check response

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\KycChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$answer = "answer_example"; // string | KYC check answer
$file = "/path/to/file.txt"; // \SplFileObject | KYC check document

try {
    $apiInstance->kycChecksRespond($id, $answer, $file);
} catch (Exception $e) {
    echo 'Exception when calling KycChecksApi->kycChecksRespond: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **answer** | **string**| KYC check answer | [optional]
 **file** | **\SplFileObject**| KYC check document | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

