<?php
header('content-type: text/css');
include('fw/css_path.php');
?>
#container {
    background: url(<?php echo $path; ?>bg_content_01.jpg) repeat;
}
.inner01-common {
    background: url(<?php echo $path; ?>bg_header_02.png) no-repeat center center;
}
#header {
    background: url(<?php echo $path; ?>bg_header_01.jpg) repeat-x;
}
#header .logo a {
    background: url(<?php echo $path; ?>logo.png) no-repeat;
}

#topContentArea {
    background: url(<?php echo $path; ?>bg_header_02.png) no-repeat center center;
}
#topContentArea .left h1 {
    background: url(<?php echo $path; ?>popapps_catchphrase<?php echo $tail_string; ?>.png) no-repeat;
}
.c-index{
    background: url(<?php echo $path; ?>bg_content_01.jpg) repeat;
}
/* performanceArea
--------------------------------------------------*/
#contents #performanceArea {
    background: url(<?php echo $path; ?>bg_content_02.png) repeat-x;
}
#contents #performanceArea span {
    background: url(<?php echo $path; ?>box_performanceArea_01.png) no-repeat;
}
#contents #performanceArea span.point01 { background: url(<?php echo $path; ?>box_performanceArea_01.png) no-repeat;}
#contents #performanceArea span.point02 { background: url(<?php echo $path; ?>box_performanceArea_02.png) no-repeat;}

#contents .chooseArea .bgFree { background: url(<?php echo $path; ?>bg_choose_01.jpg) repeat; }
#contents .chooseArea .bgBlue { background: url(<?php echo $path; ?>bg_choose_02.jpg) repeat; }
#contents .chooseArea .bgLightBlue { background: url(<?php echo $path; ?>bg_choose_03.jpg) repeat; }
#contents .chooseArea ul.check li {
    background: url(<?php echo $path; ?>icon_choose_02.png) no-repeat;
}


#contents .chooseApp .bgFree { background: url(<?php echo $path; ?>bg_choose_01.jpg) repeat; }
#contents .chooseApp .bgBlue { background: url(<?php echo $path; ?>bg_choose_02.jpg) repeat; }
#contents .chooseApp .bgLightBlue { background: url(<?php echo $path; ?>bg_choose_03.jpg) repeat; }



/* demo */
#contents #demoArea {
    background: url(<?php echo $path; ?>demo_back.png) repeat-x;
}

#contents #demoArea span {
    background: url(<?php echo $path; ?>box_demoArea_01.png) no-repeat;
}
#contents #demoArea span.point-right01 {
    background: url(<?php echo $path; ?>box_demoArea_right_01.png) no-repeat;
}
#contents #demoArea span.point-right02 {
    background: url(<?php echo $path; ?>box_demoArea_right_02.png) no-repeat;
}
#contents #demoArea span.point-left01 {
    background: url(<?php echo $path; ?>box_demoArea_left_01.png) no-repeat;
}
#contents #demoArea span.point-left02 {
    background: url(<?php echo $path; ?>box_demoArea_left_02.png) no-repeat;
}
#contents #demoArea #demoHome span.point-right01 {
    background: url(<?php echo $path; ?>box_demoHome_right_01.png) no-repeat;
}
#contents #demoArea #demoHome span.point-right02 {
    background: url(<?php echo $path; ?>box_demoHome_right_02.png) no-repeat;
}