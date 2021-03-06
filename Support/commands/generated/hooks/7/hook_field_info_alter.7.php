/**
 * Implements hook_field_info_alter().
 */
function <?php print $basename; ?>_field_info_alter(&\$info) {
  ${1:// Add a setting to all field types.
  foreach (\$info as \$field_type => \$field_type_info) {
    \$info[\$field_type]['settings'] += array(
      'mymodule_additional_setting' => 'default value',
    );
  \}

  // Change the default widget for fields of type 'foo'.
  if (isset(\$info['foo'])) {
    \$info['foo']['default widget'] = 'mymodule_widget';
  \}}
}

$2