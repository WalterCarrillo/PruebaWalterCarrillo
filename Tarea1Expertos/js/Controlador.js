/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
//  
//Función para obtener todas las redes
function getAllRedes() {
    $("#tablaRedes").fadeOut('fast');
    $.post("../Business/RedBusiness.php", {
        action: "getAllRedes"
    }, function(data) {
        alert(data);
        var datos = JSON.parse(data);
//      /*se le agrega el encabezado a la tabla*/ 
        var innerHtml = ("<tr><td><b>Id</b></td><td><b>Confiabilidad</b></td><td><b>Numero Links</b></td><td><b>Capacidad</b></td>\n\
        <td><b>Costo</b></td><td><b>Clase</b></td></tr>");
        $.each(datos, function(i, item) {
            alert(item.idRed);
            innerHtml += (
                    "<tr><td>" + item.idRed + "</td>" +
                    "<td>" + item.confiabilidadRed + "</td>" +
                    "<td>" + item.numeroLinksRed + "</td>" +
                    "<td>" + item.capacidadRed + "</td>" +
                    "<td>" + item.costoRed + "</td>" +
                    "<td>" + item.claseRed + "</td></tr>"
                    );
        });
        $("#tablaRedes").html(innerHtml);
        $("#tablaRedes").fadeIn('slow');
    });
}

//Función para obtener todos los profesores
function getAllProfesores() {
    $("#tablaProfesores").fadeOut('fast');
    $.post("../Business/ProfesorBusiness.php", {
        action: "getAllProfesores"
    }, function(data) {
        alert(data);
        var datos = JSON.parse(data);
//      /*se le agrega el encabezado a la tabla*/ 
        var innerHtml = ("<tr><td><b>Id</b></td><td><b>Edad</b></td><td><b>Genero</b></td><td><b>Autoevaluación</b></td><td><b>Cantidad Curso</b></td>\n\
        <td><b>Especialización</b></td><td><b>Habilidades</b></td><td><b>Experiencia Enseñanza</b></td><td><b>Experiencia Web</b></td><td><b>Clase</b></td></tr>");
        $.each(datos, function(i, item) {
            innerHtml += (
                    "<tr><td>" + item.idProfesor + "</td>" +
                    "<td>" + item.edadProfesor + "</td>" +
                    "<td>" + item.generoProfesor + "</td>" +
                    "<td>" + item.autoevaluacionProfesor + "</td>" +
                    "<td>" + item.cantidadCursoProfesor + "</td>" +
                    "<td>" + item.especializacionProfesor + "</td>" +
                    "<td>" + item.habilidadesProfesor + "</td>" +
                    "<td>" + item.experienciaEnseñanzaProfesor + "</td>" +
                    "<td>" + item.experienciaWebProfesor + "</td>" +
                    "<td>" + item.claseProfesor + "</td></tr>"
                    );
        });
        $("#tablaProfesores").html(innerHtml);
        $("#tablaProfesores").fadeIn('slow');
    });
}

//Función para obtener todos los estilos
function getAllEstilos() {
    $("#tablaEstilos").fadeOut('fast');
    $.post("../Business/EstiloBusiness.php", {
        action: "getAllEstilos"
    }, function(data) {
        alert(data);
        var datos = JSON.parse(data);
//      /*se le agrega el encabezado a la tabla*/ 
        var innerHtml = ("<tr><td><b>Id</b></td><td><b>Recinto</b></td><td><b>Columna CA</b></td><td><b>Columna EC</b></td><td><b>Columna EA</b></td>\n\
        <td><b>Columna OR</b></td><td><b>Eje Vertical CA-EC</b></td><td><b>Eje Horizontal EA-OR</b></td><td><b>Estilo</b></td></tr>");
        $.each(datos, function(i, item) {
            innerHtml += (
                    "<tr><td>" + item.idEstilo + "</td>" +
                    "<td>" + item.recintoEstilo + "</td>" +
                    "<td>" + item.columnaCAEstilo + "</td>" +
                    "<td>" + item.columnaECEstilo + "</td>" +
                    "<td>" + item.columnaEAEstilo + "</td>" +
                    "<td>" + item.columnaOREstilo + "</td>" +
                    "<td>" + item.ejeVerticalCA_ECEstilo + "</td>" +
                    "<td>" + item.ejeHorizontalEA_OREstilo + "</td>" + 
                    "<td>" + item.Estilo + "</td></tr>"
                    );
        });
        $("#tablaEstilos").html(innerHtml);
        $("#tablaEstilos").fadeIn('slow');
    });
}

//Función para obtener todos los estudiantes
function getAllEstudiantes() {
    $("#tablaEstudiantes").fadeOut('fast');
    $.post("../Business/EstudianteBusiness.php", {
        action: "getAllEstudiantes"
    }, function(data) {
        alert(data);
        var datos = JSON.parse(data);
//      /*se le agrega el encabezado a la tabla*/ 
        var innerHtml = ("<tr><td><b>Id</b></td><td><b>Sexo</b></td><td><b>Recinto</b></td><td><b>Promedio</b></td><td><b>Columna CA</b></td><td><b>Columna EC</b></td>\n\
    <td><b>Columna EA</b></td><td><b>Columna OR</b></td><td><b>Eje Vertical CA-EC</b></td><td><b>Eje Horizontal EA-OR</b></td><td><b>Estilo</b></td></tr>");
        $.each(datos, function(i, item) {
            innerHtml += (
                    "<tr><td>" + item.idEstudiante + "</td>" +
                    "<td>" + item.sexoEstudiante + "</td>" +
                    "<td>" + item.recintoEstudiante + "</td>" +
                    "<td>" + item.promedioEstudiante + "</td>" +
                    "<td>" + item.columnaCAEstudiante + "</td>" +
                    "<td>" + item.columnaECEstudiante + "</td>" +
                    "<td>" + item.columnaEAEstudiante + "</td>" +
                    "<td>" + item.columnaOREstudiante + "</td>" +
                    "<td>" + item.ejeVerticalCA_ECEstudiante + "</td>" +
                    "<td>" + item.ejeHorizontalEA_OREstudiante + "</td>" + 
                    "<td>" + item.estiloEstudiante + "</td></tr>"
                    );
        });
        $("#tablaEstudiantes").html(innerHtml);
        $("#tablaEstudiantes").fadeIn('slow');
    });
}

//Función para calcular el Estilo de aprendizaje segun el primer form
function calcularEstilo(){
    var columnaEC = parseInt($("#c5").val())+parseInt($("#c9").val())+
             parseInt($("#c13").val())+parseInt($("#c17").val())+
             parseInt($("#c25").val())+parseInt($("#c29").val());
    
    var columnaOR = parseInt($("#c2").val())+parseInt($("#c10").val())+
             parseInt($("#c22").val())+parseInt($("#c26").val())+
             parseInt($("#c30").val())+parseInt($("#c34").val());
    
    var ColumnaCA = parseInt($("#c7").val())+parseInt($("#c11").val())+
             parseInt($("#c15").val())+parseInt($("#c19").val())+
             parseInt($("#c31").val())+parseInt($("#c35").val());
    
    var columnaEA = parseInt($("#c4").val())+parseInt($("#c12").val())+
             parseInt($("#c24").val())+parseInt($("#c28").val())+
             parseInt($("#c32").val())+parseInt($("#c36").val());

    var ejeCAEC = ColumnaCA - columnaEC;
    var ejeEAOR = columnaEA - columnaOR;    
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var estilo = 0;
    
    $.post("Business/EstiloBusiness.php", {
        action: "getAllEstilos"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {

            suma += Math.pow((parseInt(item.recintoEstilo)) - (parseInt($("#selectRecinto").val())), 2);
            suma += Math.pow(parseInt(item.columnaCAEstilo) - ColumnaCA, 2);
            suma += Math.pow(parseInt(item.columnaECEstilo) - columnaEC, 2);
            suma += Math.pow(parseInt(item.columnaEAEstilo) - columnaEA, 2);
            suma += Math.pow(parseInt(item.columnaOREstilo) - columnaOR, 2);
            suma += Math.pow(parseInt(item.ejeVerticalCA_ECEstilo) - ejeCAEC, 2);
            suma += Math.pow(parseInt(item.ejeHorizontalEA_OREstilo) - ejeEAOR, 2);

            temp = Math.sqrt(suma);
            
            if (temp <= min) {
                min = temp;
                estilo = item.Estilo;
            }
            suma = 0;
            
        });
        if(parseInt(estilo) === 1){
            $("#txtEstilo").val("Acomodador");
        }else if(parseInt(estilo) === 2){
            $("#txtEstilo").val("Asimilador");
        }else if(parseInt(estilo) === 3){
            $("#txtEstilo").val("Covergente");
        }else if(parseInt(estilo) === 4){
            $("#txtEstilo").val("Divergente");
        }
    }); 
    
    $("#txtCA").val(ColumnaCA);
    $("#txtEC").val(columnaEC);
    $("#txtEA").val(columnaEA);
    $("#txtOR").val(columnaOR);
    $("#txtCA_EC").val(ejeCAEC);
    $("#txtEA_OR").val(ejeEAOR); 
}

//Función para calcular el recinto de un estudiante
function calcularRecinto(){ 
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var recinto = 0;
    
    $.post("Business/EstudianteBusiness.php", {
        action: "getAllEstudiantes"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {

            suma += Math.pow((parseInt(item.estiloEstudiante)) - (parseInt($("#selectEstilo_Recinto").val())), 2);
            suma += Math.pow((parseInt(item.sexoEstudiante)) - (parseInt($("#selectSexo_Recinto").val())), 2);
            suma += Math.pow((parseInt(item.promedioEstudiante)) - (parseFloat($("#txtPromedio_Recinto").val())), 2);  
            temp = Math.sqrt(parseFloat(suma));  
            if (temp <= min) {
                min = temp;
                recinto = item.recintoEstudiante;
            }
            suma = 0;
        }); 
        if(parseInt(recinto) === 1){
            $("#txtrecintoRecinto").val("Paraiso");
        }else if(parseInt(recinto) === 2){
            $("#txtrecintoRecinto").val("Turrialba");
        }
    });  
}

//Función para calcular el sexo de un estudiante
function calcularSexo(){ 
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var sexo = 0;
    
    $.post("Business/EstudianteBusiness.php", {
        action: "getAllEstudiantes"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {

            suma += Math.pow((parseInt(item.estiloEstudiante)) - (parseInt($("#selectEstilo_Recinto").val())), 2);
            suma += Math.pow((parseInt(item.promedioEstudiante)) - (parseFloat($("#txtPromedio_Sexo").val())), 2);
            suma += Math.pow((parseInt(item.recintoEstudiante)) - (parseInt($("#selectRecinto_Sexo").val())), 2);  
            temp = Math.sqrt(suma);  
            if (temp <= min) {
                min = temp;
                sexo = item.sexoEstudiante;
            }
            suma = 0;
        }); 
        if(parseInt(sexo) === 1){
            $("#txtsexoRecinto").val("Femenino");
        }else if(parseInt(sexo) === 2){
            $("#txtsexoRecinto").val("Masculino");
        }
    });  
}

//Función para calcular el estilo de un estudiante
function calcularEstilo2(){ 
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var estilo2 = 0;
    
    $.post("Business/EstudianteBusiness.php", {
        action: "getAllEstudiantes"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {

            suma += Math.pow((parseInt(item.sexoEstudiante)) - (parseInt($("#selectSexo_Estilo2").val())), 2);
            suma += Math.pow((parseInt(item.promedioEstudiante)) - (parseFloat($("#txtPromedio_Estilo2").val())), 2);
            suma += Math.pow((parseInt(item.recintoEstudiante)) - (parseInt($("#selectRecinto_Estilo2").val())), 2);  
            temp = Math.sqrt(suma);  
            if (temp <= min) {
                min = temp;
                estilo2 = item.estiloEstudiante;
            }
            suma = 0;
        }); 
        if(parseInt(estilo2) === 1){
            $("#txtEstilo2").val("Acomodador");
        }else if(parseInt(estilo2) === 2){
            $("#txtEstilo2").val("Asimilador");
        }else if(parseInt(estilo2) === 3){
            $("#txtEstilo2").val("Convergente");
        }else if(parseInt(estilo2) === 4){
            $("#txtEstilo2").val("Divergente");
        }
    });  
}

//Función para calcular la calse de un profesor
function calcularProfesor(){ 
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var profesor = 0;
    
    $.post("Business/ProfesorBusiness.php", {
        action: "getAllProfesores"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {
            suma += Math.pow((parseInt(item.edadProfesor)) - (parseInt($("#selectEdad_Profesor").val())), 2);
            suma += Math.pow((parseInt(item.generoProfesor)) - (parseInt($("#selectSexo_Profesor").val())), 2);
            suma += Math.pow((parseInt(item.autoevaluacionProfesor)) - (parseInt($("#selectAutoevaluacion").val())), 2);  
            suma += Math.pow((parseInt(item.cantidadCursoProfesor)) - (parseInt($("#selectCantidadCurso").val())), 2);  
            suma += Math.pow((parseInt(item.especializacionProfesor)) - (parseInt($("#selectEspecializacion").val())), 2);  
            suma += Math.pow((parseInt(item.habilidadesProfesor)) - (parseInt($("#selectHabilidades").val())), 2);  
            
//            suma += Math.pow((parseInt(item.experienciaEnseñanzaProfesor)) - (parseInt($("#selectExpEnseñanza").val())), 2);  
//            suma += Math.pow((parseInt(item.experienciaWebProfesor)) - (parseInt($("#selectExpWeb").val())), 2);  
            
            temp = Math.sqrt(suma); 
   
            if (temp <= min) {
                min = temp;
                profesor = item.claseProfesor;
            }
            suma = 0;
        }); 
        if(parseInt(profesor) === 1){
            $("#txtClaseProfesor").val("Principiante");
        }else if(parseInt(profesor) === 2){
            $("#txtClaseProfesor").val("Intermedio");
        }else if(parseInt(profesor) === 3){
            $("#txtClaseProfesor").val("Avanzado");
        }
    });  
}

//Función para calcular la calse de una red
function calcularRed(){ 
    var temp = 0;
    var min = 999999;
    var suma = 0;
    var red = 0;
    
    $.post("Business/RedBusiness.php", {
        action: "getAllRedes"
    }, function(data) {
        var datos = JSON.parse(data);
         $.each(datos, function(i, item) {
            suma += Math.pow((parseInt(item.confiabilidadRed)) - (parseInt($("#txtConfiabilidad").val())), 2);
            suma += Math.pow((parseInt(item.numeroLinksRed)) - (parseInt($("#txtEnlaces").val())), 2);
            suma += Math.pow((parseInt(item.capacidadRed)) - (parseInt($("#selectCapacidad").val())), 2);  
            suma += Math.pow((parseInt(item.costoRed)) - (parseInt($("#selectCosto").val())), 2);     
            
            temp = Math.sqrt(suma); 
   
            if (temp <= min) {
                min = temp;
                red = item.claseRed;
            }
            suma = 0;
        });  
        if(parseInt(red) === 1){
            $("#txtClaseRed").val("B");
        }else if(parseInt(red) === 2){
            $("#txtClaseRed").val("A");
        }
    });  
}


function refresh(){
        location.reload(true);
}

// Funciones para limpiar las cajas de texto 
// ****************************************************************************** //
function limpiar(){
    $("#txtEC").val("");
    $("#txtCA").val("");
    $("#txtEA").val("");
    $("#txtOR").val("");
    $("#txtCA_EC").val("");
    $("#txtEA_OR").val("");
    $("#txtEstilo").val("");
    $("#recinto").val("");
}

function limpiar2(){
    $("#txtPromedio_Recinto").val("");
    $("#txtrecintoRecinto").val(""); 
}

function limpiar3(){
    $("#txtsexoRecinto").val("");
    $("#txtPromedio_Sexo").val(""); 
}

function limpiar4(){
    $("#txtPromedio_Estilo2").val("");
    $("#txtEstilo2").val(""); 
}

function limpiar5(){
    $("#txtClaseProfesor").val(""); 
}

function limpiar6(){
    $("#txtConfiabilidad").val(""); 
    $("#txtEnlaces").val(""); 
    $("#txtClaseRed").val(""); 
}

// ****************************************************************************** //
