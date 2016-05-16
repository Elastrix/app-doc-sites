<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Video.js RTMP Example Embed</title>
  
  <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/4.11/video.js"></script>
  
</head>
<body>
<p>
Now Playing:
rtmp://${pageContext.request.getServerName()}/vod/big_buck_bunny.mp4</p>  
<video id="my_video_1" class="video-js vjs-default-skin" controls autoplay preload="auto" width="640" height="268" 
  data-setup='{}'>
    <source src="rtmp://${pageContext.request.getServerName()}/vod/big_buck_bunny.mp4" type='rtmp/mp4'>
  </video>
  
  <script>
  </script>
  
</body>
</html>
