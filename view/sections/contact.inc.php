<h2><?= $general->contact_head; ?></h2>
<p class="lead">
	<?= $general->contact_quote; ?> 
</p>

<hr />

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="<?= $contact->twitter; ?>" target="_blank">
					<span class="icon icon-twitter"></span>
					<?= $contact->twitter; ?>
				</a>
			</li>
			<li>
				<a href="<?= $contact->linkedin; ?>" target="_blank">
					<span class="icon icon-linkedin"></span>
					<?= $contact->linkedin; ?>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<!--<li>
				<a href="javascript:void(0);">
					<span class="icon icon-skype"></span>
					<?= $contact->skype; ?>
				</a>
			</li>-->
			<li>
				<a href="mailto:<?= strrev($contact->email); ?>">
					<span class="icon icon-email"></span>
					<span style="unicode-bidi:bidi-override; direction: rtl;">
						<?= strrev($contact->email); ?>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<hr />

<div id="fb-root"></div>
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7&appId=985347541574521"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="text-center">
	<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.c633b87376883931e7436b93bb46a699.en.html#_=1452458429192&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;size=m&amp;text=Nicolas%20Bellengé%20-%20Web%20Developer%20-%20Interactive%20Resume&amp;type=share&amp;url=http%3A%2F%2Fcuric.uldosphere.org%2F%3Fref%3Dtwitter&amp;via=uld" style="position: static; visibility: visible; width: 62px; height: 20px;" data-url="http://curic.uldosphere.org/?ref=twitter"></iframe>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<div class="fb-like" data-href="http://curic.uldosphere.org" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

</div>