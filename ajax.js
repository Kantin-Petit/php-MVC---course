console.log("hello word");

function submitForm( tri,search,categorie) {
    console.log('test1');
    var xhr;
    try {
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (e2) {
            try {
                xhr = new XMLHttpRequest();
            } catch (e3) {
                xhr = false;
            }
        }
    }

    xhr.onreadystatechange = function () {
        console.log('test2');
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
              // document.ajax.dyn = "Received:" + xhr.responseText;
                console.log("sa  marche la non ?");
                window.location.replace("index.php?page=liste_produits&onglet=0&tri="+tri+"&search="+search+"&categorie="+categorie);
            } else {
               // document.ajax.dyn = "Error code " + xhr.status;
                console.log("trop nul")
            }
        }
    };

    xhr.open("GET","liste_produits.php?onglet=0&tri=titre_art-DESC&search=&categorie=", true);
    xhr.send(null);
}