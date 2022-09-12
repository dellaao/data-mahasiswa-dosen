<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
<!-- <div id="container">
    <h1><center>Informasi data Pribadi</center></h1>
        <div id="body"><center>
            <table border="0" width="100%">
                <tr>
                    <td align="center">Nama</td>	
                    <td align="center">:</td>
                    <td align="center">Nur Annisa Permata</td>
                </tr>
                <tr>
                    <td align="center">NIM</td>	
                    <td align="center">:</td>
                    <td align="center">09021181823025</td>
                </tr>
                <tr>
                    <td align="center">Agama</td>	
                    <td align="center">:</td>
                    <td align="center">Islam</td>
                </tr>
                <tr>
                    <td align="center">Tempat Lahir</td>	
                    <td align="center">:</td>
                    <td align="center">Prabumulih</td>
                </tr>
                <tr>
                    <td align="center">Tanggal Lahir</td>	
                    <td align="center">:</td>
                    <td align="center">17 Juli 2000</td>
                </tr>
                <tr>
                    <td align="center">Kelas</td>	
                    <td align="center">:</td>
                    <td align="center">Reguler</td>
                </tr>
                <tr>
                    <td align="center">Semester</td>	
                    <td align="center">:</td>
                    <td align="center">5</td>
                </tr>
                <tr>
                    <td align="center">Jurusan</td>	
                    <td align="center">:</td>
                    <td align="center">Teknik Informatika</td>
                </tr>
                <tr>
                    <td align="center">Fakultas</td>	
                    <td align="center">:</td>
                    <td align="center">Ilmu Komputer</td>
                </tr>
                <tr>
                    <td align="center">Domisili</td>	
                    <td align="center">:</td>
                    <td align="center">Indralaya</td>
                </tr>
            </table>
            <br>
            <h4><p>Apakah data pribadi anda sudah benar?</p></h4>
            <br>
            <button id="btn-action">Benar</button> 
            <button id="btn-action2">sukses AJAX</button>   
            <br>
            Ini Hasilnya :
            <div id="result"></div>     
        </center>
        </div> -->
        <select name="a" id="dropdown1">
        <option value="">Jenis Alert</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        </select>

    <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Allert
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" value="Primary">Alert-Primary</a>
            <a class="dropdown-item" href="#" value="success">Alert-Success</a>
            <a class="dropdown-item" href="#"value="danger">Alert-danger</a>
        </div>
        <div id="alert-label" class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
        </div>
        <button id="btn-popup-alert" type="button" class="btn btn-outline-primary">Popup Alert</button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Alert yang dipilih adalah :</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
    </div>
  </div>
    </div>
<!-- </div>  -->
</body>

<script type="text/javascript">
	$(document).ready(function())
	{
        $("#btn-popup-alert").click(function()){
            var jenis_alert = $("#dropdown1").val();
            if(jenis_alert==""){
                $("#label-modal-content").text("Jenis_alert belum dipilih");
            }
            else{
                $("#label-modal-content").text(jenis_alert);
            }
        }
	// $("#btn-action").click(function()
	// {
	// 	//alert("Terima Kasih");
    //     // $("#result").html("Benar");
	// 	$("#result").load("<?php echo base_url();?>index.php/Hello/getResult");
	// });
    // $("#btn-action2").click(function()
	// {
    //     $.ajax({
    //     url: "<?php echo base_url();?>index.php/Hello/getResult"
    //     }).done(function(result) {
    //     $("#result").text(result);
    //     });
	// });
    $("#dropdown1").on('change', function(){
            var value = $(this).val();
             $("#alert-label").text(value);
    });

    $(".dropdown-item").click(function(){
        var value = $ (this).attr("value");

        if(value == "primary"){
            $("#alert-label").text("A simple primary alert-check it out!");
            $("#alert-label").removeAttr("class");
            $("#alert-label").addClass("alert alert-primary");
        }

        else if(value == "success"){
            $("#alert-label").text("A simple success alert-check it out!");
            $("#alert-label").removeAttr("class");
            $("#alert-label").addClass("alert alert-success");
        }

        else if(value == "danger"){
            $("#alert-label").text("A simple danger alert-check it out!");
            $("#alert-label").removeAttr("class");
            $("#alert-label").addClass("alert alert-danger");
        }
    })
        //$("#alert-label").text(value);

    // });
	});
</script>


<!-- <style type="text/css"> -->
 <!-- body {
//     background-color: #fff;
//     margin: 9% auto;
//     height : 500px;
//     width : 450px;
//     font: 13px/20px normal Helvetica, Arial, sans-serif;
//     color: #4F5155;
// }

// h1 {
//     color: #444;
//     background-color: #D8BFD8;
//     border-bottom: 1px solid #D0D0D0;
//     font-size: 19px;
//     font-weight: normal;
//     margin: 0 0 14px 0;
//     padding: 14px 15px 10px 15px;
//     text-transform: uppercase;
// }

// #body {
//     margin: 0 15px 15px;
//     background-color: #E6E6FA;

// }

// #btn-action {
//     background-color: #00008B;
//     color : #fff;
//     margin-bottom: 20px;
//     width: 150px;
//     height: 32px;
//     border: none;
//     border-radius: 10px;
//     font-family: sans-serif;
//     text-transform: uppercase;
//     transition: 0,2s ease;
//     cursor: pointer;
// }

// #btn-action2 {
//     background-color: #00008B;
//     color : #fff;
//     margin-bottom: 20px;
//     width: 150px;
//     height: 32px;
//     border: none;
//     border-radius: 10px;
//     font-family: sans-serif;
//     text-transform: uppercase;
//     transition: 0,2s ease;
//     cursor: pointer;
// }

// #container {
//     margin: 10px;
//     border: 2px solid #D0D0D0;
//     box-shadow: 0 0 8px #D0D0D0;
// }
// </style> -->
</html>


