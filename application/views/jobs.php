<?php if ($listings) { 
  
    echo '<h2>All Listings <cite>' . count($listings) . '</cite></h2>'; 
    echo '<ol id="listings">'; 
    $counter = 0; 
  
    foreach ($listings as $row) { 
  
        $counter++; 
        
        ?> 
  
<li<?php if ($counter == 2) { echo ' class="alt"'; $counter = 0; } ?>> 
  
<?php $segments = array ('jobs', 'details', $row['id']); ?> 
  
<a href="<?php echo site_url($segments); ?>"> 
  
    <span class="title"><?php echo $row['title']; ?></span> 
    <span class="meta"><strong><?php echo $row['city']; ?></strong> 
        | <?php echo $row['company']; ?> 
        | <em><?php echo $row['remuneration']; ?></em> 
    </span> 
    
  
</a> 
  
</li> 
  
<?php 
  
    } 
  
    echo '</ol>'; 
  
} 
  
else { 
  
    echo '<h2>No Listings Available</h2>'; 
    echo '<p>There are currently no active listings.</p>'; 
  
} ; ?>


<?php     
if ($province) { 
    foreach ($province as $row) { 
        $segments = array('jobs', 'listings', $row['id']); 
        ?> 
        <li><a href="<?php echo site_url($segments); ?>"><span>&raquo;</span> <?php echo $row['province']; ?></a></li> 
        <?php 
    } 
}        
?>
