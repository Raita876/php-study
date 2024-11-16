#!/usr/bin/env env php
<?php
require __DIR__ . '/../vendor/autoload.php';

define('INDEX_NAME', 'users');

use OpenSearch\Client;
use OpenSearch\ClientBuilder;

class OpenSearchClass
{
    protected ?Client $client;

    public function __construct()
    {
        // $this->client = ClientBuilder::fromConfig([
        //     'hosts' => [
        //         'https://localhost:9200'
        //     ],
        //     'retries' => 5,
        //     'handler' => ClientBuilder::multiHandler()
        // ]);

        $opensearchHost = [
            'host' => 'https://localhost:9200',
            'scheme' => 'https',
            'port' => '443'
        ];

        $this->client = (new ClientBuilder())
            ->setHosts($opensearchHost)
            ->setBasicAuthentication('admin', 'E8mXkjWzpS8adYxh')
            ->setSSLVerification(false)
            ->build();
    }

    public function search(): array
    {
        $docs = $this->client->search([
            'index' => INDEX_NAME,
        ]);

        return $docs;
    }
}

function main()
{
    $opensearch = new OpenSearchClass();
    $res = $opensearch->search();
    var_dump($res);
}

main();
