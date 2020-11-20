$(document).ready(function () {
  $('#priceTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "500px",
    "scrollCollapse": true,
  });
  $('#solutionTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "500px",
    "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
});

function toggleSolution(){
  $('#solutionTable').attr("hidden", !$('#solutionTable').attr("hidden"));
  $('#solutionPrice').attr("hidden", !$('#solutionPrice').attr("hidden"));
}

function  cutSelected(length){
  //add cut to current profit
  var value = document.getElementById('marketRow' + length).cells[2].innerHTML;
  value = value.substring(1);
  console.log(value);
  var value2 = document.getElementById('currentSolutionProfit').innerHTML;
  document.getElementById('currentSolutionProfit').innerHTML = parseFloat(value) + parseFloat(value2);
  // $('#currentSolutionProfit').value = value + $('#currentSolutionProfit').value;

  //add cut to current solution table
  var table = document.getElementById("currentSolutionTable");
  var row = table.insertRow(1);
  var btnCell = row.insertCell(0);
  var lengthCell = row.insertCell(1);
  var priceCell = row.insertCell(2);

  btnCell.innerHTML = "<btn class='btn btn-warning'>Undo</btn>"
  lengthCell.innerHTML = length;
  priceCell.innerHTML = document.getElementById('marketRow' + length).cells[2].innerHTML;
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

//
// var ctx = document.getElementById("myChart");
// function startGame() {
//   myGameArea.start();
// }
// $('#priceTable').DataTable({
//   "scrollY": "200px",
//   "scrollCollapse": true,
// });
// var myGameArea = {
//   canvas : document.createElement("canvas"),
//   start : function() {
//     this.canvas.width = 480;
//     this.canvas.height = 270;
//     this.context = this.canvas.getContext("2d");
//     document.body.insertBefore(this.canvas, ctx);
//   }
// }
