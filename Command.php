<?php

namespace PosSystem;

class Command
{
    private $posSystem;

    public function __construct(IPosSystem $posSystem)
    {
        $this->posSystem = $posSystem;
    }

    public function curl_get($url, array $data, array $options = []): string
    {
        $url = $this->posSystem->getBaseUrl() . $url;

        $defaults = [
            CURLOPT_URL => $url . (strpos($url, '?') === FALSE ? '?' : '') . http_build_query($data),
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => TRUE,
            //CURLOPT_DNS_USE_GLOBAL_CACHE => TRUE,
            CURLOPT_SSL_VERIFYHOST => 0, //unsafe, but the fastest solution for the error " SSL certificate problem, verify that the CA cert is OK"
            CURLOPT_SSL_VERIFYPEER => 0, //unsafe, but the fastest solution for the error " SSL certificate problem, verify that the CA cert is OK"
        ];
        $ch = curl_init();
        curl_setopt_array($ch, ($options + $defaults));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (!$result = curl_exec($ch)) {
            trigger_error(curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }

    public function curl_post($url, $data, array $options = []): string
    {
        $this->posSystem->getBaseUrl();

        return '';
    }
}