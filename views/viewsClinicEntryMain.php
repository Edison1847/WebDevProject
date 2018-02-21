<body>

<img src="../stylesheets/images/clinic%20records.png" width=100% >

<form action="clinicEntries.php" method="post" id="deletedEntries" >
    <label for="today">Today</label>
    <input type="radio" name="when"  id="today" value="today">

    <label for="all">All Entries</label>
    <input type="radio" name="when"  id="all" value="all">
    <input type="text" name="sort" id="sortDate">
</form>

<div id="tableDiv" style="width: 75%; margin-top: 25px;" >
    <table id="myTable" class="" cellspacing="0" width="100%" >
        <thead>
        <tr>
            <th>Clinic No</th>
            <th style="width: 75px;">Name</th>
            <th>Clinic DateTime</th>
            <th>Priority</th>
            <th>Updated by</th>

        </tr>
        </thead>
        <tbody>