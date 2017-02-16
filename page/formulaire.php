

<form id="form1" name="form" method="post" action="index.php?page=formulaire&status=controler" >
   <fieldset class="fieldset">
      <legend><h3>Formulaire d'inscription</h3></legend>

      <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="text-right">Login :</label>
        </div>
        <div class="small-2 columns end">
          <input type="text" name="login" required>
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="text-right">Password :</label>
        </div>
        <div class="small-2 columns end">
          <input type="text" name="password" required>
        </div>
      </div>

      <div class="row">
        <div class="small-8 columns ">
          <div class="input-group-button">
            <input type="submit" class="button" value="Envoyer">
          </div>
        </div>
      </div>

    </fieldset>
</form>
