<?php

$EXLOG_OPTION_FIELDS = array(
    array(
        "section_name" => "Database Connection",
        "section_slug" => "database_connection",
        "section_description" => "These settings are for connecting to the database.",
        "section_fields" => array(
            array(
                "field_name" => "Database Name",
                "field_description" => "This is the name of the database to connect to.",
                "field_slug" => "external_login_option_db_name",
                "type" => "text",
            ),
            array(
                "field_name" => "Database Host",
                "field_description" => "This is the database host. This may well be 'localhost'",
                "field_slug" => "external_login_option_db_host",
                "type" => "text",
            ),
            array(
                "field_name" => "Database Username",
                "field_description" => "The username for the account to access the database.",
                "field_slug" => "external_login_option_db_username",
                "type" => "text",
            ),
            array(
                "field_name" => "Database Password",
                "field_description" => "The password for the account to access the database.",
                "field_slug" => "external_login_option_db_password",
                "type" => "text",
            ),
        ),
    ),
    array(
        "section_name" => "Password Hashing",
        "section_slug" => "password_hashing",
        "section_description" => "These settings specify how the password has been hashed in the external database.",
        "section_fields" => array(
            array(
                "field_name" => "Hash Type",
                "field_description" => "The hashing algorithm used. The standard one used by Wordpress is bcrypt.",
                "field_slug" => "external_login_option_hash_algorithm",
                "type" => "select",
                "select_options" => array(
                    "bcrypt" => "bcrypt",
                    "md2" => "md2",
                    "md4" => "md4",
                    "md5" => "md5",
                    "sha1" => "sha1",
                    "sha256" => "sha256",
                    "sha384" => "sha384",
                    "sha512" => "sha512",
                    "ripemd128" => "ripemd128",
                    "ripemd160" => "ripemd160",
                    "ripemd256" => "ripemd256",
                    "ripemd320" => "ripemd320",
                    "whirlpool" => "whirlpool",
                    "tiger128,3" => "tiger128,3",
                    "tiger160,3" => "tiger160,3",
                    "tiger192,3" => "tiger192,3",
                    "tiger128,4" => "tiger128,4",
                    "tiger160,4" => "tiger160,4",
                    "tiger192,4" => "tiger192,4",
                    "snefru" => "snefru",
                    "gost" => "gost",
                    "adler32" => "adler32",
                    "crc32" => "crc32",
                    "crc32b" => "crc32b",
                    "haval128,3" => "haval128,3",
                    "haval160,3" => "haval160,3",
                    "haval192,3" => "haval192,3",
                    "haval224,3" => "haval224,3",
                    "haval256,3" => "haval256,3",
                    "haval128,4" => "haval128,4",
                    "haval160,4" => "haval160,4",
                    "haval192,4" => "haval192,4",
                    "haval224,4" => "haval224,4",
                    "haval256,4" => "haval256,4",
                    "haval128,5" => "haval128,5",
                    "haval160,5" => "haval160,5",
                    "haval192,5" => "haval192,5",
                    "haval224,5" => "haval224,5",
                    "haval256,5" => "haval256,5",
                )
            ),
            array(
                "field_name" => "Salt Location",
                "field_description" => "Whether the salt is concatenated before or after the password. This is ignored if bcrypt is chosen as the salt will be stored within the hash.",
                "field_slug" => "external_login_option_db_salt_location",
                "type" => "select",
                "select_options" => array(
                    "none" => "No Salt",
                    "before" => "Salt Before",
                    "after" => "Salt After"
                )
            ),
            array(
                "field_name" => "Password Salt",
                "field_description" => "The salt used when hashing the password. If no salt is specified above this will have no effect. This is ignored if bcrypt is chosen as the salt will be stored within the hash.",
                "field_slug" => "external_login_option_db_salt",
                "type" => "text",
            ),
        ),
    ),
    array(
        "section_name" => "Database Table Mapping",
        "section_slug" => "database_table_mapping",
        "section_description" => "These settings are for mapping the data in your users table with that that will be stored in this WordPress database.",
        "section_fields" => array(
            array(
                "field_name" => "Table Name",
                "field_description" => "The name of the table that stores your users.",
                "field_slug" => "exlog_dbstructure_table",
                "type" => "text",
            ),
            array(
                "field_name" => "Username Field Name",
                "field_description" => "This is the name of the field that stores your users' username or other unique ID. It MUST be unique.",
                "field_slug" => "exlog_dbstructure_username",
                "type" => "text",
            ),
            array(
                "field_name" => "Password Field Name",
                "field_description" => "This is the name of the field that stores your users' hashed passwords.",
                "field_slug" => "exlog_dbstructure_password",
                "type" => "text",
            ),
            array(
                "field_name" => "First Name Field Name",
                "field_description" => "This is the name of the field that stores your users' first name.",
                "field_slug" => "exlog_dbstructure_first_name",
                "type" => "text",
            ),
            array(
                "field_name" => "Last Name Field Name",
                "field_description" => "This is the name of the field that stores your users' last name.",
                "field_slug" => "exlog_dbstructure_last_name",
                "type" => "text",
            ),
            array(
                "field_name" => "Role Field Name",
                "field_description" => "This is the name of the field that stores your users' role. This could be admin, subscriber, etc.",
                "field_slug" => "exlog_dbstructure_role",
                "type" => "text",
            ),
        )
    ),
    array(
        "section_name" => "Roles Settings",
        "section_slug" => "role_settings",
        "section_description" => "These settings map roles from the external database to the WordPress one.",
        "section_fields" => array(
            array(
                "type" => "roles",
            ),
        ),
    ),
    array(
        "section_name" => "Feature Settings",
        "section_slug" => "feature_settings",
        "section_description" => "These settings are for functionality of the plugin.",
        "section_fields" => array(
            array(
                "field_name" => "Disable Local Login",
                "field_description" => "Tick this box if you want to disable the login attempt with the Wordpress Database if the external login fails.",
                "field_slug" => "external_login_option_disable_local_login",
                "type" => "checkbox",
            ),
        ),
    ),
);