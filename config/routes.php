<?php

$ASAAS_PRODUCTION = "https://www.asaas.com/api/v3/";
$ASAAS_SANDBOX = "https://sandbox.asaas.com/api/v3/";
$ASAAS_ROUTE = env("APP_ENV") === "production" ? $ASAAS_PRODUCTION : $ASAAS_SANDBOX;


return [
  "ASAAS" => $ASAAS_ROUTE,
  "HOST_ASAAS" => 'www.asaas.com'
];
