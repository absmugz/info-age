
<script>
    function Link(url)
    {
        document.location.href = url;
    }  
</script>   
<div class="container"> 
<div class="row">
        <div class="col-lg-2"><div role="navigation" id="sidebar" class="sidebar-offcanvas">
          <div class="list-group">
            <a class="list-group-item active" href="#">Province</a>
            
             <?php    
if ($provinces) {
    foreach ($provinces as $row) {
    $segments = array('jobs', 'get_provinces', $row['province_Id']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['province'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
 <div class="list-group">
            <a class="list-group-item active" href="#">Category</a>
            
             <?php    
if ($category) {
    foreach ($category as $row) {
    $segments = array('jobs', 'get_category', $row['job_categories_id']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['job_categories'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
 <div class="list-group">
            <a class="list-group-item active" href="#">Country</a>
            
             <?php    
if ($country) {
    foreach ($country as $row) {
    $segments = array('jobs', 'get_country', $row['country_id']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['country'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
   <div class="list-group">
            <a class="list-group-item active" href="#">Experience level</a>
            
             <?php    
if ($experience) {
    foreach ($experience as $row) {
    $segments = array('jobs', 'get_experience', $row['experience_level_id']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['experience_level'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
  <div class="list-group">
            <a class="list-group-item active" href="#">Education</a>
            
             <?php    
if ($education) {
    foreach ($education as $row) {
    $segments = array('jobs', 'get_education', $row['education_level_id']);
        ?>
      <a class="list-group-item" href="<?php echo site_url($segments); ?>"><?php echo $row['education_level'] ?></a>
        <?php
    }
}       
?> 
 </div> <!-- ends here -->
        </div></div>
        <div class="col-lg-7">
	<?php
        $attributes = array('class' => 'form-inline', 'id' => 'form');
         echo form_open('films/search', $attributes); ?>
		<div class="form-group">
			<?php
                         $attributes = array('class' => 'sr-only', 'for' => 'title');
                        echo form_label('Title:', 'title',  $attributes); ?>
			<?php echo form_input('title', set_value('title'), 'id="title"'); ?>
                    
                    
		</div>
	
		<div class="form-group">
			<?php echo form_label('Category:', 'category'); ?>
			<?php echo form_dropdown('category', $category_options, 
				set_value('category'), 'id="category"'); ?>
		</div>
	
		
		
			<?php echo form_submit('action', 'Search'); ?>
		
	
	<?php echo form_close(); ?>
            <table class="table table-hover">
                <thead>

                <th>Title</th> 
                <th>Province</th> 
                <th>Company</th>
                <th>Remuneration</th>
                <th>Date posted</th>

                </thead>
                <tbody>
                    <?php foreach ($jobs as $job_item): ?>
                        <tr onclick="Link('jobs/view/<?= $job_item->id ?>');" style="cursor: pointer;">

                            <td><?php echo $job_item->title ?></td>
                            <td><?php echo $job_item->province ?></td>
                            <td><?php echo $job_item->company ?></td>
                            <td><?php echo $job_item->remuneration ?></td>
                            <?php
                            $timestamp = strtotime($job_item->date_posted);
                            $new_date = date('j F', $timestamp);
                            ?>   
                            <td><?php echo $new_date; ?></td>
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


        </div></div></div>


