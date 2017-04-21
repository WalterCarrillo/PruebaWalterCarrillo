<html>
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
</head>
<!--<body onload="getAllEstudiantes()">-->
<body  >
    <center>
        <br>
        <h1>Estudiantes</h1>
        <br>
          <!--Tabla de Redes-->
        <table id="tablaEstudiantes" style="width:70%" border='2' >
        </table>
          
          
          
             <section id="Recinto" class="works clearfix">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br>
                <h2>Recinto</h2> 
                <br>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>
                        
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar su estilo de aprendizaje usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div> 
            </div>
            <div class="container">
                <div class="row">  
                    <table>
                        <tr>
                            <td>Estilo:</td>
                            <td>
                                <select name="selectEstilo_Recinto" id="selectEstilo_Recinto">
                                    <option value="1">Acomodador</option>
                                    <option value="2">Asimilador</option>
                                    <option value="3">Convergente</option>
                                    <option value="4">Divergente</option>
                                </select>
                            </td>
                        </tr> 
                        <tr>
                            <td>Promedio:</td>
                            <td><input type="text"  id="txtPromedio_Recinto" name="txtPromedio_Recinto"  ></input></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <select name="selectSexo_Recinto" id="selectSexo_Recinto">
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>                            
                            <td><input value="CALCULAR" onclick="calcularRecinto()" type="submit"></td>
                            <td></td>
                        </tr>
                    </table> 
                    <table>
                            <tr>    
                                <td>Recinto:</td>
                                <td><input type="text"  id="txtrecintoRecinto" name="txtrecintoRecinto"  ></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar()"></td>
                            </tr>
                        </table>
                    <br><br><br><br><br><br>
                </div>
            </div> 
        </section>
          
          
          
          
    </center>
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/Controlador.js"></script>
</body>
</html>
