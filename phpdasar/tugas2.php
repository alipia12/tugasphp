<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="mesin cuci" >
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping</label>
                    <input type="date" name="date" value="" class="form-control">
                </div>
                <label for="">Courier Type</label>
                <select name="kurir"class="form-select form-control" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki" name="kurir">Tiki</option>
                    <option value="Si Cepat" name="kurir">Si Cepat</option>
                    <option value="Pos" name="kurir">Pos</option>
                    <option value="Grab" name="kurir">Grab</option>
                    <option value="Gojek" name="kurir">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="courier_cost" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="assurance_cost" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">
            </form>

            <?php
                $customer = $_POST['customer'];
                $item =  $_POST['item'];
                $date =  $_POST['date'];
                $kurir =  $_POST['kurir'];
                $alamat =  $_POST['alamat'];
                $courier_cost =  $_POST['courier_cost'];
                $assurance_cost =  $_POST['assurance_cost'];
                $total_item =  $_POST['total_item'];
                

                
                if($item = TV){
                    $harga = 3000000 * $total_item;
                }
                elseif($item = Refrigator){
                    $harga = 6000000 * $total_item;
                }
                else{
                    $harga = 4000000 * $total_item;
                }

               
               
               
                

                
               

            
            ?>

            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer ?></li>
                    <li class="list-group-item">Item : <?= $item ?></li>
                    <li class="list-group-item">Date Shipping : <?= $date ?> </li>
                    <li class="list-group-item">Courier Type :  <?= $kurir ?></li>
                    <li class="list-group-item">Shipping Address :  <?= $alamat ?></li>
                    <li class="list-group-item">Courier Cost : <?= $courier_cost ?></li>
                    <li class="list-group-item">Assurance Cost : <?= $assurance_cost ?> </li>
                    <li class="list-group-item">Total Cost : <?= $harga ?> </li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>