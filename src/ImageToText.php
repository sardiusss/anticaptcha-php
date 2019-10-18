<?php

namespace CaptchaSolvers\AntiCaptcha;

/**
 * Class ImageToText
 * @package CaptchaSolvers
 */
class ImageToText extends AntiCaptcha implements AntiCaptchaTaskProtocol
{

    /**
     * @var
     */
    private $body;
    /**
     * @var bool
     */
    private $phrase = false;
    /**
     * @var bool
     */
    private $case = false;
    /**
     * @var bool
     */
    private $numeric = false;
    /**
     * @var int
     */
    private $math = 0;
    /**
     * @var int
     */
    private $minLength = 0;
    /**
     * @var int
     */
    private $maxLength = 0;


    /**
     * @return array|mixed
     */
    public function getPostData()
    {
        return [
            "type"      => "ImageToTextTask",
            "body"      => str_replace("\n", "", $this->body),
            "phrase"    => $this->phrase,
            "case"      => $this->case,
            "numeric"   => $this->numeric,
            "math"      => $this->math,
            "minLength" => $this->minLength,
            "maxLength" => $this->maxLength
        ];
    }

    /**
     * @return mixed
     */
    public function getTaskSolution()
    {
        return $this->taskInfo->solution->text;
    }

    /**
     * @param $fileName
     *
     * @return bool
     */
    public function setFile($fileName)
    {

        if (file_exists($fileName)) {

            if (filesize($fileName) > 100) {
                $this->body = base64_encode(file_get_contents($fileName));
                return true;
            } else {
                $this->setErrorMessage("file $fileName too small or empty");
            }

        } else {
            $this->setErrorMessage("file $fileName not found");
        }
        return false;

    }

    /**
     * @param $value
     */
    public function setPhraseFlag($value)
    {
        $this->phrase = $value;
    }

    /**
     * @param $value
     */
    public function setCaseFlag($value)
    {
        $this->case = $value;
    }

    /**
     * @param $value
     */
    public function setNumericFlag($value)
    {
        $this->numeric = $value;
    }

    /**
     * @param $value
     */
    public function setMathFlag($value)
    {
        $this->math = $value;
    }

    /**
     * @param $value
     */
    public function setMinLengthFlag($value)
    {
        $this->minLength = $value;
    }

    /**
     * @param $value
     */
    public function setMaxLengthFlag($value)
    {
        $this->maxLength = $value;
    }

}
