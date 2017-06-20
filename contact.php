
      <div class="row">
      <div class="col-sm-8">
      <form name="contact-form" method="post" action="enviar.php">
        <table width="450px">
        <tr>
        <td valign="top">
        <label for="first_name">Nombre</label>
        </td>
        <td valign="top">
        <input  type="text" name="first_name" maxlength="50" size="30">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="last_name">Apellido</label>
        </td>
        <td valign="top">
        <input  type="text" name="last_name" maxlength="50" size="30">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="email">Email * </label>
        </td>
        <td valign="top">
        <input  type="text" name="email" maxlength="80" size="30">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="telephone">Teléfono</label>
        </td>
        <td valign="top">
        <input  type="text" name="telephone" maxlength="30" size="30">
        </td>
        </tr>
        <tr>
          <div class="span4">
          <td valign="top">
          <label for="comments">Comentario * </label>
          </td>
          <td valign="top">
          <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
          </td>
          </div>
        </tr>

          <td colspan="12" style="text-align:center">
          <form>

          <div class="actions">
          <a href="#" class="save-button btn large primary">Enviar &raquo;</a>

          <!-- Hide the real submit button /-->
          <input type="submit" class="hidden">
          </div>

          </form>

          <div id="my-modal" class="modal hide fade">
          <div class="modal-header">
            <a href="#" class="close">&times;</a>
            <h3>Hola! nos comunicaremos contigo dentro de las próximas horas. </h3>
          </div>
          <div class="modal-body">
            <p>You haven&rsquo;t selected any options.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="okay-button btn primary">Cerrar&raquo;</a>
          </div>
          </div> <!-- /modal -->
          </td>






        <!-- inicio del modal
        <td colspan="12" style="text-align:center">
        <input type="submit" value="Submit">
        </td>

        <div class="modal fade" tabindex="-7" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Gracias!</h1>
              </div>
              <div class="modal-body">
                <h1>Hola! gracias por ponerte en contacto con nosotros, nos comunicaremos contigo dentro de las próximas horas. &hellip;</h1>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              </div>
            </div> /.modal-content
          </div> /.modal-dialog
        </div>/ modal -->



        </table>
      </form>
      </div><!--/col-sm-12-->
      </div><!--/row-->
