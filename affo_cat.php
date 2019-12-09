<?PHP
include "categoriec.php";
$categorie1c=new categoriec();
$listecategorie=$categorie1c->affichercategorie();

//var_dump($listeEmployes->fetchAll());

?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>

</tr>

<?PHP
foreach($listeproduits as $row){
	$id=$row['id_cat'];
	$chemin="image/".$id.".jpg"
	?>
	<tr>
	<td><?PHP echo $row['id_cat']; ?></td>	
	<td><?PHP echo $row['nom']; ?></td>
	
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	<td><img scr="<?PHP echo $chemin; ?>" width="100" height="80"> 

              <!-- <img src="Bureau<?php echo $pr->image; ?>"  >-->

	     </td>
	



	</tr>
	<?PHP
}
?>
</table>
