<section id="content">


  <?php
//if(isset($_SESSION["session_nick"])){
// echo "Session is set"; // for testing purposes
//header("Location: intropage.php");
//}

if(isset($_POST["login"])){

if(!empty($_POST['nick']) && !empty($_POST['contraseña'])) {
    $nick=$_POST['nick'];
    $contraseña=$_POST['contraseña'];

    $query =mysqli_query($decimo,"SELECT * FROM registro WHERE nick='".$nick."' AND contraseña='".$contraseña."'");

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbnick=$row['nick'];
    $dbcontraseña=$row['contraseña'];
    }

    if($nick == $dbnick && $contraseña == $dbcontraseña)

    {


    $_SESSION['session_nick']=$nick;

    /* Redirect browser */
    header("Location: index.php");
    }
    } else {

 $message =  "Nombre de usuario ó contraseña invalida!";
    }

} else {
    $message = "Todos los campos son requeridos!";
}
}
?>


<pre class="wrapper"><strong>INGRESAR</strong> </pre>
<div class="container mlogin">
            <div id="login">

<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Nick<br />
        <input type="text" name="nick" id="nick" class="input" value="" size="20" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;"  /></label>
    </p>
    <p>
        <label for="user_pass">Pasword<br />
        <input type="contraseña" name="contraseña" id="contraseña" class="input" size="20" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Entrar" />
    </p>
        <p class="regtext">No estas registrado? Registrate </p>
</form>

    </div>

    </div>
    <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

  <p><strong>REGISTRO</strong> </p>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" class="color1">
    <table>
      <tr valign="baseline">
        <td nowrap align="right">Nombres:</td>
        <td><span id="sprytextfield1">
          <input type="text" name="nombres" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
          <span class="textfieldRequiredMsg">Campo Obligatorio</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Apellidos:</td>
        <td><span id="sprytextfield2">
          <input type="text" name="apellidos" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
          <span class="textfieldRequiredMsg">Campo Obligatorio</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Numerodocu:</td>
        <td><span id="sprytextfield3">
          <input type="text" name="numerodocu" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
          <span class="textfieldRequiredMsg">Campo Obligatorio</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nick:</td>
        <td><span id="sprytextfield4">
          <input type="text" name="nick" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
          <span class="textfieldRequiredMsg">Campo Obligatorio</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Tipo:</td>
        <td><select name="tipo">
          <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Docente</option>
          <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Estudiante</option>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Correo:</td>
        <td><span id="sprytextfield5">
        <input type="text" name="correo" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
        <span class="textfieldRequiredMsg">Campo Obligatorio</span><span class="textfieldInvalidFormatMsg">No es valido</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Contraseña:</td>
        <td><span id="sprytextfield6">
          <input type="password" name="contrasea" value="" size="32" style="border-width: 2px; border-style: solid; font-size:8pt; color: red; letter-spacing : 3px;" >
          <span class="textfieldRequiredMsg">Campo Obligatorio</span></span></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="REGISTAR"></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <script type="text/javascript">
  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
  var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
  var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
  var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
  var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
  </script>
  <article class="col2">
    <h3>Welcome to Science Lab!</h3>
    <p class="pad_bot2">
      ScienceLab is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1024X768 screen resolution. It is also XHTML & CSS valid.
    </p>
    <div class="wrapper pad_bot1">
      <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
      <p class="pad_bot2">
        This Free Science Website Template goes with two packages – with PSD source files and without them. Learn more about it <a target="_blank" href="http://blog.templatemonster.com/2011/02/21/free-science-website-template" rel="nofollow" >here</a>. PSD source files are available for free for the registered members of Templates. com. The basic package (without PSD source is available for anyone without registration).
      </p>
    </div>
    <p>
      This website template has several pages: <a href="index.html">Home</a>, <a href="Services.html">Services</a>, <a href="Researches.html">Researches</a>, <a href="Press.html">Press</a>, <a href="Contacts.html">Contacts</a> (note that contact us form – doesn’t work).
    </p>
  </article>
</section>
