<?php

namespace Learnosity\Entities\QuestionTypes;

use Learnosity\Entities\BaseQuestionTypeAttribute;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.68.0","feedback":"v2.35.0","features":"v2.68.0"}
*/
class clozechemistry_response_container extends BaseQuestionTypeAttribute {
    protected $template;
    protected $height;
    protected $width;
    
    public function __construct(
            )
    {
            }

    /**
    * Get Template \
    *  \
    * @return string $template \
    */
    public function get_template() {
        return $this->template;
    }

    /**
    * Set Template \
    *  \
    * @param string $template \
    */
    public function set_template ($template) {
        $this->template = $template;
    }

    /**
    * Get Height \
    * The height of the cloze response containers including units. Example: "100px" \
    * @return string $height \
    */
    public function get_height() {
        return $this->height;
    }

    /**
    * Set Height \
    * The height of the cloze response containers including units. Example: "100px" \
    * @param string $height \
    */
    public function set_height ($height) {
        $this->height = $height;
    }

    /**
    * Get Width \
    * The width of the cloze response containers including units. Example: "100px" \
    * @return string $width \
    */
    public function get_width() {
        return $this->width;
    }

    /**
    * Set Width \
    * The width of the cloze response containers including units. Example: "100px" \
    * @param string $width \
    */
    public function set_width ($width) {
        $this->width = $width;
    }

    
}

