<?php

/**
 * Acción para exportar solicitudes a xls
 *
 * @author Marcos
 * @since 17-05-2023
 *
 */
class DescargarManualAction extends CdtAction{


     public function execute(){
          //CdtDbManager::begin_tran();

         $layout =  new CdtLayoutPdfExterno();
        /* $nombre = date(CYT_DATETIME_FORMAT_STRING).'_'.CYT_LBL_SOLICITUD_XLS_NOMBRE;
         $layout->setNombreArchivo($nombre);*/

         try{

             $layout->setFilename("https://secyt.presi.unlp.edu.ar/cyt_htm/manual_jovenes_investigadores_evaluador2023.pdf");

             //armamos el layout.





         }catch(GenericException $ex){
             //capturamos la excepción y la parseamos en el layout.
             $layout->setException( $ex );

         }

         //mostramos la salida formada por el layout.
         echo $layout->show();

         //no hay forward.
         $forward = null;

         return $forward;
     }

}
