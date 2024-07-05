<?php

declare(strict_types=1);
function error($errors, $field)
{
    if (isset($errors[$field])) {
        if (is_array($errors[$field])) {
            foreach ($errors[$field] as $error) {
                echo '<small class="error" style="color: red; font-size:10px; margin:0;padding:0px;">' . htmlspecialchars($error) . '</small><br>';
            }
        } else {
            echo '<small class="error" style="color: red;font-size:10px; margin:0;padding:0px">' . htmlspecialchars($errors[$field]) . '</small>';
        }
    }
}
