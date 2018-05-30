<?php

namespace structural\bridge;

class Printer implements PrinterInterface {
    private $array;
    private $string;

    public function setArray(array $array)
    {
        $this->array = $array;
        return $this;
    }

    public function setString(string $string)
    {
        $this->string = $string;
        return $this;
    }

    public function printArray()
    {
        $output = "";
        if (!empty($this->array))
        {
            $output = "[";
            foreach ($this->array as $key => $value) {
                $output .= $value;
                if ($key < count($this->array)-1) {
                    $output .= ",";
                }
            }
            $output .= "]";
        }

        return $output;
    }

    public function printString()
    {
        return $this->string;
    }

    public function printer()
    {
        if (!empty($this->array)) {
            return "<br>" . $this->printArray();
        } elseif (!empty($this->string)) {
            return "<br>" . $this->printString();
        }
    }
}