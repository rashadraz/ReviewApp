<?php

namespace App\Enums;

class QuestionTypeEnum
{
    public const TEXT = 'text';
    public const TEXTAREA = 'textarea';
    public const SELECT = 'select';
    public const RADIO = 'radio';
    public const CHECKBOX = 'checkbox';

    public static function values()
    {
        return [
            self::TEXT,
            self::TEXTAREA,
            self::SELECT,
            self::RADIO,
            self::CHECKBOX,
        ];
    }
}