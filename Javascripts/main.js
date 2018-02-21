document.addEventListener("DOMContentLoaded", function(){
    console.log("works");
});


// get the table element
var table = document.getElementById("myTable"),
// number of rows per page
    n = 10,
// number of rows of the table
    rowCount = table.rows.length,
// get the first cell's tag name (in the first row)
    firstRow = table.rows[0].firstElementChild.tagName,
// boolean var to check if table has a head row
    hasHead = (firstRow === "TH"),
// an array to hold each row
    tr = [],
// loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
    i,ii,j = (hasHead)?1:0,
// holds the first row if it has a (<TH>) & nothing if (<TD>)
    th = (hasHead?table.rows[(0)].outerHTML:"");
// count the number of pages
var pageCount = Math.ceil(rowCount / n);
// if we had one page only, then we have nothing to do ..
if (pageCount > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for (i = j,ii = 0; i < rowCount; i++, ii++)
        tr[ii] = table.rows[i].outerHTML;
    // create a div block to hold the buttons
    var buttonPosition = document.getElementById('tableButtons')
    buttonPosition.insertAdjacentHTML("afterbegin","<div id='buttons' onclick='clickableTable()'></div");
    // the first sort, default page is the first one
    sort(1);
}


// (p) is the selected page number.
function sort(p) {
    /* create (rows) a variable to hold the group of rows*/

    var rows = th,s = ((n * p)-n);
    for (i = s; i < (s+n) && i < tr.length; i++)
        rows += tr[i];

    // now the table has a processed group of rows ..
    table.innerHTML = rows;
    // create the pagination buttons
    document.getElementById("buttons").innerHTML = pageButtons(pageCount,p);
    // CSS Stuff
    document.getElementById("id"+p).setAttribute("class","active");
}


// (pCount) : number of pages,(cur) : current page, the selected one ..
function pageButtons(pCount,cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var	prevDis = (cur == 1)?"disabled":"",
        nextDis = (cur == pCount)?"disabled":"",
        /* this (buttons) will hold every single button needed
        ** it will creates each button and sets the onclick attribute
        ** to the "sort" function with a special (p) number..
        */
        buttons = "<input type='button' value='Prev' onclick='sort("+(cur - 1)+")' "+prevDis+">";
    for (i=1; i<=pCount;i++)
        buttons += "<input type='button' id='id"+i+"'value='"+i+"' onclick='sort("+i+")'>";

        buttons += "<input type='button' value='Next' onclick='sort("+(cur + 1)+")' "+nextDis+">";


    return buttons;
}


// Make name column of table Clickable on page load
// document.addEventListener("DOMContentLoaded", function(){
//
//     var theTbl = document.getElementById('myTable');
//     for(var i=1;i<theTbl.rows.length;i++)
//     {
//         var tableContent = theTbl.rows[i].cells[1].innerHTML;
//         var tablePtId = theTbl.rows[i].cells[0].innerHTML;
//
//         theTbl.rows[i].cells[1].innerHTML = '<a href="form.php">'  +  tableContent + "</a>" ;
//
//
//     }
// })
// Make name column of table Clickable on table button clicks
// function clickableTable() {
//
//     var theTbl = document.getElementById('myTable');
//     for(var i=1;i<theTbl.rows.length;i++)
//     {
//         var tableContent = theTbl.rows[i].cells[0].innerHTML;
//         theTbl.rows[i].cells[0].innerHTML = "<a href='summery.php'>"  +  tableContent + "</a>" ;
//     }
// }

//adjust search input width
function getContentInputFields(focusedElementId) {
    var contentInputfield = document.getElementById(focusedElementId);
    var ValcontentInputField = contentInputfield.value;

    if(ValcontentInputField!== ""){
        contentInputfield.style.width = "70%";

    }else {
        contentInputfield.style.width = "10%";

    }
}

// adjust input field size on focus
function inputSize(focusedElementId) {
    var contentInputfield = document.getElementById(focusedElementId);
    var ValcontentInputField = contentInputfield.value;

        contentInputfield.style.width = "70%";
}


/////////// send a POST request to php

function submitForm(elem) {
    if (elem.value) {
        elem.form.submit();
    }
}
