<?php
/**
 * Created by PhpStorm.
 * User: hieul
 * Date: 10/5/18
 * Time: 10:10 AM
 */

namespace HieuLe\PhpSPF\Modifiers;


use HieuLe\PhpSPF\Level;

class ExpModifier extends AbstractModifier
{
    public function getName(): string
    {
        return "exp";
    }

    public function validate(Level $level)
    {
        // TODO: Implement validate() method.
    }
}