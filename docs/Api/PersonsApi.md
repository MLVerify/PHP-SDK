# MLVerify\Client\PersonsApi

All URIs are relative to *https://api.mlverify.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**personsDelete**](PersonsApi.md#personsDelete) | **DELETE** /persons/{id} | Deletes person
[**personsGet**](PersonsApi.md#personsGet) | **GET** /persons/{id} | Gets person by id
[**personsGetAll**](PersonsApi.md#personsGetAll) | **GET** /persons | Gets persons by search criteria
[**personsPost**](PersonsApi.md#personsPost) | **POST** /persons | Creates person
[**personsPut**](PersonsApi.md#personsPut) | **POST** /persons/{id} | Updates person


# **personsDelete**
> personsDelete($id)

Deletes person

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't clforget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Person identifier

try {
    $apiInstance->personsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->personsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Person identifier |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personsGet**
> \MLVerify\Client\Model\PersonModel personsGet($id)

Gets person by id

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Person identifier

try {
    $result = $apiInstance->personsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->personsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Person identifier |

### Return type

[**\MLVerify\Client\Model\PersonModel**](../Model/PersonModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personsGetAll**
> \MLVerify\Client\Model\PersonModel[] personsGetAll($client_id, $first_name, $surname, $relationship, $is_associated_person)

Gets persons by search criteria

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Client identifier
$first_name = "first_name_example"; // string | Person First Name
$surname = "surname_example"; // string | Person Surname
$relationship = "relationship_example"; // string | Relationship
$is_associated_person = true; // bool | 

try {
    $result = $apiInstance->personsGetAll($client_id, $first_name, $surname, $relationship, $is_associated_person);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->personsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client identifier |
 **first_name** | **string**| Person First Name | [optional]
 **surname** | **string**| Person Surname | [optional]
 **relationship** | **string**| Relationship | [optional]
 **is_associated_person** | **bool**|  | [optional]

### Return type

[**\MLVerify\Client\Model\PersonModel[]**](../Model/PersonModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personsPost**
> \MLVerify\Client\Model\PersonModel personsPost($form_data)

Creates person

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\PersonCreateModel(); // \MLVerify\Client\Model\PersonCreateModel | 

try {
    $result = $apiInstance->personsPost($form_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->personsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\PersonCreateModel**](../Model/PersonCreateModel.md)|  |

### Return type

[**\MLVerify\Client\Model\PersonModel**](../Model/PersonModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personsPut**
> \MLVerify\Client\Model\PersonModel personsPut($form_data, $id)

Updates person

API uses <a href='https://en.wikipedia.org/wiki/Basic_access_authentication'>Basic Authentication</a>.<br/> Don't forget to add <b>\"Authorization\"</b> header.<br/> Use <b>\"API Key\"</b> and <b>\"API Secret\"</b> for the authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = MLVerify\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MLVerify\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_data = new \MLVerify\Client\Model\PersonUpdateModel(); // \MLVerify\Client\Model\PersonUpdateModel | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->personsPut($form_data, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->personsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_data** | [**\MLVerify\Client\Model\PersonUpdateModel**](../Model/PersonUpdateModel.md)|  |
 **id** | **string**|  |

### Return type

[**\MLVerify\Client\Model\PersonModel**](../Model/PersonModel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

