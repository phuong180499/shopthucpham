<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("ip_seach");
        filter = input.value.toUpperCase();
        table = document.getElementById("dtCate");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            td1 = tr[i].getElementsByTagName("td")[2];

            if (td || td1) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>