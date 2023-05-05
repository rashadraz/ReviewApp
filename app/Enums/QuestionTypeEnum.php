<?php 

namespace App\Enums;


enum QuestionTypeEnum: string

{
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
}
