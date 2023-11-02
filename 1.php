<html>
    <head>
        <title>
            REGISTRO
        </title>
    </head>
    <body bgcolor=#D5F5E3>
        <form method="post">
        <?php error_reporting(0)?>
            <center><b>REGISTRO DE CLIENTES</b><br><br>
            <table border="0">
                <tr>
                    <td>Rut:</td>
                    <td><input type ="text" name="txtrut" value=""size="15"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="txtnom" value="" size="20"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type ="text" name="txtape" value=""size="20"></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento:</td>
                    <td><input type ="date" name="dfnac" value=""></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td><select name="txtsex">
                        <option value="slfem">Femenino</option>
                        <option value="slmasc">Masculino</option>
                    </select></td>
                </tr>
                <tr><td>Region:</td>
                    <td><select name="txtreg">
                    <option value="I">I REGION</option>
                        <option value="II">II REGION</option>
                        <option value="III">III REGION</option>
                        <option value="IV">IV REGION</option>
                        <option value="V">V REGION</option>
                        <option value="VI">VI REGION</option>
                        <option value="VII">VII REGION</option>
                        <option value="VIII">VIII REGION</option>
                        <option value="IX">IX REGION</option>
                        <option value="X">X REGION</option>
                        <option value="XI">XI REGION</option>
                        <option value="XII">XII REGION</option>
                        <option value="XIII">XIII REGION</option>
                        <option value="XIV">XIV REGION</option>
                        <option value="XV">XV REGION</option>
                        <option value="XVI">XVI REGION</option>

                    </select></td>
                </tr>
                <tr>
                    <td>Fono:</td>
                    <td><input type ="text" name="txtfon" value=""size="20"></td>
                </tr>
                <tr> 
                    <td><center><input type="submit" name="btnregistrar" value="Registrar"></td>
                </tr>
                
            </table>
        </form>

        <?php
                if ($_POST['btnregistrar']=="Registrar"){
                   
                include("funciones.php");
                $cnn=Conectar();
                $rut=$_POST['txtrut'];
                $nom=$_POST['txtnom'];
                $ape=$_POST['txtape'];
                $fnac=$_POST['dfnac'];
                $sex=$_POST['txtsex'];
                $reg=$_POST['txtreg'];
                $fono=$_POST['txtfon'];
                        
                $sql="INSERT INTO clientes VALUES('$rut','$nom','$ape','$fnac','$sex','$reg','$fono')";
                mysqli_query($cnn,$sql);
                echo "<script>alert('Se han grabado los datos')</script>";
                }
        ?>
        <br><br><br><br><br><br><a href="index.php">VOLVER</a>
    </body>
</html>