<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC6kJouhhtjBk0z'."\n".'bwf0697prLNGWK0ojZJHIq8k78nu35hdz3u0xWNATBQxh8rJvwtU8qS+qGzTO44D'."\n".'kULgwE0biMPsySLxqGbdymKD40xJyk/tJh8HCjC2Dq5LIcNMwhCLtiw5B9c9uJvA'."\n".'FLsiWgizvCw5MmxQ0r7r60+yfwKryikoXpdTEVWX8zE8NZ1wWO5k6vFUZD/Pzjq6'."\n".'8qaqs3vUSMyhkhVbYSfFU/e2iWIZjTVUXD2DQxO2EosZYCHcl1Vh8gjhdTrBtG9d'."\n".'8+H9vlMOui/1jsLUeM8sy+NEnENF4Y92mujWIbhXqsVaJggm0cWlMPRwp9f2pSw1'."\n".'/RNlfY5TAgMBAAECggEANaRZKJJXsoe/z8+XZpUhQWfuHgZmN1hJXFm9KS4nDh9N'."\n".'JIABTi9JA9Y8Iiesp4hePj0MIGO18qBXi3ALXir8oLOYve7xNLGabiAAZnKG31qj'."\n".'04iX+EK2Ucpz09dv25SbBEjLe1RlT3JSmg575fskMGWlA4cbfLuzuIquniCFyJW4'."\n".'ChCl1h8TpMJzmJvZWkQyKlquMCYGQoC9BMQ1RORL8loRB4FrOmwoKYOu0XA/85cd'."\n".'kFL2m8cZs4J8JenpuA8njNMY3o5HdKRO08PH7S2hNTogEtz663QuUO6b/Zf9u3D/'."\n".'iGxXVwp3zzZIuE8pprcZt9EfkVbtcWyZqPtDGh0iJQKBgQDzfId7zWDwACcwgEUj'."\n".'+oiXiWEr4q+bbvFlhMuXzyZRMmfkF5muO2h+RMS0gtxy2gxB+ZPDfLtMKBsjt00S'."\n".'tqGVEwNDsODNebuloRpNla8UAXKKJ7h4oTxxqjWQii2wtyzju2cdFYxxVwiXu8To'."\n".'HGcFgfERVbUECCAX1pXS5fuwVQKBgQDEJyyqARMUNfIGKuTB5aEcI9YBlwI+hSLc'."\n".'Bk7PGV8q/YbYJZ7/7JQgrDEcIMiqC5XiR0KgJnJnItrpqBt5QIj7x46fWFRGjLmT'."\n".'ISMi4sjAkm85pjv+lygLW0WCpg3FUGmmzP6OpVp5Y5N5BHTPq4ZpZRSnDrb8flYV'."\n".'/P2KlrjMBwKBgG2fSVhB1Tz4tKwvc/GI4GppXahmfO2b+27bZNZKW1P/P6r/vR8m'."\n".'fBstVup2aE4FQbOKbC59P84/2EgyRK8CLqlxT+zv+6ZHAmbFq5P2qkZ1iF4PGAyn'."\n".'exEpssgKjhubvMgjHX+IrhxxNNsrnLFr6C4gnKpTThYsmlZhND8pcDGpAoGAPl2K'."\n".'ON8wlrt0IPvgUbnV2KGYOFcv8nrYE4a55eTWOk/zYKPNgudQTXcSAjR2OIKIfDJV'."\n".'/59Zvmr5mVLGsW2QYCUZtpYZ7XhuxFXD2yKp23hzfqvY5WBf7gRt/FUZicPAY7VH'."\n".'tkjilDfRuqdtEF4j1Ty7LUZjbbIpYsJWRosXZF8CgYEA3UeV+TLI4SiZEchguTHd'."\n".'vZGBQ2eNPz6qdPBPbPpg+Hk5hHOD8gIuy2HUBQQeu6hIV0WrxmDaXwWp3Wo5k2MT'."\n".'fPknNDAp+jOA4/vK99B9WOjnvE81avkh1589PC/McbMCbTbFrivg5CUBNhg3tqud'."\n".'y1bda62Hz37feuiHvNyOKBg='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def0000026ca7ceb21453860110c432a69e2c4b653540cfbd3292875555d563e3ba0775211b4cb117c484955fc11bba0c909485d4d2615e988ccc6174e9495b02a4c4eb5');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
