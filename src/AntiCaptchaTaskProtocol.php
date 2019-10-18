<?php

namespace CaptchaSolvers\AntiCaptcha;


/**
 * Interface AntiCaptchaTaskProtocol
 * @package CaptchaSolvers
 */
interface AntiCaptchaTaskProtocol
{

    /**
     * @return mixed
     */
    public function getPostData();

    /**
     * @return mixed
     */
    public function getTaskSolution();

}