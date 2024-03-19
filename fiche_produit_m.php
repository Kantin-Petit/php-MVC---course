<?php 
include('bd.php');
$id_art = $_GET['id_art'];
if(isset($_GET['template'])){
    $template = $_GET['template'];
}else{
    $template = "template1";
}

try{
    $id_art = isset($_GET['id_art']) ? $_GET['id_art'] : null;

    if ($id_art == null || $id_art == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération du produit");
    }else{
        //$querie = "SELECT * FROM `Article` JOIN `ass_art_tag` ON id_art = fk_art JOIN `tag` ON code_tag = fk_tag WHERE id_art = :id_art;";
        $querie2 = "SELECT * FROM `Article` WHERE id_art = :id_art;";
        $res = $mysqlClient->prepare($querie2);
        $res->bindParam(':id_art', $id_art);
        $res -> execute();
        $row = $res -> fetch();

        $sql_z1="SELECT * FROM `interface` WHERE `zone` = 'zone1' AND template= :template ORDER BY ordre;";
        $res_z1 = $mysqlClient->prepare($sql_z1);
        $res_z1->bindParam(':template', $template);
        $res_z1 -> execute();

        $sql_z2="SELECT * FROM `interface` WHERE `zone` = 'zone2' AND template= :template ORDER BY ordre;";
        $res_z2 = $mysqlClient->prepare($sql_z2);
        $res_z2->bindParam(':template', $template);
        $res_z2 -> execute();
        
        $sql_z3="SELECT * FROM `interface` WHERE `zone` = 'zone3' AND template= :template ORDER BY ordre;";
        $res_z3 = $mysqlClient->prepare($sql_z3);
        $res_z3->bindParam(':template', $template);
        $res_z3 -> execute();
    }

    $querie = "SELECT Article.* FROM `Article`,`categorie` 
        WHERE categorie.id_cat = :categ  AND categorie.id_cat = article.fk_categorie LIMIT 4 ,4" ;

        $sqlQuery2 = "SELECT COUNT(*) FROM Article WHERE 1 ";
        $res2 = $mysqlClient->prepare($sqlQuery2);
        $res2 -> execute();
        $reslimit = $res2 -> fetchColumn();
        
        $limit = rand(0,$reslimit -4 );

        $res = $mysqlClient->prepare($querie);

        //$res->bindParam(':offset', $limit);
        $res->bindParam(':categ', $row['fk_categorie']);
        $res -> execute();
        $reco = $res -> fetchAll();
}catch(PDOException $e){
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}
?>