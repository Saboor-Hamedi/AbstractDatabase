<?php

// Enforce strict types for better code reliability
declare(strict_types=1);

/**
 * Escapes special characters in a string to prevent them from being interpreted as HTML.
 * This helps prevent XSS vulnerabilities.
 *
 * @param mixed $value The value to be escaped.
 * @return string The escaped string.
 */
function escape(mixed $value): string
{
    // Escape special characters for HTML output
    return htmlspecialchars($value, ENT_QUOTES);
}

/**
 * Removes all HTML tags from a string.
 *
 * @param mixed $value The value from which to remove tags.
 * @return string The string without HTML tags.
 */
function removeTags($value): string
{
    // Strip all HTML tags from the string
    return strip_tags($value);
}
/**
 * Escapes special characters and removes HTML tags from a string.
 *
 * @param mixed $value The value to be processed.
 * @return string The processed string with escaped characters and no HTML tags.
 */
function escapeAndRemoveTags($value): string
{
    // Escape special characters and remove tags simultaneously
    return strip_tags(htmlspecialchars($value, ENT_QUOTES));
}
