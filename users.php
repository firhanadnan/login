<?php
$db= new database();
$user= new User();
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Users</a> </div>
    <h1>Tables Users</h1>
  </div>
  <div class="container-fluid">
    <hr>
  
  <?php
switch($_GET['act']){
  // Tampil User
  default:
    
    echo"<div class='row-fluid'>
      <div class='span12'>
      <a href='tambah-user' class='btn btn-primary'>Add Data</a>
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='icon-th'></i> </span>
            <h5>Static table</h5>
          </div>
          <div class='widget-content nopadding'>
            <table class='table table-bordered table-striped'>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Users</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>";
            
               $no=1;
               foreach($user->tampil_data() as $d){
                echo"<tr class='odd gradeA'>
                  <td id='footer'>$no</td>
                  <td id='footer'>$d[nama_users]</td>
                  <td id='footer'>$d[username]</td>
                  <td id='footer'>$d[level]</td>
                  <td id='footer'>
                  <a class='tip' href='edit-user-$d[id_users]' title='Edit Task'><i class='icon-pencil'></i></a>
                  <a class='tip' href='hapus-user-$d[id_users]/' title='Delete'><i class='icon-remove'></i></a> 
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

            <form class='form-horizontal' method='post' action='input-user/' name='add_users_validate' id='add_users_validate' novalidate='novalidate'>
              <div class='control-group'>
                <label class='control-label'>Your Name</label>
                <div class='controls'>
                  <input type='text' name='nama_users' id='nama_users'>
                </div>
              </div>
              <div class='control-group'>
                <label class='control-label'>Your username</label>
                <div class='controls'>
                  <input type='text' name='username' id='username'>
                </div>
              </div>
              <div class='control-group'>
                <label class='control-label'>level</label>
                <div class='controls'>
                  <select name='level' id='level'>
                  <option>admin</option>
                  <option>user</option>
                </select>
                </div>
              </div>
              <div class='control-group'>
                  <label class='control-label'>Password</label>
                  <div class='controls'>
                    <input type='password' name='pwd' id='pwd' />
                  </div>
                </div>
                <div class='control-group'>
                  <label class='control-label'>Confirm password</label>
                  <div class='controls'>
                    <input type='password' name='pwd2' id='pwd2' />
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

    case "edit":
   foreach($user->edit_user($_GET['id']) as $d){
    echo"<div class='row-fluid'>
      <div class='span12'>
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='icon-th'></i> </span>
            <h5>Static table</h5>
          </div>
          <div class='widget-content nopadding'>

            <form class='form-horizontal' method='post' action='update-user/' name='add_users_validate' id='add_users_validate' novalidate='novalidate'>
            <input type='hidden' name='id_users' id='id_users' value='$d[id_users]'>
              <div class='control-group'>
                <label class='control-label'>Your Name</label>
                <div class='controls'>
                  <input type='text' name='nama_users' id='nama_users' value='$d[nama_users]'>
                </div>
              </div>
              <div class='control-group'>
                <label class='control-label'>Your username</label>
                <div class='controls'>
                  <input type='text' name='username' id='username' value='$d[username]'>
                </div>
              </div>
              <div class='control-group'>
                <label class='control-label'>level</label>
                <div class='controls'>
                  <select name='level' id='level'>
                  <option>admin</option>
                  <option>user</option>
                </select>
                </div>
              </div>
              <div class='control-group'>
                  <label class='control-label'>Password</label>
                  <div class='controls'>
                    <input type='password' name='pwd' id='pwd' />
                  </div>
                </div>
                <div class='control-group'>
                  <label class='control-label'>Confirm password</label>
                  <div class='controls'>
                    <input type='password' name='pwd2' id='pwd2' />
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
    }

   break; 
   } 
 ?>   
    
      </div>   
  </div>
