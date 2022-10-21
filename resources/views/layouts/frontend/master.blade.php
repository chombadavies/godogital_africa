<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.head_script')

</head>

<body>
	
	<div id="page">
		<header class="version_1" id="header-ajax">
			@include('layouts.frontend.header')
		</header>
   
		




    @yield('content')

		
	@include('layouts.frontend.footer')
 

	</div>
	<!-- page -->
	
@include('layouts.frontend.foot_script')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/6344fe2d54f06e12d8997c93/1gf2o1p8j';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

</body>
</html>