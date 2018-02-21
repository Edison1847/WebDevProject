
<script>

    // Adjust Search Size

    document.addEventListener("DOMContentLoaded", function () {
        var InputfieldPtNo = document.getElementById('searchPtNoInput');
        var InputfieldPtName = document.getElementById('searchptNameInput');
        var InputfieldPtId = document.getElementById('searchptPtIdInput');

        if(InputfieldPtNo.value){
            InputfieldPtNo.style.width = "70%";
        }
        if( InputfieldPtName.value){
            InputfieldPtName.style.width = "70%";
        }
        if(InputfieldPtId.value){
            InputfieldPtId.style.width = "70%";
        }

    });


    // submit inputs on enter
    var firePtNo = document.getElementById("searchPtNoInput");
    firePtNo.addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {
            firePtNo.form.submit();
        }
    });

    var firePtName = document.getElementById("searchptNameInput");
    firePtName.addEventListener("keydown", function (e) {

        if (e.keyCode === 13) {
            firePtName.form.submit();
        }
    });

    var firePtId = document.getElementById("searchPtIdInput");
    firePtId.addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {
            firePtId.form.submit();

        }
    });

    var firePtNic = document.getElementById("searchPtNicInput");
    firePtNic.addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {
            firePtNic.form.submit();
        }
    });
</script>

</body>