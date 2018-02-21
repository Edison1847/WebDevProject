<script>
    var fireRadioToday = document.getElementById("today");
    fireRadioToday.addEventListener("click", function (e) {

        fireRadioToday.form.submit();

    });

    var fireRadioAll = document.getElementById("all");
    fireRadioAll.addEventListener("click", function (e) {


        fireRadioAll.form.submit();

    });


    var fireRadioGivenDate = document.getElementById("sortDate");
    fireRadioGivenDate.addEventListener("keydown", function (e) {

        if (e.keyCode === 13) {
            fireRadioGivenDate.form.submit();
        }
    });

</script>

</body>
</html>