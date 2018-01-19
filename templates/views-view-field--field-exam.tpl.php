<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php
$output = '<ul>';
$term = $row->field_field_term[0]['rendered']['#label'];
$year = $row->field_field_year[0]['rendered']['#markup'];
if (count($row->field_field_exam) > 1) {
    $count = 1;
    foreach($row->field_field_exam as &$file) {
        $link = $file['rendered']['#markup'];
        $output .= '<li><a href="';
        $output .= $link;
        $output .= '">Exam #';
        $output .= $count;
        $output .= ' for ';
        $output .= $term;
        $output .= ' ';
        $output .= $year;
        $output .= '</a></li>';
        $count = $count + 1;
    }
}
elseif (count($row->field_field_exam) == 1) {
    $output .= '<li><a href="';
    $output .= $row->field_field_exam[0]['rendered']['#markup'];
    $output .=  '">Exam for ';
    $output .= $term;
    $output .= ' ';
    $output .= $year;
    $output .= '</a></li>';
}

$output .= '</ul>';
print $output;
?>
