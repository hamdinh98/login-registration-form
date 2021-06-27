<?php


function validate_text($input)
{
    if (!empty($input)) {
        $no_space = trim($input);
        $no_spec_char = filter_var($no_space, FILTER_SANITIZE_STRING);
        return $no_spec_char;
    }
    return "";
}
