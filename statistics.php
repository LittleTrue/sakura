<?php 

/**
  Template Name: 定制统计
 */

get_header(); ?>
 
<?php echo "<center>";?>

<!-- 统计天数-->
<br>
<span style="font-weight:bold">LittleTrue在充满热情的</span>
&nbsp
<?php echo floor((time()-strtotime("2022-3-21"))/86400); ?>
&nbsp
<span style="font-weight:bold">天里</span>

<!-- 统计文章-->
<br>
<span>共发表了</span>
&nbsp
<?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish;?>
&nbsp
<span>篇文章</span>

<!-- 统计页面-->
<br>
<span>共构建了</span>
&nbsp
<?php $count_pages = wp_count_posts('page'); echo $page_posts = $count_pages->publish; ?>
&nbsp
<span>个页面</span>

<!-- 用户-->
<br>
<span>共收获了</span>
&nbsp
<?php $users = $wpdb->get_var("SELECT COUNT(ID) FROM $wpdb->users"); echo $users; ?>
&nbsp
<span>位粉丝</span>

<!-- 最后更新时间-->
<br>
<span>最后更新文章时间为:</span>
&nbsp
<?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y-n-j', strtotime($last[0]->MAX_m));echo $last; ?>

<?php
$sitecount = get_option('site_count');    
    $date = date('ymd',time());
    echo '<p>总访问量：<span style="color:red">'.absint($sitecount['all']).'</span> &nbsp;&nbsp;
     今日访问量：<span style="color:red">'.absint($sitecount['today']).'</span> 
     &nbsp;&nbsp; 您是今天第：<span style="color:red">'.absint($_SESSION['wb_'.$date]).'</span> 个访问者</p>';   
?>
<hr>
<span>当前访客ip为:</span>
&nbsp
<?php echo do_shortcode("[show_ip]"); ?>

<?php echo "</center>";?>
<?php get_footer(); ?>