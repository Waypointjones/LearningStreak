<?php get_header(); 

?>

<?php 
$pages = get_pages(array('include' => '9,11,18,23', 'sort_column' => 'post_date', 'sort_order' => 'asc'));
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
	$slug = $page_data->post_name;
	echo "<a id='$slug' class='anchor'></a>";
   	echo "<section class='$slug'>";
	echo "<article>";
	echo $content;
	echo "</article>";
	echo "</section>";
}
?>


 
<?php get_footer(); ?>