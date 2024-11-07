<?php
function validateContactForm($email, $name) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }
    if (empty($name)) {
        return "Name is required.";
    }
    return "Form is valid.";
}
echo validateContactForm("test@example.com", "John Doe");