<?php

namespace Learnosity\Entities\QuestionTypes;

use Learnosity\Entities\BaseQuestionTypeAttribute;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.68.0","feedback":"v2.35.0","features":"v2.68.0"}
*/
class plaintext_ui_style extends BaseQuestionTypeAttribute {
    protected $fontsize;
    protected $min_height;
    protected $max_height;
    
    public function __construct(
            )
    {
            }

    /**
    * Get Font size \
    * Controls the size of base font for this question. Options are among 'small', 'normal', 'large', 'xlarge' and 'xxlarge'. \
    * @return string $fontsize ie. small, normal, large, xlarge, xxlarge  \
    */
    public function get_fontsize() {
        return $this->fontsize;
    }

    /**
    * Set Font size \
    * Controls the size of base font for this question. Options are among 'small', 'normal', 'large', 'xlarge' and 'xxlarge'. \
    * @param string $fontsize ie. small, normal, large, xlarge, xxlarge  \
    */
    public function set_fontsize ($fontsize) {
        $this->fontsize = $fontsize;
    }

    /**
    * Get Min height \
    * The minimum height of the text input including units. Example: "100px" \
    * @return string $min_height \
    */
    public function get_min_height() {
        return $this->min_height;
    }

    /**
    * Set Min height \
    * The minimum height of the text input including units. Example: "100px" \
    * @param string $min_height \
    */
    public function set_min_height ($min_height) {
        $this->min_height = $min_height;
    }

    /**
    * Get Max height \
    * The max height of the text input including units. Example: "100px" \
    * @return string $max_height \
    */
    public function get_max_height() {
        return $this->max_height;
    }

    /**
    * Set Max height \
    * The max height of the text input including units. Example: "100px" \
    * @param string $max_height \
    */
    public function set_max_height ($max_height) {
        $this->max_height = $max_height;
    }

    
}

