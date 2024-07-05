<?php

declare(strict_types=1);
function error($errors, $field)
{
    if (isset($errors[$field])) {
        if (is_array($errors[$field])) {
            foreach ($errors[$field] as $error) {
                echo '<small class="error">' . htmlspecialchars($error) . '</small><br>';
            }
        } else {
            echo '<small class="error">' . htmlspecialchars($errors[$field]) . '</small>';
        }
    }
}
