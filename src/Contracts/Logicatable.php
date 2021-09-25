<?php

namespace Nidavellir\Abstracts\Contracts;

interface Logicatable
{
    public function validate(array $instructions);

    public function map(string $key);
}
