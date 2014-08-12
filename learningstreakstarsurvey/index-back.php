<?php get_header(); 

?>

<?php 
$current_id = get_the_ID();
$pages = get_pages(array('sort_column' => 'post_date', 'sort_order' => 'asc'));
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
	$slug = $page_data->post_name;
	$link_page_id = ($page->ID);
	$varCurrent = "";
	if ($current_id == $link_page_id){
	  $varCurrent = "selected";	
	}
	echo "<a id='$slug' class='anchor $varCurrent'></a>";
   	echo "<section class='$slug'>";
	echo "<article>";
	echo $content;
	echo "</article>";
	echo "</section>";
}
?>


 
<?php get_footer(); ?>