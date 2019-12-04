
<?PHP
include "../core/livraisonC.php";
$Livraison1C=new LivraisonC();
$listelivraison=$Livraison1C->afficherlivraison();
 
?>
 <table border="1" class="table table-striped table-hover">
                <thead>
                    <tr>
					
                        <th>D ID</th>
                        <th>Adress</th>
						<th>n°Bill</th>
                        <th>IDman</th>
                        <th>message</th>
                    </tr>
                </thead>
               
            
<?PHP foreach($listelivraison as $row)
            {
	?>
	<tr>
	<td><?PHP echo $row['idlivraison']; ?></td>
	<td><?PHP echo $row['adressel']; ?></td>
	<td><?PHP echo $row['numfacture']; ?></td>
	<td><?PHP echo $row['idlivreur']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	<td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idlivraison']; ?>" name="idlivraison">
	</form>
	</td>
	<td><a href="modifierlivraison.php?idlivraison=<?PHP echo $row['idlivraison']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
} //mysql_close();
?>
</table>