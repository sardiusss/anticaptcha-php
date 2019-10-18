<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class FunCaptchaProxyless
 * @package CaptchaSolvers
 */
class FunCaptchaProxyless extends AntiCaptcha implements AntiCaptchaTaskProtocol
{

    /**
     * @var
     */
    private $websiteUrl;
    /**
     * @var
     */
    private $jsSubdomain;
    /**
     * @var
     */
    private $websitePublicKey;

    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"                     => "FunCaptchaTaskProxyless",
            "websiteURL"               => $this->websiteUrl,
            "funcaptchaApiJSSubdomain" => $this->jsSubdomain,
            "websitePublicKey"         => $this->websitePublicKey
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
        return $this->taskInfo->solution->token;
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
    public function setJSSubdomain($value)
    {
        $this->jsSubdomain = $value;
    }

    /**
     * @param $value
     */
    public function setWebsitePublicKey($value)
    {
        $this->websitePublicKey = $value;
    }


}
