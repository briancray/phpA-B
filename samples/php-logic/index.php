<?php

require_once('../../phpab.php');
$my_test = new phpab('headline', TRUE); // remove TRUE to turn on GA tracking and maintain variation
$my_test->add_variation('logos');
$my_test->add_variation('ethos');
$my_test->add_variation('pathos');

?><!DOCTYPE html>
<html>
<head>
	<title>Saving fluffy bunnies, one A/B test at a time</title>
	
	<style type="text/css">
		h1 /* control style */
		{
			color: black;
		}
		.phpab-ethos h1 /* =="ethos" variation */
		{
			color: blue;
		}
		.phpab-pathos h1 /* "pathos" variation */
		{
			color: red;
		}
		.phpab-logos h1 /* "logos" variation */
		{
			color: green;
		}
	</style>
	
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-xxxxxxxx-x']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	
</head>
<body>
	<?php if ($my_test->get_user_segment() == 'logos') : ?>
		<h1>99% of people are concerned about fluffy bunnies.</h1>
	<?php elseif ($my_test->get_user_segment() == 'ethos') : ?>
		<h1>Fluffy bunnies deserve to be protected.</h1>
	<?php elseif ($my_test->get_user_segment() == 'pathos') : ?>
		<h1>Fluffy bunnies are cute and snuggly.</h1>
	<?php else : ?>
		<h1>OMG! Fluffy bunnies!</h1>
	<?php endif; ?>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sapien orci, tincidunt nec euismod sit amet, porttitor sed massa. Vestibulum sollicitudin risus eu quam consequat elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae nunc eget tellus semper rhoncus imperdiet ac arcu. Suspendisse et felis lacus. Suspendisse neque dui, suscipit et vehicula at, lacinia at leo. Pellentesque at dignissim leo. Phasellus felis lectus, varius sit amet sodales vel, convallis sit amet leo. Curabitur mi sapien, tristique ac rutrum at, posuere non dolor. Sed non fermentum nisi. Vivamus sapien nisi, blandit at imperdiet vitae, tempus eget leo. Phasellus ultrices interdum pretium. Nunc ornare viverra arcu ac aliquam. In ut dignissim ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros enim, euismod sit amet dictum at, venenatis vel mauris. Proin pharetra velit a dui egestas accumsan.</p>

	<p>Duis id quam at lacus porttitor iaculis vel eget eros. Morbi vulputate elit ac lacus porta sed tempus sem facilisis. Praesent semper neque vel nulla molestie nec faucibus nisi vulputate. Quisque semper est ultrices tortor volutpat adipiscing. Aenean lacus turpis, fringilla a commodo eget, congue et urna. Phasellus tortor urna, tempus id dapibus eget, porttitor at eros. Curabitur rutrum rutrum massa, eget mollis massa luctus facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ultricies diam non urna sodales a hendrerit purus semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras non ipsum arcu, a blandit mauris. Cras scelerisque adipiscing nisi, in pulvinar nibh pellentesque vitae. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies odio euismod orci malesuada nec tincidunt orci fermentum.</p>

	<p>Donec ullamcorper dui et ipsum ultrices sed volutpat felis semper. Sed volutpat tincidunt fringilla. Curabitur at erat vel risus posuere aliquet. Proin nec sapien et nisi hendrerit dictum ut at leo. Nullam vitae mauris quam. Fusce a porta dui. Sed tempor, urna sit amet tempus rhoncus, nibh libero hendrerit neque, eget vestibulum nibh purus sit amet odio. Duis orci sapien, ullamcorper vitae sollicitudin et, bibendum vel tortor. Cras pulvinar suscipit ipsum quis volutpat. Integer purus mi, sollicitudin at molestie vitae, congue sit amet lectus. Cras accumsan, metus sed pulvinar vehicula, dui odio dapibus velit, a porta purus turpis in nulla. Maecenas ligula neque, volutpat ut sodales sit amet, volutpat a nisl. Aliquam erat volutpat.</p>
	
</body>
</html>