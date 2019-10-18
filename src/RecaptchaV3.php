<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class RecaptchaV3
 * @package CaptchaSolvers
 */
class RecaptchaV3 extends AntiCaptcha implements AntiCaptchaTaskProtocol
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
    private $pageAction;
    /**
     * @var
     */
    private $minScore;

    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"       => "RecaptchaV3TaskProxyless",
            "websiteURL" => $this->websiteUrl,
            "websiteKey" => $this->websiteKey,
            "minScore"   => $this->minScore,
            "pageAction" => $this->pageAction
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
    public function setPageAction($value)
    {
        $this->pageAction = $value;
    }

    /**
     * @param $value
     */
    public function setMinScore($value)
    {
        $this->minScore = $value;
    }

}
