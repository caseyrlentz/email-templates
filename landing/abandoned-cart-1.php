<!DOCTYPE HTML>
<html>
<?php include('../includes/header.php'); ?>
<?php $current_file_name = basename($_SERVER['PHP_SELF']); ?>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><?php echo str_replace(".php",'',$current_file_name) ?></a>
					</header>

				<!-- Nav -->
				<?php include('../includes/nav.php'); ?>

				<!-- Main -->
					<div id="main">
						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1><?php echo str_replace(".php",'',$current_file_name) ?></h1>
								</header>
								<div class="image main"><img src="https://s3.amazonaws.com/community-templates/production/ad5fe998d27eab82fd384a08047956b182c0c603.png" alt="" /></div>
<pre>
<code class="language-markup">
&lt;!-- THIS EMAIL WAS BUILT AND TESTED WITH LITMUS http://litmus.com --&gt;<br />
&lt;!-- IT WAS RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT --&gt;<br />
&lt;!-- QUESTIONS? TWEET US @LITMUSAPP --&gt;<br />
&lt;!DOCTYPE html&gt;<br />
&lt;html&gt;<br />
  &lt;head&gt;<br />
    &lt;title&gt;&lt;/title&gt;<br />
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;<br />
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;<br />
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;<br />
    &lt;style type="text/css"&gt;<br />
      /* FONTS */<br />
      @media screen {<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v13/dPJ5r9gl3kK6ijoeP1IRsvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v13/EsvMC5un3kjyUhB9ZEPPwg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v13/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v13/ObQr5XYcoH0WBoUxiaYK3_Y6323mHUZFJMgTvxaG2iE.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v13/H2DMvhDLycM56KNuAtbJYA.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 900;<br />
      src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v13/R4a6fty3waPci7C44H8AjvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: normal;<br />
      font-weight: 900;<br />
      src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v13/tI4j516nok_GrVf4dhunkg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://fonts.gstatic.com/s/lato/v13/XNVd6tsqi9wmKNvnh5HNEBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://fonts.gstatic.com/s/lato/v13/2HG_tEPiQ4Z6795cGfdivFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v13/YMOYVM-eg6Qs9YzV9OSqZfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v13/PLygLKRVCQnA5fhu3qk5fQ.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v13/AcvTq8Q0lyKKNxRlL28RnxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Lato';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v13/HkF_qI1x_noxlxhrhMQYEFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTa-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTZX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTRWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTaaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTf8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTT0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/K88pR3goAWT7BTt32Z01mxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/RjgO7rYTmqiVp7vzi-Q5URJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/LWCjsQkB6EMdfHrEVqA1KRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/xozscpT2726on7jbcb_pAhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSq-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSpX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNShWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSqaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSv8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSj0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzK-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzJX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzBWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzKaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzP8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: normal;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhgVThLs8Y7ETJzDCYFCSLE.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxpiMaisvaUVUsYyVzOmndek.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxrBAWGjcah5Ky0jbCgIwDB8.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxv14vlcfyPYlAcQy2UfDRm4.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqfJul7RR1X4poJgi27uS4w.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqvyPXdneeGd26m9EmFSSWg.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 300;<br />
      src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxko2lTMeWA_kmIyWrkNCwPc.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjTOQ_MqJVwkKsUn0wKzc2I.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjUj_cnvWIuuBMVgbX098Mw.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBkbcKLIaa1LC45dFaAfauRA.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBmo_sUJ8uO4YLWRInS22T3Y.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBr6up8jxqWt8HVA3mDhkV_0.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBiYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 400;<br />
      src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmgpAmOCqD37_tyH_8Ri5MM.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxsPNMTLbnS9uQzHQlYieHUU.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgyhumQnPMBCoGYhRaNxyyY.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhUVAXEdVvYDDqrz3aeR0Yc.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxlf4y_3s5bcYyyLIFUSWYUU.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxnywqdtBbUHn3VPgzuFrCy8.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 600;<br />
      src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxl2umOyRU7PgRiv8DXcgJjk.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxp6iIh_FvlUHQwED9Yt5Kbw.woff2) format('woff2');<br />
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxi_vZmeiCMnoWNN9rHBYaTc.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxiFaMxiho_5XQnyRZzQsrZs.woff2) format('woff2');<br />
      unicode-range: U+1F00-1FFF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgalQocB-__pDVGhF3uS2Ks.woff2) format('woff2');<br />
      unicode-range: U+0370-03FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmhQUTDJGru-0vvUpABgH8I.woff2) format('woff2');<br />
      unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxujkDdvhIIFj_YMdgqpnSB0.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Open Sans';<br />
      font-style: italic;<br />
      font-weight: 700;<br />
      src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxolIZu-HDpmDIZMigmsroc4.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      @font-face {<br />
      font-family: 'Playfair Display';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Playfair Display'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CUR-13DsDU150T1bKbJZejI.woff2) format('woff2');<br />
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;<br />
      }<br />
      @font-face {<br />
      font-family: 'Playfair Display';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Playfair Display'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1CfoVn-aGdXvQRwgLLg-TkDk.woff2) format('woff2');<br />
      unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;<br />
      }<br />
      @font-face {<br />
      font-family: 'Playfair Display';<br />
      font-style: normal;<br />
      font-weight: 400;<br />
      src: local('Playfair Display'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v10/2NBgzUtEeyB-Xtpr9bm1Cdhy5e3cTyNKTHXrP9DO-Rc.woff2) format('woff2');<br />
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;<br />
      }<br />
      }<br />
      /* CLIENT-SPECIFIC STYLES */<br />
      body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }<br />
      table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }<br />
      img { -ms-interpolation-mode: bicubic; }<br />
      /* RESET STYLES */<br />
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }<br />
      table { border-collapse: collapse !important; }<br />
      body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }<br />
      /* iOS BLUE LINKS */<br />
      a[x-apple-data-detectors] {<br />
      color: inherit !important;<br />
      text-decoration: none !important;<br />
      font-size: inherit !important;<br />
      font-family: inherit !important;<br />
      font-weight: inherit !important;<br />
      line-height: inherit !important;<br />
      }<br />
	  .em_preheader a {<br />
	  color:#9da0b1;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_header a {<br />
	  color:#76798a;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_blk a {<br />
	  color:#333333;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_blk2 a {<br />
	  color:#000000;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_gray a {<br />
	  color:#98999b;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_gray2 a {<br />
	  color:#9da0b1;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_red a {<br />
	  color:#dd2b0d;<br />
	  text-decoration:none;<br />
	  }<br />
	  .em_wht a {<br />
	  color:#ffffff;<br />
	  text-decoration:none;<br />
	  }<br />
      @media screen and (min-width: 601px) {<br />
      .container {<br />
      width: 600px !important;<br />
      }<br />
      }<br />
      /* MOBILE STYLES */<br />
      @media screen and (max-width:600px){<br />
      .em_wrapper {<br />
      width:100% !important;<br />
      }<br />
      .em_pad {<br />
      padding:40px 10px 40px 10px !important;<br />
      }<br />
      .em_p1 {<br />
      padding-bottom:15px !important;<br />
      }<br />
      .em_font1 {<br />
      font-size:40px !important;<br />
      line-height:43px !important;<br />
      }<br />
      .em_brk {<br />
      display:block !important;<br />
      }<br />
      .em_hide {<br />
      display:none !important;<br />
      }<br />
      .em_center {<br />
      text-align:center !important;<br />
      }<br />
      }<br />
      /* ANDROID CENTER FIX */<br />
      div[style*="margin: 14px 0;"] { margin: 0 !important; }<br />
    &lt;/style&gt;<br />
  <br />
&lt;style type="text/css"&gt;<br />
<br />
&lt;/style&gt;<br />
&lt;/head&gt;<br />
  &lt;body style="background-color: #ffffff; margin: 0 !important; padding: 0 !important;"&gt;<br />
    &lt;div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"&gt;<br />
      Lorem ipsum dolor que ist<br />
    &lt;/div&gt;<br />
    &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"&gt;<br />
      &lt;!-- LOGO --&gt;<br />
      &lt;tr&gt;<br />
        &lt;td align="center" valign="top"&gt;<br />
          &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
          &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
            &lt;tr&gt;<br />
              &lt;td align="center" valign="top" width="600"&gt;<br />
                &lt;![endif]--&gt;<br />
                &lt;table align="center" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" style="border-bottom:1px solid #f1f1f1;"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="600"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" class="em_preheader" style="padding:15px; font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:15px; color:#9da0b1;"&gt;&lt;span style="color:#dd2b0d;"&gt;28 people&lt;/span&gt; bought this in the &lt;span style="color:#dd2b0d;"&gt;last 24 hours&lt;/span&gt;&lt;span class="em_brk"&gt;&lt;/span&gt;&lt;span class="em_hide"&gt; &amp;nbsp; &amp;nbsp;| &amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;a href="#" target="_blank" style="text-decoration:underline; color:#9da0b1; white-space:nowrap;"&gt;View Online&lt;/a&gt;&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="600"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="font-size:0; padding-top:20px;"&gt;<br />
                                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                  &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="left" valign="top" width="440"&gt;<br />
                                        &lt;![endif]--&gt;<br />
                                        &lt;div style="display:inline-block; max-width:440px; vertical-align:top; width:100%;"&gt;<br />
                                          &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:440px;"&gt;<br />
                                            &lt;tr&gt;<br />
                                              &lt;td align="left" valign="top"&gt;<br />
                                                &lt;table width="196" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="center" valign="top" style="padding-bottom:20px;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="logo.jpg" width="196" height="46" alt="LOGOHERE" border="0" style="display:block; font-family:'Open Sans', Arial, sans-serif; font-size:18px; line-height:22px; color:#76798a; font-weight:bold;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/td&gt;<br />
                                            &lt;/tr&gt;<br />
                                          &lt;/table&gt;<br />
                                        &lt;/div&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                      &lt;/td&gt;<br />
                                      &lt;td align="left" valign="top" width="160"&gt;<br />
                                        &lt;![endif]--&gt;<br />
                                        &lt;div style="display:inline-block; max-width:160px; vertical-align:top; width:100%; text-align:left;"&gt;<br />
                                          &lt;table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:160px;"&gt;<br />
                                            &lt;tr&gt;<br />
                                              &lt;td align="left" valign="top"&gt;<br />
                                                &lt;table width="160" align="left" cellpadding="0" cellspacing="0" border="0" class="em_wrapper"&gt;<br />
                                                  &lt;tr&gt;<br />
                                                    &lt;td align="center" valign="top" style="padding-bottom:20px;"&gt;<br />
                                                      &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="right" class="em_center" style="font-family:'Open Sans', Arial, sans-serif; font-size:16px; line-height:20px; color:#76798a; font-weight:300; padding-bottom:5px;"&gt;&lt;span class="em_header"&gt;CALL US TO ORDER&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                        &lt;tr&gt;<br />
                                                          &lt;td align="right" class="em_center"  style="font-family:'Open Sans', Arial, sans-serif; font-size:18px; line-height:22px; color:#76798a; font-weight:bold;"&gt;&lt;span class="em_header"&gt;&lt;a href="tel:+910909909090" style="text-decoration:none; color:#76798a;"&gt;+91 09099 09090&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                        &lt;/tr&gt;<br />
                                                      &lt;/table&gt;<br />
                                                    &lt;/td&gt;<br />
                                                  &lt;/tr&gt;<br />
                                                &lt;/table&gt;<br />
                                              &lt;/td&gt;<br />
                                            &lt;/tr&gt;<br />
                                          &lt;/table&gt;<br />
                                        &lt;/div&gt;<br />
                                        &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                  &lt;![endif]--&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" bgcolor="#fafafa"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="580"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="580"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:580px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding:40px 10px;" class="em_pad"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_font1" style="padding-bottom:15px; font-family:'Open Sans', Arial, sans-serif; font-size:48px; line-height:51px; color:#333333; font-weight:300;"&gt;&lt;span class="em_blk"&gt;Still thinking about it?&lt;/span&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_p1" style="padding-bottom:40px; font-family:'Lato', Arial, sans-serif; font-size:18px; line-height:21px; color:#98999b; font-weight:300;"&gt;&lt;span class="em_gray"&gt;If you still can’t decided, check out the reviews of recent purchasers.&lt;/span&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" class="em_p1" style="padding-bottom:35px;"&gt;&lt;img src="laptop.jpg" width="296" height="195" alt="" border="0" style="display:block; max-width:296px;"/&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_blk2" style="padding-bottom:15px; font-family:'Open Sans', Arial, sans-serif; font-size:24px; line-height:27px; color:#000000; font-weight:300;"&gt;Product Name&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_red" style="padding-bottom:15px; font-family:'Lato', Arial, sans-serif; font-size:16px; line-height:19px; color:#dd2b0d;"&gt;Cart expires in 3 days&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top"&gt;<br />
                                        &lt;table border="0" cellspacing="0" cellpadding="0" align="center"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="center" class="em_wht" style="border-radius: 22px;" bgcolor="#333333"&gt;&lt;a href="#" target="_blank" style="font-size: 13px; font-family:'Lato', Arial, sans-serif; color: #ffffff; border-radius: 22px; background-color: #333333; padding: 8px 25px; border: 1px solid #333333; display: block; text-decoration:none;"&gt;Grab It Now&lt;/a&gt;&lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="540"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="540"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:540px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding:40px 10px;" class="em_pad"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_blk2" style="padding-bottom:40px; font-family:'Open Sans', Arial, sans-serif; font-size:24px; line-height:27px; color:#000000; font-weight:bold;"&gt;CUSTOMER REVIEWS&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding-bottom:20px;"&gt;<br />
                                        &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="left" valign="top" width="40" style="padding-top:3px;"&gt;&lt;img src="img1.png" width="40" height="40" alt="" border="0" style="display:block;"&gt;&lt;/td&gt;<br />
                                            &lt;td width="15"&gt;&lt;/td&gt;<br />
                                            &lt;td align="left" valign="top"&gt;<br />
                                              &lt;table width="100%" align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_header" style="padding-bottom:12px; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:17px; color:#76798a; font-weight:bold;"&gt;Customer Name Here&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" valign="top" style="padding-bottom:6px;"&gt;<br />
                                                    &lt;table align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                      &lt;tr&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="10"&gt;&lt;img src="calendar.png" width="10" height="10" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:14px; color:#9da0b1; font-style:italic;"&gt;27 February 2017&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="67"&gt;&lt;img src="star.png" width="67" height="11" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                      &lt;/tr&gt;<br />
                                                    &lt;/table&gt;<br />
                                                  &lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:18px; color:#9da0b1;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies nibh quis tincidunt fringilla. Vestibulum ultricies magna quis tellus laoreet congue. Pellentesque imperdiet pretium dictum. &lt;span style="font-weight:bold; color:#dd2b0d; font-style:italic;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#dd2b0d;"&gt;Read more&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                              &lt;/table&gt;<br />
                                            &lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td height="1" style="border-top:1px dotted #999999;"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding:0 0 20px 0;"&gt;<br />
                                        &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="left" valign="top" width="40" style="padding-top:3px;"&gt;&lt;img src="img1.png" width="40" height="40" alt="" border="0" style="display:block;"&gt;&lt;/td&gt;<br />
                                            &lt;td width="15"&gt;&lt;/td&gt;<br />
                                            &lt;td align="left" valign="top"&gt;<br />
                                              &lt;table width="100%" align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_header" style="padding-bottom:12px; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:17px; color:#76798a; font-weight:bold;"&gt;Customer Name Here&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" valign="top" style="padding-bottom:6px;"&gt;<br />
                                                    &lt;table align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                      &lt;tr&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="10"&gt;&lt;img src="calendar.png" width="10" height="10" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:14px; color:#9da0b1; font-style:italic;"&gt;26 February 2017&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="67"&gt;&lt;img src="star.png" width="67" height="11" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                      &lt;/tr&gt;<br />
                                                    &lt;/table&gt;<br />
                                                  &lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:18px; color:#9da0b1;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies nibh quis tincidunt fringilla. Vestibulum ultricies magna quis tellus laoreet congue. Pellentesque imperdiet pretium dictum. &lt;span style="font-weight:bold; color:#dd2b0d; font-style:italic;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#dd2b0d;"&gt;Read more&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                              &lt;/table&gt;<br />
                                            &lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td height="1" style="border-top:1px dotted #999999;"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding:0 0 20px 0;"&gt;<br />
                                        &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="left" valign="top" width="40" style="padding-top:3px;"&gt;&lt;img src="img1.png" width="40" height="40" alt="" border="0" style="display:block;"&gt;&lt;/td&gt;<br />
                                            &lt;td width="15"&gt;&lt;/td&gt;<br />
                                            &lt;td align="left" valign="top"&gt;<br />
                                              &lt;table width="100%" align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_header" style="padding-bottom:12px; font-family:'Lato', Arial, sans-serif; font-size:14px; line-height:17px; color:#76798a; font-weight:bold;"&gt;Customer Name Here&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" valign="top" style="padding-bottom:6px;"&gt;<br />
                                                    &lt;table align="left" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                                      &lt;tr&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="10"&gt;&lt;img src="calendar.png" width="10" height="10" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:14px; color:#9da0b1; font-style:italic;"&gt;25 February 2017&lt;/td&gt;<br />
                                                        &lt;td width="10"&gt;&lt;/td&gt;<br />
                                                        &lt;td align="left" valign="middle" style="font-size:0px; line-height:0px;" width="67"&gt;&lt;img src="star.png" width="67" height="11" alt="" border="0" style="display:block;" /&gt;&lt;/td&gt;<br />
                                                      &lt;/tr&gt;<br />
                                                    &lt;/table&gt;<br />
                                                  &lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                                &lt;tr&gt;<br />
                                                  &lt;td align="left" class="em_gray2" style="font-family:'Lato', Arial, sans-serif; font-size:12px; line-height:18px; color:#9da0b1;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies nibh quis tincidunt fringilla. Vestibulum ultricies magna quis tellus laoreet congue. Pellentesque imperdiet pretium dictum. &lt;span style="font-weight:bold; color:#dd2b0d; font-style:italic;"&gt;&lt;a href="#" target="_blank" style="text-decoration:none; color:#dd2b0d;"&gt;Read more&lt;/a&gt;&lt;/span&gt;&lt;/td&gt;<br />
                                                &lt;/tr&gt;<br />
                                              &lt;/table&gt;<br />
                                            &lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center"&gt;<br />
                                        &lt;table border="0" cellspacing="0" cellpadding="0" align="center"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="center" class="em_wht" style="border-radius: 22px;" bgcolor="#333333"&gt;&lt;a href="#" target="_blank" style="font-size: 13px; font-family:'Lato', Arial, sans-serif; color: #ffffff; border-radius: 22px; background-color: #333333; padding: 8px 25px; border: 1px solid #333333; display: block; text-decoration:none;"&gt;More Reviews&lt;/a&gt;&lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="600"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" class="em_blk2" valign="top" style="font-family: 'Playfair Display', Georgia, 'Times New Roman', Times, serif; font-size:60px; line-height:63px; color:#000000;"&gt;Hurry!&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" class="em_blk2" style="padding-bottom:25px; font-family:'Open Sans', Arial, sans-serif; font-size:18px; line-height:21px; color:#000000;"&gt;Limited stock available.&lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding-bottom:50px;"&gt;<br />
                                  &lt;table border="0" cellspacing="0" cellpadding="0" align="center"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_wht" style="border-radius: 22px;" bgcolor="#333333"&gt;&lt;a href="#" target="_blank" style="font-size: 13px; font-family:'Lato', Arial, sans-serif; color: #ffffff; border-radius: 22px; background-color: #333333; padding: 8px 25px; border: 1px solid #333333; display: block; text-decoration:none;"&gt;Grab It Now&lt;/a&gt;&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top" bgcolor="#9da0b1"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="600"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding:30px 15px;"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" valign="top" style="padding-bottom:15px;"&gt;<br />
                                        &lt;table align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                          &lt;tr&gt;<br />
                                            &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="fb.png" width="31" height="32" alt="Facebook" border="0" style="display:block; font-family:'Open Sans', Arial, sans-serif; font-size:9px; line-height:22px; color:#ffffff;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                            &lt;td width="9"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="tw.png" width="31" height="32" alt="Twitter" border="0" style="display:block; font-family:'Open Sans', Arial, sans-serif; font-size:9px; line-height:22px; color:#ffffff;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                            &lt;td width="9"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="pint.png" width="32" height="32" alt="Pinterest" border="0" style="display:block; font-family:'Open Sans', Arial, sans-serif; font-size:9px; line-height:22px; color:#ffffff;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                            &lt;td width="9"&gt;&amp;nbsp;&lt;/td&gt;<br />
                                            &lt;td align="center" valign="top"&gt;&lt;a href="#" target="_blank" style="text-decoration:none;"&gt;&lt;img src="insta.png" width="31" height="32" alt="Instagram" border="0" style="display:block; font-family:'Open Sans', Arial, sans-serif; font-size:9px; line-height:22px; color:#ffffff;"/&gt;&lt;/a&gt;&lt;/td&gt;<br />
                                          &lt;/tr&gt;<br />
                                        &lt;/table&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_wht" style="font-family:'Open Sans', Arial, sans-serif; font-size:13px; line-height:22px; color:#ffffff;"&gt;Copyright © 2017 Sample lorem ipsum ltd.&lt;br&gt;<br />
                                        All Rights Reserved &amp;nbsp; | &amp;nbsp; &lt;a href="#" target="_blank" style="text-decoration:underline; color:#ffffff;"&gt;View Online&lt;/a&gt;&lt;span class="em_brk"&gt;&lt;/span&gt;&lt;span class="em_hide"&gt; &amp;nbsp; | &amp;nbsp; &lt;/span&gt;&lt;a href="#" target="_blank" style="text-decoration:underline; color:#ffffff;"&gt;Unsubscribe&lt;/a&gt;<br />
                                      &lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                  &lt;tr&gt;<br />
                    &lt;td align="center" valign="top"&gt;<br />
                      &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                      &lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
                        &lt;tr&gt;<br />
                          &lt;td align="center" valign="top" width="600"&gt;<br />
                            &lt;![endif]--&gt;<br />
                            &lt;table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"&gt;<br />
                              &lt;tr&gt;<br />
                                &lt;td align="center" valign="top" style="padding:15px;" class="em_pad"&gt;<br />
                                  &lt;table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"&gt;<br />
                                    &lt;tr&gt;<br />
                                      &lt;td align="center" class="em_gray2" style="font-family:'Open Sans', Arial, sans-serif; font-size:12px; line-height:18px; color:#9da0b1;"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ex ullamcorper mauris feugiat mollis ac at lorem. &lt;strong&gt;Phasellus urna nunc&lt;/strong&gt;, aliquam vitae dapibus ut, bibendum maximus urna. &lt;strong&gt;Suspendisse eget&lt;/strong&gt; pellentesque libero. Donec egestas libero vitae sodales sollicitudin.&lt;/td&gt;<br />
                                    &lt;/tr&gt;<br />
                                  &lt;/table&gt;<br />
                                &lt;/td&gt;<br />
                              &lt;/tr&gt;<br />
                            &lt;/table&gt;<br />
                            &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
                          &lt;/td&gt;<br />
                        &lt;/tr&gt;<br />
                      &lt;/table&gt;<br />
                      &lt;![endif]--&gt;<br />
                    &lt;/td&gt;<br />
                  &lt;/tr&gt;<br />
                &lt;/table&gt;<br />
                &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
              &lt;/td&gt;<br />
            &lt;/tr&gt;<br />
          &lt;/table&gt;<br />
          &lt;![endif]--&gt;<br />
        &lt;/td&gt;<br />
      &lt;/tr&gt;<br />
    &lt;/table&gt;<br />
      <br />
      &lt;!-- LITMUS ATTRIBUTION --&gt;<br />
      &lt;table border="0" cellpadding="0" cellspacing="0" width="100%"&gt;<br />
          &lt;tr&gt;<br />
              &lt;td bgcolor="#ffffff" align="center"&gt;<br />
                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
&lt;table align="center" border="0" cellspacing="0" cellpadding="0" width="600"&gt;<br />
&lt;tr&gt;<br />
&lt;td align="center" valign="top" width="600"&gt;<br />
&lt;![endif]--&gt;<br />
                  &lt;table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" &gt;<br />
                      &lt;tr&gt;<br />
                          &lt;td bgcolor="#ffffff" align="center" style="padding: 30px 30px 30px 30px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" &gt;<br />
                              &lt;p style="margin: 0;"&gt;This email was built and tested with Litmus. &lt;a href="https://litmus.com?utm_campaign=litmus_templates&amp;utm_source=litmus_community&amp;utm_medium=templates" style="color: #5db3ec;"&gt;What's Litmus?&lt;/a&gt;&lt;/p&gt;<br />
                          &lt;/td&gt;<br />
                      &lt;/tr&gt;<br />
                  &lt;/table&gt;<br />
                  &lt;!--[if (gte mso 9)|(IE)]&gt;<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
&lt;![endif]--&gt;<br />
              &lt;/td&gt;<br />
          &lt;/tr&gt;<br />
      &lt;/table&gt;<br />
      &lt;!-- END LITMUS ATTRIBUTION --&gt;<br />
      <br />
  &lt;/body&gt;<br />
&lt;/html&gt;
</code>

</pre>
							</section>
					</div>

				<!-- Footer -->
			</div>

		<!-- Scripts -->
		<?php include('../includes/footer.php'); ?>

	</body>
</html>