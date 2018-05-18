<html>
<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>
        <input type="text" name="username" placeholder="username" >
        <input type="email" name="email" placeholder="email" >
        <input type="number" name="number" placeholder="number">
        <button type="submit" name="submit">Simpan</button>
<?php echo form_close(); ?>
</html>

