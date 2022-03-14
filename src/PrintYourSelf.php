<?php
namespace vloop\PrintYourSelf;

interface PrintYourSelf
{
    /**
     * @return array - printing self as array, for frontend.
     *               or represents an object as an array
     */
    public function printYourSelf(): array;
}