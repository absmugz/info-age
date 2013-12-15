<script>
 function Link(url)
  {
  document.location.href = url;
  }  
</script> 

<div class="container"> 


    <div class="row">
       <!--special category starts here -->
<div class="col-lg-2"><div role="navigation" id="sidebar" class="sidebar-offcanvas">
          <div class="list-group">
            <a class="list-group-item active" href="#">Subjects</a>
            <a class="list-group-item" href="matric_resources">All</a>
            
             <?php    
if ($matric_subjects) {
    foreach ($matric_subjects as $row) {
    $segments = array('matric_resources', 'get_matric_subjects', $row['subject_ID']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['subject'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
</div></div><!--special category ends here -->
  <div class="col-lg-7">

            <table class="table table-hover">
                <thead>

                <th>Name</th> 
                <th>Subject</th> 
                <th>Download pdf</th>
               
                </thead>
                <tbody>
                    <?php foreach ($matric as $job_item): ?>
                        <tr>

                            <td><?php echo $job_item->name ?></td>
                            <td><?php echo $job_item->subject ?></td>
                            <td>  <?php
                $pdfurl = config_item('img_path');        
                $filename = $job_item->file_name;
                $pdf = $pdfurl.$filename;
                ?><a href= "<?php echo base_url($pdf); ?>" class="btn btn-default" role="button">Download pdf</td>
                 <?php endforeach ?>
                    </tr>

                </tbody>
            </table>
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>


        </div></div></div><!--/row-->


</div><!--/end container-->
      

