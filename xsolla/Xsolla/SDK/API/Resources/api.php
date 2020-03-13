<?php

return [
    'name' => 'Xsolla API',
    'apiVersion' => '2018-09-05',
    'description' => '',
    'baseUrl' => 'https://api.xsolla.com',
    'operations' => [
        // Payment UI
        'CreatePaymentUIToken' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/merchants/{merchant_id}/token',
            'summary' => 'Create payment UI token',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Subscriptions
        'CreateSubscriptionPlan' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans',
            'summary' => 'Create a recurrent plan',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'UpdateSubscriptionPlan' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans/{plan_id}',
            'summary' => 'Update a recurrent plan',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'plan_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteSubscriptionPlan' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans/{plan_id}/delete',
            'summary' => 'Delete a recurrent plan',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'plan_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'DisableSubscriptionPlan' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans/{plan_id}',
            'summary' => 'Disable a recurrent plan',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'plan_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'EnableSubscriptionPlan' => [
            'httpMethod' => 'PATCH',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans/{plan_id}',
            'summary' => 'Enable a recurrent plan',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'plan_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListSubscriptionPlans' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/plans',
            'summary' => 'List all recurrent plans',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'external_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'group_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'product_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
        ],
        'CreateSubscriptionProduct' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/products',
            'summary' => 'Create a product',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'UpdateSubscriptionProduct' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/products/{product_id}',
            'summary' => 'Update a product',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'product_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteSubscriptionProduct' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/products/{product_id}',
            'summary' => 'Delete a product',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'product_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'ListSubscriptionProducts' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/products',
            'summary' => 'List all recurrent products',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'group_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'product_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
        ],
        'UpdateSubscription' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/subscriptions/{subscription_id}',
            'summary' => 'Update a recurrent subscription. It\'s available to update the status of subscription (active or canceled) and to postpone the date of the next charge for current subscription.',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'subscription_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListSubscriptions' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/subscriptions',
            'summary' => 'List all recurrent subscriptions',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'plan_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'product_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'ListUserSubscriptionPayments' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/subscriptions/payments',
            'summary' => 'List all recurrent payments by user',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'subscription_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
        ],
        'ListSubscriptionPayments' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/payments',
            'summary' => 'List all recurrent payments',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'subscription_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
        ],
        'ListSubscriptionCurrencies' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/subscriptions/currencies',
            'summary' => 'List all recurrent currencies',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        //User attributes
        'ListUserAttributes' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/user_attributes',
            'summary' => 'Get list of user attributes',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'GetUserAttribute' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/user_attributes/{user_attribute_id}',
            'summary' => 'Show a user attribute',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_attribute_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'CreateUserAttribute' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/user_attributes',
            'summary' => 'Create user attribute',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'UpdateUserAttribute' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/user_attributes/{user_attribute_id}',
            'summary' => 'Update user attribute',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_attribute_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteUserAttribute' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/user_attributes/{user_attribute_id}',
            'summary' => 'Delete a user attribute',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_attribute_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        // Virtual Items
        'CreateVirtualItem' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/items',
            'summary' => 'Create a virtual item',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetVirtualItem' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/items/{item_id}',
            'summary' => 'Get a virtual item',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'item_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateVirtualItem' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/items/{item_id}',
            'summary' => 'Update a virtual item',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'item_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteVirtualItem' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/items/{item_id}',
            'summary' => 'Delete a virtual item',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'item_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListVirtualItems' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/items',
            'summary' => 'List a virtual items',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'has_price' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'CreateVirtualItemsGroup' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/groups',
            'summary' => 'Create a virtual items group',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetVirtualItemsGroup' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/groups/{group_id}',
            'summary' => 'Get a virtual items group',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'group_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateVirtualItemsGroup' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/groups/{group_id}',
            'summary' => 'Update a virtual items group',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'group_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteVirtualItemsGroup' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/groups/{group_id}',
            'summary' => 'Delete a virtual items group',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'group_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListVirtualItemsGroups' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/groups',
            'summary' => 'List all virtual items groups',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateVirtualItemOrderInGroup' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_items/sort',
            'summary' => 'Update items order in group',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Virtual Currency
        'GetProjectVirtualCurrencySettings' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_currency',
            'summary' => 'Get project virtual currency settings',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateProjectVirtualCurrencySettings' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/virtual_currency',
            'summary' => 'Update project virtual currency settings',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Wallet
        'CreateWalletUser' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/users',
            'summary' => 'Create a new user',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetWalletUser' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}',
            'summary' => 'Retrieve a user data',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'UpdateWalletUser' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}',
            'summary' => 'Update user\'s information',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListWalletUsers' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users',
            'summary' => 'List all users',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'email' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'user_requisites' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListWalletUserOperations' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/transactions',
            'summary' => 'List all operations',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'transaction_type' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'RechargeWalletUserBalance' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/recharge',
            'summary' => 'Change a balance',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListWalletUserVirtualItems' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/virtual_items',
            'summary' => 'Get user\'s virtual items',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'AddVirtualItemToWalletUser' => [
            'httpMethod' => 'POST ',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/virtual_items/add',
            'summary' => 'Add the virtual items to the user\'s account',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeleteVirtualItemFromWalletUser' => [
            'httpMethod' => 'POST ',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/virtual_items/remove',
            'summary' => 'Delete the virtual items from the user\'s account',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Coupons
        'GetCoupon' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/coupons/{code}',
            'summary' => 'Get information about coupon by code',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'code' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'RedeemCoupon' => [
            'httpMethod' => 'POST ',
            'uri' => '/merchant/v2/projects/{project_id}/coupons/{code}/redeem',
            'summary' => 'Redeem coupon by code',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'code' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Promotions
        'CreatePromotion' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions',
            'summary' => 'Create a new promotion',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetPromotion' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}',
            'summary' => 'Get a promotion',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdatePromotion' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}',
            'summary' => 'Update a promotion. If the promotion is read-only (read_only = true), you are not allowed to change "project_id" parameter.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ReviewPromotion' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/review',
            'summary' => 'Check the promotion, if it is ready for activation. This method returns the list of errors (if they exist).',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'TogglePromotion' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/toggle',
            'summary' => 'Toggle the promotion. Change the status of promotion from enabled to disabled and vice versa.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'DeletePromotion' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}',
            'summary' => 'Delete a promotion. Only disabled promotion is allowed to delete (enabled = false).',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListPromotions' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions',
            'summary' => 'List all promotions',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
            ],
        ],
        'GetPromotionSubject' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/subject',
            'summary' => 'Get the subject of the promotion',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'SetPromotionSubject' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/subject',
            'summary' => 'Set the subject of the promotion. If the promotion is read-only (read_only = true), you are not allowed to update the subject. The subject can take the following values: "purchase", or "items", or "packages".',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetPromotionPaymentSystems' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/payment_systems',
            'summary' => 'Get the payment systems of the promotion. If the payment systems list is empty, the promotion will be valid for all payment systems.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'SetPromotionPaymentSystems' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/payment_systems',
            'summary' => 'Set the payment systems of the promotion. If the payment systems list is empty, the promotion will be applied for all payment systems. If the promotion is read-only (read_only = true), you are not allowed to call this command.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetPromotionPeriods' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/periods',
            'summary' => 'Get the periods of the promotion',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'SetPromotionPeriods' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/periods',
            'summary' => 'Set the periods of the promotion. If the promotion is read-only (read_only = true), you are not allowed to edit existing periods, add new periods only.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetPromotionRewards' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/rewards',
            'summary' => 'Get the rewards of the promotion',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'SetPromotionRewards' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/rewards',
            'summary' => 'Set the rewards to the promotion. If the promotion is read-only (read_only = true), you are not allowed to update the rewards.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListCouponPromotions' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/coupon_promotions',
            'summary' => 'Get coupon promotions.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'project_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'campaign_code' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'has_reward' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'CreateCouponPromotion' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/merchants/{merchant_id}/coupon_promotions',
            'summary' => 'Create coupon promotion.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'CreateCoupon' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/merchants/{merchant_id}/coupon_promotions/{campaign_id}/coupons',
            'summary' => 'Create coupon for a campaign by given code.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'campaign_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'UpdatePromotionCampaigns' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/promotions/{promotion_id}/coupons',
            'summary' => 'Update the promotion campaigns.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'promotion_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Events
        'ListEvents' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/events/messages',
            'summary' => 'List all events from Xsolla Event System',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        // Reports
        'SearchPaymentsRegistry' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/reports/transactions/search.{format}',
            'summary' => 'Get a transaction list based on specific search parameters. JSON, CSV or XML will be returned in response from the API.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'format' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'project_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'show_dry_run' => [
                    'location' => 'query',
                    'type' => 'boolean',
                    'required' => false,
                ],
                'transaction_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'phone' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'user_name' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'user_custom' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'email' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'external_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'type' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'ListPaymentsRegistry' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/reports/transactions/registry.{format}',
            'summary' => 'Get information about all transactions for specified data range/transfer/report in different data formats. JSON, CSV or XML will be returned in response from the API.',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'format' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'project_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'show_dry_run' => [
                    'location' => 'query',
                    'type' => 'boolean',
                    'required' => false,
                ],
                'transfer_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'report_id' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'merchant_of_records' => [
                    'location' => 'query',
                    'type' => 'boolean',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => true,
                ],
                'in_transfer_currency' => [
                    'location' => 'query',
                    'type' => 'boolean',
                    'required' => true,
                ],
                'show_total' => [
                    'location' => 'query',
                    'type' => 'boolean',
                    'required' => true,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'ListTransfersRegistry' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/reports/transfers',
            'summary' => 'List all transfers',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'ListReportsRegistry' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/reports',
            'summary' => 'Get a list of finance reports for specified data range',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'CreateRefundRequest' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/merchants/{merchant_id}/reports/transactions/{transaction_id}/refund',
            'summary' => 'Send a refund request. Money will be returned to user',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'transaction_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        // Support
        'ListSupportTickets' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/support/tickets',
            'summary' => 'List all tickets',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'datetime_from' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'datetime_to' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'status' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'type' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
                'offset' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'limit' => [
                    'location' => 'query',
                    'type' => 'integer',
                    'required' => false,
                ],
                'sender' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => false,
                ],
            ],
        ],
        'ListSupportTicketComments' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/support/tickets/{ticket_id}/comments',
            'summary' => 'List all comments',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'ticket_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        // Game Delivery
        'CreateGameDeliveryEntity' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/game_delivery',
            'summary' => 'Create game delivery entity',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetGameDeliveryEntity' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/game_delivery/{game_delivery_id}',
            'summary' => 'Get a game delivery entity',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'game_delivery_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateGameDeliveryEntity' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}/game_delivery/{game_delivery_id}',
            'summary' => 'Update a game delivery entity',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'game_delivery_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListGameDeliveryEntities' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/game_delivery',
            'summary' => 'List all game delivery entities',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'ListGameDeliveryDrmPlatforms' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/drm',
            'summary' => 'List available DRM platforms',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
            ],
        ],
        //Storefront
        'GetStorefrontVirtualCurrency' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/storefront/virtual_currency',
            'summary' => 'List virtual currency packages',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'language' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'currency' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'GetStorefrontVirtualGroups' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/storefront/virtual_items/groups',
            'summary' => 'List of virtual groups',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'language' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'currency' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'GetStorefrontVirtualItems' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/storefront/virtual_items/items',
            'summary' => 'List of virtual items',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'language' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'currency' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'group_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'GetStorefrontSubscriptions' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/storefront/subscriptions',
            'summary' => 'List of subscriptions',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'language' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'currency' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'GetStorefrontBonus' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/storefront/bonus',
            'summary' => 'Get active promotion',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'language' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'currency' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'query',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        // Project Settings
        'CreateProject' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/merchants/{merchant_id}/projects',
            'summary' => 'Create a project',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'GetProject' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}',
            'summary' => 'Get a project',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
        'UpdateProject' => [
            'httpMethod' => 'PUT',
            'uri' => '/merchant/v2/projects/{project_id}',
            'summary' => 'Update a project',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'ListProjects' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/merchants/{merchant_id}/projects',
            'summary' => 'List projects',
            'parameters' => [
                'merchant_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'static' => true,
                    'required' => true,
                ],
            ],
        ],
        //Payment Accounts
        'ListPaymentAccounts' => [
            'httpMethod' => 'GET',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/payment_accounts',
            'summary' => 'List of the saved payment accounts',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
            ],
        ],
        'ChargePaymentAccount' => [
            'httpMethod' => 'POST',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/payments/{type}/{account_id}',
            'summary' => 'Charge using the saved payment account',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'type' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'account_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'request' => [
                    'location' => 'body',
                    'type' => 'array',
                    'required' => true,
                    'filters' => [
                        '\Xsolla\SDK\API\XsollaClient::jsonEncode',
                    ],
                ],
            ],
        ],
        'DeletePaymentAccount' => [
            'httpMethod' => 'DELETE',
            'uri' => '/merchant/v2/projects/{project_id}/users/{user_id}/payments/{type}/{account_id}',
            'summary' => 'Delete the saved payment account',
            'parameters' => [
                'project_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
                'user_id' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'type' => [
                    'location' => 'uri',
                    'type' => 'string',
                    'required' => true,
                ],
                'account_id' => [
                    'location' => 'uri',
                    'type' => 'integer',
                    'required' => true,
                ],
            ],
        ],
    ],
];
