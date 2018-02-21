


<script>
    // Submit Forms on press enter
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


    // change menue bar on changin pages
    var bodyId = document.getElementById("homeBody").id;
    if(bodyId == 'homeBody'){
        document.getElementById('firstMenuA').classList.remove('styleReg');
        document.getElementById('firstMenuA').classList.add('styleView');
        document.getElementById('secondMenuA').classList.remove('styleView')
        document.getElementById('secondMenuA').classList.add('styleReg')
    }


    // refreash on delete
    function refresh() {
        setTimeout(function () {
            location.reload()
        }, 100);
    }

</script>
</body>