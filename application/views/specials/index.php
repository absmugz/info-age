<script>
 function Link(url)
  {
  document.location.href = url;
  }  
</script> 

<div class="container"> 
<!--special category starts here -->
<div class="col-lg-2"><div role="navigation" id="sidebar" class="sidebar-offcanvas">
          <div class="list-group">
            <a class="list-group-item active" href="#">Category</a>
            
             <?php    
if ($specials_categories) {
    foreach ($specials_categories as $row) {
    $segments = array('specials', 'get_specials_categories', $row['specials_cat_ID']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['category'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
</div></div><!--special category ends here -->
<?php foreach ($specials as $special_item): ?>
    <div class="row">
        <div class="col-lg-2"></div>
<div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4">
                <?php
                $filename = $special_item->file_name;
                echo img(config_item('img_path') . $filename);
                ?> </div><!--/span-->
            <div class="col-lg-8">
                <h2> <?php echo $special_item->name ?></h2>
                <p> <?php echo $special_item->description ?> </p>
                
                <?php
                $directory = $special_item->hyperlink;
                                ?>
              
                 <p><a href= "<?php echo $directory; ?>" class="btn btn-default" role="button">View details</a></p>
            </div><!--/span-->
            <!--/span-->
            <!--/span-->
            <!--/span-->
            <!--/span-->
        </div><hr></div></div><!--/row-->
    <?php endforeach ?>

  



            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>

</div><!--/end container-->
      

