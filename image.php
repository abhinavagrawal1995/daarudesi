<img id="myimg" src="gallery/images/fulls/01.jpg">
<script>
	var img=document.getElementById('myimg');
	
	console.log(img);
	img.onload=function(){console.log(this.width+'x'+this.height);}
</script>