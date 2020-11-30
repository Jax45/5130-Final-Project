//    Jackson Hoenig
//     Final Project 5130
//     Rod Cutting Problem Solution Game
//     Pipe Cutter
//     11/30/2020
$(document).ready(function () {
  $('#priceTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "500px",
    "scrollCollapse": true,
  });
  $('#solutionTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "300px",
    "scrollCollapse": true,
  });
  $('#currentSolutionTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "300px",
    "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
});

function toggleSolution(btn){
  $('#solutionTable').attr("hidden", !$('#solutionTable').attr("hidden"));
  $('#solutionPrice').attr("hidden", !$('#solutionPrice').attr("hidden"));
  if(btn.innerHTML === "Show Solution"){
    btn.innerHTML = "Hide Solution";
  }
  else{
    btn.innerHTML = "Show Solution";
  }

}

function  cutSelected(length){
  //add cut to current profit
  var value = document.getElementById('marketRow' + length).cells[2].innerHTML;
  value = value.substring(1);
  console.log(value);
  var value2 = document.getElementById('currentSolutionProfit').innerHTML;
  document.getElementById('currentSolutionProfit').innerHTML = (parseFloat(value) + parseFloat(value2)).toFixed(2);
  var currentSolutionTotal = (parseFloat(value) + parseFloat(value2)).toFixed(2);
  var bestSolutionTotal =  document.getElementById('solutionTotalProfit').innerHTML;
  if(currentSolutionTotal === bestSolutionTotal){
    confetti.start(750, 500);
  }
  //add cut to current solution table
  var table = document.getElementById("currentSolutionTable");
  var row = table.insertRow(1);
  var btnCell = row.insertCell(0);
  var lengthCell = row.insertCell(1);
  var priceCell = row.insertCell(2);
  btnCell.innerHTML = "<btn onclick='undoButtonPressed(this, " + value + "," + length + ")' " +
    "class='btn btn-warning'>Undo</btn>"
  lengthCell.innerHTML = length;
  priceCell.innerHTML = "$" + value;
  //remove no longer possible cuts from market.
  var countOfMarketRow = document.getElementById('priceTable').rows.length - 1;

  for(var i = 0; i < length; i++){
    var diff = countOfMarketRow - i;
    var ele = document.getElementById('marketRow' + diff).cells[0].getElementsByTagName('button')[0];
    var value = ele.disabled;
    if (!value){
      //disable that button
      ele.disabled = true;
    }
    else{
      if(length == countOfMarketRow){
        break;
      }
      length++;
    }
  }
}

function undoButtonPressed(btn, price, length){
  //subtract cut from current profit
  var value2 = document.getElementById('currentSolutionProfit').innerHTML;
  document.getElementById('currentSolutionProfit').innerHTML = (parseFloat(value2) - parseFloat(price)).toFixed(2);

  //remove cut from current solution table
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);

  //add new possible cuts to market.
  var countOfMarketRow = document.getElementById('priceTable').rows.length - 1;

  for(var i = 0; i < length; i++) {
    var ele = document.getElementById('marketRow' + (i+1)).cells[0].getElementsByTagName('button')[0];
    var value = ele.disabled;
    if (value) {
      //disable that button
      ele.disabled = false;
    } else {
      if (length === countOfMarketRow) {
        break;
      }
      length++;
    }
  }
}
