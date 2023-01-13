
  var cols = document.getElementById('table1').rows[0].cells;
  var headerCol = new Array();
  for (var i = 0; i < (cols.length); i++) {
      headerCol[i]=cols[i].textContent;
  }
       
  function searchTable(col) {
    var input, filter, table, tr, td, i;
    input = document.getElementById(col);
    filter = input.value.toUpperCase();
    table = document.getElementById("table1");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      if(col=='1') td = tr[i].getElementsByTagName("td")[1];
      else if(col=='3') td = tr[i].getElementsByTagName("td")[3];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }     
    }
  }
  function resetHeader(){
      var c = document.getElementById('table1').rows[0].cells;
      for (var i = 0; i < (c.length); i++) {
          c[i].textContent=headerCol[i];
      }
  }
  function sortTable(d,n) {
    var table, rows, col_header, switching, i, x, y, a,b,shouldSwitch, dir = "asc", switchcount = 0;
    table = document.getElementById("table1");
    rows = table.getElementsByTagName("tr");
    col_header  = rows[0].getElementsByTagName("th")[n];
    switching = true;
    while (switching) {
      switching = false;    
      for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("td")[n];
          y = rows[i + 1].getElementsByTagName("td")[n];
          if (d=="num")
          {   a = Number(x.innerHTML);
              b = Number(y.innerHTML);
          } else if (d=="alfa")
          {   a = x.innerHTML.toLowerCase();
              b = y.innerHTML.toLowerCase();
          } else if (d=="date")
          {   a = Date.parse(x.innerHTML);
              b = Date.parse(y.innerHTML);
          }
          if (dir == "asc") {
              if (a > b) {
                shouldSwitch = true;
                break;
              }
          } else if (dir == "desc") {
              if (a < b) {
                shouldSwitch = true;
                break;
              }
          }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }   
    }
    resetHeader();
    if (dir == "asc") {col_header.textContent =  headerCol[n] + " \u2191";}
    if (dir == "desc") {col_header.textContent = headerCol[n] + " \u2193";}
  }