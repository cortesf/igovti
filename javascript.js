// Init
$(document).ready(function() {
  // Obter o número do input selecionado
  var checkedTab = parseInt($("input[name='tabs']:checked").attr('id').substr(3));
  // Função para desabilitar os botões quando necessário
  toggleButtons(checkedTab);

  $("#next").click(function(){
    enableTab(checkedTab = checkedTab + 1);
    toggleButtons(checkedTab);
  });

  $("#prev").click(function(){
    enableTab(checkedTab = checkedTab - 1);
    toggleButtons(checkedTab);
  });

  // Disabilita botões quando necessário
  function toggleButtons(chechedTab) {
    if (checkedTab == 1) {
      $("#prev").attr("disabled", true)
      $("#next").attr("disabled", false)
    } else if (checkedTab == ($("input[name='tabs']").length)) {
      $("#next").attr("disabled", true)
      $("#prev").attr("disabled", false)
    } else {
      $("#next").attr("disabled", false)
      $("#prev").attr("disabled", false)
    }
  }
  // Função para habilitar Abas
  function enableTab(checkedTab) {
    $("#tab".concat(checkedTab)).prop("checked", true);
  }
});

