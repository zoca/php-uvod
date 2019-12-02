<!-- Tekstualna polja -->

<input type="text" name="fieldName" value="<?php echo isset($formData['fieldName']) ? htmlspecialchars($formData['fieldName']) : "";?>">

<textarea name="fieldName"><?php echo isset($formData['fieldName']) ? htmlspecialchars($formData['fieldName']) : "";?></textarea>



<!-- Polja sa izborom jedne vrednosti -->

<!-- SELECT -->
<select name="fieldName">
    <option 
        value="option1"
        <?php if(isset($formData['fieldName']) && $formData['fieldName'] == "option1") {?>
        selected="selected"
        <?php } ?>
    >Option1 Label</option>
    <option 
        value="option2"
        <?php if(isset($formData['fieldName']) && $formData['fieldName'] == "option2") {?>
        selected="selected"
        <?php } ?>
    >Option2 Label</option>
</select>
<!-- SELECT -->



<!-- RADIO BUTTON -->
<input 
    type="radio"
    name="fieldName" 
    value="option1"
    <?php if(isset($formData['fieldName']) && $formData['fieldName'] == "option1") {?>
    checked="checked"
    <?php } ?>
>
<label>Option1 Label</label>

<input 
    type="radio"
    name="fieldName" 
    value="option2"
    <?php if(isset($formData['fieldName']) && $formData['fieldName'] == "option2") {?>
    checked="checked"
    <?php } ?>
>
<label>Option2 Label</label>
<!-- RADIO BUTTON -->


<!-- Polja sa izborom vise vrednosti -->

<!-- CHECKBOX -->
<input 
    type="checkbox"
    name="fieldName[]"
    value="option1"
    <?php if(isset($formData['fieldName']) && is_array($formData['fieldName']) && in_array("option1", $formData['fieldName'])) {?>
    checked="checked"
    <?php } ?>
>
<label>Option1</label>

<input 
    type="checkbox"
    name="fieldName[]"
    value="option2"
    <?php if(isset($formData['fieldName']) && is_array($formData['fieldName']) && in_array("option2", $formData['fieldName'])) {?>
    checked="checked"
    <?php } ?>
>
<label>Option2</label>
<!-- CHECKBOX -->



<!-- Ispisivanje gresaka za jedno polje -->

<?php if (!empty($formErrors['fieldName'])) {?>
    <?php foreach($formErrors['fieldName'] as $errorMessage) {?>
    <div class="text-danger"><?php echo $errorMessage;?></div>
    <?php }?>
<?php }?>
