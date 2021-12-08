<?php

declare(strict_types=1);

namespace Rapid7\InsightVM\Api\Factory;

use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Rapid7\InsightVM\Api\Authentication\BasicAuthentication;
use Rapid7\InsightVM\Api\Client;

class ClientFactory
{

    public static function create(string $host, string $username,
        string $password,
        ClientInterface $httpClient = null,
        array $additionalPlugins = []
    ): Client {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }
        $plugins = [
            new Plugin\AddHostPlugin(
                Psr17FactoryDiscovery::findUriFactory()->createUri($host)
            ),
            new AuthenticationRegistry([
                new BasicAuthentication(
                    $username, $password
                ),
            ]),
        ];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new PluginClient(
            $httpClient, $plugins
        );

        return Client::create($httpClient);
    }

    public static function getDebugLogger(LoggerInterface $logger,
        int $maxBodyLength = 1000
    ): Plugin {
        return new Plugin\LoggerPlugin(
            $logger,
            new FullHttpMessageFormatter($maxBodyLength)
        );
    }

}
