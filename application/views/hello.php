<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<title><?php echo $judul ; ?></title>
</head>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class = "container" margin="30px">
    <div class="jumbotron" style="background-color: #66CDAA">
        <div class="alert alert-success" role="alert">
            <h1 class="display-4">Hello, world!</h1>
        </div>
        <p class="lead">This world is beautiful, but you haven’t to explore all of the place, so explore the hidden place, and you will find the amazing view</p>
        <hr class="my-4">
        <p>Happines isn’t going to shopping to the mall, but happiness is when you can hiking the mountain and enjoy the view of the nature</p>
    </div>

    <select name="a" id="dropdown1">
        <option value="">Jenis Alert</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
    </select>

    <div class="dropdown">
        <button id="btn-action" class="btn btn-outline-secondary">LOGIN</button>
        <button id="btn-action2" class="btn btn-outline-secondary">DOWNLOAD</button>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            NATURE </button><br><br>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#" value="primary">Nature-Primary</a>
            <a class="dropdown-item" href="#" value="success">Nature-Success</a>
            <a class="dropdown-item" href="#" value="danger">Nature-danger</a>
        </div>
        <div id="alert-label" class="alert alert-primary" role="alert">
            Nature Is Speaking is Conservation International’s invitation to the human race to listen to nature
        </div> 
    </div>
        
        <!-- Button trigger modal -->
    <button id="btn-popup-alert" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">The selected kind of Nature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label id="label-modal-content">The selected Nature : </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- <div id=result></div> -->


<script type="text/javascript">
	$(document).ready(function()	
	{
        $("#btn-popup-alert").click(function()
        {
            var jenis_alert = $("#dropdown1").val();
            if(jenis_alert=="")
            {
                $("#label-modal-content").text("Jenis_alert belum dipilih");
            }
            else
            {
                $("#label-modal-content").text(jenis_alert);
            }
        });

        $("#btn-action").click(function()
        {
            $("#result").load("<?php echo base_url();?>Hello/getResult");
            $("#result").load("<?php echo base_url();?>Hello/Result");
        });

        $("#btn-action2").click(function()
        {
            $.ajax({
                url: "<?php echo base_url();?>Hello/coba",
                }).done(function(result) {
                $("#result").text(result);
            });
        });

        $("#dropdown1").on('change',function()
        {
            var value = $(this).val();
            $("#alert-label").text(value);
        });

    	$(".dropdown-item").click(function(){
        var value = $(this).attr("value");

            if(value == "primary")
            {
                $("#alert-label").text("Nature Is Speaking is Conservation International’s invitation to the human race to listen to nature");
                $("#alert-label").removeAttr("class");
                $("#alert-label").addClass("alert-primary");
            }

            else if(value == "success")
            {
                $("#alert-label").text("Nature Is Speaking is Conservation International’s invitation to the human race to listen to nature");
                $("#alert-label").removeAttr("class");
                $("#alert-label").addClass("alert alert-success");
            }

            else if(value == "danger")
            {
                $("#alert-label").text("Nature Is Speaking is Conservation International’s invitation to the human race to listen to nature");
                $("#alert-label").removeAttr("class");
                $("#alert-label").addClass("alert alert-danger");
            }
        });
        //$("#alert-label").text(value);
	});
</script>
</body>