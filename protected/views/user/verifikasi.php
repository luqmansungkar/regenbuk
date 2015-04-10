<?php $this->layout = 'admin'; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Verified?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $odd = true;
                                        foreach ($model as $row) {
                                            if ($odd) {
                                                echo '<tr class="odd gradeX">';
                                            }else{
                                                echo '<tr class="even gradeC">';
                                            }
                                            echo '
                                                <td>'.$row["id"].'</td>
                                            <td>'.$row["username"].'</td>
                                            <td>'.$row["email"].'</td>
                                            <td class="center">';
                                            if ($row['verified'] == "0") {
                                                /*echo CHtml::ajaxSubmitButton('Activate',Yii::app()->createUrl('user/verifikasi'),
                                                                    array(
                                                                        'type'=>'POST',
                                                                        'data'=> 'js:{"id": "'.$row["id"].'", "action": "1" }',                        
                                                                        'success'=>'js:function(string){ alert(string); }'           
                                                                    ),array('class'=>'btn btn-sm btn-success',));*/
                                                echo '<button id="'.$row["id"].'" onclick="myFunction('.$row["id"].',1)" class="btn btn-sm btn-success">Activate</button>';
                                            }else{
                                                /*echo CHtml::ajaxSubmitButton('Deactivate',Yii::app()->createUrl('user/verifikasi'),
                                                                    array(
                                                                        'type'=>'POST',
                                                                        'data'=> 'js:{"id": "'.$row["id"].'", "action": "0" }',                        
                                                                        'success'=>'js:function(string){ alert(string); }'           
                                                                    ),array('class'=>'btn btn-sm btn-danger',));*/
                                                echo '<button id="'.$row["id"].'" onclick="myFunction('.$row["id"].',0)" class="btn btn-sm btn-danger">Deactivate</button>';
                                            }
                                            
                                            echo '</td></tr>';
                                            $odd = !$odd;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

<script type="text/javascript">
    function myFunction(a,b) {
    var x;
    if (confirm("Are you sure?") == true) {
        //console.log(a+","+b);
        loadXMLDoc(a,b);
    } else {
        //alert("You pressed Cancel!");
    }
}
</script>

<script>
function loadXMLDoc(a,b)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        if (b==1) {
            document.getElementById(a).className = "btn btn-sm btn-danger";
            document.getElementById(a).innerHTML  = "Deactivate";
            document.getElementById(a).setAttribute('onclick','myFunction('+a+',0)');
        }else{
            document.getElementById(a).className = "btn btn-sm btn-success";
            document.getElementById(a).innerHTML  = "Activate";
            document.getElementById(a).setAttribute('onclick','myFunction('+a+',1)');
        }
        
        //alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("POST","<?php echo Yii::app()->request->baseUrl; ?>/user/verifikasi",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send('id='+a+'&action='+b);
}
</script>