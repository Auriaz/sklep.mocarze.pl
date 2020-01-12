<form action="{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" method="post">
     <fieldset class="form-group">
          <textarea name="comment" id="comment" class="form-control" placeholder="Dodaj wiadomość" cols="30" rows="10" required></textarea>
     </fieldset>
     
     <button type="submit" class="btn btn-block btn-primary-outline">Wyślij</button>
</form>