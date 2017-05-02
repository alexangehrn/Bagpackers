<?php if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/admin/layout/header.admin.php"); ?>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

	<form method="post" action="?cat=admin&module=pays&action=ajout_pays" id="form_post" name="form_post">
				<div class="form-group">
					<input id="nom_pays" name="nom_pays" class="form-control" rows="10" cols="100" placeholder="nom pays" required/>
					<input id="descr_pays" name="descr_pays" class="form-control" rows="10" cols="100" placeholder="descr" required/>
					<input type="submit" value="Envoyer" class="btn btn-success"/>
				</div>
	</form>