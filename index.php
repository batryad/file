<?php require_once 'form.php'?>
<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend>Formulaire</legend>
          <p>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le(s) fichier :</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" multiple />
              <input name="fichier" type="file" id="fichier_a_uploader"  />
              <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" multiple />
              <input name="fichier" type="file" id="fichier_a_uploader" />
              <input type="submit" name="submit" value="Uploader" />
              <input type="submit" name="rmv" value="Delete File"                                         />

          </p>
    </fieldset>
</form>
