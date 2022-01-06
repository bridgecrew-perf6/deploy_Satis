$(function() {
  $("#main ul li a").click(function() {
    // quitar .seleccionado a todos (por si hay alguno)
    $("#main ul li a").removeClass("seleccionado");
    // agregar seleccionado a "este" elemento.
    $(this).addClass("seleccionado");
  });
});