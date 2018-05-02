<!DOCTYPE html>
<html>
<body>
<div  align="center">

	<h3>Rentrez les informations sur la personne que vous souhaitez rajouter ou supprimer</h3>


<form name = "formulaire" method ="POST" action="traitement_admin.php">
<table>

	<tr>
  			<td>Nom de l'employé : </td> 
  			<td> <input type="text" name="nom"></td>
  			

	</tr>
	
	<tr>
      
		   <td>  Prenom : </td>
		   <td> <input type="text" name="prenom" ></td>  
     
	</tr>

	<tr>
		<td></Ajouter>Ajouter ou supprimer: </td>
		 <td>  <select name="choix" id="choix">
          	 <option value="ajouter">Ajouter</option>
           	<option value="supprimer">Supprimer</option>
      	  </select></td>

	</tr>

</table>
        <button type="submit" name="submit1">Soumettre</button>
      </form>
    </div>
  </body>
</html>