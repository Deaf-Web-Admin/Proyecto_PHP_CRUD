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
<table border=1>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>email</th>
<th>Gender</th>
<th>Phone</th>
<th colspan=2></th>
</tr>
    <?php
    include "conn.php";
        $conexion = conectar();
        //o = 1(delete) 2(create) 3(update)
        //id = id of the table field 
        $query = $conexion->query("SELECT id,first_name,last_name,email,gender,phone,CONCAT('<form action=\x22crud.php\x22 method=\x22Post\x22><input type=\x22hidden\x22 name=\x22id\x22 value=',id,'><input type=\x22hidden\x22 name=\x22o\x22 value=\x221\x22><input type=\x22Submit\x22 Value=\x22Delete\x22></form>'),CONCAT('<form action=\x22edit.php\x22 method=\x22Post\x22><input type=\x22hidden\x22 name=\x22id\x22 value=',id,'><input type=\x22Submit\x22 Value=\x22Edit\x22></form>') from MOCK_DATA ORDER BY id Desc");
        $cols_num = 8; $matriz = array(); $f = 0;
        while($celda = $query->fetch_assoc()){$keys = array_keys($celda);for($c=0;$c<$cols_num;$c++){$matriz[$f][$c] = $celda[$keys[$c]];}$f++;}
        foreach ($matriz as $y){echo "<tr>";foreach ($y as $yx){echo "<td>".$yx."</td>";}echo "</tr>";}
    ?>
</table>
</Main>
<Footer>
<form action="crud.php" method="Post">
<input type="Hidden" value="2" name="o">
<input type="text" placeholder="First Name" name="first" required>
<input type="text" placeholder="Last Name" name="last" required>
<input type="email" placeholder="email" name="email" required>
<Select name="gender">
<option>Female</Option>
<option>Male</Option>
</Select>
<input type="text" placeholder="Phone" name="phone" required>
<input type="Submit" value="Add">
</form>
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
