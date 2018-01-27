<div
  class="option-container"
  data-exlog-conditionals="<?php echo htmlspecialchars(json_encode($form_field["conditionals"])); ?>"
  data-exlog-type="<?php echo $form_field["type"]; ?>"
>
  <h4><?php echo $form_field["field_name"]; ?></h4>
  <p><?php echo $form_field["field_description"]; ?></p>
  <select
    id="<?php echo $form_field["field_slug"]; ?>"
    name="<?php echo $form_field["field_slug"]; ?>">
    <?php foreach ($form_field["select_options"] as $key => $value) : ?>
      <option
          <?php if (get_option($form_field["field_slug"]) == $key) :?>
            selected="selected"
          <?php endif; ?>
        value="<?php echo $key; ?>"><?php echo $value; ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>
