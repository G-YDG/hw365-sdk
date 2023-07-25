<?php

declare(strict_types=1);

namespace Ydg\Hw365Sdk;

use GuzzleHttp\Exception\GuzzleException;
use Ydg\FoudationSdk\FoundationApi;
use Ydg\FoudationSdk\Traits\HasAttributes;
use Ydg\Hw365Sdk\Support\Utils;

class Hw365Api extends FoundationApi
{
    use HasAttributes;

    protected $baseUri = 'https://ot.jfshou.cn';

    /**
     * @throws GuzzleException
     */
    public function request(string $uri, array $params): array
    {
        $response = $this->getHttpClient()->get($this->getBaseUri() . $uri, $this->formatParams($params));

        return Utils::jsonResponseToArray($response);
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri)
    {
        $this->baseUri = $baseUri;
    }

    protected function formatParams($params)
    {
        $params['share_code'] = $this->offsetGet('share_code');
        $params['timestamp'] = $params['timestamp'] ?? Utils::getMsecTime();
        $params['sign'] = $this->makeSign($params, $this->offsetGet('secret_key'));

        return $params;
    }

    /**
     * 获取签名
     *
     * @param array $params
     * @param string $secretKey
     *
     * @return string
     */
    private function makeSign(array $params, string $secretKey): string
    {
        ksort($params);
        $signArray = [];
        foreach ($params as $key => $value) {
            if ($value !== null && $value !== '') {
                $signArray[] = Utils::underlineToHump($key) . '=' . $value;
            }
        }
        $signArray[] = "secretKey={$secretKey}";
        return strtoupper(md5(join('&', $signArray)));
    }

    public function buildRequestUrl(string $uri, array $params): string
    {
        return $this->getBaseUri() . $uri . '?' . http_build_query($this->formatParams($params));
    }

    public function getHttpClientDefaultOptions(): array
    {
        return [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json;charset=UTF-8',
            ],
            'verify' => false,
        ];
    }
}