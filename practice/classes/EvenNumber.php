<?php

namespace HES;

class EvenNumber extends Number
{
    public function isValid()
    {
        $this->test();
        return is_numeric($this->num) and $this->num %2 == 0;
    }
}