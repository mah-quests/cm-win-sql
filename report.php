<?php 
  include_once 'includes/header.php';
?>
<style>
#page{
    width:auto;
    height:490px;
    
}
</style>

<?php

    $mobiliser_id = $_SESSION['user_id'];

    $query = "SELECT * FROM summary_tbl WHERE mobiliser_id = ?";
    $params = array($mobiliser_id);
      
    $stmt = sqlsrv_query($db, $query, $params, array("Scrollable"=>"buffered"));

    if( !$stmt ) {
        die( print_r( sqlsrv_errors(), true));
    }            

    $survey_numbers = sqlsrv_num_rows($stmt); 


?>


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
          <center style="font-size: 18px">
            Surveys Completed So Far: <i><b><?php echo $survey_numbers ?></b></i>
          </center>
            <div class="table-responsive"><br>
              <table class="table">
                <thead class=" text-secondary">
                  <th>
                    Date & Time of Survey
                  </th>
                  <th>
                    Reference Number
                  </th>
                  <th>
                    Respondent Full Names
                  </th>
                  <th>
                    Respondent Cellphone
                  </th>
                  <th>
                    Municipality, Province
                  </th>
                  <th class="text-right">
                    Transaction ID
                  </th>
                </thead>
                <tbody>



        <?php

            //Checking is user existing in the database or not
            $query = "SELECT * FROM summary_tbl WHERE mobiliser_id = ?";
            $params = array($mobiliser_id);
              
            $stmt = sqlsrv_query($db, $query, $params, array("Scrollable"=>"buffered"));

            if( !$stmt ) {
                die( print_r( sqlsrv_errors(), true));
            }            

            $row_count = sqlsrv_num_rows($stmt); 

            if($row_count > 0 ){
              while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {  


                echo ' <tr>
                        <td>'.$row['completed_datetime'].'</td>
                        <td>'.$rows['unique_code'].'</td>
                        <td>'.$rows['respondant_name'].' '.$rows['respondant_surname'].' </td>
                        <td>'.$rows['respondant_phone'].'</td>
                        <td>'.$rows['municipality'].', '.$rows['province'].' </td>
                        <td align="right">
                          <a href="survey-id-detail.php?id='.$rows['summary_id'].' ">
                              '.$rows['summary_id'].'
                          </a>
                        </td>
                        </tr>';

                        
              }
            } else{
              echo '<td colspan="7">
                      <center>
                          No Surveys Completed Yet!
                      </center>
                  </td>';                 
            }
           

            ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>
    
<?php 
  include_once 'includes/footer.php';
?>