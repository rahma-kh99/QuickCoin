
 <?php
foreach ($tab_u as $u){
echo "<p> Nom : ".$u->getNom();
echo " Prénom : ".$u->getPrenom();
echo " @Mail: ".$u->getadr_mail();
echo " @Mail: ".$u->getmessage();

}?>