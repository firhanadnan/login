<?php
$db= new database();
$supplier= new Supplier();
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Supplier</a> </div>
    <h1>Table Supplier</h1>
  </div>
  <div class="container-fluid">
    <hr>
  
  <?php
switch($_GET['act']){
  // Tampil User
  default:
    
    echo"<div class='row-fluid'>
      <div class='span12'>
      <a href='tambah-supplier' class='btn btn-primary'>Add Data</a>
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='icon-th'></i> </span>
            <h5>Static table</h5>
          </div>
          <div class='widget-content nopadding'>
            <table class='table table-bordered table-striped'>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>";
            
               $no=1;
               foreach($supplier->tampil_data() as $d){
                echo"<tr class='odd gradeA'>
                  <td id='footer'>$no</td>
                  <td id='footer'>$d[kode_supplier]</td>
                  <td id='footer'>$d[nama_supplier]</td>
                  <td id='footer'>$d[alamat]</td>
                  <td id='footer'>
                  <a class='tip' href='edit-supplier-$d[kode_supplier]' title='Edit Task'><i class='icon-pencil'></i></a>
                  <a class='tip' href='hapus-supplier-$d[kode_supplier]/' title='Delete'><i class='icon-remove'></i></a> 
                </tr>";
                $no++;
               }
              
                
              echo"</tbody>
            </table>
          </div>
        </div>
      </div>
      </div>";

  break;  

  
   case "tambah":
    echo"<div class='row-fluid'>
      <div class='span12'>
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='icon-th'></i> </span>
            <h5>Static table</h5>
          </div>
          <div class='widget-content nopadding'>

            <form class='form-horizontal' method='post' action='input-supplier/' name='add_supplier_validate' id='add_supplier_validate' novalidate='novalidate'>
              <div class='control-group'>
                <label class='control-label'>Kode Supplier</label>
                <div class='controls'>
                  <input type='text' name='kode_supplier' id='kode_supplier'>
                </div>
              </div>
              <div class='control-group'>
                <label class='control-label'>Nama Supplier</label>
                <div class='controls'>
                  <input type='text' name='nama_supplier' id='nama_supplier'>
                </div>
              </div>
              <div class='control-group'>
                  <label class='control-label'>alamat</label>
                  <div class='controls'>
                    <textarea name='alamat' id='alamat'/>
                  </div>
                </div>
              <div class='form-actions'>
                <input type='submit' value='Validate' class='btn btn-success'>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>";
   break;

     
   } 
 ?>   
    
      </div>   
  </div>
