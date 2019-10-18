<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class CustomCaptcha
 * @package CaptchaSolvers
 */
class CustomCaptcha extends AntiCaptcha implements AntiCaptchaTaskProtocol
{

    /**
     * @var
     */
    private $imageUrl;
    /**
     * @var
     */
    private $assignment;
    /**
     * @var
     */
    private $forms;

    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"       => "CustomCaptchaTask",
            "imageUrl"   => $this->imageUrl,
            "assignment" => $this->assignment,
            "forms"      => $this->forms
        ];
    }

    /**
     * @return mixed
     */
    public function getTaskSolution()
    {
        return $this->taskInfo->solution->answers;
    }

    /**
     * @param $value
     */
    public function setImageUrl($value)
    {
        $this->imageUrl = $value;
    }

    /**
     * @param $value
     */
    public function setAssignment($value)
    {
        $this->assignment = $value;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    public function setForms($value)
    {
        if (is_array($value)) {
            $this->forms = $value;
            return true;
        } else {
            $this->debout("form must be of type array", "red");
            return false;
        }
    }

}
