<div class="modal fade bd-example-modal-sm" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>
                <button class="close" type="button"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
                    <form action="../controladores/guardaractividad.php" method="POST"> 
                        <div class="modal-body ">  

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label  for="selectSm">Nombre</label>
                                    <input type="text" id="Nombre" name="Nombre" class="form-control" >
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="selectSm">Estado</label>
                                    <select class="form-control" id="Estado" name="Estado">
                                                    <option selected>Elegir...</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select> 
                                </div> <br><br><br><br><br><br>                     
                            </div>

                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary"  type="submit">Guardar</button>
                        </div>
                    </form>

            </div>
            </div>
            
</div>