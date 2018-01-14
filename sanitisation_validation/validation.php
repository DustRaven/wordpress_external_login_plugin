<?php

function exlog_validate($value, $field_data) {
    $exlog_error_title = "Validation Error in field " . $field_data['field_name'] . ".<br> - ";
    if ($field_data['field_slug'] == "exlog_unspecified_role") {
        if (!(array_key_exists($value, exlog_get_wp_role_types()))) {
            add_settings_error(
                $field_data['field_slug'],           // setting title
                $field_data['field_slug'] . '_error',            // error ID
                $exlog_error_title . "Use the dropdown. Don't add your own values!",   // error message
                'error'                        // type of message
            );

            return get_option($field_data["field_slug"]);
        }
    };
    return $value;
}
