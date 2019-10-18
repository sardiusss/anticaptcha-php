<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class NoCaptcha
 * @package CaptchaSolvers
 */
class NoCaptcha extends AntiCaptcha implements AntiCaptchaTaskProtocol
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
     * @var string
     */
    private $proxyType = "http";
    /**
     * @var
     */
    private $proxyAddress;
    /**
     * @var
     */
    private $proxyPort;
    /**
     * @var
     */
    private $proxyLogin;
    /**
     * @var
     */
    private $proxyPassword;
    /**
     * @var string
     */
    private $userAgent = "";
    /**
     * @var string
     */
    private $cookies = "";

    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"          => "NoCaptchaTask",
            "websiteURL"    => $this->websiteUrl,
            "websiteKey"    => $this->websiteKey,
            "websiteSToken" => $this->websiteSToken,
            "proxyType"     => $this->proxyType,
            "proxyAddress"  => $this->proxyAddress,
            "proxyPort"     => $this->proxyPort,
            "proxyLogin"    => $this->proxyLogin,
            "proxyPassword" => $this->proxyPassword,
            "userAgent"     => $this->userAgent,
            "cookies"       => $this->cookies
        ];
    }

    /**
     * @param $taskInfo
     */
    public function setTaskInfo($taskInfo)
    {
        $this->taskInfo = $taskInfo;
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

    /**
     * @param $value
     */
    public function setProxyType($value)
    {
        $this->proxyType = $value;
    }

    /**
     * @param $value
     */
    public function setProxyAddress($value)
    {
        $this->proxyAddress = $value;
    }

    /**
     * @param $value
     */
    public function setProxyPort($value)
    {
        $this->proxyPort = $value;
    }

    /**
     * @param $value
     */
    public function setProxyLogin($value)
    {
        $this->proxyLogin = $value;
    }

    /**
     * @param $value
     */
    public function setProxyPassword($value)
    {
        $this->proxyPassword = $value;
    }

    /**
     * @param $value
     */
    public function setUserAgent($value)
    {
        $this->userAgent = $value;
    }

    /**
     * @param $value
     */
    public function setCookies($value)
    {
        $this->cookies = $value;
    }

}
