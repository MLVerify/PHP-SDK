# MLVerify\Client\ClientsApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientsDelete**](ClientsApi.md#clientsDelete) | **DELETE** /clients/{id} | Deletes client
[**clientsGet**](ClientsApi.md#clientsGet) | **GET** /clients/{id} | Gets client by id
[**clientsGetAll**](ClientsApi.md#clientsGetAll) | **GET** /clients | Gets clients by search criteria
[**clientsPost**](ClientsApi.md#clientsPost) | **POST** /clients | Creates client
[**clientsPut**](ClientsApi.md#clientsPut) | **POST** /clients/{id} | Updates client
[**clientsSendKycCheck**](ClientsApi.md#clientsSendKycCheck) | **POST** /clients/{id}/sendkyc | Sends client access request


# **clientsDelete**
> clientsDelete($id)

Deletes client

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Client identifier

try {
    $apiInstance->clientsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Client identifier |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsGet**
> \MLVerify\Client\Model\ClientModel clientsGet($id)

Gets client by id

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Client identifier

try {
    $result = $apiInstance->clientsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Client identifier |

### Return type

[**\MLVerify\Client\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsGetAll**
> \MLVerify\Client\Model\ClientModel[] clientsGetAll($client_name, $person_name, $email, $reference, $archived, $status)

Gets clients by search criteria

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_name = "client_name_example"; // string | Client name
$person_name = "person_name_example"; // string | Person name
$email = "email_example"; // string | Client email
$reference = "reference_example"; // string | Client reference
$archived = true; // bool | Client is archived?
$status = 56; // int | Client status. Allowed values: <b>1 - 'unverified</b>', <b>2 - 'review</b>', <b>3 - 'verified</b>'

try {
    $result = $apiInstance->clientsGetAll($client_name, $person_name, $email, $reference, $archived, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_name** | **string**| Client name | [optional]
 **person_name** | **string**| Person name | [optional]
 **email** | **string**| Client email | [optional]
 **reference** | **string**| Client reference | [optional]
 **archived** | **bool**| Client is archived? | [optional]
 **status** | **int**| Client status. Allowed values: &lt;b&gt;1 - &#39;unverified&lt;/b&gt;&#39;, &lt;b&gt;2 - &#39;review&lt;/b&gt;&#39;, &lt;b&gt;3 - &#39;verified&lt;/b&gt;&#39; | [optional]

### Return type

[**\MLVerify\Client\Model\ClientModel[]**](../Model/ClientModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsPost**
> \MLVerify\Client\Model\ClientModel clientsPost($form_data)

Creates client

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\ClientCreateModel(); // \MLVerify\Client\Model\ClientCreateModel | 

try {
    $result = $apiInstance->clientsPost($form_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\ClientCreateModel**](../Model/ClientCreateModel.md)|  |

### Return type

[**\MLVerify\Client\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsPut**
> \MLVerify\Client\Model\ClientModel clientsPut($form_data, $id)

Updates client

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\ClientUpdateModel(); // \MLVerify\Client\Model\ClientUpdateModel | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->clientsPut($form_data, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\ClientUpdateModel**](../Model/ClientUpdateModel.md)|  |
 **id** | **string**|  |

### Return type

[**\MLVerify\Client\Model\ClientModel**](../Model/ClientModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsSendKycCheck**
> clientsSendKycCheck($id, $form_data)

Sends client access request

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Client identifier
$form_data = new \MLVerify\Client\Model\KycCheckSendModel(); // \MLVerify\Client\Model\KycCheckSendModel | 

try {
    $apiInstance->clientsSendKycCheck($id, $form_data);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsSendKycCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Client identifier |
 **form_data** | [**\MLVerify\Client\Model\KycCheckSendModel**](../Model/KycCheckSendModel.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

