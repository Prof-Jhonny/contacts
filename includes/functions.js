function conf_excluir(cod) {
    conf = confirm("Deseja excluir o registro " + cod + "?");
    if (conf == true) {
        window.location = "excluir.php?codigo=" + cod;
    }
}

