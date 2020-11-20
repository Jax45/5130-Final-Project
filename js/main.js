$(document).ready(function () {
  $('#priceTable').DataTable({searching: false, paging: false, info: false,
    "scrollY": "500px",
    "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
});

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
