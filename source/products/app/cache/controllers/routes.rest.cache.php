<?php
<<<<<<< HEAD
return array("/rest/weights/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"delete","parameters"=>array("*"),"name"=>"RestWeightscontroller-delete","cache"=>false,"duration"=>false)),"/rest/colors/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"delete","parameters"=>array("*"),"name"=>"RestColorscontroller-delete","cache"=>false,"duration"=>false)),"/rest/products/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"delete","parameters"=>array("*"),"name"=>"RestProductscontroller-delete","cache"=>false,"duration"=>false)),"/rest/sizes/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"delete","parameters"=>array("*"),"name"=>"RestSizescontroller-delete","cache"=>false,"duration"=>false)),"/rest/colors/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestColorscontroller-get","cache"=>false,"duration"=>false)),"/rest/sizes/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"update","parameters"=>array("*"),"name"=>"RestSizescontroller-update","cache"=>false,"duration"=>false)),"/rest/weights/(index/)?"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"index","parameters"=>array(),"name"=>"RestWeightscontroller-index","cache"=>false,"duration"=>false),"/rest/weights/add/"=>array("post"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"add","parameters"=>array(),"name"=>"RestWeightscontroller-add","cache"=>false,"duration"=>false)),"/rest/weights/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"update","parameters"=>array("*"),"name"=>"RestWeightscontroller-update","cache"=>false,"duration"=>false)),"/rest/weights/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestWeightscontroller-getOne","cache"=>false,"duration"=>false)),"/rest/weights/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestWeightscontroller-get","cache"=>false,"duration"=>false)),"/rest/sizes/connect/"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"connect","parameters"=>array(),"name"=>"RestSizescontroller-connect","cache"=>false,"duration"=>false),"/rest/sizes/(index/)?"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"index","parameters"=>array(),"name"=>"RestSizescontroller-index","cache"=>false,"duration"=>false),"/rest/sizes/add/"=>array("post"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"add","parameters"=>array(),"name"=>"RestSizescontroller-add","cache"=>false,"duration"=>false)),"/rest/sizes/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestSizescontroller-get","cache"=>false,"duration"=>false)),"/rest/sizes/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestSizescontroller","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestSizescontroller-getOne","cache"=>false,"duration"=>false)),"/rest/colors/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestColorscontroller-getOne","cache"=>false,"duration"=>false)),"/rest/products/connect/"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"connect","parameters"=>array(),"name"=>"RestProductscontroller-connect","cache"=>false,"duration"=>false),"/rest/products/(index/)?"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"index","parameters"=>array(),"name"=>"RestProductscontroller-index","cache"=>false,"duration"=>false),"/rest/products/add/"=>array("post"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"add","parameters"=>array(),"name"=>"RestProductscontroller-add","cache"=>false,"duration"=>false)),"/rest/products/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"update","parameters"=>array("*"),"name"=>"RestProductscontroller-update","cache"=>false,"duration"=>false)),"/rest/products/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestProductscontroller-getOne","cache"=>false,"duration"=>false)),"/rest/products/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductscontroller","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestProductscontroller-get","cache"=>false,"duration"=>false)),"/rest/colors/connect/"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"connect","parameters"=>array(),"name"=>"RestColorscontroller-connect","cache"=>false,"duration"=>false),"/rest/colors/(index/)?"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"index","parameters"=>array(),"name"=>"RestColorscontroller-index","cache"=>false,"duration"=>false),"/rest/colors/add/"=>array("post"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"add","parameters"=>array(),"name"=>"RestColorscontroller-add","cache"=>false,"duration"=>false)),"/rest/colors/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestColorscontroller","action"=>"update","parameters"=>array("*"),"name"=>"RestColorscontroller-update","cache"=>false,"duration"=>false)),"/rest/weights/connect/"=>array("controller"=>"controllers\\RestWeightscontroller","action"=>"connect","parameters"=>array(),"name"=>"RestWeightscontroller-connect","cache"=>false,"duration"=>false));
=======
return array("/rest/products/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestProductsController","action"=>"delete","parameters"=>array("*"),"name"=>"RestProductsController-delete","cache"=>false,"duration"=>false)),"/rest/products/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductsController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestProductsController-get","cache"=>false,"duration"=>false)),"/rest/products/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductsController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestProductsController-getOne","cache"=>false,"duration"=>false)),"/rest/products/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestProductsController","action"=>"update","parameters"=>array("*"),"name"=>"RestProductsController-update","cache"=>false,"duration"=>false)),"/rest/products/add/"=>array("post"=>array("controller"=>"controllers\\RestProductsController","action"=>"add","parameters"=>array(),"name"=>"RestProductsController-add","cache"=>false,"duration"=>false)),"/rest/products/(index/)?"=>array("controller"=>"controllers\\RestProductsController","action"=>"index","parameters"=>array(),"name"=>"RestProductsController-index","cache"=>false,"duration"=>false),"/rest/products/connect/"=>array("controller"=>"controllers\\RestProductsController","action"=>"connect","parameters"=>array(),"name"=>"RestProductsController-connect","cache"=>false,"duration"=>false));
>>>>>>> upstream/master
