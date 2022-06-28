 <!-- Modal  editar Perfil-->
 <div class="modal fade" id="editarPerfil" role="dialog" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content p-md-5 p-4">
             <form method="POST" action="{{ route('editProfile') }}" enctype="multipart/form-data">
                 @csrf
                 <div class="row m-0">
                     <div class="col-12 p-0 pb-4 mb-4 border-bottom">
                         <h2 class="m-0">Editar perfil </h2>
                     </div>

                     <div class="col-12 p-0 mb-3">
                         <label for="nombre">Nombre de usuario</label>
                         <input type="text" name="name" value="{{ @Auth::user()->name }}" id="" required
                             class="form-control">
                     </div>
                     <div class="col-12 p-0 mb-3">
                         <label for="nombre">Email</label>
                         <input type="email" name="email" id="" value="{{ @Auth::user()->email }}" required
                             class="form-control">
                     </div>


                     <div class="col-12 p-0 text-right mt-3 border-top pt-3">

                         <button type="submit" class="btn btn-primary">
                             Actualizar
                         </button>
                     </div>
                 </div>
             </form>

         </div>
     </div>
 </div>
 <!-- end Modal -->
