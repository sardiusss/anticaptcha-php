<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class NoCaptchaProxyless
 * @package CaptchaSolvers
 */
class NoCaptchaProxyless extends AntiCaptcha implements AntiCaptchaTaskProtocol
{

    /**
     * @var
     */
    private $websiteUrl;
    /**
     * @var
     */
    private $websiteKey;
    /**
     * @var
     */
    private $websiteSToken;

    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"          => "NoCaptchaTaskProxyless",
            "websiteURL"    => $this->websiteUrl,
            "websiteKey"    => $this->websiteKey,
            "websiteSToken" => $this->websiteSToken
        ];
    }

    /**
     * @return mixed
     */
    public function getTaskSolution()
    {
        return $this->taskInfo->solution->gRecaptchaResponse;
    }

    /**
     * @param $value
     */
    public function setWebsiteURL($value)
    {
        $this->websiteUrl = $value;
    }

    /**
     * @param $value
     */
    public function setWebsiteKey($value)
    {
        $this->websiteKey = $value;
    }

    /**
     * @param $value
     */
    public function setWebsiteSToken($value)
    {
        $this->websiteSToken = $value;
    }

}
