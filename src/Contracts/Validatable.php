<?php

namespace Nidavellir\Abstracts\Contracts;

interface Validatable
{
    public function __construct(string $value);

    public function parse();

    public function validate();
}
