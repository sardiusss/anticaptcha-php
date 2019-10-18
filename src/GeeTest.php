<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class GeeTest
 * @package CaptchaSolvers
 */
class GeeTest extends AntiCaptcha implements AntiCaptchaTaskProtocol
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
    private $websiteChallenge;
    /**
     * @var
     */
    private $geetestApiServerSubdomain;
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
            "type"                      => "GeeTestTask",
            "websiteURL"                => $this->websiteUrl,
            "geetestApiServerSubdomain" => $this->geetestApiServerSubdomain,
            "gt"                        => $this->websiteKey,
            "challenge"                 => $this->websiteChallenge,
            "proxyType"                 => $this->proxyType,
            "proxyAddress"              => $this->proxyAddress,
            "proxyPort"                 => $this->proxyPort,
            "proxyLogin"                => $this->proxyLogin,
            "proxyPassword"             => $this->proxyPassword,
            "userAgent"                 => $this->userAgent,
            "cookies"                   => $this->cookies
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
        return $this->taskInfo->solution;
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
    public function setGTKey($value)
    {
        $this->websiteKey = $value;
    }

    /**
     * @param $value
     */
    public function setChallenge($value)
    {
        $this->websiteChallenge = $value;
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

    /**
     * @param $value
     */
    public function setAPISubdomain($value)
    {
        $this->geetestApiServerSubdomain = $value;
    }

}
