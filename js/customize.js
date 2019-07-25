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

        $(".shirt-type").click(function(){
                var type  = $(this).attr("data-type");

                $.ajax({
                    type : "POST",
                    url  : "functions.php",
                    data : "check=color&type="+ type,
                    
                    success:function(result){
                        $(".colors").html("<label class='form-label' for='colour'>Select the colour of tshirt :</label><br>" + result); 
                                            }
                        })

                        $.ajax({
                          type : "POST",
                          url  : "functions.php",
                          data : "check=print&type="+ type,
                          
                          success:function(result){
                              $(".print-type").html("<label class='form-label' for='printType'>Select the part of tshirt where you want your design :</label><br>" + result); 
                                                  }
                              })
                                        });

$("#3").click(function(){
   $("#optionalUpload").show(); 
});

$("#1, #2 , #4").click(function(){
   $("#optionalUpload").hide(); 
});