<?php

/*
    POST & GET DATA

    we use the request object to use it;



        //get request data
        exit($request->query->get('page', 'default'));

        //get server data
        exit($request->server->get('HTTP_HOST'));
        $request->isXmlHttpRequest();//check whether the request is ajax or not
        $request->request->get('page'); //get post data
        $request->file->get('foo'); //get the 'foo' uploaded file


*/