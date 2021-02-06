
<?php
  include_once 'includes/header.php';
  session_start();
  

if(isset($_POST['validate'] )) //if submit btn is pressed
{

  $username = stripslashes($_POST['username']);

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.      

    $query = "SELECT username FROM user_authenticate_tbl WHERE username = ?";
    $params = array($username);
      
    $stmt = sqlsrv_query($db, $query, $params, array("Scrollable"=>"buffered"));

    if( !$stmt ) {
        die( print_r( sqlsrv_errors(), true));
    } 

    $row_count = sqlsrv_num_rows($stmt);

    if($row_count > 0 ){

      while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){

        $first_name = $row['username'];

        $success = "User already exists... You will be redirected to the login page! <p>Redirection in <span id='counter'>5</span> second(s).</p>
                                <script type='text/javascript'>
                                function countdown() {
                                  var i = document.getElementById('counter');
                                  if (parseInt(i.innerHTML)<=0) {
                                    location.href = 'login.php';
                                  }
                                  i.innerHTML = parseInt(i.innerHTML)-1;
                                }
                                setInterval(function(){ countdown(); },1000);
                                </script>'";
        
         header("refresh:5;url=login.php");

      }
    } else {

        $message = "Ready to register a the Mobaliser! <p>Redirection in <span id='counter'>2</span> second(s).</p>
                                <script type='text/javascript'>
                                function countdown() {
                                  var i = document.getElementById('counter');
                                  if (parseInt(i.innerHTML)<=0) {
                                    location.href = 'registers.php?id=$username';
                                  }
                                  i.innerHTML = parseInt(i.innerHTML)-1;
                                }
                                setInterval(function(){ countdown(); },1000);
                                </script>'";
        
        header("refresh:2;url=registers.php?id=$username");

    }


}

?>

<style>
  #username:valid {
    color: green;
  }
  
  #username:invalid {
    color: red;
  }

  #page{
      width:auto;
      height:490px;
      
  }

</style>

  <section id=page>

    <div class="u-clearfix u-sheet u-sheet-1">      
      <div class="u-form u-form-1">
        <div align="center">
            <span style="font-size: 30px">Validate Cellphone Number</span>
          <br><br><br>
        </div>

    <form name="validationForm" action="" method="post">

      <div class="row">
        
        <div class="col-sm-12">
          <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
            <label for="username">Cellphone Number</label>
              <input class="u-grey-5 u-input u-input-rectangle" 
                    class="form-control" 
                    type="tel"  
                    placeholder="Please enter your valid cellphone number, eg: +27825561420"  
                    name="username" 
                    id="username" 
                    value="+27" 
                    oninput="this.value = this.value.replace(/[^0-9.+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" 
                    pattern="[0-9+]{12}"
                    required>
          </div>          
        </div> 

          <div class="col-sm-12" align="center">
            <p> 
              <input type="submit" value="Validate Number" name="validate" class="btn btn-danger" style="font-size: 20px"> 
            </p>
          </div>
    

        </div>
    </form>

      <br><br>
      <div align="center">
        <span style="color:green;" align="center"><?php echo $message; ?></span> 
        <span style="color:green;" align="center"><?php echo $success; ?></span>  
      </div> 


      </div>
    </div>
  </section>

    <br><br>

<?php 
  include_once 'includes/footer.php';
?>