<?php
use \Model\Biztechpre;

class Controller_Biztechpre extends Controller
{
        public function action_index()
        {
                $data['title'] = 'BizTech Pre';
                $data['data'] = Biztechpre::get_results();
                return Response::forge(View::forge('biztechpre/index', $data));
        }

        public function action_404()
        {
                return Response::forge(Presenter::forge('biztechpre/404'), 404);
        }
}

