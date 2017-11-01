<?php

$app->post('/api/Mailjet/createTemplate', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKeyPublic','apiKeyPrivate','author','categories','copyright','description','editMode','isStarred','locale','name','ownerType']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['apiKeyPublic'=>'apiKeyPublic','apiKeyPrivate'=>'apiKeyPrivate','author'=>'Author','categories'=>'Categories','copyright'=>'Copyright','description'=>'Description','editMode'=>'EditMode','isStarred'=>'IsStarred','locale'=>'Locale','name'=>'Name','ownerType'=>'OwnerType'];
    $optionalParams = [];
    $bodyParams = [
       'json' => ['Author','Categories','Copyright','Description','EditMode','IsStarred','Locale','Name','OwnerType']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['Categories'] = \Models\Params::toString($data['Categories'], ','); 

    $client = $this->httpClient;
    $query_str = "https://api.mailjet.com/v3/REST/template";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams); $requestParams['curl'] = [        CURLOPT_USERPWD => "{$data['apiKeyPublic']}:{$data['apiKeyPrivate']}"];
    $requestParams['headers'] = [];
     

    try {
        $resp = $client->post($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});