<?php
use \Model\Biztechpre;

class Controller_Biztechpre extends Controller
{
        public function action_index()
        {
                $data['title'] = 'BizTech Pre';
                return Response::forge(View::forge('biztechpre/index', $data));
        }

        public function post_index()
        {
                $post = Input::post();
                if(!empty($post)){
                    // database
                    $query = DB::insert('posting')
                                ->columns(array('name', 'mail_address', 'comment', 'post_time'))
                                ->values(array($post['name'], $post['mail'], $post['comment'], date('Y-m-d H:i:s')))
                                ->execute();
                }

                $data['title'] = 'BizTech Pre';
                return Response::forge(View::forge('biztechpre/index', $data));

        }

        public function action_404()
        {
                return Response::forge(Presenter::forge('biztechpre/404'), 404);
        }

}

