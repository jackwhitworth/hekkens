<?php
/*
Template Name: Social
*/

	function fetchData($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		$result = curl_exec($ch);
		curl_close($ch); 
		return $result;
	}

	get_header();
?>
 	

	<section id="<?php echo basename(get_permalink()); ?>">

		<div class="container-fluid">

			<article>

				<div class="the-content row">

					<div class="si_feed">

				  		<?php

							require_once get_template_directory() . '/partials/instagram.class.php';

							// Initialize class for public requests
							$instagram = new Instagram('6342c0f526eb41baa643d7521382a7ed');

							$user = '1014608391';
							// $user = '15641933';
							
							// Get recently tagged media
							$media = $instagram->getUserMedia($user, 19);

								
							foreach ($media->data as $data) {

								$date = date('d M. Y', $data->created_time);
								$tags = implode(' #', $data->tags);
								$hash = '#';
								$tags = $hash . $tags;

								echo "<div class=\"si_item\">";
									echo "<div class=\"image-container\" title=\"{$date}<br/>{$tags}\">";
										echo "<img alt=\"instagram image\" src=\"{$data->images->standard_resolution->url}\"/>";
									echo "</div>";
									echo "<div class=\"text-overlay\">";
										echo "<div class=\"text-overlay-inner\">";
											echo "<span class=\"date\">{$date}</span>";
											echo "<hr>";
											echo "<span class=\"ralph\">#ralphrucci</span>";
											echo "<span class=\"tags\">{$tags}</span>";
											echo "<a class=\"fancybox\" title=\"{$date}<br/>{$tags}\" data-fancybox-group=\"gallery\" href=\"{$data->images->standard_resolution->url}\">see more</a>";
										echo "</div>";
									echo "</div>";									
								echo "</div>";
							}
						?>

					</div>

				</div>

			</article>

		</div>

	</section>

	<div class="load-more">
		<?php

			echo "<button id=\"social-more\" class=\"btn btn-default\" data-maxid=\"{$media->pagination->next_max_id}\" data-user=\"{$user}\">load more</button>";


		?>
	</div>

	<!-- /GENERAL PAGE TEMPLATE -->
<?php
	get_footer();
?>
