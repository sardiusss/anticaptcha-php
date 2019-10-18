<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class GeeTestProxyless
 * @package CaptchaSolvers
 */
class GeeTestProxyless extends AntiCaptcha implements AntiCaptchaTaskProtocol
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
     * @return array|mixed
     */
    public function getPostData()
    {
        $set = [
            "type"                      => "GeeTestTaskProxyless",
            "websiteURL"                => $this->websiteUrl,
            "geetestApiServerSubdomain" => $this->geetestApiServerSubdomain,
            "gt"                        => $this->websiteKey,
            "challenge"                 => $this->websiteChallenge
        ];
        return $set;
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
    public function setAPISubdomain($value)
    {
        $this->geetestApiServerSubdomain = $value;
    }

}
