<script>
    document.write("Aguarde...");
    var cvalue = document.cookie.replace("uId=", "");
    var cname  = "uId";
    var d = new Date();
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    window.location = "/HomePage/"
</script>