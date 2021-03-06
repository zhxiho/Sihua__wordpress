<?php
get_header('meta');
get_header();
?>
<!-- content start -->
	<!-- banner start -->
	<!--  data-interval="interval" data-wrap="wrap" data-pause="pause" -->
	<div id="myCarousel" class="wrapper carousel slide">
	    <!-- 轮播（Carousel）指标 -->
	    <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>   
	    <!-- 轮播（Carousel）项目 -->
	    <div class="carousel-inner">
	        <div class="item active">
	            <img src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
	        </div>
	        <div class="item">
	            <img src="<?php bloginfo('template_url');?>/static/img/img/banner2.png">
	        </div>
	        <div class="item">
	            <img src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
	        </div>
	    </div>
	    <!-- 轮播（Carousel）导航 -->
	    <a class="carousel-control left" href="#myCarousel" 
	        data-slide="prev">
	        <img class="banner-prev" src="<?php bloginfo('template_url'); ?>/static/img/icon/left.png" alt="上一张图片" />
	    </a>
	    <a class="carousel-control right" href="#myCarousel" 
	        data-slide="next">
	        <img class="banner-next" src="<?php bloginfo('template_url'); ?>/static/img/icon/right.png" alt="下一张图片" />
	    </a>
		<img class="carousel-control bottom" src="<?php bloginfo('template_url'); ?>/static/img/icon/down.png" alt="往下看" />
	    <!-- 控制按钮 -->
	    <div style="text-align:center;display:none;">
	        <input type="button" class="btn start-slide" value="Start">
	        <!-- <input type="button" class="btn pause-slide" value="Pause">
	        <input type="button" class="btn prev-slide" value="Previous Slide">
	        <input type="button" class="btn next-slide" value="Next Slide">
	        <input type="button" class="btn slide-one" value="Slide 1">
	        <input type="button" class="btn slide-two" value="Slide 2">            
	        <input type="button" class="btn slide-three" value="Slide 3"> -->
	    </div>
	</div> 
	<!-- banner end -->
	<!-- product start -->
	<div class="content-wrapper">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>产品中心</p>
	        </div>
	        <div class="product-list">
	        	<div id="first" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/media.png" alt="" class="product-pic" />
	                <p class="product-name">互动媒体</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="second" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/invented.png"  alt=""  class="product-pic" />
	                <p class="product-name">虚拟化</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="third" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/cloudbase.png"  alt=""  class="product-pic" />
	                <p class="product-name">云基础设施</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="last" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/bigdata.png"  alt=""  class="product-pic" />
	                <p class="product-name">大数据</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- product end -->
	<!-- project start -->
	<div class="content-wrapper" style="background-color:#f6f6f6;">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>行业解决方案</p>
	        </div>
	        <div class="project-list">
	            <!-- 获取行业解决方案文章 -->
	            <?php
	                //global $query_string;
	                query_posts('showposts=6&cat=2');
	                $i = 0;
	                $index = 0;
	                if (have_posts()){
	                    while (have_posts()){
	                        the_post();
	                        $content = $post->post_content;
	                        $searchimages = '~<img [^>]* />~';
	                        preg_match_all( $searchimages, $content, $pics );
	                        $iNumberOfPics = count($pics[0]);
	                        if ( $iNumberOfPics > 0 &&$i <6) {
	                          echo "<a id='project";
	                          echo $index++;
	                          echo "' href=' ";
	                          echo the_permalink();
	                          echo "' class='project'><img src=' ";
	                          echo catch_that_image();
	                          echo "' alt='";
	                          echo the_title();
	                          echo "' class='project-pic' /><div class='project-info'>";
	                          echo "<p>";
	                          echo the_title();
	                          echo "</p><div class='project-icon' ";
	                          echo " ><div class='icon'></div>
	                          <div class='icon'></div>
	                          <div class='icon'></div>
	                          </div></div></a>";
	                          $i ++;
	                        }
	                    }
	                }
	            ?>
	        </div>
		</div>
	</div>
	<!-- project end -->
	<!--news start -->
	<div class="content-wrapper">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>思华动态</p>
	        </div>
	        <div class="news-list">
	        	<div id="news1" class="news">
	                <div class="news-left">
	                    <p class="news-kind">
	                        新闻动态
	                        <a href="" class="news-more">更多&gt;</a>
	                    </p>
	                </div>
	                <div class="news-first">
	                	<!-- 获取新闻动态文章 -->
	                	<?php
	                	if(have_posts()):
							query_posts('cat=1'.$mcatID.'&showposts=1');
							while(have_posts()):the_post();
						?>
					     	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
					     		<p class="news-first-title">
					     			<?php echo wp_trim_words(get_the_title(),22,"...");  ?>
            					</p>
            					<p class="news-first-abstract">
            						<?php echo wp_trim_words(get_the_content(),80,"..."); ?>
            					</p>
            				</a>
						<?php
							endwhile;
							endif; wp_reset_query();
						?>
	                </div>
	                <?php
                	if(have_posts()):
						query_posts('cat=1'.$mcatID.'&showposts=2&offset=1');
						while(have_posts()):the_post();
					?>
				     	<div class='news-lists'>
				     		<p class='news-title'>
				     			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
				     				<?php echo wp_trim_words(get_the_title(),22,"...");  ?>
				     			</a>
				     			<span><?php the_time('Y-m-d H:m:s'); ?></span>
				     		</p>
				     	</div>
					<?php
						endwhile;
						endif; wp_reset_query();
					?>
	            </div>
	            <div id="news2" class="news news02">
	                <div class="news-left">
	                    <p class="news-kind">
	                        媒体报导
	                        <a href="" class="news-more">更多&gt;</a>
	                    </p>
	                </div>
	                <div class="news-first">
		                <!-- 获取媒体报导文章 -->
	                	<?php
	                	if(have_posts()):
							query_posts('cat=3'.$mcatID.'&showposts=1');
							while(have_posts()):the_post();
						?>
					     	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
					     		<p class="news-first-title">
					     			<?php echo wp_trim_words(get_the_title(),24,"...");  ?>
            					</p>
            					<p class="news-first-abstract">
            						<?php echo wp_trim_words(get_the_content(),80,"..."); ?>
            					</p>
            				</a>
						<?php
							endwhile;
							endif; wp_reset_query();
						?>
	                </div>
	                <?php
                	if(have_posts()):
						query_posts('cat=3'.$mcatID.'&showposts=2&offset=1');
						while(have_posts()):the_post();
					?>
				     	<div class='news-lists'>
				     		<p class='news-title'>
				     			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
				     				<?php echo wp_trim_words(get_the_title(),24,"...");  ?>
				     			</a>
				     			<span><?php the_time('Y-m-d H:m:s'); ?></span>
				     		</p>
				     	</div>
					<?php
						endwhile;
						endif; wp_reset_query();
					?>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- news end -->
	<!-- pantner start -->
	<div class="content-wrapper" style="background-color:#f6f6f6;">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>合作伙伴</p>
	        </div>
	        <div class="partner-list">
	        	<div class="partner-page01">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                </div>
	            </div>
	            <div class="partner-page02">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	            </div>
	            <div class="partner-page03">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                	<img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	            </div>
	        </div>
	        <div class="partner-next-button">
	            <a dl="1" href="javascript:void(0);" class="partner-point point"></a>
	            <a dl="2" href="javascript:void(0);" class="partner-point"></a>
	            <a dl="3" href="javascript:void(0);" class="partner-point"></a>
	        </div>
	    </div>
	</div>
	<!-- pantner end -->
<!-- content end --> 

<?php
get_footer();
?>



        