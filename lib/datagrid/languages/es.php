<?php 
//------------------------------------------------------------------------------ 
//*** Espanol (es)
//------------------------------------------------------------------------------ 
function setLanguage(){ 
    $lang['='] = "=";  // "equal"; 
    $lang['>'] = ">";  // "bigger"; 
    $lang['<'] = "<";  // "smaller"; 
    $lang['add'] = "Agregar"; 
    $lang['add_new'] = "+ Agregar Nuevo"; 
    $lang['add_new_record'] = "Agregar nuevo registro";
    $lang['add_new_record_blocked'] = "Security check: attempt of adding a new record! Check your settings, the operation is not allowed!";    
    $lang['adding_operation_completed'] = "Agregado correctamente!"; 
    $lang['adding_operation_uncompleted'] = "Error al agregar registro!";
    $lang['alert_perform_operation'] = "Esta seguro de que desea llevar a cabo esta operacion?";
    $lang['alert_select_row'] = "Es necesario seleccionar una o mas filas para llevar a cabo esta operacion!";    
    $lang['and'] = "y"; 
    $lang['any'] = "cualquiera"; 
    $lang['ascending'] = "Ascendente"; 
    $lang['back'] = "Volver"; 
    $lang['cancel'] = "Cancelar"; 
    $lang['cancel_creating_new_record'] = "Esta Ud. seguro de querer cancelar la creacion del nuevo registro ?"; 
    $lang['check_all'] = "Seleccionar todo";
    $lang['clear'] = "Clear";
    $lang['click_to_download'] = "Haga clic para descargar";
    $lang['clone_selected'] = "Clone selected";
    $lang['cloning_record_blocked'] = "Security check: attempt of cloning a record! Check your settings, the operation is not allowed!";
    $lang['cloning_operation_completed'] = "The cloning operation completed successfully!";
    $lang['cloning_operation_uncompleted'] = "The cloning operation uncompleted!";
    $lang['create'] = "Crear"; 
    $lang['create_new_record'] = "Crear nuevo registro"; 
    $lang['current'] = "actual"; 
    $lang['delete'] = "Eliminar"; 
    $lang['delete_record'] = "Eliminar registro";
    $lang['delete_record_blocked'] = "Comprobacion de seguridad: El intento de eliminar un registro! Compruebe la configuracion, la operacion no esta permitido!";    
    $lang['delete_selected'] = "Eliminar seleccionados"; 
    $lang['delete_selected_records'] = "Esta Ud. seguro de eliminar los registros seleccionados?"; 
    $lang['delete_this_record'] = "Esta Ud. seguro de querer eliminar este registro?"; 
    $lang['deleting_operation_completed'] = "Operacion de borrado concluida satisfactoriamente!"; 
    $lang['deleting_operation_uncompleted'] = "Operacion de borrado incorrecta!"; 
    $lang['descending'] = "Descendente"; 
    $lang['details'] = "Detalles"; 
    $lang['details_selected'] = "Ver Seleccionados";
    $lang['download'] = "Descargar";    
    $lang['edit'] = "Editar"; 
    $lang['edit_selected'] = "Editar Seleccionados";
    $lang['edit_record'] = "Editar registro"; 
    $lang['edit_selected_records'] = "Esta seguro que desea editar los registros seleccionados?";   
    $lang['errors'] = "Errores"; 
    $lang['export_to_excel'] = "Exportar a Excel"; 
    $lang['export_to_pdf'] = "Exportar a PDF";
    $lang['export_to_xml'] = "Exportar a XML";     
    $lang['export_message'] = "<label class=\"default_dg_label\">El archivo _FILE_ esta listo. Despu&eacute;s de que usted termine la descarga</label> <a class=\"default_dg_error_message\" href=\"javascript: window.close();\">Cierre la ventana</a>."; 
    $lang['field'] = "Campo"; 
    $lang['field_value'] = "Valor del campo"; 
    $lang['file_find_error'] = "No se puede encontrar el archivo: <b>_FILE_</b>. <br>Verifique que el archivo existe y ud. esta usando el camino correcto!";
    $lang['file_opening_error'] = "No se puede abrir el archivo. Comprueba tus permisos!";
    $lang['file_extension_error'] = "File upload error: file extension not allowed for upload. Please select another file.";
    $lang['file_writing_error'] = "No se puede guardar el archivo. Comprueba tus permisos!"; 
    $lang['file_invalid_file_size'] = "Tama�o de archivo incorrecto"; 
    $lang['file_uploading_error'] = "Hubo un error mientras al intentar subir el archivo, por favor int&eacute;ntenlo de nuevo!"; 
    $lang['file_deleting_error'] = "Hubo un error mientras se borraba!";
    $lang['first'] = "primero";
    $lang['generate'] = "Generar";
    $lang['handle_selected_records'] = "Esta seguro que quiere manipular los registros seleccionados?";
    $lang['hide_search'] = "Ocultar Buscar"; 
    $lang['item'] = "tema";
    $lang['items'] = "i";
    $lang['last'] = "&uacute;ltimo"; 
    $lang['like'] = "like"; 
    $lang['like%'] = "like%";  // "begins with"; 
    $lang['%like'] = "%like";  // "ends with";
    $lang['%like%'] = "%like%";  
    $lang['loading_data'] = "Cargando informacion...";
    $lang['max'] = "max";
    $lang['move_down'] = "Bajar";
    $lang['move_up'] = "Subir";    
    $lang['move_operation_completed'] = "La operacion de fila en movimiento completado con exito!";
    $lang['move_operation_uncompleted'] = "La operacion de fila en movimiento sin terminar!";    
    $lang['next'] = "siguiente"; 
    $lang['no'] = "No"; 
    $lang['no_data_found'] = "No se han encontrado datos"; 
    $lang['no_data_found_error'] = "No se han encontrado datos! Por favor, comprueba atentamente la sintaxis de tu codigo!<br>Puede ser debido al uso incorrecto de May&uacute;sculas/min&uacute;sculas o a simbolos inesperados."; 
    $lang['no_image'] = "No hay Imagen";
    $lang['not_like'] = "no como"; 
    $lang['of'] = "de";
    $lang['operation_was_already_done'] = "La operacion ha sido ya completada! Usted no puede volver a intentar de nuevo.";            
    $lang['or'] = "o"; 
    $lang['pages'] = "p&aacuteginas";
    $lang['page_size'] = "Registros por p&aacutegina"; 
    $lang['previous'] = "Anterior"; 
    $lang['printable_view'] = "Vista imprimible"; 
    $lang['print_now'] = "Imprimir";    
    $lang['print_now_title'] = "Pulse aqui para imprimir esta p&aacutegina"; 
    $lang['record_n'] = "Registro #";
    $lang['refresh_page'] = "Refresh Page";
    $lang['remove'] = "Borrar";
    $lang['reset'] = "Limpiar";
    $lang['results'] = "Resultados"; 
    $lang['required_fields_msg'] = "Registros marcados con un <font color='#cd0000'>*</font> son requeridos";    
    $lang['search'] = "Buscar"; 
    $lang['search_d'] = "Buscar"; // (description) 
    $lang['search_type'] = "Tipo de b&uacute;squeda"; 
    $lang['select'] = "seleccionar"; 
    $lang['set_date'] = "Setee la fecha";
    $lang['sort'] = "Sort";    
    $lang['test'] = "Test";
    $lang['total'] = "Total";
    $lang['turn_on_debug_mode'] = "Para mas informacion habilite el modo debug.";
    $lang['uncheck_all'] = "Desmarcar todos";
    $lang['unhide_search'] = "Mostrar Busqueda";
    $lang['unique_field_error'] = "El campo _FIELD_ permite solamente valores enteros - por favor reingrese!";
    $lang['update'] = "Actualizar"; 
    $lang['update_record'] = "Actualizar registro";
    $lang['update_record_blocked'] = "Security check: attempt of updating a record! Check your settings, the operation is not allowed!";    
    $lang['updating_operation_completed'] = "Operacion de actualizar completada correctamente!"; 
    $lang['updating_operation_uncompleted'] = "Operacion de actualizar incorrecta!";
    $lang['upload'] = "Subir";
    $lang['uploaded_file_not_image'] = "El archivo subido no parece ser una imagen.";    
    $lang['view'] = "Vista"; 
    $lang['view_details'] = "Detalles de la vista"; 
    $lang['warnings'] = "Advertencias"; 
    $lang['with_selected'] = "Con los seleccionados";
    $lang['wrong_field_name'] = "nombre de campo incorrecto"; 
    $lang['wrong_parameter_error'] = "Parametro incorrecto <b>_FIELD_</b>: _VALUE_";
    $lang['yes'] = "Si";    

    // date-time
    $lang['day']    = "dia";
    $lang['month']  = "mes";
    $lang['year']   = "a�o";
    $lang['hour']   = "horas";
    $lang['min']    = "min";
    $lang['sec']    = "sec";
    $lang['months'][1] = "Enero";
    $lang['months'][2] = "Febrero";
    $lang['months'][3] = "marzo";
    $lang['months'][4] = "Abril";
    $lang['months'][5] = "Mayo";
    $lang['months'][6] = "Junio";
    $lang['months'][7] = "Julio";
    $lang['months'][8] = "Agosto";
    $lang['months'][9] = "Septiembre";
    $lang['months'][10] = "Octubre";
    $lang['months'][11] = "Noviembre";
    $lang['months'][12] = "Diciembre";
        
    return $lang; 
} 
?> 