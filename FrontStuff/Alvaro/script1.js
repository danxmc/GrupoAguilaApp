
$('.pane-hScroll').scroll(function() {
  $('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
});


$('.pane--table2').scroll(function() {
  $('.pane--table2 table').width($('.pane--table2').width() + $('.pane--table2').scrollLeft());
});

$('.pane--table3').scroll(function() {
  $('.pane--table3 table').width($('.pane--table3').width() + $('.pane--table3').scrollLeft());
});
$('.pane--table4').scroll(function() {
  $('.pane--table4 table').width($('.pane--table4').width() + $('.pane--table4').scrollLeft());
});