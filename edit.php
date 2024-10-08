<!-- 
Written By DeafWebDev (linux.user@techie.com)

 ________      _____ ______       ___      ___  ___      ________      ___  ___     
|\   __  \    |\   _ \  _   \    |\  \    /  /||\  \    |\   ____\    |\  \|\  \    
\ \  \|\  \   \ \  \\\__\ \  \   \ \  \  /  / /\ \  \   \ \  \___|    \ \  \\\  \   
 \ \   __  \   \ \  \\|__| \  \   \ \  \/  / /  \ \  \   \ \  \        \ \  \\\  \  
  \ \  \ \  \   \ \  \    \ \  \   \ \    / /    \ \  \   \ \  \____    \ \  \\\  \ 
   \ \__\ \__\   \ \__\    \ \__\   \ \__/ /      \ \__\   \ \_______\   \ \_______\
    \|__|\|__|    \|__|     \|__|    \|__|/        \|__|    \|_______|    \|_______|

<meta http-equiv="refresh" content="60;url=index.php">
-->
<!DOCTYPE html>
<HTML lang="En">
<Head>
		<link rel="icon" type="image/svg+xml" href="/FavIcon.svg" />
        	<link rel="stylesheet" href="index.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>PHP CRUD</title>
</Head>
<Body>
<Header><H3>PHP CRUD for Anonymous User FB</H3></Header>
<Main>
<div class="DivMSG">Not Intended for Mobile</div>
    <?php
    include "conn.php";
    $Identify = $_REQUEST["id"];
        $conexion = conectar();
        //o = 1(delete) 2(create) 3(update)
        //id = id of the table field 
        $query = $conexion->query("SELECT CONCAT('<Form action=\x22crud.php\x22 method=\x22Post\x22><input name=\x22first\x22 type=\x22text\x22 value=\x22',first_name,'\x22><input type=\x22text\x22 name=\x22last\x22 value=\x22',last_name,'\x22><input type=\x22text\x22 name=\x22email\x22 value=\x22',email,'\x22><input type=\x22text\x22 name=\x22gender\x22 value=\x22',gender,'\x22><input type=\x22text\x22 name=\x22phone\x22 value=\x22',phone,'\x22><input type=\x22hidden\x22 name=o value=3><input type=\x22hidden\x22 name=id value=',id,'><input type=\x22Submit\x22 value=\x22Save\x22></Form>') from MOCK_DATA WHERE id='".$Identify."'");
        $cols_num = 1; $matriz = array(); $f = 0;
        while($celda = $query->fetch_assoc()){$keys = array_keys($celda);for($c=0;$c<$cols_num;$c++){$matriz[$f][$c] = $celda[$keys[$c]];}$f++;}
        foreach ($matriz as $y){echo "";foreach ($y as $yx){echo "".$yx."";}echo "";}
    ?>
    <button onClick="location.href='index.php'">Back</Button>
</Main>
<Footer>
<Footer>
</Body
</HTML>
<!--
  ____ _____ ____ 
 |  _ \_   _/ ___|
 | |_) || || |    
 |  _ < | || |___ 
 |_| \_\|_| \____|
 hdvbzpzdpdgtpbspdd@nbmbb.com

-->
