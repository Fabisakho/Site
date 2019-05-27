<!DOCTYPE html>
<html >

<head>

  <meta charset="utf-8">
 
  <title>Mes petits projets</title>

  
  <link  rel="stylesheet" type="text/css" href = "site.css">

  
</head>

<body id= "bo">
    <nav id= "debut">
      <div class="container">
	  <div>
        <ul id = "menu">
          <li >
            <a href="#carnet">Carnet</a>
          </li>
          <li >
            <a href="#horloge">Horloge</a>
          </li>
          
		  <li >
            <a href="ang.html" >jeux</a>
          </li>
          <li >
            <a href="#contact">Contact</a>
          </li>
		  <li >
            <a href="rev.html">Formulaire</a>
          </li>
			<li >
			<a >
			  Recherche:
			   <input type="text" name="countryname">
			  <button  type="submit">OK</button></a>
			
			</li>
		</ul>
      </div>
	  </div>
    
 </nav>
<br><br><br>
  <section id="num">
    <div class="container">
      <div >
        <div >
		</div>
      </div>
    </div>
  </section>

  <section id="carnet">
    <div class="container">
      <div >
        <div >
		<br><br><br>
		 
		 
          <h2 >Veuillez vous enregistrer</h2>
         
          
					
					<?php 
				if(sizeof($_GET)!=0)
				{
					$fic=fopen("carnet.txt","a+");
					foreach($_GET as $val)
					{
						fwrite($fic,$val.";");
					}
					fwrite($fic,"\n");
					fclose($fic);
				}	?>
				<table  border="2" align="center" cellpadding="5" >
				<form action="./index.php" method="get">
				<tr><th >Nom :</th><td ><input name="nom" type="text"/></td></tr>
				<tr><th >Prénom :</th><td ><input name="prenom" type="text"/> </td></tr>
				<tr><th >Âge :</th><td ><input name="age" type="int"/> </td></tr>
				<tr><th >Profession :</th><td ><input name="prof" type="text"/> </td></tr>
				<tr><th >Adresse :</th><td ><input name="adr" type="text"/> </td></tr>
				<tr><th >Téléphone :</th><td ><input name="tel" type="tel"/> </td></tr>
				<tr><th >Email :</th><td ><input name="mail" type="mail"/> </td></tr>
				<tr><td colspan="2" ><button type="submit">Ajouter contact</button></td></tr>
				
				</form>
				</table>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="horloge">
    <div class="container">
      <h2 class="text-center mt-0">Le tableau des heures et dates des villes:</h2>
     
      <div class="row">
	  
        <table  border="2" align="center" cellpadding="5" >

		<tr>
			<th > VILLES:</th>
			<td > PARIS</td>
			<td > LOS-ANGELES</td>
			<td > TOKYO</td>
			<td > MOSCOU</td>
			<td > NEW-YORK</td>
			<td > BAMAKO</td>
			<td > ALGER</td>
			<td > SANTIAGO</td>
			<td > ABIDJAN</td>
			<td > SYDNEY</td>

		</tr>

		<tr>
			<th >  PAYS:</th> 
			<td > France</td>
			<td > Etats-Unis</td>
			<td > Japon</td>
			<td > Russie</td>
			<td > Etats-Unis</td>
			<td > Mali</td>
			<td > Algerie</td>
			<td > Chili</td>
			<td >Côte D'ivoire </td>
			<td > Australie</td>

		</tr>
		<tr>
			<th >  HEURE:</th>
			<td ><?php 
					$timezone  = 1;
					$a = gmdate (" H:i:s", time() + 3600*($timezone+date("I")));
					echo $a; 
					?>  </td>
			<td ><?php 
					$timezone = -8 ; 
					$b = gmdate("h:i:s a", time() + 3600*($timezone+date("I")));
					echo $b;
					?>  </td>
			<td ><?php 
					$timezone  = 9;
					$t = gmdate("H:i:s", time() + 3600*($timezone+date("I"))); 
					echo $t;?> </td>
			<td > <?php 
					$timezone  = 3; 
					$m = gmdate (" H:i:s", time() + 3600*($timezone+date("I"))); 
					echo $m;
					?> </td>
			<td > <?php 
					$timezone  = -4; 
					$n = gmdate(" h:i:s a", time() + 3600*($timezone+date("I"))); 
					echo $n;
					?></td>
			<td ><?php 
					$timezone=0 ; 
					$ba =gmdate(" H:i:s", time() + 3600*($timezone+date("I"))); 
					echo $ba;
					?> </td>
			<td ><?php 
					$timezone  = 1;
					$a = gmdate (" H:i:s", time() + 3600*($timezone+date("I")));
					echo $a; 
					?>  </td>
			<td > <?php 
					$timezone  = -3;
					$s= gmdate (" h:i:s a", time() + 3600*($timezone+date("I"))); 
					echo $s;
					?>   </td>
			<td ><?php 
					$timezone=0;
					$ab = gmdate (" H:i:s", time() + 3600*($timezone+date("I"))); 
					echo $ab;
					?> </td>
			<td ><?php 
					$timezone  = 11;
					$sy = gmdate (" H:i:s", time() + 3600*($timezone+date("I"))); 
					echo $sy;
					?>  </td>
		</tr>

		<tr>
		<th >  DATE:</th>
			<td ><?php 
					$timezone  = 1;
					$paris= gmdate("j/m/Y ");
					echo $paris;  ?> </td>	
			<td > <?php 
					$timezone = -8 ; 
					$losAngeles= gmdate("m/j/Y");
					echo $losAngeles;
					?> </td>
			<td ><?php 
					$timezone  = 9;
					$tokyo= gmdate("Y/m/j"); 
					echo $tokyo;
					?> </td>
			<td ><?php 
					$timezone  = 3; 
					$moscou= gmdate("Y/m/j");
					echo $moscou;
					?>  </td>
			<td ><?php 
					$timezone  = -4; 
					$newYork = gmdate("Y/m/j") ;
					echo $newYork;
					?> </td>
			<td ><?php 
					$timezone=0 ; 
					$bamako= gmdate("j/m/Y"); 
					echo $bamako;
					?> </td>
			<td ><?php 
					$timezone  = 1;
					$alger= gmdate("j/m/Y");
					echo $alger;
					?>	 </td>
			<td >
			<?php 
					$timezone  = -3;
					$santiago = gmdate("Y/m/j");
					echo $santiago; 
					?>
					</td>
			<td > <?php 
					$timezone=0; 
					$abidjan= gmdate("j/m/Y");
					echo $abidjan;
					?></td>
			<td > <?php 
					$timezone  = 11;
					$sydney= gmdate("j/m/Y");
					echo $sydney;
					?></td>
		</tr>

		</table>
    </div>
  </section>

  

  <section id="contact">
    <div class="container">
      
      
      <div >
        <table >
          <tr ><td ><img src="imag.png" alt="" width="50"></td><td></td><td ><img src="im.png" alt="" width="50"></td><tr>
          <tr><td>+33 07 82 12 67 94</td><td>    </td><td><a  href="fabisakho@gmail">fabisakho@gmail.com</a></td></tr>
        </div>
        
      </div>
   
  </section>

 
</body>

</html>
