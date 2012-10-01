<?php
/**
 * @file
 * Template file for theming_example_text_form
 *
 * The array $text_form_content contains the individual form components
 * To view them in the source html use this
 *
 * <?php print '<!--' . print_r($text_form_content, TRUE) . '-->'; ?>
 *
 * Putting the above print_r in your source will output the following :
 *
 * Array
(
  [text] => <div class="form-item form-type-textfield form-item-text">
    <label for="edit-text">Please input something! <span class="form-required" title="This field is required.">*</span></label>
    <input type="text" id="edit-text" name="text" value="" size="60" maxlength="128" class="form-text required" />
  </div>

    [submit] => <input type="submit" id="edit-submit" name="op" value="Go" class="form-submit" />
    [hidden] => <input type="hidden" name="form_build_id" value="form-6GjShkRcOCY5f63KllhYe15Q0PS5JHpV84mD85QkLHw" />
      <input type="hidden" name="form_token" value="eyx4M5Jih0Oxyovm8z6dFQGKUNKIWTJgPF4VWjb5ZKE" />
      <input type="hidden" name="form_id" value="theming_example_text_form" />
)
 *
 */
?>
<?php print '<!-- text_form_content' . print_r($text_form_content, TRUE) . '-->'; ?>
<!-- theming_example_text_form template -->
<div class="container-inline">
<?php  print $text_form; ?>
</div>
<!-- /theming_example_text_form template -->
