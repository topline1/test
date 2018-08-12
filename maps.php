<?php /* Template Name: map page */ ?>
<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'location',
    'posts_per_page' => -1 ,
    'order' => 'ASC',
);

$the_query = new WP_Query($args);
$out = array();
if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        $counter++;

        $addrs = get_post_meta(get_the_ID(), 'loc_address', true);
        $id = get_the_ID();


        $Array = array($id, $addrs);


        $results[] = $Array;



    endwhile;


endif;
wp_reset_query();
?>

<div class="map-page">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 map-holder">
                <select class="selectpicker" id="collect_account_num" style="margin-bottom:20px;">

                    <option>من فضلك اختر الفرع</option>
<?php foreach ($results as $result) { ?>


                        <option value="<?php echo $result[0]; ?>"><?php echo $result[1]; ?></option>


<?php } ?>

<!-------------------------------------- Start -------------------------------------->
                </select>
                <div class="extra" style="position:absolute;height:200px;width:200px;right:0;top:25%;background:rgba(255,255,255,.7);z-index:9999;color:#000;padding: 20px 0;display:none">
                    <ul class="extra">
                        <li style="float: right;padding:10px;width:100%">اسم المسئول:<span id="loc_admin" style="padding-right: 10px"></span></li>
                        <li style="float: right;padding:10px;width:100%">الجوال:<span id="loc_mobile" style="padding-right: 10px"></span></li>
                        <li style="float: right;padding:10px;width:100%">الهاتف:<span id="loc_tel" style="padding-right: 10px"></span></li>
                     <a href="">   <li style="float: right;padding:10px;width:100%">رابط الخريطة:<span id="loc_url" style="padding-right: 10px"></span></li></a>

                    </ul>
                </div>
<!-------------------------------------- End -------------------------------------->

                <div id="map" class="googlemapimage" style="height:400px;width:100%;position:relative;">

                </div>



            </div>

        </div>

    </div>
</div>        



<?php get_footer(); ?>
