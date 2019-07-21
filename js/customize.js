$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

$('#chooseFileOpt').bind('change', function () {
  var filename = $("#chooseFileOpt").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload-opt").removeClass('active');
    $("#noFileOpt").text("No file chosen..."); 
  }
  else {
    $(".file-upload-opt").addClass('active');
    $("#noFileOpt").text(filename.replace("C:\\fakepath\\", "")); 
  }
});


$("#poloTshirt").click( function(){
   $("#color1").hide();
     $("#color2").show();
     $("#color3").show();
});

$("#roundTshirt").click( function(){
   $("#color2").show();
    $("#color1").show();
    $("#color3").show();
});

$("#dryTshirt").click( function(){
   $("#color3").hide();
    $("#color2").show();
     $("#color1").show();
});

$("#fback").click(function(){
   $("#optionalUpload").show(); 
});

$("#front, #back , #pocket").click(function(){
   $("#optionalUpload").hide(); 
});