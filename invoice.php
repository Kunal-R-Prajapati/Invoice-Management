<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>invoice</title>

    <style>
        @media screen {
          
  
          .form-control{
            border: none;
          }
  
          .input-group-text{
            border: none;
            background: none;
          }
        }
  
  
        @media print
        {
  
  
          .btn{
            display: none;
          }
          .noprint
          {
            display: none;
          }
  
          .form-control{
            border: none;
          }
  
          .input-group-text{
            border: none;
            background: none;
          }
  
        }
      </style>
  
  
      <script>
  
  
  function getprint()
  {
    window.print(); 
  }
  
 </script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="row mb-3"></div>
        <div class="card">
            <div class="card-header text-center">
              <h3>INVOICE</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Bill NO.:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Bill No." aria-label="Bill No." aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Customer Name:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Customer Name" aria-label="Customer Name" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Address:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">GSTIN:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="GSTIN" aria-label="GSTIN" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Payment Mode:</span>
                            </div>
                            <input type="text" class="form-control" placeholder="CASH/CHEQUE" aria-label="CASH/CHEQUE" aria-describedby="basic-addon1">
                          </div>


                    </div>
                  
                    <div class="col-6">

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Date:</span>
                        </div>
                        <input type="date" class="form-control" placeholder="Date" aria-label="Date" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Shop ID:</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Shop ID" aria-label="Shop ID" aria-describedby="basic-addon1">
                      </div>


                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">From:</span>
                        </div>
                        <input type="date" class="form-control" placeholder="From" aria-label="From" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">To:</span>
                        </div>
                        <input type="date" class="form-control" placeholder="To" aria-label="To" aria-describedby="basic-addon1">
                      </div>
                      
                     
                
            </div>
          </div>  
    


    <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">sac code</th>
            <th scope="col" class="text-end">Particulars</th>
            <th scope="col" class="text-end">Amount Rs.</th>
            
            <th scope="col" class="noprint"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><input type="number" class="form-control text-end"></td>
            <td><input type="date" class="form-control text-end"></td>
            <td><input type="number" class="form-control text-end"></td>
            <td class="noprint"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </button></td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td><input type="number" class="form-control text-end"></td>
            <td><input type="date" class="form-control text-end"></td>
            <td><input type="number" class="form-control text-end"></td>
            <td class="noprint"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </button></td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td><input type="number" class="form-control text-end"></td>
            <td><input type="date" class="form-control text-end"></td>
            <td><input type="number" class="form-control text-end"></td>
            <td class="noprint"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>
            </button></td>
          </tr>
         
        </tbody>
      </table>



      <div class="row">

        <div class="col-8">


          <button type="button" class="btn btn-primary" onclick="getprint()">Print </button>

        </div>
        <div class="col-4">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">SGST @9%:</span>
            </div>
            <input type="text" class="form-control" placeholder="SGST" aria-label="SGST" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">CGST @9%:</span>
            </div>
            <input type="text" class="form-control" placeholder="CGST" aria-label="SGST" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Grand Total:</span>
            </div>
            <input type="text" class="form-control" placeholder="Grand Total" aria-label="Grand Total" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Balance Due:</span>
            </div>
            <input type="text" class="form-control" placeholder="Balance Due" aria-label="Balance Due" aria-describedby="basic-addon1">
          </div>



        </div>

      </div>
      

    </div>


        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
